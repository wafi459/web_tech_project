<?php

session_start();

require "../model/Delete.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];

$isValid=false;
$isValid= DeleteUser($username);
   
	if(isValid===ture)
    {
        header("Location: ../views/user.php");
    }
}
?>