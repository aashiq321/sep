<?php
	session_start();
	if($_SESSION["islogin"]==0)
	{
		header('Location: index.php ');
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<title> Enrollment System</title>
</head>
<body align="center">
<div align="center"> 
<a href="dashboard.php" style="padding:5px; margin:10px; border:2px solid;"> HOME </a>
<a href="std_info.php" style="padding:5px; margin:10px; border:2px solid;"> STUDENT INFORMATION </a>
<a href="std_edit.php" style="padding:5px; margin:10px; border:2px solid;"> EDIT STUDENT </a>
<a href="std_delete.php" style="padding:5px; margin:10px; border:2px solid;"> DELETE STUDENT </a>
<a href="std_search.php" style="padding:5px; margin:10px; border:2px solid;"> SEARCH STUDENT </a>
<a href="index.php" style="padding:5px; margin:10px; border:2px solid;"> LOG OUT </a>
</div>
    <?php
    
    if($_SESSION["is1login"]==0)
	{
		echo "<h1>Welcome To Your Profile. You are successfully logged in.</h1>";
        
		$_SESSION["is1login"]=1;
	}
    
?>
<h1>ADD STUDENT INFO</h1>

<form action="std_add.php" method='POST'>
  Student name:<br>
  <input type="text" name="stdname" required>
  <br>
  Student Roll:<br>
  <input type="text" name="stdroll" required>
  <br>
  Student DOB:<br>
  <input type="date" name="stddob" required>
  <br>
  Student Phone:<br>
  <input type="text" name="stdphone" required>
  <br><br>
  <input type="submit" value="SUBMIT">
  
</form> 




</body>
</html>