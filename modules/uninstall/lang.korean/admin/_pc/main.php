
<div id="migbox">
	<h2>킴스큐Rb 제거</h2>
	<div class="notice">
		킴스큐Rb의 모든데이터(폴더/파일/DB)를 제거합니다.<br />
		제거과정에서 쓰기퍼미션이 없는 일부 파일이나 폴더가 남을 수 있습니다.<br />
		남은 폴더/파일은 FTP를 이용해서 삭제해 주세요.<br />
		삭제된 데이터는 복구할 수 없습니다.
	</div>


	<div class="submitbox">
		<input type="button" class="btnblue" value=" 언인스톨 " onclick="uninstall();" />
	</div>

</div>

<script type="text/javascript">
//<![CDATA[
var isUninstall = false;
function uninstall()
{
	if (isUninstall == true)
	{
		alert('제거중입니다. 잠시만 기다려 주세요.  ');
		return false;
	}
	if (confirm('정말로 삭제하시겠습니까?   '))
	{
		if (confirm('실수를 예방하기 위해 다시한번 묻습니다. \n정말로 삭제하시겠습니까?'))
		{
			isUninstall = true;
			location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=uninstall';
		}
	}
}
//]]>
</script>


