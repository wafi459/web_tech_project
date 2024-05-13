<?php
session_start();
require "../model/matchUser.php";



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = sanitize($_POST['uname']);
    $password = sanitize($_POST['pass']);
    $email=sanitize($_POST['email']);

    if (empty($username) or empty($password) or empty($email)) {
        $_SESSION['message1'] = "Please fill up the form properly.";
    }
    else {

         credentials($username, $email , $password);
      
       
    }

    header("Location: ../views/forgotPass.php");
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>