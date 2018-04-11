 function Change_day_off()
	  {
		  
		  var Day_off_class=document.getElementById("Day_off_class").value;
		  var id=document.getElementById("id").value;
		  var year=new Date().getFullYear();
		  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var response_data= xmlhttp.responseText;
				var array = JSON.parse(response_data);
				
				document.getElementById("off_hour").value=array[0];
				document.getElementById("off_day").value=+array[0]/24;
				document.getElementById("base_hour").value=array[3];
				
				if(array[1]==0)
				{
					document.getElementById('pay').selectedIndex="0";
			    }
				else if(array[1]==1)
				{
					document.getElementById('pay').selectedIndex="1";
				}
				else
				{
					document.getElementById('pay').selectedIndex="2";
				}
				
				if(array[3]==0)
			  {
				document.getElementById("attendace").checked = false;
			  }
			  else
			  {
				 document.getElementById("attendace").checked = true; 
			  }
				}
        };
		
	    //document.writeln("../index.php/Day_off_C/Find_Day_off_Option"+ '/' +Day_off_class + '/'+id+ '/'+year );
        xmlhttp.open("get", "../index.php/Day_off_C/Find_Day_off_Option"+ '/' +Day_off_class + '/'+id+ '/'+year, true);
        xmlhttp.send();// JavaScript Document
		 
	  }
	  function Update(index)
	  {
		
	    var off_hour=document.getElementById("off_hour").value;
		var base_hour=document.getElementById("base_hour").value;
	  	var sDT_string=document.getElementById("start_date").value;
		var eDT_string=document.getElementById("end_date").value;
		 Date.prototype.dateDiff = function(interval,objDate)
		{
         var dtEnd = new Date(objDate);
          if(isNaN(dtEnd)) return undefined;
          switch (interval) 
		  {
            case "s":return parseInt((dtEnd - this) / 1000);  //秒
            case "n":return parseInt((dtEnd - this) / 60000);  //分
            case "h":return parseInt((dtEnd - this) / 3600000);  //時
            case "d":return parseInt((dtEnd - this) / 86400000);  //天
            case "w":return parseInt((dtEnd - this) / (86400000 * 7));  //週
            case "m":return (dtEnd.getMonth()+1)+((dtEnd.getFullYear()-this.getFullYear())*12) - (this.  getMonth()+1);  //月份
            case "y":return dtEnd.getFullYear() - this.getFullYear();  //天
          }
        }

var sDT = new Date(sDT_string);  //必要項。sDT- 這是在計算中想要使用的第一個日期/時間值。 
var eDT = new Date(eDT_string);  //必要項。eDT- 這是在計算中想要使用的第二個日期/時間值。
if(sDT.dateDiff("h",eDT)>0)
{
	if( (off_hour-sDT.dateDiff("h",eDT))>0 &&  (sDT.dateDiff("h",eDT)% base_hour)==0)
	{
		    
		    var username=document.getElementById("username").value;//姓名
		    var id=document.getElementById("id").value;//帳號
		    var start_date=document.getElementById("start_date").value;
		    var end_date=document.getElementById("end_date").value;//結束時間
			var reason=document.getElementById("myTextarea").value;
			var Day_off_class=document.getElementById("Day_off_class").value;
			var year=new Date().getFullYear();
			
		    var xmlhttp = new XMLHttpRequest();//開始進行非同步傳輸(送出審核     
            xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // document.getElementById("resolution_Reshape_NGs").innerHTML = xmlhttp.responseText;
				alert(xmlhttp.responseText);
				}
        };
		
		       
		var url="../index.php/Repair_C/Update"+"/"+index+"/"+start_date+"/"+end_date+"/"+sDT.dateDiff("h",eDT)+"/"+year+"/"+'/'+Day_off_class+'/'+encodeURIComponent(reason) ;
		
		xmlhttp.open("post", url, true);
        xmlhttp.send();
	}
	else
	{
		alert('休假時數不夠  或必須以最小單位請假');
	}	
}
else
{
 alert('起始日期必續小於結束日期');
}
	  }
	   function Change_day_off()
	  {
		  
		  var Day_off_class=document.getElementById("Day_off_class").value;
		  var id=document.getElementById("id").value;
		  var year=new Date().getFullYear();
		  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var response_data= xmlhttp.responseText;
				var array = JSON.parse(response_data);
				
				document.getElementById("off_hour").value=array[0];
				document.getElementById("off_day").value=+array[0]/24;
				document.getElementById("base_hour").value=array[3];
				
				if(array[1]==0)
				{
					document.getElementById('pay').selectedIndex="0";
			    }
				else if(array[1]==1)
				{
					document.getElementById('pay').selectedIndex="1";
				}
				else
				{
					document.getElementById('pay').selectedIndex="2";
				}
				
				if(array[3]==0)
			  {
				document.getElementById("attendace").checked = false;
			  }
			  else
			  {
				 document.getElementById("attendace").checked = true; 
			  }
				}
        };
	   // document.writeln("../index.php/Day_off_C/Find_Day_off_Option"+ '/' +Day_off_class + '/'+id+ '/'+year );
        xmlhttp.open("get", "../index.php/Day_off_C/Find_Day_off_Option"+ '/' +Day_off_class + '/'+id+ '/'+year, true);
        xmlhttp.send();// JavaScript Document
		 
	  }