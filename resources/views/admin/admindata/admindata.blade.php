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
			 <li class="breadcrumb-item active"> بيانات الادمن  </li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard/')}}">الصفحة الرئيسية</a></li>
             
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
                <h5 class=" text-right">بيانات الادمن</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{url('/dashboard/admindata')}}" method="post" enctype="multipart/form-data">
         @include('../../inc.message')
                @csrf
                <div class="card-body text-right">
                  <div class="form-group">
                    <label for="exampleInputtext1">الاسم </label>
                    <input type="text" name='name' class="form-control text-right" id="exampleInputtext1" value=''  >
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputtext1">الهاتف  </label>
                    <input type="text" name='mobile' class="form-control text-right" id="exampleInputtext1" value=''  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">البريد الالكتوني </label>
                    <input type="text" name='email' class="form-control text-right" id="exampleInputtext1" value='' >
                  </div>
				  <div class="form-group">
                    <label for="exampleInputtext1">فيس بوك</label>
                    <input type="text" name='facebook' class="form-control text-right" id="exampleInputtext1" value=' '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">تويتر</label>
                    <input type="text" name='twitter' class="form-control text-right" id="exampleInputtext1" value=' '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">انستجرام</label>
                    <input type="text" name='instagram' class="form-control text-right" id="exampleInputtext1" value=' '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">صورة</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name='img' class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label"  for="exampleInputFile">اختيار ملف</label>
                      </div>
                      <div class="input-group-append ">
                        <span class="input-group-text text-left">تحميل</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  			
				 <button type="submit" name='insert7' class="btn btn-primary">ارسال</button>
				
                </div>
             </form>
			  </div>
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