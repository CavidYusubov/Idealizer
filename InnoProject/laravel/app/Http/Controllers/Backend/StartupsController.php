<?php

namespace App\Http\Controllers\Backend;
use \JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Startups;
use App\User;
use App\StartupFiles;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Imagick;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
class StartupsController extends Controller
{

    function replaceArrayKey($array, $oldKey, $newKey){
        //If the old key doesn't exist, we can't replace it...
        if(!isset($array[$oldKey])){
            return $array;
        }
        //Get a list of all keys in the array.
        $arrayKeys = array_keys($array);
        //Replace the key in our $arrayKeys array.
        $oldKeyIndex = array_search($oldKey, $arrayKeys);
        $arrayKeys[$oldKeyIndex] = $newKey;
        //Combine them back into one array.
        $newArray =  array_combine($arrayKeys, $array);
        return $newArray;
    } 

    function remove_special_character($string) {
 
        $t = $string;
     
        $specChars = array(
            ' ' => '-',    '!' => '',    '"' => '',
            '#' => '',    '$' => '',    '%' => '',
            '&amp;' => '',    '\'' => '',   '(' => '',
            ')' => '',    '*' => '',    '+' => '',
            ',' => '',    '₹' => '',    '.' => '',
            '/-' => '',    ':' => '',    ';' => '',
            '<' => '',    '=' => '',    '>' => '',
            '?' => '',    '@' => '',    '[' => '',
            '\\' => '',   ']' => '',    '^' => '',
            '_' => '',    '`' => '',    '{' => '',
            '|' => '',    '}' => '',    '~' => '',
            '-----' => '-',    '----' => '-',    '---' => '-',
            '/' => '',    '--' => '-',   '/_' => '-',   
             
        );
     
        foreach ($specChars as $k => $v) {
            $t = str_replace($k, $v, $t);
        }
     
        return $t;
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function StartupApi(Request $request){


                if($request->api_key == 'abcd'){
                  
                
                        if($request->header('Authorization')){
                            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                        $user->id;
                        $startups = Startups::Where([
                            [ 'startup_status','=','aktiv'],['startup_check','=','1']]
                         )->orderBy(DB::raw('RAND()'))->take(30)->get();
                        $s=1;
                             foreach ($startups as $value) {
                                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                if(empty($check)){
                                    $following =false;
                                }else{
                                    $following =true;
                                }
                                if( $value->user_id== $user->id  ){
                                    $mystartup =true;
                                }else{
                                    $mystartup =false;
                                }
                                $points_users =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'user']])->count();
                                $points_juri =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'juri']])->count();
                                $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
                                $ran=0;
                                foreach ($rank as $ranking) {
                                    
                                    $s++;
                                   if($ranking->startup_id == $value->id){
                                    $ran=$s;

                                   }
                                   
                                }
                                $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
                                $start[]=[
                                 'id' => $value->id,
                                 'title' => $value->startup_title,
                                 'image' =>$value->startup_logo,
                                 'cover_image'=>$value->startup_image,
                                 'description' => $value->startup_description,
                                 'idea' => $value->startup_idea,
                                 'team' => $value->startup_team,
                                 'color' => $value->startup_color,
                                 'website' => $value->startup_pitch,
                                 'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                                 'category' => $value->category,
                                 'documents' => $value->startup_document,
                                 'video' => $value->startup_video,
                                 'sector' =>$value->startup_direction,
                                 'facebook' =>$value->facebook,
                                 'twitter' =>$value->twitter,
                                 "jury_vote"=>  $points_juri,
                                 "startup_vote"=> $points_users,
                                 "rank"=> $ran,
                                 "followed" =>$following,
                                 "mystartup" => $mystartup 

                                ];
                             }
                                          
                return response()->json( $start , 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            
              
                }

                    
                // $startups = Startups::all()->Where(
                //     'startup_check','1'
                // )->WhereIn('startup_status','aktiv' );
                $startups = Startups::Where([
                   [ 'startup_status','=','aktiv'],['startup_check','=','1']]
                )->orderBy(DB::raw('RAND()'))->take(30)->get();
                 
                    foreach ($startups as $value) {
                        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
                       $start[]=[
                        'id' => $value->id,
                        'title' => $value->startup_title,
                        'image' =>$value->startup_logo,
                        'cover_image'=>$value->startup_image,
                        'description' => $value->startup_description,
                        'idea' => $value->startup_idea,
                        'team' => $value->startup_team,
                        'color' => $value->startup_color,
                        'website' => $value->startup_pitch,
                         'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                        'category' => $value->category,
                        'documents' => $value->startup_document,
                        'video' => $value->startup_video,
                        'sector' =>$value->startup_direction,
                        'facebook' =>$value->facebook,
                        'twitter' =>$value->twitter,
                        "jury_vote"=> 2,
                        "startup_vote"=> 6,
                        "rank"=> 24
                       ];
                    }

                    
                return response()->json( $start , 200, 
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

    public function Questions(Request $request){

        
        if($request->api_key == 'abcd'){
            $n=0;
            $f=0;
            $questions = DB::table('questions')->get();

            $first = DB::table('questions');


            foreach ($questions as $key => $values) {
                $quests[]= array('title'=>$values->title);
                $answers = DB::table('answers')
                ->where('q_id' , $values->id)->get();
                $i = 0;
                $len = count($answers);
                    foreach($answers as $key => $value){
                   
                      if ($i == 0) {

                        if( $value->q_id == $values->id){
                            $quests1[$values->id][]= array('question'=>$values->title);
                            $quests1[$values->id][]= array($value->id=>$value->title);
                           
                      }
                    } else  {
                       
                        $quests1[$values->id][]= array($value->id=>$value->title);
                    }
                    // …
                    $i++;
                    
                  
    
         }
         $result= array_merge( $quests , $quests1);
            }
      
            return response()->json(['all_questions'=>$quests1], 200, 
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
    public function index()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

        $data['startups']  = DB::table('startups')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email')->where('startups.startup_check','1' )->orderBy('startups.id','desc')->paginate(50);
      $count = Startups::all()->where('startup_check','0' )->count();
      $countvideo = Startups::all()->where('video_confirmation','0' )->count();
      $countcomp = DB::table('competition_applicants')->count();
      $competition_members = DB::table('competition_members')->count();
      
      $country=DB::table('apps_countries')->get();
      $users= User::all();
        return view('backend.startups.index', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify),'count'=>$count,'users'=>$users,'country'=>$country,'countvideo'=>$countvideo ,'countcomp'=>$countcomp,'competition_members'=>$competition_members ]);
    
    }
    
    
    public function countcompetitionapplicants(Request $request)
    {
        if($request->api_key == 'abcd'){
        $countcomp = DB::table('competition_applicants')->where('name','musabiqe' )->count();
        return response()->json(['count'=>$countcomp], 200, 
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
    public function competition_count(Request $request)
    {
        if($request->api_key == 'abcd'){
        $countcomp = DB::table('competition_members')->count();
        return response()->json(['count'=>$countcomp], 200, 
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
    

    public function filterCountryList(){
        $startups=Startups::all();
        $countrs=DB::table('apps_countries')->get();
      foreach ($countrs as  $value) {
        $data[] =
        [
            "id" => $value->country_code,
            "name" => $value->country_name,
        ];
      }
    //   $startups = DB::table('startups')
    //     ->select('country')
    //     ->groupBy('country')
    //     ->get();
    
    //  return $ss=json_encode($startups);
     return response()->json($data, 200, 
     ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
     JSON_UNESCAPED_UNICODE);
    
}
public function filterDirectionsList(){
    $startups=Startups::all();
    $countrs=DB::table('innovative_directions')->get();
  foreach ($countrs as $key => $value) {
    
    $data[] =
        [
            "id" => $value->id,
            "name" => $value->title,
        ];
  }
  $startups = DB::table('startups')
    
    ->select('startup_direction')
    ->groupBy('startup_direction')
    ->get();

//  return $ss=json_encode($startups);
 return response()->json($data, 200, 
 ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
 JSON_UNESCAPED_UNICODE);

}

//Full Filter
    public function fullFilter(Request $request){
      $start=array();
        // category, trending, sectors, key,category
        if(!empty($request->category) && !empty($request->trending) && !empty($request->sectors) && !empty($request->key)){
            $category= explode(',',$request->category);
            $sectors= explode(',',$request->sectors);
          $query = Startups::query();
          if($request->trending == 'abc'){
              //abc
          $data = DB::table('startups')->where(function ($query) use ($category) {
            foreach ($category as $field)
          
                $query->orWhere('category', 'like', '%' . $field . '%');
        }
    
        
        )->where(    function ($query) use ($sectors) {
            foreach ($sectors as $field)

                
                $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
            $query->orWhere('startup_direction', $sectorss->title);
        })->where([['startup_title', 'like', '%' . $request->key . '%'],  [ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
        $start=[];
        foreach ($data as  $value) {
          
            if($request->header('Authorization')){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                               if(empty($check)){
                                   $following =false;
                               }else{
                                   $following =true;
                               }
                               if( $value->user_id== $user->id  ){
                                   $mystartup =true;
                               }else{
                                   $mystartup =false;
                               }
                          
                            }else{
                                $mystartup =null;
                                $following =null;
        
                            }
                 $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
           $start[]=[
               'id' => $value->id,
               'title' => $value->startup_title,
               'image' =>$value->startup_logo,
               'cover_image'=>$value->startup_image,
               'description' => $value->startup_description,
               'idea' => $value->startup_idea,
               'team' => $value->startup_team,
               'color' => $value->startup_color,
               'website' => $value->startup_pitch,
               'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
               'category' => $value->category,
               'documents' =>null,
               'video' => $value->startup_video,
               'sector' =>$value->startup_direction,
               'facebook' =>$value->facebook,
               'twitter' =>$value->twitter,
               
              
               "followed" =>$following,
               "mystartup" => $mystartup 
        
              ];
        }
        
    }else if($request->trending == 'cba'){
        //bca
           $data = DB::table('startups')->where(function ($query) use ($category) {
            foreach ($category as $field)
                $query->orWhere('country', 'like', '%' . $field . '%');
        }
    
        
        )->where(    function ($query) use ($sectors) {
            foreach ($sectors as $field)

                
                $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
            $query->orWhere('startup_direction', $sectorss->title);
        })->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
        $start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
         $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
      'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}

    }else if ($request->trending == 'recent'){
//recent
$data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('country', 'like', '%' . $field . '%');
}


)->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction', $sectorss->title);
})->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();

$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
         $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}

    }else if ($request->trending == 'favourite'){
//favorite
$data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('country', 'like', '%' . $field . '%');
}


)->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction', $sectorss->title);
})->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->where('favor','1')->orderBy('id','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
         $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
        'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}

    }else{
        $data= null;
        
    }
    
        

return response()->json($start, 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
        }


        //countries, trending and sectors


        if(!empty($request->category) && !empty($request->trending) && !empty($request->sectors)){
            $category= explode(',',$request->category);
          $sectors= explode(',',$request->sectors);
          $query = Startups::query();
          if($request->trending == 'abc'){
              //abc
          $data = DB::table('startups')->where(function ($query) use ($category) {
            foreach ($category as $field)
                $query->orWhere('category', 'like', '%' . $field .'%');
        }
    
        
        )->where(    function ($query) use ($sectors) {
            foreach ($sectors as $fields)

                
                $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
            $query->orWhere('startup_direction','LIKE' ,'%'.$sectorss->title.'%');
        })
        ->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
        $start=[];
        foreach ($data as  $value) {
          
            if($request->header('Authorization')){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                               if(empty($check)){
                                   $following =false;
                               }else{
                                   $following =true;
                               }
                               if( $value->user_id== $user->id  ){
                                   $mystartup =true;
                               }else{
                                   $mystartup =false;
                               }
                          
                            }else{
                                $mystartup =null;
                                $following =null;
    
                            }
                 $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
           $start[]=[
               'id' => $value->id,
               'title' => $value->startup_title,
               'image' =>$value->startup_logo,
               'cover_image'=>$value->startup_image,
               'description' => $value->startup_description,
               'idea' => $value->startup_idea,
               'team' => $value->startup_team,
               'color' => $value->startup_color,
               'website' => $value->startup_pitch,
               'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
               'category' => $value->category,
               'documents' =>null,
               'video' => $value->startup_video,
               'sector' =>$value->startup_direction,
               'facebook' =>$value->facebook,
               'twitter' =>$value->twitter,
               
              
               "followed" =>$following,
               "mystartup" => $mystartup 
    
              ];
       }
    }else if($request->trending == 'cba'){
        //bca
           $data = DB::table('startups')->where(function ($query) use ($category) {
            foreach ($category as $field)
                $query->orWhere('country', 'like', '%' . $field . '%');
        }
    
        
        )->where(    function ($query) use ($sectors) {
            foreach ($sectors as $field)

                
                $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
            $query->orWhere('startup_direction','LIKE' ,$sectorss->title.'%');
        })->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
        $start=[];
        foreach ($data as  $value) {
          
            if($request->header('Authorization')){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                               if(empty($check)){
                                   $following =false;
                               }else{
                                   $following =true;
                               }
                               if( $value->user_id== $user->id  ){
                                   $mystartup =true;
                               }else{
                                   $mystartup =false;
                               }
                          
                            }else{
                                $mystartup =null;
                                $following =null;
    
                            }
                 $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
           $start[]=[
               'id' => $value->id,
               'title' => $value->startup_title,
               'image' =>$value->startup_logo,
               'cover_image'=>$value->startup_image,
               'description' => $value->startup_description,
               'idea' => $value->startup_idea,
               'team' => $value->startup_team,
               'color' => $value->startup_color,
               'website' => $value->startup_pitch,
               'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
               'category' => $value->category,
               'documents' =>null,
               'video' => $value->startup_video,
               'sector' =>$value->startup_direction,
               'facebook' =>$value->facebook,
               'twitter' =>$value->twitter,
               
              
               "followed" =>$following,
               "mystartup" => $mystartup 
    
              ];
       }
    }else if ($request->trending == 'recent'){
//recent
$data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('category', 'like', '%' . $field . '%');
}


)->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction','LIKE' ,$sectorss->title.'%');
})->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
      'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}

    }else if ($request->trending == 'favourite'){
//favorite
$data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('category', 'like', '%' . $field . '%');
}

)->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction','LIKE' ,$sectorss->title.'%');
})->where('favor','1')->orderBy('id','DESC')->get();
$start=[];
foreach ($startups as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
    'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
    }else{
        $data= null;
        
    }
    
        

return response()->json($start, 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
        }

 // country, sectors, key

if(!empty($request->category) && !empty($request->key) && !empty($request->sectors)){
    $category= explode(',',$request->category);
    $sectors= explode(',',$request->sectors);
    $query = Startups::query();
    
      
    $data = DB::table('startups')->where(function ($query) use ($category) {
      foreach ($category as $field)
          $query->orWhere('category', 'like', '%' . $field . '%');
  }

  
  )->where(    function ($query) use ($sectors) {
      foreach ($sectors as $field)

          
          $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
      $query->orWhere('startup_direction', $sectorss->title);
  })->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
  $start=[];
  foreach ($data as  $value) {
    
      if($request->header('Authorization')){
          $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
      $user->id;
      $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                         if(empty($check)){
                             $following =false;
                         }else{
                             $following =true;
                         }
                         if( $value->user_id== $user->id  ){
                             $mystartup =true;
                         }else{
                             $mystartup =false;
                         }
                    
                      }else{
                          $mystartup =null;
                          $following =null;

                      }
          $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
     $start[]=[
         'id' => $value->id,
         'title' => $value->startup_title,
         'image' =>$value->startup_logo,
         'cover_image'=>$value->startup_image,
         'description' => $value->startup_description,
         'idea' => $value->startup_idea,
         'team' => $value->startup_team,
         'color' => $value->startup_color,
         'website' => $value->startup_pitch,
         'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
         'category' => $value->category,
         'documents' =>null,
         'video' => $value->startup_video,
         'sector' =>$value->startup_direction,
         'facebook' =>$value->facebook,
         'twitter' =>$value->twitter,
         
        
         "followed" =>$following,
         "mystartup" => $mystartup 

        ];
 }
  return response()->json($start, 200, 
  ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
  JSON_UNESCAPED_UNICODE);
}


