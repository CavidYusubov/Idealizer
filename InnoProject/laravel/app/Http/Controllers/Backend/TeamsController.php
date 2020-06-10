<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teams;
use App\Startups;
use App\User;
use App\Imagick;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class TeamsController extends Controller
{
    
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
public function TeamsApi(Request $request){

	
	if($request->api_key == 'abcd'){

		$teams = teams::all();
		foreach ($teams as $key => $value) {
		/*return $value->settings_description;*/
		}
		return response()->json($teams, 200, 
		['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    
		}else{
		$message= array();
		$message[]=[
		'message' => ' Api key is incorrect'

		];
		return response()->json($message);
    	}
}
    public function index()
    {
        $data['teams'] = Teams::all();
       
    
     $count = Teams::all()->where('teams_check','0' )->count();
     $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
     $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    
         return view('backend.teams.index', compact('data'),['count'=>$count,'notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

       public function requests()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
     $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
  
        $data['teams'] = Teams::all()->where('teams_check','0' )->sortBy('teams_must');
        return view('backend.teams.request', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
     $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
    	$users= User::all();
    	$startups= Startups::all();
        return view('backend.teams.create',['users'=>$users,'startups'=>$startups,'notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        // $request->teams_members=implode(",",$request->teams_members);
// return trim('"',$request->teams_members);

        $request->validate([
            'teams_title' => 'required',
            'teams_description' => 'required',
           
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move('images/teams/', $file_name);
            // Storage::disk('local')->put($file_name, 'images/teams/');
        } else {
            $file_name = null;
        }


        $teams = Teams::insert(
            [
                "teams_logo" => url('/').'/images/teams/'.$file_name,
                "teams_title" => $request->teams_title,
                "teams_description" => $request->teams_description,//İşlem
                
            ]
        );

        if ($teams) {
            return redirect(route('teams.index'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::all();
        $Startups= Startups::all();
        $teams = Teams::where('id', $id)->first();  
     
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
 
        
        return view('backend.teams.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('teams', $teams);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'teams_title' => 'required',
            'teams_description' => 'required',
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move('images/teams/', $file_name);
       $teams = Teams::Where('id', $id)->update(
            [
                "teams_logo" => url('/').'/images/teams/'.$file_name,
                "teams_title" => $request->teams_title,
                "teams_description" => $request->teams_description,//İşlem
               
                
            ]
        );
         $path = 'images/teams/' . $request->old_file;
            if (file_exists($path)) {
                @unlink($path);
            }

        } else {
          $teams = Teams::Where('id', $id)->update(
            [
                "teams_title" => $request->teams_title,
                "teams_description" => $request->teams_description,//İşlem
            
                
            ]
        );
        }

 
        if ($teams) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = teams::find(intval($id));
        $path = 'images/teams/' . $teams->teams_logo;
        if (file_exists($path)) {
            @unlink($path);
        }
        if ($teams->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }



public function block($id){
 $teams= teams::find(intval($id));
 $teams->teams_status;
 $teams_update_status=teams::Where('id', $id)->update([

    'teams_status' => '0'

 ]);
 if($teams_update_status){
    return back()->with('success', 'Istifadəçi blok edildi');
 }
 return back()->with('error', 'Uğursuz');



}
public function unblock($id){
 $teams= Teams::find(intval($id));
 $teams->Teams_status;
 $teams_update_status=teams::Where('id', $id)->update([

    'teams_status' => '1'

 ]);
 if($teams_update_status){
    return back()->with('success', 'Istifadəçi aktiv edildi');
 }
 return back()->with('error', 'Uğursuz');



}

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $teamss = Teams::find(intval($value));
            $teamss->teams_must = intval($key);
            $teamss->save();
        }
        echo true;
    }
}
