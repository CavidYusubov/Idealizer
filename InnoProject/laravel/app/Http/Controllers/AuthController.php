<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{ /**
    * Create a new AuthController instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth:api', ['except' => ['login']]);
   }

   /**
    * Get a JWT via given credentials.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function login(Request $request)
   {
      
        $credentials = $request->only('email', 'password');
        
        if ($token = auth('api')->attempt($credentials)) {
            if(auth('api')->user()->email_verified_at == null){
                return response()->json(['errors' => array('Siz Email adresinizi təstiq etməlisiniz.')], 401);   
            }
            if(auth('api')->user()->user_status == 1){
            return $this->respondWithToken($token);
            }else{
                if($email_verified_at == null){
                    return response()->json(['errors' => array('Siz Email adresinizi təstiq etməlisiniz.')], 401);    
                }
                return response()->json(['errors' => array('Hesabınız Deaktivdir')], 401);
            }
        }
        $check_email= User::select('email')->where('email',$request->email)->first();
		if($check_email !=null){
            return response()->json(['errors' => array('Parol və ya email səhvdir')], 401);
        }else{
            return response()->json(['errors' => array('Parol və ya email səhvdir')], 401, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        }
        return response()->json(['errors' => array('Parol və ya email səhvdir')], 401);
   }

   /**
    * Get the authenticated User.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function me()
   {
  
    if(auth('api')->user()->password == null){
        auth('api')->user()->has_password=false;
    }else{
        auth('api')->user()->has_password=true;
    }
    return response()->json(auth('api')->user());
   }

   /**
    * Log the user out (Invalidate the token).
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout()
   {
    auth()->guard('api')->logout();

       return response()->json(['message' => 'Successfully logged out']);
   }

   /**
    * Refresh a token.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function refresh()
   {
       return $this->respondWithToken(auth()->guard('api')->refresh());
   }

   /**
    * Get the token array structure.
    *
    * @param  string $token
    *
    * @return \Illuminate\Http\JsonResponse
    */
   protected function respondWithToken($token)
   {
    if(auth('api')->user()->password == null){
        auth('api')->user()->has_password=false;
    }else{
        auth('api')->user()->has_password=true;
    }
       return response()->json([
           'error' => null,
           'access_token' => $token,
           'token_type' => 'bearer',
           'expires_in' => auth('api')->factory()->getTTL() * 60,
           'Authorization'=> $token,
           'user_detail' => auth('api')->user(),
          
       ]);
   }
   public function guard()
   {
       return Auth::guard('api');
   }
   public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token',$verification_code)->first();
        if(!is_null($check)){
            $user = User::find($check->user_id);
            if($user->is_verified == 1){
                return response()->json([
                    'success'=> true,
                    'message'=> 'Account already verified..'
                ]);
            }
            $user->update(['email_verified_at' => date("d-m-Y H:i",time())]);
            DB::table('user_verifications')->where('token',$verification_code)->delete();
            return response()->json([
                'success'=> true,
                'message'=> 'You have successfully verified your email address.'
            ]);
        }
        return response()->json(['success'=> false, 'error'=> "Verification code is invalid."]);
    }
}
