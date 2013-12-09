<?php include_once $g['path_module'].$module.'/var/var.editor.php'?>



<div class="page-header">
	<h4><i class="fa fa-cog fa-lg"></i>
	편집기 설정 </h4>
</div>

<form name="procForm" action="<?php echo $g['s']?>/" method="post" class="form-horizontal" role="form" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="config" />
<input type="hidden" name="compo" value="<?php echo $d['editor']['compo']?>" />

<div class="form-group">
  <label class="col-md-2 control-label">편집기 스킨</label>
  <div class="col-md-10 col-lg-9">
	<select name="skin" class="col-md-12 form-control">
	<?php $tdir = $g['path_module'].$module.'/theme/'?>
	<?php $dirs = opendir($tdir)?>
	<?php while(false !== ($skin = readdir($dirs))):?>
	<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
	<option value="<?php echo $skin?>" title="<?php echo $skin?>"<?php if($d['editor']['skin']==$skin):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
	<?php endwhile?>
	<?php closedir($dirs)?>
	</select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">사용 확장도구</label>
  <div class="col-md-10 col-lg-9">
	<div class="checkbox">
		
		<?php $i=0?>
		<?php $tdir = $g['path_module'].$module.'/component/'?>
		<?php $dirs = opendir($tdir)?>
		<?php while(false !== ($skin = readdir($dirs))):?>
		<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
		<?php $i++?>
		<label>
		<input type="checkbox" name="compo_members[]" value="<?php echo $skin?>"<?php if(strstr($d['editor']['compo'],'['.$skin.']')):?> checked="checked"<?php endif?> /><?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=compo_delete&amp;compo=<?php echo $skin?>" onclick="return confirm('정말로 삭제하시겠습니까?  ');"><img src="<?php echo $g['img_core']?>/_public/btn_del_s01.gif" class="del" alt="" /></a>
		</label>
		<?php endwhile?>
		<?php closedir($dirs)?>
		<?php if(!$i):?>
		<label><input type="checkbox" disabled="disabled" />등록된 확장도구가 없습니다.</label>
		<?php else:?>
		<div class="guide">
		사용할 확장도구를 체크해 주세요.
		</div>
		<?php endif?>
		
	</div>
  </div>
</div>
<div class="form-group">
	<div class="col-md-offset-2 col-md-10 col-lg-9">
		<button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-check fa-lg"></i> 정보변경</button>
	</div>
</div>
</form>



<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
    var l = document.getElementsByName('compo_members[]');
    var n = l.length;
    var i;
	var j=0;
	var s='';

	for	(i = 0; i < n; i++)
	{
		if (l[i].checked == true)
		{
			j++;
			s += '['+l[i].value +']';
		}
	}
	f.compo.value = s;

	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




