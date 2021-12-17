
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عطايا_ تسجيل الدخول</title>

    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        .sign-in-up .page .sign_up {
    position: absolute;
    top: 37px;
    left: 49px;
    /* width: 268px; */
    height: 100%;
    text-align: center;
    transition: 1s cubic-bezier(.95,.32,.37,1.31);
    z-index: 1;
    opacity: 1;
    visibility: visible;}
    .sign-in-up .page {
    position: absolute;
    top: 51%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 556px;
    height: 382px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 5px 20px rgb(0 0 0 / 50%);
}
    </style>
</head>
<body dir="rtl">
    
<section class="sign-in-up">

        <div class="page">
        <a href="#" class="brand-link ">
    <div class="name mt-3">
     <div class="name-nav text-center mainCtext-color"> عـطــٰٱ̍ٻۧــٰ̍ا̍ </div>
     </div>
    </a>
            <div class="sign_up">
                <form method="post" action="{{url('loginAdmin')}}">
                    @csrf
                <h2>تسجيل الدخول</h2>
              
              
                <input type="email" name="email" placeholder="البريد الالكتروني" required><br>
                <input type="password" name="password" placeholder="كلمة المرور" required><br>
                <input type="submit" name="sign_up" value="تسجيل الدخول" class="up">
            </form>
            
        </div>
      
        </div>
    </section>


 



    <script src="{{asset('assets/js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>