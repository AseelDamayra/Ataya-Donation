@extends('layout')
@section('title') تفاصيل المقال @endsection
@section('main')
   
    <section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
        <div class="image-blogs d-flex justify-content-center align-items-center">
           <h2 class="text-white font-weight-bold header-blogsFont">اخر المقالات التي قمنا بها</h2>
        </div>
   </section>

   <section class="section cause-single mt-5 text-right">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="single-details">
					<img src="{{asset('assets/images/blog/first.jpg')}}" alt="" class="img-fluid w-100">

					<h2 class="my-4 text-lg ">{{$blog->title}}</h2>
                    <h6 class="mr-3">{{Carbon\Carbon::parse($blog->created_at)}}</h6>
				
					<p class="bg-light py-5 px-5">{{$blog->topic}}</p>
                
                   @auth
                    <div class="comment">
                    <h3 class="heading">التعليقات: {{$blog->comment()->count()}}</h3>
                    
                    @foreach($comment as $c)
                        <div class="posts my-4">
                        <span>{{$c->user->name}}:</span>
                        <p class="w-75"><span class="date">{{$c->created_at}}</span>{{$c->comment}}</p>
                         </div>
                    @endforeach   
                    
                     @include('inc.message')
                      <div class="container">
                        <form method="post" action="{{url("comment/send")}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="blogId" value="{{$blog->id}}">
                            </div>
                        
                          <div class="form-group">
                            <textarea name="comments" class="form-control status-box" rows="3" placeholder="اكتب تعليقك"></textarea>
                          </div>

                          <div class="button-group pull-right">
                            <p class="counter" style="display: none;">250</p>
                          <button type="submit" name="submit" class="btn btn-main rounded mainbg-color hoverbutton mb-5">ارسال التعليق</button>
                        </div>
                        </form>
                       
                       
                      </div>
                </div>
             @endauth

              

					<div class="share-option my-5 clearfix mainbg-color p-4 rounded">
					    <ul class="list-inline mb-0 ">
					        <li class="list-inline-item ml-2"> <strong class="share-status">شارك الحالة:</strong> </li>
					        <li class="list-inline-item"><a href="https://www.facebook.com/"  class="share-link" target="_blank"><i class="fab fa-facebook-f ml-2"></i>Facebook</a></li>
					        <li class="list-inline-item ml-2"><a href="https://twitter.com/" class="share-link"  target="_blank"><i class="fab fa-twitter ml-2"></i>Twitter</a></li>
					        <li class="list-inline-item ml-2"><a href="https://www.instagram.com/" class="share-link"  target="_blank"><i class="fab fa-instagram ml-2"></i>instagram</a></li>
					    </ul>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>

     
@endsection