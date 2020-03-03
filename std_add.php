
<?php

    session_start();
	if($_SESSION["islogin"]==0)
	{
		header('Location: index.php ');
		
	}

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

$sql="INSERT INTO student (std_name,std_roll,std_dob,std_phone) VALUES ('".$stdname."','".$stdroll."','".$stddob."','".$stdphone."')";
 if(mysqli_query($conn,$sql)==true)
 {
	 echo "Student Information added successfully. <a href='dashboard.php'>Back to dashboard.</a>";
	 
 }
 else
 {
	 echo "Error.<a href='dashboard.php'>Back to dashboard.</a>";
 }
 



?>

