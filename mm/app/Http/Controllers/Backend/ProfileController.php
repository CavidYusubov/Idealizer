<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index(){
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        return view('Backend.profile.index',['count_question'=>$count_question]);
    }
    public function list(){
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        $data['users'] = DB::table('users')->orderBy('id','desc')->paginate(10);
        return view('Backend.profile.list',compact('data'),['count_question'=>$count_question]);
    }

    public function update(Request $request)
    {
  
        if(empty($request->password)){
            $profile=DB::table('users')->Where('id',Auth::user()->id)->update(
                [
                    
                    "email"=>$request->email,
            "name"=>$request->name,
         
        
                ]
            );
        }else{

            $profile=DB::table('users')->Where('id',Auth::user()->id())->update(
                [
                    
                    "email"=>$request->email,
            "name"=>$request->name,
            "password"=>Hash::make($request->password),
        
                ]
            );
        
        }





        if ($profile)
        {
            return back()->with('success','Yeniləndi');
        }
        return back()->with('error','Problem baş verdi');
    }
    public function add(){
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        return view('Backend.profile.create',['count_question'=>$count_question]);
    }
public function create(Request $request){
    
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|Min:6'
    ]);


    $user = DB::table('users')->insert(
        [
            "name" => $request->name,
            "email" => $request->email,
           
            "password" => Hash::make($request->password),
            
        ]
    );

    if ($user) {
        return redirect(route('profile'))->with('success', 'Əlavə edildi');
    }
    return back()->with('error', 'Problem baş verdi');
}
public function destroy($id)
{
   $khutba=DB::table('users')->Where('id',$id);
   
   if ($khutba->delete())
    {
        return back()->with('success','Silindi');
    }
    return back()->with('error','Problem baş verdi');
}

}
