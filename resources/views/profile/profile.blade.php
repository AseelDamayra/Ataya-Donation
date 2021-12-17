@extends('layout')
@section('title') الملف الشخصي @endsection
@section('main')
    
<section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
         <div class="image-blogs d-flex justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-blogsFont">{{session('name')}}الصفحة الشخصية</h2>
         </div>
    </section>

    <div class="container my-5">
       
       
        <div class="row">
             <div class="col-sm-3"><!--left col-->
                  
       
            <div>
              <ul class="list-group mb-5">
                <li class="list-group-item text-right">الاحداث المتبرع لها</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>المنح الدراسية</strong></span>: {{$countStudent}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>المشاريع الصغيرة</strong></span>: {{$countSmallP}} </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>التبرع بالمنتجات</strong></span>: {{$countVProduct}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong> التطوعات</strong></span>: {{$countVulanteer}}</li>
            </ul> 
            </div>       
            </div><!--/col-3-->
            <div class="col-sm-9 text-right">
                  
              <div class="tab-content">
                <div class="tab-pane active" id="home">

                   @include('inc.message')
                   <form method="post" action="{{url('profile/update')}}" class="mb-5">
                   @csrf
                          <div class="form-group">
                          <!-- <div class="col-xs-3">
                                
                                  <input type="hidden"  value="{{$profile->id}}"  >
                              </div> -->

                              <div class="col-xs-3">
                                 <label for="first_name "><h4>الاسم الكامل</h4></label>
                                  <input type="text" class="form-control" name="name" id="first_name" value="{{$profile->name}}"  >
                              </div>
                          </div>

                          <div class="form-group">
                              
                            <div class="col-xs-6">
                                <label for="email"><h4>البريد الالكتروني</h4></label>
                                <input type="email" class="form-control" name="email" id="email" value="{{$profile->email}}" >
                            </div>
                        </div>
              
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>الهاتف المحمول</h4></label>
                                  <input type="text" class="form-control" name="mobile" id="mobile" value="{{$profile->mobile}}">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="location"><h4>العنوان</h4></label>
                                  <input type="text" class="form-control" id="location" name="address"  value="{{$profile->address}}">
                              </div>
                          </div> 
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                      <button type="submit" class="btn btn-lg mainbg-color text-white hoverbuttonUniqe data-btn" >
                                     حفظ التعديلات <i class="fas fa-edit"></i></button>

                                    
                           
                                </div>
                          </div>
                </form>


                          <!-- <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4> كلمة السر الحالية</h4></label>
                                  <input type="password" class="form-control" name="password" id="password" value="{{$profile->password}}">
                              </div>
                          </div>
                          -->
                    <div class="tab-pane" id="change_password">
                        <form  action="{{url('profile/updatePass')}}" method="POST" >
                        @csrf
                          <div class="form-group ">
                            <label for="inputName" ><h4>كلمة السر القديمة</h4></label>
                            <div class="col-xs-12">
                              <input type="password" class="form-control"   name="oldpassword">
                             </div>
                          </div>
                          <div class="form-group ">
                            <label for="inputName2" ><h4>كلمة السر الجديدة</h4></label>
                            <div class="col-xs-12">
                              <input type="password" class="form-control"  name="newpassword">
                             </div>
                          </div>
                          <div class="form-group ">
                            <label for="inputName2" ><h4>تأكيد كلمة السر الجديدة</h4></label>
                            <div class="col-xs-12">
                              <input type="password" class="form-control"  name="cnewpassword">
                               </div>
                          </div>
                          <div class="form-group ">
                             <div class="col-xs-12">
                                    <br>
                                      <button  type="submit" class="btn btn-lg mainbg-color text-white hoverbuttonUniqe data-btn" >
                                    تعديل كلمة السر <i class="fas fa-edit"></i></button>

                                    
                           
                                </div>
                          </div>
                        </form>
                    </div>
                        
                  
                       
                    </div>
                  
                     
                
                 </div><!--/tab-pane-->
                 
                </div>
                </div>
                </div>
               
               
                


   
@endsection


