<?php

namespace App\Http\Controllers\Admin;

use App\Models\Studentship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentshipController extends Controller
{
    public function studentship(){
        $data['students']=Studentship::get();
        return view('admin.studentship.tablestudent')->with($data);
    }

    public function Acceptstudent(Studentship $Accp){
        $Accp->update([
            'status'=>! $Accp->status
         ]);
         return back();
}

public function deletestudent(Studentship $sudent,Request $request){
    try{
        $isDeleted=$sudent->delete();
        $msg="تم الحذف بنجاح";
    }
    catch(Exception $e){
        $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
    }
       
        $request->session()->flash('success',$msg);
        return back();
    } 
}
