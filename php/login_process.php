<?php
session_start();
include 'connection.php'; // Include your database connection file here

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the login form data
   $username = $_POST['username'];
   $password = $_POST['password'];

   // Implement your login verification logic here
//    $hashedPassword = md5($password); // Not recommended, use a stronger hashing algorithm

   // Perform the login verification
   if (verifyLogin($connection, $username, $password)) {
      // Login successful
      echo 'success';
   } else {
      // Login failed
      echo 'error'; // You can return a more descriptive error message if needed
   }
}

// Function to verify login credentials against the database
function verifyLogin($connection, $username, $password) {
   // Implement your database query here to check the user credentials using prepared statements
   $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
   $stmt = mysqli_prepare($connection, $sql);
   mysqli_stmt_bind_param($stmt, "ss", $username, $password);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   $user = mysqli_fetch_assoc($result);

   if ($user) {
      return true; // Login successful
   } else {
      return false; // Login failed
   }
}
?>