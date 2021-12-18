<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Small_project;
use App\Http\Controllers\Controller;

class SmallProjectController extends Controller
{
    public function smallproject(){
        $data['smallp']=Small_project::orderBy('id','desc')->paginate(4);
        return view('admin.smallproject.tableSmall')->with($data);
    }

    public function AcceptProject(Small_project $Accp){
        $Accp->update([
            'status'=>! $Accp->status
         ]);
         return back();
}

public function deleteproject(Small_project $smallp,Request $request){
    try{
        $isDeleted=$smallp->delete();
        $msg="تم الحذف بنجاح";
    }
    catch(Exception $e){
        $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
    }
       
        $request->session()->flash('success',$msg);
        return back();
    } 
}