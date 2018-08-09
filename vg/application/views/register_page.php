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
    <link rel="stylesheet" type="text/css" href="../css/main1.css">
</head>
<body>
    
    <form action="<?= base_url(); ?>register/doRegister" method="post" onsubmit="return checkCheckBoxes(this);">
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
   <div class="box ">
   <label>
    <input type="checkbox" required name="terms">
   

   
    <a href="" 
  target="popup" 
  onclick="window.open('<?= base_url() . 'terms'; ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
    Terms
</a></div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <span class="float-right"><a href="<?= base_url() . 'login'; ?>" class="btn btn-primary">Login</a></span>

        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    

    

</form>
    
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


