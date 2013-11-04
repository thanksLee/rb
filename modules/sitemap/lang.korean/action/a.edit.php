<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

include $g['dir_module'].'var/var.php';

$configdata = trim(stripslashes($configdata));

$gfile= './'.$d['sitemap']['filename'];
$fp = fopen($gfile,'w');
fwrite($fp,$configdata);
fclose($fp);
@chmod($gfile,0707);


getLink('reload','parent.','갱신되었습니다.','');
?>