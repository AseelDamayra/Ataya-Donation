<?php

namespace App\Http\Controllers\Admin;

use App\Models\View_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewProductController extends Controller
{
    public function viewProduct(){
        $data['products']=View_product::where('reqStatus','0')->orderBy('id','desc')->paginate(4);
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

    public function viewProductReq(){
        $data['Reqproducts']=View_product::where('status','1')->where('reqStatus','1')->orderBy('id','desc')->paginate(4);
        return view('admin.product.requestp')->with($data);
    }

    public function productDeletereq($id,Request $request){


        $delete = View_product::where('id',$id)
        ->update(['status' => '2']);
        $request->session()->flash('success','تمت العملية بنجاح');
           
         
            return back();
        } 
  
}
