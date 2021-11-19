<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Models\Admin_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    public function volunteer(){
        $data['admin']=Admin_data::get();
        $data['user']=Auth::user();       
        return view('volunteer.volunteer')->with($data);
    }

    public function send(Request $request){
        $validator=Validator::make($request->all(),[
          'name'=>'required|string|max:255',
          'mobile'=>'required',
          'address'=>'required|string|max:255',
          'donateName'=>'required|string|max:255',
          
        ]);

        if($validator->fails()){
            $errors=$validator->errors();
            return redirect(url('volunteer'))->withErrors($errors);
        }
        
        Volunteer::create([
           'name'=>$request->name,
           'type'=>$request->donateName,
           'City'=>$request->address,
           'mobile'=>$request->mobile,
           'user_id'=>$request->user()->id,
        ]);
       
        $request->session()->flash('success','تمت العملية بنجاح');
        return back();
    }
}
