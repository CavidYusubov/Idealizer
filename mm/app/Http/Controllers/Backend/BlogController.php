<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
       
        $data['blog'] = DB::table('blogs')->orderBy('id','desc')->paginate(15);
        return view('Backend.blogs.index',compact('data'),['count_question'=>$count_question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        
            return view('Backend.blogs.create',['count_question'=>$count_question]);
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
            $request->blog_file->move(public_path('images/blogs'),$file_name);
        } else {
            $file_name=null;
        }



        $blog=DB::table('blogs')->insert(
          [
              "blog_title" => $request->blog_title,
              "blog_slug" => $slug.'-'.time(), //işlem
              "blog_file" => $file_name,//İşlem
              "blog_content" => $request->blog_content,
              "blog_status" => $request->blog_status,
              "blog_must"=>0,
              "date" => time()
          ]
      );

      if ($blog)
      {
          return redirect(route('blog'))->with('success','Uğurlu');
      }
        return back()->with('error','Uğursuz');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $settings = DB::table('settings')->first();
       
        $blog=DB::table('blogs')->Where('blog_slug',$slug)->first();
        return view('Frontend.read_blog',[ 'settings'=>$settings])->with('blog',$blog);
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
        
        $blogs=DB::table('blogs')->where('id',$id)->first();
        return view('Backend.blogs.edit',['count_question'=>$count_question])->with('blogs',$blogs);
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
            $request->blog_file->move(public_path('images/blogs'),$file_name);

            $blog=DB::table('blogs')->Where('id',$request->id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug, //işlem
                    "blog_file" => $file_name,//İşlem
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );

            $path='images/blogs/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        } else {
            $blog=DB::table('blogs')->Where('id',$request->id)->update(
                [
                    "blog_title" => $request->blog_title,
                    "blog_slug" => $slug, //işlem
                    "blog_content" => $request->blog_content,
                    "blog_status" => $request->blog_status,
                ]
            );
        }





        if ($blog)
        {
            return back()->with('success','Xəbər yeniləndi');
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
       $blog=DB::table('blogs')->find(intval($id));
       
       if ($blog->delete())
        {
            return back()->with('success','Xəbər silindi');
        }
        return back()->with('error','Problem baş verdi');
    }

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $blogs = DB::table('blogs')->find(intval($value));
            $blogs->blog_must = intval($key);
            $blogs->save();
        }
        echo true;
    }

}
