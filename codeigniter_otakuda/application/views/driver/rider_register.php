<!DOCTYPE html>
<html lang="en">
<head>
    <title>Otakuda骑士注册页面</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="<?= base_url() ?>css/css/util.css">
    <link rel="stylesheet" type="text/css"href="<?= base_url() ?>css/css/main.css">

</head>
<body>
<form action="<?= base_url(); ?>index.php/rider/Rider_C/add_rider" method="post" >
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100  p-b-20">
            <form class="login100-form validate-form">
					<span class="login100-form-title ">
						欢迎来到骑士注册页面
					</span>

                <div class="wrap-input100 validate-input m-t-45 m-b-35" data-validate = "Enter username">
                    <input class="input100" type="text" name="rider_name" id="rider_name">
                    <span class="focus-input100" data-placeholder="用户名字"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input class="input100" type="password" name="rider_password" id="rider_password">
                    <span class="focus-input100" data-placeholder="密码"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-50" data-validate="email">
                    <input class="input100" type="email" name="rider_email" id="rider_email">
                    <span class="focus-input100" data-placeholder="电子邮件"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" value="Sign up" class="login100-form-btn"/>
                </div>

                <ul class="login-more p-t-50">
                    <li class="m-b-8">
							<span class="txt1">
								已有
							</span>

                        <a href="<?= base_url() ?>rider/driver_login" class="txt2">
                            用户 / 密码?
                        </a>
                    </li>

                    <li>
							<span class="txt1">
								忘记用户/密码？
							</span>

                        <a href="#" class="txt2">
                            找回
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<script src="<?= base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="<?= base_url() ?>js/mainrider.js"></script>

</body>
</html>

