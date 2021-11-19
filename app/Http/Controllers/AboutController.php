<?php

namespace App\Http\Controllers;


use App\Models\Admin_data;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        
        $data['admin']=Admin_data::get();
        return view('about.about')->with($data);

    }
}
