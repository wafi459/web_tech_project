<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
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

$sql = "SELECT username,lastName,Email, password FROM ADMIN WHERE username ='$username' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    $Fristname = $row["username"];
    $Lastname=$row["lastName"];
    $Pass= $row["password"];
    $email=$row["Email"];

    $_SESSION['fname']=$Fristname;
    $_SESSION['Lname']=$Lastname;
    $_SESSION['eMail']=$email;
    $_SESSION['Pass']=$Pass;
    
  }
  
} 
else {
  echo "0 results";
}
$conn->close();}
?>




  <div class="div1">
    <div class="div2">
        <h2>Admin</h2>
    </div>
    <hr class="solid">
    <a href="../views/Admin_dashboard.php">
    <button><img src="dashboard.png" alt="" width="30" height="30">&nbsp; Dashboard</button></a>

   <button type="submit" class="fixd"><img src="profile.png" alt="" width="30" height="30">&nbsp; Profile</button>

    <button type="submit"><img src="message.png" alt="" width="30" height="30">&nbsp; Message</button>
    
    <a href="../views/property.php">
    <button ><img src="propertyicon.png" alt="" width="30" height="30">&nbsp; Property</button></a>
   
    <a href="../controllers/logout.php">
    <button type="submit"><img src="logout.png" alt="" width="30" height="30">&nbsp; Log out</button></a>  
  </div> 
  <div class="container" margin=" 50px">

  <div class="content-2">
   <div class="all-property">
    <div class="title">
        <h2 text-align="left">Admin Profile</h2>
    </div>
    <table>
        <tr>
            <th>First Name</th><td><?php echo  $Fristname ?></td> </tr>
            <tr> <th>Last Name</th><td><?php echo  $Lastname ?></td> </tr>
            <tr> <th>Email</th><td><?php echo $email ?></td> </tr>
            <tr> <th>Password</th><td><?php echo  $Pass ?></td> </tr>
           
        </tr>
        <tr><td><form action="../views/UpdateProfile.php" method="post">
    <input type="hidden" name="$_SESSION['username']" >
    <button class="delete">Update Profile</button></form></td>
   
         
         <td>   <a href="updatePass.php" ><button class="delete">Update Password</button></a>
  </td></tr>
    </table>
    </div> 
  </div>
  </div> 
</body>
</html>