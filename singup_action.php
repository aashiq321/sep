
<?php
	session_start();
	$_SESSION["islogin"]=0;

$user=$_POST['username'];
$pass=$_POST['password'];

$servername = "localhost";
$username = "user";
$password = "user123";
$db_name="enroll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

$sql="INSERT INTO user (user_name,user_pass) VALUES ('".$user."','".$pass."')";
 if(mysqli_query($conn,$sql)==true)
 {
	 echo "Signup successfully. <a href='index.php'>Back to login.</a>";
	 
 }
 else
 {
	 echo "Error.<a href='singup.php'>Back to signup.</a>";
 }



?>

