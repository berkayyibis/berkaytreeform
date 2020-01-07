<?php
require ("DBController.php");
$dbController = new DBController();
$query = "SELECT * FROM treeodev";
$countryResult = $dbController->runQuery($query);
?>
<html>
<head>
<title>Add Markers to Show Locations in Google Maps</title>
</head>
<style>
body {
    font-family: Arial;
}
#map-layer {
    margin: 20px 0px;
    max-width: 700px;
    min-height: 400;
}
</style>
<body>
    <h1>Add Markers to Show Locations in Google Maps</h1>
    <div id="map-layer"></div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBiNtYTZ_I-3eX--luiWbuD8X2nc-EocY&callback=initMap"
        async defer></script>
        <script>
      var map;
      var geocoder;
      function initMap() {
        var mapLayer = document.getElementById("map-layer");
        var centerCoordinates = new google.maps.LatLng(40.4637, 3.7492);
        var defaultOptions = { center: centerCoordinates, zoom: 2 }
        map = new google.maps.Map(mapLayer, defaultOptions);
        geocoder = new google.maps.Geocoder();
        <?php
        if (! empty($countryResult)) {
            foreach ($countryResult as $k => $v) {
                ?>
                    geocoder.geocode( { 'latitude': '<?php echo $countryResult[$k]["isim"]; ?>' }, function(LocationResult, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            var latitude = LocationResult[0].geometry.location.lat();
                            var longitude = LocationResult[0].geometry.location.lng();
                        }
                                new google.maps.Marker({
                                position: new google.maps.LatLng(latitude, longitude),
                                map: map,
                                title: '<?php echo $countryResult[$k]["isim"]; ?>',
                                    icon: '<?php echo $countryResult[$k]["typee"]; ?>'
                            });
                    });
                <?php
            }
        }
        ?>
      }
    </script>
</body>
      <div>
      <form action="index.php" >
        <tr>
            <td><button class="btn btn-primary" name="anasayfa">Anasayfaya Dön</button>
        <tr>
      </div>

</html>
