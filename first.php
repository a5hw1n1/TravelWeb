<!--final-->
<html>
    </head>
    <title>Welcome</title>
    <script>
            function mouseDown() {
            window.location.href = 'form.php'
        }
        </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
        #common
        {
            margin-left: 590px;
            margin-top: 10px;
        }
        body {
            /*background-color: #ddd;*/
            background:url('img/fp.jpeg');
            background-size: cover;
        }
        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev{
            display:block;
        }
        div.transbox{
                text-align: center;
                width: 800px;
                height: 400px;
                margin-left: auto;
                margin-right: auto;
                margin-top:100px;
                background-color: #ffffff;
                border: 3px solid black;
                opacity: 0.6;
                /*filter: alpha(opacity=60);  For IE8 and earlier */
            }
            p{
                font-weight:bold;
                
                padding:"40px";
                display: inline-block;
                font-size: 25px;
                color: #000000;
            }
            #weblab{
                font-weight:bolder;
                font-size: 40px;
                font-family:'Times New Roman', Times, serif;
                display: inline-block;
                padding:"10px";
                color: #000000;
            }
            #travelplanner{
                font-weight: bold;
                font-size: 60px;
                font-family:cursive;
                display: inline-block;
                padding:"30px";
                color: #000000;
            }
        </style>
    </head>
    <body >
            <div class="container-fluid">
                <div class="row">
                    <div class= "col-sm">
                        <div id="carouselContent" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active text-center p-4">
                                    <p>“The world is a book and those who do not travel read only a page.” Saint Augustine</p>
                                </div>
                                <div class="carousel-item text-center p-4">
                                    <p>“Not all those who wander are lost.” ~ J.R.R. Tolkien</p>
                                </div>
                                <div class="carousel-item text-center p-4">
                                    <p>“Life is either a daring adventure or nothing at all.” ~ Helen Keller</p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transbox" text-align="center">
                </br>
                    <p id="weblab">Web Laboratory Mini Project</p>
                    </br>
                    <p id="travelplanner">Travel Planner</p>
                    </br>
                    <p>Amulya Arun</p></br>
                    <p>Anisha Khetan</p></br>
                    <p>Ashwini Kelkar</p></br>
            </div>
                <button color="blue" type="button" class="btn btn-primary" id="common" onmousedown="mouseDown()"> Next</button>
            
            
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
            </body>
</html>
