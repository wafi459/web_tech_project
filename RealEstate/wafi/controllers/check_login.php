<?php

session_start();

require "../model/function.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$username = sanitize($_POST['uname']);
	$password = sanitize($_POST['pass']);

	if (empty($username) or empty($password)) {
		$_SESSION['error'] = "Please fill up the form properly.";
	}
	else {
		$isValid = fetch($username, $password);
		if ($isValid) {
			$_SESSION['username']  = $username;
			header("Location: ../views/Admin_dashboard.php");
			exit();
		}
		else {
			$_SESSION['error'] = "Username or password incorrect.";
		}
	}

	header("Location: ../views/login.php");
}

function sanitize($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>