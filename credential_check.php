<?php
require_once'db_config.php';
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db_connection, $_POST['username']);
  $password = mysqli_real_escape_string($db_connection, md5($_POST['password']));
  
  $sql = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
    $run = mysqli_query($db_connection , $sql);
    if(mysqli_num_rows($run) ==1){
     
    //   $row = mysqli_fetch_assoc($run);
    //  //session_start();
    //   $_SESSION['user_id'] = $row['id'];
    //   $_SESSION['name'] = $row['name']; 
    //   $_SESSION['user_name'] = $row['username'];
   echo "<script>window.location.href='dashboard.php';</script>";

  }else{
      $loginError = "Username or Password Invalid";
      echo $loginError;
  }
 }
 exit;
//add-category
if(isset($_POST['add-category'])){
  $category_name = $_POST['category_name'];
  $status = $_POST['status'];
  $sql = "INSERT INTO category(category_name, status) VALUES ('$category_name','$status')";
  $result = mysqli_query($db,$sql);
  if($result){
    $insert_msg = "Category Save Success";
    //echo $insert_msg;
}else{
   $insert_msg = "Category Not Save";
   //echo $insert_msg;
}
echo "<script>window.location.href='add-category.php';</script>";

}


// manage category
$sql = "SELECT * FROM category";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count > 0){
  echo "Data successfully show!";
}
return $result;
?>