<?php

session_start();

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'trxsrn' && $password == 'Sb19sakalam!')
{
   header("location:users/admin/dashboard.php");
}

   header("location: ../error_pages/invalid_credential.html");
?>
