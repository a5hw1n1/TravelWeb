<!DOCTYPE html>
<html>
<head>
  <title>My Map</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <!-- Stylesheets. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
h1
{
  color: #fff;
}
body
{
  background: url(road.jpg);
  background-size: cover;
}
.slide-slow {
  width:100%;
  overflow:hidden;
  float:left;
}
.slide-slow .inner {
  animation: slide-slow 3s;
  margin-left: 20%;
  text-shadow: 3px;
  font-size:30px;
}
@keyframes slide-slow {
  from {
    margin-left: 60%;
  }

  to {
    margin-left: 20%;
  }
}
#map
{
  margin-top:40px;
  width: 900px;
  height:550px;
  border: 1px solid blue;
}
</style>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="display-4">My Map</h1>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <input class="form-control" id="search" type="text" placeholder="Search..." />
      </div>
    </div>
        <div class="slide-slow">
  <div class="inner">
    <div id = "map"></div>
      </div>
    </div>
  </div>

 
  <!-- Bootstrap scripts. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Google Maps scripts. -->
  <script>
    var map;

function createMap () {
  var options = {
    center: {lat: 20.5937, lng: 78.9629},
    zoom: 4
  };

  map = new google.maps.Map(document.getElementById('map'), options);

  var input = document.getElementById('search');
  var searchBox = new google.maps.places.SearchBox(input);

  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  
  searchBox.addListener('places_changed', function () {
    var places = searchBox.getPlaces();

    if (places.length == 0)
      return;

    markers.forEach(function (m) { m.setMap(null); });
    markers = [];

    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(p) {
      if (!p.geometry)
        return;

      markers.push(new google.maps.Marker({
        map: map,
        title: p.name,
        position: p.geometry.location
      }));

      if (p.geometry.viewport)
        bounds.union(p.geometry.viewport);
      else
        bounds.extend(p.geometry.location);


    });
    alert("hi");
        map.fitBounds(bounds);
  });
}  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvcQnfCHMRXEyyZKfqiJUOxzZ4B99aV0s&callback=createMap&libraries=places" async defer></script>
</body>
</html>