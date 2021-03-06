<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="limiter">
        <div class="container-login100">
            
            <div class="wrap-login100">
                <span class="login99-form-title">Otakuda</span>
                <div class="login100-pic " >
                    
                    <img src="../images/01.png" alt="IMG"></img>
                     
                </div>

<form action="<?= base_url(); ?>login/doLogin" method="post" class="login100-form validate-form">
    
   
   

    
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <span class="member">账号登入</span>
    <div class="wrap-input100 validate-input">
    

        <input class="input100" type="email" name="email" placeholder="Email" id="email" for="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" id="pwd" for="pwd">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" onclick="">
                            Login
        </button>
        </div>
    
    
    <div class="text-center p-t-12">
                        <a href="<?= base_url() . 'register'; ?>" >Not accout?Register Now</a>
                            
               
    </div>
   <div class="text-center p-t-136">
                       <a href="<?= base_url() . 'forget'; ?>">Forget Password?</a>
                    </div>


</form>
</div>
</div>
</div>


    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="../js/main.js"></script>
</body>
</html>


