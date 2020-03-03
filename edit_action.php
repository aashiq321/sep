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
<h1>Edit Student Information</h1>


<?php
	$stdid = $_GET["std_id"];
	
	$servername = "localhost";
$username = "user";
$password = "user123";
$db_name="enroll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

$sql="SELECT * FROM student where std_id='".$stdid."'";
 if(mysqli_query($conn,$sql)==true)
 {
	$result = mysqli_query($conn, $sql);

	
		// output data of each row
		$row = mysqli_fetch_assoc($result);
			
		
}

	 
 
 else
 {
	 echo "Error.<a href='dashboard.php'>Back to dashboard.</a>";
 }
 



?>

<form action="update_action.php" method='POST'>
  <input type="hidden" name="stdid" value="<?php echo $row['std_id'];?>">
  Student name:<br>
  <input type="text" name="stdname" value="<?php echo $row['std_name'];?>" required>
  <br>
  Student Roll:<br>
  <input type="text" name="stdroll" value="<?php echo $row['std_roll'];?>" required>
  <br>
  Student DOB:<br>
  <input type="date" name="stddob" value="<?php echo $row['std_dob'];?>" required>
  <br>
  Student Phone:<br>
  <input type="text" name="stdphone" value="<?php echo $row['std_phone'];?>" required>
  <br><br>
  <input type="submit" value="UPDATE">
  
</form> 




</body>
</html>