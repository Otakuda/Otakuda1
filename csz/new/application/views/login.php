<!DOCTYPE html>

<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href = "<?php echo base_url(); ?>css/style.css"> 
  <link rel="stylesheet" href = "<?php echo base_url(); ?>css/set1.css"> 

  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

</head>

<body>
<div id="main-wrapper">

  <div class="container-fluid">
    <?php if (isset($_SESSION['success'])){?>
        <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
        <?php
      } ;?>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
    <div class="row">
      <div class="col-md-6 left-side">
        <header>
          <span>登入账号</span>
          <h3>加入我们！</h3>
        </header>
      </div>
      <form action="" method="POST">
      <div class="col-md-6 right-side">
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" id="username" name="username">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="username">
            <span class="input__label-content input__label-content--hoshi">Username</span>
          </label>
        </span>
      
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" id="password" name="password">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span>
          </label>
        </span>
       
        <div class="cta">
          <button onclick="signin()" class="btn btn-primary pull-left" name="login">
            Sign-Up Now
          </button>
        
        </div>
        </form>
       
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/script.js"></script> 
         <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/classie.js"></script> 
<script>
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );
  
    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }
  })();
  function signin() {
    alert("登入成功");
};
</script>



</body></html>