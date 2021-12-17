<?php

namespace App\Http\Controllers\Admin;



use App\Models\Admin_data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;


class AuthController extends Controller
{

    
    public function getlogin()
    {
      return view('admin.auth.login');
    }
    
    public function login(Request $request)
    {
        $data=$request->validate([ 
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:20',
         ]);
        
         $password=$request->password ;
         $email=$request->email;

        //  $admin=Admin_data::get();
      
        if($password =='123456' && $email== 'Aseel@gmail.com'){
            return redirect(url('/dashboard'));
        }

        return back();
    }

    public function getlogout(Request $request){
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        Session::flush();
        $request->session()->regenerate();
        Session::flash('success', 'تم تسجيل الخروج بنجاح');
        return redirect('/loginAdmin');
    }
  
}
