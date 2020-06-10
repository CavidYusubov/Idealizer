<?php

namespace App\Http\Controllers\Backend;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Konkurs;
use App\ActionPlans;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Mail;
class KonkursController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Api( Request $request){

        if($request->api_key == 'abcd'){
            
        $Konkurs =  Konkurs::all();
        $actionplans = ActionPlans::all();
        
        foreach ($Konkurs as $key => $value) {
            if($request->header('accept-language') == 'en'){
                $Konkurs[$key]['konkurs_terms_of_participation'] = $value->konkurs_terms_of_participation_en;
                $Konkurs[$key]['konkurs_description'] = $value->konkurs_description_en;
                 }
            // $action=ActionPlans::where('konkurs_id', $value->id)->get(); 
            // $all_action[]=$action;
            $Konkursall[] = DB::table('konkurs')
          
            ->join('action_plans', 'action_plans.konkurs_id', '=', 'konkurs.id')
            ->where('action_plans.konkurs_id','=', $value->id)
            ->get();

            $data['konkurs'] = Konkurs::all();
            foreach($data['konkurs'] as  $konkurs){
                $start_time = ActionPlans::where('konkurs_id', $value->id)->first();
             

                $arr_all_start_end = [
                    'konkurs_id' => $value->id,
                    'start_date' =>  $start_time->action_start_day
                ];
              
    
            }
            $countcomp = DB::table('competition_members')->count();
            foreach($data['konkurs'] as $konkurs){
                $end_time = ActionPlans::where('konkurs_id', $value->id)->get()->last();
                $arr_all_start_end += [
                    'end_date' =>   $end_time->action_end_day,
                ];
                
    
            }
            $amount_of_prize = [
                'amount_of_prize' =>  $value->konkurs_prize
            ];
            $amount_of_members = [
                'amount_of_members' => $countcomp
            ];
        }
      foreach ($actionplans as $key => $value) {
        if($request->header('accept-language') == 'en'){
            $actionplans[$key]['action_description'] = $value->action_description_en;
         
             }
      }
           
    
        return response()->json(array('konkurs'=>$Konkurs, 'action_plans' =>$actionplans, 'timer' => $arr_all_start_end,'amount_of_prize' => $amount_of_prize,'amount_of_members'=>$amount_of_members) , 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    
        }else{
        $message= array();
        $message[]=[
        'message' => 'Api key is incorrect'

        ];
        return response()->json($message);
       
        }
}
    public function index()
    {
        $actionplans = ActionPlans::all();
        $data['konkurs'] = Konkurs::all()->sortBy('id');
        foreach($data['konkurs'] as $konkurs){
            $start_time[] = ActionPlans::where('konkurs_id', $konkurs->id)->first();
          

        }
        foreach($data['konkurs'] as $konkurs){
            $end_time[] = ActionPlans::where('konkurs_id', $konkurs->id)->get()->last();
          

        }
        
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
 
        return view('backend.konkurs.index',compact('data'),
        ['actionplans'=>$actionplans,'start_time'=>$start_time,'end_time'=>$end_time,'notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function ESdatediff($time1, $time2) {
        /*
         * Get different between two times in PHP.
         * @param (timespan):required $time1  First timespan parameter.
         * @param (timespan):required $time2 Second timespan parameter. 
         * 
         * @return (array) Different between two times as an array.
         */
        $tmp = $time1;
        if ($time1 < $time2) { $time1 = $time2; $time2 = $tmp; }
        $tmp = $time1 - $time2;
        $minute = 60; $hour = 3600; $day = 86400; $month = 2419200; $year = 31536000;
        $return = array('years' => 0,'months' => 0,'days' => 0,'hours' => 0,'minutes' => 0);
        if ($year < $tmp) {
            $return['years'] = intval($tmp / $year);
            $tmp = $tmp - ( $return['years'] * $year ); }
        if ($month < $tmp) {
            $return['months'] = intval($tmp / $month);
            $tmp = $tmp - ( $return['months'] * $month ); }
        if ($day < $tmp) {
            $return['days'] = intval($tmp / $day);
            $tmp = $tmp - ( $return['days'] * $day ); }
        if ($hour < $tmp) {
            $return['hours'] = intval($tmp / $hour);
            $tmp = $tmp - ( $return['hours'] * $hour ); }
        if ($minute < $tmp) {
            $return['minutes'] = intval($tmp / $minute);
            $tmp = $tmp - ( $return['minutes'] * $minute ); }
        $return['seconds'] = $tmp;
        return $return;
    }
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        return view('backend.konkurs.create',['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $table = DB::select("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'cavid_idealizer' AND TABLE_NAME = 'konkurs'");
        if (!empty($table)) { $id_konkurs= $table[0]->AUTO_INCREMENT; }
        $id_konkurs= $table[0]->AUTO_INCREMENT; 
        if ($request->hasFile('konkurs_image'))
        {
        	
        	
            $request->validate([
                'konkurs_title' => 'required',
                'konkurs_action_plan_description' => 'required',
                'konkurs_terms_of_participation' => 'required',
            
               
               
                
            ]);
            $file_name=uniqid().'.'.$request->konkurs_image->getClientOriginalExtension();
            $request->konkurs_image->move('images/konkurs',$file_name);
           
        } else {
            $file_name=null;
        }
        
        $answers = new ActionPlans;
        if($request->hasFile('tedbir_icon')){
        foreach ($request->tedbir_icon as $file) {
       
        
            
                
              
            $file_name_icon=uniqid().'.'.$file->getClientOriginalExtension();
          $file->move('images/konkurs/actions_icons', $file_name_icon);
          $name_of_icon[]=$file_name_icon;

}
}else{
$file_name_icon = 'null';
}
    
        for ($i = 0; $i < count($request->tedbir_adi); $i++) {
          
            $answers = [
            'action_title'=>$request->tedbir_adi[$i],
            'action_description'=>$request->konkurs_action_plan_description[$i],
            'action_icon'=> url('/').'/images/konkurs/actions_icons/'.$name_of_icon[$i],
            'action_start_day'=>strtotime($request->konkurs_start_date[$i]),
            'action_end_day'=>strtotime($request->konkurs_end_date[$i]),
            'konkurs_id'=> $id_konkurs
            ];
            ActionPlans::insert($answers);
        }
       
        
         
        $page=Konkurs::insert(
          [
              
                'konkurs_title' => $request->konkurs_title,
                'konkurs_image' => url('/').'/images/konkurs/'.$file_name,
                'konkurs_description' => $request->konkurs_description,
                'konkurs_terms_of_participation' => $request->konkurs_terms_of_participation,
                'konkurs_prize'=>$request->konkurs_prize,
                'konkurs_video' => $request->konkurs_video,
                'konkurs_status' => '1',
                'voice_limit' =>$request->voice_limit
                
          ]
      );
      

      if ($page)
      {
          return redirect(route('konkurs.index'))->with('success','Uğurlu');
      }
        return back()->with('error','Uğursuz');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    
        $konkurs=Konkurs::where('id',$id)->first();
        $Actionplan=ActionPlans::where('konkurs_id',$id)->get();
        return view('backend.konkurs.edit',['Actionplan'=>$Actionplan,'notifications' =>$notification,'count_n'=>count($count_notify)])->with('konkurs',$konkurs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $current_status= ActionPlans::where('id', '=',$request->status )->first();
        foreach ($request->tedbir_video as $key => $value) {
           
            ActionPlans::where('id', '=',$key )->update([
                'action_video' =>  $value,
            ]);
        }
                 
        if($current_status->status != '1' ){
            ActionPlans::where('id', '!=',$request->status )->update([
                'status' => 0,
            ]);
            ActionPlans::where('id', '=',$request->status )->update([
                'status' => 1,
            ]);

$users = DB::table('users')->get();
            foreach ($users as  $value) {
                $add_notify=DB::table('notifications')->insert([
                    'text'=> $current_status->action_title. '-Mərhələsi Aktivdir ',
                    'user_id' =>$value->id,
                    'url'=> '#',
                    'startup_id' => null,
                    'read'=>0,
                    'created_at' => time()
                ]);
$check_email =$value->email;
                Mail::send('emails.action_plan-email', ['title' => $current_status->action_title], function ($m) use ($check_email) {
                    $m->from('noreply@onsideball.com', 'Mərhələ Haqqında bildiriş');
                
                    $m->to($check_email)->subject('Mərhələ Haqqında bildiriş');
                });
            }
           
        }
     
      
        $answers = new ActionPlans;
       
      
        
     
    
        if($request->hasFile('tedbir_icon_yeni')){
        foreach ($request->tedbir_icon_yeni as $file) {
       
        
            
                
              
            $file_name_icon=uniqid().'.'.$file->getClientOriginalExtension();
          $file->move('images/konkurs/actions_icons', $file_name_icon);
          $name_of_icon[]=$file_name_icon;

}
for ($i = 0; $i < count($request->tedbir_adi_yeni); $i++) {
  
    $answers = [
        'action_title'=>$request->tedbir_adi_yeni[$i],
    'action_description'=>$request->konkurs_action_plan_description_yeni[$i],
    'action_icon'=>url('/').'/images/konkurs/actions_icons/'.$name_of_icon[$i],
    'action_start_day'=>strtotime($request->konkurs_start_date_yeni[$i]),
    'action_end_day'=>strtotime($request->konkurs_end_date_yeni[$i]),

   
    'konkurs_id'=> $id
    ];
    ActionPlans::insert($answers);
}
  
}else{
$file_name_icon = 'null';
}
    
       
        if($request->hasFile('tedbir_icon')){
            $answerss = new ActionPlans;
       
       
            foreach ($request->tedbir_icon as $file) {
           
               
                
                $file_name_icon=uniqid().'.'.$file->getClientOriginalExtension();
                // Storage::disk('konkurs_icons')->put($file_name_icon, 'images/konkurs/actions_icons'); 
                $file->move('images/konkurs/actions_icons', $file_name_icon);
            $name_of_iconss[]=$file_name_icon;
                  
              
           
              
    }
  
    for ($i = 0; $i < count($request->tedbir_icon); $i++) {
                
                
        $id_of_icon=array_keys($request->tedbir_icon);
        print_r( $name_of_iconss[$i]); 
        $answers = [
          
        'action_icon' => url('/').'/images/konkurs/actions_icons/'.$name_of_iconss[$i],
       
        ];
       


        ActionPlans::Where('id',$id_of_icon[$i])->update($answers);
     
    }
      
        
                for ($i = 0; $i < count($request->action_id); $i++) {
                    $heyid = implode(',',$request->action_id);
                   
                    $answers = [
                        'action_title'=>$request->tedbir_adi[$i],
                    'action_description'=>$request->konkurs_action_plan_description[$i],
                    'action_description_en'=>$request->konkurs_action_plan_description_en[$i],
                    'action_start_day'=>strtotime($request->konkurs_start_date[$i]),
                    'action_end_day'=>strtotime($request->konkurs_end_date[$i]),
                   
                    'konkurs_id'=> $id,
                    
                    ];
                   
      $yamehemmed=explode(',',$heyid);
  
                    ActionPlans::Where('id',$yamehemmed[$i])->update($answers);
                 
                }
    
                   
                
               
            
            
    }else{
        for ($i = 0; $i < count($request->action_id); $i++) {
            $heyid = implode(',',$request->action_id);
           
           
          
          
            $answers = [
             'action_title'=>$request->tedbir_adi[$i],
            'action_description'=>$request->konkurs_action_plan_description[$i],
            'action_description_en'=>$request->konkurs_action_plan_description_en[$i],
            'action_start_day'=>strtotime($request->konkurs_start_date[$i]),
            'action_end_day'=>strtotime($request->konkurs_end_date[$i]),
            'konkurs_id'=> $id
            ];
$yamehemmed=explode(',',$heyid);

            ActionPlans::Where('id',$yamehemmed[$i])->update($answers);
        }
    }
        if ($request->hasFile('konkurs_image'))
        {
            $request->validate([
                      'konkurs_title' => 'required',          
                'konkurs_action_plan_description' => 'required',
                'konkurs_terms_of_participation' => 'required',
              
           
               
            ]);

            $file_name=uniqid().'.'.$request->konkurs_image->getClientOriginalExtension();
            $request->konkurs_image->move('images/konkurs',$file_name);

            $page=Konkurs::Where('id',$id)->update(
                [
                'konkurs_title' => $request->konkurs_title,
                'konkurs_image' => url('/').'/images/konkurs/'.$file_name,
                'konkurs_prize'=>$request->konkurs_prize,
                'konkurs_description' => $request->konkurs_description,
                'konkurs_terms_of_participation' => $request->konkurs_terms_of_participation,
                'konkurs_description_en' => $request->konkurs_description_en,
                'konkurs_terms_of_participation_en' => $request->konkurs_terms_of_participation_en,
                'konkurs_video' => $request->konkurs_video,
                'konkurs_status' => '1',
                'voice_limit' =>$request->voice_limit
                ]
            );

            $path='images/konkurs/'.$request->old_image;
            if (file_exists($path))
            {
                @unlink($path);
            }
            for ($i = 0; $i < count($request->action_id); $i++) {
                $heyid = implode(',',$request->action_id);
                
                $answers = [
                    'action_title'=>$request->tedbir_adi[$i],
                'action_description'=>$request->konkurs_action_plan_description[$i],
                'action_description_en'=>$request->konkurs_action_plan_description_en[$i],
                'action_start_day'=>strtotime($request->konkurs_start_date[$i]),
                'action_end_day'=>strtotime($request->konkurs_end_date[$i]),
                'konkurs_id'=> $id
                ];
  $yamehemmed=explode(',',$heyid);
  
                ActionPlans::Where('id',$yamehemmed[$i])->update($answers);
            }

        } else {
       
         
            $page=Konkurs::Where('id',$id)->update(
                [
                    'konkurs_title' => $request->konkurs_title,
                    'konkurs_prize'=>$request->konkurs_prize,
                    'konkurs_description' => $request->konkurs_description,
                    'konkurs_terms_of_participation' => $request->konkurs_terms_of_participation,
                    'konkurs_description_en' => $request->konkurs_description_en,
                    'konkurs_terms_of_participation_en' => $request->konkurs_terms_of_participation_en,
                    'konkurs_video' => $request->konkurs_video,
                    'konkurs_status' => $request->konkurs_status,
                    'voice_limit' =>$request->voice_limit
                ]
            );
        }





        if ($page)
        {
            return back()->with('success','Uğurlu');
        }
        return back()->with('error','Uğursuz');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Konkurs = Konkurs::find(intval($id));
      $path = 'images/konkurs/' . $Konkurs->konkurs_image;
            if (file_exists($path)) {
                @unlink($path);
            }
       $Actionplan = ActionPlans::where('konkurs_id', $id)->delete();
            
        if ($Konkurs->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

    public function destroy_action($id)
    {
      $Act = ActionPlans::find(intval($id));
      $path = $Act->action_icon;
            if (file_exists($path)) {
                @unlink($path);
            }
       $Actionplan = ActionPlans::where('konkurs_id', $id)->delete();
            
        if (  $Act->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }
   
    
public function block($id){
 $konkurs= Konkurs::find(intval($id));
 $konkurs->konkurs_status;
 $konkurs_update_status=Konkurs::Where('id', $id)->update([

    'konkurs_status' => '0'

 ]);
 if($konkurs_update_status){
    return back()->with('success', 'Konkurs blok edildi');
 }
 return back()->with('error', 'Uğursuz');



}
public function unblock($id){
 $konkurs= Konkurs::find(intval($id));
 $konkurs->konkurs_status;
 $konkurs_update_status=Konkurs::Where('id', $id)->update([

    'konkurs_status' => '1'

 ]);
 if($konkurs_update_status){
    return back()->with('success', 'Konkurs aktiv edildi');
 }
 return back()->with('error', 'Uğursuz');



}

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $pages = Pages::find(intval($value));
            $pages->page_must = intval($key);
            $pages->save();
        }
        echo true;
    }

    public function banners_index(){

        $data['konkurs_banners'] = DB::table('konkurs_banners')->orderBy('id','desc')->get();
        
        
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
 
        return view('backend.konkurs.konkurs_banners.index',compact('data'),
        ['notifications' =>$notification,'count_n'=>count($count_notify)]);
   
    }



    //Banners details

    
public function KonkursBannersApi(Request $request){

	
	if($request->api_key == 'abcd'){

		$konkurs_banners = DB::table('konkurs_banners')->orderBy('id','desc')->get();
	
		return response()->json($konkurs_banners, 200, 
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


public function banners_create(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	   return view('backend.konkurs.konkurs_banners.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function banners_edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
   
	 $konkurs_banners = DB::table('konkurs_banners')->where('id', $id)->first();
      return view('backend.konkurs.konkurs_banners.edit', ['notifications' =>$notification,'count_n'=>count($count_notify)])->with('konkurs_banners', $konkurs_banners);
	
}



public function banners_store(Request $request){
  
        $request->validate([
            'title' => 'required',
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
           
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move('images/konkurs_banners/', $file_name);
        } else {
            $file_name = null;
        }


        $konkurs_banners = DB::table('konkurs_banners')->insert(
            [
                "title" => $request->title,
               
                "file" => url('/').'/images/konkurs_banners/'.$file_name,//İşlem
              
            ]
        );

        if ($konkurs_banners) {
            return redirect(route('konkurs.banners'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


    public function banners_update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
           
        ]);


        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $path = 'images/konkurs_banners/' . $request->old_file;
            if (file_exists($path)) {
                @unlink($path);
            }
            $request->file->move('images/konkurs_banners', $file_name);
    
                $konkurs_banners = DB::table('konkurs_banners')->Where('id', $id)->update(
                    [
                         "title" => $request->title,
               			
                		 "file" => url('/').'/images/konkurs_banners/'.$file_name,//İşlem
                    ]
                );
       


        

        } else {

            $konkurs_banners = DB::table('konkurs_banners')->Where('id', $id)->update(
                    [
                         "title" => $request->title,
                	
                		
                    ]
                );


        }

        if ($konkurs_banners) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

     public function banners_destroy($id)
    {
        $konkurs_banners = DB::table('konkurs_banners')->where('id',$id)->first();
        if($konkurs_banners){
      $path = 'images/konkurs_banners/' . $konkurs_banners->file;
            if (file_exists($path)) {
                @unlink($path);
                if ($konkurs_banners->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
            }
            else{
                if (DB::table('konkurs_banners')->where('id',$id)->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');

            }
        
    }

    
}

public function voice_limit_api(Request $request)
{
    if($request->api_key == 'abcd'){
    $countcomp = DB::table('konkurs')->first();
    return response()->json(['voice_limit'=>$countcomp->voice_limit], 200, 
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

public function All_Delete(Request $request){
   $user=DB::table('users')->where('id',\Auth::guard('web')->user()->id)->first();
   if(Hash::check($request->admin_pass, $user->password)){
    DB::table('competition_applicants')->delete();
    DB::table('competition_members')->delete();
    DB::table('notifications')->delete();
    DB::table('startups')->delete();
    DB::table('startup_comments')->delete();
    DB::table('startup_criteria_voice')->delete();
    DB::table('startup_files')->delete();
    DB::table('startup_followers')->delete();
    DB::table('startup_points')->delete();
    DB::table('startup_questions')->delete();
    DB::table('timelines')->delete();
    $delete=DB::table('users')->where('id','!=',6)->delete();
    if ( $delete)
    {
        return redirect(route('konkurs.index'))->with('success','Uğurlu');
    }
  }
  
    return back()->with('error','Uğursuz');
   }
 



}
