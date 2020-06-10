<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Startups;
use Illuminate\Support\Facades\DB;
class SliderController extends Controller
{
    public function SliderApi(Request $request){
        
	
	if($request->api_key == 'abcd'){
       
        $slider = Slider::all();
        $message= array();
		foreach ($slider as $value) {
            if($request->header('accept-language') == 'en'){
                
                $message[]=[
              
                "id"=> $value->id,
                "title"=> $value->title_en,
                "description"=> $value->description_en,
                "button_text"=> $value->button_text_en,
                "button_color"=> $value->button_color,
                "button_background_color"=>$value->button_background_color,
                "button_url"=> $value->button_url,
                "layout_image"=> $value->layout_image,
                "front_circle_color"=> $value->front_circle_color,
                "back_circle_color"=>$value->back_circle_color,
                "status"=> $value->status,
                "slide_must"=> $value->slide_must,
                "duration"=> $value->duration,
                "created_at"=>$value->created_at,
                "updated_at"=> $value->updated_at
                ];
               
            }else if($request->header('accept-language') == 'az'){
                $message[]=[
              
                    "id"=> $value->id,
                    "title"=> $value->title,
                    "description"=> $value->description,
                    "button_text"=> $value->button_text,
                    "button_color"=> $value->button_color,
                    "button_background_color"=>$value->button_background_color,
                    "button_url"=> $value->button_url,
                    "layout_image"=> $value->layout_image,
                    "front_circle_color"=> $value->front_circle_color,
                    "back_circle_color"=>$value->back_circle_color,
                    "status"=> $value->status,
                    "slide_must"=> $value->slide_must,
                    "duration"=> $value->duration,
                    "created_at"=>$value->created_at,
                    "updated_at"=> $value->updated_at
                    ];
            }
        }
        
		return response()->json($message, 200, 
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

    public function SliderFavorApi(Request $request){

	
        if($request->api_key == 'abcd'){

            $slider = DB::table('startups')->Where('favor', '1')->get();
            foreach ($slider as $key => $value) {
            $data[]=[
                'id'=> $value->id,
                "title"=>$value->startup_title,
        "description"=>$value->startup_description,
        "button_text"=> "Ətraflı",
        "button_color"=> $value->startup_color,
       
            ];
            }
            return response()->json($data, 200, 
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
    
    $data['slider']= Slider::all()->SortBy('slide_must');
    return view('backend.slider.index', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);

   }
   
public function create(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

    return view('backend.slider.create',  ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
 
  $slider = Slider::where('id', $id)->first();
   return view('backend.slider.edit',   ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('slider', $slider);
 
}



public function stores(Request $request){

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'layout_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        "duration" => 'required',
    ]);


    if ($request->hasFile('layout_image')) {
        $request->validate([
            'layout_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file_name = uniqid() . '.' . $request->layout_image->getClientOriginalExtension();
        $request->layout_image->move('images/sliders', $file_name);
       
    } else {
        $file_name = null;
    }


    $Slider = Slider::insert(
        [
            "title" => $request->title,
            "description" => $request->description,
            "layout_image" => url('/').'/images/sliders/'.$file_name,
            "button_text" => $request->button_text,
            "title_en" => $request->title_en,
            "description_en" => $request->description_en,
            "button_text_en" => $request->button_text_en,
            "button_color" => $request->button_color,
            "button_background_color" => $request->button_background_color,
            "button_url" => $request->button_url,
            "duration"=>$request->duration,
            "front_circle_color" => $request->front_circle_color,
            "back_circle_color" => $request->back_circle_color,
            "status" => '1',
            "slide_must" => '0',
          
        ]
    );

    if ($Slider) {
        return redirect(route('slider'))->with('success', 'Uğurlu');
    }
    return back()->with('error', 'Uğursuz');
    
 }


 public function updates(Request $request, $id)
 {

     $request->validate([
        'title' => 'required',
        'description' => 'required',
        'button_url' =>'required',
        'button_text' =>'required'
        
     ]);


     if ($request->hasFile('layout_image')) {
         $request->validate([
             'layout_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
         ]);
         $file_name = uniqid() . '.' . $request->layout_image->getClientOriginalExtension();
        
         $path = 'images/sliders/' . $request->layout_image_old;
         if (file_exists($path)) {
             @unlink($path);
         }
         $request->layout_image->move('images/sliders', $file_name);

             $Slider = Slider::Where('id', $id)->update(
                 [
                    "title" => $request->title,
                    "description" => $request->description,
                    "layout_image" => url('/').'/images/sliders/'.$file_name,
                    "button_text" => $request->button_text,
                    "button_color" => $request->button_color,
                    "button_background_color" => $request->button_background_color,
                    "button_url" => $request->button_url,
                    "title_en" => $request->title_en,
            "description_en" => $request->description_en,
            "button_text_en" => $request->button_text_en,
                    "front_circle_color" => $request->front_circle_color,
                    "back_circle_color" => $request->back_circle_color,
                    "status" => '1',
                 ]
             );
    


     

     } else {

         $Slider = Slider::Where('id', $id)->update(
                 [
                    "title" => $request->title,
                    "description" => $request->description,
                    "title_en" => $request->title_en,
                    "description_en" => $request->description_en,
                    "button_text_en" => $request->button_text_en,
                    "button_text" => $request->button_text,
                    "button_color" => $request->button_color,
                    "button_background_color" => $request->button_background_color,
                    "button_url" => $request->button_url,
                    
                    "front_circle_color" => $request->front_circle_color,
                    "back_circle_color" => $request->back_circle_color,
                    "status" => '1',
                 ]
             );


     }

     if ($Slider) {
         return back()->with('success', 'Uğurlu');
     }
     return back()->with('error', 'Uğursuz');
 }

  public function destroy($id)
 {
     $Slider = Slider::find(intval($id));
   $path = 'images/sliders/' . $Slider->layout_image;
         if (file_exists($path)) {
             @unlink($path);
         }
     if ($Slider->delete()) {

      return back()->with('success', 'Uğurlu');
     }
 return back()->with('error', 'Uğursuz');
 }
 public function sortable()
 {
//        print_r($_POST['item']);

     foreach ($_POST['item'] as $key => $value) {
         $slider = Slider::find(intval($value));
         $slider->slide_must = intval($key);
         $slider->save();
     }
     echo true;
 }
 
}
