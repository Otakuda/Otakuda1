<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>css/animate.css" rel="stylesheet" />
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>color/default.css" rel="stylesheet">
</head>

<body>


<form action="<?php echo base_url();?>index.php/Rider_C/start_read" method="post">

    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">骑士的基本起步</h2>
                        <div class="divider-header"></div>
                        <p>亲爱的骑士，你需要通过以下的事项来完成你成为骑士的条件</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div >
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="pe-7s-monitor pe-5x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>在线培训</h5>
                                <p>
                                    利用简单的ppt来告诉您<br/>我们的使用方便。<br/>
                                    以及一些简单概念
                                </p>
                                <input type="submit" value="开始" class="btn btn-skin">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
                <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
                <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
</form>
<form action="<?php echo base_url();?>index.php/Questions/quizdisplay" method="post">

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
                <div class="service-icon">
                    <span class="pe-7s-note pe-5x"></span>
                </div>
                <div class="service-desc">
                    <h5>入门考试</h5>
                    <p>
                        您需要回答一些<br/>简单的问题<br/>
                        来提升自己的知识
                    </p>
                    <input type="submit" value="开始" class="btn btn-skin">
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
    <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
    <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
    <br>
</form>
<form method="post" action="<?php echo base_url();?>index.php/rider/Rider_C/rider_next">
   <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
   <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
   <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
<center><input type="submit" value="下一步" class="btn btn-skin" ></center>
</form>
</body>
</html>
<script src="<?= base_url() ?>js/jquery.min.js"></script>
<script src="<?= base_url() ?>js/wow.min.js"></script>
<script src="<?= base_url() ?>js/custom.js"></script>