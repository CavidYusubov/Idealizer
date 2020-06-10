<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProgramsController extends Controller
{
  
public function indexApi(Request $request){
    if($request->api_key == 'abcd'){
    
        $programs = DB::table('programs')->orderBy('id','desc')->get();
       
        return response()->json($programs, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    
        }else{
  
        return response()->json([ 'errors' => ['Api key is incorrect']]);
        }
}
	public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
    $data['programs']= DB::table('programs')->orderBy('id','desc')->get();
    return view('backend.programs.index',compact('data'),  ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}



public function create(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	   return view('backend.programs.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	 $programs = DB::table('programs')->where('id', $id)->first();
      return view('backend.programs.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('programs', $programs);
	
}



public function store(Request $request){
    $request->validate([
        
            'title' => 'required|Max:255'

        ]);
  $programs = DB::table('programs')->insert(
            [
                "title" => $request->title,
                "description" => $request->description,
               
            ]
        );

        if ($programs) {
            return redirect(route('programs.Index'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


      public function update(Request $request, $id)
    {
    	 $programs = DB::table('programs')->Where('id', $id)->update(
                    [
                        "title" => $request->title,
                        "description" => $request->description,
                        
                    ]
                );

   if ($programs) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


     public function destroy($id)
    {
        $user = DB::table('programs')->where('id',intval($id));
        if ($user->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

}
