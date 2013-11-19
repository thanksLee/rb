
<div id="configbox">

	<form name="sendForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return sslCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="config" />
	<input type="hidden" name="act" value="bootstrap" />


	<div class="title">
		부트스트랩 / jQuery 설정
	</div>

	<table>
		<tr>
			<td class="td1">부트스트랩 경로</td>
			<td class="td2">
				<div class="shift">
				<label><input type="radio" name="bs_type" value="cdn"<?php if($d['admin']['bs_type']=='cdn'):?> checked="checked"<?php endif?> onclick="b_check(1,'bs');" />CDN</label>
				<label><input type="radio" name="bs_type" value="local"<?php if($d['admin']['bs_type']=='local'):?> checked="checked"<?php endif?> onclick="b_check(2,'bs');" />로컬</label>
			</td>
		</tr>

		<tr>
			<td class="td1" id="_bs_title"><?php if($d['admin']['bs_type']=='local'):?>버젼/압축상태<?php else:?>CDN 경로<?php endif?></td>
			<td class="td2">
				
				<div id="_bs_cdn"<?php if($d['admin']['bs_type']=='local'):?> class="hide"<?php endif?>>
					<textarea name="bs_cdn" rows="3" cols="100"><?php echo str_replace('<br>',"\n",$d['admin']['bs_cdn'])?></textarea>
				</div>

				<div id="_bs_local"<?php if($d['admin']['bs_type']=='cdn'):?> class="hide"<?php endif?>>
					<select name="bs_local" class="select1">
					<?php $dirs = opendir($g['path_core'].'opensrc/bootstrap')?>
					<?php while(false !== ($tpl = readdir($dirs))):?>
					<?php if($tpl=='.' || $tpl == '..')continue?>
					<option value="<?php echo $tpl?>"<?php if($d['admin']['bs_local']==$tpl):?> selected="selected"<?php endif?>>bootstrap-<?php echo $tpl?></option>
					<?php endwhile?>
					<?php closedir($dirs)?>
					</select>
					<select name="bs_min" class="select1">
					<option value=""<?php if($d['admin']['bs_min']==''):?> selected="selected"<?php endif?>>bootstrap</option>
					<option value=".min"<?php if($d['admin']['bs_min']=='.min'):?> selected="selected"<?php endif?>>bootstrap.min</option>
					</select>

					<div class="guide">
						로컬에 설치된 부트스트랩을 사용합니다.<br />
						버젼과 압축상태를 선택해 주세요.<br />
						로컬파일의 위치는 /_core/opensrc/bootstrap/ 입니다.<br />
					</div>
				</div>

			</td>
		</tr>

		<tr>
			<td class="td1">jQuery 경로</td>
			<td class="td2">
				<div class="shift">
				<label><input type="radio" name="jq_type" value="cdn"<?php if($d['admin']['jq_type']=='cdn'):?> checked="checked"<?php endif?> onclick="b_check(1,'jq');" />CDN</label>
				<label><input type="radio" name="jq_type" value="local"<?php if($d['admin']['jq_type']=='local'):?> checked="checked"<?php endif?> onclick="b_check(2,'jq');" />로컬</label>
			</td>
		</tr>


		<tr>
			<td class="td1" id="_jq_title"><?php if($d['admin']['jq_type']=='local'):?>버젼/압축상태<?php else:?>CDN 경로<?php endif?></td>
			<td class="td2">
				
				<div id="_jq_cdn"<?php if($d['admin']['jq_type']=='local'):?> class="hide"<?php endif?>>
					<textarea name="jq_cdn" rows="3" cols="100"><?php echo str_replace('<br>',"\n",$d['admin']['jq_cdn'])?></textarea>
				</div>

				<div id="_jq_local"<?php if($d['admin']['jq_type']=='cdn'):?> class="hide"<?php endif?>>
					<select name="jq_local" class="select1">
					<?php $dirs = opendir($g['path_core'].'opensrc/jquery')?>
					<?php while(false !== ($tpl = readdir($dirs))):?>
					<?php if($tpl=='.' || $tpl == '..')continue?>
					<option value="<?php echo $tpl?>"<?php if($d['admin']['jq_local']==$tpl):?> selected="selected"<?php endif?>>jquery-<?php echo $tpl?></option>
					<?php endwhile?>
					<?php closedir($dirs)?>
					</select>
					<select name="jq_min" class="select1">
					<option value=""<?php if($d['admin']['jq_min']==''):?> selected="selected"<?php endif?>>jquery</option>
					<option value=".min"<?php if($d['admin']['jq_min']=='.min'):?> selected="selected"<?php endif?>>jquery.min</option>
					</select>

					<div class="guide">
						로컬에 설치된 jQuery를 사용합니다.<br />
						버젼과 압축상태를 선택해 주세요.<br />
						로컬파일의 위치는 /_core/opensrc/jquery/ 입니다.<br />
					</div>
				</div>

			</td>
		</tr>

		<tr>
			<td class="td1">jQuery모바일 경로</td>
			<td class="td2">
				<div class="shift">
				<label><input type="radio" name="jm_type" value="cdn"<?php if($d['admin']['jm_type']=='cdn'):?> checked="checked"<?php endif?> onclick="b_check(1,'jm');" />CDN</label>
				<label><input type="radio" name="jm_type" value="local"<?php if($d['admin']['jm_type']=='local'):?> checked="checked"<?php endif?> onclick="b_check(2,'jm');" />로컬</label>
			</td>
		</tr>


		<tr>
			<td class="td1" id="_jm_title"><?php if($d['admin']['jm_type']=='local'):?>버젼/압축상태<?php else:?>CDN 경로<?php endif?></td>
			<td class="td2">
				
				<div id="_jm_cdn"<?php if($d['admin']['jm_type']=='local'):?> class="hide"<?php endif?>>
					<textarea name="jm_cdn" rows="3" cols="100"><?php echo str_replace('<br>',"\n",$d['admin']['jm_cdn'])?></textarea>
				</div>

				<div id="_jm_local"<?php if($d['admin']['jm_type']=='cdn'):?> class="hide"<?php endif?>>
					<select name="jm_local" class="select1">
					<?php $dirs = opendir($g['path_core'].'opensrc/jquery.mobile')?>
					<?php while(false !== ($tpl = readdir($dirs))):?>
					<?php if($tpl=='.' || $tpl == '..')continue?>
					<option value="<?php echo $tpl?>"<?php if($d['admin']['jm_local']==$tpl):?> selected="selected"<?php endif?>>jquery.mobile-<?php echo $tpl?></option>
					<?php endwhile?>
					<?php closedir($dirs)?>
					</select>
					<select name="jm_min" class="select1">
					<option value=""<?php if($d['admin']['jm_min']==''):?> selected="selected"<?php endif?>>jquery.mobile</option>
					<option value=".min"<?php if($d['admin']['jm_min']=='.min'):?> selected="selected"<?php endif?>>jquery.mobile.min</option>
					</select>

					<div class="guide">
						로컬에 설치된 jQuery 모바일을 사용합니다.<br />
						버젼과 압축상태를 선택해 주세요.<br />
						로컬파일의 위치는 /_core/opensrc/jmuery.mobile/ 입니다.<br />
					</div>
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
function b_check(n,ld)
{
	if (n == 1)
	{
		getId('_'+ld+'_title').innerHTML = 'CDN 경로';
		getId('_'+ld+'_cdn').className = '';
		getId('_'+ld+'_local').className = 'hide';
	}
	else {
		getId('_'+ld+'_title').innerHTML = '버젼/압축상태';
		getId('_'+ld+'_cdn').className = 'hide';
		getId('_'+ld+'_local').className = '';
	}
}
function sslCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




