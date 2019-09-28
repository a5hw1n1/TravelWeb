<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");
$result = mysqli_query($conn,"SELECT * FROM login_data ORDER BY id DESC LIMIT 1") or die("Failed to connect".mysqli_error($conn));
$row = mysqli_fetch_array($result);
$s = $row['id'] +1;
$visit = 1;
mysqli_query($conn,"insert into login_data(username,password,visit,id) values('$username','$password','$visit','$s')") or die("Failed to connect".mysqli_error($conn));
include('auto.php');
?>