<?php

function credentials($username, $email,$password) {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}



	$sql = "SELECT user_id,username, Email FROM ADMIN WHERE username=? and Email = ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ss",$username,$email);
	$stmt->execute();

	$checkUser =$stmt->get_result();

	if ($checkUser->num_rows === 1) {
		$sql_1 = "UPDATE ADMIN SET password = ? WHERE username = ? ";
		$stmt=$conn->prepare($sql_1);
		$stmt->bind_param("is", $password, $username );
		$result = $stmt->execute();

		if($result === TRUE)
		{
			$_SESSION['message1'] = "update successful";
			}
		
	}  
  

else
{
	$_SESSION['message1'] = "No user found!";
	$conn->close();  
}
}

?>