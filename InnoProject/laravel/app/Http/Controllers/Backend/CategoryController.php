<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\File;
class CategoryController extends Controller
{
    
    
	public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    
    $data['Category']= Category::all()->SortBy('id');
    return view('backend.Category.index',compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function CategoryApi(Request $request){

	
	if($request->api_key == 'abcd'){

		$settings = Category::all();
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
   
	   return view('backend.Category.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    
	 $Category = Category::where('id', $id)->first();
      return view('backend.Category.edit',  ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('Category', $Category);
	
}



public function store(Request $request){
  
        $request->validate([
            'title' => 'required',
           
           
        ]);


        // if ($request->hasFile('file')) {
        //     $request->validate([
        //         'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        //     ]);

        //     $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
        //     $request->file->move(public_path('images/Category'), $file_name);
        // } else {
        //     $file_name = null;
        // }


        $Category = Category::insert(
            [
                "title" => $request->title,
                "description" => $request->description,
               
              
            ]
        );

        if ($Category) {
            return redirect(route('Category.Index'))->with('success', 'Uğurlu');
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
            $path = 'images/Category/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
            $request->file->move(public_path('images/Category'), $file_name);
    
                $Category = Category::Where('id', $id)->update(
                    [
                         "title" => $request->title,
               			 "description" => $request->description,
                		 "file" => $file_name,//İşlem
                    ]
                );
       


        

        } else {

            $Category = Category::Where('id', $id)->update(
                    [
                         "title" => $request->title,
                		"description" => $request->description,
                		
                    ]
                );


        }

        if ($Category) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

     public function destroy($id)
    {
        $Category = Category::find(intval($id));
      $path = 'images/Category/' . $Category->file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        if ($Category->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

    

}
