<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理後台</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Language" content="zh-tw" />
<meta name="description" content="Dreamweaver+PHP資料庫網站製作" />
<meta name="keywords" content="Dreamweaver+PHP資料庫網站製作" />
<meta name="author" content="joj設計、joj網頁設計、joj Design、joj Web Design、呂昶億、杜慎甄" />
<link href="../web.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("header.php"); ?>
<div id="main">
  <div id="main1"></div>
  <div id="admin_main2">
    <table width="555" border="0" cellspacing="0" cellpadding="0" background="../images/back11_2.gif">
      <tr>
        <td width="25" align="left"><img src="../images/board10.gif" /></td>
        <td width="104" align="left" valign="middle" background="../images/board04.gif">&nbsp; <span class="font_black">圖文廣告管理區&nbsp; &nbsp;</span></td>
        <td width="416" align="left" valign="bottom" background="../images/board04.gif">
        <a href="admin_banner1Add.php"><img src="../images/icon_addfont.gif" title="增加跑馬燈文字廣告" border="0" /></a>
        <a href="admin_banner2Add.php"><img src="../images/icon_addswf.gif" title="增加SWF動畫廣告" border="0" /></a>
        <a href="admin_banner3Add.php"><img src="../images/icon_addpic.gif" title="增加圖像廣告" border="0" /></a>
        </td>
        <td width="10" align="right"><img src="../images/board05.gif" width="10" height="28" /></td>
      </tr>
    </table>
    <table width="555" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20" align="center" class="board_add3">&nbsp;</td>
        <td width="50" height="30" align="center" class="board_add3">
        <img src="../images/icon_font.gif" />
        <img src="../images/icon_swf.gif" />
        <img src="../images/icon_pic.gif" />
        </td>
        <td width="385" align="left" valign="middle" class="board_add3"><br /></td>
        <td width="100" align="center" class="board_add3">[ <a href="admin_bannerUpdate.php?banner_id=">編輯</a> ]&nbsp; [ <a href="admin_bannerDel.php?banner_id=&banner_pic=&delSure=1">刪除</a> ]</td>
      </tr>
    </table>
    <table width="555" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="80" align="center" class="font_red2">目前資料庫中沒有任何資料!</td>
      </tr>
    </table>
  </div>
  <div id="admin_main3">
       <? include("right_zone.php");?>
  </div>
  <div id="main4"></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>