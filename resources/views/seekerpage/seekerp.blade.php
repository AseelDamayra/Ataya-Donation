@extends('layout')
@section('title') استفد الان @endsection
@section('main')

<section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
         <div class="image-blogs d-flex justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-blogsFont">استفد الان</h2>
         </div>
</section>

@include('inc.error')

        
@auth

<section class="donateForm">
    <div class="container backgroung-item my-5">
       
        <div class="row">
           
            <div class="col-sm-9 text-right m-auto">
              <div class="tab-content" >
                <h2 class="text-center mt-5">معلومات المستفيد</h2>
                <div class="tab-pane active" id="home">
                @include('inc.message')
                      <form class="form" action="{{url('seeker/send')}}" method="post" id="registrationForm">
                          @csrf
                          <div class="form-group">
                              
                              <div class="col-xs-6 ">
                                  <label for="first_name "><h4>الاسم الكامل</h4></label>
                                  <input type="text" class="form-control" name="name" value="{{$user->name}}" id="first_name" placeholder="ادخل اسمك الثلاثي" title="ادخل اسمك الكامل">
                              </div>
                          </div>         
                          <div class="form-group">
                              <div class="col-xs-6">
                                 <label for="mobile"><h4>الهاتف المحمول</h4></label>
                                  <input type="text" class="form-control" name="mobile"  value="{{$user->mobile}}" id="mobile" placeholder="ادخل رقم الهاتف المحمول" title="ادخل رقم الهاتف المحمول ان وجد">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="location"><h4>العنوان</h4></label>
                                  <input type="text" class="form-control" name="address" id="location" value="{{$user->address}}"  placeholder="ادخل عنوانك(موقعك)" title="ادخل عنوانك/عنوان منزلك الحالي(موقعك)">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="inputState"><h4> نوع التبرع</h4></label>
                                  <select id="inputState" class="form-control donatetype" name="donateType">
                                    <option disabled selected=""> نوع التبرع </option>
                                    <option value="bloodDonation" name="bloodDonation">التبرع بالدم</option>
                                    <option value="studentShipDonation" name="studentShipDonation"> المنح الدراسية</option>
                                    <option value="productDonation" name="productDonation">التبرع بالمنتجات</option>
                                    <option value="smallprojects" name="smallprojects"> المشاريع الصغيرة</option>
                                  </select>
                                   </div>
                          </div>
                          <div class="form-group blood">
                               <div class="col-xs-6">
                                    
                                <label class="hospitalName"><h4>إسم المشفى</h4></label>
                                <div id="hospitalName">
                                  <input type="text" class="form-control" name="hospital" >
                                </div>
                                <div class="form-group">
                                  <label class="otherFeild"><h4>زمرة الدم</h4></label>
                                  <input type="text" class="form-control" name="type" >
                                  </div>
                                  <div class="form-group">
                                  <label class="otherFeild"><h4>عدد وحدات الدم</h4></label>
                                  <input type="text" class="form-control" name="numberOfUnit" >
                                  </div>
                                         </div>
                          </div>
                          <div class="form-group studentShip">
                            <div class="col-xs-6">
                                 
                                <label class="universityName"><h4>اسم الجامعة</h4></label>
                                <div id="universityName">
                                  <input type="text" class="form-control" name="University">
                                </div>
                                <label class="Specialization"><h4>اسم التخصص</h4></label>
                                <div id="Specialization">
                                  <input type="text" class="form-control" name="major" >
                                </div>
                                <label class="requireAmount"><h4>المبلغ المطلوب</h4></label>
                            <div id="requireAmount">
                              <input type="text" class="form-control" name="m" >
                            </div>
                               
                                         </div>
                       </div>

                       <div class="form-group smallProject">
                        <div class="col-xs-6">
                             
                            <label class="projectName"><h4>اسم المشروع</h4></label>
                            <div id="projectName">
                              <input type="text" class="form-control" name="title">
                            </div>
                            <label class="requireAmount"><h4>المبلغ المطلوب</h4></label>
                            <div id="requireAmount">
                              <input type="text" class="form-control" name="money" >
                            </div>
                           
                                     </div>
                   </div>

                   <div class="form-group products">
                          <div class="col-xs-6">
                         
                        <label class="producttName"><h4>اسم المنتج</h4></label>
                        <div id="projectName">
                          <input type="text" class="form-control" name="productName">
                        </div>
                        <label class="requireAmount"><h4> تفاصيل المنتج</h4></label>
                        <div id="requireAmount">
                          <input type="text" class="form-control" name="topic">
                        </div>
                       
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