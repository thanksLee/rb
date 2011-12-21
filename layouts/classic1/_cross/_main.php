<?php if($d['layout']['bbs1']):?>
<?php $_sort=explode(',',$d['layout']['sort1'])?>
<?php $_date=$d['layout']['bbs1_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0?>
<?php $_B=getUidData($table['bbslist'],$d['layout']['bbs1'])?>
<?php $_TPG=getTotalPage($_B['num_r'],$d['layout']['bbs1_num'])?>
<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs1'].' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs1_num'],1)?>
<?php $_R=db_fetch_array($_RCD)?>

<div id="_MainBox_" class="mainbox">
	<?php if($_R['uid']):?>
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
	<img src="<?php echo $g['img_layout']?>/btn_prev.gif" alt="" title="이전" onclick="mNext(0);" /><img src="<?php echo $g['img_layout']?>/btn_next.gif" alt="" title="다음" onclick="mNext(<?php echo $_TPG>1?2:-1?>);" />
	</div>
	<?php else:?>
	<div class="postnone"></div>
	<?php endif?>
</div>
<?php endif?>

<?php if($d['layout']['bbs2']||$d['layout']['bbs3']):?>
<div class="topicbox">
	<div class="tl">
		<?php if($d['layout']['bbs2']):?>
		<?php $_B=getUidData($table['bbslist'],$d['layout']['bbs2'])?>
		<?php $_sort=explode(',',$d['layout']['sort2'])?>
		<?php $_date=$d['layout']['bbs2_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs2_day'],$date['year'])):0?>
		<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs2'].' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs2_num'],1)?>
		<?php $_R=db_fetch_array($_RCD)?>

		<div class="tt">
			<div class="ts"><?php echo $_B['name']?></div>
			<div class="tmore"><a href="<?php echo RW('m=bbs&bid='.$_B['id'])?>">더보기</a></div>
			<div class="clear"></div>
		</div>
		<?php if($_R['uid']):?>
		<?php $_IMG=getImgs($_R['content'],'jpg|jpeg')?>
		<div class="thumb"><a href="<?php echo getPostLink($_R)?>"><img src="<?php echo $_IMG[0]?$_IMG[0]:$g['img_core'].'/blank.gif'?>" alt="" /></a></div>
		<div class="tsubject"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></div>
		<div class="tdate"><?php echo getDateFormat($_R['d_regis'],'Y.m.d')?> , <?php echo $_R['comment']+$_R['oneline']?> Comment<?php if($_R['comment']+$_R['oneline']>1):?>s<?php endif?></div>
		<div class="tcont"><?php echo nl2br(getStrCut(getStripTags($_R['content']),85,'..'))?></div>
		<?php while($_R=db_fetch_array($_RCD)):?>
		<div class="tpost"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><i>(<?php echo $_R['comment']+$_R['oneline']?>)</i><?php endif?></div>
		<?php endwhile?>
		<?php else:?>
		<div class="none"></div>
		<?php endif?>
		<?php endif?>
	</div>
	<div class="tr">
		<?php if($d['layout']['bbs3']):?>
		<?php $_B=getUidData($table['bbslist'],$d['layout']['bbs3'])?>
		<?php $_sort=explode(',',$d['layout']['sort3'])?>
		<?php $_date=$d['layout']['bbs3_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs3_day'],$date['year'])):0?>
		<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs3'].' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs3_num'],1)?>
		<?php $_R=db_fetch_array($_RCD)?>

		<div class="tt">
			<div class="ts"><?php echo $_B['name']?></div>
			<div class="tmore"><a href="<?php echo RW('m=bbs&bid='.$_B['id'])?>">더보기</a></div>
			<div class="clear"></div>
		</div>
		<?php if($_R['uid']):?>
		<?php $_IMG=getImgs($_R['content'],'jpg|jpeg')?>
		<div class="thumb"><a href="<?php echo getPostLink($_R)?>"><img src="<?php echo $_IMG[0]?$_IMG[0]:$g['img_core'].'/blank.gif'?>" alt="" /></a></div>
		<div class="tsubject"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></div>
		<div class="tdate"><?php echo getDateFormat($_R['d_regis'],'Y.m.d')?> , <?php echo $_R['comment']+$_R['oneline']?> Comment<?php if($_R['comment']+$_R['oneline']>1):?>s<?php endif?></div>
		<div class="tcont"><?php echo nl2br(getStrCut(getStripTags($_R['content']),85,'..'))?></div>
		<?php while($_R=db_fetch_array($_RCD)):?>
		<div class="tpost"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><i>(<?php echo $_R['comment']+$_R['oneline']?>)</i><?php endif?></div>
		<?php endwhile?>
		<?php else:?>
		<div class="none"></div>
		<?php endif?>
		<?php endif?>
	</div>
	<div class="clear"></div>
</div>
<?php endif?>


<?php if($d['layout']['bbs4']):?>
<?php $_B=getUidData($table['bbslist'],$d['layout']['bbs4'])?>
<?php $_sort=explode(',',$d['layout']['sort4'])?>
<?php $_date=$d['layout']['bbs4_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs4_day'],$date['year'])):0?>
<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs4'].' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs4_num'],1)?>

<div class="photobox">
	<div class="tt">
		<div class="ts"><?php echo $_B['name']?></div>
		<div class="tmore"><a href="<?php echo RW('m=bbs&bid='.$_B['id'])?>">더보기</a></div>
		<div class="clear"></div>
	</div>
	<div class="picwrap">
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php $_THUMB=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
	<div class="pic"><a href="<?php echo getPostLink($_R)?>" title="<?php echo $_R['subject']?>"><img src="<?php echo $_THUMB?$_THUMB:$g['img_core'].'/blank.gif'?>" alt="" /></a></div>
	<?php endwhile?>
	<div class="clear"></div>
	</div>
</div>
<?php endif?>

