<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NamazController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        $data['namaz'] = DB::table('namaz_vaxtlari')->orderBy('id','desc')->paginate(15);
        $namaz_fayllar['namaz_fayli'] = DB::table('namaz_files')->orderBy('id','desc')->paginate(5);
        return view('Backend.namaz.index',compact('data'),compact('namaz_fayllar'))->with('count_question' , $count_question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

            return view('Backend.namaz.create',['count_question'=>$count_question]);
    }
    public function add_file()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

            return view('Backend.namaz.add_file',['count_question'=>$count_question]);
    }
    public function add_files(Request $request){
        $request->validate([
             
            'title' => 'required'
        ]);
        if ($request->hasFile('file'))
        {
            $request->validate([
             
                'file' => 'required|mimes:pdf,doc,docx,txt|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('images/namaz/files'),$file_name);
        } else {
            $file_name=null;
        }
          
            $namaz=DB::table('namaz_files')->insert(
                [           

          "title"=>$request->title,
          "file"=>$file_name,
          
                ]
            );
      
        
 


      if ($namaz)
      {
          return redirect(route('namaz'))->with('success','Uğurlu');
      }
        return back()->with('error','Uğursuz');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i=0;$i<count($request->date);$i++) {
          
            $namaz=DB::table('namaz_vaxtlari')->insert(
                [           

          "date"=>$request->date[$i],
          "imsak"=>$request->imsak[$i],
          "subh"=>$request->subh[$i],
          "gun_cixir"=>$request->gun_cixir[$i],
          "zohr"=>$request->zohr[$i],
          "esr"=>$request->esr[$i],
          "gun_batir"=>$request->gun_batir[$i],
          "megrib"=>$request->megrib[$i],
          "isha"=>$request->isha[$i],
                ]
            );
      
        }
 


      if ($namaz)
      {
          return redirect(route('namaz'))->with('success','Uğurlu');
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
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        $namaz=DB::table('namaz_vaxtlari')->where('id',$id)->first();
        return view('Backend.namaz.edit',['count_question'=>$count_question])->with('namaz',$namaz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   
            $khutba=DB::table('namaz_vaxtlari')->Where('id',$request->id)->update(
                [
                    
                  
          "date"=>$request->date,
          "imsak"=>$request->imsak,
          "subh"=>$request->subh,
          "gun_cixir"=>$request->gun_cixir,
          "zohr"=>$request->zohr,
          "esr"=>$request->esr,
          "gun_batir"=>$request->gun_batir,
          "megrib"=>$request->megrib,
          "isha"=>$request->isha,
                ]
            );
        





        if ($khutba)
        {
            return back()->with('success','Yeniləndi');
        }
        return back()->with('error','Problem baş verdi');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $khutba=DB::table('namaz_vaxtlari')->Where('id',$id);
       
       if ($khutba->delete())
        {
            return back()->with('success','Silindi');
        }
        return back()->with('error','Problem baş verdi');
    }
    public function destroy_n($id)
    {
       $khutba=DB::table('namaz_files')->Where('id',$id);
       
       if ($khutba->delete())
        {
            return back()->with('success','Silindi');
        }
        return back()->with('error','Problem baş verdi');
    }

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $namaz = namaz::find(intval($value));
            $namaz->khutba_must = intval($key);
            $namaz->save();
        }
        echo true;
    }

}
