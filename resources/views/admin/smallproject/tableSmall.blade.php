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
			<li class="breadcrumb-item active">المشاريع الصغيرة</li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">الصفحة الرئيسية </a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    @include('../../inc.message')
      <!-- Default box -->
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h5 class="text-right">المشاريع الصغيرة</h5>

        </div>
        <div class="card-body p-0">
		
			 <table class="table table-striped projects ">
              <thead>
                  <tr >
                      <th >
                          #
                      </th>
                      <th >
                          اسم المشروع 
                      </th>
                      <th >
                            اسم الشخص  
                      </th>
                      <th >
                           عنوان الشخص
                      </th>
                   
					    <th >
                          رقم الهاتف 
                      </th>
					   <th  >
                          المبلغ 
                      </th>
					   <th >
                          حالة الطلب
                      </th>
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($smallp as $project)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$project->title}}</td>
    <td>{{$project->name}}</td>
	<td>{{$project->address}}</td>
    <td>{{$project->mobile}}</td>
    <td>{{$project->money}}</td>
    
                 @if($project->status == 0)
                      <td >
                          <a class="btn btn-success text-light  btn-sm" href="{{url("/dashboard/smallprojectAcc/$project->id")}}"  >
                              <i class="fas fa-folder">
                              </i>
                              موافقة
                          </a>
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/smallprojectDelete/$project->id")}}" >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                      @else
                      <td >
                       
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/smallprojectDelete/$project->id")}}" >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                   
	   @endif 
					  

</tr>
@endforeach


	
               
               
                  
                  
              </tbody>
          </table>
		  </div> 
		  
		  
		 
		  
		  
		  
        </div>
        <!-- /.card-body -->
        {{$smallp->links('inc.paginator')}}
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  <!-- /.content-wrapper -->

@endsection