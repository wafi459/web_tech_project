<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Sanitize input data
    $FirstName = sanitize($_POST['funame']);
    $LastName = sanitize($_POST['luname']);
    $Email = sanitize($_POST['email']);
    $paSS = $_SESSION['Pass'];

    // Validate input data
    if (empty($FirstName) || empty($LastName) || empty($Email)) {
        $_SESSION['message'] = "Please fill up the form properly.";
        header("Location: ../views/UpdateProfile.php");
        exit();
    } else {
        // Database connection
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "my_app";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement
        $sql = "UPDATE ADMIN SET username = ?, lastName = ?, Email = ? WHERE password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $FirstName, $LastName, $Email, $paSS);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Update successful.";
            header("Location: ../views/Admin_dashboard.php");
            $_SESSION['username']=$FirstName;
            exit();
        } else {
            $_SESSION['message'] = "Update failed.";
            header("Location: ../views/UpdateProfile.php");
            exit();
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}

// Function to sanitize input data
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
