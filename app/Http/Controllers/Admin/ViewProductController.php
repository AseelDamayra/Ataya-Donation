<?php

namespace App\Http\Controllers\Admin;

use App\Models\View_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewProductController extends Controller
{
    public function viewProduct(){
        $data['products']=View_product::get();
        return view('admin.product.tableproduct')->with($data);
    }

    public function Acceptp(View_product $Accproduct){
        $Accproduct->update([
            'status'=>! $Accproduct->status
         ]);
         return back();
}

public function deletep(View_product $product,Request $request){
    try{
        $isDeleted=$product->delete();
        $msg="تم الحذف بنجاح";
    }
    catch(Exception $e){
        $msg= "لم تتم عملية الحذف بنجاح حاول مرة اخرى";
    }
       
        $request->session()->flash('success',$msg);
        return back();
    } 
}
