<?php

namespace App\Http\Controllers\Admin;

use App\Models\Emergency;
use App\Models\Volunteer;
use App\Models\Admin_data;
use App\Models\Studentship;
use Illuminate\Http\Request;
use App\Models\Small_project;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    

     public function index(){

         $data['smallPAcc']=Small_project::where('status','1')->count();
         $data['smallPNAcc']=Small_project::where('status','0')->count();

         $data['studentAcc']=Studentship::where('status','1')->count();
         $data['studentNAcc']=Studentship::where('status','0')->count();
        
         $data['voluneerAcc']=Volunteer::where('status','1')->count();
         $data['voluneerNAcc']=Volunteer::where('status','0')->count();

         $data['emergencyAcc']=Emergency::where('status','1')->count();
         $data['emergencyNAcc']=Emergency::where('status','0')->count();

          return view("admin.home.index")->with($data);
     }
}
