<?php require 'header-1.php'; ?>
if(isset($_POST['signup'])){
	
	if($_POST['userpass'] === $_POST['rpass']){
		$username  = $_POST['username'];
		$userpass  = $_POST['userpass'];
		$useremail  = $_POST['email'];
		$userphone = $_POST['phone'];
		$user = new users();
		$user->name = $username;
		$user->pass = $userpass;
		$user->email = $useremail;
		$user->phone = $userphone;
		$user->save();
	}else {
		echo "you have to type the same password";
	}
	
}


  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
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
  
<?php require 'footer.php'; ?>
