<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KhutbaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        $data['khutbas'] = DB::table('khutbas')->orderBy('id','desc')->paginate(15);
        return view('Backend.khutbas.index',compact('data'),['count_question'=>$count_question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

            return view('Backend.khutbas.create',['count_question'=>$count_question]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        



        $khutba=DB::table('khutbas')->insert(
          [
            
              "date" => date('d.m.Y',time()),
              "subject" => $request->subject,
              "url"=>$request->url,
              "imam"=>$request->imam,
          ]
      );

      if ($khutba)
      {
          return redirect(route('Khutba'))->with('success','Uğurlu');
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

        $khutbas=DB::table('khutbas')->where('id',$id)->first();
        return view('Backend.khutbas.edit',['count_question'=>$count_question])->with('khutbas',$khutbas);
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
   
            $khutba=DB::table('khutbas')->Where('id',$request->id)->update(
                [
                    
                    "subject" => $request->subject,
                    "url"=>$request->url,
                    "imam"=>$request->imam,
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
       $khutba=DB::table('khutbas')->Where('id',$id);
       
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
            $khutbas = khutbas::find(intval($value));
            $khutbas->khutba_must = intval($key);
            $khutbas->save();
        }
        echo true;
    }

}
