<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SettingsController extends Controller
{
    public function index(){
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        $settings = DB::table('settings')->first();
      

        return view('Backend.settings.index',['count_question'=>$count_question,'settings'=>$settings]);
    }
    public function update(Request $request)
    {
   
            $settings=DB::table('settings')->update(
                [
                    
                    "site_header" => $request->site_header,
                    "site_description"=>$request->site_description,
                    "site_keys"=>$request->site_keys,
                    "address" => $request->address,
                    "fb_url"=>$request->fb_url,
                    "ytb_url"=>$request->ytb_url,
                    "email"=>$request->email,
                    ]
            );
        





        if ($settings)
        {
            return back()->with('successs','Yeniləndi');
        }
        return back()->with('errorr','Problem baş verdi');
    }
    }

