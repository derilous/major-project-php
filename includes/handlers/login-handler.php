<?php

if (isset($_POST['loginButton'])) {
	// login button is pressed
	$em = $_POST['loginEmail'];
	$pw = $_POST['loginPassword'];

	$result = $account->login($email, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $email;
		header("Location: index.php");

	}

}

		
?>