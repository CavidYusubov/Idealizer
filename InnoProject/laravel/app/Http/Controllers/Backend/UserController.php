<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;
use App\Imagick;
use \Validator, \DB, \Hash, \Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;
use \JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
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

     
public function JuriApi(Request $request){

	
	if($request->api_key == 'abcd'){
        $juri = DB::table('users')->select('id','name','email','user_birthday','user_gender','user_file','user_info')->where('user_role','=','juri' )->get();
   
    unset($juri['password'] );
    
        return response()->json($juri, 200, 
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
        $data['user'] = User::all()->sortBy('id');
       
    
     $count = User::all()->where('user_check','0' )->count();
         return view('backend.users.index', compact('data'),['count'=>$count,'notifications' =>$notification,'count_n'=>count($count_notify)]);
    }
       public function requests()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
        $data['user'] = DB::table('users')->where('user_check','0' )->orderBy('id','desc')->paginate(25);
        $userss = User::where('user_check', '=', '0')->orderByDesc('id')->paginate(15);
        return view('backend.users.request', compact('userss'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    public function ajaxSearch(Request $request){
     
    $acti ='<a href={{route("user.edit",$user->id)}}><i class="fa fa-pencil-square" title="Redaktə et"></i></a></td><td width="5"><a href="javascript:void(0)" title="Sil"><i id="@php echo $user->id @endphp"class="fa fa-trash-o"></i></a>';
  
       
        $usersQuery = User::query();
 
        $user_role = (!empty($_GET["user_role"])) ? ($_GET["user_role"]) : ('');
        $user_status = (!empty($_GET["user_status"])) ? ($_GET["user_status"]) : ('');
 
        $users = $usersQuery->select('*')->orderBy('id','desc');

        return datatables()->of($users)
        
      ->editColumn('name', function ($users) {
                return $users->name;
            })
            ->editColumn('surname', function ($users) {
                return $users->surname;
            })
      ->editColumn('user_status', function ($users) {

                if($users->user_status == 1) {return 'Aktiv'; }else{return 'Deaktiv'; }
            })
       ->editColumn('user_role', function ($users) {
               return $users->user_role;
            })
        // ->addColumn('user_role', 'backend.users.user_role_ajax')

      ->editColumn('email', function ($users) {
                return $users->email ;
            })
   ->addColumn('user_action', 'backend.users.action_button')
    ->escapeColumns('user_role')
    ->addIndexColumn()
   
            ->make(true);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        return view('backend.users.create',['notifications' =>$notification,'count_n'=>count($count_notify)]);
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|Min:6'
        ]);


        if ($request->hasFile('user_file')) {
            $request->validate([
                'user_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->user_file->getClientOriginalExtension();
            $request->user_file->move('images/users', $file_name);
        } else {
            $file_name = 'http://www.onsideball.com/InnoProject/images/users/avatar.png';
        }


        $user = User::insert(
            [
                "name" => preg_replace('/[^0-9a-zA-Z ]/','',$request->name),
                "surname" => preg_replace('/[^0-9a-zA-Z ]/','',$request->surname),
                "email" => $request->email,
                "user_file" => url('/').'/images/users/'.$file_name,
                "user_gender" => $request->user_gender,
                "user_birthday" => strtotime($request->birth_day.'-'.$request->birth_month.'-'.$request->birth_year),
                "password" => Hash::make($request->password),
                "user_status" => $request->user_status,
                "user_role" => $request->user_role,
                "user_info" => $request->user_info,
                "user_phone" => $request->phone_number,
            ]
        );

        if ($user) {
            return redirect(route('user.index'))->with('success', 'Uğurlu');
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
       
  
        $users = User::where('id', $id)->first();
        return view('backend.users.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function AjaxRole(Request $requests){

        $user = User::Where('id', $requests->id)->update(
                    [
                        
                        "user_role" => $request->user_roles
                    ]
                );

    }
    public function update(Request $request, $id)
    {
  
      
        $request->validate([
            'name' => 'required|',
            'email' => 'required|email|',
        ]);


        if ($request->hasFile('user_file')) {
            $request->validate([
                'user_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $file_name = uniqid() . '.' . $request->user_file->getClientOriginalExtension();
            $request->user_file->move('images/users', $file_name);


            if (strlen($request->password) > 0) {

                $request->validate([
                    'password' => 'required|Min:6'
                    
                ]);
              
                $user = User::Where('id', $id)->update(
                    [
                        "name" => preg_replace('/[^0-9a-zA-Z ]/','',$request->name),
                        "surname" => preg_replace('/[^0-9a-zA-Z ]/','',$request->surname),
                        "email" => $request->email,
                        "user_file" => url('/').'/images/users/'.$file_name,//İşlem
                        "user_gender" => $request->user_gender,
                        "user_birthday" => strtotime($request->birth_day.'-'.$request->birth_month.'-'.$request->birth_year),
                        "password" => Hash::make($request->password),
                        "user_status" => $request->user_status,
                        "user_role" => $request->user_role,
                        "user_info" => $request->user_info,
                        "user_phone" => $request->phone_number,
                    ]
                );
            } else {
             
                $user = User::Where('id', $id)->update(
                    [
                        
                        "name" => preg_replace('/[^0-9a-zA-Z ]/','',$request->name),
                        "surname" => preg_replace('/[^0-9a-zA-Z ]/','',$request->surname),
                        "email" => $request->email,
                        "user_gender" => $request->user_gender,
                        "user_birthday" => strtotime($request->birth_day.'-'.$request->birth_month.'-'.$request->birth_year),
                        "user_file" => url('/').'/images/users/'.$file_name,//İşlem
                        "user_status" => $request->user_status,
                        "user_role" => $request->user_role,
                        "user_info" => $request->user_info,
                        "user_phone" => $request->phone_number,
                    ]
                );
            }


            $path = 'images/users/' . $request->old_file;
            if (file_exists($path)) {
                @unlink($path);
            }

        } else {

            if (strlen($request->password) > 0) {

                $request->validate([
                    'password' => 'required|Min:6'
                ]);

                $user = User::Where('id', $id)->update(
                    [ "name" => preg_replace('/[^0-9a-zA-Z ]/','',$request->name),
                    "surname" => preg_replace('/[^0-9a-zA-Z ]/','',$request->surname),
                        "email" => $request->email,
                        "user_gender" => $request->user_gender,
                        "user_birthday" => strtotime($request->birth_day.'-'.$request->birth_month.'-'.$request->birth_year),
                        "password" => Hash::make($request->password),
                        "user_status" => $request->user_status,
                        "user_role" => $request->user_role,
                        "user_info" => $request->user_info,
                        "user_phone" => $request->phone_number,
                    ]
                );

            } else {

                $user = User::Where('id', $id)->update(
                    [
                        
                        "name" => preg_replace('/[^0-9a-zA-Z ]/','',$request->name),
                        "surname" => preg_replace('/[^0-9a-zA-Z ]/','',$request->surname),
                        "email" => $request->email,
                        "user_gender" => $request->user_gender,
                        "user_birthday" => strtotime($request->birth_day.'-'.$request->birth_month.'-'.$request->birth_year),
                        "user_status" => $request->user_status,
                        "user_role" => $request->user_role,
                        "user_info" => $request->user_info,
                        "user_phone" => $request->phone_number,
                    ]
                );

            }


        }

        if ($user) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function AjaxEdit($id){
        $where = array('id' => $id);
    $user  = User::where($where)->first();
  
  
     return response()->json($user, 200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
    }
    public function destroy($id)
    {
    
        $user = User::find(intval($id));
          $path = 'images/users/' . $user->user_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        if ($user->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }


    public function approve($id){
$user= User::find(intval($id));
 $user->user_status;
 $user_update_status=User::Where('id', $id)->update([

    'user_check' => '1',
    'user_status' => '1'

 ]);
 if($user_update_status){
    return back()->with('success', 'Istifadəçi təstiq edildi');
 }
 return back()->with('error', 'Uğursuz');


    }


public function block($id){
 $user= User::find(intval($id));
 $user->user_status;
 $user_update_status=User::Where('id', $id)->update([

    'user_status' => '0'

 ]);
 if($user_update_status){
    return back()->with('success', 'Istifadəçi blok edildi');
 }
 return back()->with('error', 'Uğursuz');



}
public function unblock($id){
 $user= User::find(intval($id));
 $user->user_status;
 $user_update_status=User::Where('id', $id)->update([

    'user_status' => '1'

 ]);
 if($user_update_status){
    return back()->with('success', 'Istifadəçi aktiv edildi');
 }
 return back()->with('error', 'Uğursuz');



}

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $users = User::find(intval($value));
            $users->user_must = intval($key);
            $users->save();
        }
        echo true;
    }


    // Pass recovery

    public function recover(Request $request)
    {
       
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $error_message = "Email adres tapılmadı.";
            return response()->json(['errors' => array( $error_message)], 401,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }

        try {
            $email=$request->email;
$verification_code = \Str::random(30); 
DB::table('password_resets')->insert(['email'=> $email,'token'=>$verification_code,'created_at'=>Carbon::now()]);
            // Password::sendResetLink($request->only('email'), function (Message $message) {
                // $message->subject('Your Password Reset Link');
                $subject = "Your Password Reset Link.";
                $msg = "Click url and Reset Your Password ".url('/')."/auth/password/recovery/?token=".$verification_code;
              
        $headers='X-Mailer: PHP/' . phpversion().'\r\n';
        $headers.= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=utf-8 \r\n';
        
        
        
        // send email
        // mail($email,"Your Password Reset Link.",$msg,$headers);
        Mail::send('emails.recover-pass', ['verification_code' => $verification_code], function ($m) use ($user) {
            $m->from('noreply@onsideball.com', 'İdealizer');

            $m->to($user->email, $user->name)->subject('Parol yeniləmə linki!');
        });
            // });

        } catch (\Exception $e) {
            //Return with error
            $error_message = $e->getMessage();
            return response()->json(['error' => "Baza ilə bağlı problem yarandı"], 401);
        }

        return response()->json([
            'errors' => null
        ]);
    }

    public function recoverPass(Request $request){
         
        if(strlen($request->password) < 6 ){$message=['errors' => array('Parol 6 simvoldan azdır')  ];
            
            return response()->json($message,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        $check = DB::table('password_resets')->where('token',$request->key)->first();
        if(!is_null($check)){
           
            $user = DB::table('users')->where('email', $check->email)->first();
            $users=DB::table('users')->Where('email', $check->email)->update(['password' => Hash::make($request->password)]);
             DB::table('password_resets')->where('token',$request->key)->delete();
            return response()->json([
                'errors'=> null,
                
            ]);
        }
        return response()->json(['errors'=> array("Şifrənin yenilənməsi mümkün deyil")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function userInfo(Request $request){
        $username= $request->name.' '.$request->surname;
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
  
     
      if($request->api_key == 'abcd'){
        if(empty($request->header('Authorization'))){
            return response()->json(['errors'=> array("İstifadəçinin unikal ID -si boş ola bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          }
          if(empty($request->name)){
            return response()->json(['errors'=> array("Ad boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          }
          if(empty($request->surname)){
            return response()->json(['errors'=> array("Soyad boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          }
          if(empty($request->gender)){
            return response()->json(['errors'=> array("Cinsiyyət boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          }
          if(empty($request->birthday)){
            return response()->json(['errors'=> array("Doğum tarixi boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
          }
          
        $users=DB::table('users')->Where('id', $user->id)->update([
            "name" => preg_replace('/[^a-zA-Z ]/','', $request->name),
            "surname" => preg_replace('/[^a-zA-Z ]/','', $request->surname),
            "user_gender" => $request->gender,
            "user_birthday" => $request->birthday,
     
            ]);
            if($users){
                return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }else{
                return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
        }else{
            return response()->json(['errors'=> array("Api kodu yalnışdır")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }

    }


    public function mobileNumber(Request $request){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
         $user->id;
        if(empty($request->number)){
            return response()->json(['errors'=> array("Mobil nömrə boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        $users=DB::table('users')->Where('id', $user->id)->update([
            "user_phone" => preg_replace('/[^0-9+  ]/','', $request->number),
          
     
            ]);
            if($users){
                return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }else{
                return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }

    }

    public function userEmail(Request $request){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        if($request->api_key == 'abcd'){
        $request->validate([
             
            'email' => 'email|required',
        ]);
        if(empty($request->email)){
     
    
            return response()->json(['errors'=> array("Email boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }

        $email=DB::table('users')->Where('email', $request->email)->first();
         
        if( !$email){
            if($user->password == null){
                return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
            }
      

            if(!Hash::check($request->password, $user->password)){
                return response()->json(['errors'=> array('Parol doğru deyil')],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
            }
        
                $verification_code = \Str::random(30); 
                $email_verifications= DB::table('email_verifications')->insert(['email'=> $request->email,'token'=>$verification_code,'user_id'=> $user->id]);
            
        $headers='X-Mailer: PHP/' . phpversion().'\r\n';
        $headers.= 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=utf-8 \r\n';
        
        
        Mail::send('emails.verify-change-email', ['verification_code' => $verification_code], function ($m) use ($user,$request) {
            $m->from('noreply@onsideball.com', 'İdealizer');

            $m->to($request->email, $user->name)->subject('Email təstiq linki!');
        });
                if($email_verifications){
                    return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
                }
        }else{

            return response()->json(['errors'=> array("Bu email artıq istifadə edilir")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE);
        }

    }else{
        return response()->json(['errors'=> array("Api şifrəsi yalnışdır")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    }
    public function getAuthUser(Request $request) {
      
    }
    public function userPassword(Request $request){
        if($request->api_key== 'abcd'){
            $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
            $user->id;
        if(empty($request->password)){
            return response()->json(['errors'=> array("Parol boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        
        if(Hash::check($request->password, $user->password)){
        $users=DB::table('users')->Where('id', $user->id)->update([
            "password" => Hash::make($request->new_password ),
          
     
            ]);
            if($users){
                return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }else{
                return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
            }
    }else{
        return response()->json(['errors'=> array("Parol yanlışdı.")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE);
    }
    }else{
        return response()->json(['errors'=> array("Api şifrəsi yalnışdır")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

}


public function userImage(Request $request){
    if($request->api_key == 'abcd'){
        $user = JWTAuth::parseToken($request->header('Authorization'))->toUser();
        $user->id;
        if(empty($user->id)){
            return response()->json(['errors'=> array("İstifadəçinin malumatı yalnışdır")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        if(!$request->hasFile('image')){
            return response()->json(['errors'=> array("Şəkil boş buraxıla bilməz")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
    $validate=$request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

  
    $file_name = uniqid() . '.' . $request->image->getClientOriginalExtension();
    $request->image->move('images/users', $file_name);
    $userss = User::find(intval($user->id));
    $path = 'images/users/' . $userss->user_file;
      if (file_exists($path)) {
          @unlink($path);
      }  
    $user = User::Where('id', $user->id)->update(
        [
            "user_file" => url('/').'/images/users/'.$file_name,
         ]
    );
   

if($user){
    return response()->json(['errors'=> null],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
}else{
    return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
}
    }else{
        return response()->json(['errors'=> array("Xəta baş verdi")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    }
    
}

public function verifyEmail($verification_code){
    $check = DB::table('email_verifications')->where('token',$verification_code)->first();
    if(!is_null($check)){
        $user = User::find($check->user_id);
        if($user->email == $check->email){
            return response()->json( ['errors'=> array('Bu email artiq təstiq edilib')]
            ,200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        DB::table('users')->Where('id', $check->user_id)->update(['email' =>$check->email]);
        DB::table('email_verifications')->where('token',$verification_code)->delete();
        return redirect()->to('http://onsideball.com/dashboard');
        return response()->json([
            'errors'=> null,
          
        ]);
    }
    return response()->json([ 'errors'=> array("Keçərsiz təstiqləmə cəhdi.")],200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);

}
}
