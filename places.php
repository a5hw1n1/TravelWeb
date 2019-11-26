<?php
session_start();
$name = $_GET['name'];
$type = $_GET['type'];
$id = $_SESSION['id'];
$_SESSION['id'] = $id;

$placetype = $_SESSION['placetype'];
$_SESSION['placetype'] = $placetype;

$conn = new mysqli("localhost","root","root","login");
if ($conn->connect_errno){
    echo "Connection failed: " .$conn->connect_error;
}

$sql = "INSERT into visited(Name,Type,id) values('$name','$placetype','$id')";

if ($conn->query($sql) === FALSE) 
    echo "Error: " . $sql . "<br>" . $conn->error;
 
include("mydiary.php");      
?>