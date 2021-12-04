<?php

namespace App\Http\Controllers\Admin;

use App\Models\Emergency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergencyController extends Controller
{
    public function Emergency(){
        $data['emergency']=Emergency::get();
        return view('admin.emergency.tableEm')->with($data);
    }

    public function Acceptem(Emergency $Accem){
        $Accem->update([
            'status'=>! $Accem->status
         ]);
         return back();
}

public function deleteem(Emergency $em,Request $request){
    try{
        $isDeleted=$em->delete();
        $msg="تم الحذف بنجاح";
    }
    catch(Exception $e){
        $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
    }
       
        $request->session()->flash('success',$msg);
        return back();
    } 
}
