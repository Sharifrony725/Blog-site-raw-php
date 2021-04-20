<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:08:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title> Registration</title>

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

      <form class="form-signin" method="POST" action="registration_action.php">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" name="full_name" class="form-control" placeholder="Full Name" autofocus>
            <input type="text" class="form-control" placeholder="Address" name="address" autofocus>
            <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
            <input type="text" class="form-control" placeholder="City/Town" name="city" autofocus>
            <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="gender" id="gender" value="1" type="radio"  checked /> Male
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="gender" id="gender" value="2" type="radio"/> Female
                </label>
            </div>

            <p> Enter your account details below</p>
            <input type="text" class="form-control" placeholder="User Name" name="user_name" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password">
            <input type="password" class="form-control" placeholder="Re-type Password" name="confirm_password">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="index.php">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


  </body>

<!-- Mirrored from thevectorlab.net/flatlab-4/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:08:56 GMT -->
</html>
