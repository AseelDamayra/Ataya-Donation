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
			<li class="breadcrumb-item active">المنح الطلابية</li>
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
          <h5 class="text-right">المنح الطلابية</h5>

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
                         اسم التخصص
                      </th>
                      <th >
                         اسم الجامعة 
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
         
    @foreach($students as $student)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$student->name}}</td>
	<td>{{$student->City}}</td>
    <td>{{$student->mobile}}</td>
    <td>{{$student->major}}</td>
    <td>{{$student->University}}</td>
    <td>{{$student->money}}</td>
    
                 @if($student->status == 0)
                      <td >
                          <a class="btn btn-success text-light  btn-sm" href="{{url("/dashboard/studentshiptAcc/$student->id")}}"  >
                              <i class="fas fa-folder">
                              </i>
                              موافقة
                          </a>
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/studentshipDelete/$student->id")}}" >
                              <i class="fas fa-trash">
                              </i>
                              حذف
                          </a>
                      </td>
                      @else
                      <td >
                       
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/studentshipDelete/$student->id")}}" >
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
      {{$students->links('inc.paginator')}}
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  <!-- /.content-wrapper -->

@endsection