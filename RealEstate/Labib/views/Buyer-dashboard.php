<?php

include ("../controllers/check_login.php");


	if (!isset( $_SESSION['username'] )) {
		header("Location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head><title>Buyer Dashboad</title>
<link href="dashboard.css" rel="stylesheet">
</head>
<body>
<fieldset id="fld1">
<table id="byrid1">
<tr style="height:40px">
    <th align="center"><p style="font-size:130%;">Welcome <?php echo  $_SESSION['username'] ; ?></p></th>
    <th align="center"></th> 
    <th align="center"><a href="updatePass.php" >Change Password</a></th> 
    <th align="center"><form action="../views/profile.php" method="post">
    <table><tr><td>  <input type="hidden" name="$_SESSION['username']" ></td>
     <td> <input type="submit" value="Profile" id="bt4"></td></tr></table></form>
    </th>
    <th align="center"><a href="../controllers/logout.php">Log out</a></th> 
  </tr></table></fieldset>


  

  <table id="tbl1"><tr><th><a href="property.php" >Property</a></th></tr>
  <tr><th>Favourites</th></tr>
  <tr><th>Communication</th></tr>
  <tr><th>Transaction</th></tr>
</table>

     
      </body>
</html>
