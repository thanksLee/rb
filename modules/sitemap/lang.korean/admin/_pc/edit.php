<?php
include $g['path_module'].$module.'/var/var.php';
$exists_sitemap_file = $d['sitemap']['filename'] && is_file($d['sitemap']['filename']) ? true : false;
$size_sitemap_file = $exists_sitemap_file ? filesize($d['sitemap']['filename']) : 0;
?>
<div id="mainbox">

	<h2>사이트맵 편집</h2>

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="edit" />
		
	<p>
		사이트맵을 직접 추가하거나 수정하시려면 <a href="https://support.google.com/webmasters/bin/answer.py?hl=ko&answer=183668" target="_blank">사이트맵을 만드는 방법</a>에 맞게 편집해 주세요.<br />
		파일용량이 클 경우 다운로드 받아 PC에서 편집할 것을 권장합니다.<br />
		사이트맵 파일의 위치 : 
		<?php if($exists_sitemap_file):?>
		<a href="<?php echo $g['url_root']?>/<?php echo $d['sitemap']['filename']?>" target="_blank"><?php echo $g['url_root']?>/<?php echo $d['sitemap']['filename']?></a> (<?php echo getSizeFormat($size_sitemap_file,1)?>)
		<?php else:?>
		<span>사이트맵 파일이 만들어지지 않았습니다.</span> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>">만들기</a>
		<?php endif?>
	</p>

<textarea name="configdata">
<?php if($exists_sitemap_file):?><?php if($size_sitemap_file <= 1024*100):?><?php echo htmlspecialchars(implode('',file($d['sitemap']['filename'])))?><?php else:?>사이트맵 파일이 100Kb 이상일 경우 웹상에서는 편집할 수 없습니다. 
다운로드 받아 PC에서 편집해 주세요.<?php endif?><?php endif?>
</textarea>


	<div class="submitbox">
		<input type="submit" class="btnblue" value=" 확인 " />
	</div>

	</form>

</div>

<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
<?php if($size_sitemap_file > 1024*100):?>
	alert('사이트맵 파일이 100Kb 이상일 경우 웹상에서는 편집할 수 없습니다.');
	return false;
<?php endif?>
	getIframeForAction(f);
	return confirm('정말로 수정하시겠습니까?         ');
}
//]]>
</script>


