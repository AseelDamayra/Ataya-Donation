<?php

namespace App\Http\Controllers;

use App\Models\Compose;
use App\Models\Admin_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComposeController extends Controller
{
    public function compose(){
        $data['admin']=Admin_data::get();
        return view('compose.contact-us')->with($data);

    }

    public function send(Request $request){
        $validator=Validator::make($request->all(),[
          'name'=>'required|string|max:255',
          'email'=>'required|email|max:255',
          'subject'=>'nullable',
          'message'=>'required|string',
        ]);

        if($validator->fails()){
            $errors=$validator->errors();
            return redirect(url('contact_us'))->withErrors($errors);
        }
        
       $s=$request->input('status');
        Compose::create([
           'sender'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'contact'=>$request->message,
           'status'=>$s,
        ]);
       
        $request->session()->flash('success','تم ارسال الرسالة بنجاح');
        return back();
    }

}
