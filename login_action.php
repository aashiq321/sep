<?php

$user=$_POST['username'];
$pass=$_POST['password'];

$servername = "localhost";
$username = "user";
$password = "user123";
$db_name="enroll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="select * from user where user_name='".$user."' and user_pass='".$pass."'";
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	session_start();
	$_SESSION["islogin"]=1;
    $_SESSION["is1login"]=0;
	header('Location: dashboard.php ');
}
else
{
	session_start();
	$_SESSION["islogin"]=0;
    

}


?>