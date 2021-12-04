<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blog(){
        return view("admin.blog.index");
    }

    public function send(Request $request){
        $validator=Validator::make($request->all(),[
          'title'=>'required|string|max:255',
          'topic'=>'required',
          
        ]);

        Blog::create([
           'title'=>$request->title,
           'topic'=>$request->topic,
        ]);
       
        $request->session()->flash('success','تمت العملية بنجاح');
        return back();
    }

    public function Tableshow(){

        $data['blogs']=Blog::get();
        return view('admin.blog.tableBlog')->with($data);
    }

    public function deleteBlog(Blog $blog,Request $request){
        try{
            $isDeleted=$blog->delete();
            $msg="تم حذف المقال بنجاح";
        }
        catch(Exception $e){
            $msg= "لم يتم حذف المقال حاول مرة اخرى";
        }
           
            $request->session()->flash('success',$msg);
            return back();
        } 
}
