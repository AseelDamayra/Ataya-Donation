<?php

namespace App\Http\Controllers;

use Session;
use Exception;
use App\Models\User;
use App\Models\Payment;
use App\Models\Admin_data;
use App\Models\Studentship;
use Illuminate\Http\Request;
use App\Models\Small_project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DonateController extends Controller
{
  

    public function smallproject($id){
     
        $data['admin']=Admin_data::get();
        $data['project']=Small_project::findOrFail($id);
        $data['types']=Payment::get();
        $data['user']=Auth::user();

         return view('donarpage.projectD')->with($data);
    }

    public function smallprojectDonate(Request $request,$id){
        $validator=Validator::make($request->all(),[
            'payment'=>'required',
            'money'=>'required',
            'Allname'=>'nullable',
            'NumberId'=>'nullable',
            'user_id'=>'required', 
            'date'=>'nullable',
             'CVV'=>'nullable',
             'phone'=>'nullable',
             'password'=>'nullable',
          ]);

         $project=Small_project::findOrFail($id);
         $checkid=$request->NumberId;
         $checkmoney=$request->money;
         $CVV=$request->CVV;

        $count=$project->user()->sum('money');
        $money=Small_project::where('id',$id)
         ->where('money',$count)
         ->count();
       
         $m=Small_project::where('id',$id)
                    ->where('money','<',$checkmoney)
                    ->count();
    
      

     if($m==1){
            Session::flash('danger', 'المبلغ المراد إرساله اكبر من المبلغ الهدف');
            return back();
    }

    if($money == 1){
        Session::flash('success', 'تم جمع المبلغ بالكامل');
        return back();
    }

   else if($request->payment_id == 1){
  if(strlen($CVV) >3 || strlen($CVV) <3 ){
            Session::flash('danger', 'يجب ان يكون الرقم التعريفي مكون من 3 خانات');
            return back();
        }
        if(strlen($checkid) >16 || strlen($checkid) <16 ){
            Session::flash('danger', 'يجب ان يكون رقم الهوية مكون من 16 خانات');
            return back();
        }
    }
   
      
        else{
               $data=[
                   'payment_id'=>$request->payment,
                   'money'=>$request->money,
                    'Allname'=>$request->Allname,
                    'NumberId'=> $request->NumberId,
                    'user_id'=>$request->user_id,
                    'CVV'=>$request->CVV,
                    'dateOfEnd'=>$request->date,
                    'phone'=>$request->phone,
                    'password'=>Hash::make($request->password),
                ];  
              
                       $project->user()->attach($id,$data); 
                       Session::flash('success', 'تم ارسال المبلغ المطلوب بنجاح');

                
       

      
              return back();
        }
             
    }

    public function studentship($id){
     
        $data['admin']=Admin_data::get();
        $data['student']=Studentship::findOrFail($id);
        $data['types']=Payment::get();
        $data['user']=Auth::user();

         return view('donarpage.studentD')->with($data);
    }

    public function studentshipDonate(Request $request,$id){
    
        $validator=Validator::make($request->all(),[
            'payment'=>'required',
            'money'=>'required',
            'Allname'=>'required|string|max:255',
            'Allname'=>'nullable',
            'NumberId'=>'nullable',
            'user_id'=>'required', 
            'date'=>'nullable',
             'CVV'=>'nullable',
             'phone'=>'nullable',
             'password'=>'nullable',
          ]);
      
         $student=Studentship::findOrFail($id);
         $checkid=$request->NumberId;
         $checkmoney=$request->money;
        $CVV=$request->CVV;

        $count=$student->user()->sum('money');
        $money=Studentship::where('id',$id)
         ->where('money',$count)
         ->count();
       
         $m=Studentship::where('id',$id)
                    ->where('money','<',$checkmoney)
                    ->count();

     if($m==1){
         Session::flash('danger', 'المبلغ المراد إرساله اكبر من المبلغ الهدف');
        return back();
    }
    if($money == 1){
        Session::flash('danger', 'تم جمع المبلغ بالكامل');
        return back();
    }
      else if($request->payment_id == 1){
        if(strlen($checkid) >16 || strlen($checkid) <16 ){
            Session::flash('danger', 'يجب ان يكون رقم الهوية مكون من 16 خانات');
            return back();
        }
        if(strlen($CVV) >3 || strlen($CVV) <3 ){
            Session::flash('danger', 'يجب ان يكون الرقم التعريفي مكون من 3 خانات');
            return back();
        }

    }
        else{
          
               $data=[
                   'payment_id'=>$request->payment,
                   'money'=>$request->money,
                    'Allname'=>$request->Allname,
                    'NumberId'=> $request->NumberId,
                    'user_id'=>$request->user_id,
                    'CVV'=>$request->CVV,
                    'dateOfEnd'=>$request->date,
                    'phone'=>$request->phone,
                    'password'=>Hash::make($request->password),
                ];  
           
             
                       $student->user()->attach($id,$data); 
                       Session::flash('success', 'تم ارسال المبلغ المطلوب بنجاح');

               
       

            }
          
              return back();
            }
        
    
        
     
    
}
