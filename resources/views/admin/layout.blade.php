<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>وحدة تحكم - عطايا</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/css/fontawesome.all.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <div class="name">
     <div class="name-nav text-center mainCtext-color"> عـطــٰٱ̍ٻۧــٰ̍ا̍ </div>
     </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
             
            <li class=" mr-3 text-right mainCtext-color">الطلبات</li>
 
          <li class="nav-item mb-3 ">
            <a href="#" class="nav-link text-right">
              <i class="nav-icon fas fa-edit "></i>
              <p class="mr-3 ">
                النماذج
                <i class="fas fa-angle-left right "></i>
              </p>
            </a> 
			
			<ul class="nav nav-treeview text-right">
              <li class="nav-item text-right">
                <a href="{{url('/dashboard/blog')}}" class="nav-link">
                  <p>المقالات والفيديو</p>
                </a>
              </li>
             
              <li class="nav-item ">
                <a href="{{url('/dashboard/admindata')}}" class="nav-link">
                  <p>بيانات الادمن</p>
                </a>
              </li>
              
         </ul>
		 
		 </li>
         
          <li class=" mr-3 text-right mainCtext-color">عرض الطلبات</li>
 
          <li class="nav-item mb-3">
            <a href="#" class="nav-link text-right">
              <i class="fas fa-clipboard mr-2"></i>
              <p class="mr-3">
                عرض النماذج 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a> 
			
			
			<ul class="nav nav-treeview text-right">
              <li class="nav-item ">
                <a href="{{url('/dashboard/tableBlog')}}" class="nav-link">
            
                  <p>المقالات</p>
                </a>
              </li>
             
   
            
              <li class="nav-item">
                <a href="{{url('/dashboard/smallproject')}}" class="nav-link">
                
                  <p>المشاريع الصغيرة</p>
                </a>
              </li>
            
             <li class="nav-item">
                <a href="{{url('/dashboard/studentship')}}" class="nav-link">
                
                  <p>المنح الطلابية</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="{{url('/dashboard/Emergency')}}" class="nav-link">
                
                  <p>التبرع بالدم </p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="{{url('/dashboard/viewProduct')}}" class="nav-link">
               
                  <p>تسويق المنتجات </p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="{{url('/dashboard/volunteer')}}" class="nav-link">
                 
                  <p>المتطوعين  </p>
                </a>
              </li>
			  
			   <li class="nav-item">
                <a href="{{url('/dashboard/admindataTable')}}" class="nav-link">
               
                  <p>بيانات الادمن </p>
                </a>
              </li>
			    
         </ul></li>
       
         <li class="mr-3 text-right mainCtext-color">الرسائل </li>
		 
		 
		 <li class="nav-item mb-3">
            <a href="#" class="nav-link text-right">
              <i class="nav-icon far fa-envelope"></i>
              <p class="mr-3">
                عرض الرسائل  
				<i class="fas fa-angle-left right"></i>
               
              </p>
            </a> 
			
		 
		 
          <ul class="nav nav-treeview text-right">        		         
         
     
              <li class="nav-item">
                <a href="mailbox.php" class="nav-link">     
                  <p>صندوق الوارد </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="compose.php" class="nav-link">
                  <p>رسالة جديدة </p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="recycle.php"   class="nav-link">
                  <p>سلة المحذوفات </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sendmail.php" class="nav-link">
                  <p>الرسائل المرسلة  </p>
                </a>
				
              </ul></li>
         
         
         <li class="mr-3 text-right mainCtext-color">الحساب</li>
		 
		 
		 <li class="nav-item mb-3">
            <a href="#" class="nav-link text-right">
              <i class="fas fa-user "></i>
              <p class="mr-3">
                 الحساب
				<i class="fas fa-angle-left right"></i>
               
              </p>
            </a> 
			
		 
		 
          <ul class="nav nav-treeview">  
                
            
                  
                  <li class="nav-item text-right">
                    <a href="recover-password-v2.php" class="nav-link">
                   
                      <p>تغيير كلمة السر  </p>
                    </a>
                  </li>
                
     
        </ul>
      </nav>
	  
	  
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


     @yield('main')

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/js/bootstrap.bundle.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.js')}}"></script>

@yield('script')
</body>
</html>
