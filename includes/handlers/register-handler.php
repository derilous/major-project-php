<?php

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ","", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}



if (isset($_POST['registerButton'])){
	// register button is pressed
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['loginPassword']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true)  {
		header("Location: major-project-php");
	}

}


?>