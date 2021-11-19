<?php

namespace App\Http\Controllers;



use App\Models\Blog;
use App\Models\Emergency;

use App\Models\Admin_data;
use App\Models\Studentship;
use App\Models\View_product;
use Illuminate\Http\Request;
use App\Models\Small_project;

class HomeController extends Controller
{
   
    public function index(){

        //احدث 3 مقالات 
        $data['blogs']=Blog::select('id','title','topic')->orderBy('id','desc')->limit(3)->get();
        //بيانات الادمن في footer
        $data['admin']=Admin_data::get();

        //progress bar
        //small-project
        $total=Small_project::count();  
       $Accept=Small_project::select('id','status')->where('status','=','1')->count();
       if($total == 0){
        $data['percSmallProject']=0;
       }else{
        $data['percSmallProject']=number_format((float)(($Accept/$total)*100)) ;
       }
        //studentship
        $total=Studentship::count();  
        $Accept=Studentship::select('id','status')->where('status','=','1')->count();
        if($total == 0){
            $data['percStudentship']=0;
        }else{
         $data['percStudentship']=number_format((float)(($Accept/$total)*100)) ;
        }
         //emergency
         $total=Emergency::count();  
         $Accept=Emergency::select('id','status')->where('status','=','1')->count();
         if($total == 0){
            $data['percEmergency']=0;
        }else{
          $data['percEmergency']=number_format((float)(($Accept/$total)*100)) ;
        }
          //view product
          $total=View_product::count();  
          $Accept=View_product::select('id','status')->where('status','=','1')->count();
          if($total == 0){
            $data['percView_product']=0;
        }else{
           $data['percView_product']=number_format((float)(($Accept/$total)*100)) ;
        }
 
        //بيانات اخر الاحداث
        $data['statusEm']=Emergency::where('status',1)->orderBy('id','desc')->limit(1)->get();
        $data['statusPro']=Small_project::where('status',1)->orderBy('id','desc')->limit(1)->get();
        $data['statusStu']=Studentship::where('status',1)->orderBy('id','desc')->limit(1)->get();
        $data['statusVPrp']=View_product::where('status',1)->orderBy('id','desc')->limit(1)->get();

        
  
        return view('home.index')->with($data);
    }

    public function error(){
        $data['admin']=Admin_data::get();
        return view('error404')->with($data);
    }

    public function help()
    {
        $data['admin']=Admin_data::get();
        return view('window.help')->with($data);
    }
  
}
