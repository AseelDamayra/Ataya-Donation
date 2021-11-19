<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use App\Models\Admin_data;
use App\Models\Studentship;
use App\Models\View_product;
use Illuminate\Http\Request;
use App\Models\Small_project;
use Illuminate\Support\Facades\Auth;
use Session;

class CausesController extends Controller
{
    public function viewproduct(){
        $data['admin']=Admin_data::get();
        $data['viewPro']=View_product::where('status',1)->orderBy('id','desc')->paginate(6);
        return view('causes.viewproduct')->with($data);
    }

    public function studentship(){
        $data['admin']=Admin_data::get();
        $data['student']=Studentship::where('status',1)->orderBy('id','desc')->paginate(6);
        return view('causes.studentship')->with($data);
    }

    public function smallproject(){
        $data['admin']=Admin_data::get();
        $data['smallp']=Small_project::where('status',1)->orderBy('id','desc')->paginate(6);
        $data['small']=Small_project::first();
        $data['count']=$data['small']->user()->sum('money');
       
        return view('causes.smallproject')->with($data);
    }

    public function emergency(){
        $data['admin']=Admin_data::get();
        $data['em']=Emergency::where('status',1)->orderBy('id','desc')->paginate(6);
        return view('causes.emergeny')->with($data);
    }

    public function viewproductDetails($id){

        $data['admin']=Admin_data::get();
        $data['viewPro']=View_product::findOrFail($id);
        return view('causes.viewproduct-details')->with($data);
    }

    public function viewproductRequest(Request $request,$id){
      $user=Auth::user();
      $product=View_product::findOrFail($id);
      
      $countuser = $product->user()->count();
    if($countuser > 0){
        Session::flash('danger', 'تم طلب المنتج مسبقا');
        return back();
    }else{
        
         $user->viewproduct()->attach($id);
      Session::flash('success', 'تم طلب المنتج بنجاح');
     return back();
     }
     
    }

    public function studentshipDetails($id){

        $data['admin']=Admin_data::get();
        $data['student']=Studentship::findOrFail($id);
        $data['count']=$data['student']->user()->sum('money');
         $money=Studentship::where('id',$id)
         ->where('money',$data['count'])
         ->count();
            
       
        if($money ==1 ){
            Session::flash('success', 'تم جمع المبلغ بالكامل');
           
        }
      
        return view('causes.studentship-details')->with($data);
    }
 
    public function smallprojectDetails($id){

        $data['admin']=Admin_data::get();
        $data['smallp']=Small_project::findOrFail($id);
        $data['count']=$data['smallp']->user()->sum('money');
         $money=Small_project::where('id',$id)
         ->where('money',$data['count'])
         ->count();
            
       
        if($money ==1 ){
            Session::flash('success', 'تم جمع المبلغ بالكامل');
           
        }
      
        
              return view('causes.smallproject-details')->with($data);

        
    }

    public function emergencyDetails($id){

        $data['admin']=Admin_data::get();
        $data['em']=Emergency::findOrFail($id);
   
        return view('causes.emergency-details')->with($data);
    }

    
}
