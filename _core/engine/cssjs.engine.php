<?php
if(!defined('__KIMS__')) exit;
$g['libdir'] = $g['path_layout'].$d['layout']['dir'].'/_lib';
$g['cssset'] = array
(
	$d['layout']['pwd']=>$g['s'].'/layouts/'.$d['layout']['str'],
	$g['dir_module'].'_main'=>$g['url_module'].'/_main',
	$g['dir_module_skin'].'_main'=>$g['url_module_skin'].'/_main',
	$g['dir_module_mode']=>$g['url_module_mode'],
	$g['dir_module_admin']=>$g['url_module_admin'],
);
?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/sys.css" />
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_main.css" />
<?php if($my['admin']):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/bar.css" />
<?php endif?>
<script type="text/javascript">
//<![CDATA[
var mbrclick= false;
var rooturl = '<?php echo $g['url_root']?>';
var raccount= '<?php echo $r?>';
var moduleid= '<?php echo $m?>';
var memberid= '<?php echo $my['id']?>';
var is_admin= '<?php echo $my['admin']?>';
var needlog = '<?php echo $lang['sys']['need_login']?>';
var neednum = '<?php echo $lang['sys']['need_num']?>';
var myagent	= navigator.appName.indexOf('Explorer') != -1 ? 'ie' : 'ns';
//]]>
</script>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['s']?>/_core/js/sys.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/_main.js"></script>
<?php foreach ($g['cssset'] as $_key => $_val):?>
<?php if (file_exists($_key.'.css')):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $_val?>.css" />
<?php endif?>
<?php if (file_exists($_key.'.js')):?>
<script type="text/javascript" charset="utf-8" src="<?php echo $_val?>.js"></script>
<?php endif?>
<?php endforeach?>
<?php if($d['layout']['theme']):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_theme/<?php echo $d['layout']['theme']?>/theme.css" />
<?php endif?>
<?php if(is_dir($g['libdir'])):$_libhandle = opendir($g['libdir']);while(false !== ($_lib = readdir($_libhandle))):?>
<?php if(strpos($_lib,'.js')):?>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/_lib/<?php echo $_lib?>"></script>
<?php continue;endif?>
<?php if(strpos($_lib,'.css')):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_lib/<?php echo $_lib?>" />
<?php continue;endif?>
<?php endwhile;closedir($_libhandle);endif?>
