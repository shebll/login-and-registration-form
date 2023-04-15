<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- start google font link -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- end google font link -->
  <!-- style -->
  <link rel="stylesheet" href="form.css">
  <title>Form</title>
</head>

<body>
  <!-- start include the header file  -->
  <?php
  include 'header.php';
  ?>
  <!-- End include the header file  -->

  <!-- start the main form login   -->
  <div class="wrapper">
    <span class="close">X</span>
    <form action="user.html" method="post" class="form-login" enctype="multipart/form-data">
      <h2>login</h2>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="email" name="email" required>
        <label for="">email</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="password" name="password" required minlength="8" maxlength="16">
        <label for="">password</label>
      </div>
      <div class="remember">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password ?</a>
      </div>
      <button type="submit" name="loginSubmit" class="loginBtn">Login</button>
      <div class="register">
        <p>
          Don`t have an account?
          <a href="#" class="register-link">Register</a>
        </p>
      </div>
    </form>
    <form action="#" method="post" class="form-register" enctype="multipart/form-data">
      <h2>Register</h2>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" name="fullname" id="fullName" onfocusout="fullNameValidation()" required>
        <p class="hint">hi</p>
        <label for="">full name</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" name="username" id="userName" onfocusout="userNameValidation()" required>
        <img src="imgs/cancel-error-svgrepo-com.svg" class="false hide" alt="">
        <img src="imgs/confirm-svgrepo-com.svg" class="true hide"  alt="">
        <!-- <p class="hint">hi</p> -->
        <label for="">user name</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="email" name="email" id="email" onfocusout="emailValidation()" required>
        <p class="hint">hi</p>
        <label for="">email</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="date" id="birthdate" name="birthdate" onfocusout="dateValidation()" required>
        <p class="hint">hi</p>        
        <span class="IMDPAPIBtn">actors</span>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" name="phone" id="phone" required minlength="11" maxlength="11" onfocusout="phoneValidation()"> 
        <p class="hint"></p>
        <label for="">phone</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" name="address" id="address" required onfocusout="addressValidation()">
        <p class="hint"></p>
        <label for="">address</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="password" name="password" id="password" required minlength="8" maxlength="16" onfocusout="passwordValidation()">
        <p class="hint">hi</p>
        <label for="">password</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="password" name="passwordRepeat" id="confirmPassword" required minlength="4" maxlength="10" onfocusout="confirmPasswordValidation()">
        <p class="hint">hi</p>
        <label for="">confirm password</label>
      </div>
      <div class="input-box">
        <input type="file" required class="custom-file-input" id="select_image" name="image" onchange="putImage()" />
      </div>
      <button type="submit" class="registerBtn" name="submit" value="Register">Register
      </button>
      <div class="login">
        <p>
          have an account?
          <a href="#" class="login-link">Login</a>
        </p>
      </div>
    </form>
  </div>
  <?php
    require_once "DB_Ops.php";
  ?>
  <div class="popupApi">
    <div class="title"></div>
    <div class="events">
      </div>
  </div>
  <?php
  include 'footer.php';
  ?>
  <!-- end include the footer file  -->

  <!-- js functions -->
  <script src="main.js"></script> 
  <!-- <script src="API.js"></script>  api by fetch js -->
  <!-- js functions -->

</body>

</html>