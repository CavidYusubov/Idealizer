<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Api( Request $request){

        if($request->api_key == 'abcd'){

        $Pages = Pages::all();
        foreach ($Pages as $key => $value) {
        /*return $value->settings_description;*/
        }
        return response()->json($Pages, 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    
        }else{
        $message= array();
        $message[]=[
        'message' => ' Api key is incorrect'

        ];
        return response()->json($message);
        }
}
    public function index()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
        $data['pages'] = Pages::all()->sortBy('page_must');
        return view('backend.Pages.index',compact('data'),  ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
            return view('backend.Pages.create',        ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        } else {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate([
                'page_title' => 'required',
                'page_content' => 'required',
                'page_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('images/pages'),$file_name);
        } else {
            $file_name=null;
        }



        $page=Pages::insert(
          [
              "page_title" => $request->page_title,
              "page_slug" => $slug, //işlem
              "page_file" => $file_name,//İşlem
              "page_content" => $request->page_content,
              "page_status" => $request->page_status,
              "page_must" => '0',
          ]
      );

      if ($page)
      {
          return redirect(route('Pages.Index'))->with('success','Uğurlu');
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
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
        
        $pages=Pages::where('id',$id)->first();
        return view('backend.Pages.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('pages',$pages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (strlen($request->page_slug)>3)
        {
            $slug=Str::slug($request->page_slug);
        } else {
            $slug=Str::slug($request->page_title);
        }

        if ($request->hasFile('page_file'))
        {
            $request->validate([
                'page_title' => 'required',
                'page_content' => 'required',
                'page_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->page_file->getClientOriginalExtension();
            $request->page_file->move(public_path('images/pages'),$file_name);

            $page=Pages::Where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug, //işlem
                    "page_file" => $file_name,//İşlem
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                ]
            );

            $path='images/pages/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        } else {
            $page=Pages::Where('id',$id)->update(
                [
                    "page_title" => $request->page_title,
                    "page_slug" => $slug, //işlem
                    "page_content" => $request->page_content,
                    "page_status" => $request->page_status,
                ]
            );
        }





        if ($page)
        {
            return back()->with('success','Uğurlu');
        }
        return back()->with('error','Uğursuz');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Pages = Pages::find(intval($id));
      $path = 'images/Pages/' . $Pages->file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        if ($Pages->delete()) {

         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }
    

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $pages = Pages::find(intval($value));
            $pages->page_must = intval($key);
            $pages->save();
        }
        echo true;
    }

public function block($id){
 $page= Pages::find(intval($id));
 $page->page_status;
 $page_update_status=Pages::Where('id', $id)->update([

    'page_status' => '0'

 ]);
 if($page_update_status){
    return back()->with('success', 'Səhifə deaktiv edildi blok edildi');
 }
 return back()->with('error', 'Uğursuz');



}
public function unblock($id){
 $page= Pages::find(intval($id));
 $page->page_status;
 $page_update_status=Pages::Where('id', $id)->update([

    'page_status' => '1'

 ]);

   
   if($page_update_status){
    return back()->with('success', 'Səhifə aktiv edildi');
 }
 return back()->with('error', 'Uğursuz');

}
}

