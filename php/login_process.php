<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

session_start();
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // Verify login credentials
   if (verifyLogin($conn, $username, $password)) {
      $_SESSION['username'] = $username; // Set session variable for logged-in user
      echo json_encode(['status' => 'success', 'message' => 'Login successful']);
   } else {
      echo json_encode(['status' => 'error', 'message' => 'Login failed. Please check your credentials!']);
   }
}

function verifyLogin($conn, $username, $password) {
   $sql = "SELECT password FROM admin WHERE username = ?";
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   $user = mysqli_fetch_assoc($result);

   if ($user && password_verify($password, $user['password'])) {
      return true; // Login successful
   } else {
      return false; // Login failed
   }
}
?>
