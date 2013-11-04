<?php include_once $g['dir_module_skin'].'_cal.php'?>

<div id="photobox">
	
	<div class="wrap">

		<div class="bar">
			
			<div class="xl">
				<div class="dupload">
				<span class="dragstr">
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;mod=photo&amp;album=<?php echo urlencode($album)?>&amp;cupload=Y">업로드가 안될경우</a> &nbsp;|&nbsp;
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;mod=photo&amp;album=<?php echo urlencode($album)?>">PC사진 첨부하기</a>
				</span>
				</div>
			</div>
			<div class="xr">
				
				<span class="info">
				용량 : <span class="b"><?php echo getSizeFormat($S,0)?></span> / <?php echo str_replace('M','',ini_get('upload_max_filesize'))?>Mb
				개수 : <span class="b"><?php echo $N?>개</span> / 20개
				</span>

			</div>

		</div>

		<form name="cform" action="<?php echo $g['s']?>/" method="post" enctype="multipart/form-data" onsubmit="return upCheck(this);" />
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $m?>" />
		<input type="hidden" name="a" value="photo_link" />
		<input type="hidden" name="sess_Code" value="<?php echo $sescode?>_<?php echo $my['uid']?>_1_" />

		<div class="body">
			<div class="viewer scrollbar01">

				
				<table>
				<tr>
				<td class="td1">사진 URL</td>
				<td class="td2"><input type="text" name="link" value="" size="70" class="input" /></td>
				</tr>
				<tr>
				<td class="td1">사진설명(캡션)</td>
				<td class="td2"><input type="text" name="caption" value="" size="70" class="input" /></td>
				</tr>
				<tr>
				<td class="td1">파일명</td>
				<td class="td2"><input type="text" name="name" value="" size="20" class="input" /> <span>(미입력시 자동추출)</span></td>
				</tr>
				<tr>
				<td class="td1">원격저장</td>
				<td class="td2"><label><input type="checkbox" name="save" value="1" checked="checked" />이 사진파일을 로컬서버에 저장</label></td>
				</tr>
				</table>

				
			</div>
		</div>
		<div class="clear"></div>


		<div class="footer">
			<input type="image" src="<?php echo $g['img_module_skin']?>/btn_regis.gif" alt="등록" class="hand" />
			<img src="<?php echo $g['img_module_skin']?>/btn_cancel.gif" alt="취소" class="hand" onclick="closePhoto();" />
		</div>
		
		</form>

		</div>

	</div>

</div>



<script type="text/javascript">
//<![CDATA[
function upCheck(f)
{
	<?php if(20 < $N+1 || (str_replace('M','',ini_get('upload_max_filesize'))*1024*1024) <= $S):?>
	alert('더 이상 첨부할 수 없습니다.');
	return false;
	<?php endif?>

	if (f.link.value == '')
	{
		alert('사진 URL을 입력해 주세요.   ');
		f.link.focus();
		return false;
	}

	return true;
}
function closePhoto()
{
	frames._action_frame_<?php echo $m?>.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&a=files_delete&dtype=photo&close=Y';
}
function pRset1()
{
	parent.getId('_modal_on_').style.height = (parseInt(document.body.scrollHeight)+40)+'px';
	parent.getId('_modal_iframe_').style.height = (parseInt(document.body.scrollHeight)+40)+'px';
}
function pRset2()
{
	parent.getId('_modal_on_').style.height = (parseInt(document.body.scrollHeight)-13)+'px';
	parent.getId('_modal_iframe_').style.height = (parseInt(document.body.scrollHeight)-13)+'px';
}
window.onload = function()
{
	document.body.style.overflow = 'hidden';
	pRset2();
}
//]]>
</script>



