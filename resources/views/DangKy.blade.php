<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/DangKy.css" />
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- form signup -->
    <div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="">
          <h5>Email</h5>
          <input type="text" class="input-signup-username" onblur="chkemail()"/>
          <span class="chkEmail" style="color: red;display: none;">*</span><br><br>
          <h5>Password</h5>
          <input type="password" class="input-signup-password"onblur="chkpass()" />
          <span class="chkPass" style="color: red;display: none;">*</span><br><br>
          <button type="submit" class="signup__signInButton">Đăng Ký</button>
        </form>
        <a href="Login.html" class="signup__registerButton"
          >Tạo tài khoản mới</a
        >
      </div>
    </div>
  </body>
  <script src="resources/js/DangKy.js"></script>
</html>