<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?= base_url() ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/main1.css">
</head>
<body>
    
    <form action="<?= base_url(); ?>register/doRegister" method="post" >
    <span class="login100-form-title">
                       Register
                    </span>
    <!-- show error messages if the form validation fails -->
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?=$this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" required class="form-control" id="name">
    </div>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>

    <div class="form-group">
        <label for="pwd">确认密码:</label>
        <input type="password" name="conf_password" required class="form-control" id="conf_password">
    </div>

        <input type="text" name="position" value="user" hidden>

    <button type="submit" class="btn btn-primary">Submit</button>

    <span class="float-right"><a href="<?= base_url() . 'login'; ?>" class="btn btn-primary">Login</a></span>

</form>
  <script src="<?= base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>js/main.js"></script>
</body>
</html>


