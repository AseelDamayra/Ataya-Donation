@extends('layout')
@section('title') حول @endsection
@section('main')

    <section class="head-about" id="head-about">
        <div class="overlay-about"></div>
         <div class="image-about d-flex flex-column bd-highlight mb-3 justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-aboutFont ">من نحن</h2>
            <p class="text-white lead para-about">تعرف على عطايا</p>
         </div>
    </section>

    <section class="desc-about ">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 my-5">
                    <img src="assets/images/about/about.jpg" class="img-fluid">

                 </div>

                 <div class="col-md-7 d-flex align-items-center offset-1">
                     <div class="about-info text-center my-5">
                    <h2 class="content-title mb-3">مرحباً بكم في منصة عطايا الخيرية</h2>
                    <p class="lead ">عطايا هي الموقع العربي الاول في فلسطين لجمع التبرعات بالشراكة مع جمعية فلسطين الخير 
                     حيث تم تأسيسها عام 2021 بواسطة مجموعة طلاب من جامعة فلسطين التقنية خضوري, و تهدف المنصة الى مساعدة اكبر عدد من المحتاجين في فلسطين و تقديم الخدمات و المنح الطلابية و التبرع بالدم و غيرها الكثير من التبرعات 
                     </p>
                 </div>
                </div>
             </div>
         </div>

    </section>

    <section class="desc-about ">
        <div class="container ">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center offset-1">
                    <div class="about-info text-center my-5">
                   <h2 class="content-title mb-3">الجمعية الداعمة لعطايا</h2>
                   <p class="lead ">تعمل  جمعية فلسطين الخير  و التي مقرها في مدينة القدس على مساعدةالفريق من خلال مساعدتهم الى الوصول لأكبر عدد من المحتاجين ونشر الموقع للتسهيل على المتبرعين </p>
       
                </div>
               </div>

               <div class="col-md-4 d-flex align-items-center my-5">
                <img src="assets/images/about/Organization/image_missing.png" width="500">

             </div>
            </div>
        </div>

   </section>

    

     <section class="team ">
        <h2 class="section-heading text-center mb-5">Our Team</h2>
        <div class="container ">
            <div class="team-info">

          @foreach($admin as $d)
          <div class="profile">          
         <img src="{{asset("assets/images/uploads/team/$d->image")}}"><span class="name">{{$d->name}}</span>
        </div>
        @endforeach
        
         </div>
        </div>
      </section>

      <section class="end-about text-center">
          <div class="finishAbout d-flex justify-content-center align-items-center">
          <h2>لا يمكننا مساعدة الجميع ... لكن يمكن للجميع مساعدة  شخص ما</h2>
          </div>
      </section>

@endsection