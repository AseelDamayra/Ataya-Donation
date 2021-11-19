
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
                <a href="{{url('register')}}" class="sign_in">انشاء حساب</a>
              
            </div>
            <div class="sign_up">
                <form method="POST" action="{{url('login')}}">
                    @csrf
                <h2>تسجيل الدخول</h2>
                
                <input type="email" name="email" placeholder="البريد الالكتروني" required><br>
                <input type="password" name="password" placeholder="كلمة المرور" required><br>
                <p class="d-inline">نوع المستخدم:</p>
                <select class="custom-select" name="role_id">
                @foreach($roles as $role)
                 <option value="{{$role->id}}">{{$role->name}}</option>
                 @endforeach
                </select>
                <input type="submit" name="sign_up" value="تسجيل الدخول" class="up">
            </form>
            
        </div>
      
        </div>
    </section>


 



    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>