<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 80%;
    }

    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #warnings-panel {
        width: 100%;
        height: 10%;
        text-align: center;
    }

    @media only screen and (max-width: 900px) {
        map {
            width:375px;
            height:812px;
        }
    }

</style>


<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="搜索 ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <!--<span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>-->
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <!--<span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>-->
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <!--<span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>-->
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <!--<span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>-->
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    </head>
    <body>


    <div id="floating-panel">
        <input type="hidden" id="start" readonly>
        <b>取貨地點: </b>
        <input type="text" value="<?= $direction['shop_address'] ?>" id="end" readonly>

        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
            下一步
        </button>
        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">掃描二維碼</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url() ?>rider/driver_order_delivery/getDirection/<?= $direction['order_id'] ?>"
                              method="post">
                            <?php
                            if ($img_url) {
                                ?>
                                <center><img src="<?php echo base_url('qrimg/' . $img_url); ?>"></center>
                                <input type="hidden" id="order_id" name="order_id" value="<?= $img_url ?>">
                                <?php
                            }
                            ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">返回</button>
                        <button type="submit" class="btn btn-primary">確定</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
    &nbsp
    <div id="warnings-panel"></div>
    <script>
        function initMap() {
            var markerArray = [];

            // Instantiate a directions service.
            var directionsService = new google.maps.DirectionsService;

            // Create a map and center it on Manhattan.
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: {lat: 1.532027, lng: 103.79326900000001}
            });

            // Create a renderer for directions and bind it to the map.
            var directionsDisplay = new google.maps.DirectionsRenderer({map: map});

            // Instantiate an info window to hold step text.
            var stepDisplay = new google.maps.InfoWindow;

            // Display the route between the initial start and end selections.
            calculateAndDisplayRoute(
                directionsDisplay, directionsService, markerArray, stepDisplay, map);
            // Listen to change events from the start and end lists.
            var onChangeHandler = function () {
                calculateAndDisplayRoute(
                    directionsDisplay, directionsService, markerArray, stepDisplay, map);
            };
            document.getElementById('start').addEventListener('change', onChangeHandler);
            document.getElementById('end').addEventListener('change', onChangeHandler);

        }

        function calculateAndDisplayRoute(directionsDisplay, directionsService,
                                          markerArray, stepDisplay, map) {
            // First, remove any existing markers from the map.
            for (var i = 0; i < markerArray.length; i++) {
                markerArray[i].setMap(null);
            }
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                document.getElementById('start').value = [position.coords.latitude, position.coords.longitude];
                directionsService.route({
                    origin: document.getElementById('start').value,
                    destination: document.getElementById('end').value,
                    travelMode: 'DRIVING'
                }, function (response, status) {
                    // Route the directions and pass the response to a function to create
                    // markers for each step.
                    if (status === 'OK') {
                        document.getElementById('warnings-panel').innerHTML =
                            '<b>' + '</b>';
                        directionsDisplay.setDirections(response);
                        showSteps(response, map);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            });
        }

        function showSteps(directionResult, markerArray, stepDisplay, map) {
            // For each step, place a marker, and add the text to the marker's infowindow.
            // Also attach the marker to an array so we can keep track of it and remove it
            // when calculating new routes.
            var myRoute = directionResult.routes[0].legs[0];
            for (var i = 0; i < myRoute.steps.length; i++) {
                var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
                marker.setMap(map);
                marker.setPosition(myRoute.steps[i].start_location);
                attachInstructionText(
                    stepDisplay, marker, myRoute.steps[i].instructions, map);
            }
        }

        function attachInstructionText(stepDisplay, marker, text, map) {
            google.maps.event.addListener(marker, 'click', function () {
                // Open an info window when the marker is clicked on, containing the text
                // of the step.
                stepDisplay.setContent(text);
                stepDisplay.open(map, marker);
            });
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Fb3SBTL-Hta3jxIJqjtzevzP8gihzeo&callback=initMap">
    </script>

</div><!-- /#right-panel -->



