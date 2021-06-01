<?php require_once'header.php';?>
<?php  
require_once'db_config.php';
$id = $_POST['id'];
$institutionNameTextFieldValue = $_POST['education_institution_name'];
$passingYearTextFieldValue = $_POST['pass_year'];
$profile_pic = 

$sql = "UPDATE user_details SET education_institution_name='$institutionNameTextFieldValue',pass_year='$passingYearTextFieldValue' WHERE user_id='$id'";
$result = mysqli_query($db_connection,$sql);
if($result){
    echo "Update Successfully!";
    // header('location:profile.php');
}else{  
    echo "Failed";
}
?>
<?php require_once'footer.php';?>