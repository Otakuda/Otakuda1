setInterval(Auto_Update,15000);

Date.prototype.addDays = function(days) {
  var dat = new Date(this.valueOf());
  dat.setDate(dat.getDate() + days);
  return dat;
}
function Initialize()/*  search database from server*/
{
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Database").innerHTML = xmlhttp.responseText;				
            }
        };
        xmlhttp.open("GET", "../index.php/Sum_C/showdatabase", true);
        xmlhttp.send();// JavaScript Document
}

function Search_lot_number()
{
	var start_date=document.getElementById('start_date').value;
	var start_time=document.getElementById('start_time').value;
	var start=start_date+" "+start_time+":00";

	var end_date=document.getElementById('end_date').value;
	var end_time=document.getElementById('end_time').value;
	var end=end_date+" "+end_time+":00";

	var database=document.getElementById("Database_Option").value;
    
    if(start.length>5 && end.length>5)
    {
    	var xmlhttp=new XMLHttpRequest();
	    xmlhttp.onreadystatechange=function()
	    {
		   if(xmlhttp.readyState==4 && xmlhttp.status ==200)
		  {
			document.getElementById('area_lot_number').innerHTML=xmlhttp.responseText;
		  }
	    };
        url="../index.php/Sum_C/Get_lot_number/"+database+"/"+start+"/"+end;
	    xmlhttp.open("POST",url,true);
	    xmlhttp.send(); 
    }
    else
    {
    	alert("開始時間和結束時間不能為空");
    }
	
}
function Get_Day(value)
{
    var today = new Date(value);
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    } 

    if(mm<10) {
        mm = '0'+mm
    } 
    today=yyyy+'-'+mm+'-'+dd;
   return today;
}
function Get_Now_Time()
{
    var today = new Date();
    var dd = today.getDate();
    var hh=today.getHours();
    var mm=today.getMinutes();
    var ss=today.getSeconds();
    return hh+":"+mm+":"+ss;
}
function Auto_Update()
{
    var d=new Date();
    var time=Get_Now_Time();
    if(time>'08:00:00' && time<'20:00:00')
    {
        var start_time=Get_Day(d.addDays(0))+" 08:00:00";
        var end_time=Get_Day(d.addDays(0))+" 20:00:00";
    }
    else
    {
        var start_time=Get_Day(d.addDays(0))+" 20:00:00";
        var end_time=Get_Day(d.addDays(1))+" 08:00:00";
    }
    var AutoCheck=document.getElementById('AutoCheck').checked;
    var Data=['All',start_time,end_time];
    if(AutoCheck==true)
    {
      var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status ==200)
          {
            document.getElementById('Display_area').innerHTML=xmlhttp.responseText;
            Sum(Data);
            Sum_All(Data);
            NGs_analysis(Data);
            Reshape_NGs_analysis(Data);
          }
        };
        url="../index.php/Sum_C/Resolution";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data));   
    }
    
}

function Resolution()
{
	var start_date=document.getElementById('start_date').value;
	var start_time=document.getElementById('start_time').value;
	var start=start_date+" "+start_time+":00";

	var end_date=document.getElementById('end_date').value;
	var end_time=document.getElementById('end_time').value;
	var end=end_date+" "+end_time+":00";

	var database=document.getElementById("Database_Option").value;
	if(database!='All')
	{
		var lot_number=document.getElementById('lot_number').value;
		var Data=[database,start,end,lot_number];
	}
	else
	{
	    var Data=[database,start,end];	
	}
    

    if(start.length<4 || end.length<4 || database.length==0 )
    {
    	alert("Time is not empty");
    }
    else
    {
    	
    	var xmlhttp=new XMLHttpRequest();
	    xmlhttp.onreadystatechange=function()
	    {
		   if(xmlhttp.readyState==4 && xmlhttp.status ==200)
		  {
			document.getElementById('Display_area').innerHTML=xmlhttp.responseText;
            Sum(Data);
            Sum_All(Data);
            NGs_analysis(Data);
            Reshape_NGs_analysis(Data);
		  }
	    };
        url="../index.php/Sum_C/Resolution";
	    xmlhttp.open("POST",url,true);
	    xmlhttp.send(JSON.stringify(Data)); 

    }
}

function Sum(Data)
{

        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status ==200)
          {
            document.getElementById('Sum_area').innerHTML=xmlhttp.responseText;
          }
        };
        url="../index.php/Sum_C/Sum";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data)); 
}

function Sum_All(Data)
{
    var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status ==200)
          {
            document.getElementById('Sum_All').innerHTML=xmlhttp.responseText;
          }
        };
        url="../index.php/Sum_C/Sum_All";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data)); 
}
function utilization()
{
    var start_date=document.getElementById('start_date').value;
    var start_time=document.getElementById('start_time').value;
    var start=start_date+" "+start_time+":00";

    var end_date=document.getElementById('end_date').value;
    var end_time=document.getElementById('end_time').value;
    var end=end_date+" "+end_time+":00";
    var database=document.getElementById("Database_Option").value;
     var Data=[database,start,end]; 
    var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        
                        document.getElementById('utilization_area').innerHTML=xmlhttp.responseText;             
                                                                     
                      }
                    };
        url="../index.php/Sum_C/utilization";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data)); 
}

 function openarea(evt, cityName) 
 {
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
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function NGs_analysis(Data)
{
    var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status ==200)
          {
            document.getElementById('NGs_area').innerHTML=xmlhttp.responseText;
          }
        };
        url="../index.php/Sum_C/NGs_analysis";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data)); 
}

function Reshape_NGs_analysis(Data)
{
    var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status ==200)
          {
            document.getElementById('Reshape_NG_area').innerHTML=xmlhttp.responseText;
          }
        };
        url="../index.php/Sum_C/Reshape_NGs_analysis";
        xmlhttp.open("POST",url,true);
        xmlhttp.send(JSON.stringify(Data)); 
}
function Open_Dialog()
{
    $( "#Setting" ).dialog();
}

function export_excel()
{
	var start_date=document.getElementById('start_date').value;
	var start_time=document.getElementById('start_time').value;
	var start=start_date+" "+start_time+":00";

	var end_date=document.getElementById('end_date').value;
	var end_time=document.getElementById('end_time').value;
	var end=end_date+" "+end_time+":00";

	var database=document.getElementById("Database_Option").value;
	if(database!='All')
	{
		var lot_number=document.getElementById('lot_number').value;
		var Data=[database,start,end,lot_number];
	}
	else
	{
	    var Data=[database,start,end];	
	}
    

    if(start.length<4 || end.length<4 || database.length==0 )
    {
    	alert("時間不能為空");
    }
    else
    {
    	
    	var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                           window.open("../template/"+message+".xls");           
                        }
                        else
                        {
                           alert(message);
                        }                        
                                                                     
                      }
                    };
        url="../index.php/Sum_C/export_excel";
	    xmlhttp.open("POST",url,true);
	    xmlhttp.send(JSON.stringify(Data)); 
    }
}