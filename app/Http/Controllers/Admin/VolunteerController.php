<?php

namespace App\Http\Controllers\Admin;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteerController extends Controller
{
    public function volunteer(){
        $data['volunteers']=Volunteer::get();
        return view('admin.volunteer.tablevolunteer')->with($data);
    }

    public function Acceptv(Volunteer $Accvolunteer){
        $Accvolunteer->update([
            'status'=>! $Accvolunteer->status
         ]);
         return back();
}

public function deletev(Volunteer $volunteer,Request $request){
    try{
        $isDeleted=$volunteer->delete();
        $msg="تم الحذف بنجاح";
    }
    catch(Exception $e){
        $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
    }
       
        $request->session()->flash('success',$msg);
        return back();
    } 
}
