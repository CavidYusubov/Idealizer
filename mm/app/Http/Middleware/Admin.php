<?php

namespace App\Http\Middleware;

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
        if (\Auth::user() )
        {
            return $next($request);

        } else {
            return redirect(route('login'))->with('error','Giriş üçün icazəniz yoxdu');
        }

        return redirect(route('login'));
    }
}
