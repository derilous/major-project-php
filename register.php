<?php
	include("header-footer/header.php");
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title>X TITAN</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
</head>
<body>
	<?php

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>




	<div id="background">

		<div  id="loginContainer">

			<div id ="inputContainer">
				<form id="loginForm" action="register.php">
					<h2>Login To Your Account</h2> 
				<p>
					<?php echo $account->getError(Constants::$loginFailed); ?>
					<label for="loginEmail">Email</label>
					<input  id="loginEmail" name="loginEmail" type="text"  placeholder="e.g mohsin55@gmail.com" value="<?php getInputValue('loginEmail') ?>"  required>

				</p>
					
				<p>
					<label for="loginPassword">Password</label>
					<input  id="loginPassword" name="loginPassword" type="password" placeholder="Your Password"  required>
				</p>

				<button type="submit" name="loginButton">LOG IN</button>

				<div class="hasAccountText">
					<span id="hideLogin">Don't have an account yet? Sign up here.</span>
				</div>
					
				</form>

				

				<form id="registerForm" method="POST"> 
					<h2>Register Here</h2>

				

				<p>
					<?php echo $account->getError(Constants::$firstNameCharacters); ?>
					<label for="firstName">First Name</label>
					<input  id="firstName" name="firstName" type="text"  placeholder="e.g Mohsin" required>

				</p>

				<p>
					<?php echo $account->getError(Constants::$lastNameCharacters); ?>
					<label for="lastName">Last Name</label>
					<input  id="lastName" name="lastName" type="text"  placeholder="e.g Habiya" required>

				</p>

				<p>
					<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
					<?php echo $account->getError(Constants::$emailInvalid); ?>
					<?php echo $account->getError(Constants::$emailTaken); ?>
					<label for="email">Email</label>
					<input  id="email" name="email" type="email"  placeholder="e.g mohsin55@gmail.com" required>

				</p>

				<p>
					<label for="email2">Confirm Email</label>
					<input  id="email2" name="email2" type="email"  placeholder="e.g mohsin55@gmail.com" required>

				</p>


					
				<p>
					<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
					<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
					<?php echo $account->getError(Constants::$passwordCharacters); ?>
					<label for="password">Password</label>
					<input  id="password" name="loginPassword" type="password" placeholder="Your Password" required>
				</p>

				<p>
					<label for="password2">Confirm Password</label>
					<input  id="password2" name="password2" type="password" placeholder="Your Password" required>
				</p>

				<button type="register" name="registerButton">SIGN UP</button>

				<div class="hasAccountText">
					<span id="hideRegister">Already have an account? Log in here.</span>
				</div>
					
				</form>
					
				</form>

			</div>

			<div id="loginText">
				<h1>X TITAN</h1>
				<h2>The world's catalog right to your doorstep</h2>
				<ul>
					<li>Discover the best products around you</li>
					<li>Weekly discounts & special promotions</li>
					<li>Up to 90% discount during special shopping events </li>
				</ul>
			</div>

		</div>
	</div>		
</body>
</html>