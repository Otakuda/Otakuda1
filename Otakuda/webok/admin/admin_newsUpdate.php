<?php
//	---------------------------------------------
//	Pure PHP Upload version 1.1
//	-------------------------------------------
if (phpversion() > "4.0.6") {
	$HTTP_POST_FILES = &$_FILES;
}
define("MAX_SIZE",300000);
define("DESTINATION_FOLDER", "./images/news/");
define("no_error", "admin_news.php");
define("yes_error", "admin_ordersDetial.php");
$_accepted_extensions_ = "jpg,gif,png";
if(strlen($_accepted_extensions_) > 0){
	$_accepted_extensions_ = @explode(",",$_accepted_extensions_);
} else {
	$_accepted_extensions_ = array();
}
/*	modify */
$newPicname=$_POST["oldPic"]; //變數$newPicname先儲存之前舊圖片檔名，如果沒有更新圖片，news_pic圖片欄位就繼續存入舊圖檔名
if(!empty($HTTP_POST_FILES['news_pic'])){ //如果你的上傳檔案欄位不是取名為news_pic，請將你的欄位名稱取代所有news_pic名稱
	if(is_uploaded_file($HTTP_POST_FILES['news_pic']['tmp_name']) && $HTTP_POST_FILES['news_pic']['error'] == 0){
		$_file_ = $HTTP_POST_FILES['news_pic'];
		$errStr = "";
		$_name_ = $_file_['name'];
		$_type_ = $_file_['type'];
		$_tmp_name_ = $_file_['tmp_name'];
		$_size_ = $_file_['size'];
		header ('Content-type: text/html; charset=utf-8');//指定編碼
		if($_size_ > MAX_SIZE && MAX_SIZE > 0){
			$errStr = "File troppo pesante";
			echo "<script>javascript:alert(\"超過限制檔案大小\");</script>";//跳出錯誤訊息
		}
		$_ext_ = explode(".", $_name_);
		$_ext_ = strtolower($_ext_[count($_ext_)-1]);
		if(!in_array($_ext_, $_accepted_extensions_) && count($_accepted_extensions_) > 0){
			$errStr = "Estensione non valida";
			echo "<script>javascript:alert(\"請檢查檔案格式\");</script>";//跳出錯誤訊息
		}
		if(!is_dir(DESTINATION_FOLDER) && is_writeable(DESTINATION_FOLDER)){
			$errStr = "Cartella di destinazione non valida";
			echo "<script>javascript:alert(\"必須指定資料夾目錄\");</script>";//跳出錯誤訊息
		}
		if(empty($errStr)){
			$newPicname=date("YmdHis.").$_ext_;//如果更新圖片，變數$newname就重新取得新檔案名稱
			if(@copy($_tmp_name_,DESTINATION_FOLDER . "/" . $newPicname)){//修改檔案名稱
				@unlink('../images/news/'.$_POST["oldPic"]);//依據傳過來的舊圖檔名，指定路徑刪除它
				header("Location: " . no_error);
			} else {
				echo "<script>history.back()</script>";//回上一頁
				exit;                                  //停止後續程式碼的繼續執行
				//header("Location: " . yes_error);
			}
		} else {
			echo "<script>history.back()</script>";//回上一頁
		    exit;	                               //停止後續程式碼的繼續執行
			//header("Location: " . yes_error);
		}
	}
}
?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<?php require_once('../Connections/web_news.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE news SET news_title=%s, news_type=%s, news_date=%s, news_movie=%s, news_pic=%s, news_content=%s, news_count=%s WHERE news_id=%s",
                       GetSQLValueString($_POST['news_title'], "text"),
                       GetSQLValueString($_POST['news_type'], "text"),
                       GetSQLValueString($_POST['news_date'], "date"),
                       GetSQLValueString($_POST['news_movie'], "text"),
                       GetSQLValueString($newPicname, "text"),
                       GetSQLValueString($_POST['news_content'], "text"),
                       GetSQLValueString($_POST['news_count'], "int"),
                       GetSQLValueString($_POST['news_id'], "int"));

  mysql_select_db($database_web_news, $web_news);
  $Result1 = mysql_query($updateSQL, $web_news) or die(mysql_error());
}

