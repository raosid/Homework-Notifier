<?php
	
	/*
	Author: Sid Rao
	file: signup.php
	Updates the databases with the information of the new user. If the
	user has not provided complete information, redirects back to the 
	homepage.
	*/

	set_include_path('/usr/local/php5');
	phpinfo();

	
	//$db = new PDO('mysql:host=vergil.u.washington.edu; dbname=notifier', 'root', '20olegend');
	//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$mysqli_connection = new MySQLi('vergil.u.washington.edu', 'root', '20olegend', 'notifier', 21300);
	if($mysqli_connection->connect_error){
	   echo "Not connected, error: ".$mysqli_connection->connect_error;
	}
	else{
	   echo "Connected.";
	}

	//Encoding the user input. Protecting the user from injecting code
	//using text fields.
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
	
	$type = strtolower($type . "s");
	$hash = password_hash($password, PASSWORD_DEFAULT);
	
	/*if($mysqli_connection->query("INSERT INTO $type
				VALUES ($email, $hash, $firstName, $lastName)")) {
		echo "New records saved successfully";
	} else {
		echo "error: " . $mysqli_connection->error;
	}*/

	if($mysqli_connection->query("INSERT INTO $type
				VALUES ('$email', '$hash', '$firstName', '$lastName')")) {
		echo "New records saved successfully";
	} else {
		echo "error: " . $mysqli_connection->error;
	}

?>