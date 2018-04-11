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
  <script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="../../JSCal2-1.7/src/js/jscal2.js"></script>
  <script src="../../JSCal2-1.7/src/js/lang/en.js"></script>
  <script src="../../javascript/Analysis.js"></script>
  <script src="../../javascript/jquery.min.js"></script>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
        <li><a href="../"><span class="glyphicon glyphicon-log-in"></span><? echo $this->lang->line('Logout'); ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">



        <div style="display:inline;float:left;background-color:#DEDEDE;">
           <table>
            <tr>
               <td style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Start_time'); ?></td>
               <td><input type="date"  id="start_date" style="font-size:15px; font-weight:bold; width:150px" /></td>
            </tr>

            <tr>
               <td style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('End_time'); ?></td>
               <td><input type="date" id="end_date" style="font-size:15px;font-weight:bold;width:150px;" /></td>
            </tr>
            <tr>
                <td style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Machine'); ?></td>
               <td><span id="Database"></span></td>
               <td><button type="button" onclick="search_Lot_number_Receipe()"   ><IMG src="../../images/view.png" style="width:25PX; height:25PX" /></button></td>
            </tr>
            <tr>
              <td style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Class'); ?></td>
              <td><span id="Option_Class"></span></td>
            </tr>
            <tr>
              <td style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Option'); ?></td>
              <td><span  id="Option"></span></td>
            </tr>
            <tr>
              <td COLSPAN=2>
                <button id="action" type="submit" style="width:300px; font-weight:bold" onclick="resolution();drawChart();drawChart_ng();drawChart_Yield();">
                <img src="../../images/search2.png" style="height:30px; width:auto; float:left"><? echo $this->lang->line('analysis'); ?></button>
              </td>
            </tr>
            <tr>
               <td COLSPAN=2>
                <button id="action" type="submit" style="width:300px; font-weight:bold" onclick="export_excel();">
                  <img src="../../images/excel.jpg" style="height:30px; width:auto; float:left" /><? echo $this->lang->line('report'); ?></button>
              </td>
            </tr>
          </table>      
    
     
     
    </div>
    <div class="col-sm-8 text-left" style="float:left;" >
  
    
    <div style="float:left; "id='line_top_x'></div>
     <!-- <div style="float:left;" ><h1>再研率</h1></div> -->
      <div style="float:left; clear:left;">
       <p id="resolution_Reshape_NGs"></p>
       <hr>
      </div>
 
     <div style="float:left; "id='line_NG'></div>
       <!-- <div style="float:left;" ><h1>缺點</h1></div>-->
      <div style="float:left;clear:left;">           
      <p id="resolution_NG"></p>
      <hr>
      </div>

      <div style="float:left; "id='line_Yield'></div>
      <!-- <div style="float:left;" ><h1>良率</h1></div> -->
      <div style="float:left;clear:left;">
      
      <p id="resolution_Yield"></p>
    </div>
  </div>

</div>


</body>
</html>

