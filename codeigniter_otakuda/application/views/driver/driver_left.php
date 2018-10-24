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

    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?=base_url()?>driver/assets/scss/style.css">
    <link href="<?=base_url()?>driver/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">
                <!--<img src="images/logo.png" alt="Logo">-->
                <?php echo  $this->session->userdata('rider_name') ?>
            </a>
            <a class="navbar-brand hidden" href="">
                <!--<img src="images/logo2.png" alt="Logo">-->
                C
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?=base_url()?>rider/driver_index"> <i class="menu-icon fa fa-dashboard"></i>主頁</a>
                </li>
                <!--<h3 class="menu-title">UI elements</h3>&lt;!&ndash; /.menu-title &ndash;&gt;-->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>訂單</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="<?=base_url()?>rider/Driver_new_order">新訂單</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="<?=base_url()?>rider/Driver_order_record/getRecord/<?=$this->session->userdata('rider_id')?>">訂單歷史記錄</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="<?=base_url()?>rider/driver_statistic"> <i class="menu-icon fa fa-asterisk"></i>統計</a>
                </li>
                <li class="active">
                    <a href="<?=base_url()?>rider/driver_index"> <i class="menu-icon fa fa-asterisk"></i>設置</a>
                </li>
                <li class="active">
                    <a href="<?= base_url(); ?>rider/driver_login/logout"> <i class="menu-icon fa fa-sign-out"></i>退出</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<script src="<?=base_url()?>driver/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?=base_url()?>driver/assets/js/plugins.js"></script>
<script src="<?=base_url()?>driver/assets/js/main.js"></script>

<script src="<?=base_url()?>driver/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="<?=base_url()?>driver/assets/js/dashboard.js"></script>
<script src="<?=base_url()?>driver/assets/js/widgets.js"></script>
<script src="<?=base_url()?>driver/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?=base_url()?>driver/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>driver/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?=base_url()?>driver/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>