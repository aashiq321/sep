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
<a href="std_info.php" style="padding:5px; margin:10px; border:2px solid;">STUDENT INFORMATION </a>
<a href="std_edit.php" style="padding:5px; margin:10px; border:2px solid;"> EDIT STUDENT </a>
<a href="std_delete.php" style="padding:5px; margin:10px; border:2px solid;"> DELETE STUDENT </a>
<a href="std_search.php" style="padding:5px; margin:10px; border:2px solid;"> SEARCH STUDENT </a>
<a href="index.php" style="padding:5px; margin:10px; border:2px solid;"> LOG OUT </a>
</div>
<h1>SEARCH STUDENT INFORMATION</h1>
<form action='search_action.php' method='post'>
    <input type='text' name='search_key' required>
    <input type='submit' value='SEARCH'>
    
    </form>

</body>
</html>