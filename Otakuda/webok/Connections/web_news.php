<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_web_news = "127.0.0.1";
$database_web_news = "web";
$username_web_news = "root";
$password_web_news = "eti@1234";
$web_news = mysql_pconnect($hostname_web_news, $username_web_news, $password_web_news) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES UTF8"); 
?>