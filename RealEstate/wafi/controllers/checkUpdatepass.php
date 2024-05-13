<?php
session_start();
require "../model/matchPass.php";



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $CUpassword = sanitize($_POST['cpass']);
    $CNpassword = sanitize($_POST['cnpass']);
    $Npassword = sanitize($_POST['npass']);
   // $email=sanitize($_POST['email']);

    if (empty($CUpassword) or empty($CNpassword) or empty($Npassword)) {
        $_SESSION['message'] = "Please fill up the form properly.";
    }
    else {

       
        credentials( $CUpassword,$Npassword , $CNpassword);
        //if ($isValid) {

            
           // $_SESSION['hasLoggedIn'] = $username;
            //header("Location: ../views/Admin-dashboard.php");
           //header("Location: ../views/updatePass.php");
           //$_SESSION['error'] = "update successful";
          
           // exit();
    // }
       
    }

    header("Location: ../views/updatePass.php");
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>