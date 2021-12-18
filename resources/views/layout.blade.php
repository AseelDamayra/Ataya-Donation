<!doctype html>
<html lang="ar">
  <head>
   
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @yield('styles')

    <title>عطايا - @yield('title')</title>
  </head>
  <body dir="rtl">
    
 

    <section class="notification  fixed-top" id="notification">
        <div class=" d-flex">
        <marquee class="mainCtext-color bgmarquee hide-mqrquee  " height="50px" >
            <FONT SIZE="5">"دقائق معدودة بإمكانها ان تساعد في إنقاذ حياة شخص"	 </FONT>
            
            <a href="{{url('emergency')}}" class="click-here">إضغط هنا	 </a>   
       </marquee>
       <div class="navbar-brand " href="#">
     
     <div class="name">
     <div class="name-nav"> عـطــٰٱ̍ٻۧــٰ̍ا̍ </div>
     </div>
      </div> 
    </div>
    </section>


   <section class="header" id="header">
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-navColor margin-nav fixed-top top-nav "  id="nav">
    
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav align-items-center">
       <div class="signInUp ">
        
       @guest        
       <a  class="btn logbtn ml-3 hoverbutton mainbg-color text-color" href="{{url('register')}}">انشاء حساب</a>
       <a  class="btn logbtn ml-3 hoverbutton mainbg-color text-color" href="{{url('login')}}">تسجيل الدخول</a>    
       @endguest

       @auth     
       <a  class="btn logbtn ml-3 hoverbutton mainbg-color text-color" href="{{url('logout')}}">تسجيل الخروج</a>
       @endauth   
             
       </div>
     
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">حول</a>
        </li>
      
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            الحالات
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('smallproject')}}">المشاريع الصغيرة</a>
              <a class="dropdown-item" href="{{url('studentship')}}">المنحة الدراسية</a>
              <a class="dropdown-item" href="{{url('emergency')}}">التبرع بالدم</a>
              <a class="dropdown-item" href="{{url('/viewproduct')}}">التبرع بالمنتجات</a>
            </div> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('blog')}}">المقالات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('volunteer')}}">تطوع الان</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('seeker')}}">طلب للتبرع</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact_us')}}">اتصل بنا</a>
          </li>
      </ul>

    
    </div>
    <div class="welcom ">

  @auth   
  <a href="{{url('profile')}}" class="welcom-user"><span> تشرفنا بزيارتك </span>{{Auth::user()->name}}</a>
 
  @endauth         


</div>
 
  
   
    <button  class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    </nav>


@yield('main')



<footer class="footer pt-5 section bg-dark text-white">
        <div class="container text-center">
            <div class="row d-flex justify-content-center  ">
               
               
                
                   
                   <div class="col-md-6">
                    <div class="footer-widget widget ">
                        <h4 class="text-capitalize mb-4 text-white ">تواصل معنا</h4>
    
                        <ul class="list-unstyled footer-menu mt-4">
                            <li><a class="mainCtext-color hover-footer" href="#"><i class="icofont-phone"></i>{{$admin[0]->mobile}}</a></li>
                            <li><a  class="mainCtext-color hover-footer" href="#"><i class="icofont-email"></i>{{$admin[0]->email}}</a></li>
                        </ul>
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a class="mainCtext-color hover-footer" href="{{$admin[0]->facebook}}"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="mainCtext-color hover-footer" href="{{$admin[0]->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mainCtext-color hover-footer mr-2" href="{{$admin[0]->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        
                    </div>
               </div>
    
               <div class="col-md-6">
                    <div class="widget footer-widget ">
                        <h4 class="text-capitalize mb-4 text-white">الروابط السريعة</h4>
                            <div class="row">
                        
                            <div class="col-md-6">
                                <ul class="list-unstyled footer-menu lh-35"> 
                            <li><a class="mainCtext-color hover-footer" href="{{url('/')}}">الرئيسية</a></li>
                            <li><a class="mainCtext-color hover-footer" href="{{url('/viewproduct')}}">التبرع بالمنتجات</a></li>
                            <li> <a class="mainCtext-color hover-footer" href="{{url('studentship')}}">المنحة الدراسية</a></li> 
                            <li> <a class="mainCtext-color hover-footer" href="{{url('smallproject')}}">المشاريع الصغيرة</a></li> 
                           <li> <a class="mainCtext-color hover-footer" href="{{url('emergency')}}">التبرع بالدم</a></li> 
                           
                        </ul>  
                        </div>
                           <div class="col-md-6">
                           <ul class="list-unstyled footer-menu lh-35"> 
                           <li><a class="mainCtext-color hover-footer" href="{{url('about')}}">حول</a></li>
                            <li><a class="mainCtext-color hover-footer" href="{{url('blog')}}">المقالات</a></li>
                            <li><a class="mainCtext-color hover-footer" href="{{url('help')}}">مركز المساعدة</a></li>
                            <li><a class="mainCtext-color hover-footer" href="{{url('volunteer')}}">تطوع الان</a></li>
                            <li><a class="mainCtext-color hover-footer" href="{{url('contact_us')}}">اتصل بنا</a></li>
                           </ul> 
                        </div>
                        
                    </div>
                    </div>
                
                </div>
            </div> 
               
          
            
            <div class="footer-btm py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="copyright text-center">
                            &copy; حقوق النشر محفوظة
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </footer>
    
    
    

    
    <script src="{{asset('assets/js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>



    @yield('scripts')

  </body>
</html>