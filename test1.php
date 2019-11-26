<!--my test1.php-->

<!DOCTYPE html>
<?php
session_start();
$id = $_SESSION['id'];

//reinitialise
$_SESSION['id'] = $id;
$_SESSION['d2'] = $d2;
echo $id;
?>
<head>
    <meta charset="utf-8">
    <title>test1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link href="daterangepicker.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("img/picture1.jpg");
            background-repeat:no-repeat;
            background-size:cover;  
        }    
        /*body {
            margin: 40px;
        }*/
        #calender{
            /*
            margin-left:400px;
            font-weight:bold;
            font-size:20px;
            margin-left:270px;*/
            
            /*padding-top:10px;
            float:bottom;*/
            margin-top:470px;
            position:absolute;
            width:100%;
            height:130px;
            
        }
        #cal_head{
            width:100%;
            
            padding-left: 140px;
            height: 300px;
            font-family: "Brush Script Std, ", Brush Script MT, cursive;
            font-size: 40px;
            font-weight:900;
        }
        .container1{
            position:absolute;
            padding-left: 130px;
            margin-top: 540px;
            /*float:bottom;*/
        }

        .wrapper {
            grid: 1;
            /*margin-top: 80px;
            margin-top: 10px;*/
            margin-left: 110px;
            margin-right: 390px;
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-gap: 10px;
            background-color: rgb(149, 201, 214);
            color: #444;
            border-radius: 10px;
            
        }
        .box {
            width: 230px;
            background-color: rgb(122, 121, 121);
            color: #fff;
            border-radius: 10px;
            /*padding: 20px;*/
            font-size: 150%;
            height: 50vh;
            overflow:auto;
        }

        #box_text{
            padding-top: 160px;
            padding-left: 55px;
            opacity: 0.7;
        }
        .task {
            background-color: pink;
            border-radius: 10px;
            color: black;
            font-size:15px;
            font-weight: bold;
            padding: 5px;
            margin: 4px;
            width:fit-content;
        }

        #checklist{
            width:50%;  
            float:right;    
        }
        
        #checklist_text{
            font-size: 40px;
            font-family: "Brush Script Std, ", Brush Script MT, cursive;
            font-weight: 900;
            width: 50%;

            margin-top: 30px;
            /*align-self: auto;*/
            margin-left: 210px;
            padding-right: -20px;
        } 
        
        #themeboard{
            width:50%;
            float:left;
        }
        
        #theme_text{
            margin-left: 120px;
            font-family: "Brush Script Std, ", Brush Script MT, cursive;
            font-size: 40px;
            font-weight: 900;
            width:400px;
            /*width: 50%;*/
            
        }
        #gallery{
            /*width: 480px;*/
            width: 50%;
            float: left;
            height:516.5px;
            padding-top:30px;
            padding-left:120px;
             
        }
        
        .container2{
                /*padding-top: 200px;*/
                float:left;
                padding-left: 80px;
                width: 599.5px;
                /*width: 599.5px;
                padding-left: 80px;
                padding-bottom: 100px; */  
                padding-bottom: 0px;
                height:516.5px;
            }
        .row{
            width: 480px;
        }
    </style>
