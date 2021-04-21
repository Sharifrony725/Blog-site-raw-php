<?php
require_once'db_config.php';
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db_connection, $_POST['username']);
  $password = mysqli_real_escape_string($db_connection, md5($_POST['password']));
  
  $sql = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
    $result = mysqli_query($db_connection , $sql);
    if(mysqli_num_rows($result) ==1){
       $row = mysqli_fetch_assoc($result);
      session_start();
       $_SESSION['user_id'] = $row['id'];
       $_SESSION['name'] = $row['full_name']; 
       $_SESSION['user_name'] = $row['username'];
       header('location:dashboard.php');
   //echo "<script>window.location.href='dashboard.php';</script>";

  }else{
      $loginError = "Username or Password Invalid";
      echo $loginError;
  }
 }


?>