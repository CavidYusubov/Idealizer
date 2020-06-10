<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MubarekController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

        $data['mubarek'] = DB::table('mubarek')->orderBy('id','desc')->paginate(15);
        return view('Backend.mubarek.index',compact('data'),['count_question'=>$count_question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();

            return view('Backend.mubarek.create',['count_question'=>$count_question]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date=strtotime($request->date);

        $khutba=DB::table('mubarek')->insert(
          [
            
              "date" =>  $date,
              "title" => $request->title,
              "description"=>$request->description,
            
          ]
      );

      if ($khutba)
      {
          return redirect(route('mubarek'))->with('success','Uğurlu');
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

        $mubarek=DB::table('mubarek')->where('id',$id)->first();
        return view('Backend.mubarek.edit',['count_question'=>$count_question])->with('mubarek',$mubarek);
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
       $date=strtotime($request->date);
   
            $khutba=DB::table('mubarek')->Where('id',$request->id)->update(
                [
                   
              "date" =>  $date,
              "title" => $request->title,
              "description"=>$request->description,
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
       $khutba=DB::table('mubarek')->Where('id',$id);
       
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
