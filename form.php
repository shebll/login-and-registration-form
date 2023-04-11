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
    <span class="close"><ion-icon name="close-outline"></ion-icon></span>
    <form action="" method="post" class="form-login">
      <h2>login</h2>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="email" required>
        <label for="">email</label>
      </div>
      <div class="input-box">
      <span class="icon">
          *
        </span>
        <input type="password" required minlength="8" maxlength="15">
        <label for="">password</label>
      </div>
      <div class="remember">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password ?</a>
      </div>
      <button type="submit" class="loginBtn">Login</button>
      <div class="register">
        <p>
          Don`t have an account?
          <a href="#" class="register-link">Register</a>
        </p>
      </div>
    </form>  
    <form action="" method="post" class="form-register">
      <h2>Register</h2>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" required>
        <label for="">full name</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" required>
        <label for="">user name</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="email" required>
        <label for="">email</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="date" id="date1" required>
        <span class="IMDPAPIBtn">actors</span>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="text" required minlength="11" maxlength="11">
        <label for="">phone</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span> 
        <input type="text" required >
        <label for="">address</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="password" required minlength="8" maxlength="15">
        <label for="">password</label>
      </div>
      <div class="input-box">
        <span class="icon">
          *
        </span>
        <input type="password" required minlength="8" maxlength="15">
        <label for="">confirm password</label>
      </div>
      <button type="submit" class="registerBtn">register</button>
      <div class="login">
        <p>
          have an account?
          <a href="#" class="login-link">Login</a>
        </p>
      </div>
    </form> 
  </div>
  <div class="popupApi">
    <div class="title"></div>
    <div class="events">
    </div>
  </div>
  <!-- start the main form login   -->
  
  <!-- start include the footer file  -->
  <?php 
    include 'footer.php';
  ?>
  <!-- end include the footer file  -->

  <!-- js functions -->
  <script src="main.js"></script>
  <script src="api.js"></script>
  <!-- js functions -->
  <!-- script for icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- script for icons -->
</body>
</html>