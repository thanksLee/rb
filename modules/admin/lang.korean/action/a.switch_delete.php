<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);
if (file_exists($g['path_switch'].$switch.'/main.php'))
{
	include_once $g['path_core'].'function/dir.func.php';
	DirDelete($g['path_switch'].$switch);
}
getLink($g['s'].'/?r='.$r.'&m=admin&module=admin&front=switch','parent.','삭제 되었습니다.','');
?>