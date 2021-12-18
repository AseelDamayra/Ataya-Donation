<?php

namespace App\Http\Controllers\Admin;

use App\Models\Compose;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ComposeController extends Controller
{
    public function inbox(){
        $data['inboxes']=Compose::where('status','1')->orderBy('id','desc')->paginate(4);
        return view('admin.compose.inbox')->with($data);
    }

    public function Deleteinbox($id,Request $request){

     
        $delete = Compose::where('id',$id)
              ->update(['status' => '3']);
              $request->session()->flash('success','تمت العملية بنجاح');
        return back();   
}

    public function message(){
        return view('admin.compose.newMsg');
    }

    public function sendMsg(Request $request){
        $validator=Validator::make($request->all(),[
          'sender'=>'required|string|max:255',
          'subject'=>'nullable',
          'contact'=>'required',
         'email'=>'required',
        ]);

        $s=$request->input('status');
       Compose::create([
           'sender'=>$request->sender,
           'subject'=>$request->subject,
           'contact'=>$request->contact,
           'email'=>$request->email,
          'status'=>$s,
          
        ]);
       
        $request->session()->flash('success','تمت العملية بنجاح');
        return back();
    }

    public function recycle(){
        $data['recycle']=Compose::where('status','3')->orderBy('id','desc')->paginate(4);
        return view('admin.compose.recycle')->with($data);
    }

    public function Deleter(Compose $d,Request $request){
        try{
            $isDeleted=$d->delete();
            $msg="تم الحذف بنجاح";
        }
        catch(Exception $e){
            $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
        }
           
            $request->session()->flash('success',$msg);
            return back();
        } 

        public function sendmail(){
            $data['sendmail']=Compose::where('status','2')->orderBy('id','desc')->paginate(4);
            return view('admin.compose.sendmail')->with($data);
        }

}
