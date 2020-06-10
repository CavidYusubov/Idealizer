<?php

namespace App\Http\Controllers\Backend;
use \JWTAuth;
use Mail;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Message;
use DateTime;
class DefaultController extends Controller
{


    public function index()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    	 return view('backend.default.index',['notifications' =>$notification,'count_n'=>count($count_notify)]);
    	
    }
 
    function time_elapsed_string($datetime, $full = false) {
        $now = new \DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'il',
            'm' => 'ay',
            'w' => 'həftə',
            'd' => 'gün',
            'h' => 'saat',
            'i' => 'dəqiqə',
            's' => 'saniyə',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' əvvəl' : 'indicə';
    }
    
 	public function login()
   {
    $credentials = request(['email', 'password']);
        if (\Auth::guard('web')->user())
       {

            return redirect()->intended(route('dashboard'));
       } else {
           return view('backend.default.login')->with('error','Giriş icazəniz yoxdur');
       }

        return view('backend.default.login');
   }

   
   public function authenticate(Request $request)
   {
       
       $request->flash();
       $credentials = $request->only('email', 'password');

     
       if ($token =  \Auth::guard('web')->attempt($credentials))
       {
      $currentUser =  \Auth::guard('web')->user();
     

        
            return redirect()->intended(route('dashboard'));
       } else {
           return back()->with('error','İstifadəçi məlumatları yalnışdır');
       }
      
    
    //    $credentials = request(['email', 'password']);
    //    $remember_me=$request->has('remember_me') ? true : false;

    //    if (auth()->guard('api')->attempt($credentials))
    //    {
 
    //         return redirect()->intended(route('dashboard'));
    //    } else {
    //        return back()->with('error','İstifadəçi məlumatları yalnışdır');
    //    }


   }


   public function LoginApi(Request $request)
   {

       $credentials=$request->only('email','password');
       $remember_me=$request->has('remember_me') ? true : false;

       if (JWTAuth::attempt($credentials,$remember_me))
       {
        
        $credentials = User::select('name','email','user_birthday','user_gender','user_file','user_role','user_check','user_status')->where('email', $request->email)->first();
        // if($credentials->user_check == 1){
        return response()->json(array("error"=>null,"user_details"=>$credentials), 200, 
		['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        // }else{
        //     return response()->json(array("message"=>"Profil təstiq gözləyir"), 200, 
        //     ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        //     JSON_UNESCAPED_UNICODE);
        // }
            
       } else {
        $message= array();
        $check_email= User::select('email')->where('email',$request->email)->first();
		if($check_email){
            $message=[
                'error' => 'Email vəya Parol səhvdir' 
         ];
                return response()->json($message);
        }else{
            return response()->json(array("error"=>"Email Yanlışdır",), 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
     
		
   
       }


   }
public function AuthApi(Request $request){
    
    if($request->api_key == 'abcd'){

        $login = DB::table('auth_settings')->where('category','login')->first();
        $signup = DB::table('auth_settings')->where('category','signup')->first();
        $recovery_email = DB::table('auth_settings')->where('category','recovery_email')->first(); 
        $recovery_password = DB::table('auth_settings')->where('category','recovery_password')->first();  
        $recovery_success = DB::table('auth_settings')->where('category','recovery_success')->first(); 
        return response()->json(['login'=>$login,'signup'=>$signup,'recovery_email'=>$recovery_email,'recovery_password'=>$recovery_password,'recovery_success'=>$recovery_success], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    
        }else{
        $message= array();
        $message=[
        'message' => ' Api key is incorrect'

        ];
        return response()->json($message);
        }

}

public function logout()
   {
    \Auth::guard('web')->logout();
       return redirect(route('login'))->with('success','Siz Admin Paneldən çıxış etdiniz');
   }
   
   public function signupApi(Request $request){
    if(strlen($request->password) < 6 ){$message[]=['errors' => array('Parol 6 simvoldan azdır')  ];return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);}
       if(empty($request->name)){$message[]=['errors' => array('Ad Boş buraxıla bilməz')  ];return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);}
       if(empty($request->surname)){$message[]=['errors' => array('Soyad Boş buraxıla bilməz' ) ];return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);}
       if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){$message=['errors' => array('Email standartlara cavab vermir')  ];return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);}
       $name=preg_replace('/[^0-9a-zA-Z ]/','',$request->name);
       $surname=preg_replace('/[^0-9a-zA-Z ]/','',$request->surname);
  
       $check_email= User::select('*')->where('email',$request->email)->first();
       if($check_email){
           $message=[
               'errors' => array('Bu Email ilə artıq qeydiyyatdan keçilib') 
       
               ];
               if(empty($check_email->email_verified_at)){
                $verification_code = \Str::random(30); //Generate verification code
                DB::table('user_verifications')->insert(['user_id'=>$check_email->id,'token'=>$verification_code]);
                Mail::send('emails.verify-email', ['verification_code' => $verification_code], function ($m) use ($check_email) {
                    $m->from('noreply@onsideball.com', 'Emailinizi təstiqləyin');
                
                    $m->to($check_email->email, $check_email->name)->subject('Emailinizi təstiqləyin');
                });
               }
               return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
               JSON_UNESCAPED_UNICODE);
       }else{
           if($request->terms_accepted == 'true'){
   $user = User::create(
    [
        "name" => $name,
        "surname" => $surname,
        "email" => $request->email,
        "user_file" => url('/').'/images/users/avatar.png',
        "user_phone" => $request->phone_number,
        "user_gender" => null,
        "user_birthday" => '',
        "password" => Hash::make($request->password),
        "user_status" => '0',
        "user_check" => '0',
        "user_role" => 'user',
        "user_info" => ' '
    ]
);
$email=$request->email;
$verification_code = \Str::random(30); //Generate verification code
        DB::table('user_verifications')->insert(['user_id'=>$user->id,'token'=>$verification_code]);
        $subject = "Please verify your email address.";
        $msg = "Click url and confirm your email adress ".url('/')."/auth/verify/".$verification_code;
        $headers='From: noreply@onsideball.com \r\n';
$headers.='Reply-To: noreply@onsideball.com\r\n';
$headers.='X-Mailer: PHP/' . phpversion().'\r\n';
$headers.= 'MIME-Version: 1.0' . "\r\n";
$headers.= 'Content-type: text/html; charset=utf-8 \r\n';



// send email
// mail($email,"Please verify your email address.",$msg,$headers);
Mail::send('emails.verify-email', ['verification_code' => $verification_code], function ($m) use ($user) {
    $m->from('noreply@onsideball.com', 'Emailinizi təstiqləyin');

    $m->to($user->email, $user->name)->subject('Emailinizi təstiqləyin');
});
$message[]=[
    'errors' => null,

    ];
return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
JSON_UNESCAPED_UNICODE);

           }else{
               
$message[]=[
    'errors' => array('Siz qaydaları qəbul etməlisiniz') 

    ];
return response()->json($message);
           }
       }
}



  public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token',$verification_code)->first();
        if(!is_null($check)){
            $user = User::find($check->user_id);
            if(!empty($user->email_verified_at) ){
                return response()->json( ['errors'=> array('Bu email artiq təstiq edilib')]
                ,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
            DB::table('users')->Where('id', $check->user_id)->update(['email_verified_at' => \Carbon\Carbon::now(), 'user_status'=>"1", 'user_check'=>'1']);
            DB::table('user_verifications')->where('token',$verification_code)->delete();
            return redirect()->to('http://onsideball.com/auth/login');
            return response()->json([
                'errors'=> null,
              
            ]);
        }
        return redirect('https://onsideball.com/auth/login');
    }

    public function NotifyApi(Request $request){
        if($request->api_key == 'abcd'){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $notification=DB::table('notifications')->where('user_id',$user->id)->orderBy('id','desc')->limit(200)->get();
    if( $notification){
        foreach ($notification as $value) {
            $notify[]=[
                "id" => $value->id,
                "text" => $value->text,
                "url" => $value->url,
                "read" => $value->read,
                "user_id" => $user->id,
                "startup_id" =>  $value->startup_id,
                "created_at" => $value->created_at,
                "time" => $this->time_elapsed_string('@'.$value->created_at)
            ];
        }
        return response()->json( $notify, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }else{
        $notify[]=null;
        return response()->json( $notify, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

      
    }else{
             
        return response()->json(['errors'=>array('Api key səhvdir')], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
}
public function readAllApi(Request $request){
    if($request->api_key == 'abcd'){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $add_notify=DB::table('notifications')->where('user_id',$user->id)->update([
            'read'=>1, ]);
if($add_notify){
    return response()->json( ["errors"=>null], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}else{
    return response()->json( ["errors"=>"Something went wrong"], 200, 
    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}
     

    }
}
public function notifications(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
    $add_notify=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->update([
           
        'read'=>1,
       
    ]);
    $data['notify']=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->paginate(20);
    return view('backend.notification.index',compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
}

public function motify_read_onclick(Request $request){
    $add_notify=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->update([
           
        'read'=>1,
       
    ]);
}
public function Notify_Delete($id){
    $delete_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['id',$id]])->delete();
    if($delete_notify){
        return back()->with('success', 'Uğurlu');
     }
     return back()->with('error', 'Uğursuz');
}
public function Notify_Delete_All(){
    $delete_notify=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->delete();
    if($delete_notify){
        return back()->with('success', 'Uğurlu');
     }
     return back()->with('error', 'Uğursuz');
}
    
}
