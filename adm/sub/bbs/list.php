<?php include_once($_SERVER['DOCUMENT_ROOT']."/head.php");?>
/adm/sub/bbs/list.php

<p>게시판 관리</p>
생성, 삭제, 복사, 그룹
<input type="button" value="생성" onclick="location.href='write.php';">
<table class='ibk_board'>
<thead>
	<tr>
		<th><input type="checkbox" name="" id=""></th>
		<th>그룹</th>
		<th>TABLE</th>
		<th>제목</th>
		<th>관리</th>
	</tr>
</thead>
<tbody>
<tr>
		<td><input type="checkbox" name="" id=""></td>
		<td><select name="" id="">
			<option value="">t</option>
		</select></td>
		<td>테이블 영문</td>
		<td>테이블 이름</td>
		<td>수정 / 복사</td>
	</tr>
</tbody>
</table>
</div><!-- #wrap -->