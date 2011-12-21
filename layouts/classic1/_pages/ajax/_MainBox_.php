[RESULT:

<?php if($d['layout']['bbs1']):?>
<?php $_sort=explode(',',$d['layout']['sort1'])?>
<?php $_date=$d['layout']['bbs1_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0?>
<?php $_B=getUidData($table['bbslist'],$d['layout']['bbs1'])?>
<?php $_TPG=getTotalPage($_B['num_r'],$d['layout']['bbs1_num'])?>
<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs1'].' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs1_num'],$p)?>
<?php $_R=db_fetch_array($_RCD)?>
<?php $_THUMB=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
<div class="posttop">
	<div class="p1"><i><?php echo number_format($_R['hit'])?></i></div>
	<div class="p2<?php if(!$_THUMB):?> nothumb<?php endif?>">
		<span class="title"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></span>
		<p><?php echo nl2br(getStrCut(getStripTags($_R['content']),100,'..'))?></p>
		<span class="info">
		<?php echo $_R[$_HS['nametype']]?> | <?php echo getDateFormat($_R['d_regis'],'Y.m.d H:i')?> | 
		<?php echo $_R['comment']+$_R['oneline']?> Comment<?php if($_R['comment']+$_R['oneline']>1):?>s<?php endif?>
		</span>
	</div>
	<?php if($_THUMB):?>
	<div class="p3"><div class="picbox"><img src="<?php echo $_THUMB?>" alt="" /></div></div>
	<?php endif?>
	<div class="clear"></div>
</div>
<?php while($_R=db_fetch_array($_RCD)):?>
<div class="post">
	<div class="p1"><i><?php echo number_format($_R['hit'])?></i></div>
	<div class="p2"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><i>(<?php echo $_R['comment']+$_R['oneline']?>)</i><?php endif?></div>
	<div class="p3"><?php echo $_R[$_HS['nametype']]?></div>
	<div class="p4"><?php echo getDateFormat($_R['d_regis'],'Y.m.d H:i')?></div>
	<div class="clear"></div>
</div>
<?php endwhile?>
<div class="skip">
<img src="<?php echo $g['img_layout']?>/btn_prev.gif" alt="" title="이전" onclick="mNext(<?php echo $p-1>0?$p-1:0?>);" /><img src="<?php echo $g['img_layout']?>/btn_next.gif" alt="" title="다음" onclick="mNext(<?php echo $p+1>$_TPG?-1:$p+1?>);" />
</div>
<?php endif?>

:RESULT]
