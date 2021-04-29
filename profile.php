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
require_once'db_config.php';
$rcv_id = $_GET['id'];

if(isset($rcv_id)){
$user_id = mysqli_real_escape_string($db_connection,$_SESSION['user_id']);
$sql = "SELECT * FROM user_details WHERE user_id='$user_id'";
$result = mysqli_query($db_connection,$sql);
if(mysqli_num_rows($result) ==1){
       $row = mysqli_fetch_assoc($result);
       $_SESSION['user_id'] = $row['user_id'];
       ?>
   <button type="submit" class="btn btn-primary" name="update-profile">Update Profile</button>
<?php  
}else{
   echo "not working";
}

}

?>




<form action="profile_action.php" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label for="education_institution_name" class="col-sm-4 col-form-label">Education Institution Name</label>
<div class="col-sm-6">
    <input name="education_institution_name" type="text" class="form-control" id="education_institution_name" placeholder="Education Institution Name">
   </div>
</div>

<div class="form-group row">
<label for="pass_year" class="col-sm-4 col-form-label">Passing Year </label>
<div class="col-sm-6">
    <input name="pass_year" type="text" class="form-control" id="pass_year" placeholder="Passing Year">
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
    <button type="submit" class="btn btn-primary" name="add-profile">Add Profile</button>
 </div>
</div>

</form>

<?php require_once 'footer.php';?>