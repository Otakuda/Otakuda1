<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?=base_url()?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/main1.css">
</head>
<body>
<div class="limiter">
        <div class="container-login100">
            
            <div class="wrap-login100">
                <span class="login99-form-title">Otakuda</span>
                <div class="login100-pic " >
                    
                    <img src="<?=base_url()?>images/01.png" alt="IMG"></img>
                     
                </div>

<form  action="<?=base_url();?>loginb/dologinb"  method="post"  class="login100-form validate-form">
    
   
   

    
   
    <span class="member">商家登入</span>
    <div class="wrap-input100 validate-input">
    

        <input class="input100" type="text" name="username" placeholder="账号" id="username" for="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="密码" id="pwd" for="pwd">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" >
                            Login
        </button>
        </div>
    
    
    <div class="text-center p-t-12">
                        <a href="<?= base_url() . 'registersj'; ?>" >还没账户？点击这里申请</a><br>
                            
               
    </div>
   <div class="text-center p-t-136">
                       
                    </div>


</form>
</div>
</div>
</div>


    <script src="<?=base_url()?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="<?=base_url()?>js/main.js"></script>
</body>
</html>


