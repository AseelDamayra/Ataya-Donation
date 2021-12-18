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
			<li class="breadcrumb-item active">التبرع بالدم</li>
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
          <h5 class="text-right">التبرع بالدم</h5>

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
                         اسم المستشفى
                      </th>
                      <th >
                         نوع الدم 
                      </th>
					   <th  >
                          عدد وحدات الدم 
                      </th>
					   <th >
                          حالة الطلب
                      </th>
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($emergency as $em)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$em->name}}</td>
	<td>{{$em->City}}</td>
    <td>{{$em->mobile}}</td>
    <td>{{$em->hospital}}</td>
    <td>{{$em->type}}</td>
    <td>{{$em->numberOfUnit}}</td>
    
                 @if($em->status == 0)
                      <td >
                          <a class="btn btn-success text-light  btn-sm" href="{{url("/dashboard/EmergencyAcc/$em->id")}}"  >
                              <i class="fas fa-folder">
                              </i>
                              موافقة
                          </a>
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/EmergencyDelete/$em->id")}}" >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                      @else
                      <td >
                       
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/EmergencyDelete/$em->id")}}" >
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
        {{$emergency->links('inc.paginator')}}
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  <!-- /.content-wrapper -->

@endsection