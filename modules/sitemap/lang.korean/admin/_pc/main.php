<?php
include $g['path_module'].$module.'/var/var.php';
$exists_sitemap_file = $d['sitemap']['filename'] && is_file($d['sitemap']['filename']) ? true : false;
?>

<div id="mainbox">

	<h2>사이트맵 만들기</h2>

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="make" />
		
	<p>
		사이트맵에는 메뉴와 개별게시판의 포함여부를 선택할 수 있습니다.<br />
		`숨김` ,`차단` 옵션에 체크되어 있는 메뉴는 사이트맵에서 제외되며 목록접근권한이 회원으로 설정되어 있는 게시판의 경우 체크해제 상태로 출력됩니다.<br />
	</p>

	<table>
		<tr>
			<td class="td1">사이트맵 파일명</td>
			<td>:</td>
			<td class="td2">
				<input type="text" name="filename" value="<?php echo $exists_sitemap_file?$d['sitemap']['filename']:'sitemap.xml'?>" class="input" /> (킴스큐가 설치된 최상위 디렉토리에 생성됩니다)
			</td>
		</tr>
		<tr>
			<td class="td1">사이트메뉴 포함</td>
			<td>:</td>
			<td class="td2">
				<label><input type="checkbox" name="incmenu" value="1" checked="checked" /> YES</label>
			</td>
		</tr>
		<tr>
			<td class="td1">게시판 포함</td>
			<td>:</td>
			<td class="td2">
				<div class="scrollbars01">
				<?php $_RCD = getDbArray($table['bbslist'],'','*','gid','asc',0,1)?>
				<?php while($_R=db_fetch_array($_RCD)):?>
				<?php $d=array();include $g['path_module'].'bbs/var/var.'.$_R['id'].'.php'?>
				<label><input type="checkbox" name="bbsmembers[]" value="<?php echo $_R['id']?>"<?php if(!$d['bbs']['perm_l_list']):?> checked="checked"<?php endif?> /><?php echo $_R['name']?>(<?php echo $_R['id']?>)</label>
				<?php endwhile?>
				<div class="clear"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td class="td1">블로그 포함</td>
			<td>:</td>
			<td class="td2">
				<div class="scrollbars01">
				<?php $_RCD = getDbArray($table['bloglist'],'','*','gid','asc',0,1)?>
				<?php while($_R=db_fetch_array($_RCD)):?>
				<label><input type="checkbox" name="blogmembers[]" value="<?php echo $_R['id']?>" checked="checked" /><?php echo $_R['name']?>(<?php echo $_R['id']?>)</label>
				<?php endwhile?>
				<div class="clear"></div>
				</div>
			</td>
		</tr>
	</table>

	<div class="submitbox">
		<input type="submit" class="btnblue" value=" <?php if($exists_sitemap_file):?>갱신하기<?php else:?>만들기<?php endif?> " />
	</div>

	</form>

</div>

<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
	if (f.filename.value == '')
	{
		alert('파일명을 입력해 주세요.   ');
		f.filename.focus();
		return false;
	}
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>


