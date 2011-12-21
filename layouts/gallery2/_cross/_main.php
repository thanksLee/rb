<?php
$_vtype = $_vtype ? $_vtype : $d['layout']['viewType'];
$_recnum = $d['layout']['recnum_'.$_vtype];
$_whereis='';
if ($d['layout']['bbs1']) $_whereis .= ' and bbs='.$d['layout']['bbs1'];
$_sort=explode(',',$d['layout']['sort1']);
$_date=$d['layout']['bbs1_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0;
$_RCD=getDbArray($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date.$_whereis,'*',$_sort[0],$_sort[1],$_recnum,$p);
$_NUM = getDbRows($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date.$_whereis);
$_TPG = getTotalPage($_NUM,$_recnum);
?>

<div class="aside">

	<div class="titlebox">
		<div class="tleft">

		</div>
		<div class="tright">
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_vtype=list"<?php if($_vtype=='list'):?> class="on"<?php endif?>>목록보기</a> &nbsp; 
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_vtype=revi"<?php if($_vtype=='revi'):?> class="on"<?php endif?>>요약보기</a> &nbsp; 
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_vtype=open"<?php if($_vtype=='open'):?> class="on"<?php endif?>>펼쳐보기</a> &nbsp; 
		</div>
		<div class="clear"></div>
	</div>

	<?php if($_vtype=='list'):?>
	<table class="listtable">
	<tbody>
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php $_IMGS=getImgs($_R['content'],'jpg|jpeg')?>
	<tr>
	<td>
	<a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a>
	<?php if($_IMGS[0]):?><img src="<?php echo $g['img_core']?>/_public/ico_photo.gif" alt="" /><?php endif?>
	<?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?>
	</td>
	<td class="date"><?php echo getDateFormat($_R['d_regis'],'Y.m.d')?></td>
	</tr>
	<?php endwhile?>
	</tbody>
	</table>
	<?php endif?>

	<?php if($_vtype=='revi'):?>
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php $_thumbimg=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
	<div class="reviewbox">
		<?php if($_thumbimg):?>
		<div class="photo"><img src="<?php echo $_thumbimg?>" alt="" /></div>
		<?php endif?>
		<div class="cont<?php if(!$_thumbimg):?> nothumb<?php endif?>">
			<span><?php echo $_R[$_HS['nametype']]?>님 &nbsp; <?php echo getDateFormat($_R['d_regis'],'Y.m.d H:i')?></span>
			<div><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?></div>
			<p><?php echo nl2br(getStrCut(getStripTags($_R['content']),$d['layout']['review_length'],'..'))?></p>
		</div>
		<div class="clear"></div>
	</div>
	<?php endwhile?>
	<?php endif?>
	
	<?php if($_vtype=='open'):?>
	<div id="vContent">
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php if(!strpos('_'.$_SESSION['module_bbs_view'],'['.$_R['uid'].']')){getDbUpdate($table['bbsdata'],'hit=hit+1','uid='.$_R['uid']);$_SESSION['module_bbs_view'].='['.$_R['uid'].']';}?>

	<div class="postbox">
		<div class="title"><?php echo $_R['subject']?></div>
		<div class="info"><?php echo $_R[$_HS['nametype']]?>님 &nbsp; <?php echo getDateFormat($_R['d_regis'],'Y.m.d H:i')?></div>
		<div class="cont">
		<?php echo getContents($_R['content'],$_R['html'])?>
		<div class="comment"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=comment&amp;iframe=Y&amp;skin=<?php echo $d['layout']['comment_theme']?>&amp;cync=[bbs][<?php echo $_R['uid']?>][uid,comment,oneline,d_comment][<?php echo $table['bbsdata']?>][<?php echo $_R['mbruid']?>][m:bbs,bid:<?php echo $_R['bbsid']?>,uid:<?php echo $_R['uid']?>]" target="commentFrame<?php echo $_R['uid']?>"><?php echo $_R['comment']+$_R['oneline']?>&nbsp; Comment<?php if($_R['comment']+$_R['oneline']>1):?>s<?php endif?></a></div>
		<iframe name="commentFrame<?php echo $_R['uid']?>" id="commentFrame<?php echo $_R['uid']?>" src="" width="100%" height="0" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
		</div>
	</div>
	<?php endwhile?>
	</div>
	<script type="text/javascript">mainImgResize(500,'vContent');</script>
	<?php endif?>

	<?php if(!db_num_rows($_RCD)):?>
	<div class="none">등록된 포스트가 없습니다.</div>
	<?php endif?>

	<div class="pagebox01">
	<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $_TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
	</div>
</div>

<div class="bside">

	<div class="titlebar">
		<div class="tl"><span>최근사진</span></div>
		<div class="tr"></div>
		<div class="clear"></div>
	</div>

	<div class="photo">
		<?php $_RCD=getDbArray($table['s_upload'],'site='.$s." and type=2 and ext='jpg'",'*','gid','asc',6,1)?>
		<?php for($i = 1; $i < 7; $i++):?>
		<?php $_R=db_fetch_array($_RCD)?>
		<div class="pic">
			<?php if($_R['uid']):?>
			<a href="<?php echo getCyncUrl($_R['cync'])?>"><img src="<?php echo $_R['url'].$_R['folder'].'/'.$_R['thumbname']?>" alt="" title="<?php echo $_R['caption']?$_R['caption']:$_R['name']?>" /></a>
			<?php else:?>
			<img src="<?php echo $g['img_core']?>/blank.gif" alt="" />
			<?php endif?>
		</div>
		<?php endfor?>
		<div class="clear"></div>
	</div>

	<div class="titlebar">
		<div class="tl"><span>인기태그</span></div>
		<div class="tr"></div>
		<div class="clear"></div>
	</div>

	<div class="tags">

	<?php $d_regis1 = date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-14,substr($date['today'],0,4)))?>
	<?php $d_regis2 = $date['today']?>
	<?php $WHEREIS1 = 'site='.$s.' and date between '.$d_regis1.' and '.$d_regis2?>
	<?php $_RCD=getDbArray($table['s_tag'],$WHEREIS1,'*','hit','desc',20,1)?>
	<?php while($TG=db_fetch_array($_RCD)):?>
	<?php $TARR[]=$TG['keyword']?>
	<?php endwhile?>
	<?php $TGN=count($TARR)?>
	<?php if($TGN)$rkey = array_rand($TARR,$TGN)?>
	
	<?php $x2 = 0?>
	<?php $x1 = 5?>
	<?php for($i = 0; $i < $TGN; $i++):?>
	<?php $TCNUM=$rkey[$i]>$x1?1:($rkey[$i]>$x2?2:3)?>

	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=search&amp;keyword=<?php echo urlencode($TARR[$rkey[$i]])?>"><span class="tags_<?php echo $TCNUM?>"><?php echo $TARR[$rkey[$i]]?></span></a>
	<?php endfor?>

	</div>


	<?php if($d['layout']['adtype']):?>
	<div class="banner">
	<?php if($d['layout']['adtype']==1):?><a href="<?php echo $d['layout']['ad_imglink']?>" target="<?php echo $d['layout']['ad_imgtarget']?>"><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_img']?>" width="280" alt="" /></a><?php endif?>
	<?php if($d['layout']['adtype']==2):?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_swf']?>" width="280"></embed><?php endif?>
	<?php if($d['layout']['adtype']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_ad.txt'?>
	</div>
	<?php endif?>

	<div class="hotbox">
		<div class="tabbox">
			<div class="tp tp1 vline on" onclick="tabCheck_s(1,this,'_myHOTlayer_');">많이 본</div>
			<div class="tp tp1 vline" onclick="tabCheck_s(2,this,'_myHOTlayer_');">댓글 많은</div>
			<div class="tp" onclick="tabCheck_s(3,this,'_myHOTlayer_');">추천자료</div>
			<div class="clear"></div>
		</div>
		<div id="_myHOTlayer_" class="hbody">
			<ul>
			<?php $_date=date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-30,$date['year']))?>
			<?php $_RCD=getDbArray($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date,'*','hit','desc',15,1);?>
			<?php $_i=0;while($_R=db_fetch_array($_RCD)):$_i++?>
			<li><i<?php if($_i<4):?> class="emp"<?php endif?>><?php echo $_i?></i><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?></li>
			<?php endwhile?>
			</ul>
		</div>
	</div>


</div>
<div class="clear"></div>

