<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> صفحه خوش آمد گویی من</title>
</head>
<body dir="rtl">


    <h1>به وبسایت من خوش آمدید</h1>

    
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">
  
      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">خانه</a></li>
          <li class="drop-down"><a href="">منوی کاربری</a>
            <ul>
              @auth
              <li><a href="">پروفایل کاربری</a></li>
              @if (Auth::user()->role==1)
                <li><a href="{{route('admin.index')}}" target="_blank">پنل مدیریتی</a></li>
              @endif
              <li>
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit">خروج</button>
                </form>
              </li>
              @else
              <li><a href="{{route('register')}}">ثبت نام</a></li>
              <li><a href="{{route('login')}}">ورود</a></li>
              @endauth

              
            </ul>
            <li><a href="#">تماس با ما</a></li>
          </li>
         
        </ul>
      </nav>

    </div>
  </header>



    <form  action="" method="">
        <input type="text" placeholder="... جستوجو" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <h3>انواع محصولات ما</h3>

    <ul style="text-decoration: none">
        <li><a href="">کتاب</a></li>
        <li><a href="">نوشته افزار</a></li>
    </ul>
</body>
</html>
