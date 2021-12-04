@extends('admin.layout')
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			 <li class="breadcrumb-item active"> المقالات </li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">الصفحة الرئيسية</a></li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">

			
              <div class="card-header">
                <h5 class="text-right" >مقالات </h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{url('/dashboard/blog')}}" method="post"  >
			  @csrf
			@include('../../inc.message')
					 
			  <div class="card-body text-right">
			  
			
                  <div class="form-group "> <label for="exampleInputtext1">العنوان</label>
                    <input type="text" name='title' class="form-control  text-right" id="exampleInputtext1" placeholder="" >
                  </div>
				
                
                  <div class="form-group"> <label for="exampleInputtext1" >الوصف</label> 
                    <textarea type="text" name='topic' class="form-control  text-right" id="exampleInputtext1" placeholder="">
                    </textarea>
                </div>
                  
                  
                 
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name='insert1' class="btn btn-primary" >ارسال</button>
                </div>
            </form>
			  </div>
			  </div>
			  </div>
			  </div>
			  
           
			</section>

     


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
