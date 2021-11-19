@extends('layout')
@section('title') تفاصيل حالات التبرع بالمنتجات @endsection
@section('main')
   
    <section class="head-causes" id="head-causes">
        <div class="overlay-causes"></div>
        <div class="image-causes d-flex justify-content-center align-items-center">
           <h2 class="text-white font-weight-bold header-causesFont">اخر الاحداث التي قمنا بها</h2>
        </div>
   </section>

   <section class="section cause-single mt-5 text-right">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="single-details">
					<img src="{{asset("assets/images/blog/first.jpg")}}" alt="" class="img-fluid w-100">
                  @include('inc.message')
                  <div class="d-flex align-items-center justify-content-between mb-4">
					<h2 class="my-4 text-lg ">{{$viewPro->productName}}</h2>

                    <a href="{{url("viewproduct/request/$viewPro->id")}}" class="btn btn-main rounded mainbg-color hoverbutton text-light">اطلبه الان</a>
                  </div>
					<p class="bg-light py-5 px-5 para-space">{{$viewPro->name}} من مدينة {{$viewPro->address}} يتبرع ب {{$viewPro->productName}} يتميز ب{{$viewPro->topic}}
                          للمزيد من التفاصيل التواصل مع الرقم {{$viewPro->mobile}}</p>


					<div class="share-option my-5 clearfix mainbg-color p-4 rounded">
					    <ul class="list-inline mb-0 ">
					        <li class="list-inline-item ml-2"> <strong class="share-status">شارك الحالة:</strong> </li>
					        <li class="list-inline-item"><a href="https://www.facebook.com/"  class="share-link" target="_blank"><i class="fab fa-facebook-f ml-2"></i>Facebook</a></li>
					        <li class="list-inline-item ml-2"><a href="https://www.twitter.com/" class="share-link"  target="_blank"><i class="fab fa-twitter ml-2"></i>Twitter</a></li>
					        <li class="list-inline-item ml-2"><a href="https://www.instagram.com/" class="share-link"  target="_blank"><i class="fab fa-instagram ml-2"></i>instagram</a></li>
					    </ul>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection