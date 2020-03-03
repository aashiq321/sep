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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body align="center">
<div align="center"> 
<a href="dashboard.php" type="button" class="btn btn-primary"> HOME </a>
<a href="std_info.php" class="btn btn-primary"> STUDENT INFORMATION </a>
<a href="std_edit.php" class="btn btn-primary"> EDIT STUDENT </a>
<a href="std_delete.php" class="btn btn-primary"> DELETE STUDENT </a>
<a href="std_search.php" class="btn btn-primary"> SEARCH STUDENT </a>
<a href="index.php" class="btn btn-primary"> LOG OUT </a>
</div>
<h1 align='center ' > STUDENT INFORMATION </h1>
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