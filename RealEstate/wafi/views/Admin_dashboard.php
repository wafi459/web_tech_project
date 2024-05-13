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
    <title>Admin Panel</title>
</head>
<body>
  <div class="div1">
    <div class="div2">
        <h2>Admin</h2>
    </div>
    <hr class="solid">
    
    <button class="fixd"><img src="dashboard.png" alt="" width="30" height="30">&nbsp; Dashboard</button>

    <form action="../views/profile.php" method="post">
    <input type="hidden" name="$_SESSION['username']" >
   <button type="submit"><img src="profile.png" alt="" width="30" height="30">&nbsp; Profile</button></form>
   
    <button type="submit"><img src="message.png" alt="" width="30" height="30">&nbsp; Message</button>
   <!-- <a href="../views/login.php">
    <button >Test</button></a> -->

    <a href="../views/property.php">
    <button type="submit"><img src="propertyicon.png" alt="" width="30" height="30">&nbsp; Property</button></a>
    
     <a href="../controllers/logout.php">
     <button type="submit"><img src="logout.png" alt="" width="30" height="30">&nbsp; Log out</button></a>  
  </div> 
  <div class="container">

  <div class="content">
    <div class="cards">
        <div class="card">
            <div class="box">
                <h1>123</h1>
                <h3><a href="../views/Users.php">
    <button id="btn-user">Users</button></a></h3>
            </div>
            <div class="icon-class"><img src="user.png" alt=""></div>
        </div>
        <div class="card">
            <div class="box">
                <h1>123</h1>
                <h3><a href="../views/property.php">
    <button id="btn-user">Property</button></a></h3>
            </div>
            <div class="icon-class"><img src="property.png" alt=""></div>
        </div>
        <div class="card">
            <div class="box">
                <h1>23</h1>
                <h3>Transaction</h3>
            </div>
            <div class="icon-class"><img src="transaction.png" alt=""></div>
        </div>
        
   
        <div class="card">
            <div class="box">
                <h1>12</h1>
                <h3>Pending Request</h3>
            </div>
            <div class="icon-class"><img src="pending.png" alt=""></div>
        </div>
    </div>
    <div class="content-2"></div>
  </div>
  </div> 
</body>
</html>