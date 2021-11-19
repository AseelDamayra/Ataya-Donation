<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use App\Models\Admin_data;
use App\Models\Studentship;
use App\Models\View_product;
use Illuminate\Http\Request;
use App\Models\Small_project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class SeekerController extends Controller
{
    public function seeker(){

        $data['admin']=Admin_data::get();
        $data['user']=Auth::user();
       
         return view('seekerpage.seekerp')->with($data);
       
    }

    public function send(Request $request){

        $validator=Validator::make($request->all(),[
          'name'=>'required|string|max:255',
          'mobile'=>'required',
          'address'=>'required|string|max:255',
        ]);

      

        if($validator->fails()){
            $errors=$validator->errors();
            return redirect(url('seeker'))->withErrors($errors);
        }
        
     
        if ( isset($_POST['donateType']) && $_POST['donateType'] === 'bloodDonation'){
            Emergency::create([
                   'name'=>$request->name,
                   'mobile'=>$request->mobile,
                   'City'=>$request->address,
                   'user_id'=>$request->user()->id,
                   'hospital'=>$request->hospital,
                   'type'=>$request->type,
                   'numberOfUnit'=>$request->numberOfUnit,
                ]);
            }
         else if ( isset($_POST['donateType']) && $_POST['donateType'] === 'studentShipDonation'){
                Studentship::create([
                       'name'=>$request->name,
                       'mobile'=>$request->mobile,
                       'City'=>$request->address,
                       'user_id'=>$request->user()->id,
                       'major'=>$request->major,
                       'University'=>$request->University, 
                       'money'=>$request->m,
                    ]);
                }
        else if ( isset($_POST['donateType']) && $_POST['donateType'] === 'productDonation'){
                    View_product::create([
                           'name'=>$request->name,
                           'mobile'=>$request->mobile,
                           'address'=>$request->address,
                           'user_id'=>$request->user()->id,
                           'productName'=>$request->productName,
                           'topic'=>$request->topic,
                          
                        ]);
                    }
    else if ( isset($_POST['donateType']) && $_POST['donateType'] === 'smallprojects'){
                       Small_project::create([
                               'name'=>$request->name,
                               'mobile'=>$request->mobile,
                               'address'=>$request->address,
                               'user_id'=>$request->user()->id,
                               'title'=>$request->title,
                               'money'=>$request->money,
                              
                            ]);
                        }
        
                    
        $request->session()->flash('success','تمت العملية بنجاح');
        return back();
                   
    }
}
