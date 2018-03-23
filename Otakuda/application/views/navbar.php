<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-submenu.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/docs.min.css">

<script src="http://code.jquery.com/jquery-2.1.1.min.js" defer></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" defer></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-submenu.min.js" defer></script>
<script src="<?php echo base_url(); ?>assets/js/docs.js" defer></script>

</head>
<body>
<div class="collapse navbar-collapse">
       <?php echo $this->multi_menu->render(array(
            'nav_tag_open'        => '<ul class="nav navbar-nav">',            
            'parentl1_tag_open'   => '<li class="dropdown">',
            'parentl1_anchor'     => '<a tabindex="0" data-toggle="dropdown" href="%s">%s<span class="caret"></span></a>',
            'parent_tag_open'     => '<li class="dropdown-submenu">',
            'parent_anchor'       => '<a href="%s" data-toggle="dropdown">%s</a>',
            'children_tag_open'   => '<ul class="dropdown-menu">'
        )); ?>
      </div>
      </body>
      </html>