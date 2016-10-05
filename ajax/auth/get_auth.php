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
// 2016-10-04 (화)
/*
jaycho [12:15 PM]  
인증번호 요청
핸드폰번호로  http request
return :

json 
authNumber : (6자리 int) random
result : (boolean)


sms로 6자리 숫자 (auth number) (edited)
*/


/*
$sql="show tables;";
$query=mysql_query($sql);

while($list=mysql_fetch_assoc($query)){
print_r($list);
}
*/

$ran= "";
for( $i=0; $i<6; $i++) //7자리만 출력
{
	$ran .= rand( 0, 9 );
}
$json=array();
$json['authNumber']=$ran;
$json['result']=true;
echo json_encode($json);

?>