<?php

function credentials($username, $password, $email) {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	


    $sql = "INSERT INTO BUYER (username, password, Email) VALUES(? ,?, ?)";
	$stmt =$conn->prepare($sql);
	$stmt->bind_param("sss", $username, $password, $email);
    $result = $stmt->execute();
    if ($result->num_rows === 1) {
		
		return true;
	}

	return false;


$conn->close();
}

?>