<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="dashboard.css" rel="stylesheet">
</head>
<body>
<h1 align="center">Change Password</h1>
<form action="../controllers/checkUpdatepass.php" method="post">
  
        <table align="center">
            <tr>
            <td>
                
                                <fieldset>
                                    
                                    <table width="">
                                        <tr>
                                              
                                              
                                              <tr>
                                              <td><p > <br> <label for="cpass">Current Password:</p></td></label>
                                                <td><br><input type="password" id="cpass" name="cpass"></td><td>          </td></tr>

                                                <tr>
                                              <td><p > <br> <label for="npass">New Password:</p></td></label>
                                                <td><br><input type="password" id="npass" name="npass"></td><td>          </td></tr>
                                                
                                                <td><p align="center">  <label for="cnpass">Confirm Password:</p></td></label>
                                               <td> <input type="password" id="cnpass" name="cnpass"></td><td>    </td></tr>

                                               <tr> <td colspan="1"><a href="Seller-dashboard.php" >Back</a></td>

                                               
                                            <td colspan="1"><input type="submit" value="Update" id="btn5"></td></tr>

                                         
                                            
                                                  
                                           </table>  
                                </fieldset>
                                <?php
		//echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
    echo isset($_SESSION['message'] ) ? $_SESSION['message']  : "";
    
	?>
                                  </td></tr></table></form>
                                                
         
                        
                        

</body>
</html>