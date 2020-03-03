<?php
	session_start();
	$_SESSION["islogin"]=0;
?>
<!DOCTYPE html>
<html>
<head>
<title> Enrollment System</title>
</head>
<body align="center">

<h1>Welcome To New Enrollment System</h1>

<h1>LogIn</h1>

<form action="login_action.php" method='POST'>
  User name:<br>
  <input type="text" name="username" required>
  <br>
  Password:<br>
  <input type="password" name="password" required>
  <br><br>
  <input type="submit" value="login">
  <a href="singup.php" style="border:2px solid" >SingUp</a>
</form> 



</body>
</html>