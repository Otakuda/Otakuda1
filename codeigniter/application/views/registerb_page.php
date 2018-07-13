<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/registerbusiness.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/map.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!--===============================================================================================-->

</head>
<body>

<form action="<?= base_url(); ?>registerb/doRegister" method="post" enctype="multipart/form-data">

    <center><h1> 商家注册</h1></center>
    </span>
    <!-- show error messages if the form validation fails -->
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
    <div class="container">

        <div class="row">
            <div class="col-25">
                <label for="name">账号</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" >
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="phone">店家联络号码</label>
            </div>
            <div class="col-75">
                <input type="text" id="phone" name="phone" required placeholder="请输入店家联络号码">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="hphone">手机号码</label>
            </div>
            <div class="col-75">
                <input type="text" id="hphone" name="hphone" required placeholder="请输入手机号码">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="email">电子邮件</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" required placeholder="请输入电子邮件">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address">密码</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" class="controls" name="password" required placeholder="请输入密码">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address">确认密码</label>
            </div>
            <div class="col-75">
                <input type="password" id="confirm_password" class="controls" name="confirm_password"
                       placeholder="请输入密码">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address">店家地址</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" class="controls" name="address">
            </div>
            <div>
                <input id="submit" type="button" value="Geocode">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address">店面图片</label>
            </div>
            <div class="col-75">
                <input type="file" id="file" class="controls" name="shopPhoto" >
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address"></label>
            </div>
            <div class="col-75">
                <input type="text" id="lat" class="controls" name="lat" hidden>
                <input type="text" id="lng" class="controls" name="lng" hidden>
            </div>
        </div>

        <center>
            <button type="submit" class="btn btn-primary">提交</button>
</form>
<br>
<span class="float-right"><a href="<?= base_url() . 'loginb'; ?>">已有帐号，去登录>>></a></span></center>
</div>

<div class="col-75" id="map" style="float:right">


    <script src="<?= base_url() ?>js/main.js"></script>
    <script src="<?= base_url() ?>js/confirm_password.js"></script>
<!--    <script src="--><?//= base_url() ?><!--js/imageupload.js"></script>-->
    <script src="<?= base_url() ?>js/mapsearch.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Fb3SBTL-Hta3jxIJqjtzevzP8gihzeo&callback=initMap">
    </script>
</body>
</html>


