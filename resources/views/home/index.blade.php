@extends('layout')
@section('title') الرئيسية @endsection
@section('main')

  
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
<!--    
        <ol class="carousel-indicators ">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner ">
          <div class="carousel-item  active ">
            <div class="center-button ">
            <div class="carousel-caption d-none d-md-block ">    
              <h5 class="desc-carousel ">كل امرئ في ظل صدقته حتى يقضى بين الناس</h5>                 
            </div>
                    <a href="{{url('smallproject')}}" class="btn  ml-3 hoverbutton mt-4" role="button" aria-pressed="true">تبرع لأحد المشاريع الصغيرة</a>
                
                     <button type="button" class="btn mainbg-color text-color hoverbutton mt-4" data-toggle="modal" data-target="#exampleModal">شاهد الان <i class="far fa-play-circle"></i> </button> 
                    <div class="modal fade hide" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">عزة النفس لدى المحتاجين</h5>
                            
                           </div>
                           <div class="modal-body">
                            <div class="video" >
                                <video src="assets/video/home video.mp4" width="450px" height="300px" controls ></video>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn mainbg-color space-close hoverbutton" data-dismiss="modal">اغلاق</button>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>  
                <img src="assets/images//header/first.jpg" class="d-block w-100 img-property" alt="...">
                <div class="overlay"></div>
          
          </div>
          <div class="carousel-item ">
            <div class="center-button"> 
            <div class="carousel-caption d-none d-md-block">
              <h5 class="desc-carousel">الصدقة كنز للمؤمن في الدنيا والاخرة</h5>      
            </div>    
                <a href="{{url('viewproduct')}}" class="btn  ml-3 hoverbutton mt-4" role="button" aria-pressed="true">اطلب منتجك</a>
                <!-- Button trigger modal -->
                <a href="{{url('volunteer')}}" class="btn  ml-3 hoverbutton mt-4" role="button" aria-pressed="true">انضم للمتطوعين</a>               
            </div>
            <img src="assets/images/header/second.jpg" class="d-block w-100 img-property" alt="...">
            <div class="overlay"></div>
          
          </div>
          <div class="carousel-item ">
            <div class="center-button unique-link ">   
            <div class="carousel-caption d-none d-md-block mb-3">
              <h5 class="desc-carousel ">كلما زادت الصدقة زاد الرزق</h5>                 
            </div> 
                <a href="{{url('studentship')}}" class="btn  ml-3 btn-lg hoverbuttonUniqe " role="button" aria-pressed="true">تبرع لاحد طلبة العلم</a>
            </div>
               
            <img src="assets/images/header/third.jpg" class="d-block w-100 img-property" alt="...">
            <div class="overlay"></div>
         
          </div>
         
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>


    <section class="causes py-5" id="causes">
        
        <div class="content d-flex justify-content-center text-center">
            <div class="inside-content">
            <h2>احدث الحالات</h2>
            <p class="lead">احدث الحالات التي تم التبرع لها</p>
            <p class="lead">نحن نقدم العديد من التبرعات   في شتى المجالات.</p>
        </div>
       </div>
  
       <div class="container text-center">
        <div class="row"> 
        @foreach($statusEm as $s)
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card py-4 border-warning backgroung-item" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center ">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title ">تبرع بالدم</h5>
                      <p>{{$s->name}} يحتاج {{$s->numberOfUnit}}  وحدة دم بشكل عاجل من فصيلة
                          {{$s->type}} في مستشفى {{$s->hospital}} مدينة {{$s->City}}
                           لمن لديه القدرة على التبرع التواصل مع اهل المريض على الرقم 
                           {{$s->mobile}} 
                      </p>
                      <a href="{{url("emergency/details/$s->id")}}" class="btn mainbg-color text-color border-white hoverbutton">المزيد من التفاصيل</a>
                    </div>           
                  </div>
            </div>
            @endforeach
            @foreach($statusPro as $s)
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card py-4 mainbg-color text-color border-secondary" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$s->title}}</h5>
                   
                      <p class="card-text ">  {{$s->name}}  يحتاج لمساعدة مالية لانشاء مشروعه الخاص وهو عبارة عن "{{$s->title}}"
                          في منطقة {{$s->address}} 
                          للمزيد من التفاصيل التواصل مع الرقم {{$s->mobile}}
                      </p>
                      <a href="{{url("smallproject/details/$s->id")}}" class="btn mainbg-color text-color border-white hoverbutton">المزيد من التفاصيل</a>
                    </div>
                  </div>
            </div>
             @endforeach
            @foreach($statusStu as $s)
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card py-4 backgroung-item border-warning" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center ">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title ">التبرع لمنحة دراسية</h5>
                   
                      <p class="card-text ">{{$s->name}} من مدينة  {{ $s->City}} طالب/ة في جامعة   {{$s->University}} تدرس/ يدرس تخصص {{$s->major}}
                          يحتاج/ تحتاج لمساعدة مالية لدفع الاقساط الجامعية تقدر ب{{$s->money}}دينار 

                      </p>
                      <a href="{{url("studentship/details/$s->id")}}" class="btn mainbg-color text-color hoverbutton">المزيد من التفاصيل</a>
                    </div>                 
                  </div>
            </div>
             @endforeach
            @foreach($statusVPrp as $s)
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card py-4 mainbg-color text-color border-secondary" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>         
                    <div class="card-body">
                      <h5 class="card-title ">التبرع ب {{$s->productName}}</h5>
                     
                      <p class="card-text "> {{$s->name}} من مدينة {{$s->address}} يتبرع ب {{$s->productName}} يتميز ب{{$s->topic}}
                          للمزيد من التفاصيل التواصل مع الرقم {{$s->mobile}}
                      </p>
                      <a href="{{url("viewproduct/details/$s->id")}}" class="btn mainbg-color text-color border-white hoverbutton">المزيد من التفاصيل</a>
                    </div>
                  </div>
            </div>
        @endforeach
            </div>
            </div>
            
    </section>
        
   
    <section class="progressed backgroung-item py-5 my-5" id="progressed">
        <div class="content d-flex justify-content-center text-center">
            <div class="inside-content mb-5">
            <h2>لنا اثر في حياتهم</h2>
        </div>
       </div>
       <div class="container skillbar">  
           <div class="row d-flex justify-content-center"> 
         <div class="content-progress col-md-8" >
             <div class="progress-details ">
                 <h3 class="name-progress text-right">المشاريع الصغيرة</h3>
                 <div class="progress bg-dark mb-4">
                     <div class="progress-per" per="{{$percSmallProject}}"></div>
                       <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
             </div>

             <div class="progress-details ">
                <h3 class="name-progress text-right">المنح الدراسية</h3>
                <div class="progress bg-dark mb-4">
                    <div class="progress-per" per="{{$percStudentship}}"></div>
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="progress-details ">
                <h3 class="name-progress text-right">التبرع بالدم</h3>
                <div class="progress bg-dark mb-4">
                    <div class="progress-per" per="{{$percEmergency}}"></div>
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="progress-details ">
                <h3 class="name-progress text-right">التبرع بالمنتجات</h3>
                <div class="progress bg-dark mb-4">
                    <div class="progress-per" per="{{$percView_product}}"></div>
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
         </div>
          
     </div>
    </div>

 </section> 

     <section class="blog py-5 mb-5" id="blog">
    <div class="content d-flex justify-content-center text-center">
        <div class="inside-content">
        <h2>احدث المقالات</h2>
        <p class="lead">اخر ثلاث حالات انسانية تركنا اثرا في حياتها</p>
    </div>
   </div>
<div class="container text-center">
   <div class="row mx-5">   
      @foreach($blogs as $blog)
       <div class="col-md-4">
           <div class="card py-4 border-warning backgroung-item" style="width: 18rem;">
               <div class="image-cases d-flex justify-content-center ">
                    <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle w-50" alt="ايادي عمال بناء">
               </div>
              
               <div class="card-body">
                 <h5 class="card-title">{{$blog->title}}</h5>
                 <h6>{{Carbon\Carbon::parse($blog->created_at)->toDateString()}}</h6>
                  <!-- <img src="{{asset('assets/images/blog/line.png')}}" alt=""> -->
                 <p class="card-text ">{{$blog->topic}}</p>
                 <a href="{{url("blog/details/$blog->id")}}" class="btn mainbg-color text-color hoverbutton">اقرء المزيد</a>
               </div>
             </div>
       </div>
       @endforeach
      
   </div>
   </div>



      </section>
    
   @endsection