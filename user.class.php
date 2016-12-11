<?php
	class User {
	 	public $firstName;
	 	public $lastName;
	 	public $email;
	 	public $money;

	 	function __construct($signin_email){
	 		require("connect.php");
	 		if($result = $conn->query("SELECT * FROM users WHERE email='$signin_email'")){
	 			$result = mysqli_fetch_object($result);
		 		$this->firstName = $result->firstName;
		 		$this->lastName = $result->lastName;
		 		$this->email = $result->email;
		 		$this->money = "$" . number_format(intval($result->money)/100, 2, ".", ",");
	 		}
	 		
	 	}
 }
?>