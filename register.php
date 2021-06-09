<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);


	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function  getInputValue($name) {
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
</head>
<body>
	<div id ="inputContainer">
		<form id="loginForm" action="register.php">
			<h2>Login to your account</h2> 
		<p>

			<label for="loginEmail">Email</label>
			<input  id="loginEmail" name="loginEmail" type="text"  placeholder="e.g mohsin55@gmail.com" required>

		</p>
			
		<p>
			<label for="loginPassword">Password</label>
			<input  id="loginPassword" name="loginPassword" type="password" placeholder="Your Password"  required>
		</p>

		<button type="submit" name="loginButton">LOG IN</button>
			
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
			
		</form>

	</div>
</body>
</html>