
<?php

    session_start();
	if($_SESSION["islogin"]==0)
	{
		header('Location: index.php ');
		
	}

$stdid=$_POST['stdid'];
$stdname=$_POST['stdname'];
$stdroll=$_POST['stdroll'];
$stddob=$_POST['stddob'];
$stdphone=$_POST['stdphone'];

$servername = "localhost";
$username = "user";
$password = "user123";
$db_name="enroll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

$sql="UPDATE student SET std_name='".$stdname."', std_roll='".$stdroll."', std_dob='".$stddob."', std_phone='".$stdphone."' where std_id='".$stdid."'";
 if(mysqli_query($conn,$sql)==true)
 {
	 
	 
 }
 else
 {
	 echo "Error.<a href='dashboard.php'>Back to dashboard.</a>";
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
<h1>STUDENT INFORMATION UPDATED SUCCESSFULLY</h1>
<?php
$servername = "localhost";
$username = "user";
$password = "user123";
$db_name="enroll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

$sql="SELECT * FROM student";
 if(mysqli_query($conn,$sql)==true)
 {
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["std_id"]. " - Name: " . $row["std_name"]. " - Roll " . $row["std_roll"]." - DOB " . $row["std_dob"]." - Phone " . $row["std_phone"]. "<br>";
		}
	} else {
    echo "0 results";
}

	 
 }
 else
 {
	 echo "Error.<a href='dashboard.php'>Back to dashboard.</a>";
 }
 



?>






</body>
</html>