//country, key, trending
if(!empty($request->category) && !empty($request->trending) && !empty($request->key)){
    $category= explode(',',$request->category);
  
  $query = Startups::query();
  if($request->trending == 'abc'){
      //abc
  $data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('category', 'like', '%' . $field . '%');


}


)->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
    $start=[];
            foreach ($data as  $value) {
              
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
}else if($request->trending == 'cba'){
//bca
   $data = DB::table('startups')->where(function ($query) use ($category) {
    foreach ($category as $field)
        $query->orWhere('category', 'like', '%' . $field . '%');
}


)->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else if ($request->trending == 'recent'){
//recent
$data = DB::table('startups')->where(function ($query) use ($category) {
foreach ($category as $field)
$query->orWhere('category', 'like', '%' . $field . '%');
}


)->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();

$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else if ($request->trending == 'favourite'){
//favorite
$data = DB::table('startups')->where(function ($query) use ($category) {
foreach ($category as $field)
$query->orWhere('category', 'like', '%' . $field . '%');
}


)->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else{
$data= null;

}



return response()->json($start, 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
}


//keys, trending and sectors

if(!empty($request->key) && !empty($request->trending) && !empty($request->sectors)){
 
  $sectors= explode(',',$request->sectors);
  $query = Startups::query();
  if($request->trending == 'abc'){
      //abc
  $data = DB::table('startups')->where('startup_title', 'like', '%' . $request->key . '%')->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction','LIKE' ,'%'.$sectorss->title.'%');
})->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else if($request->trending == 'cba'){
//bca
   $data = DB::table('startups')->where('startup_title', 'like', '%' . $request->key . '%')->where(    function ($query) use ($sectors) {
    foreach ($sectors as $field)

        
        $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
    $query->orWhere('startup_direction','LIKE' ,'%'.$sectorss->title.'%');
})->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else if ($request->trending == 'recent'){
//recent
$data = DB::table('startups')->where('startup_title', 'like', '%' . $request->key . '%')->where(    function ($query) use ($sectors) {
foreach ($sectors as $field)


$sectorss= DB::table('innovative_directions')->where('id',$field)->first();
$query->orWhere('startup_direction','LIKE' ,'%'.$sectorss->title.'%');
})->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();

$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else if ($request->trending == 'favourite'){
//favorite
$data = DB::table('startups')->where('startup_title', 'like', '%' . $request->key . '%')->where(    function ($query) use ($sectors) {
foreach ($sectors as $field)


$sectorss= DB::table('innovative_directions')->where('id',$field)->first();
$query->orWhere('startup_direction','LIKE' ,'%'.$sectorss->title.'%');
})->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
$start=[];
foreach ($data as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
      'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
}else{
$data= null;

}



return response()->json($start, 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
}

        //TRENDING AND KEY


        if(!empty($request->trending) && !empty($request->key)){
        if($request->trending == 'abc'){
            $startups = DB::table('startups')->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
            $start=[];
            foreach ($startups as  $value) {
              
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                     $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
           
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);
         }else if ($request->trending == 'cba'){

$startups = Startups::where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
          
$start=[];
foreach ($startups as  $value) {
  
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                        $mystartup =null;
                        $following =null;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }else if ($request->trending == 'recent'){
            $startups = Startups::where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
            $start=[];
            foreach ($startups as  $value) {
              
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
            
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }else if ($request->trending == 'favourite'){
            $startups = Startups::where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('favor','DESC')->where('favor','1')->get();
            $start=[];
            foreach ($startups as  $value) {
              
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }
         
         else{
            return null;

         }
        }


        //trending and sectors


        if(!empty($request->trending) && !empty($request->sectors)){

            
$sectors= explode(',',$request->sectors);

if($request->trending == 'abc'){
    
    foreach ($sectors as $key => $value) {
        
       $result=strtoupper($value);
     
       $sectors= DB::table('innovative_directions')->where('id',$result)->first();
       $data = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();

       foreach ($data as  $value) {
        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                           if(empty($check)){
                               $following =false;
                           }else{
                               $following =true;
                           }
                           if( $value->user_id== $user->id  ){
                               $mystartup =true;
                           }else{
                               $mystartup =false;
                           }
                      
                        }else{
                           $mystartup=false;
                           $following=false;

                        }
            $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
       $start[]=[
           'id' => $value->id,
           'title' => $value->startup_title,
           'image' =>$value->startup_logo,
           'cover_image'=>$value->startup_image,
           'description' => $value->startup_description,
           'idea' => $value->startup_idea,
           'team' => $value->startup_team,
           'color' => $value->startup_color,
           'website' => $value->startup_pitch,
           'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
           'category' => $value->category,
           'documents' =>null,
           'video' => $value->startup_video,
           'sector' =>$value->startup_direction,
           'facebook' =>$value->facebook,
           'twitter' =>$value->twitter,
           
          
           "followed" =>$following,
           "mystartup" => $mystartup 

          ];
   }


  
    }
 
   
   return response()->json($start, 200, 
               ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
               JSON_UNESCAPED_UNICODE);
}else if($request->trending == 'cba'){
    
    foreach ($sectors as $key => $value) {
       $result=strtoupper($value);
      
       $sectors= DB::table('innovative_directions')->where('id',$result)->first();
       $startups = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
   
   
       foreach ($startups as  $value) {
        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                           if(empty($check)){
                               $following =false;
                           }else{
                               $following =true;
                           }
                           if( $value->user_id== $user->id  ){
                               $mystartup =true;
                           }else{
                               $mystartup =false;
                           }
                      
                        }else{
                           $mystartup=false;
                           $following=false;

                        }
            $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
       $start[]=[
           'id' => $value->id,
           'title' => $value->startup_title,
           'image' =>$value->startup_logo,
           'cover_image'=>$value->startup_image,
           'description' => $value->startup_description,
           'idea' => $value->startup_idea,
           'team' => $value->startup_team,
           'color' => $value->startup_color,
           'website' => $value->startup_pitch,
           'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
           'category' => $value->category,
           'documents' =>null,
           'video' => $value->startup_video,
           'sector' =>$value->startup_direction,
           'facebook' =>$value->facebook,
           'twitter' =>$value->twitter,
           
          
           "followed" =>$following,
           "mystartup" => $mystartup 

          ];
   }

    }
 
   
   return response()->json($start, 200, 
               ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
               JSON_UNESCAPED_UNICODE);
}else if ($request->trending == 'recent'){
      
    foreach ($sectors as $key => $value) {
        $result=strtoupper($value);
       
        $sectors= DB::table('innovative_directions')->where('id',$result)->first();
        $startups[] = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
        $startups = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
   
   
        foreach ($startups as  $value) {
         if($request->header('Authorization')){
             $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
         $user->id;
         $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                            if(empty($check)){
                                $following =false;
                            }else{
                                $following =true;
                            }
                            if( $value->user_id== $user->id  ){
                                $mystartup =true;
                            }else{
                                $mystartup =false;
                            }
                       
                         }else{
                            $mystartup=false;
                            $following=false;
 
                         }
             $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
        $start[]=[
            'id' => $value->id,
            'title' => $value->startup_title,
            'image' =>$value->startup_logo,
            'cover_image'=>$value->startup_image,
            'description' => $value->startup_description,
            'idea' => $value->startup_idea,
            'team' => $value->startup_team,
            'color' => $value->startup_color,
            'website' => $value->startup_pitch,
            'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
            'category' => $value->category,
            'documents' =>null,
            'video' => $value->startup_video,
            'sector' =>$value->startup_direction,
            'facebook' =>$value->facebook,
            'twitter' =>$value->twitter,
            
           
            "followed" =>$following,
            "mystartup" => $mystartup 
 
           ];
    }
    
    }
  
    
    return response()->json($start, 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);

}else if ($request->trending == 'favourite'){
  
    foreach ($sectors as $key => $value) {
        $result=strtoupper($value);
       
        $sectors= DB::table('innovative_directions')->where('id',$result)->first();
        $startups[] = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->where('favor','1')->get();
     }
  
    
    return response()->json($startups, 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
        }

    }
        //countries and sectors
        if(!empty($request->category) && !empty($request->sectors)){
            $category= explode(',',$request->category);
            $sectors= explode(',',$request->sectors);
            $query = Startups::query();
            $data = DB::table('startups')->where(function ($query) use ($category) {
                foreach ($category as $field)
                    $query->orWhere('category', '=', $field );
            }
        
            
            )->where(    function ($query) use ($sectors) {
                foreach ($sectors as $field)
    
                    
                    $sectorss= DB::table('innovative_directions')->where('id',$field)->first();
                $query->orWhere([['startup_direction','LIKE' ,'%'.$sectorss->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']]);
            })->get();
           
               $start=[];
            foreach ($data as  $value) {
              
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
            return response()->json($start, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        //countries and trending
        if(!empty($request->category) && !empty($request->trending)){
            $category= explode(',',$request->category);

            if($request->trending == 'abc'){

                foreach ($category as $key => $value) {
                    $result=strtoupper($value);
                    
                    $startups = DB::table('startups')->where([['category',$result],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
                
                
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                }
                
                return response()->json($start, 200, 
                            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                            JSON_UNESCAPED_UNICODE);

             }else if ($request->trending == 'cba'){

                foreach ($category as $key => $value) {
                    $result=strtoupper($value);
                    
                    $startups = DB::table('startups')->where([['category',$result],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title','DESC')->get();
                
                
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                }
  
                return response()->json($start, 200, 
                            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                            JSON_UNESCAPED_UNICODE);

    
             }else if ($request->trending == 'recent'){
                   foreach ($category as $key => $value) {
                    $result=strtoupper($value);
                    
                    $startups = DB::table('startups')->where([['category',$result],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
                 
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                
                }
               
                return response()->json($start, 200, 
                            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                            JSON_UNESCAPED_UNICODE);
    
             }else if ($request->trending == 'favourite'){
                foreach ($category as $key => $value) {
                    $result=strtoupper($value);
                    
                    $startups = DB::table('startups')->where([['category',$result],['favor','1'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('favor','DESC')->get();
                
                
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                }
              
                return response()->json($start, 200, 
                            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                            JSON_UNESCAPED_UNICODE);
    
             }
             
             else{
                return null;
    
             }
                
             
               
               return response()->json($start, 200, 
                           ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                           JSON_UNESCAPED_UNICODE);
            
            
            
        }
// Sectors and key
if(!empty($request->sectors) && !empty($request->key)){
  
$sectors= explode(',',$request->sectors);

if($request->sectors ){
    foreach ($sectors as $key => $value) {
       $result=strtoupper($value);
      
       $sectors= DB::table('innovative_directions')->where('id',$result)->first();
       $startups = DB::table('startups')->where([['startup_direction','LIKE' ,'%'.$sectors->title.'%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->where('startup_title', 'like', '%' . $request->key . '%')->get();
    
    
       foreach ($startups as  $value) {
        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                           if(empty($check)){
                               $following =false;
                           }else{
                               $following =true;
                           }
                           if( $value->user_id== $user->id  ){
                               $mystartup =true;
                           }else{
                               $mystartup =false;
                           }
                      
                        }else{
                            $mystartup =null;
                            $following =null;

                        }
            $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
       $start[]=[
           'id' => $value->id,
           'title' => $value->startup_title,
           'image' =>$value->startup_logo,
           'cover_image'=>$value->startup_image,
           'description' => $value->startup_description,
           'idea' => $value->startup_idea,
           'team' => $value->startup_team,
           'color' => $value->startup_color,
           'website' => $value->startup_pitch,
           'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
           'category' => $value->category,
           'documents' =>null,
           'video' => $value->startup_video,
           'sector' =>$value->startup_direction,
           'facebook' =>$value->facebook,
           'twitter' =>$value->twitter,
           
          
           "followed" =>$following,
           "mystartup" => $mystartup 

          ];
   }
    }
 
   
   return response()->json($start, 200, 
               ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
               JSON_UNESCAPED_UNICODE);
}
  
}
            
            
//KEY AND COUNTRIES
if(!empty($request->category) && !empty($request->key)){
    $category= explode(',',$request->category);
    $data = DB::table('startups')->where(function ($query) use ($category) {
        foreach ($category as $field)
            $query->orWhere('category', '=', $field );
    }

    
    )->where([['startup_title', 'like', '%' . $request->key . '%'],[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','Desc')->get();
   
    foreach ($data as  $value) {
        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                           if(empty($check)){
                               $following =false;
                           }else{
                               $following =true;
                           }
                           if( $value->user_id== $user->id  ){
                               $mystartup =true;
                           }else{
                               $mystartup =false;
                           }
                      
                        }else{
                            $mystartup =null;
                            $following =null;

                        }
            $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
       $start[]=[
           'id' => $value->id,
           'title' => $value->startup_title,
           'image' =>$value->startup_logo,
           'cover_image'=>$value->startup_image,
           'description' => $value->startup_description,
           'idea' => $value->startup_idea,
           'team' => $value->startup_team,
           'color' => $value->startup_color,
           'website' => $value->startup_pitch,
           'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
           'category' => $value->category,
           'documents' =>null,
           'video' => $value->startup_video,
           'sector' =>$value->startup_direction,
           'facebook' =>$value->facebook,
           'twitter' =>$value->twitter,
           
          
           "followed" =>$following,
           "mystartup" => $mystartup 

          ];
   }
   
    return response()->json($start, 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
  
}
//END OF KEY AND COUNTRIES
        if(!empty($request->trending)){

         //only trending filter

         if($request->trending == 'abc'){
            $startups = DB::table('startups')->where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('startup_title')->get();
           
   
            foreach ($startups as  $value) {
             if($request->header('Authorization')){
                 $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
             $user->id;
             $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                if(empty($check)){
                                    $following =false;
                                }else{
                                    $following =true;
                                }
                                if( $value->user_id== $user->id  ){
                                    $mystartup =true;
                                }else{
                                    $mystartup =false;
                                }
                           
                             }else{
                                $mystartup=false;
                                $following=false;
     
                             }
                 $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
            $start[]=[
                'id' => $value->id,
                'title' => $value->startup_title,
                'image' =>$value->startup_logo,
                'cover_image'=>$value->startup_image,
                'description' => $value->startup_description,
                'idea' => $value->startup_idea,
                'team' => $value->startup_team,
                'color' => $value->startup_color,
                'website' => $value->startup_pitch,
                'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                'category' => $value->category,
                'documents' =>null,
                'video' => $value->startup_video,
                'sector' =>$value->startup_direction,
                'facebook' =>$value->facebook,
                'twitter' =>$value->twitter,
                
               
                "followed" =>$following,
                "mystartup" => $mystartup 
     
               ];
        }
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);
         }else if ($request->trending == 'cba'){

$startups = Startups::orderBy('startup_title','DESC')->get();

foreach ($startups as  $value) {
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                       if(empty($check)){
                           $following =false;
                       }else{
                           $following =true;
                       }
                       if( $value->user_id== $user->id  ){
                           $mystartup =true;
                       }else{
                           $mystartup =false;
                       }
                  
                    }else{
                       $mystartup=false;
                       $following=false;

                    }
        $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
   $start[]=[
       'id' => $value->id,
       'title' => $value->startup_title,
       'image' =>$value->startup_logo,
       'cover_image'=>$value->startup_image,
       'description' => $value->startup_description,
       'idea' => $value->startup_idea,
       'team' => $value->startup_team,
       'color' => $value->startup_color,
       'website' => $value->startup_pitch,
       'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
       'category' => $value->category,
       'documents' =>null,
       'video' => $value->startup_video,
       'sector' =>$value->startup_direction,
       'facebook' =>$value->facebook,
       'twitter' =>$value->twitter,
       
      
       "followed" =>$following,
       "mystartup" => $mystartup 

      ];
}
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }else if ($request->trending == 'recent'){
            $startups = Startups::where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('id','DESC')->get();
            
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                   $mystartup=false;
                                   $following=false;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
            return response()->json($start, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }else if ($request->trending == 'favourite'){
            $startups = Startups::where([[ 'startup_status','=','aktiv'],['startup_check','=','1']])->orderBy('favor','DESC')->where('favor','1')->get();
            return response()->json($startups, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);

         }
         
         else{
            return null;

         }

         
        }

        //only  Countries
        if(!empty($request->category)){

            //only countries filter
            $category= explode(',',$request->category);

            if($request->category ){
                foreach ($category as $key => $value) {
                   $result=strtoupper($value);
                   $startups = DB::table('startups')->where('category',$result)->get();
             
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                }
             
               
               return response()->json($start, 200, 
                           ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                           JSON_UNESCAPED_UNICODE);
            }
            
            

        }
        if(!empty($request->sectors)){

            //only sectors filter
            $sectors= explode(',',$request->sectors);

            if($request->sectors ){
                foreach ($sectors as $key => $value) {
                   $result=strtoupper($value);
                  
                   $sectors= DB::table('innovative_directions')->where('id',$result)->first();
                   $startups= DB::table('startups')->where('startup_direction', $sectors->title)->get();
                
                
            foreach ($startups as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                   $mystartup=false;
                                   $following=false;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
                }
             
               
               return response()->json($start, 200, 
                           ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                           JSON_UNESCAPED_UNICODE);
            }
            
            

        }
        if(!empty($request->key)){
            $key_match=preg_replace('/[^0-9a-zA-Z ]/','',$request->key);
            //only key filter
         

            if($request->key ){
                
                
                $keys= DB::table('startups')->where('startup_title','Like',"%$key_match%")->get();
                       
            foreach ($keys as  $value) {
                if($request->header('Authorization')){
                    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                   if(empty($check)){
                                       $following =false;
                                   }else{
                                       $following =true;
                                   }
                                   if( $value->user_id== $user->id  ){
                                       $mystartup =true;
                                   }else{
                                       $mystartup =false;
                                   }
                              
                                }else{
                                    $mystartup =null;
                                    $following =null;
        
                                }
                    $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
               $start[]=[
                   'id' => $value->id,
                   'title' => $value->startup_title,
                   'image' =>$value->startup_logo,
                   'cover_image'=>$value->startup_image,
                   'description' => $value->startup_description,
                   'idea' => $value->startup_idea,
                   'team' => $value->startup_team,
                   'color' => $value->startup_color,
                   'website' => $value->startup_pitch,
                   'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                   'category' => $value->category,
                   'documents' =>null,
                   'video' => $value->startup_video,
                   'sector' =>$value->startup_direction,
                   'facebook' =>$value->facebook,
                   'twitter' =>$value->twitter,
                   
                  
                   "followed" =>$following,
                   "mystartup" => $mystartup 
        
                  ];
           }
               return response()->json($start, 200, 
                           ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                           JSON_UNESCAPED_UNICODE);
            }
            
            

        }
       
       
        return 'nothing';

    }
// OLD FILTER IS UNDER THIS COMMENT LINE
    public function filter(Request $request){

        if($request->api_key == 'abcd'){

            //BOTH COUNTRY AND DIRECTION
            if(!empty($request->country) && !empty($request->direction)){
                $keys = explode(',',$request->country);
                $directs = explode(',',$request->direction);
                
              
                    if(count($keys) > count($directs) ){
                       $nekey=count($keys);
                       $ndirects=count($directs);
                       $nk=0;
                       $nd=0;
                        foreach($keys as $vals){
                           
                            
                            if($nd < $ndirects) {
                                $a=$nd++;
                                
                            }else{
                                $a=$nd - 1;
                            }
                         
                        
                        $st[]= DB::table('startups')->where([['country',$vals]],['startup_direction', $directs[$a]])->get();
                    }
                  
                        return response()->json($st, 200, 
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE);
            
                    }else if(count($keys) == count($directs))
                    {


                    }else{
                    foreach($directs as $vals){
                    $st[]= DB::table('startups')->where([['country',implode($keys)],['startup_direction',$vals]])->get();}
                    return response()->json($st, 200, 
                    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);  
                }
                   
        
                }
          
        

        // COUNTRY

            if(!empty($request->country)){
                $keys = explode(',',$request->country);
            
          
                if(count($keys) == '1' ||  count($keys) == '0'){
                    foreach ($keys as $key => $value) {
                    $st[]= DB::table('startups')->where('country',$value)->get();
                    }
                    return response()->json($st, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
                }else{
                    foreach ($keys as $key => $value) {
                $st[]= DB::table('startups')->where('country',$value)->get();
                    }
                return response()->json($st, 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
            
               
         
            $startups = Startups::all()->where('country','LIKE',$request->country )->sortBy('startup_must');
            
            
        }
            

            //DIRECTION

            if(!empty($request->direction)){
                $keys = explode(',',$request->direction);
            
          
                if(count($keys) == '1' ||  count($keys) == '0'){
                    $st[]= DB::table('startups')->where('startup_direction',$request->direction)->get();
                    return response()->json($st, 200, 
                    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
                }else{
                    foreach ($keys as $key => $value) {
                $st[]= DB::table('startups')->where('startup_direction',$value)->get();
               
            }
            return response()->json($st, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
            }
               
         
            $startups = Startups::all()->where('startup_direction','LIKE',$request->direction )->sortBy('startup_must');
          
        
            }
        
        
            }else{
            $message= array();
            $message[]=[
            'message' => ' Api key is incorrect'

            ];
            return response()->json($message);
            }

    }


    public function requests()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
        $data['startups']  = DB::table('startups')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email')->where('startups.startup_check','0' )->orderBy('startups.id','asc')->paginate(25);
        return view('backend.startups.request', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }
    public function Videorequests()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','asc')->limit(10)->get();
      
        $data['startups']  = DB::table('startups')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email')->where('startups.video_confirmation','0' )->orderBy('startups.id','desc')->paginate(25);
        return view('backend.startups.videorequests', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    public function applicants()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
        $data['startups']  = DB::table('competition_applicants')
        ->join('startups', 'competition_applicants.startup_id', '=', 'startups.id')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email','users.user_phone','competition_applicants.compl_id','competition_applicants.name as st_name')->orderBy('competition_applicants.compl_id','asc')->paginate(25);
        return view('backend.startups.competition_applicants', compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    public function competition_members()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
         $data['startups']  = DB::table('competition_members')
        ->join('startups', 'competition_members.startup_id', '=', 'startups.id')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email','users.user_phone','competition_members.id as memb_id','competition_members.* ')->orderBy('competition_members.admin_voice','desc')->orderBy('competition_members.favor','desc')->paginate(25);
       $criteria=DB::table('startup_criteria_voice')->join('users', 'startup_criteria_voice.user_id', '=', 'users.id')->select('users.*','startup_criteria_voice.*')->where('startup_criteria_voice.role','admin')->get();
       $users=DB::table('startup_points')->join('users', 'startup_points.user_id', '=', 'users.id')
       ->select('startup_points.*','users.*')->get();
     $find_juri=DB::table('startup_criteria_voice')
     ->join('users','startup_criteria_voice.user_id','=','users.id')
     ->where('startup_criteria_voice.role','=','juri')
     ->select('startup_criteria_voice.*','users.*')
     ->get();
     $count_top_20=DB::table('competition_members')->where('favor',1)->count();
       return view('backend.startups.competition_members', compact('data'),
        ['count_top_20'=>$count_top_20,'notifications' =>$notification,'count_n'=>count($count_notify),'find_juri'=>$find_juri,'criteria' =>$criteria,'users'=>$users]);
    }

    public function Allcompetition_membersApi(Request $request)
    {
        
        if($request->api_key == 'abcd'){
                  

            if($request->header('Authorization')){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $startups = Startups::Where([
                [ 'startup_status','aktiv'],['startup_check','1']]
             )->orderBy(DB::raw('RAND()'))->take(30)->get();
            $s=1;
        $data  = DB::table('competition_members')
        ->join('startups', 'competition_members.startup_id', '=', 'startups.id')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*','startups.id as startup_id', 'users.name','users.surname','users.email','users.user_phone','competition_members.id as memb_id','competition_members.* ')->orderBy('competition_members.overall','desc')->paginate(25);
        $start=array();


        foreach ($data as  $value) {
             $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->id]])->first();
                                if(empty($check)){
                                    $following =false;
                                }else{
                                    $following =true;
                                }
                                if( $value->user_id== $user->id  ){
                                    $mystartup =true;
                                }else{
                                    $mystartup =false;
                                }
                                $points_users =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'user']])->count();
                                $points_juri =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'juri']])->count();
                                $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
                                $ran=0;
                                foreach ($rank as $ranking) {
                                    
                                    $s++;
                                   if($ranking->startup_id == $value->id){
                                    $ran=$s;

                                   }
                                   
                                }
                                 
                $points_juri =DB::table('startup_points')->where([['startup_id', $value->startup_id],['user_role', 'juri']])->count();
                $comp_members = DB::table('competition_members')->where('startup_id', $value->startup_id)->first();
               $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
            $start[]=[
                'id' => $value->startup_id,
                'title' => $value->startup_title,
                'image' =>$value->startup_logo,
                'cover_image'=>$value->startup_image,
                'description' => $value->startup_description,
                'idea' => $value->startup_idea,
                'team' => $value->startup_team,
                'color' => $value->startup_color,
                'website' => $value->startup_pitch,
                'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                'category' => $value->category,
                'documents' =>null,
                'video' => $value->startup_video,
                'sector' =>$value->startup_direction,
                'facebook' =>$value->facebook,
                'twitter' =>$value->twitter,
                
                "jury_vote"=>  $comp_members->juri_voice,
                 "startup_vote"=> $comp_members->startup_voice,
                "rank"=> $ran,
                "followed" =>$following,
                "mystartup" => $mystartup 
    
               ];
        }
       
        return response()->json( $start , 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }else{

        $data  = DB::table('competition_members')
        ->join('startups', 'competition_members.startup_id', '=', 'startups.id')
        ->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*','startups.id as startup_id', 'users.name','users.surname','users.email','users.user_phone','competition_members.id as memb_id','competition_members.* ')->orderBy('competition_members.overall','desc')->paginate(25);
        $start=array();


        foreach ($data as  $value) {
           
                        
            $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
            $start[]=[
                'id' => $value->startup_id,
                'title' => $value->startup_title,
                'image' =>$value->startup_logo,
                'cover_image'=>$value->startup_image,
                'description' => $value->startup_description,
                'idea' => $value->startup_idea,
                'team' => $value->startup_team,
                'color' => $value->startup_color,
                'website' => $value->startup_pitch,
                'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                'category' => $value->category,
                'documents' =>null,
                'video' => $value->startup_video,
                'sector' =>$value->startup_direction,
                'facebook' =>$value->facebook,
                'twitter' =>$value->twitter,
                
               
    
               ];
        }
       
        return response()->json( $start , 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);


    }
        }}
    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function applicants_delete($id)
    {  
        $startups=DB::table('competition_applicants')->where('compl_id',$id)->delete();
        if ($startups) {
            return redirect(route('startup.applicants'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

    
    
public function apply_programs(Request $request){
    
    if($request->api_key == 'abcd'){
                  

        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $startups=DB::table('startups')->where('id',$request->startup_id)->first();
        $apply_programss=DB::table('competition_applicants')->where('startup_id',$request->startup_id)->first();
        // if(!$apply_programss){
            if($request->program == 'musabiqe'){
                if($startups->video_confirmation == 1){
            $apply_programs=DB::table('competition_applicants')->insert(
            [
                'name' => $request->program,
                'startup_id' => $request->startup_id
            ]
            );
        }else{
                 
            return response()->json( ['errors'=>'Davam edə bilmək üçün təstiq edilmiş videonuz yoxdur'] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
            }
        }else{
            $apply_programs=DB::table('competition_applicants')->insert(
                [
                    'name' => $request->program,
                    'startup_id' => $request->startup_id
                ]
                );
        }
           if($apply_programs) 
           {
          

            $startups=DB::table('startups')->where('id',$request->startup_id)->first();
            $usrfindnotify=DB::table('users')->where('user_role','admin')->get();
            
            foreach ($usrfindnotify as $value) {
               
                    
               
               if($request->program == 'musabiqe'){
                if($startups->video_confirmation == 1){
                $add_notify=DB::table('notifications')->insert([
                    'text'=> $startups->startup_title. '-Adlı startup Müsabiqəyə qoşulmaq istəyir',
                    'user_id' =>$value->id,
                    'url'=> '#',
                    'startup_id' => $startups->id,
                    'read'=>0,
                    'created_at' => time()
                ]);

            }else{
                 
                return response()->json( ['errors'=>'Videonuz təstiq edilməyib'] , 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
                }
               } else{
                $add_notify=DB::table('notifications')->insert([
                    'text'=> $startups->startup_title. '-Adlı startup '.$request->program.'-adlı proqrama qoşulmaq istəyir',
                    'user_id' =>$value->id,
                    'url'=> '#',
                    'startup_id' => $startups->id,
                    'read'=>0,
                    'created_at' => time()
                ]);
               }
            }
          
            
            return response()->json( ['errors'=>null] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          
          
        }else{
            return response()->json( ['errors'=>'Xəta baş verdi'] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
           }
        // }else{
        //     return response()->json( ['errors'=>'Siz artıq müsabiqəyə qatılmaq üçün müraciət etmisiniz'] , 200, 
        //     ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        //     JSON_UNESCAPED_UNICODE);
        //    }
    
    }
}
}

    public function create()
    {   
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    $questions = DB::table('questions')->get();
    $answers=DB::table('answers')->get();
    
   
        $country=DB::table('apps_countries')->orderBy('id','desc')->get();
        $directions=DB::table('innovative_directions')->orderBy('id','desc')->get();
         $users= User::all();
        return view('backend.startups.create',['answers'=>$answers,'questions'=>$questions,'notifications' =>$notification,'count_n'=>count($count_notify),'users'=>$users,'country'=>$country,'directions'=>$directions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
       
        $request->validate([
            'startup_title' => 'required|unique:startups',
            'startup_images' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'startup_logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
             

        ]);
            
 
//  }else{
//    $file_name_file = 'null';
//  }
       
        
           $file_name_logo=uniqid().'.'.$request->startup_logo->getClientOriginalExtension();
            $end_first_upload=$request->startup_logo->move('images/startups/logo',$file_name_logo);

          $file_name_images=uniqid().'.'.$request->startup_images->getClientOriginalExtension();
            $request->startup_images->move('images/startups/images',$file_name_images);
          
        if($request->answer3 == 'Pre-startap/Pre-startup (konsepsiya/ideya)'){$points = 0; }
        else if($request->answer3 == 'Erkən Mərhələ/Early Stage (İdeya reallaşdırılır / İlkin (işlək olmayan) prototip)'){$points = 10; }
        else if($request->answer3 == 'Startap/Startup (Əməliyyat Səmərəliliyi / Minimal İşlək Məhsul (MVP) / Bazara çıxarılmış tam işlək məhsul)'){$points = 20; }
        else if($request->answer3 == 'Startapın Böyüməsi/Venture Growth (Bazara çıxarılmış və əhəmiyyətli nəticələrlə məhsul , əməliyyat səmərəliyi və effektivliyi, böyümə potensialı)'){$points = 30; }
        else if($request->answer3 == 'Yetkin Biznes / KOB /Mature Venture/SME (Qurulmuş bazar mövqeyi, arta biləcək böyümə)'){$points = 40; }
            
          
        if($request->answer6 == 'Tək təsisçiyəm və komandam yoxdur'){$pointss = 0; }
        else if($request->answer6 == '2 və ya daha çox biznes və texniki bilikli həmtəsisçi'){$pointss = 5; }
        else if($request->answer6 == 'Optimallaşdırılmış komanda (balanslaşdırılmış komanda ilə birgə təsisçi/lər)'){$pointss = 10; }
        else if($request->answer6 == 'Genişlənən komanda (tam təşkilatı struktura malik çox funksiyalı komandaların genişlənməsi)'){$pointss = 15; }
     
       $all_points=$points +$pointss;
       if($all_points <= 15){
           $category='E';
       }elseif ($all_points <= 25 && $all_points >= 16) {
        $category='D';
       }elseif ($all_points <= 40 && $all_points >= 26) {
        $category='C';
       }elseif ($all_points <= 54 && $all_points >= 41) {
        $category='B';
       }elseif ( $all_points >= 55) {
        $category='A';
       }

       
        $startups = Startups::create(
                [
               
                    "startup_logo" => url('/').'/images/startups/logo/'.$file_name_logo,
                    "startup_title" => $request->startup_title,
                    "startup_description" => $request->startup_description,
                    "startup_color" => '#fff',
                    "startup_pitch" =>$request->startup_pitch,
                    "startup_image" => url('/').'/images/startups/images/'.$file_name_images,
                    "startup_idea" => $request->startup_idea,
                    "startup_documents" =>null,
                    "startup_team" => $request->startup_team,
                    "startup_video" =>$request->startup_video,
                    "country" => $request->answer1,
                    "category" =>$request->category,
                    "startup_direction" =>implode(',',$request->answer2),
                    "startup_status" => 'aktiv',
                    "startup_check" => '0',
                
                    "favor" => '0',
                    "facebook" => $request->facebook,
                    "twitter" => $request->twitter,
                    "startup_must" => '0',
                    
                    "user_id"=> \Auth::guard('web')->user()->id,
                    
                ]
            );


          
            if($request->hasFile('all_file')){
 
                $validator= $request->validate([
                
                    'all_file.*' => 'required|mimes:doc,docx,txt,excel,xls,xlsx,zip,pdf|max:6048'
                ]
                , [
                    'all_file.*' => 'Xətalı fayl. sadəcə bu tipdə fayllara icazə verilir: doc,docx,txt,excel,xls,xlsx,zip,pdf'
                ]
            );
                if ($validator) {
                $n=-1;
              
                foreach($request->all_file as $f)
            
                {
                    
            
        
             
              
                 $f->getClientOriginalExtension();
                 $file_name[$n]=uniqid().'.'. strtolower($f->getClientOriginalExtension());
                    // $filess->move('images/startups/files/', $file_name);
                     $if_exist_file= url('/').'/images/startups/files/'.$f->getClientOriginalName();
            
            
            
                     $listfilenames[] = $file_name;
            
                    $f->move('images/startups/files/', $file_name[$n]);
                           
                    
                       $update=   DB::table('startup_files')->insert( [
                           "title"=>$f->getClientOriginalName(),
                           "file" => url('/').'/images/startups/files/'.$file_name[$n], 
                           "startup_id" =>$startups->id
                       ]);
                 
            
                
               
                }
              
                   
            
            }else{
                
            }
            }
             
           
$questionss = [
    ["question"=> 'Layihənin şəhəri/ölkəsi',"answer"=>$request->answer1,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id],
    ["question"=> 'İndiyə qədər alınan maliyyə növü',"answer"=>$request->answer10,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id],
     ["question"=> 'Layihənin dövriyyəsi',"answer"=>$request->answer11,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
      ["question"=> 'Layihənin biznes modeli',"answer"=>implode(',',$request->answer12),"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
       ["question"=> 'Layihənin sahəsi',"answer"=>implode(',',$request->answer2),"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
["question"=> 'Layihənin / biznesin inkişaf mərhələsi',"answer"=>$request->answer3,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id],
["question"=> 'Təsisçilərin İngilis dili səviyyəsi',"answer"=>$request->answer4,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
["question"=> '
Layihənin yarandığı vaxtdan keçən müddət',"answer"=>$request->answer5,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
["question"=> 'Komandanın ölçüsü',"answer"=>$request->answer6,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id],
["question"=> 'Layihəyə öhdəçilik',"answer"=>$request->answer7,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id],
["question"=> 'Komanda bacarıqları',"answer"=>$request->answer8,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
["question"=> 'Layihənin cari proqresi və nəticələri',"answer"=>$request->answer9,"startup_id" =>$startups->id,"user_id"=> \Auth::guard('web')->user()->id ],
    
    //...
];
$questions_and_answers=DB::table('startup_questions')->insert($questionss);
   
        if ($startups) {
            return redirect(route('startups'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
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


    public function giveCriteriaVoice(Request $request){
        $request->validate([
            'criteria1' => 'required|numeric',
            'criteria2' => 'required|numeric',
            'criteria3' => 'required|numeric',
            'criteria4' => 'required|numeric',
            'criteria5' => 'required|numeric',
        ],[
            'criteria1' => 'Customer boş buraxıla bilməz',
            'criteria2' => 'Product boş buraxıla bilməz',
            'criteria3' => 'Competition boş buraxıla bilməz',
            'criteria4' => 'Finance boş buraxıla bilməz',
            'criteria5' => 'Team boş buraxıla bilməz',
        ]
    
    );
        $request->startup_id_voice;
        $sum=$request->criteria1+$request->criteria2+$request->criteria3+$request->criteria4+$request->criteria5;
        $startups=DB::table('startup_criteria_voice')->insert([
            'startup_id' => $request->startup_id_voice,
            'user_id' =>\Auth::guard('web')->user()->id,
            'criteria1'=>$request->criteria1,
            'criteria2'=>$request->criteria2,
            'criteria3'=>$request->criteria3,
            'criteria4'=>$request->criteria4,
            'criteria5'=>$request->criteria5,
            'overall'=>$sum,
            'role' => 'admin'
        ]); 
        $competition_membs=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)->first();
        $overal_juri=$competition_membs->admin_voice + $sum;
        $overall=$competition_membs->overall + $sum;
        $competition_membs_update=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)
        ->update([
            'admin_voice' => $overal_juri,
            'overall' =>$overall
        ]);
        $startups=DB::table('startups')->where('id', $request->startup_id_voice)->first();
        $user=DB::table('users')->where('id',$startups->user_id)->first();
        $add_notify=DB::table('notifications')->insert([
            'text'=>$user->name.' '.$user->surname.' Sizin '.$startups->startup_title.' adlı startupınıza səs verdi',
            'user_id' =>$startups->user_id,
            'url'=> '#',
            'startup_id' => $startups->id,
            'read'=>0,
            'created_at'=>time()
        ]);
        $add_timeline=DB::table('timelines')->insert([
            'title'=>$user->name.' <span class="startup-name">'.$startups->startup_title.'</span> adlı startupa səs verdi',
            'image' =>'http://www.onsideball.com/InnoProject/images/timeline/avatar.png',
           
            'date'=>time()
        ]);            
 if ($startups) {
    return back()->with('success', 'Uğurlu');
}
return back()->with('error', 'Uğursuz');


    }


    public function giveCriteriaVoice_update(Request $request)
{

 $request->validate([
            'criteria1' => 'required|numeric',
            'criteria2' => 'required|numeric',
            'criteria3' => 'required|numeric',
            'criteria4' => 'required|numeric',
            'criteria5' => 'required|numeric',
        ],[
            'criteria1' => 'Customer boş buraxıla bilməz',
            'criteria2' => 'Product boş buraxıla bilməz',
            'criteria3' => 'Competition boş buraxıla bilməz',
            'criteria4' => 'Finance boş buraxıla bilməz',
            'criteria5' => 'Team boş buraxıla bilməz',
        ]
    
    );
        $request->startup_id_voice;
        $sum=$request->criteria1+$request->criteria2+$request->criteria3+$request->criteria4+$request->criteria5;
        $startups=DB::table('startup_criteria_voice')->
        where([['startup_id','=', $request->startup_id_voice],['role','admin']])->update([
            'startup_id' => $request->startup_id_voice,
            'user_id' =>\Auth::guard('web')->user()->id,
            'criteria1'=>$request->criteria1,
            'criteria2'=>$request->criteria2,
            'criteria3'=>$request->criteria3,
            'criteria4'=>$request->criteria4,
            'criteria5'=>$request->criteria5,
            'overall'=>$sum,
            'role' => 'admin'
        ]); 
        $competition_membs=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)->first();
       
        $old_one=$competition_membs->admin_voice - $request->old_count_voice;
        $competition_membs_update=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)
        ->update([
            'admin_voice' => $old_one,
           
        ]);
        $competition_membs_new=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)->first();
        $overal_juri=$competition_membs_new->admin_voice + $sum;
        $overall=$competition_membs_new->overall + $sum;
        $competition_membs_update=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)
        ->update([
            'admin_voice' => $overal_juri,
            
        ]);
       
 if ($startups) {
    return back()->with('success', 'Uğurlu');
}
return back()->with('error', 'Uğursuz');


}
public function juripointsupdate(Request $request){
    $competition_membs_update=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)
        ->update([
            'juri_voice' => $request->new_juri,
            
        ]);
        if ($competition_membs_update) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
        
}

public function userpointsupdate(Request $request){
    $competition_membs_update=DB::table('competition_members')->where('startup_id',$request->startup_id_voice)
        ->update([
            'startup_voice' => $request->new_user_point,
            
        ]);
        if ($competition_membs_update) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
        
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
     
        $country=DB::table('apps_countries')->get();
        $questions=DB::table('startup_questions')->where('startup_id',$id)->get();
        $directions=DB::table('innovative_directions')->get();
        $startup =DB::table('startups')->join('users', 'startups.user_id', '=', 'users.id')
        ->select('startups.*', 'users.name','users.surname','users.email','users.user_phone')->where('startups.id', $id)->first();
        
        $files = StartupFiles::all()->where('startup_id', $id);
        return view('backend.startups.edit' , ['notifications' =>$notification,'count_n'=>count($count_notify),'country'=>$country,'directions'=>$directions,'files'=>$files,'questions'=>$questions,'startup'=> $startup]);
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

        $request->validate([
            'startup_title' => 'required',

        ]);


     

            if ($request->hasFile('startup_images') || $request->hasFile('startup_logo') || $request->hasFile('all_file')) {

          
if($request->startup_images){
            
 $request->validate([
                 'startup_images' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            
      
           $file_name_images=uniqid().'.'.$request->startup_images->getClientOriginalExtension();
            $request->startup_images->move('images/startups/images',$file_name_images);
      

             $startups = Startups::Where('id', $id)->update(
                    [
                        
             
                "startup_title" => $request->startup_title,
                "startup_description" => $request->startup_description,
                "startup_color" => '#fff',
                "startup_pitch" => $request->startup_pitch,
                "startup_image" => url('/').'/images/startups/images/'.$file_name_images,
                "startup_video" => $request->startup_video,
                "startup_status" => 'aktiv',
                "startup_team" => $request->startup_team,
            
                "category" => $request->category,
               
                    ]
                );
                $path =  $request->oldimages;
                if (file_exists($path)) {
                    @unlink($path);
                }
}
if ($request->hasFile('startup_logo')) {
            $request->validate([
                'startup_logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name_logo = uniqid() . '.' . $request->startup_logo->getClientOriginalExtension();
            $request->startup_logo->move('images/startups/logo', $file_name_logo);

      $path =  $request->old_file_logo;
            if (file_exists($path)) {
                @unlink($path);
            }

              $startups = Startups::Where('id', $id)->update(
                    [
                        
                "startup_logo" => url('/').'/images/startups/logo/'.$file_name_logo,
                "startup_title" => $request->startup_title,
                "startup_description" => $request->startup_description,
                "startup_color" => $request->color,
                "startup_pitch" => $request->startup_pitch,
                "startup_video" => $request->startup_video,
                "startup_status" => 'aktiv',
                 "startup_team" => $request->startup_team,
                 
                 "category" => $request->category,
       
                    ]
                );

        } 
        if($request->hasFile('all_file')){
           
            $validator= $request->validate([
                
                'all_file.*' => 'required|mimes:doc,docx,txt,excel,xls,xlsx,zip,pdf|max:6048'
            ]
            , [
                'all_file.*' => 'Xətalı fayl. sadəcə bu tipdə fayllara icazə verilir: doc,docx,txt,excel,xls,xlsx,zip,pdf'
            ]
        );
          
        if ($validator) {
            foreach ($request->all_file as $file) {
               
                $if_exist_file= url('/').'/images/startups/files/'.$file->getClientOriginalName().'-'.uniqid().$file->getClientOriginalExtension();
                $file_of=StartupFiles::all()->Where('startup_id', $id)->WhereIn('file',$if_exist_file);
                         
                $file_name_file=uniqid().'.'.$file->getClientOriginalExtension();
                $file->move('images/startups/files', $file_name_file);
              
                if(count($file_of) > 0){
                    
                   $startups= StartupFiles::Where('file',$if_exist_file)->update(
                       [
                   "title"=>$file->getClientOriginalName(),
                   "file" => url('/').'/images/startups/files/'.$file_name_file, 
                  
                   ]
                   );
            
                  }else{
               
              

                
                   $startups=   DB::table('startup_files')->insert( [
                       "title"=>$file_name_file,
                       "file" => url('/').'/images/startups/files/'.$file_name_file, 
                       "startup_id" =>$id
                   ]);

                 
               
            
                  }
                    
                        
                      
                
                      
                          
            }}
         }else{
           $file_name_file = 'null';
         }

        
// if($request->hasFile('startup_logo')){
//      $request->validate([
//                 'startup_logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
//             ]);
// $file_name_logo = uniqid() . '.' . $request->startup_logo->getClientOriginalExtension();
//             $request->startup_logo->move(public_path('images/startups/logo'), $file_name_logo);


//  $path = 'images/startups/logo/' . $request->old_file_logo;
//             if (file_exists($path)) {
//                 @unlink(public_path($path));
//             }
                   
                    
 if ($startups) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    

            
             
             

       

            } else {

                $startups = Startups::Where('id', $id)->update(
                    [
                        
               
                "startup_title" => $request->startup_title,
                "startup_description" => $request->startup_description,
                "startup_color" => '#fff',
                "startup_pitch" => $request->startup_pitch,
                  "startup_team" => $request->startup_team,
                "startup_video" => $request->startup_video,
                
                "startup_status" => 'aktiv',
                 "startup_team" => $request->startup_team,
                
                 "category" => $request->category,
               
                    ]
                );

           
 if ($startups) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }

        }

       


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


public function block($id){
 $Startups= Startups::find(intval($id));
 $Startups->startup_status;
 $startup_update_status=Startups::Where('id', $id)->update([

    'startup_status' => 'passiv'

 ]);
 if($startup_update_status){
    return back()->with('success', 'Startup blok edildi');
 }
 return back()->with('error', 'Uğursuz');



}
public function unblock($id){
 $Startups= Startups::find(intval($id));
 $Startups->startup_status;
 $startup_update_status=Startups::Where('id', $id)->update([

    'startup_status' => 'aktiv'

 ]);
 if($startup_update_status){
    return back()->with('success', 'Startup aktiv edildi');
 }
 return back()->with('error', 'Uğursuz');



}

    public function approve($id){
$startups= Startups::find(intval($id));
 $startups->startup_status;
 $startup_update_status=Startups::Where('id', $id)->update([

    'startup_check' => '1',
    'startup_status' => 'aktiv'

 ]);
 
 $add_notify=DB::table('notifications')->insert([
     'text'=>'Sizin '.$startups->startup_title.' adlı startupınız təstiq edildi',
     'user_id' =>$startups->user_id,
     'url'=> '#',
     'read'=>0,
     'startup_id' => $startups->id,
     'created_at'=>time()
 ]);
 if($startup_update_status){
    return redirect(route('startup.requests'))->with('success', 'Startup təstiq edildi');

 }
 return back()->with('error', 'Uğursuz');


    }
    public function approve_applicants($id){
        $startups_s=DB::table('competition_applicants')->Where('compl_id', $id)->first();
        $startups= Startups::find(intval($startups_s->startup_id));
         $startups->startup_status;
         $competition_members=DB::table('competition_members')->Where('id', $id)->insert([
            'user_id' => $startups->user_id,
            'startup_id' => $startups->id,
            'juri_voice' => 0,
            'startup_voice'=>0,
            'admin_voice'=>0,
            'favor' =>0
        
         ]);
         
         $add_notify=DB::table('notifications')->insert([
             'text'=>'Sizin '.$startups->startup_title.' adlı startupınız Müsabiqəyə qəbul edildi.',
             'user_id' =>$startups->user_id,
             'url'=> '#',
             'startup_id'=>$startups->id,
             'read'=>0,
             'created_at'=>time()
         ]);
         if($competition_members){
            $remove=DB::table('competition_applicants')->Where('compl_id', $id)->delete();
            return back()->with('success', 'Startup müsabiqəyə əlavə edildi');
         }
         return back()->with('error', 'Uğursuz');
        
        
            }


    public function approvevideo($id){
        $startups= Startups::find(intval($id));
         $startups->startup_status;
         $startup_update_status=Startups::Where('id', $id)->update([
        
            'video_confirmation' => '1',
           
        
         ]);
         
         $add_notify=DB::table('notifications')->insert([
             'text'=>'Sizin '.$startups->startup_title.' adlı startupınız üçün əlavə etdiyiniz video təstiq edildi',
             'user_id' =>$startups->user_id,
             'url'=> '#',
             'startup_id' => $startups->id,
             'read'=>0,
             'created_at'=>time()
         ]);
         if($startup_update_status){
            return back()->with('success', 'Video təstiq edildi');
         }
         return back()->with('error', 'Uğursuz');
        
        
            }
            public function unapproovevideo($id){
                $startups= Startups::find(intval($id));
                 $startups->startup_status;
                 $startup_update_status=Startups::Where('id', $id)->update([
                
                    'video_confirmation' => '2',
                   
                
                 ]);
                 
                 $add_notify=DB::table('notifications')->insert([
                     'text'=>'Sizin '.$startups->startup_title.' adlı startupınız üçün əlavə etdiyiniz video Qəbul edilmədi.',
                     'user_id' =>$startups->user_id,
                     'url'=> '#',
                     'startup_id' => $startups->id,
                     'read'=>0,
                     'created_at'=>time()
                 ]);
                 if($startup_update_status){
                    return back()->with('success', 'Videodan imtina edildi');
                 }
                 return back()->with('error', 'Uğursuz');
                
                
                    }


     public function favor($id){
$startups= Startups::find(intval($id));
 if($startups->favor == 0){
 $startup_update_favor=Startups::Where('id', $id)->update([

    'favor' => '1',
 

 ]);
}else{

     $startup_update_favor=Startups::Where('id', $id)->update([

    'favor' => '0',
 

 ]);
}


 if($startup_update_favor){
    return back()->with('success', 'Istifadəçi təstiq edildi');
 }
 return back()->with('error', 'Uğursuz');


    }


    public function TopTwenty($id){


        $startups= DB::table('competition_members')->where('startup_id',$id)->first();
        if($startups->favor == 0){
        $startup_update_favor=DB::table('competition_members')->Where('startup_id', $id)->update([
       
           'favor' => '1',
        
       
        ]);
       }else{
       
            $startup_update_favor=DB::table('competition_members')->Where('startup_id', $id)->update([
       
           'favor' => '0',
        
       
        ]);
       }
       
       
        if($startup_update_favor){
           return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
       
       

    }

    public function destroy($id)
    {

        $startups = Startups::find(intval($id));

         $path = $startups->logo;
            if (file_exists($path)) {
                @unlink($path);
            }
            $patho =$startups->image;
            if (file_exists($patho)) {
                @unlink($patho);
            }
            
      $startups1 = Startups::where('id', $id)->first();
        if ($startups1->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

    public function destroy_file($id){

        $startups = StartupFiles::find(intval($id));

         $path = $startups->file;
            if (file_exists($path)) {
                @unlink($path);
            }
            
            
      $startups1 = StartupFiles::where('id', $id)->first();
        if ($startups1->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

    public function comment($id, Request $request){
        $startups = Startups::find(intval($id));
        
        $add_comment=DB::table('startup_comments')->insert([
            'text'=> $request->comment,
            'startup_id' =>$startups->id
        ]);
        $add_cancel=Startups::Where('id', $id)->update([
            
            'startup_check' =>2
        ]);
        $add_notify=DB::table('notifications')->insert([
            'text'=> $startups->startup_title. '-Adlı Startup qəbul edilmədi. Ətraflı - " '.$request->comment.'"',
            'user_id' =>$startups->user_id,
            'url'=> '#',
            'startup_id'=>$startups->id,
            'read'=>0,
            'created_at'=>time(),
        ]);
        if ($add_notify) {
            return back()->with('success', 'Uğurlu');
           }
       return back()->with('error', 'Uğursuz');
    }
    
    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $startups = Startups::find(intval($value));
            $startups->startup_must = intval($key);
            $startups->save();
        }
        echo true;
    }
    public function CreateApi(Request $request){
        if($request->api_key == 'abcd'){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $check= Startups::where('startup_title', htmlspecialchars($request->title))->first();
            if($check){
                return response()->json(['errors'=>array('Bu startap adı artıq istifadə edilir')], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }else{
            if($request->hasFile('logo')){
                $validator= $request->validate([
                
                    'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name_logo=uniqid().'.'.$request->logo->getClientOriginalExtension();
                  
                      
               $request->logo->move('images/startups/logo/',$file_name_logo);
      
           
               }else{
                return 'invalid file';
            }
                
                }
          
                   
      
            
            if($request->hasFile('image')){
                $validator= $request->validate([
                
                    'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name_image=uniqid().'.'.$request->image->getClientOriginalExtension();
                  
                      
               $request->image->move('images/startups/images/',$file_name_image);
           
           
               }else{
                return 'invalid file';
            }
                
            }
            $points = 0;
        if($request->answer3 == 'Pre-startap/Pre-startup (konsepsiya/ideya)'){$points = 0; }
        else if($request->answer3 == 'Erkən Mərhələ/Early Stage (İdeya reallaşdırılır / İlkin (işlək olmayan) prototip)'){$points = 10; }
        else if($request->answer3 == 'Startap/Startup (Əməliyyat Səmərəliliyi / Minimal İşlək Məhsul (MVP) / Bazara çıxarılmış tam işlək məhsul)'){$points = 20; }
        else if($request->answer3 == 'Startapın Böyüməsi/Venture Growth (Bazara çıxarılmış və əhəmiyyətli nəticələrlə məhsul , əməliyyat səmərəliyi və effektivliyi, böyümə potensialı)'){$points = 30; }
        else if($request->answer3 == 'Yetkin Biznes / KOB /Mature Venture/SME (Qurulmuş bazar mövqeyi, arta biləcək böyümə)'){$points = 40; }
            
        $pointss = 0; 
        if($request->answer6 == 'Tək təsisçiyəm və komandam yoxdur'){$pointss = 0; }
        else if($request->answer6 == '2 və ya daha çox biznes və texniki bilikli həmtəsisçi'){$pointss = 5; }
        else if($request->answer6 == 'Optimallaşdırılmış komanda (balanslaşdırılmış komanda ilə birgə təsisçi/lər)'){$pointss = 10; }
        else if($request->answer6 == 'Genişlənən komanda (tam təşkilatı struktura malik çox funksiyalı komandaların genişlənməsi)'){$pointss = 15; }
     
       $all_points=$points +$pointss;
       $category=null;
       if($all_points <= 15){
           $category='E';
       }elseif ($all_points <= 25 && $all_points >= 16) {
        $category='D';
       }elseif ($all_points <= 40 && $all_points >= 26) {
        $category='C';
       }elseif ($all_points <= 54 && $all_points >= 41) {
        $category='B';
       }elseif ( $all_points >= 55) {
        $category='A';
       }
    
            $startups = Startups::create(
                [
               
                    "startup_logo" => url('/').'/images/startups/logo/'.$file_name_logo,
                    "startup_title" => $request->title,
                    "startup_description" => $request->description,
                    "startup_color" => 'fff',
                    "startup_pitch" => str_replace("'",'',str_replace(">",'',str_replace("<",'',$request->website))),
                    "startup_image" => url('/').'/images/startups/images/'.$file_name_image,
                    "startup_idea" => $request->idea,
                    "startup_documents" =>null,
                    "startup_team" => $request->team,
                    "startup_video" =>'#',
                    "country" => $request->answer1,
                    "category" =>  $category,
                    "startup_direction" => $request->answer2,
                    "startup_status" => 'aktiv',
                    "startup_check" => '0',
                    "favor" => '0',
                    "facebook" => $request->facebook,
                    "twitter" => $request->twitter,
                    "startup_must" => '0',
                    "user_id"=> $user->id
                    
                ]
            );
$questionss = [
    ["question"=> 'Layihənin şəhəri/ölkəsi',"answer"=>$request->answer1,"startup_id" =>$startups->id,"user_id"=> $user->id],
    ["question"=> 'İndiyə qədər alınan maliyyə növü',"answer"=>$request->answer10,"startup_id" =>$startups->id,"user_id"=> $user->id ],
     ["question"=> 'Layihənin dövriyyəsi',"answer"=>$request->answer11,"startup_id" =>$startups->id,"user_id"=> $user->id ],
      ["question"=> 'Layihənin biznes modeli',"answer"=>$request->answer12,"startup_id" =>$startups->id,"user_id"=> $user->id ],
       ["question"=> 'Layihənin sahəsi',"answer"=>$request->answer2,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Layihənin / biznesin inkişaf mərhələsi',"answer"=>$request->answer3,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Təsisçilərin İngilis dili səviyyəsi',"answer"=>$request->answer4,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> '
Layihənin yarandığı vaxtdan keçən müddət',"answer"=>$request->answer5,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Komandanın ölçüsü',"answer"=>$request->answer6,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Layihəyə öhdəçilik',"answer"=>$request->answer7,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Komanda bacarıqları',"answer"=>$request->answer8,"startup_id" =>$startups->id,"user_id"=> $user->id ],
["question"=> 'Layihənin cari proqresi və nəticələri',"answer"=>$request->answer9,"startup_id" =>$startups->id,"user_id"=> $user->id ],
    
    //...
];
$questions_and_answers=DB::table('startup_questions')->insert($questionss);

            $startup_detail= new \StdClass;
            $startup_detail->id= $startups->id;
            $startup_detail->title= $startups->startup_title;
            $startup_detail->description= $startups->startup_description;
            $startup_detail->idea= $startups->startup_idea;
            $startup_detail->color= $startups->startup_color;
            $startup_detail->video= $startups->startup_video;
            $startup_detail->website= $startups->startup_pitch;
            $startup_detail->image= $startups->startup_image;
            $startup_detail->logo= $startups->startup_logo;
            $startup_detail->team= $startups->startup_team;
            $startup_detail->country= $startups->country;
            $startup_detail->facebook= $request->facebook;
            $startup_detail->twitter= $request->twitter;
            $startup_detail->sector= $startups->startup_direction;
            $startup_detail->draft= 'pending';
            
           


        //     if($request->hasFile('files')){      
        //         $validator= $request->validate([
                
        //             'files.*' => 'required|file|mimes:doc,docx,txt,excel,xls,zip|max:6048'
        //         ]);
        //         if ($validator) {
        //         $n=-1;
        //         foreach($request->files as $filess)
         
        //         {
                     
           
        //      foreach($filess as $f){
        //        $n++;
        //          $f->getClientOriginalExtension();
        //          $file_name[$n]=uniqid().'.'. strtolower($f->getClientOriginalExtension());
        //             // $filess->move('images/startups/files/', $file_name);
        //              $if_exist_file= url('/').'/images/startups/files/'.$f->getClientOriginalName();
            
           

                    
                
                
        //           $listfilenames[] = $file_name;

        //           $f->move('images/startups/files/', $file_name[$n]);
                        
                 
        //             $update_files[]=   StartupFiles::create( [
        //                 "title"=>$request->file_title[$n],
        //                 "file" => url('/').'/images/startups/files/'.$file_name[$n], 
        //                 "startup_id" =>$startups->id
        //             ]);

                  
                
             
                   
        
        //         }
        //         }
               
                   
        
        //     }else{
        //         return 'invalid file';
        //     }
        // }
       
            
            
    
            if ($startups) {
                $add_notify=DB::table('notifications')->insert([
                    'text'=>$startups->startup_title.' adlı startup təstiq gözləyir',
                    'user_id' =>'6',
                    'url'=> '#',
                    'startup_id' => $startups->id,
                    'read'=>0,
                    'created_at' => time()
                ]);
                $question=DB::table('startup_questions')->where('startup_id',$startups->id)->get();
                return response()->json(['startup'=>$startup_detail,'answers'=>$question], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }else{ 
                return response()->json(['errors'=>array('something not good')], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
          
      
        }
    }
    }
    public function UpdateApi($startup_id,Request $request){
        $request->twitter;
      if($request->twitter == 'null' ){
        $request->twitter= null;
       }
        if($request->api_key == 'abcd'){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
            $checkUser=DB::table('startups')->where([['user_id', $user->id],['id',$startup_id]])->first();
         if($checkUser){
        if(!empty($request->title)){
             $request->merge(['startup_title' =>   $request->title]);
        }
        if($request->website == 'null' ){
            $request->website= null;
           }
        if(empty($request->website) ){
            $request->website= null;
           }
        $request->merge(['startup_pitch' => $request->website]);
       if($request->facebook == 'null'){
            $request->facebook= null;
           }
        if(empty($request->facebook) ){
            $request->facebook= null;
           }
           $request->merge(['facebook' => $request->facebook]);
       if($request->facebook){
        $request->merge(['facebook' => $request->facebook]);
   }

   $request->merge(['twitter' => $request->twitter]);
   if($request->twitter){
       if(empty($request->twitter) ){
        $request->twitter= null;
       }
    $request->merge(['twitter' => $request->twitter]);
}

        if(!empty($request->idea)){
        $request->merge(['startup_idea' => htmlspecialchars($request->idea)]);
   }
        if(!empty($request->description)){
    $request->merge(['startup_description' => htmlspecialchars($request->description)]);
}
        if(!empty($request->color)){
    $request->merge(['startup_color' => htmlspecialchars($request->color)]);
        }
        if(!empty($request->video)){
            $request->merge(['startup_video' => $request->video]);
           
            $request->merge(['video_confirmation' => 0]);
           
            $usrfindnotify=DB::table('users')->where('user_role','admin')->get();
            foreach ($usrfindnotify as $value) {
                $add_notify=DB::table('notifications')->insert([
                    'text'=> $checkUser->startup_title. '-Adlı startup video təstiqi gözləyir',
                    'user_id' =>$value->id,
                    'url'=> '#',
                    'read'=>0,
                    
                    'startup_id' => $checkUser->id,
                    'created_at' => time()
                ]);
            }
          

        }


       

        if(!empty($request->team)){
                    $request->merge(['startup_team' => htmlspecialchars($request->team)]);
                }
        if(!empty($request->answer1)){
            $points = 0;
            if($request->answer3 == 'Pre-startap/Pre-startup (konsepsiya/ideya)'){$points = 0; }
            else if($request->answer3 == 'Erkən Mərhələ/Early Stage (İdeya reallaşdırılır / İlkin (işlək olmayan) prototip)'){$points = 10; }
            else if($request->answer3 == 'Startap/Startup (Əməliyyat Səmərəliliyi / Minimal İşlək Məhsul (MVP) / Bazara çıxarılmış tam işlək məhsul)'){$points = 20; }
            else if($request->answer3 == 'Startapın Böyüməsi/Venture Growth (Bazara çıxarılmış və əhəmiyyətli nəticələrlə məhsul , əməliyyat səmərəliyi və effektivliyi, böyümə potensialı)'){$points = 30; }
            else if($request->answer3 == 'Yetkin Biznes / KOB /Mature Venture/SME (Qurulmuş bazar mövqeyi, arta biləcək böyümə)'){$points = 40; }
                
            $pointss = 0; 
            if($request->answer6 == 'Tək təsisçiyəm və komandam yoxdur'){$pointss = 0; }
            else if($request->answer6 == '2 və ya daha çox biznes və texniki bilikli həmtəsisçi'){$pointss = 5; }
            else if($request->answer6 == 'Optimallaşdırılmış komanda (balanslaşdırılmış komanda ilə birgə təsisçi/lər)'){$pointss = 10; }
            else if($request->answer6 == 'Genişlənən komanda (tam təşkilatı struktura malik çox funksiyalı komandaların genişlənməsi)'){$pointss = 15; }
         
           $all_points=$points +$pointss;
           $category=null;
           if($all_points <= 15){
               $category='E';
           }elseif ($all_points <= 25 && $all_points >= 16) {
            $category='D';
           }elseif ($all_points <= 40 && $all_points >= 26) {
            $category='C';
           }elseif ($all_points <= 54 && $all_points >= 41) {
            $category='B';
           }elseif ( $all_points >= 55) {
            $category='A';
           }
           $request->merge(['category' => $category]);
                    $request->merge(['country' => $request->answer1]);
                }

        if(!empty($request->sectors)){
                    $request->merge(['startup_sectors' => htmlspecialchars($request->startup_direction)]);
        }
       
        if(!empty($request->draft )){
            if($request->draft == false){
                $request->merge(['startup_status' => 'aktiv']);

            } else{
                $request->merge(['startup_status' => 'draft']);
            } 
        }
              
  
                if($request->hasFile('logo')){
                $validator= $request->validate([
                
                    'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name_logo=uniqid().'.'.$request->logo->getClientOriginalExtension();
                  
                      
               $request->logo->move('images/startups/logo/',$file_name_logo);

               Startups::Where('id',$startup_id)->update(['startup_logo' => url('/').'/images/startups/logo/'.$file_name_logo]);
               }else{
                return 'invalid file';
            }
                
                }
          
                   
      
            
            if($request->image){
                $validator= $request->validate([
                
                    'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name_image=uniqid().'.'.$request->image->getClientOriginalExtension();
                  
                      
               $request->image->move('images/startups/images/',$file_name_image);
              
               
               $request->merge(['startup_image' => url('/').'/images/startups/images/'.$file_name_image]);
               }else{
                return 'invalid file';
            }
                
            }
        

            if($checkUser->startup_check == '2'){
                $request->merge(['startup_check' => '0']);
                $usrfindnotify=DB::table('users')->where('user_role','admin')->get();
                foreach ($usrfindnotify as $value) {
                    $add_notify=DB::table('notifications')->insert([
                        'text'=> 'İmtina edilmiş '.$checkUser->startup_title. '-Adlı startup Yenidən Təstiq gözləyir',
                        'user_id' =>$value->id,
                        'url'=> '#',
                        'startup_id' => $checkUser->id,
                        'read'=>0,
                        'created_at' => time()
                    ]);
                }
    
            }
        $inputs= $request->all();
        $startups=Startups::find(intval($startup_id));
        $updateStartup=$startups->update($inputs);

        $startup_detail= new \StdClass;
        $startup_detail->id= $startups->id;
        $startup_detail->title= $startups->startup_title;
        $startup_detail->description= $startups->startup_description;
        $startup_detail->idea= $startups->startup_idea;
        $startup_detail->color= $startups->startup_color;
        $startup_detail->video= $startups->startup_video;
        $startup_detail->website= $startups->startup_pitch;
        $startup_detail->image= $startups->startup_image;
        $startup_detail->logo= $startups->startup_logo;
        $startup_detail->team= $startups->startup_team;
        $startup_detail->country= $startups->country;
        $startup_detail->facebook= $startups->facebook;
        $startup_detail->twitter= $startups->twitter;
        $startup_detail->sector= $startups->startup_direction;
        $startup_detail->video_confirmation= $startups->video_confirmation;
        $startup_detail->draft= false;
        $files=StartupFiles::all()->Where('startup_id',  $startups->id);
        if(!empty($request->answer1 )){
        DB::table('startup_questions')->where('startup_id' , $startups->id)->delete();
        $questionss = [
            ["question"=> 'Layihənin şəhəri/ölkəsi',"answer"=>$request->answer1,"startup_id" =>$startups->id,"user_id"=> $user->id],
            ["question"=> 'İndiyə qədər alınan maliyyə növü',"answer"=>$request->answer10,"startup_id" =>$startups->id,"user_id"=> $user->id ],
             ["question"=> 'Layihənin dövriyyəsi',"answer"=>$request->answer11,"startup_id" =>$startups->id,"user_id"=> $user->id ],
              ["question"=> 'Layihənin biznes modeli',"answer"=>$request->answer12,"startup_id" =>$startups->id,"user_id"=> $user->id ],
               ["question"=> 'Layihənin sahəsi',"answer"=>$request->answer2,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Layihənin / biznesin inkişaf mərhələsi',"answer"=>$request->answer3,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Təsisçilərin İngilis dili səviyyəsi',"answer"=>$request->answer4,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> '
        Layihənin yarandığı vaxtdan keçən müddət',"answer"=>$request->answer5,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Komandanın ölçüsü',"answer"=>$request->answer6,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Layihəyə öhdəçilik',"answer"=>$request->answer7,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Komanda bacarıqları',"answer"=>$request->answer8,"startup_id" =>$startups->id,"user_id"=> $user->id ],
        ["question"=> 'Layihənin cari proqresi və nəticələri',"answer"=>$request->answer9,"startup_id" =>$startups->id,"user_id"=> $user->id ],
            
            //...
        ];
        $questions_and_answers=DB::table('startup_questions')->insert($questionss);
    }
        if($updateStartup){
             
            return response()->json(['errors'=>null,'startup'=>$startup_detail,'files'=> $files], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }}else{
  
            return response()->json(['errors'=>array('Api is incorrect')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }



    }else{
        return response()->json(['errors'=>array('Xəta baş verdi')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    }

        public function InfoApi($startup_id, Request $request){
            if($request->api_key == 'abcd'){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $checkUser=DB::table('startups')->where([['user_id', $user->id],['id',$startup_id]])->first();
             if($checkUser){
            $startups= Startups::find(intval($startup_id));
            $join=DB::table('competition_members')->where('startup_id', $startup_id)->first();
            if($join == null){
             $joined= false;
            }else{
             $joined= true;
            }
            $startup_questions=DB::table('startup_questions')->where('startup_id',  $startups->id)->get();
            $files=StartupFiles::Where('startup_id',  $startups->id)->get();
            $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();

            $startup_detail= new \StdClass;
            $startup_detail->id= $startups->id;
            $startup_detail->title= $startups->startup_title;
            $startup_detail->description= $startups->startup_description;
            $startup_detail->idea= $startups->startup_idea;
            $startup_detail->color= $startups->startup_color;
            $startup_detail->video= $startups->startup_video;
            $startup_detail->video_confirmation= $startups->video_confirmation;
            $startup_detail->website= $startups->startup_pitch;
            $startup_detail->image= $startups->startup_image;
            $startup_detail->logo= $startups->startup_logo;
            $startup_detail->team= $startups->startup_team;
            $startup_detail->country=  array("code"=>$startups->country,"name"=>$country_name->country_name);
            $startup_detail->category= $startups->category;
            $startup_detail->facebook= $startups->facebook;
            $startup_detail->twitter= $startups->twitter;
            $startup_detail->sector= $startups->startup_direction;
            $startup_detail->startup_check= $startups->startup_check;
            $startup_detail->draft= false;
          
            $startup_detail->joined= $joined;
            if($checkUser->video_confirmation == 1 && $checkUser->category == "B" || $checkUser->category == "C")
            {
            
                $apply_programss=DB::table('competition_applicants')->where('startup_id',$startups->id)->first();
        
                if(!$apply_programss){
                    if($startups->video_confirmation != 1){
                        $startup_detail->canjoincompetition = false;
                    }else{
                        $startup_detail->canjoincompetition = true;
                    }
                
        }else{
            $startup_detail->canjoincompetition = false;
        }
            }
            else{
                $startup_detail->canjoincompetition = false;
            }
            return response()->json(['startup'=>$startup_detail,'files'=> $files,'questions_and_answers'=> $startup_questions], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
             }else{
                return response()->json(['errors'=>array('Xəta baş verdi')], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
             }
            
            }else{
                return response()->json(['errors'=>array('Api key yanlışdır')], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
        }


        public function AllStartupsDetail($startup_id, Request $request){
            if($request->api_key == 'abcd'){
            
            $startups= Startups::find(intval($startup_id));
            
            $startup_questions=DB::table('startup_questions')->where('startup_id',  $startups->id)->get();
            $files=StartupFiles::Where('startup_id',  $startups->id)->get();
            $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();

            $startup_detail= new \StdClass;
            $startup_detail->id= $startups->id;
            $startup_detail->title= $startups->startup_title;
            $startup_detail->description= $startups->startup_description;
            $startup_detail->idea= $startups->startup_idea;
            $startup_detail->color= $startups->startup_color;
            $startup_detail->video= $startups->startup_video;
            $startup_detail->website= $startups->startup_pitch;
            $startup_detail->image= $startups->startup_image;
            $startup_detail->logo= $startups->startup_logo;
            $startup_detail->team= $startups->startup_team;
            $startup_detail->country= array("code"=>$startups->country,"name"=>$country_name->country_name);
            $startup_detail->category= $startups->category;
            $startup_detail->facebook= $startups->facebook;
            $startup_detail->twitter= $startups->twitter;
            $startup_detail->sector= $startups->startup_direction;
            $startup_detail->video_confirmation= $startups->video_confirmation;
            if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;     if($user->id == $startups->user_id){
                $startup_detail->mystartup= true;

            }else{
                $startup_detail->mystartup= false;
            }

            $join=DB::table('competition_members')->where('startup_id', $startups->id)->first();
           if($join == null){
            $startup_detail->joined= false;
           }else{
            $startup_detail->joined= true;
           }
            $startup_follower=DB::table('startup_followers')->where([['startup_id', $startups->id],['user_id','=', $user->id]])->first();
           if($startup_follower == null){
               
             $startup_detail->followed = false;
           }else{
           
            $startup_detail->followed = true;
           }}else{
            $startup_detail->followed = false;
           }

            $startup_detail->draft= false;
            return response()->json(['startup'=>$startup_detail,'files'=> $files], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          
            
            }else{
                return response()->json(['errors'=>array('Api key yanlışdır')], 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }

        }

        public function addFilesApi($startup_id, Request $request){
            if($request->api_key == 'abcd'){
                $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
                $user->id;
                $checkUser=DB::table('startups')->where([['user_id', $user->id],['id',$startup_id]])->first();
             if($checkUser){
            $startup= Startups::find(intval($startup_id));
            
            if($request->hasFile('logo')){
                $validator= $request->validate([
                
                    'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name=uniqid().'.'.$request->logo->getClientOriginalExtension();
                  
                      
               $request->logo->move('images/startups/logo/',$file_name);
                $path = $startup->startup_logo;
                if (file_exists($path)) {
         $old_logo=url('/').'/images/startups/logo/avatar-startup.jpg';
                    if($startup->logo != $old_logo){
                        @unlink($path);
                    }
                
            }
               $update= Startups::Where('id', $startup_id)->update(
                    [
                "startup_logo" => url('/').'/images/startups/logo/'.$file_name, ]
                );
               }else{
                return 'invalid file';
            }
                
                }
                // $file_name=uniqid().'.'.$request->logo->getClientOriginalExtension();
                   
      
             
              
            
            if($request->hasFile('image')){
                $validator= $request->validate([
                
                    'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
                ]);
                if ($validator) {
                   $file_name=uniqid().'.'.$request->image->getClientOriginalExtension();
                  
                      
               $request->image->move('images/startups/images/',$file_name);
                $path = $startup->startup_image;
                if (file_exists($path)) {
         $old_image=url('/').'/images/startups/images/avatar-startup.jpg';
                    if($startup->image != $old_image){
                        @unlink($path);
                    }
                
            }
               $update= Startups::Where('id', $startup_id)->update(
                    [
                "startup_image" => url('/').'/images/startups/images/'.$file_name, ]
                );
               }else{
                return 'invalid file';
            }
                
            }

            if($request->hasFile('files')){
                $validator= $request->validate([
                
                    'files.*' => 'required|mimes:doc,docx,txt,excel,xls,xlsx,zip,pdf|max:6048'
                ]
                , [
                    'files.*' => 'Xətalı fayl. sadəcə bu tipdə fayllara icazə verilir: doc,docx,txt,excel,xls,xlsx,zip,pdf'
                ]
            );
                if ($validator) {
                $n=-1;
                foreach($request->files as $filess)
         
                {
                     
           
             foreach($filess as $f){
               $n++;
                 $f->getClientOriginalExtension();
                 $file_name[$n]=uniqid().'.'. strtolower($f->getClientOriginalExtension());
                    // $filess->move('images/startups/files/', $file_name);
                     $if_exist_file= url('/').'/images/startups/files/'.$f->getClientOriginalName();
            
           
  
                     $listfilenames[] = $file_name;

                     $f->move('images/startups/files/', $file_name[$n]);
                           
                    
                       $update=   DB::table('startup_files')->insert( [
                           "title"=>$f->getClientOriginalName(),
                           "file" => url('/').'/images/startups/files/'.$file_name[$n], 
                           "startup_id" =>$startup_id
                       ]);
                 
        
                }
                }
               
                   
        
            }else{
                
            }
        }
       

            if($update){
              $startup_logos=Startups::Where('id', $startup_id)->first();
              $startup_files=StartupFiles::Where('startup_id', $startup_id)->get();
                return response()->json(['files'=>$startup_files,'logo'=> $startup_logos->startup_logo,'image'=> $startup_logos->startup_image], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
            }else{
               
                return response()->json(['errors'=>array('Xəta baş verdi')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
            }
        }else{
  
            return response()->json(['errors'=>array('Api is incorrect')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }

    }else{
  
        return response()->json(['errors'=>array('Api is incorrect')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);

    }
}
 
public function removeFilesApi(Request $request){

    
       
       
 
    if($request->api_key == 'abcd'){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $startups_file = StartupFiles::where('id', $request->id)->first();
           
        if( $startups_file){
            $checkUser=DB::table('startups')->where([['user_id', $user->id],['id',$startups_file->startup_id]])->first();
        }else{
            return response()->json(['errors'=>array('Xəta baş verdi')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }

     if($checkUser){
       
        $startups1 = StartupFiles::where('id',$request->id)->first();
        if ($startups1->delete()) {
        $path = $startups1->file;
           if (file_exists($path)) {
               @unlink($path);
           }
           $startup_files=StartupFiles::Where('startup_id', $startups_file->startup_id)->get();
           return response()->json(['files'=>$startup_files], 200, 
           ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
           JSON_UNESCAPED_UNICODE);
}

}else{
    return response()->json(['errors'=>array('Xəta baş verdi')], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);


}

}else{
    return response()->json(['errors'=>array('Api is incorrect')], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}

}
public function followApi($startup_id,Request $request){
    if($request->api_key == 'abcd'){
    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $find_startup=Startups::where('id' ,$startup_id)->first();
    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $startup_id]])->first();
     
    if(empty($check)){
    $check_user =DB::table('startups')->where([['user_id', $user->id],['id', $request->startup_id]])->first();
 
    if($find_startup->user_id !=  $user->id ){
    $update= DB::table('startup_followers')->insert(
        [
    "startup_id" => $startup_id,
    "user_id"=>$user->id, ]
    );

    $find_user=DB::table('users')->where('id', $find_startup->user_id)->first();
            $add_notify=DB::table('notifications')->insert([
                'text'=> $user->name. '-Adlı istifadəçi sizin '.$find_startup->startup_title.' adlı startupınızı izləməyə başladı',
                'user_id' =>$find_startup->user_id,
                'url'=> '#',
                'startup_id' => $find_startup->id,
                'read'=>0,
                'created_at' => time()
            ]);
    return response()->json(['errors'=>array('İzlənilir'),'follow'=>true], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);

    
}else{
    return response()->json(['errors'=>array('error'=>true,'message'=>'Xəta baş verdi')], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}
  }else{
    $unfollo=DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $startup_id]])->delete();
    return response()->json(['errors'=>array('İzlənilmir'),'follow'=>false], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
  }
 
                
}
}

public function followListApi(Request $request){

    
    if($request->api_key == 'abcd'){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $check =DB::table('startup_followers')->where('user_id', $user->id)->get();
        $start= array();
       if($check){ 
       
           foreach ($check as $value) {
        $startups=Startups::where('id',$value->startup_id)->first();
          $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
        $start[]=[
            'id' => $startups->id,
            'title' => $startups->startup_title,
            'image' =>$startups->startup_logo,
            'cover_image'=>$startups->startup_image,
            'description' => $startups->startup_description,
            'idea' => $startups->startup_idea,
            'team' => $startups->startup_team,
            'color' => $startups->startup_color,
            'website' => $startups->startup_pitch,
            'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
            'category' => $startups->category,
            'documents' => $startups->startup_document,
            'video' => $startups->startup_video,
            'sector' =>$startups->startup_direction,
            'facebook' =>$startups->facebook,
            'twitter' =>$startups->twitter,
           
            "followed" =>true,
           

           ];
    
      
       }
       return response()->json($start, 200, 
       ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
       JSON_UNESCAPED_UNICODE);
    }else{
        $data[]=[
            'errors'=>array(
                'İzlənilən Startup yoxdur'
            )
            ];
            return response()->json($data, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
       }
       
       $data=[
        'errors'=>array(
            'İzlənilən Startup yoxdur'
        )
        ];
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

public function myStartupApi(Request $request){

    if($request->api_key == 'abcd'){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
       
        $startups=Startups::where('user_id',$user->id)->orderBy('id','desc')->get();

        if( $startups != null){
         
             foreach ($startups as $value) {
                $join=DB::table('competition_members')->where('startup_id', $value->id)->first();
                if($join == null){
                 $joined= false;
                }else{
                 $joined= true;
                }
                  $country_name=DB::table('apps_countries')->where('country_code',$value->country)->first();
                $start[]=[
                 'id' => $value->id,
                 'title' => $value->startup_title,
                 'image' =>$value->startup_logo,
                 'cover_image'=>$value->startup_image,
                 'description' => $value->startup_description,
                 'idea' => $value->startup_idea,
                 'team' => $value->startup_team,
                 'color' => $value->startup_color,
                 'website' => $value->startup_pitch,
                 'country' => array("code"=>$value->country,"name"=>$country_name->country_name),
                 'category' => $value->category,
                 'documents' => $value->startup_document,
                 'video' => $value->startup_video,
                 'video_confirmation' => $value->video_confirmation,
                 'sector' =>$value->startup_direction,
                 'facebook' =>$value->facebook,
                 'twitter' =>$value->twitter,
                 'admin_check' =>$value->startup_check,
                 'status' =>$value->startup_status,
                 "jury_vote"=> 2,
                 "startup_vote"=> 6,
                 "rank"=> 24,
                 "joined" =>$joined
                ];
             }
            }else{
                $start=null;
            }
        if($startups){
            return response()->json($start, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }else{
            return response()->json(['errors'=>array('Nəticə tapılmadı')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        
    }else{
        $message= array();
        $message[]=[
        'message' => ' Api key is incorrect'

        ];
        return response()->json($message);
        }

}
public function PointsApi(Request $request){
    if($request->api_key == 'abcd'){
        $find_startup=Startups::where('id' ,$request->startup_id)->first();
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
       
        $startups=Startups::where('user_id',$user->id)->get();
        if(count($startups)>0){

            $konkurs=DB::table('konkurs')->first();
           $limit=  $konkurs->voice_limit;
           $voice=DB::table('startup_points')->where('user_id',$user->id)->get();
           
           if($limit >=  count($voice)){
              
            $check=DB::table('startup_points')->where([['user_id','=',$user->id],['startup_id' ,'=',$request->startup_id]])->get();
          if(count($check)> 0){
            $startups_ovn=Startups::where([['user_id','=',$user->id],['id' ,'=',$request->startup_id]])->first();
            if(!empty( $startups_ovn)){
            if( $startups_ovn->id == $request->startup_id){
    return response()->json(['errors'=>array('ozunuze ses vere bilmezssiniz')], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    
}}
            DB::table('startup_points')->where([['user_id','=',$user->id],['startup_id' ,'=',$request->startup_id]])->delete();
return response()->json(['errors'=>array('Siz səsinizi geri göturdunuz')], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
} else{
    $startups_ovn=Startups::where([['user_id','=',$user->id],['id' ,'=',$request->startup_id]])->first();
   if(!empty( $startups_ovn)){
    if( $startups_ovn->id == $request->startup_id){
        return response()->json(['errors'=>array('ozunuze ses vere bilmezssiniz')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        
    }}   
          $give_voice=DB::table('startup_points')->insert([
                'user_id' => $user->id,
                'startup_id' =>$request->startup_id,
                'point' => 1
            ]);
            $find_user=DB::table('users')->where('id', $find_startup->user_id)->first();
            $add_notify=DB::table('notifications')->insert([
                'text'=> $user->name. '-Adlı istifadəçi sizin '.$find_startup->startup_title.' adlı startupınıza səs verdi',
                'user_id' =>$find_startup->user_id,
                'url'=> '#',
                'startup_id' => $find_startup->id,
                'read'=>0,
                'created_at' => time()
            ]);
            return response()->json(['errors'=>array('Siz səs verdiniz')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
      


          } 
           } 

        }else{
            return response()->json(['errors'=>array('Siz səs verə bilməzssiniz')], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }
    }else{
        return response()->json(['errors'=>array('Api səhvdir')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);

    }
}
public function PointsListApi(Request $request){
    $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
       
    $voice=DB::table('startup_points')->where('user_id',$user->id)->get();
    foreach ($voice as $key => $value) {
        $startups[]=Startups::where('id',$value->startup_id)->first();
    }
    if( !empty($startups)){
        return response()->json( $startups, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }else{
        return response()->json( ['errors'=>array('Nəticə tapılmadı')], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    }
    
}

public function voice_gived_list(Request $request){


    if($request->api_key == 'abcd'){
                  

        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $startups = Startups::Where([
            [ 'startup_status','aktiv'],['startup_check','1']]
         )->orderBy('id','desc')->get();
        $s=1;
       
       if($user->user_role == 'admin' || $user->user_role == 'juri'){
      
        $UserSesverme=DB::table('action_plans')->Where('id',32)->first();
       if($user->user_role == 'admin' && $UserSesverme->status == 1){
        $startups_voice_gived=DB::table('startup_points')->Where('user_id',$user->id)->orderBy('id','desc')->get();
       //burdan 
       $start=null;
       if($startups_voice_gived != null ) {
       foreach ($startups_voice_gived as $value) {
               $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->startup_id]])->first();
               $startups =DB::table('startups')->where('id', $value->startup_id)->first();
               if(empty($check)){
                   $following =false;
               }else{
                   $following =true;
               }
               if( $value->user_id== $user->id  ){
                   $mystartup =true;
               }else{
                   $mystartup =false;
               }
               $points_users =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'user']])->count();
               // $points_juri =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'juri']])->count();
               $points_juri =DB::table('startup_criteria_voice')->where('startup_id',$value->startup_id )->first();
               if( $points_juri == null){
                   $points_jurii =0;
               }else{
                   $points_jurii =$points_juri->overall;
               }
               $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
               $ran=0;
               foreach ($rank as $ranking) {
                   
                   $s++;
                  if($ranking->startup_id == $startups->id){
                   $ran=$s;

                  }
                  
               }
               $points_juri =DB::table('startup_points')->where([['startup_id', $startups->id],['user_role', 'juri']])->count();
               $comp_members = DB::table('competition_members')->where('startup_id', $startups->id)->first();
              
  $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
               $start[]=[
                'id' => $startups->id,
                'title' => $startups->startup_title,
                'image' =>$startups->startup_logo,
                'cover_image'=>$startups->startup_image,
                'description' => $startups->startup_description,
                'idea' => $startups->startup_idea,
                'team' => $startups->startup_team,
                'color' => $startups->startup_color,
                'website' => $startups->startup_pitch,
                'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
                'category' => $startups->category,
                'documents' => null,
                'video' => $startups->startup_video,
                'sector' =>$startups->startup_direction,
                'facebook' =>$startups->facebook,
                'twitter' =>$startups->twitter,
                "jury_vote"=>  $comp_members->juri_voice,
                "startup_vote"=> $comp_members->startup_voice,
                "rank"=> $ran,
                "followed" =>$following,
                "mystartup" => $mystartup 

               ];
            }}
            return response()->json( $start , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
            
    
    
    }else{
        $startups_voice_gived=DB::table('startup_criteria_voice')->Where('user_id',$user->id)->orderBy('id','desc')->get();
      
       }
          $start=null;
        if($startups_voice_gived != null ) {
        foreach ($startups_voice_gived as $value) {
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->startup_id]])->first();
                $startups =DB::table('startups')->where('id', $value->startup_id)->first();
                if(empty($check)){
                    $following =false;
                }else{
                    $following =true;
                }
                if( $value->user_id== $user->id  ){
                    $mystartup =true;
                }else{
                    $mystartup =false;
                }
                $points_users =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'user']])->count();
                // $points_juri =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'juri']])->count();
                $points_juri =DB::table('startup_criteria_voice')->where('startup_id',$value->startup_id )->first();
                if( $points_juri == null){
                    $points_jurii =0;
                }else{
                    $points_jurii =$points_juri->overall;
                }
                $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
                $ran=0;
                foreach ($rank as $ranking) {
                    
                    $s++;
                   if($ranking->startup_id == $startups->id){
                    $ran=$s;

                   }
                   
                }
                $points_juri =DB::table('startup_points')->where([['startup_id', $startups->id],['user_role', 'juri']])->count();
                $comp_members = DB::table('competition_members')->where('startup_id', $startups->id)->first();
               
  $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
                $start[]=[
                 'id' => $startups->id,
                 'title' => $startups->startup_title,
                 'image' =>$startups->startup_logo,
                 'cover_image'=>$startups->startup_image,
                 'description' => $startups->startup_description,
                 'idea' => $startups->startup_idea,
                 'team' => $startups->startup_team,
                 'color' => $startups->startup_color,
                 'website' => $startups->startup_pitch,
                 'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
                 'category' => $startups->category,
                 'documents' => null,
                 'video' => $startups->startup_video,
                 'sector' =>$startups->startup_direction,
                 'facebook' =>$startups->facebook,
                 'twitter' =>$startups->twitter,
                 "jury_vote"=>  $comp_members->juri_voice,
                 "startup_vote"=> $comp_members->startup_voice,
                 "rank"=> $ran,
                 "followed" =>$following,
                 "mystartup" => $mystartup, 
                 "criteria1" => $value->criteria1, 
                 "criteria2" => $value->criteria2, 
                 "criteria3" => $value->criteria3, 
                 "criteria4" => $value->criteria4, 
                 "criteria5" => $value->criteria5, 
                 "criteria_overall"=>$value->criteria5,
                ];
             }
             return response()->json( $start , 200, 
             ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
             JSON_UNESCAPED_UNICODE);
             
            }else{
                $start[]=[
                    "errors"=>"Səs verdiyiniz startup yoxdur"
                            
                ];

                return response()->json( $start , 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);

            }

        }else{

            $startups_voice_gived=DB::table('startup_points')->Where('user_id',$user->id)->orderBy('id','desc')->get();
            $start=null;
            if($startups_voice_gived != null ) {
            foreach ($startups_voice_gived as $value) {
                    $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->startup_id]])->first();
                    $startups =DB::table('startups')->where('id', $value->startup_id)->first();
                    if(empty($check)){
                        $following =false;
                    }else{
                        $following =true;
                    }
                    if( $value->user_id== $user->id  ){
                        $mystartup =true;
                    }else{
                        $mystartup =false;
                    }
                    $points_users =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'user']])->count();
                    // $points_juri =DB::table('startup_points')->where([['user_id', $user->id],['user_role', 'juri']])->count();
                    $points_juri =DB::table('startup_criteria_voice')->where('startup_id',$value->startup_id )->first();
                    if( $points_juri == null){
                        $points_jurii =0;
                    }else{
                        $points_jurii =$points_juri->overall;
                    }
                    $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
                    $ran=0;
                    foreach ($rank as $ranking) {
                        
                        $s++;
                       if($ranking->startup_id == $startups->id){
                        $ran=$s;
    
                       }
                       
                    }
                    $points_juri =DB::table('startup_points')->where([['startup_id', $startups->id],['user_role', 'juri']])->count();
                    $comp_members = DB::table('competition_members')->where('startup_id', $startups->id)->first();
                   
      $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
                    $start[]=[
                     'id' => $startups->id,
                     'title' => $startups->startup_title,
                     'image' =>$startups->startup_logo,
                     'cover_image'=>$startups->startup_image,
                     'description' => $startups->startup_description,
                     'idea' => $startups->startup_idea,
                     'team' => $startups->startup_team,
                     'color' => $startups->startup_color,
                     'website' => $startups->startup_pitch,
                    'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
                     'category' => $startups->category,
                     'documents' => null,
                     'video' => $startups->startup_video,
                     'sector' =>$startups->startup_direction,
                     'facebook' =>$startups->facebook,
                     'twitter' =>$startups->twitter,
                     "jury_vote"=>  $comp_members->juri_voice,
                     "startup_vote"=> $comp_members->startup_voice,
                     "rank"=> $ran,
                     "followed" =>$following,
                     "mystartup" => $mystartup 
    
                    ];
                 }
                 return response()->json( $start , 200, 
                 ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                 JSON_UNESCAPED_UNICODE);
                 
                }else{
                    $start[]=[
                        "errors"=>"Səs verdiyiniz startup yoxdur"
                                
                    ];
    
                    return response()->json( $start , 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    
                }

        }



                          


}
}
}

public function voice_start(Request $request){
    
    if($request->api_key == 'abcd'){
                  

        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
$startup_action_plans=DB::table('action_plans')->get();
foreach ($startup_action_plans as  $value) {
    if($value->action_title =='Yoxlama'){
        if($value->status == 1 ){
$start = false;
$juri=false;
        }
    }
    if($value->action_title =='Səsvermə'){
        if($value->status == 1 ){
$start = true;
$juri=false;
        }
    }
    
    if($value->action_title =='Juri səsverməsi'){
        if($value->status == 1 ){
$start = false;
$juri=true;
        }
    }
}
$startup_action_plans=DB::table('startup_points')->where('user_id',$user->id)->first();

if($startup_action_plans == null ){
$gived_voice=false;
    
}else{
    $gived_voice=true;
}
$jurivoice_gived=DB::table('startup_criteria_voice')->where('user_id',$user->id)->first();
if($jurivoice_gived == null){
    $juri_voice_gived = false;
}else{
    $juri_voice_gived = true;
}
$competition_membs=DB::table('competition_members')->where('user_id',$user->id)->first();

if($user->user_role == 'juri'){
    
return response()->json( ['voice_gived'=>$gived_voice,'juri_voice_gived'=>$juri_voice_gived, 'voice_giving' =>$start,'juri_voice_giving' => $juri], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);

}
if($user->user_role == 'admin'){
    
return response()->json( ['voice_gived'=>$gived_voice,'juri_voice_gived'=>$juri_voice_gived, 'voice_giving' =>$start,'juri_voice_giving' => $juri], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
}
if($competition_membs == null ){
    
return  null;
}

return response()->json( ['voice_gived'=>$gived_voice,'juri_voice_gived'=>$juri_voice_gived, 'voice_giving' =>$start,'juri_voice_giving' => $juri], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);

    }else{
        return response()->json( ['errors'=>'token movcud deyil'], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
    }

}
}

public function juri_give_voice(Request $request){
   if($request->api_key == 'abcd'){
    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
     $user_id=$user->id;

    if($user->user_role == 'user' ){
            return response()->json( ['errors'=>'Siz səs verə bilməzssiniz'], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
//burda bashlayir
$n=-1;

$voice_gived=DB::table('startup_criteria_voice')->where('user_id','=',$user_id)->first();
if($voice_gived == null){
foreach ($request->startup_id as $value) {
    $n++;


  
        $sum=$request->criteria1[$n]+$request->criteria2[$n]+$request->criteria3[$n]+$request->criteria4[$n]+$request->criteria5[$n];
      
        $startupss=DB::table('startup_criteria_voice')->insert([
            'startup_id' => $value,
            'user_id' =>$user_id,
            'criteria1'=>$request->criteria1[$n],
            'criteria2'=>$request->criteria2[$n],
            'criteria3'=>$request->criteria3[$n],
            'criteria4'=>$request->criteria4[$n],
            'criteria5'=>$request->criteria5[$n],
            'overall'=>$sum,
            'role' =>$user->user_role
        ]);

        $competition_membs=DB::table('competition_members')->where('startup_id',$value)->first();
        $overal_juri=$competition_membs->juri_voice + $sum;
        $overall=$competition_membs->overall + $sum;
        $competition_membs_update=DB::table('competition_members')->where('startup_id',$value)
        ->update([
            'juri_voice' => $overal_juri,
            'overall' =>$overall
        ]);
        $startups=DB::table('startups')->where('id', $value)->first();
        $add_notify=DB::table('notifications')->insert([
            'text'=>$user->name.' '.$user->surname.' Sizin '.$startups->startup_title.' adlı startupınıza səs verdi',
            'user_id' =>$startups->user_id,
            'url'=> '#',
            'startup_id' => $startups->id,
            'read'=>0,
            'created_at'=>time()
        ]);
        $add_timeline=DB::table('timelines')->insert([
            'title'=>$user->name.' <span class="startup-name">'.$startups->startup_title.' </span> adlı startupa səs verdi',
            'image' =>'http://www.onsideball.com/InnoProject/images/timeline/avatar.png',
           
            'date'=>time()
        ]);
     
     
   
    }
       
}   return response()->json( ['errors'=>null], 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);
}

     
    //foreach burda bitecek
}
}


public function sectorsAll(Request $request){

if($request->api_key == 'abcd'){
$sectors=DB::table('innovative_directions')->get();
return response()->json( $sectors, 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);

}
}

public function startupListForJuri(Request $request){

    if($request->api_key == 'abcd'){
    $startups=DB::table('competition_members')->where('favor',1)->orderBy('favor','desc')->limit(20)->get();

    if($request->header('Authorization')){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
    $user->id;
    $s=1;
    foreach ($startups as  $value) {
        $check =DB::table('startup_followers')->where('startup_id', $value->startup_id)->first();
                $startups =DB::table('startups')->where('id', $value->startup_id)->first();
                if(empty($check)){
                    $following =false;
                }else{
                    $following =true;
                }
                if( $value->user_id== $user->id  ){
                    $mystartup =true;
                }else{
                    $mystartup =false;
                }
                $comp_members = DB::table('competition_members')->where('startup_id', $value->startup_id)->first();
                $points_users =DB::table('startup_points')->where('user_role', 'user')->count();
                $points_juri =DB::table('startup_points')->where('user_role', 'juri')->count();
                $rank=DB::table('competition_members')->where('startup_id', $value->startup_id)->orderBy('overall','desc')->get();
                $ran=0;
                
                foreach ($rank as $ranking) {
                    
                    $s++;
                   if($ranking->startup_id == $startups->id){
                    $ran=$s;

                   }
                   
                }
                  $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
                $start[]=[
                 'id' => $startups->id,
                 'title' => $startups->startup_title,
                 'image' =>$startups->startup_logo,
                 'cover_image'=>$startups->startup_image,
                 'description' => $startups->startup_description,
                 'idea' => $startups->startup_idea,
                 'team' => $startups->startup_team,
                 'color' => $startups->startup_color,
                 'website' => $startups->startup_pitch,
                 'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
                 'category' => $startups->category,
                 'documents' => null,
                 'video' => $startups->startup_video,
                 'sector' =>$startups->startup_direction,
                 'facebook' =>$startups->facebook,
                 'twitter' =>$startups->twitter,
                 "jury_vote"=>  $comp_members->juri_voice,
                 "startup_vote"=> $comp_members->startup_voice,
                 "rank"=> $ran,
                 "followed" =>$following,
                 "mystartup" => $mystartup 

                ];
    }
    return response()->json( $start, 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);

}
    }
    }

public function AllCountryList(Request $request){

    if($request->api_key == 'abcd'){
    $countries=DB::table('apps_countries')->get();
    return response()->json( $countries, 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    
    }
    }


public function CompetitionMembersApi(Request $request){
    
    if($request->api_key == 'abcd'){
                  

        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $startups_members = DB::table('competition_members')->where('user_id', '!=', $user->id)->orderBy('id','desc')->get();
        
        $s=1;
             foreach ($startups_members as $value) {
                $startups = DB::table('startups')->where('id', $value->startup_id)->first();
                $check =DB::table('startup_followers')->where([['user_id', $user->id],['startup_id', $value->startup_id]])->first();
                if(empty($check)){
                    $following =false;
                }else{
                    $following =true;
                }
                if( $startups->user_id== $user->id  ){
                    $mystartup =true;
                }else{
                    $mystartup =false;
                }
                $rank=DB::table('competition_members')->where('startup_id', $startups->id)->orderBy('overall','asc')->get();
              
                foreach ($rank as $ranking) {
                    
                    
                   if($ranking->startup_id == $startups->id){
                   $ran=$s++;

                   }else{
                    $s++;

                   }
                   
                }
                $points_users =DB::table('startup_points')->where([['startup_id',$startups->id],['user_role', 'user']])
                ->orWhere([['startup_id',$startups->id],['user_role', 'admin']])->count();
                
                $points_juri =DB::table('startup_points')->where([['startup_id', $startups->id],['user_role', 'juri']])->count();
                $comp_members = DB::table('competition_members')->where('startup_id', $startups->id)->first();
                 $country_name=DB::table('apps_countries')->where('country_code',$startups->country)->first();
                $start[]=[
                 'id' => $startups->id,
                 'title' => $startups->startup_title,
                 'image' =>$startups->startup_logo,
                 'cover_image'=>$startups->startup_image,
                 'description' => $startups->startup_description,
                 'idea' => $startups->startup_idea,
                 'team' => $startups->startup_team,
                 'color' => $startups->startup_color,
                 'website' => $startups->startup_pitch,
                 'country' => array("code"=>$startups->country,"name"=>$country_name->country_name),
                 'category' => $startups->category,
                 'documents' => $startups->startup_documents,
                 'video' => $startups->startup_video,
                 'sector' =>$startups->startup_direction,
                 'facebook' =>$startups->facebook,
                 'twitter' =>$startups->twitter,
                 "jury_vote"=>  $comp_members->juri_voice,
                            "startup_vote"=> $comp_members->startup_voice,
                 "rank"=> $ran,
                 "followed" =>$following,
                 "mystartup" => $mystartup 

                ];
             }
                          
return response()->json( $start , 200, 
['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);


}
}
}


public function giveVoiceApi(Request $request){

    if($request->api_key == 'abcd'){
                  

        if($request->header('Authorization')){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        $checkuseroncompetition=DB::table('competition_members')->where('user_id',$user->id)->first();
        if( $checkuseroncompetition != null){
       
$startupid=explode(',',$request->startup_id);
foreach ($startupid as  $value) {
  

        $startups_members = DB::table('competition_members')->where('startup_id',$value)->first();
            if( $startups_members != null){
                if( $user->user_role == 'user' || $user->user_role == 'admin' ){
                    
                    $checkExistVoice=DB::table('startup_points')->where([['user_id', $user->id],['startup_id',$value]])->first();
                    if( $checkExistVoice == null){
                      
                    $newpoint= $startups_members->startup_voice + 1;
                    $overall= $startups_members->overall + 1;
                    $addVoice = DB::table('startup_points')->insert([
                        'point' => 1,
                        'user_id'=> $user->id,
                        'startup_id' => $value,
                        'user_role' =>$user->user_role
                        ]);
                        $addVoiceToMember = DB::table('competition_members')
                        ->where('startup_id',$value)
                        ->update([
                            
                            'startup_voice'=>  $newpoint,
                            'overall' => $overall,
                           
                            ]);
                            if($addVoiceToMember){
                                $startups=Startups::where('user_id','!=',$user->id )->find(intval($value));
                                $add_notify=DB::table('notifications')->insert([
                                    'text'=>$user->name.' '.$user->surname.' Sizin '.$startups->startup_title.' adlı startupınıza səs verdi',
                                    'user_id' =>$startups->user_id,
                                    'url'=> '#',
                                    'startup_id' => $startups->id,
                                    'read'=>0,
                                    'created_at'=>time()
                                ]);
                                $add_timeline=DB::table('timelines')->insert([
                                    'title'=>$user->name.' <span class="startup-name"> '.$startups->startup_title.'</span> adlı startupa səs verdi',
                                    'image' =>'http://www.onsideball.com/InnoProject/images/timeline/avatar.png',
                                   
                                    'date'=>time()
                                ]);
                              
                            }
                    }else{
                        DB::table('startup_points')->where([['user_id', $user->id],['startup_id',$value]])->delete();

                        $newpoint= $startups_members->startup_voice - 1;
                        $overall= $startups_members->overall - 1;
                        $removeVoice = DB::table('competition_members')
                        ->where('startup_id',$value)
                        ->update([
                            
                            'startup_voice'=>  $newpoint,
                            'overall' => $overall,
                           
                            ]);
                            if($removeVoice){
                               
                            }
                    }
                  

                }else if($user->user_role == 'juri' ){
                  
                         
                    $juripoint= $startups_members->juri_voice + 1;
                    $overall= $startups_members->overall + 1;
                    $addVoice = DB::table('startup_points')->insert([
                        'point' => 1,
                        'user_id'=> $user->id,
                        'startup_id' => $value,
                        'user_role' =>$user->user_role
                        ]);
                        $addVoiceToMember = DB::table('competition_members')
                        ->where('startup_id',$value)
                        ->update([
                            
                            'juri_voice'=>  $juripoint,
                            'overall' => $overall,
                           
                            ]);
                            if($addVoiceToMember){
                                $startups=Startups::find(intval($value));
                                $add_notify=DB::table('notifications')->insert([
                                    'text'=>$user->name.' '.$user->surname.' Sizin '.$startups->startup_title.' adlı startupınıza səs verdi',
                                    'user_id' =>$startups->user_id,
                                    'url'=> '#',
                                    'startup_id' => $startups->id,
                                    'read'=>0,
                                    'created_at'=>time()
                                ]);


                             
                            }

                    
                  
                }else{
                    return response()->json( ['errors' => 'Sizin səsvermə hüququnuz yoxdu. Startup əlavə edib müsabiqədə iştirak edərək bu hüquqa sahib ola bilərsiniz'] , 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
                }
                


            }else{

                return response()->json( ['errors' => 'Bu startup müsabiqədə iştirak etmir'] , 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
                

            }
        }
        
        return response()->json( ['errors' => null] , 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        }else{
            if($user->user_role == 'juri' ){
                  
                         
                $juripoint= $startups_members->juri_voice + 1;
                $overall= $startups_members->overall + 1;
                $addVoice = DB::table('startup_points')->insert([
                    'point' => 1,
                    'user_id'=> $user->id,
                    'startup_id' => $request->startup_id,
                    'user_role' =>$user->user_role
                    ]);
                    $addVoiceToMember = DB::table('competition_members')
                    ->where('startup_id',$request->startup_id)
                    ->update([
                        
                        'juri_voice'=>  $juripoint,
                        'overall' => $overall,
                       
                        ]);
                        if($addVoiceToMember){
                            $startups=Startups::find(intval($request->startup_id));
                            $add_notify=DB::table('notifications')->insert([
                                'text'=>$user->name.' '.$user->surname.' Sizin '.$startups->startup_title.' adlı startupınıza səs verdi',
                                'user_id' =>$startups->user_id,
                                'url'=> '#',
                                'startup_id' => $startups->id,
                                'read'=>0,
                                'created_at'=>time()
                            ]);


                            return response()->json( ['errors' => null] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
                        }

                
              
            }else{
                return response()->json( ['errors' => 'Sizin səsvermə hüququnuz yoxdu. Startup əlavə edib müsabiqədə iştirak edərək bu hüquqa sahib ola bilərsiniz'] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
            }
            return response()->json( ['errors' => 'Siz səs verə bilməzssiniz'] , 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }
    }else{
        return response()->json( ['errors' => 'Token mövcud deyil'] , 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
}else{
    return response()->json( ['errors' => 'Api key yalnışdır'] , 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}
}


public function ApplicantDelete(Request $request){
    $startups=Startups::find(intval($request->startup_id));
    if($request->compl_name == 'musabiqe'){
        DB::table('competition_applicants')->where('compl_id',$request->compl_id)->delete();
        $add_notify=DB::table('notifications')->insert([
            'text'=>'Sizin '.$startups->startup_title.' adlı startupınız bu səbələrə görə  Müsabiqəyə qəbul edilmədi: '.$request->comment,
            'user_id' =>$startups->user_id,
            'url'=> '#',
            'startup_id' => $startups->id,
            'read'=>0,
            'created_at'=>time()
        ]);
        if($add_notify){
           return back()->with('success', 'Müraciət imtina edildi');
        }
        return back()->with('error', 'Uğursuz');
    }else{
    $add_notify=DB::table('notifications')->insert([
        'text'=>'Sizin '.$startups->startup_title.' adlı startupınız bu səbələrə görə '.$request->compl_name.' müsabiqəsinə qəbul edilmədi: '.$request->comment,
        'user_id' =>$startups->user_id,
        'url'=> '#',
        'startup_id' => $startups->id,
        'read'=>0,
        'created_at'=>time()
    ]);
    DB::table('competition_applicants')->where('compl_id',$request->compl_id)->delete();
    if($add_notify){
       return back()->with('success', 'Müraciət imtina edildi');
    }
    return back()->with('error', 'Uğursuz');
}
   
}

public function Startup_view(Request $request){
    
    DB::table('startup_view')->insert([
        'startup_id'=>$request->startup_id
    ]);
    return response()->json( ['errors'=>null] , 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);

}


public function Startup_view_count($id){
    
   $count =DB::table('startup_view')->where('startup_id',$id)->count();
    return response()->json( ['view_count'=>$count] , 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);

}
}
