<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DefaultController extends Controller
{
    public function index()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        $data['faqs'] = DB::table('faq')->Where('status',0)->orderBy('id','desc')->paginate(15);

        return view('Backend.default.index',compact('data'),['count_question'=>$count_question]);
    }
 
    public function login()
    {
        return view('Backend.default.login');
    }
 
    public function authenticate(Request $request)
    {
        $request->flash();
 
        $credentials=$request->only('email','password');
        $remember_me=$request->has('remember_me') ? true : false;
 
        if (Auth::attempt($credentials,$remember_me))
        {
             return redirect()->intended(route('dashboard.Index'));
        } else {
            return back()->with('error','Email və ya parol yalnışdır');
        }
 
 
    }
 
    public function logout()
    {
        Auth::logout();
        return redirect(route('Login'))->with('success','Güvenli Çıkış Yapıldı');
    }
 
}
