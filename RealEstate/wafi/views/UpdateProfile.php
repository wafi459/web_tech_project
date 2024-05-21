<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>



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
        <h2 text-align="left"> Profile Update</h2>
    </div>
    <form action="../controllers/checkUpdate.php" method="post"  onsubmit="return jsValidate2();" >
  
        <table>
            <tr>
            <td>
            <?php

session_start();
$Firstname = $_SESSION['fname'];
$Lastname = $_SESSION['Lname'];
$email =$_SESSION['eMail'];
$paSS= $_SESSION['Pass'];




?>

                             <table width="">
                                        <tr>
                            <td><p align="center">  <label for="funame"><b>First Name:</b></p></td></label>
                            <td> <input type="text" id="funame" name="funame" value="<?php echo  $Firstname; ?>" ></td>
                            <td>  <span id="error1"></span>  </td></tr>

                            <tr>
                            <td><p align="center"> <br>  <label for="luname"><b>Last Name:</b></p></td></label>
                            <td> <br><input type="text" id="luname" name="luname" value="<?php echo  $Lastname; ?>" ></td>
                            <td>  <span id="error1"></span>  </td></tr>
                        <tr>
                        <td><p align="center"> <br>  <label for="emial"><b>Email:</b></label></p></td>
                        <td><br><input type="text" id="email" name="email"  value="<?php echo  $email; ?>"></td>
                        <td>  <span id="error2"></span>  </td></tr>
                        
                       
                        
                            
                    <tr><td colspan="1"><a href="Admin_dashboard.php" >Back</a></td> <br>  <td colspan="1"><input type="submit" value="Save Update"  class="delete"></td></tr>
                    
                        
                    </table>  
                                
                                  </td></tr></table></form>

  
    </div> 
  </div>
  </div> 
</body>
</html>