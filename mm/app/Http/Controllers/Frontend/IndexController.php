<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
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
  
   public function index(){
   
    $settings = DB::table('settings')->first();
   
       $blogs=DB::table('blogs')->orderBy('id','desc')->offset(0)
       ->limit(3)->get();
       $blogs1=DB::table('blogs')->orderBy('id','desc')->offset(3)
       ->limit(3)->get();
       $blogs2=DB::table('blogs')->orderBy('id','desc')->offset(6)
       ->limit(3)->get();
       $blogs3=DB::table('blogs')->orderBy('id','desc')->offset(9)
       ->limit(3)->get();
       $blogs4=DB::table('blogs')->orderBy('id','desc')->offset(12)
       ->limit(3)->get();
       $blogs5=DB::table('blogs')->orderBy('id','desc')->offset(15)
       ->limit(3)->get();
       $blogs6=DB::table('blogs')->orderBy('id','desc')->offset(18)
       ->limit(3)->get();
       $blogs7=DB::table('blogs')->orderBy('id','desc')->offset(21)
       ->limit(3)->get();
       $blogs8=DB::table('blogs')->orderBy('id','desc')->offset(24)
       ->limit(3)->get();
       $blogs9=DB::table('blogs')->orderBy('id','desc')->offset(27)
       ->limit(3)->get();
       
       $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('j.m.Y'))->first();
       $nextimsak=explode('.',$namaz_times->date);
       $lastisha=explode('.',$namaz_times->date);
       $nextdayimsak =$nextimsak[0]+1 .'.'.$nextimsak[1].'.'.$nextimsak[2];
       $lastdayisha =$lastisha[0]-1 .'.'.$lastisha[1].'.'.$lastisha[2];
       $next_imsak=DB::table('namaz_vaxtlari')->where('date',$nextdayimsak)->first();
       $last_isha=DB::table('namaz_vaxtlari')->where('date',$lastdayisha)->first();
       $next_files=DB::table('namaz_files')->orderBy('id')->get();
       return view('Frontend.index' ,[ 
        'blogs9'=> $blogs9 ,
        'blogs8'=> $blogs8 ,
        'blogs7'=> $blogs7 ,
        'blogs6'=> $blogs6 ,
        'blogs5'=> $blogs5 ,
        'blogs4'=> $blogs4 ,
        'blogs3'=> $blogs3 ,
        'blogs2'=> $blogs2 ,
           'blogs1'=> $blogs1 ,
           'blogs'=> $blogs ,
           'settings'=>$settings,'next_files'=>$next_files,'namaz_times' =>$namaz_times,'next_imsak' =>$next_imsak->imsak,'last_isha'=>$last_isha->isha]);
   }
   public function about(){
    $settings = DB::table('settings')->first();
    
    $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('d.m.Y'))->first();
    $abouts=DB::table('abouts')->orderBy('id','desc')->first();
    $abouts_files=DB::table('abouts_files')->orderBy('id','desc')->get();
    return view('Frontend.about' , ['settings'=>$settings,'abouts'=>$abouts,'abouts_files'=>$abouts_files,'namaz_times' =>$namaz_times]);
}
public function xutbe(){
    $settings = DB::table('settings')->first();
    
    $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('d.m.Y'))->first();
    $khutbas=DB::table('khutbas')->orderBy('id','desc')->get();
    return view('Frontend.khutba' , ['khutbas'=>$khutbas,'namaz_times' =>$namaz_times,'settings'=>$settings]);
    
}

public function faq(){
    $settings = DB::table('settings')->first();
    
    $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('d.m.Y'))->first();
    $data['faq']=DB::table('faq')->where('status','1')->orderBy('id','desc')->paginate(20);
    return view('Frontend.faq' , compact('data'),['settings'=>$settings,'namaz_times' =>$namaz_times,'result' => null]);
    
}

public function question(Request $request){
    $request->validate([
        'email' => 'required|email'   ]);
$check_email=DB::table('faq')->where([['email','=',$request->email],['status','=',0]])->get();

if(count($check_email) > 0 ){
    return back()->with('error',' Siz artıq sual vermisiz. Sualınız Admin tərəfindən təstiqləndikdən sonra yeni sual verə bilərsiz');
} else{      

$faq=DB::table('faq')->insert(
            [
                "email"=>htmlspecialchars($request->email),
                "question"=>htmlspecialchars($this->remove_special_character($request->question)),
                "answer"=>null,
                "status"=>0,
            ]
        );
  
        if ($faq)
        {
            return redirect(route('faq'))->with('success',' Sualınız uğurla göndərildi');
        }
          return back()->with('error','Problem baş verdi. Bu problemi sayt rəhbərliyinə bildir');
      }
    }


    public function faq_search (Request $request){
        $data['faq']= DB::table('faq')
        ->where('question', 'LIKE', '%'.$request->search .'%')
        ->orwhere('answer', 'LIKE', '%'.$request->search .'%')
        ->paginate(20);
        $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('d.m.Y'))->first();
   
        $settings = DB::table('settings')->first();
   
    return view('Frontend.faq' , compact('data'),['namaz_times' =>$namaz_times,'result' => $request->search,'settings'=>$settings]);
    }

    public function holy_days(){
        $settings = DB::table('settings')->first();
        
        $namaz_times=DB::table('namaz_vaxtlari')->where('date',date('d.m.Y'))->first();
        
        $data['mubarek']=DB::table('mubarek')->orderBy('id','desc')->paginate(20);
        return view('Frontend.holy_days' ,compact('data') ,['namaz_times' =>$namaz_times,'settings'=>$settings]);
    }
}
