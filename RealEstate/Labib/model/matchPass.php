<?php

function credentials( $CUpassword,$Npassword , $CNpassword) {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";
if($Npassword === $CNpassword)
	{
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT user_id,username, password FROM BUYER WHERE  password = ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param("i", $CUpassword );
    $stmt->execute();
	$check =$stmt->get_result();

	if ($check->num_rows === 1) {
		$sql_1 = "UPDATE BUYER SET password = ?  WHERE password = ?";
		$stmt=$conn->prepare($sql_1);
		$stmt->bind_param("ii" ,$Npassword,$CUpassword );
		$result =$stmt->execute();

		
		if($result === TRUE)
		{
			$_SESSION['message'] = "update successful";
			}
		
	}  
  

else
{
	$_SESSION['message'] = "Corrent password does not matched!";
	//$conn->close();  
}

	
}

else{
	header("Location: ../views/updatePass.php");
	$_SESSION['message'] =  "New password and Confirm password does not match";
}}
?>