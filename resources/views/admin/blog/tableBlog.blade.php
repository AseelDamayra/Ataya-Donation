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
			<li class="breadcrumb-item active">المقالات</li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">الصفحة الرئيسية</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @include('../../inc.message')
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h5 class=" text-right">المقالات </h5>

         
        </div>
        <div class="card-body p-0 ">
          <table class="table table-striped projects " >
              <thead>
                  <tr>
                      <th >
                          #
                      </th>                
                      <th >
                          العنوان
                      </th>
                      <th  >
                          الوصف
                      </th>
					   <th  >
                         حذف المقال
                      </th>
                     
                  </tr>
              </thead>
			  
              
              <tbody>		  

@foreach($blogs as $blog)
<tr class="bg-white"> 
    <td>{{$loop->iteration}}</td>
   <td >{{$blog->title}}</td>
    <td >{{$blog->topic}}</td>
  
	
	

	
	<td >
                        
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/deleteBlog/$blog->id")}}"  >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                  </tr>
			@endforeach	  

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      {{$blogs->links('inc.paginator')}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  
  

@endsection