<!DOCTYPE html>
<html lang="en">
<head>
  <title><? echo $this->lang->line('analysis'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/border-radius.css"/>
  <link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/jscal2.css" />
   <link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/reduce-spacing.css" /> 
  <script type="text/javascript" src="../../javascript//loader.js"></script>
  <!-- <script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> -->
  <script src="../../JSCal2-1.7/src/js/jscal2.js"></script>
  <script src="../../JSCal2-1.7/src/js/lang/en.js"></script>
  <script src="../../javascript/Sum.js"></script>
  <script src="../../javascript/jquery.min.js"></script>
  <link rel="stylesheet" href="../../css/jquery-ui.css">
  
  <script src="../../javascript/jquery-1.12.4.js"></script>
  <script src="../../javascript/jquery-ui.js"></script>
  <style>
 
    /* Remove the navbar's default margin-bottom and rounded borders */
    body
    {
      font-family: "微軟正黑體";
      background-color:#DEDEDE;
    }
    #loading { 
    z-index: 1;
    padding: 10px 10px 5px;
    background: rgb(255, 0, 136);
    left: 0;
    top: 0;
    color: #fff;
    position: fixed;
    width: 150px;
    height: 30px;
    text-align: center;
    box-shadow: 2px 2px 10px;
    border-radius: 5px;
    display: none;
    
}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    .footer_1 {
      background-color: #555;
      color: white;
      /*padding: 15px;*/
	  box-sizing: border-box;
    /* 設定footer絕對位置在底部 */
    position: absolute;
    bottom: 0;
    /* 展開footer寬度 */
    width: 100%;
    }
    table
    {
     
    }
	td
	{
		font-family:"微軟正黑體";
		font-size:15px;
		text-align:center;
	}
	th
	{
		font-family:"微軟正黑體";
		font-size:20px;
		text-align:center;
		color:#000;
		background-color:#999;
		width:auto;
	}
	h1
	{
		font-family:"微軟正黑體";
		font-size:50px;
		background-color:#060;
		color:#FFF;
	}
  ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {background-color: #ddd;}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {background-color: #ccc;}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body onload="Initialize();">
    <div style="background-color: black">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../?/user/main"><img src="../../images/Log.png" style="height:40px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../?/Logout"><span class="glyphicon glyphicon-log-in"></span><? echo $this->lang->line('Logout');?></a></li>
      </ul>
    </div>
  </div>
  <div class="container-fluid text-center">
   <div class="col-sm-2 sidenav"> 
           
            <div class="row content">               
               <p style="width:150px; color:#FFF; background-color:#063;font-size:20px" ><? echo $this->lang->line('Start_time'); ?></p>
               <p><input type="date"  id="start_date"  class="form-control" /></p>
               <p><input type="time" id="start_time"  class="form-control"></p>
               <p style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('End_time'); ?></p>
               <p></p><input type="date" id="end_date"  class="form-control"/></p>
               <p><input type="time" id="end_time"  class="form-control"></p>
               <p style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Machine'); ?></p>
               <p ><span id="Database"></span></p> 
               <p style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Option'); ?></p>
               <p><span  id="area_lot_number"></span></p>
               <button id="action" type="submit" class="btn" onclick="Resolution();openarea(event, 'Search');utilization();">
               <img src="../../images/search2.png" style="height:30px; width:auto; float:left"><? echo $this->lang->line('analysis'); ?></button> 
               <button id="action" type="submit" class="btn" onclick="export_excel();">
               <img src="../../images/excel.jpg" style="height:30px; width:auto; float:left" /><? echo $this->lang->line('report'); ?></button>

               <button id="action" type="submit" class="btn" onclick="Open_Dialog();">
               <img src="../../images/Maintain.png" style="height:30px; width:auto; float:left" /><? echo $this->lang->line('Setting'); ?></button>
            </div>            
     
    </div>
    <div class="col-sm-8 text-left">
    <div >
      <ul class="tab">
        <li><a href="javascript:void(0)" class="tablinks" onclick="openarea(event, 'Search');"><? echo $this->lang->line('Search'); ?></a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openarea(event, 'utilization')"><? echo $this->lang->line('utilization'); ?></a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openarea(event, 'NGs')"><? echo $this->lang->line('NGs'); ?></a></li>
        <!--<li><a href="javascript:void(0)" class="tablinks" onclick="openarea(event, 'Reshape_NG')"><? echo $this->lang->line('Reshape_NG'); ?></a></li>-->
     </ul>
   </div>
    <div id="Search" class="tabcontent">
    <table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
        <tr>          
          <th><? echo $this->lang->line('Work_Type'); ?></th>
          <th><? echo $this->lang->line('Yield'); ?></th>
          <th><? echo $this->lang->line('Total'); ?></th>
          <th><? echo $this->lang->line('OK'); ?></th>
          <th><? echo $this->lang->line('Length_NG'); ?></th>
          <th><? echo $this->lang->line('Twist_NG'); ?></th>
          <th><? echo $this->lang->line('Inspect_Total'); ?></th>
          <th><? echo $this->lang->line('Inspect_NG'); ?></th>
          <th><? echo $this->lang->line('Reshape_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_ok_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_Total'); ?></th>
          <th><? echo $this->lang->line('Reshape_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_Yield'); ?></th>
          <th><? echo $this->lang->line('Ring_Total'); ?></th>
          <th><? echo $this->lang->line('Depth_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_NG'); ?></th>
        </tr>
        <tbody id="Sum_All">
        </tbody>
      </table>
      <br/>
      <table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
        <tr>
          <th><? echo $this->lang->line('Machine'); ?></th>
          <th><? echo $this->lang->line('Work_Type'); ?></th>
          <th><? echo $this->lang->line('Yield'); ?></th>
          <th><? echo $this->lang->line('Total'); ?></th>
          <th><? echo $this->lang->line('OK'); ?></th>
          <th><? echo $this->lang->line('Length_NG'); ?></th>
          <th><? echo $this->lang->line('Twist_NG'); ?></th>
          <th><? echo $this->lang->line('Inspect_Total'); ?></th>
          <th><? echo $this->lang->line('Inspect_NG'); ?></th>
          <th><? echo $this->lang->line('Reshape_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_ok_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_Total'); ?></th>
          <th><? echo $this->lang->line('Reshape_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_Yield'); ?></th>
          <th><? echo $this->lang->line('Ring_Total'); ?></th>
          <th><? echo $this->lang->line('Depth_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_NG'); ?></th>
        </tr>
        <tbody id="Sum_area">
        </tbody>
      </table>
      <br/>
      <table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
        <tr>
          <th><? echo $this->lang->line('Machine'); ?></th>
          <th><? echo $this->lang->line('lot_number'); ?></th>
          <th><? echo $this->lang->line('Start_time'); ?></th>
          <th><? echo $this->lang->line('End_time'); ?></th>
          <th><? echo $this->lang->line('totla_time'); ?></th>
          <th><? echo $this->lang->line('Yield'); ?></th>
          <th><? echo $this->lang->line('Total'); ?></th>
          <th><? echo $this->lang->line('OK'); ?></th>
          <th><? echo $this->lang->line('Length_NG'); ?></th>
          <th><? echo $this->lang->line('Twist_NG'); ?></th>
          <th><? echo $this->lang->line('Inspect_Total'); ?></th>
          <th><? echo $this->lang->line('Inspect_NG'); ?></th>
          <th><? echo $this->lang->line('Reshape_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_ok_Rate'); ?></th>
          <th><? echo $this->lang->line('Reshape_Total'); ?></th>
          <th><? echo $this->lang->line('Reshape_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_Yield'); ?></th>
          <th><? echo $this->lang->line('Ring_Total'); ?></th>
          <th><? echo $this->lang->line('Depth_NG'); ?></th>
          <th><? echo $this->lang->line('Ring_NG'); ?></th>
        </tr>
        <tbody id="Display_area">
        </tbody>
      </table>
       
    </div>
    
    <div id="utilization" class="tabcontent">
      <table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
        <tr>
          <th><? echo $this->lang->line('Save_Time'); ?></th>
          <th><? echo $this->lang->line('Machine'); ?></th>
          <th><? echo $this->lang->line('utilization'); ?></th>
          <th><? echo $this->lang->line('Days'); ?></th>
          <th><? echo $this->lang->line('Hours'); ?></th>
          <th><? echo $this->lang->line('Minutes'); ?></th>
          <th><? echo $this->lang->line('Seconds'); ?></th>
        </tr>
        <tbody id="utilization_area">
        </tbody>
      </table>
    </div>

    <div id="NGs" class="tabcontent">
        <div id="NGs_area"></div>     
    </div>

    <div id="Reshape_NG" class="tabcontent">
        <div id="Reshape_NG_area"></div>     
    </div>
  </div>
  </div>
  <div id='Setting' title="Setting" style="display: none;">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="AutoCheck">
      <label class="form-check-label" for="defaultCheck1">       
       <? echo $this->lang->line('auto Update'); ?>
  </label>
</div>
  </div>
</body>
</html>