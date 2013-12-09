
[RESULT:

<div class="page-header">
	<h4>
		이 모듈 <small>(댓글)</small> 을 연결 하시겠습니까?
	</h4>
</div>

<select id="comment_skin">
<option value="">&nbsp;+ 댓글 대표테마</option>
<option value="">--------------------------------</option>
<?php $tdir = $g['path_module'].$smodule.'/theme/_pc/'?>
<?php $dirs = opendir($tdir)?>
<?php while(false !== ($skin = readdir($dirs))):?>
<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
<option value="_pc/<?php echo $skin?>" title="<?php echo $skin?>">ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
<?php endwhile?>
<?php closedir($dirs)?>
</select>
<input type="checkbox" id="hidepost" value="1" />최근댓글 출력제외

<input type="button" data-dismiss="modal" value="연결" class="btnblue" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>'+(getId('comment_skin').value!=''?'&skin='+getId('comment_skin').value:'')+(getId('hidepost').checked==true?'&hidepost=1':'')+'&cync=Y');" />


:RESULT]
