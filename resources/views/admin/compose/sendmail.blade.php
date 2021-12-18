@extends('admin.layout')
@section('main')
<div class="wrapper">

 
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
			<li class="breadcrumb-item active">صندوق الوارد</li>
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">الصفحة الرئيسية</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @include('../../inc.message')
    <!-- Main content -->
    <section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
          <h5 class="text-right">صندوق الوارد</h5>

        </div>
        <div class="card-body p-0">
		
			 <table class="table table-striped projects ">
              <thead>
                  <tr >
                      <th >
                          #
                      </th>
                      <th >
                            اسم المرسل  
                      </th>
                      <th >
                          البريد الالكتروني
                      </th>
                   
					    <th >
                          الموضوع
                      </th>
                      <th >
                        الرسالة
                      </th>
                      <th >
                        تاريخ الارسال
                      </th>
					
					 
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($sendmail as $s)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$s->sender}}</td>
	<td>{{$s->email}}</td>
    <td>{{$s->subject}}</td>
    <td>{{$s->contact}}</td>
    <td>{{$s->sendtime}}</td>
   
    
            
</tr>   
                   
	 
					  


@endforeach


	
               
               
                  
                  
              </tbody>
          </table>
		  </div> 
		  
		  
		 
		  
		  
		  
        </div>
        {{$sendmail->links('inc.paginator')}}
</section>
 
  <!-- /.content-wrapper -->

 @endsection