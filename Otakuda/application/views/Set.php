<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>機台基本資料</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" media="screen">
<script src="<?=$link;?>js/jquery.js"></script>
<script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
}
th
{
font-size: 28px;
}
td
{
  font-size: 22px;
}
td,th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 5px;
    font-family:"微軟正黑體";
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.Header
{
  background-color:#060;
  color:#FFF;
  font-size:30px;
  font-family:"微軟正黑體";
}
</style>
<div>

   <p style="text-align:center;font-size:50px;background-color:green;color:white;font-family:'微軟正黑體';"><a href="../?/User/main"><img style="float:left;" src="../../images/Log.png"></a><? echo  $this->lang->line('Setting')?></p>
  </div>

</head>
<body onload="Initialize();countpage();">
<div><? echo  $this->lang->line('Database')?>:<input type="text" id="M_name"><button type="button" onclick="Search()"><? echo  $this->lang->line('Search')?></button><button type="button" onclick="Initialize();"><? echo  $this->lang->line('All')?></button></div>
<div>
<button onclick="jump('Up')"><? echo  $this->lang->line('UP')?></button>
<button onclick="jump('down')"><? echo  $this->lang->line('Down')?></button>
<? echo  $this->lang->line('nowpage')?>:<input readonly type="text" id='nowpage' style="width:50px;">
<? echo  $this->lang->line('totalpage') ?>:<input readonly type="text" id='totalpage' style="width:50px;">
</div>
<div>
<table>
  <tr>
    <th><? echo  $this->lang->line('machine_index')?></th>
    <th><? echo  $this->lang->line('Database_index')?></th>
    <th><? echo  $this->lang->line('Machine')?></th>
    <th><? echo  $this->lang->line('Edit')?></th>
    <th><? echo  $this->lang->line('Delete')?></th>
  </tr>
  <tbody id='area' >

  </tbody>
</table>

</body>
<script type="text/javascript">
  
  function Initialize()
  {
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
               document.getElementById("area").innerHTML=xmlhttp.responseText;           
              }
                    };
    var url="../index.php/Set_c/Initialize";
    xmlhttp.open("post", url, true);
        xmlhttp.send();   
     
  }

    function Edit(index)
  {
     var Content_id="M_"+index;
     var Content=document.getElementById(Content_id).value; 
     var xmlhttp = new XMLHttpRequest();//開始進行非同步傳輸(送出審核 並mail
        xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
               alert(xmlhttp.responseText);           
              }
                    };
    var url="../index.php/Set_c/Edit/"+index+"/"+encodeURIComponent(Content);
    xmlhttp.open("post", url, true);
    xmlhttp.send();   
  }

  function Search()
  {
    var M_name=document.getElementById("M_name").value;
    var xmlhttp = new XMLHttpRequest();//開始進行非同步傳輸(送出審核 並mail
        xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
               document.getElementById("area").innerHTML=xmlhttp.responseText;           
              }
                    };
    var url="../index.php/Set_c/Search/"+M_name;
    //document.writeln(url);
    xmlhttp.open("post", url, true);
        xmlhttp.send();   

  }
  function countpage()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
             document.getElementById("totalpage").value=xmlhttp.responseText;
             document.getElementById("nowpage").value=1;           
              }
                    };
    var url="../index.php/Set_c/countpage";

    xmlhttp.open("post", url, true);
        xmlhttp.send(); 
  }

  function jump(action)
  {
    var page=document.getElementById("nowpage").value;
    var totalpage=document.getElementById("totalpage").value;
    if(action=='Up')
    {
      if(page=='1')
      {
        alert("已經是第一頁");
      }
      else
      {
         page=+page+1;
         var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
             
             document.getElementById("nowpage").value=page;         
              }
                    };
    var url="../index.php/Set_c/jump/"+page;

    xmlhttp.open("post", url, true);
        xmlhttp.send(); 
      }
    }
    else
    {
      if(page==totalpage)
      {
        alert("已經是最後一頁");
      }
      else
      {
        page=+page-1;
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
             
             document.getElementById("nowpage").value=page;          
              }
                    };
    var url="../index.php/Set_c/jump/"+page;

    xmlhttp.open("post", url, true);
        xmlhttp.send(); 
      }
    }
  }

  function Delete(index)
  {

     var r=confirm("是否刪除");
     if(r==true)
     {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
          {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
               alert(xmlhttp.responseText);
               window.location.href="../?/Set_c"           
              }
                    };
       var url="../index.php/Set_c/Delete/"+index
       xmlhttp.open("post", url, true);
       xmlhttp.send();
     }
  }

  
</script>
</html>