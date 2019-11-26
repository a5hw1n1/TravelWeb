<?php
session_start();
$id = $_SESSION["id"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");
$date = date('Y-m-d');
$result = mysqli_query($conn,"select * from places where date1 = '$date' and id='$id' ORDER BY id DESC LIMIT 1") or die("Failed to connect".mysqli_error($conn));
$row = mysqli_fetch_array($result);
$t = $row['destination'];
$_SESSION['d'] = $t;
//session_start();
//$place = $row['destination'];
//echo $place;
shell_exec("script.py $t");
include("eh1.php");
?>