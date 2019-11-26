<html>

<?php
    session_destroy();
?>

<head>
    <style>
    body{
            background-image: url("img/diarypic.jpg");
            background-repeat:no-repeat;
            background-size:100%;
        }
    #box2{
            text-align: center;
            position: absolute;
            width: 350px;
            height: 400px;
            margin-left: 220px;
            margin-top:140px; 
             
            }    
    #box1{
            text-align: center;
            position: absolute;
            width: 350px;
            height: 400px;
            margin-left: 645px;
            margin-top:140px;
            border: 2px solid black;
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
    </head>
    <body>
        <div id = "box1">
            <p style= "margin-top:110px; color:black; font-family:fantasy; font-weight:bold; font-size:50px;">Thank</br>
            You</p>
        </div>
        
        <div id = "box2">
            
        </div> 
    </body>
</html>
