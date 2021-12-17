
@extends('layout')
@section('title') تبرع الان @endsection
@section('main')
    
<section class="head-blogs" id="head-blogs">
        <div class="overlay-blogs"></div>
         <div class="image-blogs d-flex flex-column flex-wrap justify-content-center align-items-center">
            <h2 class="text-white font-weight-bold header-blogsFont">تبرع الان</h2>
            <p class="lead text-white">اسم الطالب : {{$student->name}}</p>
         </div>
</section>

   <section class="donateForm">
    <div class="container backgroung-item my-5">
        <div class="row">
            <div class="col-sm-9 text-right m-auto">
              <div class="tab-content" >
                <h2 class="text-center mt-5">معلومات المتبرع</h2>
                <div class="tab-pane active" id="home">
                @include('inc.message')
<form class="form" action="{{url("studentship/donate/$student->id")}}" method="post" id="registrationForm">
@csrf
                      <input type="hidden" value="{{$user->id}}" name="user_id">

                     <div class="form-group">
                       <div class="col-xs-6 ">
                         <label for="first_name "><h4>المبلغ </h4></label>
                         <input type="text" class="form-control" name="money" id="money"  title="المبلغ المراد التبرع به  ">
                        </div>
                     </div>      
                                         
    <fieldset class="form-group">

      <div class="form-group mb-4">
        <label class="col-form-label mb-3 h3"><h4>طريقة الدفع</h4>   </label>
        <br>
       @foreach($types as $type)
       <label class="col-form-label mb-3 h3" for="{{$type->id}}"> {{$type->name}}  </label>
        <input type="radio" id="payment" name="payment" value="{{$type->id}}">

       @endforeach
        <!-- <input type="radio" id="payment" name="payment[]" value="paypal"><i class="fab fa-cc-paypal"></i> -->
        <!-- <img  src="{{asset('assets/images/payment/1.webp')}}" alt=""> -->
        <!-- <input type="radio" id="payment" name="payment[]" value="visa"><i class="fab fa-cc-visa"></i> -->
        <!-- <img src="{{asset('assets/images/payment/2.webp')}}" alt=""> -->

     </div>
    <div class="visa">
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>الاسم على البطاقة</h4>   </label>
        <input type="text" class="form-control" name="Allname" id="paycardname" placeholder="اسمك ">
     </div>
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>رقم البطاقة</h4> </label>
        <input type="text" class="form-control" name="NumberId" id="paycardnumber" placeholder="000000000">
     </div>
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>تاريخ انتهاء البطاقة</h4>   </label>
        <input type="date" class="form-control" name="date" id="paycardname" placeholder="اسمك ">
     </div>
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>الرقم التعريفي</h4>   </label>
        <input type="text" class="form-control" name="CVV" id="paycardname" placeholder="الرقم التعريفي أو الرقم السري للبطاقة (CVV) ">
     </div>
     </div>

     <div class="paypal">
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>رقم الهاتف</h4>   </label>
        <input type="text" class="form-control" name="phone" id="paycardname" placeholder="اسمك ">
     </div>
     <div class="form-group">
        <label class="col-form-label mb-2"><h4>كلمة السر</h4> </label>
        <input type="text" class="form-control" name="password" id="paycardnumber" placeholder="000000000">
     </div>
    
     </div>
    
      
    </fieldset>
        <div class="text-right pb-5">
            <button class="btn mainbg-color hoverbutton rounded text-light" type="submit">إرسال</button>
        </div>

</form>
          </div>
      </div>
</div>
</div>
</div>
    </section>



@endsection