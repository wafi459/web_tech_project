<?php

function fetch($username, $password) {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT user_id, username, password FROM ADMIN WHERE username = ? and password = ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param("si", $username, $password );
    $stmt->execute();
	$result =$stmt->get_result();



	if ($result->num_rows === 1) {
		return true;
	}

	return false;
	$conn->close();
}

?>