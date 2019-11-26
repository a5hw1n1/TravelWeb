<?php 
session_start();
$d2 = $_GET['d1'];
$p = $_GET['p'];
$id = $_SESSION['id'];

//reinitialise
$_SESSION['id'] = $id;
$_SESSION['d2'] = $d2;

$conn = new mysqli("","","","");
if ($conn->connect_errno)
    echo "Connection failed: " .$conn->connect_error;

$dat = date("Y-m-d");

$sql = "INSERT into places(date,destination,s_location,id) values('$dat','$d2','$p','$id')";
if ($conn->query($sql) === FALSE) 
    echo "Error: " . $sql . "<br>" . $conn->error;
 
include_once("test1.php");
?>
