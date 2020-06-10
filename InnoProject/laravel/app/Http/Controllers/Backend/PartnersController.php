<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partners;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\File;
class PartnersController extends Controller
{
    
	public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
    $data['Partners']= Partners::all()->SortBy('id');
    return view('backend.partners.index',compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function PartnersApi(Request $request){

	
	if($request->api_key == 'abcd'){

		$settings = Partners::all();
		foreach ($settings as $key => $value) {
		/*return $value->settings_description;*/
		}
		return response()->json($settings, 200, 
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


public function create(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	   return view('backend.partners.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
	 $Partners = Partners::where('id', $id)->first();
      return view('backend.partners.edit', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('Partners', $Partners);
	
}



public function store(Request $request){
  
        $request->validate([
            'title' => 'required',
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
           
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move('images/Partners', $file_name);
        } else {
            $file_name = null;
        }


        $Partners = Partners::insert(
            [
                "title" => $request->title,
                "description" => $request->description,
                "file" => url('/').'/images/Partners/'.$file_name,//İşlem
              
            ]
        );

        if ($Partners) {
            return redirect(route('Partners.Index'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
           
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $path = 'images/Partners/' . $request->old_file;
            if (file_exists($path)) {
                @unlink($path);
            }
            $request->file->move('images/Partners', $file_name);
    
                $Partners = Partners::Where('id', $id)->update(
                    [
                         "title" => $request->title,
               			 "description" => $request->description,
                		 "file" => url('/').'/images/Partners/'.$file_name,//İşlem
                    ]
                );
       


        

        } else {

            $Partners = Partners::Where('id', $id)->update(
                    [
                         "title" => $request->title,
                		"description" => $request->description,
                		
                    ]
                );


        }

        if ($Partners) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

     public function destroy($id)
    {
        $Partners = Partners::find(intval($id));
        if($Partners){
      $path = 'images/partners/' . $Partners->file;
            if (file_exists($path)) {
                @unlink($path);
                if ($Partners->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
            }
            else{
                if ($Partners->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');

            }
        
    }

    
}
}
