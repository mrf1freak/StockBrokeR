<?php
	require("connect.php");
	require("user.class.php");
	session_start();

	if(empty($_SESSION['user'])){
		header("Location: index.php");
	}
?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>HOME</title>
	</head>
	<body>
		<h1>WELCOME <?php echo $_SESSION['user']->firstName . " " . $_SESSION['user']->lastName . "<br>" ?></h1>
		<h2><?php echo $_SESSION['user']->money ?> </h2>
		<a href="logout.php">LOGOUT</a>
	</body>
	</html>