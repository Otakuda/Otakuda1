<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driver Interface</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?= base_url() ?>driver/assets/scss/style.css">
    <link href="<?= base_url() ?>driver/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
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
    </style>
</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">
                <!--<img src="images/logo.png" alt="Logo">-->
                Chong
            </a>
            <a class="navbar-brand hidden" href="">
                <!--<img src="images/logo2.png" alt="Logo">-->
                C
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?= base_url() ?>driver_index"> <i class="menu-icon fa fa-dashboard"></i>主頁</a>
                </li>
                <!--<h3 class="menu-title">UI elements</h3>&lt;!&ndash; /.menu-title &ndash;&gt;-->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>訂單</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="<?= base_url() ?>driver_new_order">新訂單</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="<?= base_url() ?>driver_order_record">訂單歷史記錄</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="<?= base_url() ?>driver_statistic"> <i class="menu-icon fa fa-bar-chart-o"></i>統計</a>
                </li>
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-asterisk"></i>設置</a>
                </li>
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-sign-out"></i>退出</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

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
        <input type="hidden" value="<?= $direction['shop_address'] ?>" id="start" readonly>
        <b>送貨地點: </b>
        <?= $direction['address'] ?>
        <input type="hidden" value="<?= $direction['address'] ?>" id="end" readonly>
        <br>
        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
            下一步
        </button>
        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">提示</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <center><img src="<?php echo base_url('qrimg/' . $img); ?>"></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">返回</button>
                        <a href="<?= base_url() ?>driver_finish_delivery">
                            <button type="button" class="btn btn-primary">確定</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="map"></div>
    &nbsp;
    <div id="warnings-panel"></div>

    <script>
        function initMap() {
            var markerArray = [];

            // Instantiate a directions service.
            var directionsService = new google.maps.DirectionsService;

            // Create a map and center it on Manhattan.
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: 40.771, lng: -73.974}
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

            // Retrieve the start and end locations and create a DirectionsRequest using
            // WALKING directions.
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


<script src="<?= base_url() ?>driver/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?= base_url() ?>driver/assets/js/plugins.js"></script>
<script src="<?= base_url() ?>driver/assets/js/main.js"></script>

<script src="<?= base_url() ?>driver/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="<?= base_url() ?>driver/assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>driver/assets/js/widgets.js"></script>
<script src="<?= base_url() ?>driver/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?= base_url() ?>driver/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>driver/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url() ?>driver/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>
