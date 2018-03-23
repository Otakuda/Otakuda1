<? $link = 'http://localhost/index.php/'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
form { 
margin: 0 auto; 
width:250px;
vertical-align:middle;
padding-top: 100px;
padding-bottom: 30px;
}

#login_title
{
	background-color:#666;
	font-size:24px;
	font-family:SimHei;
}
#string
{
	font-size:18px;
	font-family:SimHei;
	color:#033;
}
#text_size
{
	width:250px;
	height:30px;
}
#button_size
{
	width:100px;
	height:50px;
	margin:0px,auto;
}
#header
{
	background-color:gray;
	font-size:36px;
	color:black;
	font-family:SimHei;
}
</style>
<link rel="stylesheet" type="text/css" href="../css/login.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<div style="height:100px" id="header" ><p><h3 style="font-size:24px
"><img  width="200" height="100" src="../../image/logo.gif" alt="PMS LOGo" />PMS 查詢系統</h3></p></div>

<form id="form1" name="form1" method="post" action="<?=$link;?>user/login">
  <div id="login">
    <table width="319" height="81" border="1">
      <tr>
        <td id="login_title"  colspan="2"; style="text-align:center">登入</td>
       
       
      </tr>
      <tr>
        <td id="string" width="48">帳號:</td>
        <td width="255"><input id="text_size" type="text" name="account" required="required" /></td>
        
      </tr>
      <tr>
        <td id="string">密碼:</td>
        <td><input id="text_size" type="password" name="password" required="required" /></td>
       
      </tr>
      <tr>
      <td  colspan="2"><input id="button_size" type="submit" value="送出"> 
          <input id="button_size" type="reset"  value="重填"></td>
      </tr>
    </table>

</form>
</body>
</html>