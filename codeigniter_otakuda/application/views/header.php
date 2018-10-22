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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/com_header1.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/show_product.css">
    <script src="<?= base_url() ?>js/es6-shim.js"></script>
    <script src="<?= base_url() ?>js/react.js"></script>
    <script src="<?= base_url() ?>js/react-dom.js"></script>
    <script src="<?= base_url() ?>js/common.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body id="main">
<header class="com-header">
    <div class="header-bar">
        <div class="header-content clearfix">
            <div class="header-bar-position">
                <span class="header-icon icon-header_location"></span>
                <span class="current-city"></span>
                <a class="change-city" href="<?= base_url(); ?>place">切换城市</a>
                <div class="near-citys">[<?= $this->session->userdata('state'); ?>]</div>
                <a class="growth-entry user-importent"
                   href="<?= base_url(); ?>setting"><?php echo $this->session->userdata('username'); ?></a>
                <a class="extra-entry" href="<?= base_url(); ?>login/logout">退出</a>
            </div>

            <nav class="header-bar-nav">
                <ul class="header-nav-first">
                    <li><a href="<?= base_url() ?>product_order">購物車</a></li>
                    <li class="has-child">
                        <a rel="nofollow" href="" target="_blank">用户
                            <ul class="header-nav-my header-nav-second">
                                <li><a rel="nofollow" href="<?= base_url(); ?>order">我的订单</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>evaluate">我的评价</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>collection">我的收藏</a></li>
                                <li><a rel="nofollow" href="<?= base_url(); ?>setting">账户设置</a></li>
                            </ul>
                        </a></li>
                    <li><a href="<?= base_url(); ?>app" target="_blank">手机APP</a></li>
                    <li class="has-child">身份状态
                        <ul class="header-nav-merchant header-nav-second">
                            <li><a rel="nofollow">用户</a></li>
                            <li><a rel="nofollow" href="<?= base_url(); ?>trader" target="_blank">商家</a></li>
                            <li><a rel="nofollow" href="<?= base_url(); ?>rider/driver_login" target="_blank">騎手</a></li>
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
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>fb/logo.png" alt="Otakuda"></a></div>
        </div>

        <div class="header-search-module">
            <div class="header-search-block">
                <form class="example" action="<?= base_url(); ?>map" method="post" style="margin:auto;max-width:700px">
                    <input class="header-search-input" type="text" name="search" placeholder="搜索商家或地点">
                    <p hidden><?= $this->session->userdata('state'); ?></p>
                    <button class="header-search-btn" type="submit" name="submit">
                        <span class="header-icon icon-search"></span>
                    </button>
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


