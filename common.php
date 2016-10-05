<?php

$host_name="localhost";
//$host_name="175.126.111.29";
$db_name="prm";
$user_name="root";
$db_password="hanna0987";
$connect=mysql_connect($host_name, $user_name, $db_password);
define("CONNECT",$connect);
mysql_select_db($db_name, $connect);
mysql_query("set names utf8;") ;
extract($_REQUEST);
$ROOT = $_SERVER['DOCUMENT_ROOT'];
//header("Content-Type: text/html; charset=UTF-8");
