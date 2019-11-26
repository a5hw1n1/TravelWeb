<!DOCTYPE html>
<?php
//get the theme number, append to .jpg 
//get the place type and the image used and the place name
//keep extracting place type and removing one by one then go to diary02.php again till over..
    session_start();
    $id = $_SESSION['id'];
    $_SESSION['id'] = $id;
    $placetype = $_SESSION['placetype'];
    $_SESSION['placetype'] = $placetype;
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"login");
    $result = mysqli_query($conn,"select * from visited where id = '$id'") or die("Failed to connect".mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $i = $_SESSION['i'];
    //echo "I am here".$i;
    $name = $row['Name'];
    $t = explode(",",$name);
    if($i < count($t)-1)
    {
        $i = $i + 1;
    }
    else
    {
        include("block.php");
    }
    $type = $row['Type'];
   // echo $type;
    $d = explode(",",$type);
    $_SESSION['i'] = $i;
   // echo $type;
    //echo $name;
?>
<head> 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>diary02</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .common
        {
            top:500px;
            left:400px;
        }
        .common1
        {
            top:500px;
            left:700px;
        }
        body{
            background-image: url("1.jpeg");
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
            opacity: 0.8;
            background-color: #ffffff;
            background-image: url("book.jpeg"); /*change this*/
            background-repeat:no-repeat;
            background-size:100%;
            display:block;
            position:absolute;
            margin-left: 200px; 
            margin-top: 70px; 
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
    </style>
</head>
<body>


    <div id="cont1" class="container">
        <div id = "btn_left" > 
                <a class="btn btn-outline-secondary prev" href="diary01.php" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
        </div>       
    </div>

    <div id="book">
        <div id="box1">
        <img style="image-size:contain; width:100%;"class="img-fluid" src="collage1.jpeg" alt="collage"/>
        </div>

        <div id="box2">
            <h3><script type="text/javascript">
            var x = "<?php echo"$d[$i]"?>"; 
        //document.write(x);
</script></h3>
            <h4><script type="text/javascript">
            var x = "<?php echo"$t[$i]"?>";

        document.write(x);
</script></h4>
            <form action = "" method = "get">
                Notes: 
                <br />
                
                <textarea rows = "11" cols = "30" name = "description">
                    Write about your travel..
                </textarea>
                
                <input type = "submit" value = "Im done!" onclick="next_page()" />
            </form>

        </div>   
    </div>
    <div id="cont2" class="container">
        <div id = "btn_right">
                <a class="btn btn-outline-secondary next" href="diary02.php" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
        </div>
    </div>  
    <button type="button" class="btn btn-primary" id="common" onmousedown="mouseDown()"> Next</button>
    <button type="button" class="btn btn-primary" id="common1" onmousedown="mouseDown1()"> Next1</button>
<script>
    function next_page() {
            window.location.href = "diary02.php";
        }
            function mouseDown() {
            window.location.href = "eh.php";
        }
        function mouseDown1() {
            window.location.href = "block.php";
        }
        </script>
</body>
</html>
