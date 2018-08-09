
function Send(pa)
{
    
	var client=document.getElementById('client').value;//客戶
	var machine=document.getElementById('machine').value;//機台編號
	var dept=document.getElementById('dept').value;//部門
	var type=document.getElementById('type').value;//類別

	var Out_date=document.getElementById('Out_date').value;
	var Maintain_date=document.getElementById('Maintain_date').value;
	var member=document.getElementById('member').value;
	var Maintain_number=document.getElementById('Maintain_number').value;
    var vistor=document.getElementById('vistor').value;

    var reason=document.getElementById('reason').value;
    var procedure=document.getElementById('procedure').value;


    var start_time=document.getElementById('Start_time').value;
    var end_time=document.getElementById('End_time').value;
    var account=document.getElementById('Account').value;

    var state=document.getElementById('All').checked;

    var demand=document.getElementById('demand').value;
    var purpose=document.getElementById('purpose').value;

   
   

           
            var data=[client,machine,dept,type,Out_date,Maintain_date,member,Maintain_number,reason,procedure,start_time,end_time,account,demand,purpose,vistor];
            
            var note=Confirm(data);
            if(note.length==0)
            {
                var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                            if(state==false)
                            {
                                window.location.reload();
                            }
                           alert(message);             
                        }
                        else
                        {
                            alert("此單資料重複");
                        }                        
                                                                     
                      }
                    };
                
                if(pa==0)
                {
                   var url="../index.php/Maintain_C/Send";
                }
                else
                {
                    var index=document.getElementById('maintain_index').value;
                    var url="../index.php/Maintain_C/Update/"+index;
                }
                xmlhttp.open("post", url, true);
                xmlhttp.send(JSON.stringify(data));
            }
            else
            {
                alert(note);
            }


}


function Confirm(data)
{
    var note="";
    var data_name=['客戶','機台編號','機台型號','機台類別','出廠日期','維修日期','人員','維修單號','故障原因','處理程序','開始時間','結束時間','總額'];
    for (var i=0;i<data.length;i++)
    {
        if(data[i].length==0)
        {
            note=note+data_name[i]+"不能為空"+'\n';
        }
    }

    return note;
}

function Search()
{
    var lot_number=document.getElementById('lot_number').value;
    
    if(lot_number.length!=0)
    {
        var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                            var Data=JSON.parse(message); 
                            Fill_in_the_form(Data);//填入資料
                            Disable_button();//Disable button                           
                            
                             List_item();                           
                            
                        }
                        else
                        {
                           if(message==0)
                           {
                              alert("查無資料!");
                           }
                           else
                           {
                              alert(message);
                           }
                        }                        
                                                                     
                      }
                    };
                    
               
                var url="../index.php/Maintain_C/Search/"+lot_number;             
                
                xmlhttp.open("post", url, true);
                xmlhttp.send();
    }
    else
    {
        alert("請輸入單號");

    }
}

function Search_by_machine()
{
    var lot_number=document.getElementById('lot_number').value;
    
    if(lot_number.length!=0)
    {
        var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                            var Data=JSON.parse(message); 
                            Fill_in_the_form(Data);//填入資料
                            Disable_button();//Disable button                           
                        }
                        else
                        {
                           if(message==0)
                           {
                              alert("查無資料!");
                           }
                           else
                           {
                              alert(message);
                           }
                        }                        
                                                                     
                      }
                    };
                    
                
                var machine=document.getElementById('machine_number').value;
                var url="../index.php/Maintain_C/Search_by_machine/"+lot_number+"/"+machine;
                var Data=[lot_number,machine];
                
                xmlhttp.open("post", url, true);
                xmlhttp.send(JSON.stringify(Data));
    }
    else
    {
        alert("請輸入單號");

    }
}

