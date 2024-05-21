<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
  <div class="div1">
    <div class="div2">
        <h2>Admin</h2>
    </div>
    <hr class="solid">
    <a href="../views/Admin_dashboard.php">
    <button><img src="dashboard.png" alt="" width="30" height="30">&nbsp; Dashboard</button></a>

    <form action="../views/profile.php" method="post">
    <input type="hidden" name="$_SESSION['username']" >
   <button type="submit"><img src="profile.png" alt="" width="30" height="30">&nbsp; Profile</button></form>

    <button type="submit"><img src="message.png" alt="" width="30" height="30">&nbsp; Message</button>
    
    <a href="../views/property.php">
    <button ><img src="propertyicon.png" alt="" width="30" height="30">&nbsp; Property</button></a>

    <a href="../controllers/logout.php">
   <button type="submit"><img src="logout.png" alt="" width="30" height="30">&nbsp; Log out</button></a>  
  </div> 
  <div class="container">

  <div class="content-2">
   <div class="all-property">
    <div class="title">
        <h2 text-align="left">All User</h2>
    </div>
    <table>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "my_app";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username , Email ,Status   FROM USERS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Status"] . "</td>";
         echo "<td>". "<form  action='../controllers/deleteUser.php' method='post'><input type='hidden' name='username' value='".$row["username"]."'><input type='submit' value='Delete' class='delete'>"."</form></td>";
       echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


            
    
    </table>
   </div> 
  </div>
  </div> 
</body>
</html>