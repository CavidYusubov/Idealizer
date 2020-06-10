<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Abouts;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Imagick;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class AboutController extends Controller
{
    public function AboutApi(Request $request){


        if($request->api_key == 'abcd'){

        $Abouts = Abouts::all();
            $about_content = DB::table('abouts_content')->get();
            $message= array();
            $Aboutss=array();
            $about_contents=array();
foreach ($about_content as  $value) {
    if($request->header('accept-language') == 'en'){
        $about_contents[]=[
            "id"=> $value->id,
            "title"=> $value->title_en,
            "description"=> $value->description_en,
            "image"=> $value->image,
        ];

  }else if($request->header('accept-language') == 'az'){
    $about_contents[]=[
        "id"=> $value->id,
        "title"=> $value->title,
        "description"=> $value->description,
        "image"=> $value->image,
    ];

  }
}

       foreach ($Abouts as  $value) {
        if($request->header('accept-language') == 'en'){
            $Aboutss[]=[
                "id"=> $value->id,
            "title"=> $value->title_en,
            "Description"=> $value->description_en,
            "video"=> $value->video,
            "created_at"=> $value->created_at,
            "updated_at"=> $value->updated_at
            ];

      }else if($request->header('accept-language') == 'az'){
        $Aboutss[]=[
            "id"=> $value->id,
        "title"=> $value->title,
        "Description"=> $value->description,
        "video"=> $value->video,
        "created_at"=> $value->created_at,
        "updated_at"=> $value->updated_at
        ];

      }
       }
            return response()->json(array('about_us'=>$Aboutss,'about_content'=>$about_contents), 200, 
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

public function index(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
    $data['about']= Abouts::all();
    $about_content=DB::table('abouts_content')->get();
    return view('backend.about_us.index',compact('data'),['about_content' => $about_content,'notifications' =>$notification,'count_n'=>count($count_notify)]);
}
public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
    $data= Abouts::where('id', $id)->first();
    $about_content=DB::table('abouts_content')->get();
    return view('backend.about_us.edit',['about_content' => $about_content,'data' => $data,'notifications' =>$notification,'count_n'=>count($count_notify)]);
}

public function updatess(Request $request, $id)
{

    $request->validate([
       'about_title' => 'required',
       'about_description' => 'required',
       
       
    ]);


    if ($request->hasFile('content_image_1')) {
        $request->validate([
            'content_image_1' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $file_name = uniqid() . '.' . $request->content_image_1->getClientOriginalExtension();
       
        $path = 'images/about/' . $request->old_file_1;
        if (file_exists($path)) {
            @unlink($path);
        }
        $request->content_image_1->move('images/sliders', $file_name);

            $About_content = DB::table('abouts_content')->Where('id', '1')->update(
                [ "image" => url('/').'/images/about/'.$file_name, ]);
    }

    if ($request->hasFile('content_image_2')) {
        $request->validate([
            'content_image_2' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $file_name = uniqid() . '.' . $request->content_image_2->getClientOriginalExtension();
       
        $path = 'images/about/' . $request->old_file_2;
        if (file_exists($path)) {
            @unlink($path);
        }
        $request->content_image_2->move('images/sliders', $file_name);

            $About_content = DB::table('abouts_content')->Where('id', '2')->update(
                [ "image" => url('/').'/images/about/'.$file_name, ]);
    }

    if ($request->hasFile('content_image_3')) {
        $request->validate([
            'content_image_3' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $file_name = uniqid() . '.' . $request->content_image_3->getClientOriginalExtension();
       
        $path = 'images/about/' . $request->old_file_3;
        if (file_exists($path)) {
            @unlink($path);
        }
        $request->content_image_3->move('images/sliders', $file_name);

            $About_content = DB::table('abouts_content')->Where('id', '3')->update(
                [ "image" => url('/').'/images/about/'.$file_name, ]);
    }

    $About_content_1 = DB::table('abouts_content')->Where('id', '1')->update(
        [  
            "title" => $request->content_title_1,
           "description" => $request->content_description_1,
           "title_en" => $request->content_title_en_1,
           "description_en" => $request->content_description_en_1,
           ]);
    $About_content_2 = DB::table('abouts_content')->Where('id', '2')->update(
            [  "title" => $request->content_title_2,
               "description" => $request->content_description_2,
               "title_en" => $request->content_title_en_2,
               "description_en" => $request->content_description_en_2,
               ]);
    $About_content_3 = DB::table('abouts_content')->Where('id', '3')->update(
           [  "title" => $request->content_title_3,
                   "description" => $request->content_description_3,
                   "title_en" => $request->content_title_en_3,
                   "description_en" => $request->content_description_en_3,
                   ]);

     
               $About = Abouts::Where('id', $id)->update(
                [
                   "title" => $request->about_title,
                   "description" => $request->about_description,
                   "title_en" => $request->about_title_en,
                   "description_en" => $request->about_description_en,
                   "video" => $request->about_video,
                   
                ]
            );


    

    if ($About) {
        return back()->with('success', 'Uğurlu');
    }
    return back()->with('error', 'Uğursuz');
}


}
