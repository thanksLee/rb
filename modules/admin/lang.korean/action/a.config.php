<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$fdset = array();
$fdset['config'] = array('themepc','thememobile','autoclose','hidepannel','pannellink','cache_flag');
$fdset['ssl'] = array('http_port','ssl_type','ssl_port','ssl_menu','ssl_page','ssl_bbs','ssl_module');
$fdset['security'] = array('secu_iframe','secu_script','secu_style','secu_flash','secu_domain');
$fdset['bootstrap'] = array('bs_type','bs_local','bs_min','bs_cdn','jq_type','jq_local','jq_min','jq_cdn','jm_type','jm_local','jm_min','jm_cdn');

foreach ($fdset[$act] as $val)
{
	$d['admin'][$val] = str_replace("\n",'<br>',trim(${$val}));
}

$_tmpdfile = $g['dir_module'].'var/var.system.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
foreach ($d['admin'] as $key => $val)
{
	fwrite($fp, "\$d['admin']['".$key."'] = \"".addslashes(stripslashes($val))."\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);


getLink('reload','parent.','','');
?>