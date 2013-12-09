
<form name="sendForm" action="<?php echo $g['s']?>/" method="post" class="form-horizontal" role="form" onsubmit="return sslCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="config" />
<input type="hidden" name="act" value="security" />


<div class="page-header">
  <h4><i class="fa fa-exclamation-circle"></i> 보안설정</h4>
</div>

<div class="form-group">
	<label class="col-lg-2 control-label" for="">에디터 허용태그</label>
	<div class="col-lg-9">
		<label class="checkbox-inline">
			<input type="checkbox" name="secu_iframe" value="1"<?php if($d['admin']['secu_iframe']):?> checked="checked"<?php endif?>> iframe
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="secu_script" value="1"<?php if($d['admin']['secu_script']):?> checked="checked"<?php endif?>> script
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="secu_style" value="1"<?php if($d['admin']['secu_style']):?> checked="checked"<?php endif?>> style
		</label>
		<span class="help-block">
			킴스큐에 포함된 위지위그 에디터를 사용할 경우 편리하게 문서를 편집할 수 있습니다.
			그러나 특정태그를 허용하게 되면 XSS(Cross-site scripting, 크로스 사이트 스크립팅) 나
			CSRF(Cross Site Request Forgery, 크로스 사이트 요청 변조)공격을 받을 수 있으므로 주의해야 합니다.<br>
			특히 iframe 이나 script 는 특수한 경우가 아니면 허용하지 말아야 합니다.
		</span>
	</div>
</div>
<div class="form-group">
	<label for="" class="col-lg-2 control-label">플래쉬 허용</label>
	<div class="col-lg-9">
		<div class="checkbox">
			<label>
				<input type="checkbox" name="secu_flash" value="1"<?php if($d['admin']['secu_flash']):?> checked="checked"<?php endif?> />
				관리자도 플래쉬를 볼 수 있도록 허용함
			</label>
		</div>
		<span class="help-block">
			플래쉬를 이용한 XSS 공격을 차단하기 위해 관리자 권한으로 접속했을 경우 플래쉬를 볼 수 없도록 합니다.
			(비회원이나 일반회원은 제한없이 플래쉬를 볼 수 있습니다)
		</span>
	</div>
</div>
<div class="form-group">
	<label for="" class="col-lg-2 control-label">iframe 허용도메인</label>
	<div class="col-lg-9">
		<input type="text" class="form-control" name="secu_domain" value="<?php echo $d['admin']['secu_domain']?>" placeholder="보기) youtube.com,naver.com,daum.net,vimeo.com,">
		<span class="help-block">
			허용할 도메인을 콤마(,)로 구분해서 등록해 주세요.
			iframe 태그를 허용하지 않아도 여기에 등록된 도메인들은 iframe 이 허용됩니다.
		</span>
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
function sslCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