</head>
<body>
    

    <!--theme board start-->
    <section class="gallery-block cards-gallery" id="gallery">
            <!--<div class="container2">-->
                <div id="theme_text">
                <!--<div class="heading" id="theme_text">
                    <h2>Card Gallery</h2>-->
                    <p>Choose a Theme:</p>
                </div>

                <!--<div><p id="checklist_text"> Create your checklist:</p>
                </div>-->

                <!--end row1-->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                        <!--<a class="lightbox" href="images/F1.jpg">-->
                            <a class="lightbox"><img src="img/5.jpg" class="card-img-top" id="img1" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                <h6>Adventure</h6>
                                <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="img/4.jpg" class="card-img-top" id="img2" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                    <h6>Leisure</h6>
                                    <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="img/4.jpg" class="card-img-top" id="img3" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                    <h6>Meditative</h6>
                                    <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                                </div>
                        </div>
                    </div>
                </div>
                
                <!--row2-->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="img/2.jpg" class="card-img-top" id="img4" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                    <h6>Zen</h6>
                                    <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="img/3.jpg" class="card-img-top" id="img5" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                    <h6>Work</h6>
                                    <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="img/1.jpg" class="card-img-top" id="img6" onClick="imgfunc(this.id)"></a>
                            <div class="card-body">
                                    <h6>Fun</h6>
                                    <!--<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>-->
                                </div>
                        </div>
                    </div>
                </div><!--end row2-->

            <!--</div>end container-->
        </section>
    <!--theme board end-->

    <!--checklist start-->
    <div id="checklist">
        <div><p id="checklist_text"> Create your checklist:</p>
        </div>
        <div class="wrapper">
            <div class="box">
                <div id="task1" class="task" draggable="true" value ="1" onmousedown="checkfunc('Passport, IDProof');">
                    Passport, IDProof
                </div>
                <div id="task2" class="task" draggable="true" value="2" onmousedown="checkfunc('Tickets,batteries');">
                    Tickets, batteries
                </div>
                <div id="task3" class="task" draggable="true" value="3" onmousedown="checkfunc('Foreign currency,Intl SIM');">
                    Foreign currency, Int'l SIM 
                </div>
                <div id="task4" class="task" draggable="true" value="4" onmousedown="checkfunc('Chargers, Power banks');">
                    Chargers, Power banks
                </div>
                <div id="task5" class="task" draggable="true" value="5" onmousedown="checkfunc('Umbrella, Rain coat');">
                    Umbrella, Rain coat
                </div>
                <div id="task6" class="task" draggable="true" value="6" onmousedown="checkfunc('Medicines, Lenses, Solution');">
                    Medicines, Lenses, Solution
                </div>
                <div id="task7" class="task" draggable="true" value="7" onmousedown="checkfunc('Tooth brush, Lotion');" >
                    Tooth brush, Lotion
                </div>
                <div id="task8" class="task" draggable="true" value="8" onmousedown="checkfunc('Shades, Hat, Sunscreen');">
                    Shades, Hat, Sunscreen
                </div>
                <div id="task9" class="task" draggable="true" value="9" onmousedown="checkfunc('Winter coat, Ear muffs');">
                    Winter coat, Ear muffs
                </div>
                <div id="task10" class="task" draggable="true" value="10" onmousedown="checkfunc('Binoculars, Notebook');">
                    Binoculars, Notebook
                </div>
                <div id="task11" class="task" draggable="true" value="11" onmousedown="checkfunc('Sanitizer, Tissue');">
                    Sanitizer, Tissue
                </div>
            </div>    
            <div class="box">
                <!--<p id="box_text"></p>-->
            </div>
        </div>
    </div>
    <!--checklist end-->

    <!--calender start-->
    <div id="calender">
        <p id="cal_head">Enter duration of travel:</p>
    </div>
    </br>
    <!--<div class= "container mt-1 mb-5" style="width: 700px">-->
    <div class= "container1" style="width: 700px">
        <input type="text" id="picker" class="form-control" value="04/12/2019 - 05/12/2019">
        <p></p>
        <!--<p>Start Date: <b id="start">2019-04-12</b></p>
        <p id="end_text">End Date: <b id="end">2019-05-12</b></p>-->
        <p>Start Date:<b id="start">2019-04-12</b>
        End Date: <b id="end">2019-05-12</b></p>
        <br>
    </div>
    <!--end calender-->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="moment.min.js"></script>
    <script src="daterangepicker.js"></script>

    
    <script>
        var dropTarget = document.querySelector(".wrapper");
        var draggables = document.querySelectorAll(".task");

        for(let i = 0; i < draggables.length; i++) 
        {
            draggables[i].addEventListener("dragstart", function (ev) 
            {
                ev.dataTransfer.setData("srcId", ev.target.id);
            });
        }

        dropTarget.addEventListener('dragover', function(ev) {
        ev.preventDefault();
        });

        dropTarget.addEventListener('drop', function(ev) 
        {
        ev.preventDefault();
        let target = ev.target;
        let droppable  = target.classList.contains('box');
        let srcId = ev.dataTransfer.getData("srcId");
        
        if (droppable) 
        {
            ev.target.appendChild(document.getElementById(srcId));
        }
        });

        var theme;
        function imgfunc(selectid){
            theme = selectid.slice(3);
            console.log(theme);
        }

        var cstr = '';
        function checkfunc(s){
            cstr = cstr.concat(s, '-');
            //console.log(cstr);
        }
        </script>
        
        <script>
                baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
        </script>

        <script>
            //$('#picker').data("DateRangePicker").show();
            $('#picker').daterangepicker({
            alwaysShowCalendars: true,
            //autoApply: true,
            //startDate: '04/12/2019',
            //endDate: '04/12/2019',
            //singleDatePicker: true,
            //showDropdowns: true;
            //debug: true,
            drops: 'up',
            opens: 'center' //left or center   
        }, function(start, end, label){
            $('#start').text(start.format('YYYY-MM-DD'))
            $('#end').text(end.format('YYYY-MM-DD'))
            //alert(start.format('Y/M/D'));
            
            //window.location.href = "table_update.php?start=" + start.format('Y/M/D') + "&end=" + end.format('Y/M/D');
            window.location.href = "table_update1.php?start=" + start.format('Y/M/D') + "&end=" + end.format('Y/M/D') + "&theme=" + theme + "&cstr=" + cstr;
        });
        </script>

        <script>
            //not needed
            function mouseDown() {
            window.location.href = 'places_page1.php'
        }
        </script>


</body>
</html>