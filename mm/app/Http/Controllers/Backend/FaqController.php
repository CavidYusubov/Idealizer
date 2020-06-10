<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FaqController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['faqs'] = DB::table('faq')->orderBy('id','desc')->paginate(15);
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        return view('Backend.faq.index',compact('data'),['count_question' => $count_question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

            return view('Backend.faq.create',['count_question'=>$count_question]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        



        $khutba=DB::table('faq')->insert(
          [
                  
                    "email"=>$request->email,
            "question"=>$request->question,
            "answer"=>$request->answer,
            "status"=>$request->status,
          ]
      );

      if ($khutba)
      {
          return redirect(route('faq.admin'))->with('success','Uğurlu');
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

        $faq=DB::table('faq')->where('id',$id)->first();
        return view('Backend.faq.edit',['count_question'=>$count_question])->with('faq',$faq);
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
   
            $khutba=DB::table('faq')->Where('id',$request->id)->update(
                [
                    
                    "email"=>$request->email,
            "question"=>$request->question,
            "answer"=>$request->answer,
            "status"=>$request->status,
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
       $khutba=DB::table('faq')->Where('id',$id);
       
       if ($khutba->delete())
        {
            return back()->with('success','Silindi');
        }
        return back()->with('error','Problem baş verdi');
    }

    public function sortable()
    {
//        print_r($_POST['item']);

    }
    

}
