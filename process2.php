<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");
$result = mysqli_query($conn,"select * from login_data where username = '$username' and password='$password'") or die("Failed to connect".mysqli_error($conn));
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
	$r = $row['visit'] + 1;
	mysqli_query($conn,"update login_data set visit ='$r' where username = '$username' and password='$password'");
	include('auto.php');
}
else
{
	echo "Failed to login";
}
?>