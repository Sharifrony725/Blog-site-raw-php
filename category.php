<?php 

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