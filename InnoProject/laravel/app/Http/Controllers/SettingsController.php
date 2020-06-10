<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Illuminate\Support\Facades\DB;
class SettingsController extends Controller
{
    public function index( Request $request){

    	if($request->api_key == 'abcd'){

        $settings = Settings::find(9);
        $settings_tvitter = Settings::find(11);
        $settings_lnkdn = Settings::find(12);
        $settings_instagram = Settings::find(10);
        $settings_email = Settings::find(7);
        $settings_adress = Settings::find(8);
        $settings_phone = Settings::find(6);
        $myObj=new \stdClass();
        $jsons=json_decode($settings.JSON_FORCE_OBJECT);
		
		return response()->json(["social"=>["facebook"=>$settings->settings_description,
        "twitter"=>$settings_tvitter->settings_description ,
        "linkedin"=>$settings_lnkdn->settings_description,
        "instagram"=>$settings_instagram->settings_description],"contact"=>[
            "email"=>$settings_email->settings_description,
        "address"=>$settings_adress->settings_description,
     "phone"=>$settings_phone->settings_description,
        ]], 200, 
		['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT );
    
		}else{
		$message= array();
		$message[]=[
		'message' => ' Api key is incorrect'

		];
		return response()->json($message);
    	}
}

   public function read()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        $data['adminSettings'] = Settings::all()->sortBy('settings_must');
        return view('backend.settings.index', compact('data'),  ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $settings = Settings::find(intval($value));
            $settings->settings_must = intval($key);
            $settings->save();
        }

        echo true;
    }

    public function destroy($id)
    {
        $settings = Settings::find($id);

        if ($settings->delete()) {
            return back()->with('success', 'Uğurlu');
        }

        return back()->with('error', 'Uğursuz');
    }

    public function edit($id)
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        $settings=Settings::where('id',$id)->first();
        return view('backend.settings.edit', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('settings',$settings);
    }

    public function update(Request $request,$id)
    {

        if ($request->hasFile('settings_value'))
        {
                $request->validate([
                    'settings_value' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);

                $file_name=uniqid().'.'.$request->settings_value->getClientOriginalExtension();
                $request->settings_value->move(public_path('images/settings'),$file_name);
                $request->settings_value=$file_name;
        }



       $settings=Settings::Where('id',$id)->update(
           [
               "settings_value" => $request->settings_value
           ]
       );

       if ($settings)
       {
           $path='images/settings/'.$request->old_file;
           if (file_exists($path))
           {
               @unlink(public_path($path));
           }

           return back()->with("success","Uğurlu");
       }
        return back()->with("error","Uğursuz");

    }


}
