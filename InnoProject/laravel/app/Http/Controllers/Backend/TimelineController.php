<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Timelines;
use Illuminate\Support\Facades\DB;
class TimelineController extends Controller
{
    public function TimelineApi(Request $request){
 
	
        if($request->api_key == 'abcd'){

            $TImelines = DB::table('timelines')->orderBy('id','desc')->limit(3)->get();
            $message= array();
            foreach ($TImelines as $value) {
                
                $message[]=[
                'title' => $value->title,
                'image' => $value->image,
                'date' => date('d.m.Y',$value->date)
        
                ];
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
}
