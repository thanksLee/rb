<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>


<div id="content">
<?php if($d['layout']['_is_ownmain']):?>
<?php if($d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
<?php else include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>
<?php endif?>
<?php if($d['layout']['_is_content']):?>
<div class="contentbody">
<?php include __KIMS_CONTENT__?>
</div>
<?php endif?>
</div>


<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
