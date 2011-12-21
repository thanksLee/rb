<?php
if($d['layout']['bbs1']):
$_whereis='';
$_sort=explode(',',$d['layout']['sort1']);
$_sorderby=$sort?$sort:$_sort[0];
if ($_shortcut) $_whereis .= " and tag like '%".$_shortcut."%'";
if ($cat) $_whereis .= " and category='".$cat."'";
if ($_whereis||$sort) $d['layout']['bbs1_num'] = 18;
$_date=$d['layout']['bbs1_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0;
$_RCD=getDbArray($table['bbsdata'],'bbs='.$d['layout']['bbs1'].' and display=1 and d_regis > '.$_date.$_whereis,'*',$_sorderby,$_sort[1],$d['layout']['bbs1_num'],$p);
if ($_whereis||$sort)
{
	$_NUM = getDbRows($table['bbsdata'],'bbs='.$d['layout']['bbs1'].' and display=1 and d_regis > '.$_date.$_whereis);
	$_TPG = getTotalPage($_NUM,$d['layout']['bbs1_num']);
}
?>

<div class="titlebox">
	<div class="tleft">
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_shortcut=<?php echo urlencode($_shortcut)?>&amp;cat=<?php echo urlencode($cat)?>&amp;sort=gid"<?php if($_sorderby=='gid'):?> class="on"<?php endif?>>등록순</a>
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_shortcut=<?php echo urlencode($_shortcut)?>&amp;cat=<?php echo urlencode($cat)?>&amp;sort=score1"<?php if($_sorderby=='score1'):?> class="on"<?php endif?>>추천순</a>
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_shortcut=<?php echo urlencode($_shortcut)?>&amp;cat=<?php echo urlencode($cat)?>&amp;sort=hit"<?php if($_sorderby=='hit'):?> class="on"<?php endif?>>열람순</a>
	</div>
	<div class="tright">

	</div>
	<div class="clear"></div>
</div>

<div class="photobox">
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php $_thumbimg=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
	<?php if($_R['uid']):?>
	<?php $_M=$_R['mbruid']?getDbData($table['s_mbrdata'],'memberuid='.$_R['mbruid'],'photo'):array()?>
	<div class="picbox">
	<div class="pic"><a href="<?php echo getPostLink($_R)?>"><img src="<?php echo $_thumbimg?$_thumbimg:$g['img_core'].'/blank.gif'?>" alt="" /></a></div>
	<div class="info">
		<div class="num">
			<div class="xl">
			
			</div>
			<div class="xr">
				<img src="<?php echo $g['img_layout']?>/ico_view.gif" alt="열람" /> <?php echo number_format($_R['hit'])?>
				<img src="<?php echo $g['img_layout']?>/ico_req.gif" alt="추천" /> <?php echo number_format($_R['score1'])?>
				<img src="<?php echo $g['img_layout']?>/ico_comment.gif" alt="댓글" /> <?php echo number_format($_R['comment'])?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="name">
			<img src="<?php echo $g['s']?>/_var/simbol/<?php echo $_M['photo']?$_M['photo']:'0.gif'?>" alt="" /> <?php echo $_R[$_HS['nametype']]?>님
		</div>
	</div>
	</div>
	<?php else:?>

	<?php endif?>
	<?php endwhile?>
	<?php if(!db_num_rows($_RCD)):?>
	<div class="none"></div>
	<?php endif?>
	<div class="clear"></div>

	<?php if($_TPG):?>
	<div class="pagebox01">
	<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $_TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
	</div>
	<?php endif?>
</div>
<?php endif?>


<?php if(($d['layout']['bbs2']||$d['layout']['bbs3'])&&!$_shortcut&&!$cat&&!$sort):?>
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
