<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
    public function index(){
        $count_question = DB::table('faq')->Where('status',0)->orderBy('id','desc')->get();
        $abouts=DB::table('abouts')->first();
        $filess=DB::table('abouts_files')->get();
        return view('Backend.about.index',['about'=> $abouts,'filess'=>$filess,'count_question'=>$count_question]);
    }
    public function destroy_file($id)
    {
       $file=DB::table('abouts_files')->where('id',$id);
       
       if ($file->delete())
        {
            return back()->with('success','Şəkil silindi');
        }
        return back()->with('error','Problem baş verdi');
    }
    public function update(Request $request)
    {
       
        if ($request->hasFile('filess')){
            $request->validate([
              
                'filess' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->filess->getClientOriginalExtension();
            $request->filess->move(public_path('images/'),$file_name);

            $abouts=DB::table('abouts_files')->insert(
                [
                    "file" => 'images/'.$file_name,
                ]
            );
            $abouts=true;
            $path='images/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
        }
        if ($request->hasFile('file'))
        {
            $request->validate([
              
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('images/'),$file_name);

            $abouts=DB::table('abouts')->Where('id',$request->id)->update(
                [
                    "title" => $request->title,
                    "content" => $request->content,
                    "file" => 'images/'.$file_name,//İşlem
                ]
            );

            $path='images/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

        } else {
            $abouts=DB::table('abouts')->Where('id',$request->id)->update(
                [
                    "title" => $request->title,
                    "content" => $request->content,
                   
                ]
            );
        }





        if ($abouts)
        {
            return back()->with('success','Xəbər yeniləndi');
        }
        return back()->with('error','Xəbər yeniləndi');
    }


}