$colname_Recordset1 = "-1";
if (isset($_GET['news_id'])) {
  $colname_Recordset1 = $_GET['news_id'];
}
mysql_select_db($database_web_news, $web_news);
$query_Recordset1 = sprintf("SELECT * FROM news WHERE news_id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $web_news) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
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
    <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1">
    <table width="760" border="0" cellspacing="0" cellpadding="0" background="../images/back11_2.gif">
      <tr>
        <td width="25" align="left"><img src="../images/board07.gif" /></td>
        <td width="725" align="left" background="../images/board04.gif">&nbsp; <span class="font_black">編輯資料</span></td>
        <td width="10" align="right"><img src="../images/board05.gif" width="10" height="28" /></td>
      </tr>
    </table>
    <table width="760" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="80" height="20" align="left" class="board_add">標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 題：</td>
        <td width="669" align="left" class="board_add"><label>
          <input name="news_title" type="text" id="news_title" value="<?php echo $row_Recordset1['news_title']; ?>" size="40" />
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">類&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 別：</td>
        <td align="left" class="board_add"><label>
          <select name="news_type" id="news_type">
            <option value="news" <?php if (!(strcmp("news", $row_Recordset1['news_type']))) {echo "selected=\"selected\"";} ?>>新聞</option>
            <option value="action" <?php if (!(strcmp("action", $row_Recordset1['news_type']))) {echo "selected=\"selected\"";} ?>>活動</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">瀏 覽 次 數：</td>
        <td align="left" class="board_add"><label>
          <input name="news_count" type="text" id="news_count" value="<?php echo $row_Recordset1['news_count']; ?>" />
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 期：</td>
        <td align="left" class="board_add"><label>
          <input name="news_date" type="text" id="news_date" value="<?php echo $row_Recordset1['news_date']; ?>" />
        </label></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">影&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 片：</td>
        <td align="left" class="board_add"><span class="table_lineheight">
        <label>
          <input name="news_movie" type="text" id="news_movie" value="<?php echo htmlspecialchars($row_Recordset1['news_movie']); ?>" size="90" />
        </label>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%"><img src="../images/icon_youtube.gif" width="25" height="25" /></td>
    <td width="96%"><span class="font_red">**如需影片，請選擇上傳至Youtube的影片後，將「嵌入」欄位語法貼入本欄位。</span></td>
  </tr>
</table>
         </span></td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add">資 料 圖 片：</td>
        <td align="left" class="board_add"><span class="table_lineheight">
        <?php /*START_PHP_SIRFCIT*/ if ($row_Recordset1['news_pic']!=""){ ?>
          <img src="../images/news/" alt="" name="pic" width="70" id="pic" />
          <?php } /*END_PHP_SIRFCIT*/ ?>
<input name="oldPic" type="hidden" id="oldPic" value="../images/news/<?php echo $row_Recordset1['news_pic']; ?>" />
        <br />
        <label>
          <input type="file" name="news_pic" id="news_pic" />
          </label><br />
          <span class="font_red">**您可以更新圖片，限制檔案格式為：JPG、GIF、PNG，檔案尺寸不能超過300KB</span></span></td>
      </tr>
      <tr>
        <td colspan="2" align="left" class="board_add">資 料 內 容：<br />
          <br />
          <label>
            <textarea name="news_content" id="news_content" cols="80" rows="5" class="ckeditor"><?php echo $row_Recordset1['news_content']; ?></textarea>
          </label>          <br /></td>
      </tr>
    </table>
    <br />
    <table width="760" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td height="20" align="left"><img src="../images/icon_rar.gif" width="20" height="20" /> [ <a href="admin_newsDownloadAdd.php?news_id=">新增供下載檔案</a> ]</td>
        <td width="96" align="left">&nbsp;</td>
        </tr>
      <tr>
        <td height="20" align="left" class="board_add">供下載檔案名稱：</td>
        <td align="center" valign="middle" class="board_add">[ <a href="admin_newsDownloadDel.php?news_id=">刪除</a> ]</td>
        </tr>
      </table>
    <table width="760" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="644" height="25" align="left"><img src="../images/icon_pic.gif" width="16" height="16" /> [ <a href="admin_newsPicAdd.php?news_id=">新增更多本資料相關圖片</a> ]</td>
        <td width="96" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="20" align="left" class="board_add"><img src="" alt="" name="pic2" width="100" id="pic2" /></td>
        <td align="center" class="board_add">[ <a href="admin_newsPicDel.php?newspic_id=&newspic_pic=&news_id=">刪除</a> ]</td>
      </tr>
    </table>
    <p>
      <label>
        <br />
        <input type="submit" name="button" id="button" value="送出資料" />
      </label>
      <script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<input name="Submit" type="button" onclick="MM_goToURL('parent','admin_news.php');return document.MM_returnValue" value="回新聞/活動管理區" />

      <input name="news_id" type="hidden" id="news_id" value="<?php echo $row_Recordset1['news_id']; ?>" />
      <br />
      <br />
    </p>
    <input type="hidden" name="MM_update" value="form1" />
    </form>
  </div>
  <div id="main4"></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
