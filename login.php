<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/login.css">

  <!-- Sweetalert -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>
<body>
  <div class="logo">
    <h1>IXIECODE</h1>
    <p> Administrator </p>
  </div>
  <div class="container">
    <form id="loginForm" method="POST">
      <div class="field">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="field">
        <input type="password" name="password" placeholder="Password" id="password" required>
        <i class="far fa-eye" id="eyeicon"></i>
      </div>

      <div class="btn">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
  
  <!-- LOGIN NOTIFIER IF SUCCESS OR NOT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
  <script src="js/login.js"></script> 

  <!-- Javascript for password Visibility -->
  <script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function(){
      if(password.type == "password"){
        password.type = "text";
        eyeicon.className = "far fa-eye-slash"
      }else{
        password.type = "password";
        eyeicon.className = "far fa-eye"
      }
    }
  </script>

</body>
</html>
