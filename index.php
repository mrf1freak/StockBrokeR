<?php
	require("connect.php");
	session_start();

	if(!empty($_SESSION['user'])){
		header("Location: home.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StockBrokR</title>
	<link rel="icon" href="images.png" />
</head>
<body>
	<form action="login.php" method="POST">
		<input type="text" name="email">
		<input type="password" name="password">
		<input type="submit">
	</form>
</body>
</html>