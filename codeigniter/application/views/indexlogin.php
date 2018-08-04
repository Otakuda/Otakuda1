<div id="app">

    <div class="banner-container clearfix">
        <div class="left-banner">
            <div class="category-nav-container" style="background-image:url(<?= base_url() ?>fb/yellowback.jpg)">
                <div class="category-nav-title-wrapper">
                    <span class="category-nav-title">全部分类</span>
                </div>


                <div class="category-nav-content-wrapper">
                    <ul>

                        <li class="nav-li" onclick="openPage('veg', this)" id="defaultOpen">
                        <span class=" nav-text-wrapper">
                        <span class="link nav-text">蔬菜</span></span>
                            <i class="nav-right-arrow"></i></li>

                        <li class="nav-li" onclick="openPage('sea', this)">
                        <span class="nav-text-wrapper">
                        <span class="link nav-text ">生鲜</span></span>
                            <i class="nav-right-arrow"></i></li>

                        <li class="nav-li" onclick="openPage('meat', this)">
                        <span class="nav-text-wrapper">
                        <span class="link nav-text ">肉类</span></span>
                            <i class="nav-right-arrow "></i></li>

                   <li class="nav-li " onclick="openPage('fruit', this)">
                        <span class="nav-text-wrapper">
                        <span class="link nav-text ">水果</span></span>
                            <i class="nav-right-arrow"></i></li>
                        <li class="nav-li">
                        </li>
                        <li class="nav-li">
                        </li>
                        <li class="nav-li">
                        </li>
                        <li class="nav-li">
                        </li>
                    </ul>
                    <div id="veg" class="tabcontent">
                        <span>Home</span>
                    </div>
                    <div id="meat" class="tabcontent">
                        <span>meat</span>
                    </div>
                    <div id="fruit" class="tabcontent">
                        <span>fruit</span>
                    </div>
                    <div id="sea" class="tabcontent">
                        <span>sea</span>
                    </div>

                </div>
            </div>

            <div class="right-banner">
                <div class="home-header-links">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" data-bid="b_lalhpjhj" data-lab="{&quot;custom&quot;:{&quot;title&quot;:&quot;蔬菜&quot;}}"
                       class="link waimai-link" title="蔬菜" target="_blank" >蔬菜</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" data-bid="b_lalhpjhj" data-lab="{&quot;custom&quot;:{&quot;title&quot;:&quot;肉类&quot;}}"
                       class="link maoyan-link" title="肉类" query="utm_source=meituanweb"
                       data-query="utm_source=meituanweb" target="_blank">肉类</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" data-bid="b_lalhpjhj" data-lab="{&quot;custom&quot;:{&quot;title&quot;:&quot;海鲜&quot;}}"
                       class="link hotel-link" title="海鲜" target="_blank">海鲜</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" data-bid="b_lalhpjhj" data-lab="{&quot;custom&quot;:{&quot;title&quot;:&quot;水果&quot;}}"
                       class="link homestay-link" title="水果" target="_blank">水果</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" class="link merchant-link" title="加入我们" target="_blank">加入我们</a></div>
                <script src="<?= base_url() ?>js/index1.js"></script>

                <div class="banner-row clearfix">

                    <div class="item banner-slider shadow">
                        <div class="slider" id="banner-slider">
                            <div class="slider-content clearfix" style="width: 2820px;">
                                <div class="slider-item" id="slideshow">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v1.jpg)"></div>
                                </div>

                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v2.jpg)"></div>
                                </div>
                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v3.jpg)">
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v1.jpg)"></div>
                                </div>
                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v2.jpg)"></div>
                                </div>
                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/v3.jpg)"></div>
                                </div>
                            </div>


                            <div class="btn btn-next" onclick="plusDivs(-1)">
                                <i class="iconfont icon-btn_right"></i></div>
                            <div class="btn btn-pre" onclick="plusDivs(1)">
                                <i class="iconfont icon-btn_left"></i></div>
                        </div>
                    </div>

                    <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:2}}" class="link"
                       target="_blank">
                        <div class="item shadow pic-1" style="background-image:url(<?= base_url() ?>fb/back.jpg"></div>
                    </a>
                    <div class="item banner-logincard">

                        <div style="float:left">
                            <div class="login-container">
                                <div class="default" style="display:block">
                                <div class="head-img-row"><img src="<?= base_url() ?>fb/user.png" alt=""></div>
                                    <?php echo '<p class="user-name"> ' . $this->session->userdata('username') . "</b></p>";
                                    ?>
                                    <a class="btn-login" href="<?= base_url(); ?>login/logout">退出</a></div>
                                <div class="default" style="display:none">t
                                    <div class="setting">
                                        <a href="" target="_blank">
                                            <div class="icon">
                                                <i class="iconfont icon-setting_iconx"></i></div>
                                        </a></div>
                                    <div class="head-img-row"><a href="" target="_blank">
                                            <img src="<?= base_url() ?>fb/scan.jpg" alt=""></a>
                                    </div>
                                    <div class="fn-row clearfix">
                                        <div class="fn-item">
                                            <a href="" target="_blank">
                                                <div class="fn-item">
                                                    <a href="" target="_blank">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-row clearfix">
                        <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:3}}"
                           class="link"
                           target="_blank">
                            <div class="item pic-2 shadow"
                                 style="background-image:url(<?= base_url() ?>fb/v1.jpg"></div>
                        </a>
                        <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:4}}"
                           class="link"
                           target="_blank">
                            <div class="item pic-3 shadow"
                                 style="background-image:url(<?= base_url() ?>fb/v2.jpg"></div>
                        </a>
                        <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:5}}"
                           class="link"
                           target="_blank">
                            <div class="item pic-4 shadow"
                                 style="background-image:url(<?= base_url() ?>fb/hand.jpg"></div>
                        </a>
                        <div class="item download-app">
                            <div class="qrcode-box">
                                <img src="<?= base_url() ?>fb/scan.png" alt="下载APP"></div>
                            <p class="app-name">APP手机版</p>
                            <p class="sl">
                                <span class="red">现已开放</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px; /* The height is 400 pixels */
        width: 100%; /* The width is the width of the web page */
    }
</style>
<div id="map"></div>

<input type="text" name="state_lat" value="<?= $this->session->userdata('state_lat'); ?>">
<input type="text" name=state_lng" value="<?= $this->session->userdata('state_lng'); ?>">

<script>
    // Initialize and add the map
    function initMap() {
        var uluru = {lat: -25.344, lng: 131.036};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }

    $( function() {
        $( "#dialog" ).dialog();
    } );

</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Fb3SBTL-Hta3jxIJqjtzevzP8gihzeo&callback=initMap">
</script>


