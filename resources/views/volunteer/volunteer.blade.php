
@extends('layout')
@section('title') التطوع @endsection
@section('main')
    
<section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
         <div class="image-blogs d-flex justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-blogsFont">تطوع الان</h2>
         </div>
    </section>

    @include('inc.error')

        @auth
 <section class="donateForm">
     <div class="container backgroung-item my-5">
       
        <div class="row">
           
            <div class="col-sm-9 text-right m-auto">
              <div class="tab-content" >
                <h2 class="text-center mt-5">معلومات المتطوع</h2>
                <div class="tab-pane active" id="home">
                @include('inc.message')
                      <form class="form" action="{{url('volunteer/send')}}" method="post" id="registrationForm">
                      @csrf    
                      <div class="form-group">
                     
                              <div class="col-xs-6 ">
                                  <label for="first_name "><h4>الاسم المتطوع</h4></label>
                                  <input type="text" class="form-control" name="name" value="{{$user->name}}" id="first_name" placeholder="ادخل اسمك الثلاثي" >
                              </div>
                          </div>         
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>الهاتف المحمول</h4></label>
                                  <input type="text" class="form-control" name="mobile"  value="{{$user->mobile}}" id="mobile" placeholder="ادخل رقم الهاتف المحمول">
                              </div>
                          </div>
                        
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="location"><h4>مدينة التطوع</h4></label>
                                  <input type="text" class="form-control" name="address" value="{{$user->address}}" id="location" placeholder="ادخل عنوانك(موقعك)" >
                              </div>
                          </div>
                          <div class="form-group pb-3">
                              
                              <div class="col-xs-6">
                                  <label for="donateName"><h4> نوع التطوع</h4></label>
                                  <input type="text" class="form-control"  name="donateName" id="donateName" placeholder="ادخل نوع التطوع" >
                            
                                   </div>
                          </div>
                         
                    
                          <div class="form-group">
                            <div class="col-xs-12">
                                 <br>
                                   <button class="btn btn-lg mainbg-color text-white hoverbuttonUniqe" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> ارسال</button>
                                  
                             </div>
                       </div>
                    
                      </form>  
                  
                 </div><!--/tab-pane-->
                 
                </div>
         </div>
                </div>
                </div>
             

</section>
        @endauth


@endsection
