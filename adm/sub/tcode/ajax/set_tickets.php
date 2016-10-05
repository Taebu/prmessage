<?php
include_once($_SERVER['DOCUMENT_ROOT']."/common.php");
extract($_REQUEST);
$json=array();
$json['code']=$tc_code."_".$tc_name;
$sql=array();

$sql[]="insert into pm_tcode set ";
$sql[]="tc_code='".$tc_code."',";
$sql[]="tc_name='".$tc_name."',";
$sql[]="tc_price='".$tc_price."',";
$sql[]="tc_status='".$tc_status."',";
$sql[]="tc_datetime=now();";
$query=join("",$sql);
$result=mysql_query($query);
echo json_encode($json);
?>