function Initialize()/*  search database from server*/
{
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Database").innerHTML = xmlhttp.responseText;
				document.getElementById("Option_Class").innerHTML=
				"<select id='Option_class' style='font-size:20px;width:150px;'>"+
                "<option value='Receipe'>Receipe</option>"+
                "</select>";
            }
        };
        xmlhttp.open("GET", "../index.php/analysis/showdatabase", true);
        xmlhttp.send();// JavaScript Document
}
function Option_class_Change()
{
	var x=document.getElementById("Database_Option").value;
	
	if(x=='All')
	{
	
		select_string="<select id='Option_class' style='font-size:20px;width:150px;'>"+
                "<option value='Receipe'>Receipe</option>"+
                "</select>";
	}
	else
	{
		
		select_string="<select id='Option_class' style='font-size:20px;width:150px;'>"+
		        "<option value='lot_number'>lot_number</option>"+
                "<option value='Receipe'>Receipe</option>"+
                "</select>";
	}
	document.getElementById("Option_Class").innerHTML=select_string;
}
function search_Lot_number_Receipe()
{
	var database=document.getElementById("Database_Option").value;
	var Option_class=document.getElementById("Option_class").value;
	var start=document.getElementById("start_date");
	var end=document.getElementById("end_date");
	
	if((start.value.length==0) || (end.value.length==0))
	{
		alert('日期不能是空白');
	}
	else
	{
	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Option").innerHTML = xmlhttp.responseText;
				}
        };
        xmlhttp.open("post", "../index.php/analysis/search_Lot_number_Receipe"+ '/' +database + '/' +Option_class + '/' + start.value + '/' + end.value, true);
        xmlhttp.send();// JavaScript Document
	}
}
function  resolution()
{
	var database=document.getElementById("Database_Option").value;
	var Option_class=document.getElementById("Option_class").value;
	var Option=document.getElementById("Option_Select").value;
	var start=document.getElementById("start_date");
	var end=document.getElementById("end_date");
	if((start.value.length==0) || (end.value.length==0))
	{
		alert('日期不能是空白');
	}
	else
	{
		
	
	    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("resolution_Reshape_NGs").innerHTML = xmlhttp.responseText;
				}
        };
        xmlhttp.open("post", "../index.php/analysis/resolution_Reshape_NGs"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp.send();
		//...............................................................................................................
		
		var xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.onreadystatechange = function() {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
                document.getElementById("resolution_NG").innerHTML = xmlhttp2.responseText;
				}
        };
        xmlhttp2.open("post", "../index.php/analysis/resolution_NG"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp2.send();
		//...................................................................................................................
		var xmlhttp3 = new XMLHttpRequest();
        xmlhttp3.onreadystatechange = function() {
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
                document.getElementById("resolution_Yield").innerHTML = xmlhttp3.responseText;
				}
        };
        xmlhttp3.open("post", "../index.php/analysis/resolution_Yield"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp3.send();
	}

}


