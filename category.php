<?php 
require_once 'db_config.php';

//add category
if(isset($_POST['add-category'])){
    $category_name = $_POST['category_name'];
    $status = $_POST['status'];
  $sql = "INSERT INTO category(category_name, status) VALUES ('$category_name','$status')";
 $result = mysqli_query($db_connection,$sql);
    if($result){
      session_start();
      $_SESSION['msg'] = "Category Save Success";
  }else{
    $_SESSION['msg'] = "Category noy Save";
  }
  echo "<script>window.location.href='add-category.php';</script>";
  }
  exit;
  
  // manage category
  $sql = "SELECT * FROM category";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  if($count > 0){
    echo "Data successfully show!";
  }
  return $result;
  ?>