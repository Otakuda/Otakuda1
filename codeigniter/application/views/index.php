<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Otakuda</title>
    <meta name="description" content="Otakuda">
    <meta name="keywords" content="Otakuda">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="lx:category" content="group">
    <meta name="lx:cid" content="c_91bx6nzd">
    <meta name="lx:appnm" content="mtpc">
    <meta name="lx:autopv" content="off">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/mained.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/index1.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/searchbutton.css">
    <script src="<?= base_url() ?>js/es6-shim.js"></script>
    <script src="<?= base_url() ?>js/react.js"></script>
    <script src="<?= base_url() ?>js/react-dom.js"></script>
    <script src="<?= base_url() ?>js/common.js"></script>


</head>
<body id="main">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/com_header1.css">
<header class="com-header">
    <div class="header-bar">
        <div class="header-content clearfix">
            <div class="header-bar-position">
                <span class="header-icon icon-header_location"></span>
                <span class="current-city">柔佛</span>
                <a class="change-city" href="<?= base_url(); ?>map">切换城市</a>
                <div class="near-citys">[<a class="city-guess" href="">士古来</a>]</div>
                <a class="growth-entry user-importent" href="<?= base_url(); ?>register">立即登录</a>

                <a class="extra-entry" href="<?= base_url(); ?>login">注册</a>

            </div>


            <nav class="header-bar-nav">
                <ul class="header-nav-first">
                    <li class="has-child">
                        <a rel="nofollow" href="" target="_blank">用户
                            <ul class="header-nav-my header-nav-second">
                                <li><a rel="nofollow" href="<?= base_url(); ?>order" target="_blank">我的订单</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>evaluate" target="_blank">我的评价</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>collection" target="_blank">我的收藏</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>setting" target="_blank">账户设置</a></li>
                            </ul>
                        </a></li>
                    <li><a href="<?= base_url(); ?>app" target="_blank">手机APP</a></li>
                    <li class="has-child">身份状态
                        <ul class="header-nav-merchant header-nav-second">
                            <li><a rel="nofollow" href="" target="_blank">用户</a></li>
                            <li><a rel="nofollow" href="<?= base_url() . 'loginb'; ?>" target="_blank">商家</a></li>
                        </ul>
                    </li>
                    <li class="has-child">帮助
                        <ul class="header-nav-merchant header-nav-second">
                            <li><a rel="nofollow" href="" target="_blank">Q&A</a></li>

                            <li><a rel="nofollow" href="" target="_blank">常见问题</a></li>

                            <li><a href="" target="_blank">买家问题</a></li>

                            <li><a href="" target="_blank">商家问题</a></li>
                        </ul>
                    </li>
            </nav>
        </div>
    </div>
    <div class="header-content clearfix">
        <div class="header-title-module">
            <div class="header-title">
                <a href="">
                    <img src="<?= base_url() ?>fb/logo.png" alt="Otakuda"></a></div>
        </div>

        <div class="header-search-module">
            <div class="header-search-block">
                <form class="example" action="<?= base_url(); ?>map" method="post"
                      style="margin:auto;max-width:700px">
                    <input type="text" name="search" placeholder="搜索商家或地点">
                    <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="header-search-suggest">
                <div class="header-search-noinput">
                    <div class="header-search-history">
                        <h6>最近搜索</h6>
                        <span class="header-search-clean">删除搜索历史</span>
                        <ul></ul>
                    </div>
                    <h6>热门搜索</h6>
                    <div class="header-search-hotword">
                        <a href="">欢乐超市</a>
                        <a href="">锦合超市</a>
                        <a href="">Pasar Pagi</a>
                    </div>
                </div>
                <div class="header-search-hasinput">
                    <ul></ul>
                </div>
            </div>
            <div class="header-search-hotword">
                <a href="">欢乐超市</a>
                <a href="">锦合超市</a>
                <a href="">big eaon</a>
                <a href="">Giant</a>


            </div>
        </div>
        <a class="header-commitment" href="" target="_blank">
            <ul>
                <li class="commitment-item">
                    <i class="header-icon icon-logo1"></i>
                    <span>随时退</span></li>
                <li class="commitment-item">
                    <i class="header-icon icon-logo2"></i>
                    <span>价格保证</span></li>
                <li class="commitment-item">
                    <i class="header-icon icon-logo3"></i>
                    <span>过期退</span></li>
            </ul>
        </a></div>
</header>
<script>window.comPtData = window.comPtData || {};
    window.comPtData['header'] = {
        "currentCity": {
            "id": 1,
            "name": "北京",
            "pinyin": "beijing",
            "acronym": "bj",
            "onlineTime": "1267632000",
            "open": true,
            "rank": "S",
            "locationId": "110000",
            "position": {"lat": 39.9046669, "lng": 116.4081955},
            "divisionStr": "北京--北京",
            "originGeotagID": 0,
            "realLocationID": "110000",
            "provinceLocationID": "110000",
            "gisID": "110100",
            "chineseFullName": "北京市",
            "isHot": 1,
            "firstChar": "B",
            "originCityID": 0,
            "recommend": 1,
            "newIndex": 1,
            "endTime": "2000000000"
        }
    }</script>
<script src="<?= base_url() ?>js/com_header.js" defer></script>
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
                       class="link waimai-link" title="蔬菜" target="_blank">蔬菜</a>
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
                                         style="background-image:url(<?= base_url() ?>fb/1.jpg)"></div>
                                </div>

                                <div class="slider-item">
                                    <div class="slider-img-div"
                                         style="background-image:url(<?= base_url() ?>fb/2.jpg)"></div>
                                    </a></div>
                                <div class="slider-item">
                                    <div class="slider-img-div" style="background-image:url(<?= base_url() ?>fb/3.jpg)">
                                    </div>
                                </div>
                                <div class="slider-item"
                                ">
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
                    <div class="item shadow pic-1" style="background-image:url(<?= base_url() ?>fb/bat.jpg"></div>
                </a>


                <div class="item banner-logincard">

                    <div style="float:left">
                        <div class="login-container">
                            <div class="default" style="display:block"
                            >
                                <div class="head-img-row"><img src="<?= base_url() ?>fb/user.png" alt=""></div>
                                <p class="user-name">Hi！你好</p>
                                <a class="btn-login" href="<?= base_url(); ?>register">注册</a>
                                <a class="btn-login" href="<?= base_url(); ?>login">立即登录</a></div>
                            <div class="default" style="display:none">
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
                    <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:3}}" class="link"
                       target="_blank">
                        <div class="item pic-2 shadow" style="background-image:url(<?= base_url() ?>fb/v1.jpg"></div>
                    </a>
                    <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:4}}" class="link"
                       target="_blank">
                        <div class="item pic-3 shadow" style="background-image:url(<?= base_url() ?>fb/v2.jpg"></div>
                    </a>
                    <a href="" data-bid="b_a4enk0wd" data-lab="{&quot;custom&quot;:{&quot;index&quot;:5}}" class="link"
                       target="_blank">
                        <div class="item pic-4 shadow" style="background-image:url(<?= base_url() ?>fb/hand.jpg"></div>
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

