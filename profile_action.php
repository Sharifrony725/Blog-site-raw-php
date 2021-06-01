<?php 
if(isset($_POST['add-profile'])){
require_once'db_config.php';
$education_institution_name = $_POST['education_institution_name'];
$pass_year = $_POST['pass_year'];
$profile_pic = $_FILES['profile_pic'];
$name = $profile_pic['name'];
$type= $profile_pic['type'];
$tmp_name = $profile_pic['tmp_name'];
$size = $profile_pic['size'];
    floor($size/1000). ' KB';
     if(!empty($name)){
        $location = "upload/";
        if(move_uploaded_file($tmp_name,$location.$name)){
            echo "Success";
        }else{
            echo "Failed";
        }
    }
$sql = "INSERT INTO user_details(education_institution_name, pass_year,profile_pic) VALUES ('$education_institution_name','$pass_year','$profile_pic')";
$result = mysqli_query($db_connection,$sql);
if($result){
   echo "User Profile Insert Successfully";
}
else{
    echo "User Profile didn't Update";
   }
}
?>