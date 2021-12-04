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
			<li class="breadcrumb-item active">المتطوعين</li>
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
          <h5 class="text-right">المتطوعين</h5>

        </div>
        <div class="card-body p-0">
		
			 <table class="table table-striped projects ">
              <thead>
                  <tr >
                      <th >
                          #
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
                      <th >
                        نوع التطوع
                      </th>
                   
					   <th >
                          حالة الطلب
                      </th>
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($volunteers as $volunteer)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$volunteer->name}}</td>
	<td>{{$volunteer->City}}</td>
    <td>{{$volunteer->mobile}}</td>
    <td>{{$volunteer->type}}</td>
   
  
    
                 @if($volunteer->status == 0)
                      <td >
                          <a class="btn btn-success text-light  btn-sm" href="{{url("/dashboard/volunteerAcc/$volunteer->id")}}"  >
                              <i class="fas fa-folder">
                              </i>
                              موافقة
                          </a>
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/volunteerDelete/$volunteer->id")}}" >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                      @else
                      <td >
                       
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/volunteerDelete/$volunteer->id")}}" >
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
     
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  <!-- /.content-wrapper -->

@endsection