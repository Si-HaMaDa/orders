<?php
require 'vendor/autoload.php';

require 'dbconf/dbconf.php';

use classes\User\User as user;

$user = new user();

if(isset($_POST['singup'])){
	$user->signup();
} elseif (isset($_POST['singin'])) {
	$user->signin();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="css/img/favicon.ico">

    <title>Orders Script</title>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/sign-style.css" rel="stylesheet">

  </head>

  <body>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" <?=$user->signup_data_check['checked']?>><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="name" required class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="pass" required class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="singin" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
		</form>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user1" class="label">Username</label>
					<input id="user1" type="text" name="name" required class="input">
				</div>
				<div class="group">
					<label for="pass1" class="label">Password</label>
					<input id="pass1" type="password" name="pass" required class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass2" class="label">Repeat Password</label>
					<input id="pass2" type="password" name="rpass" required class="input" data-type="password">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="text" name="email" required class="input">
				</div>
				<div class="group">
					<label for="phone" class="label">Phone Number</label>
					<input id="phone" type="text" name="phone" required class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" name="singup" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a></label>
				</div>
			</div>
		</form>
	 	</div>
	</div>
  </div>



  <footer>
	<p>&copy; 2016 Company, Inc.</p>
  </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
