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
    <a href="Seller-dashboard.php">
    <button type="submit"> Home</button></a>
    <br><br>
    
    <button type="submit"> Message</button>
 <br><br>
 <a href="add.php">
    <button type="submit" class="fixd">Add Property</button></a>
    <br><br>
    <a href="property.php">
    <button type="submit">View Property</button></a>
    <br><br>
    <button type="submit">Update Property</button>
   
    
     </div> 
     <div class="container">


 <div class="all-property">
  <div class="title">
  <table>
      <tr>
        <td><input type="text">Search</td>
        <td><a href="updatePass.php" ><button type="submit" class="img"><img src="resetpass.png" alt="" width="45" height="45"></button></a></td>
         <td><form action="../views/profile.php" method="post">
    <input type="hidden" name="$_SESSION['username']" >
   <button type="submit" class="img"><img src="profileImg.png" alt="" width="45" height="45"><?php echo  $_SESSION['username'] ; ?></button></form></td>
   <td><a href="../controllers/logout.php">
     <button type="submit" class="img"><img src="logoutImg.png" alt="" width="45" height="45"></button></a> </td>
      </tr>
   
  </table> 

  </div>
  <div><table><tr><td>      </td>
   <td> <form action="">
    <table>
        <tr>
        <td><label for="prname">Property Image:</label>
            <input type="text"></td>
        <td><label for="prname">Property Name:</label>
            <input type="text"></td>

            <td> <label for="prname">Property Price:</label>
            <input type="text"></td>

            <td><label for="prname">Property Area:</label>
            <input type="text"></td>
        </tr>
        <tr><td><label for="prname">Property Location:</label>
            <input type="text"></td></tr>

            <tr><td><button>Add</button></td>
            <td></td>
            <td></td>
            <td><button>Update</button></td></tr>
    </table></form></td></tr></table>
  </div>

</div>
</div> 
</body>
</html>