function Fill_in_the_form(Data)
{
 
    document.getElementById('Maintain_number').value=Data[0];
    document.getElementById('client').value=Data[1];
    document.getElementById('machine').value=Data[2];
    document.getElementById('dept').value=Data[3];
    document.getElementById('type').value=Data[4];   
    document.getElementById('Out_date').value=Data[5];
    document.getElementById('Maintain_date').value=Data[6];
    document.getElementById('member').value=Data[7];
    document.getElementById('Start_time').value=Data[8];
    document.getElementById('End_time').value=Data[9];
    document.getElementById('Account').value=Data[10];
    document.getElementById('reason').value=Data[11];
    document.getElementById('procedure').value=Data[12];    
    document.getElementById('vistor').value=Data[15];

    

    
    var demand_array=['Order','Warranty','Sale','else']; 
    var purpose_array=['maintain','Sale-Maintain','Change-machine','else'];

    document.getElementById('demand').selectedIndex=demand_array.indexOf(Data[14]);
    document.getElementById('purpose').selectedIndex=purpose_array.indexOf(Data[13]);
    find_number_index(Data[2],Data[0]); 
    
   
}

function Disable_button()
{
   document.getElementById('btn1').style.display="none";
   document.getElementById('btn2').style.display="block";

}


function List_item()
{
    var lot_number=document.getElementById('lot_number').value;

    var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                           document.getElementById('list_item').innerHTML=message;           
                        }
                        else
                        {
                           alert(message);
                        }                        
                                                                     
                      }
                    };
    var url="../index.php/Maintain_C/list_item/"+lot_number;
    xmlhttp.open("post", url, true);
    xmlhttp.send();

}

function Lot_number_change()
{
    var lot_number=document.getElementById('lot_number').value;
    var machine=document.getElementById('machine').value;
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

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

function Search_Maintain_table()
{
    var client= document.getElementById('Search_Client').value;
    var machine=document.getElementById('Search_member').value;
    var type=document.getElementById('Search_type').value;
    var Start_date=document.getElementById('Start_date').value;
    var End_date=document.getElementById('End_date').value;
    var id=document.getElementById('Search_id').value;
    var maintain_number=document.getElementById('Search_maintain_number').value;
   
    var Data=[maintain_number,client,type,machine,id,Start_date,End_date]; 
    //document.writeln(JSON.stringify(Data));  

    if(Data.length==0 )
    {
        alert("輸入條件不能為空的");
    }
    else
    {
       if(Start_date.length!=0 && End_date.length!=0)
       {
          var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                           document.getElementById('content').innerHTML=message;           
                        }
                        else
                        {
                           alert(message);
                        }                        
                                                                     
                      }
                    };
         var url="../index.php/Maintain_C/Search_Maintain_table";
         xmlhttp.open("post", url, true);
         xmlhttp.send(JSON.stringify(Data));
       }
       else
       {
          alert("篩選日期不能為空");
       }
    }
}

function Report()
{
    var client= document.getElementById('Search_Client').value;
    var machine=document.getElementById('Search_member').value;
    var type=document.getElementById('Search_type').value;
    var Start_date=document.getElementById('Start_date').value;
    var End_date=document.getElementById('End_date').value;
    var id=document.getElementById('Search_id').value;
    var maintain_number=document.getElementById('Search_maintain_number').value;

    var Data=[maintain_number,client,type,machine,id,Start_date,End_date];   

    if(Data.length==0 )
    {
        alert("輸入條件不能為空的");
    }
    else
    {
       if(Start_date.length!=0 && End_date.length!=0)
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
         var url="../index.php/Maintain_C/Report";
         xmlhttp.open("post", url, true);
         xmlhttp.send(JSON.stringify(Data));
       }
       else
       {
          alert("篩選日期不能為空");
       }
    }
}

function Initialize()
{
 
   openarea(event,'Maintain');
   document.getElementById('btn1').style.display="block";
   document.getElementById('btn2').style.display="none";
}


function Logout()
     {   
        var r = confirm("是否要登出");
        if (r == true)
         {
            window.location.assign("../index.php/Logout");       
         } 


     }

function find_number_index(machine,maintain_number)
{
   var Data=[machine,maintain_number];
   var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        document.getElementById('maintain_index').value=message;             
                                                                     
                      }
                    };
         var url="../index.php/Maintain_C/find_number_index";
         xmlhttp.open("post", url, true);
         xmlhttp.send(JSON.stringify(Data));
}


function Search_Upload()
{
   var maintain_number=document.getElementById('Upload_maintain_number').value;
   var Start_date=document.getElementById('Upload_Start_date').value;
   var End_date=document.getElementById('Upload_End_date').value;
   var upload=document.getElementById('upload_option').value;
   var Data=[maintain_number,upload,Start_date,End_date];


   var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        if(message!="Error")
                        {
                           document.getElementById('Upload_area').innerHTML=message;           
                        }
                        else
                        {
                           alert(message);
                        }                        
                                                                     
                      }
                    };
    var url="../index.php/Maintain_C/Search_Upload";
    xmlhttp.open("post", url, true);
    xmlhttp.send(JSON.stringify(Data));

}

