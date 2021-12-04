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
			<li class="breadcrumb-item active">بيانات الادمن</li>
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
          <h5 class="text-right">بيانات الادمن</h5>

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
                         البريد الالكتروني
                      </th>
                   
					    <th >
                          رقم الهاتف 
                      </th>
                      <th >
                         فيسبوك
                      </th>
					   <th  >
                         تويتر
                      </th>
                      <th  >
                         انستجرام
                      </th>
					   <th >
                          حالة الطلب
                      </th>
					  
					  
                  </tr>
              </thead>
              <tbody>
         
    @foreach($admins as $admin)
<tr class="bg-white"> 
<td>{{$loop->iteration}}</td>
    <td>{{$admin->name}}</td>
	<td>{{$admin->email}}</td>
    <td>{{$admin->mobile}}</td>
    <td>{{$admin->facebook}}</td>
    <td>{{$admin->twitter}}</td>
    <td>{{$admin->instagram}}</td>
    
             
                      <td >
                          <!-- <a class="btn btn-success text-light  btn-sm"   >
                              <i class="fas fa-folder">
                              </i>
                              تعديل
                          </a> -->
                          <button class="btn btn-info btn-sm data-btn" data-id="{{$admin->id}}" data-name="{{$admin->name}}" data-email="{{$admin->email}}" data-mobile="{{$admin->mobile}}" data-facebook="{{$admin->facebook}}"  data-twitter="{{$admin->twitter}}"  data-instagram="{{$admin->instagram}}"data-toggle="modal" data-target="#edit-modal">
                            <i class="fas fa-edit"></i>
                          </button> 

                          <a class="btn btn-danger text-light btn-sm" href="{{url("/dashboard/adminDelete/$admin->id ")}}" >
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
		  
		  
		 
		  
		  
		  
        </div>
        <!-- /.card-body -->
     
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  
  <!--Edit  Modal -->
<div class="modal fade text-right" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title " id="exampleModalLabel">تعديل بيانات الادمن</h5>
       
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('dashboard/adminupdate')}}">
          @csrf
                <div class="card-body ">
                    <input type="hidden" name="id"  id="edit-form-id">
                  <div class="form-group">
                    <label for="exampleInputEmail1">الاسم </label>
                    <input type="text" name="name" class="form-control text-right" id="edit-form-name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">البريد الالكتروني </label>
                    <input type="text" name="email" class="form-control text-right" id="edit-form-email" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">الهاتف </label>
                    <input type="text" name="mobile" class="form-control text-right" id="edit-form-mobile" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">فيسبوك </label>
                    <input type="text" name="facebook" class="form-control text-right" id="edit-form-facebook" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">تويتر </label>
                    <input type="text" name="twitter" class="form-control text-right" id="edit-form-twitter" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">انستجرام </label>
                    <input type="text" name="instagram" class="form-control text-right" id="edit-form-instagram" >
                  </div>
                <!-- /.card-body -->

                
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary">تعديل</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
  
  
  
  
  <!-- /.content-wrapper -->

@endsection

@section('script')
<script>
    $('.data-btn').click(function(){
        let id=$(this).attr('data-id');
        let name=$(this).attr('data-name');
        let email=$(this).attr('data-email');
        let mobile=$(this).attr('data-mobile');
        let facebook=$(this).attr('data-facebook');
        let twitter=$(this).attr('data-twitter');
        let instagram=$(this).attr('data-instagram');
      
        $('#edit-form-id').val(id);
        $('#edit-form-name').val(name);
        $('#edit-form-email').val(email);
        $('#edit-form-mobile').val(mobile);
        $('#edit-form-facebook').val(facebook);
        $('#edit-form-twitter').val(twitter);
        $('#edit-form-instagram').val(instagram);
    })
</script>
@endsection