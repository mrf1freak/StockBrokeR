<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "stock";
	$result = "";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("CONNECTION FAILED TO DATABASE");
	}
?>