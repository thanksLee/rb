<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>

<div id="content">
<?php if($d['layout']['_is_ownmain']):?>
<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
<?php if(!$d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>
<?php endif?>

<?php if($d['layout']['_is_content']):?>
<div class="wrap">
<?php include __KIMS_CONTAINER_HEAD__?>
<?php include __KIMS_CONTENT__?>
<?php include __KIMS_CONTAINER_FOOT__?>
</div>
<?php endif?>
</div>

<?php if((!$d['layout']['_is_ownmain']&&$d['layout']['_is_content'])||$d['layout']['_is_mainbox']):?>
<style type="text/css">
#header .menutabs .on {position:relative;bottom:0;background:#ffffff;}
#content .wrap {padding-top:40px;}
</style>
<?php endif?>

<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
