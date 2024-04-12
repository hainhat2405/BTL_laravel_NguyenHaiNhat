<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/DangKy.css" />
    <!-- font roboto -->
    <linkde
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- form signup -->
    <div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="{{URL::to('/add-customer')}}" method="POST">
          {{csrf_field()}}
          <h5>Họ và tên</h5>
          <input type="text" name="customer_name" class="input-signup-username" onblur="chkemail()"/>
          <span class="chkEmail" style="color: red;display: none;">*</span><br><br>
          <h5>Địa chỉ email</h5>
          <input type="text" name="customer_email" class="input-signup-password"onblur="chkpass()" />
          <span class="chkPass" style="color: red;display: none;">*</span><br><br>
          <h5>Password</h5>
          <input type="password" name="customer_password" class="input-signup-password"onblur="chkpass()" />
          <span class="chkPass" style="color: red;display: none;">*</span><br><br>
          <h5>Phone</h5>
          <input type="text" name="customer_phone" class="input-signup-password"onblur="chkpass()" />
          <span class="chkPass" style="color: red;display: none;">*</span><br><br>
          <button type="submit" class="signup__signInButton">Đăng Ký</button>
        </form>
        <a href="{{URL::to('/login-Customers')}}" class="signup__registerButton"
          >Đã có tài khoản</a
        >
      </div>
    </div>
  </body>
  <script src="resources/js/DangKy.js"></script>
</html>