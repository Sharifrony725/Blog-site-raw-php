<?php 
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
$db = mysqli_connect('localhost','root','','blog-site');
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "INSERT INTO users(full_name, address, username, email, city, gender, password) VALUES ('$full_name','$address','$user_name','$email','$city','$gender','$password')";
//print_r($sql);
$result = mysqli_query($db,$sql);
if($password==$confirm_password){
    if($result){
        //echo "working";
       header('location:dashboard.php');
    }else{
        //echo "Not Working";
        header('location:index.php');
    }
}else{
    echo"Your password does not match";
}

?>