<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Howitworks;
use \DB;
class HowitworksController extends Controller
{
    public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
        $Howitworks=Howitworks::all();
        return view('backend.howitworks.index',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('howitworks',$Howitworks);
    }
    public function IndexApi(Request $request){

        
	
        if($request->api_key == 'abcd'){
    
            $howitworks=Howitworks::all();
           
            foreach ($howitworks as $key => $value) {
                if($request->header('accept-language') == 'en'){
                    $howitworks[$key]['title'] = $value->title_en;
                    $howitworks[$key]['description']  = $value->description_en;
                     }
          
           $data[]=[
          
            'title'=>$value->title,
            ];
        
            }
            return response()->json($howitworks, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        
            }else{
      
            return response()->json([ 'errors' => ['Api key is incorrect']]);
            }
    }

    public function DetailApi(Request $request,$id){

        
        if($request->api_key == 'abcd'){
    
            $Howitworks = Howitworks::find(intval($id));
           if($Howitworks){
            if($request->header('accept-language') == 'en'){
                $data=[
                    'id'=>$Howitworks->id,
                    'title'=>$Howitworks->title_en,
                    'icon' => $Howitworks->icon,
                    'description' => $Howitworks->description_en,
                ];
          
                 } else{
            $data=[
            'id'=>$Howitworks->id,
            'title'=>$Howitworks->title,
            'icon' => $Howitworks->icon,
            'description' => $Howitworks->description,
        ];
        
    }
            return response()->json($data, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
           }else{
                return response()->json(['errors'=>[ 'Məlumat tapılmadı']]);
            }
            }else{
          
            
            return response()->json([ 'message' => ' Api key is incorrect']);
            }
    }


    public function edit($id)
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
        
   
        $Howitworks=Howitworks::where('id',$id)->first();
       
        return view('backend.howitworks.edit', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('howitworks',$Howitworks);
    }

    public function update(Request $request,$id){
        if ($request->hasFile('icon'))
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'icon' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->icon->getClientOriginalExtension();
            $request->icon->move('images/howitworks',$file_name);
            $path = 'images/howitworks/' . $request->old_file;
            if (file_exists($path)) {
                @unlink($path);
            }
            $howitworks=Howitworks::Where('id',$id)->update(
                [
                    "title" => $request->title,
                    "title_en" => $request->title_en,
                    "icon" => url('/').'/images/howitworks/'.$file_name,
                    "description" => $request->description,
                    "description_en" => $request->description_en,
                    "status" => $request->status,
                ]
            );

            $path= $request->old_file;
            if (file_exists($path))
            {
                @unlink($path);
            }

        } else {
            $howitworks=Howitworks::Where('id',$id)->update(
                [
                    "title_en" => $request->title_en,
                    "description_en" => $request->description_en,
                   
                    "title" => $request->title,
                    "description" => $request->description,
                    "status" => $request->status,
                ]
            );
        }
     
        if ($howitworks)
        {
            return back()->with('success','Uğurlu');
        }
        return back()->with('error','Uğursuz');
    }
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
   
            return view('backend.howitworks.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }


    public function no(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'icon' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
    ]);

        if ($request->hasFile('icon'))
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'icon' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
            ]);

             $file_name=uniqid().'.'.$request->icon->getClientOriginalExtension();
            $request->icon->move('images/howitworks/',$file_name);
        } else {
            $file_name=null;
        }


        $Howitworks=Howitworks::insert(
          [
            "title_en" => $request->title_en,
            "description_en" => $request->description_en,
            "title" => $request->title,
            "icon" => url('/').'/images/howitworks/'.$file_name,
            "description" => $request->description,
            "status" => $request->status,
          ]
      );

      if ($Howitworks)
      {
          return redirect(route('howitworks.Index'))->with('success','Uğurlu');
      }
        return back()->with('error','Uğursuz');
    }

    public function destroy($id)
    {
      
       $blog=Howitworks::find(intval($id));
       $path = 'images/howitworks/' . $blog->blog_file;
       if (file_exists($path)) {
           @unlink($path);
       }
       if ($blog->delete())
       {
           echo 1;
       }
       echo 0;
    }

}
