<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "db_server";
//資料庫名稱
$db_name = "db_name";
//資料庫管理者帳號
$db_user = "db_user";
//資料庫管理者密碼
$db_passwd = "db_passwd";
//對資料庫連線
if(!@$link = mysqli_connect($db_server, $db_user, $db_passwd,$db_name))
		die("無法對資料庫連線");
mysqli_set_charset($link, "UTF8");


//資料庫連線採UTF8
//mysqli_query("SET NAMES utf8");

?> 
</html>