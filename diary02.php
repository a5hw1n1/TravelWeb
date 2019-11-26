<!DOCTYPE html>
<?php
    session_start();
    $id = $_SESSION['id'];
    $d2 = $_SESSION['d2'];
    $cstr = $_SESSION['cstr'];  
    $start = $_SESSION['start'];
    $end = $_SESSION['end'];
    $theme = $_SESSION['theme'];   
    $placetype = $_SESSION['placetype'];

    //reassign
    $_SESSION['id'] = $id;
    $_SESSION['d2'] = $d2;
    $_SESSION['start'] = $start;
    $_SESSION['end'] = $end;
    $_SESSION['theme'] = $theme;
    $_SESSION['cstr'] = $cstr;
    $_SESSION['placetype'] = $placetype;   

    $conn = new mysqli("localhost","root","root","login");
    if ($conn->connect_errno)
        echo "Connection failed: " .$conn->connect_error;

    $sql = "SELECT * from visited WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === FALSE) 
        echo "Error: " . $sql . "<br>" . $conn->error;

    $row = $result->fetch_assoc();
    $i = $_SESSION['i']; 
    $name = $row['Name'];
    $t = explode(",",$name);
    //$type = $row['Type'];
    //$d = explode("-",$type);

    echo $i;
    
    if($i < count($t))
    {
        $i = $i + 1;
        echo $i;
    }
    //if($i == count($t))
    //{
    //    $_SESSION['i'] = -1;
    //    include("thankyou.php");
    //}

    $_SESSION['i'] = $i;
?>
<head> 
    <title>diary02</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url("img/4.jpg");
            background-repeat:no-repeat;
            background-size:100%;
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
        #book{
             /*all attributes required*/
            opacity: 0.9;
            background-color: #ffffff;
            background-image: url("img/book.jpg"); /*change this*/
            background-repeat:no-repeat;
            background-size:100%;
            display:block;
            position:absolute;
            margin-left: 200px; 
            margin-top: 110px; 
            height:510px; 
            width: 800px; 
            /*border: 2px solid black;*/
        }
        #box1{
            text-align: center;
            position: absolute;
            width: 340px;
            height: 400px;
            margin-left: 20px;
            margin-top:50px; 
            border: 2px solid gray;  
            }    
    #box2{
            text-align: center;
            position: absolute;
            width: 340px;
            height: 400px;
            margin-left: 435px;
            margin-top:50px;
            border: 2px solid gray;  
        }
        #common{
            margin-left: 1120px;
            margin-top: 300px;
        }
    </style>
</head>
<body>

<script type="text/javascript">
            var placetype = <?php echo json_encode($placetype); ?>; 
            var placearr = explode('_', placetype);
            console.log(placearr);
</script>

<script>
        var theme = <?php echo json_encode($theme); ?>;
        var imgi = "img/";
        var urli = imgi.concat(theme,".jpg");
        console.log(urli);
        document.body.style.background = `url(${urli}) no-repeat 100%`;
    </script>


    <div id="cont1" class="container">
        <div id = "btn_left" > 
                <a class="btn btn-outline-secondary prev" href="diary01.php" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
        </div>       
    </div>

    <div id="book">
        <div id="box1">
        <img style="image-size:contain; width:100%; height:100%;"class="img-fluid" src="img/photo.jpg" alt="collage"/>
        </div>

        <div id="box2">
            <!--h3>CampGround</h3-->
            <!--h3><script type="text/javascript">
            var x = "<?php echo"$d[$i]"?>"; 
        document.write(x);
</script></h3-->
            <!--h4>awesomecampplace</h4-->
            <h3><script type="text/javascript">
                var x = "<?php echo"$t[$i]"?>";
                if (x != "")
                    document.write(x);
                else{
                    window.location.href = "thankyou.php";
                }
            </script></h3>
            <form action = "" method = "get">
                Notes: 
                <br />
                
                <textarea rows = "11" cols = "30" name = "description">
                    Write about your travel..
                </textarea>
                
                <!--input type = "submit" value = "Im done!" onclick="next_page()"/-->
                <input type = "submit" value = "Im done!"/>
            </form>

        </div>   
    </div>
    <div id="cont2" class="container">
        <div id = "btn_right" onclick="next_page1()">
                <a class="btn btn-outline-secondary next" href="diary02.php" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
        </div>
    </div>  

    <!--button type="button" class="btn btn-primary" id="common" onClick="Next()"> Done!</button-->

    <script>
        function Next()
        {
            window.location.href = "thankyou.php";
        }
    </script>

</body>
</html>
