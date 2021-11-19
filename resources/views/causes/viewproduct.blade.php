@extends('layout')
@section('title')الحالات / التبرع بالمنتجات @endsection
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
            <h2> حالات التبرع بالمنتجات</h2>
           
        </div>
       </div>
  
       <div class="container text-center ">
        <div class="row mx-5 my-5">   
       
        @foreach($viewPro as $v)
        <div class="col-md-4  mb-5">
                <div class="card py-4 backgroung-item border-warning" style="width: 17rem;">
                    <div class="image-cases d-flex justify-content-center">
                         <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title ">التبرع ب {{$v->productName}}</h5>
                      
                      <p class="card-text "> {{$v->name}} من مدينة {{$v->address}} يتبرع ب {{$v->productName}} يتميز ب{{$v->topic}}
                          للمزيد من التفاصيل التواصل مع الرقم {{$v->mobile}}
                      </p>
                      <a href="{{url("viewproduct/details/$v->id")}}" class="btn mainbg-color text-color border-white hoverbutton">المزيد من التفاصيل</a>
                    </div>
                  
                  </div>
            </div>
          @endforeach
                
             
                  </div>
                  
                </div>
         

            
            {{$viewPro->links('inc.paginator')}}

           
    </section>

     
@endsection