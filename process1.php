<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //$conn = mysqli_connect("localhost","root","root");
    //mysqli_select_db($conn,"login");
    $conn = new mysqli("","","","");

    if ($conn->connect_errno){
        echo "Connection failed: " .$conn->connect_error;
    }

    //$result = $conn->query("SELECT * FROM login_data ORDER BY id DESC LIMIT 1") or die("Failed to connect".mysqli_error($conn));            
    $sql = "SELECT * FROM login_data ORDER BY id DESC LIMIT 1"; // performs a query against the database
    $result = $conn->query($sql);

    //$row = mysqli_fetch_array($result);
    $row = $result->fetch_assoc();

    session_start();
    $s = $row['id'] +1;
    $_SESSION['id'] = $s; //IMPORTANT
    $t1 = 0;
    $visit = 1;

    //mysqli_query($conn,"insert into login_data(username,password,visit,id) values('$username','$password','$visit','$s')") or die("Failed to connect".mysqli_error($conn));
    $sql1 = "INSERT into login_data(username,password,visit,id) values('$username','$password','$visit','$s')";

    //if ($conn->query($sql1) === TRUE) echo "New record created successfully";
    //else echo "Error: " . $sql1 . "<br>" . $conn->error;
    if ($conn->query($sql1) === FALSE) 
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    
    include_once('x.php');
?>