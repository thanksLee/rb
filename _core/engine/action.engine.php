<?php
if(!defined('__KIMS__')) exit;

$g['act_module0'] = $g['dir_module'].$a.'.php';
$g['act_module1'] = $g['dir_module'].'lang.'.$_HS['lang'].'/action/'.(strpos($a,'/')?str_replace('/','/a.',$a):'a.'.$a).'.php';
$g['act_module2'] = $g['dir_module'].'action/a.'.$a.'.php';

if (is_file($g['act_module0'])) include $g['act_module0'];
if (is_file($g['act_module1'])) include $g['act_module1'];
if (is_file($g['act_module2'])) include $g['act_module2'];
?>