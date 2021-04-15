<?php 
session_start();
if(isset($_SESSION['user_id'])){
 //"header('location : index.php ')";
  echo "<script>window.location.href='dashboard.php';</script>";
}
?>
<?php
$db = mysqli_connect("localhost","root","","blog-site");
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  $sql = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
    $run = mysqli_query($db , $sql);
    if(mysqli_num_rows($run) ==1){
     
      $row = mysqli_fetch_assoc($run);
     //session_start();
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['name'] = $row['name']; 
      $_SESSION['user_name'] = $row['username'];
   echo "<script>window.location.href='dashboard.php';</script>";

  }else{
      $loginError = "Username or Password Invalid";
      echo $loginError;
  }
 }


?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:06:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="#" method="POST">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Username" autofocus name="username">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href=""> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="login">Log In</button>
            
           <p><?= ucwords( isset($loginError)? $loginError:'')  ?></p>

           <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.php">
                    Create an account
                </a>
            </div>

        </div>
        

       

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


  </body>

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:06:10 GMT -->
</html>
