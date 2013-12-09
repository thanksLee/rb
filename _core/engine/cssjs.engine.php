<?php
if(!defined('__KIMS__')) exit;
$g['libdir'] = $g['libdir']?$g['libdir']:$g['path_layout'].$d['layout']['dir'].'/_lib/';
$g['wdgcod'] = $g['path_tmp'].'widget/c'.$_HM['uid'].'.p'.$_HP['uid'].'.cache';
$g['wcache'] = $d['admin']['cache_flag']?'?nFlag='.$date[$d['admin']['cache_flag']]:'';
$g['cssset'] = array
(
	$d['layout']['pwd']=>$g['s'].'/layouts/'.$d['layout']['str'],
	$g['dir_module'].'_main'=>$g['url_module'].'/_main',
	$g['dir_module_skin'].'_main'=>$g['url_module_skin'].'/_main',
	$g['dir_module_mode']=>$g['url_module_mode'],
	$g['dir_module_admin']=>$g['url_module_admin'],
);
?>
<?php if($iframe!='Y'):?>
<?php if($d['layout']['use_bootstrap']||$d['layout']['use_jquerymobile']):?>
<?php if($d['admin']['jq_type']=='local'):?>
<script src="<?php echo $g['s']?>/_core/opensrc/jquery/<?php echo $d['admin']['jq_local']?>/jquery-<?php echo $d['admin']['jq_local']?><?php echo $d['admin']['jq_min']?>.js"></script> 
<?php else:?>
<?php echo str_replace('<br>',"\n",stripslashes($d['admin']['jq_cdn']))?> 
<?php endif?>
<?php endif?>

<?php if($d['layout']['use_jquerymobile']):?>
<?php if($g['mobile']&&$_SESSION['pcmode']!='Y'):?>
<?php if($d['admin']['jm_type']=='local'):?>
<link rel="stylesheet" href="<?php echo $g['s']?>/_core/opensrc/jquery.mobile/<?php echo $d['admin']['jm_local']?>/jquery.mobile-<?php echo $d['admin']['jm_local']?><?php echo $d['admin']['jm_min']?>.css" />
<script src="<?php echo $g['s']?>/_core/opensrc/jquery.mobile/<?php echo $d['admin']['jm_local']?>/jquery.mobile-<?php echo $d['admin']['jm_local']?><?php echo $d['admin']['jm_min']?>.js"></script> 
<?php else:?>
<?php echo str_replace('<br>',"\n",stripslashes($d['admin']['jm_cdn']))?> 
<?php endif?>
<?php endif?>
<?php endif?>

<?php if(is_file($g['libdir'].'_header.import.php'))include $g['libdir'].'_header.import.php'?>

<?php if($d['layout']['use_bootstrap']):?>
<?php if($d['admin']['bs_type']=='local'):?>
<link href="<?php echo $g['s']?>/_core/opensrc/bootstrap/<?php echo $d['admin']['bs_local']?>/css/bootstrap<?php echo $d['admin']['bs_min']?>.css" rel="stylesheet">
<link href="<?php echo $g['s']?>/_core/opensrc/bootstrap/<?php echo $d['admin']['bs_local']?>/css/bootstrap-theme<?php echo $d['admin']['bs_min']?>.css" rel="stylesheet">
<script src="<?php echo $g['s']?>/_core/opensrc/bootstrap/<?php echo $d['admin']['bs_local']?>/js/bootstrap<?php echo $d['admin']['bs_min']?>.js"></script> 
<?php else:?>
<?php echo str_replace('<br>',"\n",stripslashes($d['admin']['bs_cdn']))?> 
<?php endif?>
<?php endif?>
<?php endif?>

<?php foreach($g['switch_2'] as $_switch):?>
<?php include $_switch?> 
<?php endforeach?>

<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/sys.css<?php echo $g['wcache']?>" />
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_main.css<?php echo $g['wcache']?>" />
<?php if($my['admin']):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['s']?>/_core/css/bar.css<?php echo $g['wcache']?>" />
<?php endif?>
<script type="text/javascript">
//<![CDATA[
var mbrclick= false;
var rooturl = '<?php echo $g['url_root']?>';
var rootssl = '<?php echo $g['ssl_root']?>';
var raccount= '<?php echo $r?>';
var moduleid= '<?php echo $m?>';
var memberid= '<?php echo $my['id']?>';
var is_admin= '<?php echo $my['admin']?>';
var needlog = '<?php echo $lang['sys']['need_login']?>';
var neednum = '<?php echo $lang['sys']['need_num']?>';
var myagent	= navigator.appName.indexOf('Explorer') != -1 ? 'ie' : 'ns';
//]]>
</script>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['s']?>/_core/js/sys.js<?php echo $g['wcache']?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/_main.js<?php echo $g['wcache']?>"></script>
<?php foreach ($g['cssset'] as $_key => $_val):?>
<?php if (is_file($_key.'.css')):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $_val?>.css<?php echo $g['wcache']?>" />
<?php endif?>
<?php if (is_file($_key.'.js')):?>
<script type="text/javascript" charset="utf-8" src="<?php echo $_val?>.js<?php echo $g['wcache']?>"></script>
<?php endif?>
<?php endforeach?>
<?php if($d['layout']['theme']):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_theme/<?php echo $d['layout']['theme']?>/theme.css<?php echo $g['wcache']?>" />
<?php endif?>
<?php if(is_file($g['wdgcod'])) include $g['wdgcod']?>
<?php echo $_HS['headercode']?>
