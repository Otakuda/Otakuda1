<!DOCTYPE html>
<html >
<head>
  <title>
    <? 
    echo $this->lang->line('title');
    ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="../../javascript/jquery.min.js"></script>
  <script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
   
 
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1><img src="../../images/Log.png"></h1>      
    <p>Drill Resharpening Machine</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../?/user/main">Home</a></li>
        <!--<li><a href="../?/report"><? echo $this->lang->line('Search');?></a></li>-->
        <li><a href="../?/Sum_C"><? echo $this->lang->line('analysis');?></a></li>
        <li><a href="../?/Set_C"><? echo $this->lang->line('Setting');?></a></li>
        <li><a href="../?/Logout"><? echo $this->lang->line('Logout');?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?
$Leavel=$this->session->userdata('leavel');

if ($Leavel=='Admin')
{
  $management='../?/member/manager';
  echo "<a href='$management'<span class='glyphicon glyphicon-user'></span>Management_Account</a>";
}
else
echo "<a href='#'><span class='glyphicon glyphicon-user'</span>Norma_User</a>";

?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <!--
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><? echo $this->lang->line('Search');?></div>
        <div class="panel-body"><a href="../?/report"><img src="../../images/Search.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer"><? echo $this->lang->line('Search');?></div>
      </div>
    </div> -->
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading"><? echo $this->lang->line('analysis');?></div>
        <div class="panel-body"><a href="../?/Sum_C"><img src="../../images/Analysis.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><? echo $this->lang->line('analysis');?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading"><? echo $this->lang->line('Setting');?></div>
        <div class="panel-body"><a href="../?/Set_C"><img src="../../images/Setting.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><span class="panel-heading"><? echo $this->lang->line('Setting');?></span></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row"></div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  
  
</footer>

</body>
</html>
