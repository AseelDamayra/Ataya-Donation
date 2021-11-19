<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Admin_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    public function blog(){

        $data['admin']=Admin_data::get();
        $data['blogs']=Blog::orderBy('id','desc')->paginate(6);
       
        return view('blog.blog')->with($data);
    }

    public function details($id){

        $data['admin']=Admin_data::get();
        $data['blog']=Blog::findOrFail($id);
       $data['comment']=Comment::where('blog_id',$id)->get();
      
        return view('blog.blog-details')->with($data);
    }

    public function send(Request $request)
    {
      
    $validator=Validator::make($request->all(),[
              'blogId'=>'required|exists:blogs,id',
              'comments'=>'required',
            ]);
           
            Comment::create([
               'comment'=>$request->comments,
               'user_id'=>$request->user()->id,
               'blog_id'=>$request->blogId,
            ]);

            // $request->session()->flash('success','تمت العملية بنجاح');
             return back();
    }

}
