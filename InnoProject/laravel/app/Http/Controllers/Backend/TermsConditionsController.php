<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TermsCOnditions;
class TermsConditionsController extends Controller

{
    public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    
        $terms=TermsCOnditions::all();
        return view('backend.terms_conditions.index', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('terms',$terms);
    }

    public function Api(Request $request){
        if($request->api_key == 'abcd'){
    
            $terms = DB::table('terms_c_onditions')->first();
           
                if($request->header('accept-language') == 'en'){
                    $terms->title = $terms->title_en;
                    $terms->description  = $terms->description_en;
                     }
            
           
          
            return response()->json($terms, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        
            }else{
      
            return response()->json([ 'errors' => ['Api key is incorrect']]);
            }

    }

    public function edit($id)
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        $terms=TermsCOnditions::where('id',$id)->first();
       
        return view('backend.terms_conditions.edit', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('terms',$terms);
    }

    public function update(Request $request){
  
        $terms=DB::table('terms_c_onditions')->update([
            'title' => $request->title,
            'description' => $request->description,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en
        ]);
        if ($terms)
        {
            return back()->with('success','Uğurlu');
        }
        return back()->with('error','Uğursuz');
    }

}
