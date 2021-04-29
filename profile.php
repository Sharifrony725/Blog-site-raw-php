<?php 
session_start();
require_once 'header.php';
/**
   * TODO: 
   * Have to check, the user profile already exist in the user_details by user_id rom the $_SESSION['user_id];
   *  If user details have found:
   *  1.  need to show update profile button instead of add profile button
   *  2.  Have to show user details info in the form such institution name, passing year, etc.
   * 
   *  
 */

// import db config in this page
require_once 'db_config.php';
// Assign user_id from the session to new variable
// trim function remove white space from the begining and ending
$userIdFromSession = trim($_SESSION['user_id']);
// just mysql select query on the user_details table to retrive user profie information if any.
$sql = "SELECT * FROM user_details WHERE user_id='$userIdFromSession'";
$result = mysqli_query($db_connection,$sql);
if(mysqli_num_rows($result) ==1){ // here checking if the user profile information found in the user_details table
      // profile information found 
       $row = mysqli_fetch_assoc($result);
       // I keep the print_r code for checking that data already found and it's assigned into the $row variable
      //  echo '<pre>';
      //  print_r($row);
      //  echo '</pre>';
      //  exit;
      $institutionNameTextFieldValue = $row['education_institution_name'];
      $passingYearTextFieldValue = $row['pass_year'];
      $submitButtonName = "Update Profile";
      $formActionPageName = 'profile_update_action.php';

}else{
   // we assign these variable value empty string as the user profile information not found in the user_details table
   $institutionNameTextFieldValue = "";
   $passingYearTextFieldValue = "";
   $submitButtonName = "Add Profile";
   $formActionPageName = 'profile_action.php';
}
?>

<form action="<?php echo $formActionPageName;?>" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label for="education_institution_name" class="col-sm-4 col-form-label">Education Institution Name</label>
<div class="col-sm-6">
    <input name="education_institution_name"  value ="<?php echo $institutionNameTextFieldValue;?>" type="text" class="form-control" id="education_institution_name" placeholder="Education Institution Name">
   </div>
</div>

<div class="form-group row">
<label for="pass_year" class="col-sm-4 col-form-label">Passing Year </label>
<div class="col-sm-6">
    <input name="pass_year" value ="<?php echo $passingYearTextFieldValue;?>" type="text" class="form-control" id="pass_year" placeholder="Passing Year">
   </div>
</div>

<div class="form-group row">
<label for="file" class="col-sm-4 col-form-label">Profile Picture </label>
<div class="col-sm-6">
    <input name="profile_pic" type="file" class="form-control" id="profile_pic">
   </div>
</div>

<div class="form-group row">
 <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="add-profile"><?php echo $submitButtonName;?></button>
 </div>
</div>

</form>

<?php require_once 'footer.php';?>