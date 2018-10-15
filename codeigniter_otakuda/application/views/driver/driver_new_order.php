
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

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">新訂單</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>店面名字</th>
                                    <th>發貨地址</th>
                                    <th>收件人姓名</th>
                                    <th>送貨地址</th>
                                    <th>訂單詳情</th>
                                    <th>距離/時間</th>
                                    <th>接/拒单</th>
                                </tr>
                                </thead>
                                <?php
                                foreach ($orderD as $item):
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <?= $item['order_id'] ?>
                                        </td>
                                        <td>
                                            <?= $item['shop_name'] ?>
                                        </td>
                                        <td>
                                            <?= $item['shop_address'] ?>
                                            <input type="hidden" value="<?= $item['shop_address'] ?>" id="start"
                                                   readonly>
                                        </td>
                                        <td>
                                            <?= $item['name'] ?>
                                        </td>
                                        <td>
                                            <?= $item['address'] ?>
                                            <input type="hidden" value="<?= $item['address'] ?>" id="end" readonly>
                                        </td>
                                        <td>
                                            <a href="<?= base_url() ?>Driver_new_order_detail/get_orderDetail/<?= $item['order_id'] ?>">
                                                <button type="button" data-toggle="modal" data-target="#mediumModal">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <div id="output"></div>
                                        </td>
                                        <td>
                                            <a href="<?= base_url() ?>Driver_new_order/next/<?= $item['order_id'] ?>">
                                                <button type="button">
                                                    拒單
                                                </button>
                                            </a>

                                            <a href="<?= base_url() ?>Driver_to_shop/getDirection/<?= $item['order_id'] ?>">
                                                <button>
                                                    接單
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                    <div id="map" hidden></div>


                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    <script>
        function initMap() {
            var bounds = new google.maps.LatLngBounds;
            var markersArray = [];

            var origin = document.getElementById('start').value;
            var destination = document.getElementById('end').value;

            var destinationIcon = {lat: 1.5320015, lng: 103.79326709999998};
            var originIcon = {lat: 1.5381871, lng: 103.67989499999999};
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 55.53, lng: 9.4},
                zoom: 10
            });
            var geocoder = new google.maps.Geocoder;
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                document.getElementById('latlng').value = [position.coords.latitude, position.coords.longitude];
            });
            var service = new google.maps.DistanceMatrixService;
            service.getDistanceMatrix({
                origins: [origin],
                destinations: [destination],
                travelMode: 'DRIVING',
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status !== 'OK') {
                    alert('Error was: ' + status);
                } else {
                    var originList = response.originAddresses;
                    var destinationList = response.destinationAddresses;
                    var outputDiv = document.getElementById('output');
                    outputDiv.innerHTML = '';
                    deleteMarkers(markersArray);

                    var showGeocodedAddressOnMap = function (asDestination) {
                        var icon = asDestination ? destinationIcon : originIcon;
                        return function (results, status) {
                            if (status === 'OK') {
                                map.fitBounds(bounds.extend(results[0].geometry.location));
                                markersArray.push(new google.maps.Marker({
                                    map: map,
                                    position: results[0].geometry.location,
                                    icon: icon
                                }));
                            } else {
                                alert('Geocode was not successful due to: ' + status);
                            }
                        };
                    };

                    for (var i = 0; i < originList.length; i++) {
                        var results = response.rows[i].elements;
                        geocoder.geocode({'address': originList[i]},
                            showGeocodedAddressOnMap(false));
                        for (var j = 0; j < results.length; j++) {
                            geocoder.geocode({'address': destinationList[j]},
                                showGeocodedAddressOnMap(true));
                            outputDiv.innerHTML += '距離:' + results[j].distance.text + '<br>'
                                + '時間:' + results[j].duration.text + '<br>'
                            ;
                        }
                    }
                }
            });
        }

        function deleteMarkers(markersArray) {
            for (var i = 0; i < markersArray.length; i++) {
                markersArray[i].setMap(null);
            }
            markersArray = [];
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Fb3SBTL-Hta3jxIJqjtzevzP8gihzeo&callback=initMap">
    </script>
</div><!-- /#right-panel -->



