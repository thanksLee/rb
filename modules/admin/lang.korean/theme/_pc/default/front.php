<?php
$_fontset=array('kf-home','kf-layout','kf-module','kf-market','kf-admin','kf-member','kf-bbs','kf-contents','kf-comment','kf-upload','kf-popup','','kf-dbmanager','kf-device','kf-domain','kf-analysis','kf-search','kf-widget','kf-tag','','kf-editor','','','','','kf-dashboard');

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

<!-- BEGIN GLOBAL PLUGINS -->   
<!--[if lt IE 9]>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/respond.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END GLOBAL PLUGINS -->

<a href="#content" class="sr-only">Skip to content</a>
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
