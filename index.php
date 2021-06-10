<?php
include("includes/config.php");


if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

//session_destroy();

?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello World</title>
</head>
<body>
	<div>
		<div class="topnav">
	  <a class="active" href="#home">Home</a>
	  <a href="#news">News</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
</div>
		
	</div>
</body>
</html>