<!-- 시스템 환경 -->
<form name="sendForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return sslCheck(this);" class="form-horizontal" role="form">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="config" />

	<input type="hidden" name="cache_flag" value="<?php echo $d['admin']['cache_flag']?>" />
	<input type="hidden" name="themepc" value="<?php echo $d['admin']['themepc']?>" />
	<input type="hidden" name="thememobile" value="<?php echo $d['admin']['thememobile']?>" />
	<input type="hidden" name="autoclose" value="<?php echo $d['admin']['autoclose']?>" />
	<input type="hidden" name="version" value="<?php echo $d['admin']['version']?>" />
	<input type="hidden" name="hidepannel" value="<?php echo $d['admin']['hidepannel']?>" />
	<input type="hidden" name="pannellink" value="<?php echo $d['admin']['pannellink']?>" />

	<input type="hidden" name="secu_iframe" value="<?php echo $d['admin']['secu_iframe']?>" />
	<input type="hidden" name="secu_script" value="<?php echo $d['admin']['secu_script']?>" />
	<input type="hidden" name="secu_style" value="<?php echo $d['admin']['secu_style']?>" />
	<input type="hidden" name="secu_flash" value="<?php echo $d['admin']['secu_flash']?>" />
	<input type="hidden" name="secu_domain" value="<?php echo $d['admin']['secu_domain']?>" />

	<div class="page-header">
	  <h4><i class="fa fa-exclamation-circle"></i> SSL 환경설정</h4>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label" for="">SSL 적용</label>
		<div class="col-lg-10">
			<label class="radio-inline">
				<input type="radio" name="ssl_type" value=""<?php if(!$d['admin']['ssl_type']):?> checked="checked"<?php endif?>> 적용안함
			</label>
			<label class="radio-inline">
				<input type="radio" name="ssl_type" value="1"<?php if($d['admin']['ssl_type']==1):?> checked="checked"<?php endif?> onclick="crLayer('SSL 전체사이트 적용 안내',getId('_gxguide_').innerHTML,'close',400,220,'25%');"> 전체사이트 적용
			</label>
			<label class="checkbox-inline">
				<input type="radio" name="ssl_type" value="2"<?php if($d['admin']['ssl_type']==2):?> checked="checked"<?php endif?>> 코드값 적용
			</label>
			<span class="help-block">보안서버가 설치되지 않은 상태에서 전체사이트 적용을 체크하시면 사이트에 접속할 수 없게 됩니다. 반드시 보안서버 설치 후 체크해 주세요.<br></span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">HTTP 포트번호</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="http_port" value="<?php echo $d['admin']['http_port']?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">SSL 포트번호</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="ssl_port" value="<?php echo $d['admin']['ssl_port']?>">
			<span class="help-block">80포트일 경우 공백으로 두세요.<br></span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">SSL 적용메뉴</label>
		<div class="col-lg-9">
			<input type="text" class="form-control" name="ssl_menu" value="<?php echo $d['admin']['ssl_menu']?>">
			<span class="help-block">적용할 메뉴의 코드값을 콤마(,)로 구분해서 등록해 주세요<br>보기) /rb/?c=ssl 일 경우 코드값은 ssl</span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">SSL 적용페이지</label>
		<div class="col-lg-9">
			<input type="text" class="form-control" name="ssl_page" value="<?php echo $d['admin']['ssl_page']?>">
			<span class="help-block">적용할 페이지의 코드값을 콤마(,)로 구분해서 등록해 주세요.<br>보기) /rb/?mod=ssl 일 경우 코드값은 ssl</span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">SSL 적용게시판</label>
		<div class="col-lg-9">
			<input type="text" class="form-control" name="ssl_bbs" value="<?php echo $d['admin']['ssl_bbs']?>">
			<span class="help-block">적용할 게시판의 코드(아이디)값을 콤마(,)로 구분해서 등록해 주세요.<br>보기) /rb/?m=bbs&bid=ssl 일 경우 코드값은 ssl</span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">SSL 적용모듈</label>
		<div class="col-lg-9">
			<input type="text" class="form-control" name="ssl_module" value="<?php echo $d['admin']['ssl_module']?>">
			<span class="help-block">적용할 모듈의 아이디(폴더명)를 콤마(,)로 구분해서 등록해 주세요.<br>보기) /rb/?m=zipsearch 일 경우 코드값은 zipsearch</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-primary btn-lg hidden-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
			<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
		</div>
	</div>
</form>
<!-- //SSL 환경설정 -->

<br><br><br>
<!-- 여기까지 권기택 작업 입니다.  -->

