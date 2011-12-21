<?php 
$_R=getUidData($table['bbsdata'],$uid);
$_IMGS = getImgs($_R['content'],'jpg|jpeg');
$_link=getPostLink($_R);
?>


[RESULT:

<div id="_main_photobox"><a href="<?php echo $_link?>"><?php if($_IMGS[0]):?><img src="<?php echo $_IMGS[0]?>" alt="" /><?php endif?></a></div>
<div id="_main_name">
	<?php echo $_R[$_HS['nametype']]?>님 <i>|</i> 
	<?php echo getDateFormat($_R['d_regis'],'Y.m.d')?> <i>|</i> 
	<?php echo $_R['comment']+$_R['oneline']?> Comment<?php if($_R['comment']+$_R['oneline']>1):?>s<?php endif?>
</div>
<div id="_main_subject"><a href="<?php echo $_link?>"><?php echo $_R['subject']?></a></div>
<div id="_main_cont">
<p><?php echo nl2br(getStrCut(getStripTags($_R['content']),150,'..'))?></p>
</div>

:RESULT]

