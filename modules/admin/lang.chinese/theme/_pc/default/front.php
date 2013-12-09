<?php
$_MODULES = array();
$_MODULES_ALL = getDbArray($table['s_module'],'','*','gid','asc',0,1);
while($_R = db_fetch_array($_MODULES_ALL))
{
	$_MODULES['display'][] = $_R;
	$_MODULES['disp'.$_R['hidden']][] = $_R;
}

$_SITES = array();
$_SITES_ALL = getDbArray($table['s_site'],'','*','gid','asc',0,1);
while($_R = db_fetch_array($_SITES_ALL))
{
	$_SITES['list'][] = $_R;
	$_SITES['count'.$_R['open']]++;
}
?>

<?php include $g['dir_module_skin'].'_inc/navbar-top.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-1 col-lg-2 hidden-xs hidden-sm" id="sidebar">
          <?php include $g['dir_module_skin'].'_inc/sidebar.php'?>
        </div>
        <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12" id="content" role="main">
						
			<!--<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> <strong>홈페이지1</strong> 사이트가 생성되었습니다. </div>-->

			<?php if(is_array($d['amenu'])):?>
			<?php include $g['dir_module_skin'].'_inc/navtab.php'?>
			<div class="tab-content">
			<?php include_once $g['adm_module']?>
			</div>
			<?php else:?>
			<?php include_once $g['adm_module']?>
			<?php endif?>
            <div id="footer">
                <?php include $g['dir_module_skin'].'_inc/footer.php'?>
            </div>
        </div>
        <div class="visible-md col-lg-1 col-md-1" id="quick">
          <?php include $g['dir_module_skin'].'_inc/quick-menu.php'?>
        </div>
    </div>
</div>
<?php include $g['dir_module_skin'].'_inc/modals.php'?>
<?php include $g['dir_module_skin'].'_inc/navbar-bottom.php'?>
