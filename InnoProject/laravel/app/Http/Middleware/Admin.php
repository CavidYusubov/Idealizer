<?php

namespace App\Http\Middleware;
use App\JWTAuth;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if(\Auth::guard('web')->user()){
         if ( \Auth::guard('web')->user()->user_status == '1' )
        {
          if ( \Auth::guard('web')->user()->user_role=='admin')
        {
            return $next($request);

        } else {
            return redirect(route('authenticate'))->with('error','Bu bölməyə giriş icazəniz yoxdur');
        }

        } else {
            return redirect(route('authenticate'))->with('error','Bu bölməyə giriş icazəniz yoxdur. Siz blok edilmisiniz.');
        }
        
       
    }else{
        return redirect(route('login')); 
    }
        return redirect(route('login'));
    }
}
