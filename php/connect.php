<?php
	$dbhost = "sql9.freemysqlhosting.net";
	$dbuser= "sql9323976";
	$dbpass = "zNn8VRF5gS";
	$dbname = "sql9323976";
	$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
	if (mysqli_connect_errno()) {
		die("Database connection failed :" .
		mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
		}
?>