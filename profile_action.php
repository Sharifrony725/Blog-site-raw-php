<?php 
require_once'db_config.php';
$education_institution_name = $_POST['education_institution_name'];
$pass_year = $_POST['pass_year'];
$profile_pic = $_FILES['profile_pic'];
$file_name = $profile_pic['tmp_name'];
$destination = $profile_pic['name'];
//if(move_uploaded_file($file_name,"upload/".$destination));
$sql = "INSERT INTO user_details(education_institution_name, pass_year,profile_pic) VALUES ('$education_institution_name','$pass_year','$destination')";
$result = mysqli_query($db_connection,$sql);

if($result){
move_uploaded_file($file_name,"upload/".$destination);
header('location:profile.php');
}
else{
    echo "not working";
}
?>