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
        <tr>
            <td>user1</td>
            <td>user1@gmail.com</td>
            <td>Buyer</td>
            <td><button class="delete">Delete</button></td>
        </tr>
        <tr>
            <td>user2</td>
            <td>user2@gmail.com</td>
            <td>Seller</td>
            <td><button class="delete">Delete</button></td>
        </tr>
    </table>
   </div> 
  </div>
  </div> 
</body>
</html>