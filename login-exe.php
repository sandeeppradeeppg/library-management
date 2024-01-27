<?php
session_start();
require_once('database.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query = "SELECT * from admin where username = '$username' AND password = md5('$password') AND status='1'";
$result = mysqli_query($con , $query);
if(mysqli_num_rows($result)==1){
  session_start();
  $_SESSION['auth']='true';
  header('location:dashboard.php');
}
else{
  $_SESSION['ERROR_MSG']="Invalid user";

  echo 'Wrong username or password';
  header('location:login.php');

  }

?>