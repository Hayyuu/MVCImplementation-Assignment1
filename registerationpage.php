<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

function validateEmail()
{
 
   var emailID = document.Formx.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       document['Formx']['email'].focus() ;
       return false;
   }
   return true;
}
//-->
</script>
<link rel="stylesheet" href="register.css" type="text/css">
</head>
<body>
<div class="container">
<h2>Registration Form</h2><br>
<?php
if(@$_GET['err']==1){?>
  <div class="error">Register with another Email</div><?php }?>

<div class="forms">
<form name="Formx" action="home.php" method="POST">
  <p>First Name</p>
  	<input type="text" placeholder="Enter first name" class="inp" name="firstname" required>
  	<br> 
  <p>Last Name</p>
  	<input type="text" class="inp" placeholder="Enter last name" name="lastname" required>
  	<br><br>
  <p>User Name</p>
  	<input type="text" class="inp" placeholder="Enter user name" name="username" required>
  	<br> 
  <p>Email</p>
  	<input type="text" class="inp" placeholder="Enter your Email" name="email" required>
  	<br> 
  <p>password</p>
    <input type="password" class="inp" placeholder="Enter password" name="password" required>
    <br><br>
  <input type="submit" id="button" name="op" value="Register" onclick="return validateEmail()"><br><br><br>
</form> 
</div>
</div>
</body>
</html>
