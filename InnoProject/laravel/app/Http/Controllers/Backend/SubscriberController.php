<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscribers;
use Illuminate\Support\Facades\DB;
class SubscriberController extends Controller
{
    public function index()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
        $data['subscribers'] = Subscribers::all()->sortBy('id');
        return view('backend.subscribers.index',compact('data'), ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }
    
    public function create()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
       
            return view('backend.subscribers.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }
public function subscribeAdd(Request $request){
    $email = Subscribers::where('email', $request->email)->first();
   if(!$email) {
       $subs=Subscribers::insert(
        [
            
              'email' => $request->email,
             
              
        ]
    );
    
		if($subs){
            return response()->json(["errors"=>null], 200, 
		['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE );}else{
            return response()->json(["errors"=>["problem yarandı"]], 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);

        }
    }else{
        return response()->json(["errors"=>["Siz artıq abunə olmusunuz"]], 200, 
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE );
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        // $blogs=Blogs::where('id',$id)->first();
        // return view('backend.blogs.edit')->with('blogs',$blogs);
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
        // if (strlen($request->blog_slug)>3)
        // {
        //     $slug=Str::slug($request->blog_slug);
        // } else {
        //     $slug=Str::slug($request->blog_title);
        // }

        // if ($request->hasFile('blog_file'))
        // {
        //     $request->validate([
        //         'blog_title' => 'required',
        //         'blog_content' => 'required',
        //         'blog_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        //     ]);

        //     $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
        //     $request->blog_file->move(public_path('images/blogs'),$file_name);

        //     $blog=Blogs::Where('id',$id)->update(
        //         [
        //             "blog_title" => $request->blog_title,
        //             "blog_slug" => $slug, //işlem
        //             "blog_file" => $file_name,//İşlem
        //             "blog_content" => $request->blog_content,
        //             "blog_status" => $request->blog_status,
        //         ]
        //     );

        //     $path='images/blogs/'.$request->old_file;
        //     if (file_exists($path))
        //     {
        //         @unlink(public_path($path));
        //     }

        // } else {
        //     $blog=Blogs::Where('id',$id)->update(
        //         [
        //             "blog_title" => $request->blog_title,
        //             "blog_slug" => $slug, //işlem
        //             "blog_content" => $request->blog_content,
        //             "blog_status" => $request->blog_status,
        //         ]
        //     );
        // }





        // if ($blog)
        // {
        //     return back()->with('success','Uğurlu');
        // }
        // return back()->with('error','Uğursuz');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blog=Subscribers::find(intval($id));
       if ($blog->delete())
       {
           echo 1;
       }
       echo 0;
    }

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $subs = Subscribers::find(intval($value));
            $subs->subscriber_must = intval($key);
            $subs->save();
        }
        echo true;
    }
    public function block($id){
        $subs= Blogs::find(intval($id));
        $subs->subs_status;
        $subs_update_status=Blogs::Where('id', $id)->update([
       
           'subs_status' => '0'
       
        ]);
        if($subs_update_status){
           return back()->with('success', 'Xəbər Deaktiv edildi');
        }
        return back()->with('error', 'Uğursuz');
       
       
       
       }
       public function unblock($id){
        $subs= Subscribers::find(intval($id));
        $subs->blog_status;
        $subs_update_status=Subscribers::Where('id', $id)->update([
       
           'subs_status' => '1'
       
        ]);
        if($subs_update_status){
            return back()->with('success', 'Xəbər aktiv edildi');
         }
         return back()->with('error', 'Uğursuz');
        
        
       }
        
}
