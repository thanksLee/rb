<?php
if(!defined('__KIMS__')) exit;

if (!$my['admin'] || !$mod) getLink($g['s'].'/?r='.$r,'','','');

include $g['dir_module'].'var/var.php';

$iframe = 'Y';

$g['dir_module_skin'] = $g['dir_module'].'uploader/';
$g['url_module_skin'] = $g['url_module'].'/uploader';
$g['img_module_skin'] = $g['url_module_skin'].'/image';

$g['dir_module_mode'] = $g['dir_module_skin'].$mod;
$g['url_module_mode'] = $g['url_module_skin'].'/'.$mod;

$g['main'] = $g['dir_module_mode'].'.php';
?>