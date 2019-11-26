<!DOCTYPE html>
<?php
//get the theme number, append to .jpg 
//get the checklist explode it 
    session_start();

    $id = $_SESSION['id'];
    $d2 = $_SESSION['d2'];
    $cstr = $_SESSION['cstr'];
    //echo $cstr; //working
    $start = $_SESSION['start'];
    $end = $_SESSION['end'];
    $theme = $_SESSION['theme'];
    //echo $theme; //working
    $placetype = $_SESSION['placetype'];

    //reassign
    $_SESSION['id'] = $id;
    $_SESSION['d2'] = $d2;
    $_SESSION['start'] = $start;
    $_SESSION['end'] = $end;
    $_SESSION['theme'] = $theme;
    $_SESSION['cstr'] = $cstr;
    $_SESSION['placetype'] = $placetype;

    $_SESSION['i'] = -1;
?>

<head>
    <title>diary01</title>
    <style>
        body{
            /*background-image: url("img/1.jpg");
            background-repeat:no-repeat;
            background-size:100%;*/
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
            background-image: url("img/book.jpg");
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
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>  
    <script>
        var theme = <?php echo json_encode($theme); ?>;
        var imgi = "img/";
        var urli = imgi.concat(theme,".jpg");
        console.log(urli);
        document.body.style.background = `url(${urli}) no-repeat 100%`;
    </script>

    <div id="cont1" class="container">
        <div id = "btn_left" > 
                <a class="btn btn-outline-secondary prev" href="mydiary.php" title="go back" ><i class="fa fa-lg fa-chevron-left" ></i></a>
        </div>       
    </div>

    <div id="book">
    </br>
        <h3 style="margin-left:500px; font-weight:bold; width:300px;font-size: 30px;"></br>My Checklist</h3>
        </br>
        <div style="width:300px; height:300px; position:absolute;">
            <p style="margin-left: 100px; font-size: 40px;font-family: fantasy; font-weight:bold";>My trip to</p>
            <script>
                var start = <?php echo json_encode($start); ?>;
                var end = <?php echo json_encode($end); ?>; 
                var dest = <?php echo json_encode($d2); ?>;

                document.write( "<p style='margin-left: 110px; font-size: 30px;font-family: fantasy; font-weight:bold';>" + dest + "</p></br>");
                document.write( "<p style='margin-left: 90px; width:300px; font-size: 20px;font-family: fantasy; font-weight:bold';>" + start +" - " + end + "</p></br>");
            </script>
            
        </div>
        <div id="type_holder" style="margin-left:520px; width:400px; float:right;">
            <script type="text/javascript">

            $(document).ready(function(){
                var checklist = <?php echo json_encode($cstr); ?>; 
                //console.log(checklist);

                var items = checklist.split("-");
                
                var html = '';
                $.each(items, function( index, value ) {
                if(value){
                    //var name = value.replace(/_/g, " ");
                    html += '<input type="checkbox" style="margin-left:60px;" class="types" value="'+ value +'"/>'+ capitalizeFirstLetter(value) +'</br></br>';
                }
                });
                $('#type_holder').html(html);
            });

                function capitalizeFirstLetter(string) {
                    return string.charAt(0).toUpperCase() + string.slice(1);
    }
            </script> 
        </div>  
    </div>

    <div id="cont2" class="container">
        <div id = "btn_right">
                <a class="btn btn-outline-secondary next" href="diary02.php" title="more" ><i class="fa fa-lg fa-chevron-right"></i></a>
        </div>
    </div> 

</body>

</html>
