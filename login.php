<?php
	require("connect.php");
	require("user.class.php");

	$sentEmail = $_POST['email'];
	$sentPassword = $_POST['password'];

	echo "EMAIL: " . $sentEmail . "<br>";
	echo "PASSWORD: " . $sentPassword . "<br>";

	$query = "SELECT * FROM users WHERE email='$sentEmail'";
	$result = $conn->query($query);

	if(mysqli_num_rows($result) === 1){
		echo "Correct Email <br>";

		mysqli_free_result($result);
		$query = "SELECT password FROM users WHERE email='$sentEmail'";
		$result = $conn->query($query);

		if(mysqli_fetch_row($result)[0] === $sentPassword){
			echo "Correct Password <br>";
			session_start();
			$_SESSION['user'] = new User($sentEmail);
			header("Location: home.php");
		} else {
			echo "Incorrect Password <br>";
		}
	} else {
		echo "Incorrect Email";
	}


?>