<?php
	ob_start();

	$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");

	$con = mysqli_connect("localhost", "root", "", "xtitan-announcement-project");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>