function Upload_file(index)
{
  var file_name=index+"_upload";
  var state=index+"_state";
  var file=document.getElementById(file_name).files[0];//取得檔案
  if(Confirm_Data_Type(file_name)!='pdf')
  {
    alert("資料型態錯誤，請確認為PDF檔案");
  }
  else
  {
      
      if( document.getElementById(state).value=="已上傳")
      {
        var r=confirm("您上傳的檔案有重複，是否要覆蓋");
        if(r==true)
        {
          var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;                         
                        alert(message);                                                              
                                                                     
                      }
                    };
          var formData = new FormData();
          formData.append(file_name, file);
          var url="../index.php/Maintain_C/Upload_file/"+index;
          xmlhttp.open("post", url, true);
          xmlhttp.send(formData);
        }
        
      }
      else
      {
        var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        var state=index+"_state";  
                        document.getElementById(state).value="已上傳";                      
                        alert(message);                                                              
                                                                     
                      }
                    };
          var formData = new FormData();
          formData.append(file_name, file);
          var url="../index.php/Maintain_C/Upload_file/"+index;
          xmlhttp.open("post", url, true);
          xmlhttp.send(formData);
      }
       
  
  }


}
function Check_Double(index)
{
   var message="";
   var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;  
                        return message;                                 
                                                                     
                      }
                    };
    var url="../index.php/Maintain_C/Check_Double/"+index;
    xmlhttp.open("post", url, true);
    xmlhttp.send();
    message = xmlhttp.onreadystatechange();
    return message;
}


function Confirm_Data_Type(file_name)
{
    
    var fileInput=document.getElementById(file_name).value;   
    var extIndex = fileInput.lastIndexOf('.');
       if (extIndex != -1) 
   {
      var name = fileInput.substr(0, extIndex);                     //檔名不含副檔名
 
      var ext= fileInput.substr(extIndex+1, fileInput.length); //副檔名
   }
   return ext;
    

}


function Confirm_format(file_name)
{
    
    var fileInput=document.getElementById(file_name).value;   
    var extIndex = fileInput.lastIndexOf('.');
       if (extIndex != -1) 
    {
       var name = fileInput.substr(0, extIndex);                     //檔名不含副檔名
 
      var ext= fileInput.substr(extIndex+1, fileInput.length); //副檔名
    }
    var string=name;
    var index=string.lastIndexOf('-');
    var name=string.substr(index+1,string.length);
    var error="";
    if(name.length!=8)
   {
       error+="日期格式長度錯誤，日期格式為8碼"+'\n';
   }
   else
   {
        if(parseInt(name.substr(0,4))<1911)
       {
            error+="年份格式錯誤，格式為西元"+'\n';
        }
        else
        {
            if(parseInt(name.substr(4,2))>13 || parseInt(name.substr(4,2))<0 )
            {
                error+="月份格式錯誤"+'\n';
            }
            else
            {
                if(parseInt(name.substr(6,2))>31 || parseInt(name.substr(4,2))<0)
                {
                     error+="日期錯誤"+'\n';
                }
        
            }
        }
    }
     return error;    


  }

   function Return_file_name(file_name)
  {
    var fileInput=document.getElementById(file_name).value;   
    var extIndex = fileInput.lastIndexOf('.');
       if (extIndex != -1) 
   {
      //var name1 = fileInput.substr(0, extIndex);                     //檔名不含副檔名
      var name=fileInput.replace(/^.*[\\\/]/, '');
      var index=name.lastIndexOf('.');
      var out=name.substr(0,index);
      var ext= fileInput.substr(extIndex+1, fileInput.length); //副檔名
   }
   return out;
    

  }

  function Display_New_Button()
  {
     if(document.getElementById('Display_New_Button').checked==true)
     {
       document.getElementById('btn1').style.display="block";
      document.getElementById('btn2').style.display="none";
     }
     else
     {
       document.getElementById('btn1').style.display="none";
      document.getElementById('btn2').style.display="block";
     }
    
  }