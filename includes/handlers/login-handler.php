<?php

if (isset($_POST['loginButton'])) {
	// login button is pressed
	$email = $_POST['loginEmail'];
	$password = $_POST['loginPassword'];

	$result = $account->login($email, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $email;
		header("Location: index.php");
	}

}
?>