@extends('layout')
@section('title') المقالات @endsection
@section('main')

    <section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
         <div class="image-blogs d-flex justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-blogsFont">اخر المقالات التي قمنا بها</h2>
         </div>
    </section>

    <section class="blogs py-5" id="blogs">
        <div class="content d-flex justify-content-center text-center">
            <div class="inside-content">
            <h2> أحدث المقالات</h2>
            
        </div>
       </div>
  
       <div class="container text-center">
        <div class="row mx-5 mb-5"> 

        @foreach($blogs as $blog)     
          <div class="col-md-4  mb-5 card-blogs">   
            <div class="card py-4 backgroung-item border-warning" style="width: 18rem;">
                <div class="image-cases d-flex justify-content-center ">
                     <img src="{{asset("assets/images/blog/first.jpg")}}" class="card-img-top rounded-circle " alt="ايادي عمال بناء">
                </div>
               
                <div class="card-body">
                  <h5 class="card-title ">{{$blog->title}}</h5>
                  <h6>{{Carbon\Carbon::parse($blog->created_at)->toDateString()}}</h6>
                  <p class="card-text ">{{$blog->topic}}</p>
                 <a href="{{url("blog/details/$blog->id")}}" class="btn mainbg-color text-color hoverbutton">اقرء المزيد</a>
             
                </div>
              </div>
            </div>
              @endforeach

         
                   </div>

           
               

              {{$blogs->links('inc.paginator')}}
  </div>
       
          
       
    </section>

@endsection