<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/Login.css" />
    <link rel="stylesheet" href="css/TrangChu.css" />
    <link rel="stylesheet" href="{{asset('css/Header.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/icon-td.jpg">
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  @include('User.partials.header')
    <!-- End header -->


    <!-- Begin menu -->
    @include('User.partials.menu')
    <div class="login">
      <div class="login__container">
        
        <h1>Đăng Nhập</h1>
        <?php
          $message = Session::get('message');
          if($message){
            echo $message;
            Session::put('message',null);
          }
        ?>
        <form action="{{URL::to('/show-home')}}" method="POST">
        
          {{csrf_field()}}
          <h5>Email</h5>
          <input type="text" name="customer_email" class="input-login-username" onblur="chkemail1()"/>
          <span class="emaildn"  style="color: red;display: none;">*</span><br>
          <h5>Password</h5>
          <input type="password" name="customer_password" class="input-login-password" onblur="chkpass1()"/>
          <span class="passdn"  style="color: red;display: none;">*</span><br>
          <button type="submit" class="login__signInButton">Đăng Nhập</button>
          <a href="{{URL::to('/register-customer')}}" class="login__registerButton"
          >Tạo tài khoản mới</a
        >
        </form>
        
      </div>
    </div>
    @include('User.partials.footer')
  </body>
  <!-- <script src="resources/js/login.js"></script> -->
</html>