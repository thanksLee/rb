

<form name="sendForm" action="<?php echo $g['s']?>/" method="post" class="form-horizontal" role="form" onsubmit="return sendCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="email_check" />

<div class="page-header">
  <h4><i class="fa fa-exclamation-circle"></i> 시스템 환경</h4>
</div>


<div class="form-group">
	<label class="col-lg-2 control-label" for="">웹서버</label>
	<div class="col-lg-10">
		<p class="form-control-static"><?php echo $_SERVER['SERVER_SOFTWARE']?></p>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-2 control-label" for="">PHP버젼</label>
	<div class="col-lg-10">
		<p class="form-control-static"><?php echo phpversion()?></p>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-2 control-label" for="">MYSQL버젼</label>
	<div class="col-lg-10">
		<p class="form-control-static"><?php echo db_info()?> (<?php echo $DB['type']?>)</p>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-2 control-label" for="">코어버젼</label>
	<div class="col-lg-10">
		<p class="form-control-static">kimsQ-RB <?php echo $d['admin']['version']?></p>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-2 control-label" for="">이메일 체크</label>
	<div class="col-lg-6">
		<div class="input-group">
			<input type="text" class="form-control" name="email" value="<?php echo $my['email']?>">
			<span class="input-group-btn">
			<button class="btn btn-default" type="submit">이메일 전송확인</button>
			</span>
		</div>
		<span class="help-block">입력한 이메일주소로 전송이 되면 메일서버가 정상작동되는 상태입니다.</span>
	</div>
</div>
</form>



<form name="procForm" action="<?php echo $g['s']?>/" method="post" class="form-horizontal" role="form" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="config" />
<input type="hidden" name="act" value="config" />

<div class="page-header">
  <h4><i class="fa fa-exclamation-circle"></i> 시스템 테마</h4>
</div>

<div class="form-group">
	<label for="" class="col-lg-2 control-label">관리자테마</label>
	<div class="col-lg-6">
		<select name="themepc" class="form-control">
		<?php $dirs = opendir($g['dir_module'].'lang.'.$_HS['lang'].'/theme/_pc')?>
		<?php while(false !== ($tpl = readdir($dirs))):?>
		<?php if($tpl=='.' || $tpl == '..')continue?>
		<option value="<?php echo $tpl?>"<?php if($d['admin']['themepc']==$tpl):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($g['dir_module'].'lang.'.$_HS['lang'].'/theme/_pc/'.$tpl)?>(<?php echo str_replace('.php','',$tpl)?>)</option>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</select>
	</div>
</div>
<div class="form-group">
	<label for="" class="col-lg-2 control-label">사이드바</label>
	<div class="col-lg-6">
		<label class="radio-inline">
		  <input type="radio" name="sidebar" value="lightgray"<?php if($d['admin']['sidebar']=='lightgray'):?> checked="checked"<?php endif?>> Light Gray
		</label>
		<label class="radio-inline">
		  <input type="radio" name="sidebar" value="darkgray"<?php if($d['admin']['sidebar']=='darkgray'):?> checked="checked"<?php endif?>> Dark Gray
		</label>
	</div>
</div>
<div class="form-group">
	<div class="col-lg-offset-2 col-lg-6">
		<label>
			<input type="checkbox" name="hidepannel" value="1"<?php if($d['admin']['hidepannel']):?> checked="checked"<?php endif?>>
			사용자 영역에서 좌측/하단의 관리바를 출력하지 않음
		</label>
	</div>
</div>
<div class="form-group">
	<label for="" class="col-lg-2 control-label">엑티브 칼라</label>
	<div class="col-lg-6">
		<label class="radio-inline">
		  <input type="radio" name="activecolor" value="blue"<?php if($d['admin']['activecolor']=='blue'):?> checked="checked"<?php endif?>> Blue
		</label>
		<label class="radio-inline">
		  <input type="radio" name="activecolor" value="red"<?php if($d['admin']['activecolor']=='red'):?> checked="checked"<?php endif?>> Red
		</label>
		<label class="radio-inline">
		  <input type="radio" name="activecolor" value="green"<?php if($d['admin']['activecolor']=='green'):?> checked="checked"<?php endif?>> Green
		</label>
		<label class="radio-inline">
		  <input type="radio" name="activecolor" value="yellow"<?php if($d['admin']['activecolor']=='yellow'):?> checked="checked"<?php endif?>> Yellow
		</label>
	</div>
</div>




<!-- 부가 환경설정 -->
<div class="page-header">
  <h4><i class="fa fa-exclamation-circle"></i> 부가 환경설정</h4>
</div>


<div class="form-group">
	<label for="" class="col-lg-2 control-label">관리링크 출력</label>
	<div class="col-lg-6">
		<label class="radio-inline">
		  <input type="radio" name="pannellink" value=""<?php if(!$d['admin']['pannellink']):?> checked="checked"<?php endif?>> 적용중인 레이아웃에 출력
		</label>
		<label class="radio-inline">
		  <input type="radio" name="pannellink" value="1"<?php if($d['admin']['pannellink']):?> checked="checked"<?php endif?>> 레이어에 출력
		</label>
	</div>
</div>
<div class="form-group">
	<label for="" class="col-lg-2 control-label">CSS/JS 캐시</label>
	<div class="col-lg-6">
		<select name="cache_flag" class="form-control">
			<option value=""<?php if($d['admin']['cache_flag']==''):?> selected="selected"<?php endif?>>ㆍ브라우져 설정을 따름</option>
			<option value="totime"<?php if($d['admin']['cache_flag']=='totime'):?> selected="selected"<?php endif?>>ㆍ접속시마다 갱신</option>
			<option value="nhour"<?php if($d['admin']['cache_flag']=='nhour'):?> selected="selected"<?php endif?>>ㆍ한시간 단위로 갱신</option>
			<option value="today"<?php if($d['admin']['cache_flag']=='today'):?> selected="selected"<?php endif?>>ㆍ하루 단위로 갱신</option>
			<option value="month"<?php if($d['admin']['cache_flag']=='month'):?> selected="selected"<?php endif?>>ㆍ한달 단위로 갱신</option>
			<option value="year"<?php if($d['admin']['cache_flag']=='year'):?> selected="selected"<?php endif?>>ㆍ일년 단위로 갱신</option>
		</select>
		<span class="help-block">CSS 나 자바스크립트 파일을 수정했을 경우에는 일정기간 접속시마다 갱신되도록 설정해 주세요.</span>
	</div>
</div>

<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
		<button type="submit" class="btn btn-primary btn-lg hidden-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
		<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
	</div>
</div>


</form>





<script type="text/javascript">
//<![CDATA[
var sendFlag = false;
function sendCheck(f)
{
	if (sendFlag == true)
	{
		alert('이메일전송 요청중에 있습니다. 잠시만 기다려 주세요.');
		return false;
	}
	if (f.email.value == '')
	{
		alert('전송할 이메일 주소를 입력해 주세요.       ');
		f.email.focus();
		return false;
	}
	if (confirm('정말로 실행하시겠습니까?         '))
	{
		sendFlag = true;
		getIframeForAction(f);
		return true;
	}
}
function saveCheck(f)
{
	if (f.themepc.value == '')
	{
		alert('관리자테마를 선택해 주세요.       ');
		f.themepc.focus();
		return false;
	}
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




