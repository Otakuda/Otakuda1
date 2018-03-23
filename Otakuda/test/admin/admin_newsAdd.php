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
  <div align="center">
    <form action="" method="post" enctype="multipart/form-data" name="form1">
    <table width="760" border="0" cellspacing="0" cellpadding="0" background="../images/back11_2.gif">
      <tr>
        <td width="25" align="left"><img src="../images/board07.gif" /></td>
        <td width="725" align="left" background="../images/board04.gif">&nbsp; <span class="font_black">新增資料</span></td>
        <td width="10" align="right"><img src="../images/board05.gif" width="10" height="28" /></td>
      </tr>
    </table>
    <table width="760" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="80" height="20" align="left" class="board_add">標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 題：</td>
        <td width="669" align="left" class="board_add"><label>
          <input name="news_title" type="text" id="news_title" size="40" />
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">類&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 別：</td>
        <td align="left" class="board_add"><label>
          <select name="news_type" id="news_type">
            <option value="news">新聞</option>
            <option value="action">活動</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 期：</td>
        <td align="left" class="board_add"><label>
          <input name="news_date" type="text" id="news_date" value="<? echo date('Y-m-d')?>" />
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">影&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 片：</td>
        <td align="left" class="board_add"><span class="table_lineheight">
        <label>
          <input name="news_movie" type="text" id="news_movie" size="90" />
        </label>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%"><img src="../images/icon_youtube.gif" width="25" height="25" /></td>
    <td width="96%"><span class="font_red">**如需影片，請選擇上傳至Youtube的影片後，將「嵌入」欄位語法貼入本欄位。</span></td>
  </tr>
</table></span></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">資 料 圖 片：</td>
        <td align="left" class="board_add"><span class="table_lineheight">
        <label>
          <input type="file" name="news_pic" id="news_pic" />
        </label><br /><span class="font_red">**限制檔案格式為：JPG、GIF、PNG，檔案尺寸不能超過300KB</span></span></td>
      </tr>
      <tr>
        <td colspan="2" align="left" class="board_add">資 料 內 容：<br />
          <br />
          <label>
            <textarea name="news_content" id="news_content" cols="80" rows="5"></textarea>
          </label>          <br /></td>
      </tr>
    </table>
    <label>
      <br />
      <input type="submit" name="button" id="button" value="新增新聞" />
    </label>
    <label>
      <input type="reset" name="button2" id="button2" value="重設" />
    </label>
    <input type="button" name="submit" value="回上一頁" onClick=window.history.back();><br />
    <br />
    </form>
  </div>
  <div id="main4"></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>