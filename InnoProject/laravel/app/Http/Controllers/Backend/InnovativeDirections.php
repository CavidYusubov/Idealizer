<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InnovativeDirections as InnovativeDirectionsModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class InnovativeDirections extends Controller
{


	public function index(){
        $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
        $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();
      
    $data['InnovativeDirections']= InnovativeDirectionsModel::all()->SortBy('id');
    return view('backend.InnovativeDirect.index',compact('data'),  ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}



public function create(){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	   return view('backend.InnovativeDirect.create', ['notifications' =>$notification,'count_n'=>count($count_notify)]);
}


public function edit($id){
    $count_notify=DB::table('notifications')->where([['user_id',\Auth::guard('web')->user()->id],['read',0]])->get();
    $notification=DB::table('notifications')->where('user_id',\Auth::guard('web')->user()->id)->orderBy('id','desc')->limit(10)->get();

	 $InnovativeDirect = InnovativeDirectionsModel::where('id', $id)->first();
      return view('backend.InnovativeDirect.edit',['notifications' =>$notification,'count_n'=>count($count_notify)])->with('InnovativeDirect', $InnovativeDirect);
	
}



public function store(Request $request){
    $request->validate([
        
            'title' => 'required|Max:255'

        ]);
  $InnovativeDirect = InnovativeDirectionsModel::insert(
            [
                "title" => $request->title,
                "description" => $request->description,
               
            ]
        );

        if ($InnovativeDirect) {
            return redirect(route('InnovDirect.Index'))->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


      public function update(Request $request, $id)
    {
    	 $InnovDirect = InnovativeDirectionsModel::Where('id', $id)->update(
                    [
                        "title" => $request->title,
                        "description" => $request->description,
                        
                    ]
                );

   if ($InnovDirect) {
            return back()->with('success', 'Uğurlu');
        }
        return back()->with('error', 'Uğursuz');
    }


     public function destroy($id)
    {
        $user = InnovativeDirectionsModel::find(intval($id));
        if ($user->delete()) {
         return back()->with('success', 'Uğurlu');
        }
    return back()->with('error', 'Uğursuz');
    }

    

}