<div id="configbox">

	<form name="sendForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return sslCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="config" />

		<input type="hidden" name="cache_flag" value="<?php echo $d['admin']['cache_flag']?>" />
		<input type="hidden" name="themepc" value="<?php echo $d['admin']['themepc']?>" />
		<input type="hidden" name="thememobile" value="<?php echo $d['admin']['thememobile']?>" />
		<input type="hidden" name="autoclose" value="<?php echo $d['admin']['autoclose']?>" />
		<input type="hidden" name="version" value="<?php echo $d['admin']['version']?>" />
		<input type="hidden" name="hidepannel" value="<?php echo $d['admin']['hidepannel']?>" />
		<input type="hidden" name="pannellink" value="<?php echo $d['admin']['pannellink']?>" />

		<input type="hidden" name="secu_iframe" value="<?php echo $d['admin']['secu_iframe']?>" />
		<input type="hidden" name="secu_script" value="<?php echo $d['admin']['secu_script']?>" />
		<input type="hidden" name="secu_style" value="<?php echo $d['admin']['secu_style']?>" />
		<input type="hidden" name="secu_flash" value="<?php echo $d['admin']['secu_flash']?>" />
		<input type="hidden" name="secu_domain" value="<?php echo $d['admin']['secu_domain']?>" />


	<div class="title">
		SSL 환경설정
	</div>

	<table>
		<tr>
			<td class="td1">SSL 적용</td>
			<td class="td2">
				<div class="shift">
				<label><input type="radio" name="ssl_type" value=""<?php if(!$d['admin']['ssl_type']):?> checked="checked"<?php endif?> />적용안함</label>
				<label><input type="radio" name="ssl_type" value="1"<?php if($d['admin']['ssl_type']==1):?> checked="checked"<?php endif?> onclick="crLayer('SSL 전체사이트 적용 안내',getId('_gxguide_').innerHTML,'close',400,220,'25%');" />전체사이트 적용</label>
				<label><input type="radio" name="ssl_type" value="2"<?php if($d['admin']['ssl_type']==2):?> checked="checked"<?php endif?> />코드값 적용</label>
				</div>
				<div id="_gxguide_" class="guide">
					보안서버가 설치되지 않은 상태에서 전체사이트 적용을 체크하시면 사이트에 접속할 수 없게 됩니다.<br />
					반드시 보안서버 설치 후 체크해 주세요.<br />
					혹, 보안서버 미설치 상태에서 전체사이트 체크 후 이상이 생겼을 경우에는 킴스큐 공식포털에서 해결방법을 얻을 수 있습니다.<br />
				</div>
			</td>
		</tr>
		<tr>
			<td class="td1">HTTP 포트번호</td>
			<td class="td2">
				<input type="text" name="http_port" value="<?php echo $d['admin']['http_port']?>" class="input" style="width:40px;" />
			</td>
		</tr>
		<tr>
			<td class="td1">SSL 포트번호</td>
			<td class="td2">
				<input type="text" name="ssl_port" value="<?php echo $d['admin']['ssl_port']?>" class="input" style="width:40px;" />
				<span class="guide">80포트일 경우 공백으로 두세요.</span>
			</td>
		</tr>
		<tr>
			<td class="td1">SSL 적용메뉴</td>
			<td class="td2">
				<input type="text" name="ssl_menu" value="<?php echo $d['admin']['ssl_menu']?>" class="input" />
				<div class="guide">
					적용할 메뉴의 코드값을 콤마(,)로 구분해서 등록해 주세요.<br />
					보기) /rb/?c=ssl 일 경우 코드값은 ssl<br />				
				</div>
			</td>
		</tr>
		<tr>
			<td class="td1">SSL 적용페이지</td>
			<td class="td2">
				<input type="text" name="ssl_page" value="<?php echo $d['admin']['ssl_page']?>" class="input" />
				<div class="guide">
					적용할 페이지의 코드값을 콤마(,)로 구분해서 등록해 주세요.<br />
					보기) /rb/?mod=ssl 일 경우 코드값은 ssl<br />				
				</div>
			</td>
		</tr>
		<tr>
			<td class="td1">SSL 적용게시판</td>
			<td class="td2">
				<input type="text" name="ssl_bbs" value="<?php echo $d['admin']['ssl_bbs']?>" class="input" />
				<div class="guide">
					적용할 게시판의 코드(아이디)값을 콤마(,)로 구분해서 등록해 주세요.<br />
					보기) /rb/?m=bbs&bid=ssl 일 경우 코드값은 ssl<br />				
				</div>
			</td>
		</tr>
		<tr>
			<td class="td1">SSL 적용모듈</td>
			<td class="td2">
				<input type="text" name="ssl_module" value="<?php echo $d['admin']['ssl_module']?>" class="input" />
				<div class="guide">
					적용할 모듈의 아이디(폴더명)를 콤마(,)로 구분해서 등록해 주세요.<br />
					보기) /rb/?m=zipsearch 일 경우 코드값은 zipsearch<br />				
				</div>
			</td>
		</tr>
	</table>

	<div class="submitbox">
		<input type="submit" class="btnblue" value=" 확인 " />
	</div>

	</form>

</div>




<script type="text/javascript">
//<![CDATA[
function sslCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




