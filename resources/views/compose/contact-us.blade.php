@extends('layout')
@section('title') اتصل بنا @endsection
@section('main')
    
    <section class="head-causes" id="head-causes">
        <div class="overlay-causes"></div>
         <div class="image-causes d-flex flex-column bd-highlight mb-3 justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-causesFont ">اتصل بنا</h2>
         </div>
    </section>
    
    <section class="contact-wrap section-bottom my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
              
                     <form id="contact-form" class="contact__form" method="post" action="{{url('contact_us/send')}}">
                     @csrf
                        <h3 class="text-md mb-5 text-right"> تواصل معنا من خلال تعبئة النموذج التالي </h3>
                        @include('inc.message')
                      <div class="row text-right">
                          <div class="col-lg-6">
                               <div class="form-group">
                                    <label>الإسم الكامل</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                          </div>
                          <div class="col-lg-6">
                               <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                          </div>
                          
                        
 
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label>الموضوع </label>
                                <input name="subject" type="text" class="form-control">
                            </div>
                      </div>
                      </div>

                        <div class="form-group mb-4 text-right">
                            <label>رسالتك</label>
                            <textarea name="message" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                        <button class="btn mainbg-color hoverbutton rounded" name="submit" type="submit">إرسال الرسالة</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection