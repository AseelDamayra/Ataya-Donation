@extends('layout')
@section('title')الحالات / التبرع بالدم@endsection
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
            <h2> حالات التبرع بالدم</h2>
           
        </div>
       </div>
  
       <div class="container text-center ">
        <div class="row mx-5 my-5">   
            
        @foreach($em as $e)
        <div class="col-md-4  mb-5 ">
                <div class="card py-4 border-warning backgroung-item" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center ">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title ">تبرع بالدم</h5>
                       <p>{{Carbon\Carbon::parse($e->created_at)}}</p>
                     <p class="card-text text-center ">حالة انسانية:</p> 
                      <p>{{$e->name}} يحتاج {{$e->numberOfUnit}}  وحدة دم بشكل عاجل من فصيلة
                          {{$e->type}} في مستشفى {{$e->hospital}} مدينة {{$e->City}}
                          لمن لديه القدرة على التبرع التواصل مع اهل المريض على الرقم{{$e->mobile}}
                      </p>
                      <a href="{{url("emergency/details/$e->id")}}" class="btn mainbg-color text-color hoverbutton">المزيد من التفاصيل</a>

                    </div>
                  </div>
            </div>
          @endforeach
                
             
                  </div>
                  
                </div>
         

            
            {{$em->links('inc.paginator')}}

           
    </section>

     
@endsection