<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Belgrade");

	$con = mysqli_connect("remotemysql.com", "rlwjOzs3kq", "O4Adwg0qZX", "rlwjOzs3kq");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>