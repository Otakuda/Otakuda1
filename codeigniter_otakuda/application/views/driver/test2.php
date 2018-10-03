<!DOCTYPE html>
<html>
<head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<!--<div id="floating-panel">-->
<!--    <!--    <b>取貨地點: </b>-->-->
<!--    <!--    <input type="text" value="53,jalan impian emas 14" id="start" readonly>-->-->
<!--    <!---->-->
<!--    <!--    <b>送貨地點: </b>-->-->
<!--    <!--    <input type="text" value="3,jalan pulai 66,taman pulai utama,81300 skudai,johor" id="end" readonly>-->-->
<!--    <input type="text" id="latlng">-->
<!--    <!--    <input type="text" id="lng" readonly>-->-->
<!--    <input type="text" id="address">-->
<!--    <input id="submit" type="button" value="Reverse Geocode">-->
<!--</div>-->
<!---->
<!--<div id="map"></div>-->

<div id="floating-panel">
    <b>Mode of Travel: </b>
    <select id="mode">
        <option value="DRIVING">Driving</option>
        <option value="WALKING">Walking</option>
        <option value="BICYCLING">Bicycling</option>
        <option value="TRANSIT">Transit</option>
    </select>
    <input type="text" value="23,jalan ros merah 2/8" id="start">
    <input type="text" value="41" id="lat">
    <input type="text" value="53" id="lng">
</div>
<div id="map"></div>
<script>
    function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: {lat: 37.77, lng: -122.447}
        });
        directionsDisplay.setMap(map);

        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
            origin:  document.getElementById('start').value,  // Haight.
            destination: {lat: 1.5287918, lng: 103.79265889999999},  // Ocean Beach.
            // Note that Javascript allows us to access the constant
            // using square brackets and a string value as its
            // "property."
            travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
            if (status == 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
//<script>
//var map, infoWindow;
//function initMap() {
//    map = new google.maps.Map(document.getElementById('map'), {
//        center: {lat: -34.397, lng: 150.644},
//        zoom: 17
//    });
//    infoWindow = new google.maps.InfoWindow;
//
//    // Try HTML5 geolocation.
//        navigator.geolocation.getCurrentPosition(function (position) {
//            var pos = {
//                lat: position.coords.latitude,
//                lng: position.coords.longitude
//            };
//            document.getElementById('latlng').value = [position.coords.latitude, position.coords.longitude];
//        });
//
//}
//
//</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Fb3SBTL-Hta3jxIJqjtzevzP8gihzeo&callback=initMap">
</script>
</body>
</html>