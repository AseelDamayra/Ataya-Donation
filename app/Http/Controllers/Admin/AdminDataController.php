<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin_data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminDataController extends Controller
{
    public function adminData(){
        return view('admin.admindata.admindata');
    }

    public function send(Request $request){
        $validator=Validator::make($request->all(),[
          'name'=>'required|string|max:255',
          'mobile'=>'required',
          'email'=>'required',
          'facebook'=>'nullable',
          'twitter'=>'nullable',
          'instagram'=>'nullable',
          'img' =>'required|image|max:2048', 
        ]);

       $Image=$request->input() ;

        if($file = $request->hasFile('img')) {
           $file = $request->file('img') ;
           $fileName = $file->getClientOriginalName() ;
           $destinationPath = public_path().'/images/' ;
           $file->move($destinationPath,$fileName);
           $newImage = $fileName ;
       }
      
        Admin_data::create([
           'name'=>$request->name,
           'mobile'=>$request->mobile,
           'email'=>$request->email,
           'facebook'=>$request->facebook,
           'twitter'=>$request->twitter,
           'instagram'=>$request->instagram,
           'image'=>$newImage,
          
        ]);
       
        $request->session()->flash('success','تمت العملية بنجاح');
        return back();
    }

    public function admindataTable(){
        $data['admins']=Admin_data::orderBy('id','desc')->paginate(4);
        return view('admin.admindata.tableAdmindata')->with($data);
    }

    public function deleteadmin(Admin_data $adminD,Request $request){
        try{
            $isDeleted=$adminD->delete();
            $msg="تم الحذف بنجاح";
        }
        catch(Exception $e){
            $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
        }
           
            $request->session()->flash('success',$msg);
            return back();
        } 

        public function updateadmin(Request $request){

            $request->validate([
                'id'=>'required|exists:admin_datas,id',
               'name'=>'required|string|max:50',
               'email'=>'required',
               'mobile'=>'required',
               'facebook'=>'nullable',
               'twitter'=>'nullable',
               'instagram'=>'nullable',
            ]);
    
            Admin_data::FindOrFail($request->id)->update([
             
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram,
             
            ]);
            $request->session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
}
