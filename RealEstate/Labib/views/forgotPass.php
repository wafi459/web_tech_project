<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="dashboard.css" rel="stylesheet">
 <script  src="signupJS.js"></script>
</head>
<body>
<h1 align="center">Forgot Password</h1>
<form action="../controllers/checkForgotpass.php " method="post" onsubmit="return jsValidate2();">
  
        <table align="center">
            <tr>
            <td>
                
                                <fieldset id="fld3">
                                    
                                    <table width="">
                                        <tr>
                                              <td><p align="center">  <label for="uname">Username:</p></td></label>
                                               <td> <input type="text" id="uname" name="uname"></td>
                                               <td>  <span id="error1"></span>  </td></tr>


                                             <tr>
                                              <td><p align="center"> <br>  <label for="emial">Email:</label></p></td>
                                               <td><br><input type="text" id="email" name="email"></td>
                                               <td>  <span id="error2"></span>  </td></tr>
                                              
                                              <tr>
                                              <td><p > <br> <label for="pass">Password:</p></td></label>
                                                <td><br><input type="password" id="pass" name="pass"></td>
                                                <td>  <span id="error3"></span>  </td></tr> 
                                                
                                                <tr>   
                                          <td>    </td>  <td align="center"><input type="submit" value="Reset" id="bt3"></td></tr>
                                          <tr><td colspan="1"><a href="login.php" >Go to Login</a></td></tr>
 
                                                  
                                           </table>  
                                </fieldset>
                                <?php
		echo isset($_SESSION['message1']) ? $_SESSION['message1'] : "";
	?>
                                  </td></tr></table></form>
                                                
         
                        
                        

</body>
</html>