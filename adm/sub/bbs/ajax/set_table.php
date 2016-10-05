<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/adm/lib/db_conn.php');

/* 1. 테이블 생성시 보드에 해당 내용 insert */
$sql=array();
$sql[]="";

/* 2. 테이블 생성 */
$sql=array();
$sql[]="CREATE TABLE `pm_write_".$bo_table."` (";
$sql[]="`wr_id` int(11) NOT NULL AUTO_INCREMENT,";
$sql[]="`wr_num` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_reply` varchar(10) NOT NULL,";
$sql[]="`wr_parent` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',";
$sql[]="`wr_comment` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_comment_reply` varchar(5) NOT NULL,";
$sql[]="`ca_name` varchar(255) NOT NULL,";
$sql[]="`wr_option` set('html1','html2','secret','mail') NOT NULL,";
$sql[]="`wr_subject` varchar(255) NOT NULL,";
$sql[]="`wr_content` text NOT NULL,";
$sql[]="`wr_link1` text NOT NULL,";
$sql[]="`wr_link2` text NOT NULL,";
$sql[]="`wr_link1_hit` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_link2_hit` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_hit` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_good` int(11) NOT NULL DEFAULT '0',";
$sql[]="`wr_nogood` int(11) NOT NULL DEFAULT '0',";
$sql[]="`mb_id` varchar(20) NOT NULL,";
$sql[]="`wr_password` varchar(255) NOT NULL,";
$sql[]="`wr_name` varchar(255) NOT NULL,";
$sql[]="`wr_email` varchar(255) NOT NULL,";
$sql[]="`wr_homepage` varchar(255) NOT NULL,";
$sql[]="`wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',";
$sql[]="`wr_file` tinyint(4) NOT NULL DEFAULT '0',";
$sql[]="`wr_last` varchar(19) NOT NULL,";
$sql[]="`wr_ip` varchar(255) NOT NULL,";
$sql[]="`wr_facebook_user` varchar(255) NOT NULL,";
$sql[]="`wr_twitter_user` varchar(255) NOT NULL,";
$sql[]="`wr_1` varchar(255) NOT NULL,";
$sql[]="`wr_2` varchar(255) NOT NULL,";
$sql[]="`wr_3` varchar(255) NOT NULL,";
$sql[]="`wr_4` varchar(255) NOT NULL,";
$sql[]="`wr_5` varchar(255) NOT NULL,";
$sql[]="`wr_6` varchar(255) NOT NULL,";
$sql[]="`wr_7` varchar(255) NOT NULL,";
$sql[]="`wr_8` varchar(255) NOT NULL,";
$sql[]="`wr_9` varchar(255) NOT NULL,";
$sql[]="`wr_10` varchar(255) NOT NULL,";
$sql[]="PRIMARY KEY (`wr_id`),";
$sql[]="KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),";
$sql[]="KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)";
$sql[]=");";

//$sql[]="create table test(ts_no int not null default '0');";
//mysql_query(join("",$sql));
echo join("<br>",$sql);
/*
$query=mysql_query(join("",$sql));
while($list=mysql_fetch_assoc($query)){
print_r($list);
}
*/
?>