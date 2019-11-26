<!--myplaces page-->

<!doctype html>
<?php
    session_start(); //working with and without
    $id = $_SESSION['id'];
    $d2 = $_SESSION['d2'];
    $cstr = $_SESSION['cstr'];
    $start = $_SESSION['start'];
    $end = $_SESSION['end'];
    $theme = $_SESSION['theme'];
    echo $d2;
    echo $cstr;

    $_SESSION['id'] = $id;
    $_SESSION['d2'] = $d2;
    $_SESSION['start'] = $start;
    $_SESSION['end'] = $end;
    $_SESSION['theme'] = $theme;
    $_SESSION['cstr'] = $cstr;
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="css/bootstrap.css"> -->
<link rel="stylesheet" href="cardslider.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

<title>Slider3</title>
<style>
    body {
            /*background-color: #ddd;*/
            background-image: url("img/slider.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }
        #common{
            margin-left: 1120px;
        }
</style>
</head>

<body>

<section class="container pt-4">
    <div class="row">
        <div class="col-lg-12">
            <h1><span style="color: crimson">Where do you want to go?</span> Visit places!</h1>
        </div>
    </div>
</section>

<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container"> <!--for arrow button-->
        <div class="row">
            <div class="col-12 text-right mb-4"> <!--margin bottom-->
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <!-- row1-->
    <div class="container pt-0 mt-0"> <!--padding top margin top-->
        <div class="row mt-0">
            <div class="col-md-12">
                <div class="carousel-inner">

                    <div class="carousel-item active flex-column flex-sm-r">
                        <div class="card-deck"> 
                            <!--card 1 of row 1-->
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                    <img class="img-fluid" src="img/pic6.jpg" alt="Carousel 1" id="zoo" onclick="imgfunc(this.id);"/>
                                        
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Zoo</h3></div>
                                        <div class="card-text">Take a trip to the zoo. Experience the diversity of fauna the place has to offer. A perfect way to spend the entire day with family and friends. </div>
                                    </div>
                                </div>
                            <!--card 2 of row 1-->
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic1.jpg" alt="Carousel 1" id="hindu_temple" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">

                                        <div class="card-header"><h3>Temple</h3></div>
                                        <div class="card-text">Bow down and seek the blessings of the divine. A visit to the temple re-energises the soul. Perfect for new beginnings.</div>
                                    </div>
                                </div>
                            <!--card 3 of row 1-->
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic2.jpg" alt="Carousel 1" id="amusement_park" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Amusement Park</h3></div>
                                        <div class="card-text">Spend the day with family and friends at an amusement park. They have a variety of activities to offer for an unforgettable experience.
                                        </div>
                                    </div>
                            </div> <!--card-->
                        </div><!--card deck-->
                    </div><!--carousel item-->
                 
                    
                <div class="carousel-item flex-column flex-sm-row">
                    <div class="card-deck">
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/blehh.jpg" alt="Carousel 1" id="florist" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Florist</h3></div>
                                        <div class="card-text">Visit the florist! Get your loved ones some wonderful flowers and greet them while you are on your trip. Flowers are a great way to make someone happy!</div>
                                    </div>
                                </div>

                        <div class="card mb-2">
                                <div class="card-img-top card-img-top-250">
                                    <img class="img-fluid" src="img/pic4.jpg" alt="Carousel 1" id="shopping_mall" onclick="imgfunc(this.id);"/>
                                </div>
                                <div class="card-block pt-2">
                                    <div class="card-header"><h3 >Shopping Plaza</h3></div>
                                    <div class="card-text">Have a loooooong shopping list to cover? Avisit to the shopping plaza is just what you'll need! The plaza has got everyone's needs covered! Even grandma's ripe tomatoes!</div>
                                </div>
                            </div>

                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic5.jpg" alt="Carousel 1" id="museum" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Museum</h3></div>
                                        <div class="card-text">Experience the heritage, live the stories of the past where our ancestors dwelled. A trip to the museum provides for an educational experience everybody will enjoy. </div>
                                    </div>
                                </div>
                    </div> <!--card deck-->
                </div> <!--carouel item-->

                <div class="carousel-item flex-column flex-sm-row">
                    <div class="card-deck">
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/5.jpg" alt="Carousel 1" id="stadium" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Campground</h3></div>
                                        <div class="card-text">A perfect activity for someone built for the outdoors! Spend the night under the stars! Camping makes for an unforgettable experience.</div>
                                    </div>
                                </div>

                        <div class="card mb-2">
                                <div class="card-img-top card-img-top-250">
                                    <img class="img-fluid" src="img/pic8.jpg" alt="Carousel 1" id="church" onclick="imgfunc(this.id);"/>
                                </div>
                                <div class="card-block pt-2">
                                    <div class="card-header"><h3 >Church</h3></div>
                                    <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                                </div>
                            </div>

                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic9.jpg" alt="Carousel 1" id="restaurant" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Restaurant</h3></div>
                                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                                    </div>
                                </div>
                    </div> <!--card deck-->
                </div> <!--carouel item-->

                <div class="carousel-item flex-column flex-sm-row">
                    <div class="card-deck">
                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic10.jpg" alt="Carousel 1" id="aquarium" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Aquarium</h3></div>
                                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                                    </div>
                                </div>

                        <div class="card mb-2">
                                <div class="card-img-top card-img-top-250">
                                    <img class="img-fluid" src="img/pic11.jpeg" alt="Carousel 1" id="movie_theater" onclick="imgfunc(this.id);"/>
                                </div>
                                <div class="card-block pt-2">
                                    <div class="card-header"><h3 >Movie Theatre</h3></div>
                                    <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                                </div>
                            </div>

                            <div class="card mb-2">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/pic12.jpg" alt="Carousel 1" id="art_gallery" onclick="imgfunc(this.id);"/>
                                    </div>
                                    <div class="card-block pt-2">
                                        <div class="card-header"><h3>Art Gallery</h3></div>
                                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                                    </div>
                                </div>
                    </div> <!--card deck-->
                </div> <!--carouel item-->

                </div> <!--carousel inner-->
            </div> <!--col-->
            </div> <!--row-->
        </div><!--container-->
    
</section>

<button type="button" class="btn btn-primary" id="common" onClick="Next()"> Next</button>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script>
    (function($){
        "use strict";
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    })	
    (jQuery);

    var placetype = '';
    function imgfunc(selectid){
        //placetype = selectid;
        placetype = placetype.concat(selectid, '-');
        //console.log(placetype);
        //window.location.href = "trial1.php?placetype=" + placetype;
    }

    function Next()
    {
        //console.log(placetype);
        window.location.href = "trial1.php?placetype=" + placetype; //required
    }
</script>
<?php
    $_SESSION['placetype'] = $placetype;
?>

</body>
</html>

