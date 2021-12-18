<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Compose;
use App\Models\Admin_data;
use App\Models\Studentship;
use Illuminate\Http\Request;
use App\Models\Small_project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{


    public function profile(){
      
         $data['admin']=Admin_data::get();
        $data['profile']=Auth::user();
      
      
       $data['countStudent']=$data['profile']->studentship()->count();
       $data['countSmallP']=$data['profile']->smallProject()->count();
       $data['countVProduct']=$data['profile']->viewproduct()->count();
       $data['countVulanteer']=$data['profile']->vulanteer_accepted()->count();
       $data['message']=Compose::select('sendtime','subject','contact')
       ->where('email','=',Auth::user()->email)
       ->where('sender','=',Auth::user()->name)
       ->where('status','=','2')
       ->orderBy('id','desc')->paginate(2);
       $data['Msgcount']=Compose::where('email','=',Auth::user()->email)
       ->where('sender','=',Auth::user()->name)
       ->where('status','=','2')
       ->count();
  
         return view('profile.profile' )->with($data);
    }

    public function sendUpdateInfo(Request $request){
        
        $validator = \Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'email'=> 'required|email|unique:users,email,'.Auth::user()->id,
            'mobile'=>'required',
            'address'=>'required|string|max:255',
        ]);

             $query = User::find(Auth::user()->id)->update([
                  'name'=>$request->name,
                  'email'=>$request->email,
                  'mobile'=>$request->mobile,
                  'address'=>$request->address,
             ]);

             $request->session()->flash('success','تمت عملية التعديل بنجاح');
        return back();
        }

        function sendUpdatepass(Request $request){
            //Validate form
            $validator = \Validator::make($request->all(),[
                'oldpassword'=>[
                    'required', function($attribute, $value, $fail){
                        if( !\Hash::check($value, Auth::user()->password) ){
                            return $fail(__('كلمة المرور الحالية خاطئة'));
                        }
                    },
                    'min:5',
                    'max:20'
                 ],
                 'newpassword'=>'required|min:5|max:20',
                 'cnewpassword'=>'required|same:newpassword'
             ]);
 
           
             $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);
 
             $request->session()->flash('success','تمت عملية التعديل بنجاح');
             return back();
        }

      
}
