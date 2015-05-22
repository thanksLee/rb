<?php
if(!defined('__KIMS__')) exit;
$g['libdir'] = $g['path_layout'].$d['layout']['dir'].'/_lib';
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
<?php foreach($g['switch_2'] as $_switch):?>
<?php include $_switch?> 
<?php endforeach?>






<!-- 임시 -->
<?php if($m=='admin'):?>

<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Bootstrap -->
<link href="<?php echo $g['url_module_skin']?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo $g['url_module_skin']?>/assets/fonts/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo $g['url_module_skin']?>/assets/fonts/font-kimsq/1.0.0/css/font-kimsq.css" rel="stylesheet">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,800,700,300" rel="stylesheet" type="text/css">

<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/font-awesome/4.0.0/css/font-awesome-ie7.min.css">
<![endif]-->


<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/plugins/bootstrap/css/bootstrap-theme.css">


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?php echo $g['url_module_skin']?>/assets/js/html5shiv.js"></script>
  <script src="<?php echo $g['url_module_skin']?>/assets/js/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<script src='<?php echo $g['url_module_skin']?>/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<script src='<?php echo $g['url_module_skin']?>/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<script src='<?php echo $g['url_module_skin']?>/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<script src='<?php echo $g['url_module_skin']?>/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo $g['url_module_skin']?>/assets/ico/favicon.ico">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


<?php endif?>
<!-- //임시 -->







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
<?php if(is_dir($g['libdir'])):$_libhandle = opendir($g['libdir']);while(false !== ($_lib = readdir($_libhandle))):?>
<?php if(strpos($_lib,'.js')):?>
<script type="text/javascript" charset="utf-8" src="<?php echo $g['url_layout']?>/_lib/<?php echo $_lib?><?php echo $g['wcache']?>"></script>
<?php continue;endif?>
<?php if(strpos($_lib,'.css')):?>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $g['url_layout']?>/_lib/<?php echo $_lib?><?php echo $g['wcache']?>" />
<?php continue;endif?>
<?php endwhile;closedir($_libhandle);endif?>
<?php if(is_file($g['wdgcod'])) include $g['wdgcod']?>
<?php echo $_HS['headercode']?>
