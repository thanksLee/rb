<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>


<div class="snb">
	<?php if($d['layout']['imgphoto_use']):?>
	<div class="titlepic">
	<?php if($d['layout']['imgphoto']):?>
	<a href="<?php echo $g['s']?>/"><img src="<?php echo $g['url_layout']?>/_var/<?php echo $d['layout']['imgphoto']?>" alt="" /></a>
	<?php else:?>
	<a href="<?php echo $g['s']?>/"><img src="<?php echo $g['img_layout']?>/imgphoto.gif" alt="" /></a>
	<?php endif?>
	</div>
	<?php endif?>

	<?php if($d['layout']['ment']):?>
	<div class="about">
		<span>About</span>
		<?php echo $d['layout']['ment']?>
	</div>
	<?php endif?>

	<div class="ttitle"><img src="<?php echo $g['img_core']?>/tree/default_none/top.gif" alt="" /><a href="<?php echo $g['s']?>/"><span>카테고리</span></a></div>
	<div class="joinimg"></div>
	<div class="tree">
	<?php if(!($system=='edit.all'&&$type=='menu')):?>
	<script type="text/javascript">
	//<![CDATA[
	var TreeImg = "<?php echo $g['img_core']?>/tree/default_none";
	var ulink = "<?php echo $cat?$g['s'].'/?r='.$r.'&amp;cat='.urlencode($cat).'&amp;c=':RW('c=')?>";
	//]]>
	</script>
	<script type="text/javascript" src="<?php echo $g['url_root']?>/_core/js/tree.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	var TREE_ITEMS = [['', null, <?php getLayoutMenuShow($_HS['uid'],$table['s_menu'],0,0,0,$_HM['uid'],$CXA,'')?>]];
	new tree(TREE_ITEMS, tree_tpl);
	<?php echo $MenuOpen?>
	//]]>
	</script>
	<?php if(!getDbRows($table['s_menu'],'')):?>
	<div class="none">메뉴를 등록해 주세요.</div>
	<?php endif?>
	<?php else:?>
	<div class="none">메뉴 관리중</div>
	<?php endif?>
	</div>
</div>


<div id="content">
<?php if($d['layout']['_is_ownmain']):?>
<?php if($d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
<?php else include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>
<?php endif?>
<?php if($d['layout']['_is_content']) include __KIMS_CONTENT__?>
</div>

<div class="clear"></div>


<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
