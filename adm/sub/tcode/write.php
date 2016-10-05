<?php include_once($_SERVER['DOCUMENT_ROOT']."/head.php");
/*
create table pm_tcode (
tc_no int unsigned auto_increment,
tc_code varchar(8)  NOT NULL DEFAULT ''  COMMENT '티켓 코드',
tc_name varchar(255)  NOT NULL DEFAULT ''  COMMENT '티켓 이름',
tc_price int  NOT NULL DEFAULT '0'  COMMENT '티켓 가격',
tc_status varchar(5) NOT NULL DEFAULT 'off' COMMENT 'no : 아니요,yes : 예, 기타등등',
tc_datetime datetime not null default '0000-00-00 00:00:00'  COMMENT '티켓 코드발행일',
primary key (`tc_no`) 
) comment '티켓 이용권 종류';

*/
?>
<script type="text/javascript">
function set_tickets()
{
	if($("#tc_code").val().length<8)
	{
		alert("코드 길이가 너무 적습니다.");
		$("#tc_code").focus();
		return;
	}

	if($("#tc_name").val().length<2)
	{
		alert("코드 이름이 두자 이상이어야 합니다.");
		$("#tc_name").focus();
		return;
	}

	if($("#tc_price").val()<1000)
	{
		alert("코드 가격이 천원 이상이어야 합니다.");
		$("#tc_price").focus();
		return;
	}
	var param=$("#tickets").serialize();
	alert(param);
	$.ajax({url:"./ajax/set_tickets.php",
		data:param,
		dataType:'json',
		type:'POST',
		success:function(data){
			alert(data.code);
		}
	});
}
</script>
<form action="" id="tickets">
<table class='ibk_info'>
	<tr>
		<td>티켓코드</td>
		<td><input type="text" name="tc_code" id="tc_code" maxlength='8' placeholder='PRMMS001 예 최대 8자리 코드 생성'></td>
		<td>티켓사용<sub>1)</sub></td>
		<td><input type="radio" name="tc_status" id="tc_status_1" value='off' checked><label for="tc_status_1">off</label> 
		<input type="radio" name="tc_status" id="tc_status_2" value='on'><label for="tc_status_2">on</label>
		</td>
	</tr>
	<tr>
		<td>티켓이름</td>
		<td><input type="text" name="tc_name" id="tc_name" placeholder='티켓이름을 기재 합니다/'></td>
		<td>티켓가격</td>
		<td><input type="text" name="tc_price" id="tc_price" placeholder='티켓 가격을 기재 합니다.'></td>
	</tr>
</table>
		<p class='red bold'>* 1) 티켓사용 : 기본값은 off 입니다. 생성 당시 바로 사용 하시려면 on으로 활성화 해주세요.</p>
<input type="button" value="생성" onclick="set_tickets()">
</form><!-- #tickets -->