google.charts.load('current', {'packages':['line']});
      //google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
		
		 var database=document.getElementById("Database_Option").value;
	     var Option_class=document.getElementById("Option_class").value;
	     var Option=document.getElementById("Option_Select").value;
	     var start=document.getElementById("start_date");
	     var end=document.getElementById("end_date");
		 var xmlhttp5 = new XMLHttpRequest();
        xmlhttp5.onreadystatechange = function() {
            if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
                //document.getElementById("resolution_Reshape_NGs").innerHTML = xmlhttp5.responseText;
				var response_data=xmlhttp5.responseText;
				var array = JSON.parse(response_data);
				
			var data = new google.visualization.DataTable();
			
      data.addColumn('string', 'Measurement');
	   for(var i=0;i<array.length;i++)
	  {
		  data.addColumn('number',array[i][0]+'/'+array[i][1]+'/'+array[i][2]);
	  }
      
	   var Rows=[],data2=[];
	   var Yeld=['a','b','c','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良'];
	   for (var i=3;i<array[0].length-3;i++)
	   {
		   data2.push(Yeld[i]);
		   for (var j=0;j<array.length;j++)
		   {
			   data2.push(parseInt(array[j][i]));
			   
		   }
		  Rows[i]=data2;  		  
		  data2=[];   
	   }

	
	   for (var i = 1; i < Rows.length; i++)
	   {
		   
		   data.addRow(Rows[i]);  
		   }
            
	  
	 
      var options = {
        chart: {
          title: '再研率管制圖',
          subtitle: '單位 %'
        },
        width: 900,
        height: 500
        
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, options);
    
	 
				}
        };
        xmlhttp5.open("post", "../index.php/analysis/Draw_resolution_Reshape_NGs"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp5.send();

      
    }	
	function drawChart_ng() {
		
		 var database=document.getElementById("Database_Option").value;
	     var Option_class=document.getElementById("Option_class").value;
	     var Option=document.getElementById("Option_Select").value;
	     var start=document.getElementById("start_date");
	     var end=document.getElementById("end_date");
		 var xmlhttp6 = new XMLHttpRequest();
        xmlhttp6.onreadystatechange = function() {
            if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
                //document.getElementById("resolution_Reshape_NGs").innerHTML = xmlhttp5.responseText;
				var response_data=xmlhttp6.responseText;
				var array = JSON.parse(response_data);
				
			var data = new google.visualization.DataTable();
			
      data.addColumn('string', 'Measurement');
	   for(var i=0;i<array.length;i++)
	  {
		  data.addColumn('number',array[i][0]+'/'+array[i][1]+'/'+array[i][2]);
	  }
      
	   var Rows=[],data2=[];
	   var Yeld=['a','b','c','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良'];
	   for (var i=3;i<array[0].length-3;i++)
	   {
		   data2.push(Yeld[i]);
		   for (var j=0;j<array.length;j++)
		   {
			   data2.push(parseInt(array[j][i]));
			   
		   }
		  Rows[i]=data2;  		  
		  data2=[];   
	   }

	
	   for (var i = 1; i < Rows.length; i++)
	   {
		   
		   data.addRow(Rows[i]);  
		   }
            
	  
	 
      var options = {
        chart: {
          title: '缺點管制圖',
          subtitle: '單位 %'
        },
        width: 900,
        height: 500
       
      };

      var chart = new google.charts.Line(document.getElementById('line_NG'));

      chart.draw(data, options);
    
	 
				}
        };
        xmlhttp6.open("post", "../index.php/analysis/Draw_resolution_NG"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp6.send();

      
    }	
function drawChart_Yield() {
		
		 var database=document.getElementById("Database_Option").value;
	     var Option_class=document.getElementById("Option_class").value;
	     var Option=document.getElementById("Option_Select").value;
	     var start=document.getElementById("start_date");
	     var end=document.getElementById("end_date");
		 var xmlhttp7 = new XMLHttpRequest();
        xmlhttp7.onreadystatechange = function() {
            if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200) {
                //document.getElementById("resolution_Reshape_NGs").innerHTML = xmlhttp5.responseText;
				var response_data=xmlhttp7.responseText;
				var array = JSON.parse(response_data);
				
			var data = new google.visualization.DataTable();
			
      data.addColumn('string', 'Measurement');
	   for(var i=0;i<array.length;i++)
	  {
		  data.addColumn('number',array[i][0]+'/'+array[i][1]+'/'+array[i][2]);
	  }
      
	   var Rows=[],data2=[];
	   var Yeld=['機台','規格名稱','批號','產能','良率','再研率','補環良率'];
	   for (var i=3;i<array[0].length;i++)
	   {
		   data2.push(Yeld[i]);
		   for (var j=0;j<array.length;j++)
		   {
			   data2.push(parseInt(array[j][i]));
			   
		   }
		  Rows[i]=data2;  		  
		  data2=[];   
	   }

	
	   for (var i = 1; i < Rows.length; i++)
	   {
		   
		   data.addRow(Rows[i]);  
		   }
            
	  
	 
      var options = {
        chart: {
          title: '良率/產能',
          subtitle: '單位 %'
        },
        width: 900,
        height: 500
        
      };

      var chart = new google.charts.Line(document.getElementById('line_Yield'));

      chart.draw(data, options);
    
	 
				}
        };
        xmlhttp7.open("post", "../index.php/analysis/Draw_resolution_Yield"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value, true);
        xmlhttp7.send();

      
    }	
function export_excel()
{
	
	     var database=document.getElementById("Database_Option").value;
	     var Option_class=document.getElementById("Option_class").value;
	     var Option=document.getElementById("Option_Select").value;
	     var start=document.getElementById("start_date");
	     var end=document.getElementById("end_date");
	if(Option.length!=0)
	{
		window.location ="../index.php/analysis/EXPORT_text"+ '/' +database + '/' +Option_class + '/' +Option + '/' + start.value + '/' + end.value;
	}
	
}
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}