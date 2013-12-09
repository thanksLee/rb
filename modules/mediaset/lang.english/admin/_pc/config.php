<?php include_once $g['path_module'].$module.'/var/var.php'?>

<div class="form-horizontal">

	<div class="well">
		첨부파일은 
		<code>/modules/<?php echo $module?>/files/(photo|vod)/카테고리/</code>
		이하에 저장 됩니다. 현재 서버에서 허용하고 있는 1회 최대 첨부용량은
		<code><?php echo str_replace('M','',ini_get('upload_max_filesize'))?>M</code>
		입니다. 
	</div>

	<div class="page-header">
	  <h4><i class="icon-info-sign"></i> 셈네일 설정 </h4>
	</div>

	<form role="form" name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="config" />
	<input type="hidden" name="front" value="<?php echo $front?>" />
	<div class="form-group">
		<label class="col-lg-2 control-label" for="inputEmail1">섬네일사이즈</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-3">
					<div class="input-group">
						<span class="input-group-addon">소 (小)</span>
						<input name="t_size1" class="form-control text-right" type="text" value="<?php echo $d['mediaset']['t_size1']?>">
						<span class="input-group-addon">px</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="input-group">
						<span class="input-group-addon">중 (中)</span>
						<input name="t_size2" class="form-control text-right" type="text" value="<?php echo $d['mediaset']['t_size2']?>">
						<span class="input-group-addon">px</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="input-group">
						<span class="input-group-addon">대 (大)</span>
						<input class="form-control" disabled placeholder="원본" type="text">
						<span class="input-group-addon">px</span>
					</div>
				</div>
			</div>
			<span class="help-block">썸네일은 작은 사이즈(소), 중간사이즈(중), 원본 3개로 저장 됩니다.</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<input type="submit" class="btn btn-primary btn-lg" type="button" value="속성변경">
		</div>
	</div>
	</form>

</div>


<script type="text/javascript">
//<![CDATA[

function saveCheck(f)
{
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>


