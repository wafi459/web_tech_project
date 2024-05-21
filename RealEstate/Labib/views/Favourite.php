<?php
//session_start();
//$_SESSION;
include ("../controllers/check_login.php");



	if (!isset( $_SESSION['username'] )) {
		header("Location: login.php");
		exit();
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
  <div class="div1">
 <br><br><br>
    <a href="../views/Buyer-dashboard.php">
    <button type="submit"> Property</button></a>
    <br><br>
   
    <button type="submit"  class="fixd"> Favorites</button>
 <br><br>
    <button type="submit">Communication</button>
    <br><br>
    <button type="submit">Transaction</button>
    <br><br>
    <button type="submit">Support</button>
   
    
     </div> 
     <div class="container">


 <div class="all-property">
  <div class="title">
  <table>
      <tr><td><input type="text">Search</td>
        <td><a href="updatePass.php" ><button type="submit"><img src="resetpass.png" alt="" width="45" height="45"></button></a></td>
         <td><form action="../views/profile.php" method="post">
    <input type="hidden" name="$_SESSION['username']" >
   <button type="submit"><img src="profileImg.png" alt="" width="45" height="45"></button></form></td>
   <td><a href="../controllers/logout.php">
     <button type="submit"><img src="logoutImg.png" alt="" width="45" height="45"></button></a> </td>
      </tr>
   
  </table> 

  </div>
 

<?php


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "my_app";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT property_name , price ,location , details  FROM PROPERTY";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
       echo "<br>"."<fieldset >"."<table>"."<tr>"."<td >"."<b>"."Property Name: "."</b>" . $row["property_name"]."</td>". "<td>"."<b>"."  Price: " ."</b>".$row["price"]."</td>"."<td>"."<button>"."Buy"."</button>"."</td>";
       echo "<td>"."<button>"."Remove"."</button>"."</td>";
       echo "</tr>";
       echo  "<tr>". "<td>"."<b>". "  Location: " ."</b>". $row["location"]. "</td>"."<td>". "<b>"."  Property Details: " ."</b>". $row["details"]. "</td>";
       echo "<td>"."<button>"."Contact"."</button>"."</td>";
       echo "</tr>"."</table>"."</fieldset>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</div>
</div> 
</body>
</html>