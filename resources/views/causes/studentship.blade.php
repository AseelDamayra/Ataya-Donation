@extends('layout')
@section('title')الحالات / المنح الدراسية@endsection
@section('main')
    <section class="head-causes" id="head-causes">
        <div class="overlay-causes"></div>
         <div class="image-causes d-flex justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-causesFont">اخر الاحداث التي قمنا بها</h2>
         </div>
    </section>

    <section class="causes py-5" id="causes">
        <div class="content d-flex justify-content-center text-center">
            <div class="inside-content">
            <h2> حالات التبرع للمنح الدراسية</h2>
           
        </div>
       </div>
  
       <div class="container text-center">
        <div class="row mx-5 my-5">   
            
        @foreach($student as $s)
        <div class="col-md-4  mb-5">
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
                
             
                  </div>
                  
                </div>
         

            
            {{$student->links('inc.paginator')}}

           
    </section>

     
@endsection