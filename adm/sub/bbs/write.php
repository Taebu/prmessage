<?php include_once($_SERVER['DOCUMENT_ROOT']."/head.php");?>
/adm/sub/bbs/write.php

<script type="text/javascript">
function set_bbs(){
if($("#bo_table").val().length<3){
	alert("테이블 명은 2자 이상");
	$("#bo_table").focus();
	return ;
};

if($("#bo_subject").val().length<3){
	alert("bo_subject 명은 2자 이상");
	$("#bo_subject").focus();
	return ;
};


var param=$("#bbs").serialize();
//alert(param);

}
</script>
<form name='bbs' id='bbs'>
<table class="ibk_info">
	<tr>
		<td>테이블 명</td>
		<td><input type="text" name="bo_table" id="bo_table">영문자, 숫자, _ 만 가능 (공백없이 20자 이내)</td>
		<td>테이블 이름</td>
		<td><input type="text" name="bo_subject" id="bo_subject"></td>
	</tr>

	<tr>
		<td>그룹 명</td>
		<td><select name="gr_id" id="gr_id">
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
		</select></td>
		<td>테이블 이름</td>
		<td></td>
	</tr>
</table>
<input type="button" value="생성" onclick="set_bbs()">
</form>


