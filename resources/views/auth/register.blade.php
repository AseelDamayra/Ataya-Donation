
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عطايا_ انشاء حساب / تسجيل الدخول</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body dir="rtl">

    <section class="sign-in-up">
        <div class="page">
            <div class="welcome">
                <h2>مرحبا بك</h2>
                <p>هنا منصة عطايا الخيرية ، يشرفنا وجودك بيننا </p>
                <a href="{{url('login')}}" class="sign_in ">تسجيل الدخول</a>
                <button class="btn">انشاء حساب</button>
            </div>
            <div class="sign_up">
            @include('inc.message')
                <form method="POST" action="{{url('register')}}">
                    @csrf
                <h2>انشاء حساب</h2>
                <input type="text" name="name" placeholder="الاسم الكامل" required><br>
                <input type="email" name="email" placeholder="البريد الالكتروني" required><br>
                <input type="password" name="password" placeholder="كلمة المرور" required><br>
                <input type="text" name="mobile" placeholder="الهاتف المحمول" required><br>
                <input type="text" name="address" placeholder="العنوان" required><br>
                <!-- <p class="text-center ">نوع المستخدم:</p>
                <div class="d-flex align-items-center justify-content-start">
                @foreach($roles as $role)
                 <input type="radio"  id="donar" name="role_id" value="{{$role->id}}" >{{$role->name}}
               @endforeach
                </div> -->
                <p class="d-inline">نوع المستخدم:</p>
                <select class="custom-select" name="role_id">
                @foreach($roles as $role)
                 <option value="{{$role->id}}">{{$role->name}}</option>
                 @endforeach
                </select>
                <input type="submit" name="sign_up" value="انشاء حساب" class="up"> 
            </form>
            <div class="hidden-sign-in d-none ">
            <p class="mt-3">هل تملك حساب <a href="{{url('login')}}" class="hidden-link sign_in">تسجيل الدخول</a></p>
        </div>
        </div>
      
        </div>
    </section>

 



    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>