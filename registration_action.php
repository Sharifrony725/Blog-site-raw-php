<?php 
require_once'db_config.php';
$full_name = trim($_POST['full_name']);
$address = trim($_POST['address']);
$email = trim($_POST['email']);
$city = trim($_POST['city']);
$gender = trim($_POST['gender']);
$user_name = trim($_POST['user_name']);
$password = md5($_POST['password']);
$confirm_password = md5($_POST['confirm_password']);

if($password === $confirm_password){
$sql = "INSERT INTO users(full_name, address, username, email, city, gender, password) VALUES ('$full_name','$address','$user_name','$email','$city','$gender','$password')";

 $result = mysqli_query($db_connection,$sql);
    if($result){
        $last_id = mysqli_insert_id($db_connection);
        session_start();
       $_SESSION['user_id'] = $last_id;
       $_SESSION['name'] = $full_name; 
       $_SESSION['user_name'] = $username;
        header('location:dashboard.php');
   // echo "<script>window.location.href='dashboard.php';</script>";
    }else{
        header('location:index.php');
    }
}else{
    echo"Your password does not match";
}

?>