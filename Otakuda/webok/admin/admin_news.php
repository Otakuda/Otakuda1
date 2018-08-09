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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_web_news, $web_news);
$query_Recordset1 = "SELECT * FROM news ORDER BY news_id DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $web_news) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
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
<script type="text/javascript">
function tfm_confirmLink(message) { //v1.0
	if(message == "") message = "Ok to continue?";	
	document.MM_returnValue = confirm(message);
}
</script>
</head>

<body>
<?php include("header.php"); ?>
<div id="main">
  <div id="main1"></div>
  <div id="admin_main2">
    <table width="555" border="0" cellspacing="0" cellpadding="0" background="../images/back11_2.gif">
      <tr>
        <td width="25" align="left"><img src="../images/board07.gif" /></td>
        <td width="104" align="left" valign="middle" background="../images/board04.gif">&nbsp; <span class="font_black">新聞/活動管理區&nbsp; &nbsp;</span></td>
        <td width="416" align="left" background="../images/board04.gif"><a href="admin_newsAdd.php"><img src="../images/icon_add.gif" width="47" height="19" border="0" /></a></td>
        <td width="10" align="right"><img src="../images/board05.gif" width="10" height="28" /></td>
      </tr>
    </table>
    <?php do { ?>
      <table width="555" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20" align="center" class="board_add"><?php echo $row_Recordset1['news_id']; ?></td>
          <td width="50" height="30" align="center" class="board_add"><?php /*START_PHP_SIRFCIT*/ if ($row_Recordset1['news_type']=="news"){ ?>
            <img src="../images/icon_news.gif" />
            <?php } /*END_PHP_SIRFCIT*/ ?>
            <?php /*START_PHP_SIRFCIT*/ if ($row_Recordset1['news_type']=="action"){ ?>
              <img src="../images/icon_action.gif" />
          <?php } /*END_PHP_SIRFCIT*/ ?></td>
          <td width="385" align="left" class="board_add">&nbsp; &nbsp;<?php echo $row_Recordset1['news_title']; ?>...<?php echo $row_Recordset1['news_date']; ?></td>
          <td width="100" align="center" class="board_add">[ <a href="admin_newsUpdate.php?news_id=<?php echo $row_Recordset1['news_id']; ?>">編輯</a> ]&nbsp; [ <a href="admin_newsDel.php?news_id=<?php echo $row_Recordset1['news_id']; ?>&amp;news_pic=<?php echo $row_Recordset1['news_pic']; ?>&amp;delSure=1" onclick="tfm_confirmLink('是否要刪除?');return document.MM_returnValue">刪除</a> ]</td>
        </tr>
      </table>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    <table width="555" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom">&nbsp;
          <table border="0">
            <tr>
              <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">第一頁</a>
                  <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">上一頁</a>
                  <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">下一頁</a>
                  <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">最後一頁</a>
                  <?php } // Show if not last page ?></td>
            </tr>
        </table></td>
        <td align="right" valign="bottom">&nbsp;
記錄 <?php echo ($startRow_Recordset1 + 1) ?> 到 <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> 共 <?php echo $totalRows_Recordset1 ?></td>
      </tr>
    </table>
    <table width="555" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <?php if ($totalRows_Recordset1 == 0) { // Show if recordset empty ?>
  <td height="80" align="center" class="font_red2">目前資料庫中沒有任何資料!</td>
  <?php } // Show if recordset empty ?>
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
<?php
mysql_free_result($Recordset1);
?>
