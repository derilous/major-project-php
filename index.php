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

	<?php
echo "hello motherfucker";
	?>

</body>
</html>