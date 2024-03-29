<html>
<?php
session_start();//required and working.

$id = $_SESSION['id'];
//echo $id; //this is working
$d2 = $_SESSION['d2'];
//echo $d2; //this is working
$start = $_SESSION['start'];
$end = $_SESSION['end'];
$theme = $_SESSION['theme'];
$cstr = $_SESSION['cstr'];

//reassign
$_SESSION['id'] = $id;
$_SESSION['d2'] = $d2;
$_SESSION['start'] = $start;
$_SESSION['end'] = $end;
$_SESSION['theme'] = $theme;
$_SESSION['cstr'] = $cstr;

$placetype = $_GET['placetype'];
//echo $placetype;
$_SESSION['placetype'] = $placetype;

?>
<head>
    <title>Google Maps Places API Nearby Example</title>
    <style>
        body{
            background-image: url("img/picture1.jpg");
            background-repeat:no-repeat;
            background-size:100%;
        }
    	#common
        {
            margin-left: 120px;
            margin-top: 150px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script type="text/javascript">
            var placetype = <?php echo json_encode($placetype); ?>; 
            console.log(placetype);
    </script>
        
    <script>
       
    $(document).ready(function(){
        // type_holder
         //<div><label><input type="checkbox" class="types" value="mosque"/>Mosque</label></div>
        //console.log(placetype);
        var types = placetype.split("-");

        //var types = ['accounting','airport','amusement_park','aquarium','art_gallery','atm','bakery','bank','bar','beauty_salon','bicycle_store','book_store','bowling_alley','bus_station','cafe','campground','car_dealer','car_rental','car_repair','car_wash','casino','cemetery','church','city_hall','clothing_store','convenience_store','courthouse','dentist','department_store','doctor','electrician','electronics_store','embassy','fire_station','florist','funeral_home','furniture_store','gas_station','gym','hair_care','hardware_store','hindu_temple','home_goods_store','hospital','insurance_agency','jewelry_store','laundry','lawyer','library','liquor_store','local_government_office','locksmith','lodging','mel_delivery','meal_takeaway','mosque','movie_rental','movie_theater','moving_company','museum','night_club','painter','park','parking','pet_store','pharmacy','physiotherapist','plumber','police','post_office','real_estate_agency','restaurant','roofing_contractor','rv_park','school','shoe_store','shopping_mall','spa','stadium','storage','store','subway_station','synagogue','taxi_stand','train_station','transit_station','travel_agency','university','veterinary_care','zoo'];
        //var types = ['amusement_park','aquarium','art_gallery','bakery','bar','beauty_salon','bicycle_store','book_store','bowling_alley','bus_station','cafe','campground','casino','church','city_hall','embassy','florist','hindu_temple','library','lodging','mosque','movie_theater','museum','park','restaurant','shopping_mall','spa','stadium','synagogue','train_station','zoo'];
        var html = '';

        $.each(types, function( index, value ) {
            if(value){
                var name = value.replace(/_/g, " ");
                html += '<div><label><input type="checkbox" class="types" value="'+ value +'" />'+ capitalizeFirstLetter(name) +'</label></div>';
            }
        });

        $('#type_holder').html(html);
    });
    

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    

    var map;
    var infowindow;
    var autocomplete;
    var countryRestrict = {'country': 'in'};
    var selectedTypes = [];
    var d = [];

    function initialize()
    {
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {
            types: ['(regions)'],
           // componentRestrictions: countryRestrict
        });
        var pyrmont = new google.maps.LatLng(20.5937, 78.9629);

        map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 12
        });
    }

    function renderMap()
    {
        // Get the user defined values
        var address = document.getElementById('address').value;
        var radius  = parseInt(document.getElementById('radius').value) * 1000;
        
        // get the selected type
        selectedTypes = [];
        //selectTypes = $placetype;
        $('.types').each(function(){
            if($(this).is(':checked'))
            {
                selectedTypes.push($(this).val());
            }
        });

        var geocoder    = new google.maps.Geocoder();
        var selLocLat   = 0;
        var selLocLng   = 0;

        geocoder.geocode({'address': address}, function(results, status) {

            if (status === 'OK')
            {
                //console.log(results[0].geometry.location.lat() + ' - ' + results[0].geometry.location.lng());
                selLocLat   = results[0].geometry.location.lat();
                selLocLng   = results[0].geometry.location.lng();

                //var pyrmont = new google.maps.LatLng(52.5666644, 4.7333304);
                

                var pyrmont = new google.maps.LatLng(selLocLat, selLocLng);

                map = new google.maps.Map(document.getElementById('map'), {
                    center: pyrmont,
                    zoom: 11
                });

                //console.log(selectedTypes);

                var request = {
                    location: pyrmont,
                    //radius: 5000,
                    //types: ["atm"]
                    radius: radius,
                    types: selectedTypes
                };


                infowindow = new google.maps.InfoWindow();

                var service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);

            }
            else
            {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
        
    }

    function callback(results, status)
    {
        if (status == google.maps.places.PlacesServiceStatus.OK)
        {
            for (var i = 0; i < results.length; i++)
            {
                createMarker(results[i], results[i].icon);
            }
        }

    }

    function createMarker(place, icon) {
        var placeLoc = place.geometry.location;

        var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            icon: {
                url: icon,
                scaledSize: new google.maps.Size(20, 20) // pixels
            },
            animation: google.maps.Animation.DROP
        });
        
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(place.name+ '<br>' +place.vicinity);
            infowindow.open(map, this);
            d.push(place.name);
            //window.location.href = "table_update1.php?name=" + place.name + "&type=" + selectedTypes;
            //window.location.href = "places.php?name=" + place.name + "&type=" + selectedTypes;
        });

    }

    </script>
</head>
<body>

<div style="margin-top: 60px; width:800px; height:580px; margin-left:5px; position: absolute;">
    <div id="map" style="margin-left:10px; width:800px; height:580px; border: 5px solid black;"></div>
</div>

<div style="margin-left:860px; margin-right:3px; width: 300; height:540px; margin-top:80px; border: 5px solid black; position: absolute;" >
    <form name="frm_map" id="frm_map" style=" margin-top:10px;">
        <table>
            <tr>
                <th>Address</th>
                <td>
                    <input type="text" name="address" id="address" value="Bangalore, Karnataka, India">
                </td>
            </tr>
            <tr>
                <th>Radius</th>
                <td>
                    <input type="text" name="radius" id="radius" value="5" placeholder="In KM">
                </td>
            </tr>
            <tr>
                <th>Types</th>
                <td>
                    <div id="type_holder" style="height: 200px; overflow-y: scroll;">
                        <!-- Dynamic Content   -->  
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="button" value="Show" id="submit" onclick="renderMap();">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form> 
<!--
<div>
    <button type="button" class="btn btn-secondary" id="submit" onclick="renderMap();">
    Show</button>
</div>
-->
<button type="button" class="btn btn-primary" id="common" onmousedown="mouseDown()"> Next</button>
<!--button type="button" class="btn btn-primary" id="common" onmousedown="mouseDown2()"> Diary</button-->
<script>
        //function mouseDown2() {
           // window.location.href = 'mydiary.php'
        //}
        function mouseDown() {
            window.location.href = "places.php?name=" + d + "&type=" + selectedTypes;
        }
        </script>
<script src="https://maps.googleapis.com/maps/api/js?key=" async defer></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html>