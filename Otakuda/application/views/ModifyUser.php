<?php
$link = 'http://localhost/test/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改頁面</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css" media="screen">
<script src="<?=$link;?>js/jquery.js"></script>
<script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
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
<div class="container">
  <form id="form1" name="form1" method="post" action="<?=base_url();?>index.php/member/UserModify">
  <?php foreach($query->result_array() as $row):?>
    <table width="1200" border="1" class="table table-bordered table-condensed">
      <tr>
        <td colspan="2" id="color"><div align="center"><strong>修改帳號資料</strong></div></td>
      </tr>
      <tr>
        <td id="color2"><div align="center"><strong>帳號</strong></div></td>
        <td><label>
          <input name="ID" type="text" id="ID" value="<?=$row['ID'];?>" />
          <input name="index" type="hidden" id="index" value="<?=$row['index'];?>" />
        </label></td>
      </tr>
      <tr>
        <td id="color2"><div align="center"><strong>密碼</strong></div></td>
        <td><label>
          <input name="Password" type="text" id="Password" value="<?=$row['password'];?>" />
        </label></td>
      </tr>
      <tr>
        <td id="color2"><div align="center"><strong>權限</strong></div></td>
        <td>
        <label>
          <!--<input name="Leavel" type="text" id="Leavel" value="<?=$row['Leavel'];?>" />-->
          <? 
		  $select=array("Admin"=>"最高權限","User"=>"普通使用者");
		  $html="<select name='Leavel' id='Leavel'>";
		  foreach($select as $key => $value )
		  {
			  if($key==$row['Leavel'])
			  {
				  $html.="<option value='$key' selected>$value</option>";
			   }
			   else
			   $html.="<option value='$key'>$value</option>";
			  
		  }
		  $html.="</select>";
		  echo $html;
		  ?>
        </label>
        </td>
      </tr>
      
      <tr>
        <td colspan="2" id="color">
        <div class="btn-group">
        <button class="btn"type="submit">修改</button>
        <button class="btn" type="reset">重填</button>
        <button class="btn" type="button" onClick="javascript:history.back(1)">回會員管理</button>
        </div>
        </td>
      </tr>
    </table>
    <?php endforeach; ?>
  </form>
</div>
</body>
</html>