<?php 
session_start(); //required and working.

$start = $_GET['start'];
$end = $_GET['end'];
$theme = $_GET['theme'];
$cstr = $_GET['cstr'];
$id = $_SESSION['id'];
$d2 = $_SESSION['d2'];

//reinitialise
$_SESSION['id'] = $id;
$_SESSION['d2'] = $d2;
$_SESSION['cstr'] = $cstr;
$_SESSION['theme'] = $theme;
$_SESSION['start'] = $start;
$_SESSION['end'] = $end;


//$conn = mysqli_connect("localhost","root","root","login");
//mysqli_select_db($conn,"login");
$conn = new mysqli("localhost","root","root","login");
if ($conn->connect_errno){
    echo "Connection failed: " .$conn->connect_error;
}

//mysqli_query($conn,"insert into date_table(Start_Date,End_Date,ID) values('$start','$end','$id')") or die("Failed to connect".mysqli_error($conn));
$sql = "INSERT into date_table(Start_Date,End_Date,theme,checklist,ID) values('$start','$end','$theme','$cstr','$id')";

if ($conn->query($sql) === FALSE) 
    echo "Error: " . $sql . "<br>" . $conn->error;
    
include_once("places_page1.php");
?>
