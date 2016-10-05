<?php 

include_once($_SERVER['DOCUMENT_ROOT']."/common.php");
include_once($_SERVER['DOCUMENT_ROOT']."/head.php");
?>
/adm/sub/member/list.php
<p>회원 관리</p>
1 - 신규회원, 2 - 무료회원, 3 - 유료회원, 4 - 만기회원, 99 - 탈퇴회원

event_dt로 관리, expired, 관리자 서비스 중지전 3일간 알림

<table class='ibk_board'>
<thead>
	<tr>
		<th><input type="checkbox" name="" id=""></th>
		<th>mb_hp</th>
		<th>서비스종류</th>
		<th>서비스 시작일</th>
		<th>서비스 종료일</th>
		<th>서비스 상태</th>
		<th>가입일</th>
	</tr>
</thead>
<tbody>
<?php
$sql_array=array();
$sql_array[]="select * from pm_tickets limit 10;";
$sql=join("",$sql_array);
$query=mysql_query($sql);
while($list=mysql_fetch_assoc($query)){

echo "<tr>";
echo "<td>".$list['mb_no']."</td>";
echo "<td>".$list['mb_hp']."</td>";
echo "<td>".$list['mb_level']."</td>";
//echo "<td>".$list['mb_password']."</td>";
echo "<td>".$list['mb_birth']."</td>";
echo "<td>".$list['mb_email']."</td>";
echo "<td>".$list['mb_issend']."</td>";
echo "<td>".$list['mb_datetime']."</td>";
echo "</tr>";
}?>
<tr>
		<td><input type="checkbox" name="" id=""></td>
		<td>010-1234-5678</td>
		<td>무료회원</td>
		<td>2016-09-29</td>
		<td>2016-10-28</td>
		<td>진행중</td>
	</tr>
<tr>
		<td><input type="checkbox" name="" id=""></td>
		<td>010-1234-5678</td>
		<td>정액 회원</td>
		<td>2016-09-29</td>
		<td>2016-10-28</td>
		<td>진행중</td>
	</tr>
<tr>
		<td><input type="checkbox" name="" id=""></td>
		<td>010-1234-5678</td>
		<td>무료 회원</td>
		<td>2016-07-29</td>
		<td>2016-08-28</td>
		<td>종료</td>
	</tr>
</tbody>
</table>