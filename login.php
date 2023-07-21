<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

</head>
<body>
  <div class="container">
    <form id="loginForm" method="POST">
      <div class="field">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="field">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="field btn">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
