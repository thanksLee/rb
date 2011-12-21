<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>


<div id="content">
<?php if($d['layout']['_is_ownmain']):?>
<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
<?php if(!$d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>
<?php endif?>
<?php if($d['layout']['_is_content']) include __KIMS_CONTENT__?>
</div>

<div class="snb">

	<div class="titlebox">
		<div class="tt">카테고리</div>
		<div class="more"></div>
		<div class="clear"></div>
	</div>


	<div class="ttitle"><img src="<?php echo $g['img_core']?>/tree/default_none/top.gif" alt="" /><a href="<?php echo $g['s']?>/"><span>전체분류</span></a></div>
	<div class="joinimg"></div>
	<div class="tree">
	<?php if(!($system=='edit.all'&&$type=='menu')):?>
	<script type="text/javascript">
	//<![CDATA[
	var TreeImg = "<?php echo $g['img_core']?>/tree/default_none";
	var ulink = "<?php echo $cat?$g['s'].'/?r='.$r.'&amp;cat='.urlencode($cat).'&amp;c=':RW('c=')?>";
	//]]>
	</script>
	<script type="text/javascript" src="<?php echo $g['s']?>/_core/js/tree.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	var TREE_ITEMS = [['', null, <?php getLayoutMenuShow($_HS['uid'],$table['s_menu'],0,0,0,$_HM['uid'],$CXA,'')?>]];
	new tree(TREE_ITEMS, tree_tpl);
	<?php echo $MenuOpen?>
	//]]>
	</script>
	<?php if(!getDbRows($table['s_menu'],'')):?>
	<div class="none">분류(메뉴)를 등록해 주세요.</div>
	<?php endif?>
	<?php else:?>
	<div class="none">메뉴 관리중 출력제한</div>
	<?php endif?>
	</div>

	<div class="titlebox">
		<div class="tt">인기태그</div>
		<div class="more"></div>
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

<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
