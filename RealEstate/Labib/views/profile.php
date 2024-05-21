<!DOCTYPE html>
<html><body>
<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_SESSION['username'];


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "my_app";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,Email, password FROM BUYER WHERE username ='$username' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $Firstname = $row["username"];
    $Pass= $row["password"];
    $email=$row["Email"];
  }
} else {
  echo "0 results";
}
$conn->close();}
?>


<head><title>Buyer Profile</title>
<link href="dashboard.css" rel="stylesheet">
</head>
<table align="center" id="tb1">
    <tr><td><b>First Name:</b> <?php echo  $Firstname ?></td></tr>
    <tr><td><b>Last Name: </b><?php echo  $username ?></td></tr>
    <tr><td><b>Email: </b><?php echo $email ?></td></tr>
    <tr><td><b>Password:</b> <?php echo  $Pass ?></td>
     

     <tr> <td colspan="1"><a href="Buyer-dashboard.php" >Home</a></td>
</table></body></html>