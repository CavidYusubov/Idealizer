<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;
use Illuminate\Support\Str;
use \DB;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
        $data['blog'] = Blogs::all()->sortBy('id');
        return view('backend.blogs.index',compact('data'),['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    public function blogApi(Request $request){

	
        if($request->api_key == 'abcd'){
    
            $blogs = DB::table('blogs')->select(array('id','blog_title as title','blog_file as image','blog_content as description', 'blog_title_en', 'blog_content_en'))->orderBy('id','desc')->paginate(10);
           
            foreach ($blogs as $key => $value) {
                
                if($request->header('accept-language') == 'en'){
                    
                    $value->title = $value->blog_title_en;
                    $value->description  = $value->blog_content_en;
                     }
           $data[]=[
          
            'title'=>$value->title,
            ];
        
            }
            return response()->json($blogs, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
        
            }else{
      
            return response()->json([ 'errors' => ['Api key is incorrect']]);
            }
    }
    public function blogFindApi(Request $request,$id){

	
        if($request->api_key == 'abcd'){
    
            $blogs = Blogs::find(intval($id));
           if($blogs){
            if($request->header('accept-language') == 'en'){
                    
                $data=[
                    'id'=>$blogs->id,
                    'title'=>$blogs->blog_title_en,
                    'image' => $blogs->blog_file,
                    'description' => $blogs->blog_content_en];
                 }else{
               $data=[
            'id'=>$blogs->id,
            'title'=>$blogs->blog_title,
            'image' => $blogs->blog_file,
            'description' => $blogs->blog_content,];
               }
            
            return response()->json($data, 200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
           }else{
                return response()->json(['errors'=>[ 'Xəbər tapılmadı']]);
            }
            }else{
          
            
            return response()->json([ 'message' => ' Api key is incorrect']);
            }
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
      
            return view('backend.blogs.create',['notifications' =>$notification,'count_n'=>count($count_notify)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (strlen($request->blog_slug)>3)
        {
            $slug=Str::slug($request->blog_slug);
        } else {
            $slug=Str::slug($request->blog_title);
        }

        if ($request->hasFile('blog_file'))
        {
            $request->validate([
                'blog_title' => 'required',
                'blog_content' => 'required',
                'blog_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move('images/blogs/',$file_name);
        } else {
            $file_name=null;
        }


        $blog=Blogs::insert(
          [
              "blog_title" => $request->blog_title,
              "blog_slug" => $slug, //işlem
              "blog_file" => url('/').'/images/blogs/'.$file_name,//İşlem
              "blog_content" => $request->blog_content,
              "blog_title_en" => $request->blog_title_en,
              "blog_content_en" => $request->blog_content_en,
              "blog_status" => $request->blog_status,
              "blog_must" => '0',
          ]
      );

      if ($blog)
      {
          return redirect(route('blog.index'))->with('success','Uğurlu');
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
      
        $blogs=Blogs::where('id',$id)->first();
        return view('backend.blogs.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('blogs',$blogs);
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
        if (strlen($request->blog_slug)>3)
        {
            $slug=Str::slug($request->blog_slug);
        } else {
            $slug=Str::slug($request->blog_title);
        }

        if ($request->hasFile('blog_file'))
        {
            $request->validate([
                'blog_title' => 'required',
                'blog_content' => 'required',
                'blog_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move('images/blogs/',$file_name);
            $path = 'images/blogs/' . $request->blog_file_old;
            if (file_exists($path)) {
                @unlink($path);
            }
            $blog=Blogs::Where('id',$id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug, //işlem
                    "blog_file" => url('/').'/images/blogs/'.$file_name,//İşlem
                    "blog_title_en" => $request->blog_title_en,
                    "blog_content_en" => $request->blog_content_en,
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );

            $path='images/blogs/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink($path);
            }

        } else {
            $blog=Blogs::Where('id',$id)->update(
                [
                    "blog_title_en" => $request->blog_title_en,
                    "blog_content_en" => $request->blog_content_en,
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug, //işlem
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );
        }





        if ($blog)
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
      
       $blog=Blogs::find(intval($id));
       $path = 'images/blogs/' . $blog->blog_file;
       if (file_exists($path)) {
           @unlink($path);
       }
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
            $blogs = Blogs::find(intval($value));
            $blogs->blog_must = intval($key);
            $blogs->save();
        }
        echo true;
    }
    public function block($id){
        $Blog= Blogs::find(intval($id));
        $Blog->blog_status;
        $blog_update_status=Blogs::Where('id', $id)->update([
       
           'blog_status' => '0'
       
        ]);
        if($blog_update_status){
           return back()->with('success', 'Xəbər Deaktiv edildi');
        }
        return back()->with('error', 'Uğursuz');
       
       
       
       }
       public function unblock($id){
        $Blog= Blogs::find(intval($id));
        $Blog->blog_status;
        $Blog_update_status=Blogs::Where('id', $id)->update([
       
           'blog_status' => '1'
       
        ]);
        if($Blog_update_status){
            return back()->with('success', 'Xəbər aktiv edildi');
         }
         return back()->with('error', 'Uğursuz');
        
        
       }
        
}
