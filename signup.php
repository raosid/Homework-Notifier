<?php
	
	/*
	Author: Sid Rao
	file: signup.php
	Updates the databases with the information of the new user. If the
	user has not provided complete information, redirects back to the 
	homepage.
	*/
	
	$firstName = htmlspecialchars($_POST["first_name"]);
	$lastName = htmlspecialchars($_POST["last_name"]);
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);
	$type = htmlspecialchars($_POST["type"]);


	//Checking if the user entered all the required information or not.
	if (!isset($_POST["type"]) || empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
		header("Location: index.php?error=true");
		die;
	}
	
	print_r($_POST);
?>