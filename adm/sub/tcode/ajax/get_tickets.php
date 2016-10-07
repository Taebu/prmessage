<?php
include_once($_SERVER['DOCUMENT_ROOT']."/common.php");

$json=array();
$json['posts']=array();
$sql=array();

$sql[]="select * from  pm_tcode ;";
$query=join("",$sql);

$rows=mysql_query($query);
while($list=mysql_fetch_assoc($rows))
{
	array_push($json['posts'],$list);
}
echo json_encode($json);
?>