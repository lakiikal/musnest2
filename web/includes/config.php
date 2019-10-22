<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Belgrade");

	//$con = mysqli_connect("localhost", "root", "", "musnest");
	$con = mysqli_connect("remotemysql.com", "rlwjOzs3kq", "O4Adwg0qZX", "rlwjOzs3kq");
	//$con = mysqli_connect("ec2-46-137-113-157.eu-west-1.compute.amazonaws.com", "cayvbaaevicfzj", "2dbc2897726b79a5c53b7fcd70998c44d8d3aad217e600b028abfc26cc6ba1a9", "d4ur8790aa6f7");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>