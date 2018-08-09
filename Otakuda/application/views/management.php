<?php
$link = 'http://localhost/test/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基本資料</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" media="screen">


<style>
#heig{
     height:10px;
}
#color{
     background-color: #666;
     color: #FFF;
}
#color2{
     background-color: #999;
}
</style>
</head>
<body>
<div class="container" align="center">
  <table width="1200" border="1" class="table table-bordered table-condensed table-striped table-hover">
    <tr>
      <td colspan="5" id="color"><div align="center"><strong><h2>帳號管理</h2></strong></div></td>
    </tr>
    <tr>
      <td width="150" height="53"><div align="center"><strong>新增帳號</strong></div></td>
      <td colspan="4"><form id="form1" name="form1" method="post" action="<?=base_url();?>index.php/member/AddUser" class="form-inline">
      <div id="heig">
        帳號:
        <label>
          <input required="required" type="text" name="ID" id="ID" />
        </label>
        密碼:
        <label>
          <input required="required" type="password" name="password" id="password" />
        </label>
        權限:
        <label>
         <select name="Leavel" id="Leavel">
            <option value="Top">普通使用者</option>
            <option value="admin">最高權限</option>
          </select>
        </label>
        
        <label>
          <input type="submit" value="新增" class="btn" />
        </label>
        </div>
      </form></td>
    </tr>
   
 
       <tr>
       <th id="color2"><div align="center"><strong>Index</strong></div></th>
      <th id="color2"><div align="center"><strong>ID</strong></div></th>
      <th id="color2"><div align="center"><strong>密碼</strong></div></th>
      <th id="color2"><div align="center"><strong>等級</strong></div></th>
      <th id="color2"><div align="center"><strong>動作</strong></div></th>
    </tr>
    <?php foreach($query->result_array() as $key=>$row):?>
      <? if($key%2==0) echo  '<tr bgcolor="#0099CC"  >';  // 雙數行加灰底
            else echo  '<tr>';?>
      <td><div align="center"><?=$row['index'];?></div></td>
      <td><div align="center"><?=$row['ID'];?></div></td>
      <td><div align="center"><?=$row['password'];?></div></td>
      <td><div align="center"><?=$row['Leavel'];?></div></td>
      <td><div align="center">
      <div class="btn-group">
      <button class="btn" type="button" onclick="window.location='<?=base_url();?>index.php/member/ModifyUser/<?=$row['index'];?>'">修改</button>&nbsp 
      <a href="<?=base_url();?>index.php/member/DelUser/<?=$row['index'];?>"><button class="btn" type="button" onclick="if(confirm('您確定刪除嗎?')) return true;else return false">刪除</button></a>
  
      </div>
      </div></td></tr>
   
    <?php endforeach; ?>
   </table>
</div>
</body>
</html>