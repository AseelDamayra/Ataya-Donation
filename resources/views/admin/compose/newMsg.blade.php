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
			 <li class="breadcrumb-item active">رسالة جديدة </li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">الصفحة الرئيسية</a></li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @include('../../inc.message')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
       
          <!-- /.col -->
          <div class="col-md-11 m-auto">
		  
		 
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class=" text-right">رسالة جديدة</h5>
              </div>
			    <form action="{{url('/dashboard/newmsg')}}" method="post" >
                    @csrf
              <!-- /.card-header -->
              <div class="card-body text-right">
              <input type="hidden" name="status" value="2">
                <div class="form-group">
                  <input type="text" class="form-control text-right" placeholder="اسم المستلم" name="sender" >
                </div>
                <div class="form-group">
                  <input type="email" class="form-control text-right" placeholder=":البريد الالكتروني" name="email" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control text-right" placeholder=":الموضوع" name="subject">
				 
                </div>
				  
                <div class="form-group">
                    <textarea  class="form-control text-right" style="height: 300px" name="contact">

                    </textarea>
                </div>
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               
                  <button type="submit" class="btn btn-primary" name="insertcom"><i class="far fa-envelope" ></i> ارسال</button>
                </div>
               
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
			</form>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection