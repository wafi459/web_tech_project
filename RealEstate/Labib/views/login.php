<?php
session_start();
//type="text/javascript"
?>
<!DOCTYPE html>
<html>
<head><link href="dashboard.css" rel="stylesheet">
<script  src="js_validation.js"></script>
</head>
<body>
<h1 >Log in</h1>
<form action="../controllers/check_login.php" method="post"  onsubmit="return jsValidate();">
  
        <table align="center">
            <tr>
            <td>
                
                                <fieldset  id="fld2">
                                    
                                    <table width="">
                                        <tr>
                                              <td><p align="center">  <label for="uname">Username:</p></td></label>
                                               <td> <input type="text" id="uname" name="uname"></td>
                                               <td>   <span id="error1"> </td></tr></span>

                                              
                                              <tr>
                                              <td><p > <br> <label for="pass">Password:</p></td></label>
                                                <td><br><input type="password" id="pass" name="pass"></td>
                                                <td>  <span id="error2"></span>  </td></tr>
                                                
                                                 
                                          <tr><td>    </td>  <td colspan="1"><input type="submit" value="Log in" id="bt1"></td></tr>

                                          <tr>  <td colspan="1"><a href="signup.php" >Click to Sign up</a></td></tr>
                                          <tr>  <td colspan="1"><a href="forgotPass.php" >Forgot password?</a></td></tr>
                                          
                                                  
                                           </table>  
                                </fieldset>
                                <?php
		echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
	?>
                                  </td></tr></table></form>
                                                
         
                        
                        

</body>
</html>