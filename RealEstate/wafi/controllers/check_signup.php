<?php
session_start();
require "../model/signup_function.php";



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = sanitize($_POST['uname']);
    $password = sanitize($_POST['pass']);
    $email=sanitize($_POST['email']);

    if (empty($username) or empty($password) or empty($email)) {
        $_SESSION['error'] = "Please fill up the form properly.";
    }
    else {
        $isValid = credentials($username, $password, $email);
        if ($isValid) {
            $_SESSION['username'] = $username;
            $_SESSION['useremail']= $email;
            $_SESSION['userpass'] =  $password;

            header("Location: ../views/Admin-dashboard.php");
            exit();
        }
       
    }

    header("Location: ../views/signup.php");
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>