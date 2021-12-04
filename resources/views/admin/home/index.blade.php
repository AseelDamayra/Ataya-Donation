@extends('admin.layout')
@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">الصفحة الرئيسية</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a  href="{{url('/dashboard/')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active">الصفحة الرئيسية</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
          <h3 class=" text-center">الإحصائيات</h3>

         
        </div>
        <div class="card-body">
		
	
          <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5 class="text-right" >  المشاريع الصغيرة    </h5>
				</br>



                 <p class="text-right">  {{$smallPAcc}} : المشاريع المقبولة   </p>
                 <p class="text-right"> {{$smallPNAcc}} :  المشاريع قيد الدراسة </p>
                
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="projects2.php" class="small-box-footer">للمزيد  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 
                 <h5 class="text-right"> المنح الطلابية      </h5>
				</br>
                 <p class="text-right">  {{$studentAcc}} :  الطلبات المقبولة </p>
                 <p class="text-right"> {{$studentNAcc}}  : الطلبات قيد الدراسة   </p>
               
                
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="projects3.php" class="small-box-footer">للمزيد <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box bg-secondary">
              <div class="inner">
                 
                 <h5 class="text-right">  المتطوعين    </h5>
				</br>
                 <p class="text-right">  {{$voluneerAcc}} :   الطلبات المقبولة</p>
                 <p class="text-right"> {{$voluneerNAcc}}  :الطلبات قيد الدراسة    </p>
               
                
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="projects6.php" class="small-box-footer">للمزيد <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h5 class="text-right">   التبرع بالدم    </h5>
				</br>
                 <p class="text-right">  {{$emergencyAcc}} :  الطلبات المقبولة </p>
                 <p class="text-right">   {{$emergencyAcc}} : الطلبات قيد الدراسة  </p>
				 
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="projects4.php" class="small-box-footer">للمزيد <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  
          <!-- ./col -->
        </div>		  
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection