<?php

function DeleteUser($username) {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql="DELETE FROM USERS WHERE username='$username'";
	if($conn->query($sql)=== true)
	{
return true;
	}
}
?>