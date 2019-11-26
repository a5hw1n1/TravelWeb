<!doctype html>
<head>
<title>mydiary</title>
<?php
session_start();//required and working.

$id = $_SESSION['id'];
//echo $id;//working
$d2 = $_SESSION['d2'];
//echo $d2;//working
$cstr = $_SESSION['cstr'];
//echo $cstr; //working
$start = $_SESSION['start'];
$end = $_SESSION['end'];
$theme = $_SESSION['theme'];
$placetype = $_SESSION['placetype'];

//reinitialise
$_SESSION['id'] = $id;
$_SESSION['d2'] = $d2;
$_SESSION['start'] = $start;
$_SESSION['end'] = $end;
$_SESSION['theme'] = $theme;
$_SESSION['cstr'] = $cstr;
$_SESSION['placetype'] = $placetype;
?>

<!-- you can add start date and end date and destination-->


<style>
    body {
            background-image: url("img/diarypic.jpg");
            background-repeat:no-repeat;
            background-size:100%;
        }
    #box1{
            text-align: center;
            position: absolute;
            width: 350px;
            height: 400px;
            margin-left: 220px;
            margin-top:140px; 
            border: 2px solid black;  
            }    
    #box2{
            text-align: center;
            position: absolute;
            width: 350px;
            height: 400px;
            margin-left: 645px;
            margin-top:140px;
        }
        #cont1{
                margin-top: 300px;
                width: 50px;
                height: 30px;
                float:left;
        }
        #cont2{
                width: 70px;
                margin-top: 300px;
                /*margin-left:20px;*/
                height: 30px;
                float:right;
        }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <!--div id="cont1" class="container">
                <div id = "btn_left" > 
                        <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                </div>       
        </div-->

        <div id = "box1">
                <p style= "margin-top:80px; color:black; font-family:fantasy; font-weight:bold; font-size:50px; text-decoration:underline;">My </br>
                Travel </br>
                Planner</p>
        </div>
        
        <div id = "box2">
                <img style="padding-top: 10px;"class="img-fluid" src="img/collage1.jpg" alt="collage"/>
        </div>

        <div id="cont2" class="container">
                <div id = "btn_right" >
                        <a class="btn btn-outline-secondary next" href="diary01.php" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                </div>
        </div>  
        
</body>
</html>