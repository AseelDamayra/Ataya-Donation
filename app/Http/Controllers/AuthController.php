<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function getRegisterForm(){
     
        $data['roles']=Role::get();
        return view('auth.register')->with($data);
    }

    public function register(Request $request){
        $data=$request->validate([
             'name'=>'required|string|max:255',
             'email'=>'required|email|max:255',
             'password'=>'required|string|min:5|max:20',
             'mobile'=>'required',
             'address'=>'required|string|max:255',
             'role_id' => 'required'
         ]);
         $data['password']=Hash::make($data['password']);
         $role=$request->role_id;
         $email=$request->email;
       $checkUser=User::select('email','role_id')
       ->where('role_id',$role)
       ->where('email',$email)
       ->count();
      
       if(!$checkUser == 0){
        Session::flash('danger', 'البريد الالكتروني مستخدم مسبقا');
        return back();
       }else{

            $user=User::create($data);
          $user->roles()->attach($role); 

        //   event(new Registered($user));
          return redirect(url('login'));
      }
     
     }
     
     public function getloginForm(){
       
        $data['roles']=Role::get();
       return view('auth.login')->with($data);
     }

     public function login(Request $request){
        $data=$request->validate([ 
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:20',
            'role_id' => 'required',
         ]);
        
         $islogin=Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role_id'=>$request->role_id]);
          
           
        if($islogin){
            return redirect(url('/'));
        }
        return back();
   }

        
     

     public function logout(Request $request){


        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        Session::flush();
        $request->session()->regenerate();
        Session::flash('success', 'تم تسجيل الخروج بنجاح');
        return redirect('/');
    }


}
