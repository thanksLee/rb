<?php include_once $g['path_module'].$module.'/var/var.php'?>

<!-- uniform -->
<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/uniform/uniform.default.css" /> 

<div class="form-horizontal">

	<div class="well">
		알림센터는 개별 모듈들에서 발생하는 이벤트나 소식을 회원들에게 알리는 역할을 합니다.
	</div>

	<div class="page-header">
	  <h4><i class="icon-info-sign"></i> 알림센터 설정 </h4>
	</div>

	<form role="form" name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="config" />
	<input type="hidden" name="cut_modules" value="" />

	<div class="form-group">
		<label class="col-lg-2 control-label" for="inputEmail1">알림 차단 모듈</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-3">
					<div class="input-group">
						
						<?php $_MODULES_ALL = getDbArray($table['s_module'],'','*','gid','asc',0,1)?>
						<?php while($_R = db_fetch_array($_MODULES_ALL)):?>
						<label style="display:bloack;float:left;width:120px;height:20px;margin:5px 0 5px 0;">
							<input type="checkbox" name="module_members[]" value="<?php echo $_R['id']?>"<?php if($d['notification']['cut_modules'] && strstr($d['notification']['cut_modules'],'['.$_R['id'].']')):?> checked="checked"<?php endif?> /> 
							<?php echo $_R['name']?>
						</label>
						<?php endwhile?>

					</div>
				</div>

			</div>
			<span class="help-block">알림을 차단하려는 모듈이 있으면 선택해 주세요. 선택된 모듈에서 알림메세지를 전송하더라도 차단됩니다.</span>
		</div>


		<label class="col-lg-2 control-label" for="inputEmail1">알림 차단 회원</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-3">
					<div class="input-group">
						<input class="form-control" type="text" name="cut_members" value="<?php echo $d['notification']['cut_members']?>" size="70" />
					</div>
				</div>

			</div>
			<span class="help-block">특정회원의 알림전송을 차단하려면 회원의 아이디를 콤마로 구분하여 등록해 주세요.</span>
		</div>

	</div>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<input type="submit" class="btn btn-primary btn-lg" type="button" value="속성변경">
			<input type="button" class="btn btn-primary btn-lg" type="button" value="나이게 테스트 알림 보내기" onclick="notiPush();">
		</div>
	</div>
	</form>

</div>


<script type="text/javascript">
//<![CDATA[

function saveCheck(f)
{
	var f = document.procForm;
    var l = document.getElementsByName('module_members[]');
    var n = l.length;
    var i;
	var s = '';

    for (i = 0; i < n; i++)
	{
		if(l[i].checked == true)
		{
			s += '['+l[i].value+']';
		}
	}
	if (confirm('정말로 실행하시겠습니까?         '))
	{
		f.cut_modules.value = s;
		getIframeForAction(f);
		return true;
	}
	return false;
}
function notiPush()
{
	if (confirm('정말로 테스트알림을 보내시겠습니까?         '))
	{
		var f = document.procForm;
		getIframeForAction(f);
		f.a.value = 'testpush';
		f.submit();
	}
}

// chosen-select
jQuery(function($) {
	$(".chosen-select").chosen(); 
});

// uniform
$(document).ready(function() {
	//init this last don`t change
	//------------- Uniform  -------------//
	//add class .nostyle if not want uniform to style field
	//$("input, textarea, select").not('.nostyle').uniform();
	//$("[type='checkbox'], [type='radio'], [type='file'], select").not('.toggle, .select2, .multiselect').uniform();
	$("[type='checkbox'],[type='radio']").not('.toggle, .select2, .multiselect').uniform();
});

//]]>
</script>

