<?php require_once 'header.php';?>

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