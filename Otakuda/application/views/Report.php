<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="../../css/checkbox.css" />
<link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/border-radius.css"/>
<link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/jscal2.css" />
<link rel="stylesheet" type="text/css" href="../../JSCal2-1.7/src/css/reduce-spacing.css" />
<link rel="stylesheet" type="text/css" href="../../css/Report.css" />
<link  href="../../css/960.css" rel="stylesheet" media="screen" />
<link href="../../css/defaultTheme.css" rel="stylesheet" media="screen" />
<link href="../../css/myTheme.css" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css">

<script src="../../javascript/report.js" ></script>
<script src="../../JSCal2-1.7/src/js/jscal2.js"></script>
<script src="../../JSCal2-1.7/src/js/lang/en.js"></script>
<script src="../../css/lorder.js"></script>
<script src="../../javascript/Grid.js"></script>
<script src="../../javascript/jquery.min.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.box
{ float: left;
  width: 100px;
  height: 100px;
  margin: 1em;
  clear:left;
}
input[type=checkbox] {width:25px; height:25px;}
label{ font-size:25px; font-family:"微軟正黑體"}
h1{font-family:"微軟正黑體"; background-color:#0C3}
</style>
<title><? echo $this->lang->line('Report');?></title>
</head>

<body onload="Initialize();Get_Chart_Header();">
  <input type="hidden" id=Col_Header >
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
        <li><a href="../?/Logout"><span class="glyphicon glyphicon-log-in"></span><? echo $this->lang->line('Logout');?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="float:left; width:auto">

<form method="post" action=""><!--報表選項   -->



<div id="option" style="float:left; clear:left; display:none; background-color:#CCC; border:double">
<input type="checkbox" name="RESHAPE" checked="checked" /><label>輸出再研率</label>
<h1>輸出資料選項</h1>
<input type="checkbox" id="DATA_ALL" name="DATA_ALL" checked="checked" onchange="changeDisable('DATA_ALL')"  /><label>全部</label><br />
<input type="checkbox" id="DATA_OK" name="DATA_OK" onchange="changeDisable('DATA_OK')" /><label>只有良品</label><br />
<input type="checkbox" id="DATA_NG" name="DATA_NG" onchange="changeDisable('DATA_NG')" /><label>只有不良</label><br />
<h1>輸出影像選項</h1>
<input type="checkbox" id="IMG_ALL" name="IMG_ALL" checked="checked"  onchange="changeDisable('IMG_ALL')"/><label>全部</label><br />
<input type="checkbox" id="IMG_OK" name="IMG_OK"  onchange="changeDisable('DATA_OK')"/><label>只有良品</label><br />
<input type="checkbox" id="IMG_NG" name="IMG_NG" onchange="changeDisable('DATA_NG')"/><label>只有不良</label><br />
<input type="checkbox" id="IMG_NO" name="IMG_NO" /><label>不輸出影像</label><br />

</div>
</form><!--報表選項結束   -->

</div><!-- 左邊區塊結束 -->
<!-- 查詢LOT NUMBER -->
<!-- 日曆 -->
<div style="float:left;  border:#063">
<div style="float:left;">
<table>
<tr>
<!-- <td><button type="button" class="box" onclick="openwindow('1')" ><IMG src="../../images/view.png" style="width:100PX; height:100PX" /></button></td> -->

</tr></table>
<div style="float:left;" >
<table border="1"  >
<tr>
     <td>
        <button id="start_btn" style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('Start_time');?></button>
     </td>
     <td>
        <input width="100px" type="date" id="start_date" style="font-size:15px; font-weight:bold" />
     </td>
</tr>
<tr>
     <td>
          <button id="end_btn" style="width:150px; color:#FFF; background-color:#063;font-size:20px"><? echo $this->lang->line('End_time');?></button>
     </td>
      <td>
         <input width="100px" type="date" id="end_date" style="font-size:15px;font-weight:bold" />
     </td>
</tr>
<tr>
     <td style="font-size:20px; background-color:#060; border:groove; color:#FFF">
     <p style="text-align:center"><? echo $this->lang->line('Machine');?></p>
     </td>
     <td>
     <span id="Database"></span><button type="button" onclick="Search_lot_number()"   ><IMG src="../../images/view.png" style="width:50PX; height:50PX" /></button>
     </td>
</tr>
<tr>
     
      <td style="font-size:20px; background-color:#060; border:groove; color:#FFF">
     <p style="text-align:center" ><? echo $this->lang->line('lot_number');?></p>
     </td>
     <td>
     <span id="Lot_Number_Option"></span>
     </select>
     </td>
</tr>
<tr>
    <td colspan="2" >
    <button id="action" type="submit" style="width:350px; font-weight:bold" onclick="action();drawChart();"><img src="../../images/search2.png" style="height:30px; width:30px; float:left" ><? echo $this->lang->line('Search');?></button>
    </td>
</tr>
<tr>
   <td colspan="2">
    <button  type="submit" style="width:350px; font-weight:bold" onclick="export_excel()"  ><img src="../../images/excel.jpg" style="height:30px; width:30px; float:left" /><? echo $this->lang->line('report');?></button>
    </td>
  </tr>
</table>
<div align="center" style="float:left; background-color:#CCC">

</div>
 <div id="OK"></div>
</div>

<!-- 日曆結束 -->
</div>

<!--查詢結束   -->
<div style="float:left; ">
<div id="chartDiv" style="width: 100%; min-height: 450px;  "></div>
<div style="overflow-x:hidden scroll;overflow-y: scroll; height:500px ">
<div class="table-responsive">
<table class="table table-striped table-bordered table-rwd"  >
<thead >
<tr class="tr-only-hide" >
</thead>


<tbody  id="maintbody" >
</tbody>
</table>   
</div> 			
</div>
</div>


</div>




</body>

</html>
<script><!-- Chart javasrcipt>
google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
  
    function drawChart() {
   
    var lot_number=document.getElementById("Lot_number_Option").value;
    var database=document.getElementById("Database_Option").value;
    var Col_Header=JSON.parse(document.getElementById("Col_Header").value);
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {                
        
      
        var data=xmlhttp.responseText;  
        var array = JSON.parse("[" + data + "]");
        var array2=[];
    for(i=0;i<array.length;i++)
    {
      array2[i]=parseInt(array[i]);
    }
        
    var a=+array[0];
    var b=+array[1];
    var c=+array[2];
    var d=+array[3];
    var e=+array[4];
    var f=+array[5];
    var g=+array[6];
    var h=+array[7];
    var i=+array[8];
    var j=+array[9];
    var k=+array[10];
    var l=+array[11];
    var m=+array[12];
    var n=+array[13];
    var o=+array[14];
    var p=+array[15];
    var q=+array[16];
    var r=+array[17];
    var s=+array[18];
    var t=+array[19];
    var u=+array[20];
    var v=+array[21];
    var col_arr=[];
    array2.sort();
   
    for(i=0;i<array.length;i++)
    {
      
      if(array[i]==array2[21])
      {
      col_arr.push="red";  
      }
      else
      col_arr.push="blue";
    }
    
      var data = google.visualization.arrayToDataTable([
        ["外徑", "數值", { role: "style" } ],
        [Col_Header[0], a, col_arr[0]],// 外徑
        [Col_Header[1], b,col_arr[1]],// 圓角
        [Col_Header[2], c, col_arr[2]],// 缺口深度
        [Col_Header[3], d, col_arr[3]],// 重疊分離
        [Col_Header[4], e, col_arr[4]], //水平分開
        [Col_Header[5], f, col_arr[5]],//偏心
        [Col_Header[6], g,col_arr[6]],//大頭
        [Col_Header[7], h, col_arr[7]],// 小頭
        [Col_Header[8], i,col_arr[8]],// 內弧勾狀
        [Col_Header[9], j, col_arr[9]],//外弧凸狀
        [Col_Header[10], k,col_arr[10]],//心厚
        [Col_Header[11], l,col_arr[11]],//最小心厚
        [Col_Header[12], m, col_arr[12]],// 鑽針磨耗
        [Col_Header[13], n,col_arr[13]],// 切削刃長
        [Col_Header[14], o, col_arr[14]],//中心線
        [Col_Header[15], p, col_arr[15]],//長短刃
        [Col_Header[16], q, col_arr[16]],//過切
        [Col_Header[17], r, col_arr[17]],//過切差異
        [Col_Header[18], s, col_arr[18]],//割出
        [Col_Header[19], t, col_arr[19]],//中心研磨不足
        [Col_Header[20], u,col_arr[20]],// 刀痕
        [Col_Header[21], v, col_arr[21]]//    刀形不良
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "NG",
        legend: { position: 'in' },
        width:data.getNumberOfRows() * 65,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        bar: {groupWidth: 20}
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chartDiv"));
      chart.draw(view, options);
    
    document.getElementById('chartDiv').onchange = function() {
           options['vAxis']['format'] = this.value;
           chart.draw(data, options);
         };
            }
        };
        xmlhttp.open("GET", '../index.php/Report/Search_again_chart' + '/' +database+ '/' +lot_number, true);
        xmlhttp.send(); 
  
    
   
  }

  
 

</script>
