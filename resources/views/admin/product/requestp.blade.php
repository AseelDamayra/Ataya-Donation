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
			<li class="breadcrumb-item active"> المنتجات المطلوبة</li>
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
          <h5 class="text-right">المنتجات المطلوبة</h5>

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
                         اسم المنتج
                      </th>
                      <th >
                        وصف المنتج 
                      </th>
					  
					   <th >
                          حالة الطلب
                      </th>
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($Reqproducts as $reqp)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$reqp->name}}</td>
	<td>{{$reqp->address}}</td>
    <td>{{$reqp->mobile}}</td>
    <td>{{$reqp->productName}}</td>
    <td>{{$reqp->topic}}</td>
  
    
                 @if($reqp->status == 1)
                      <td >
                   
                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/viewProductReq/$reqp->id")}}" >
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
      {{$Reqproducts->links('inc.paginator')}}
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  <!-- /.content-wrapper -->

@endsection