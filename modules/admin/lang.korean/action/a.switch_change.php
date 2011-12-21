<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_sw1 = $g['path_switch'].$switch_folder;

if (file_exists($_sw1.'/'.$switch.'/main.php'))
{
	if (strstr($switch,'@'))
	{
		rename($_sw1.'/'.$switch,$_sw1.'/'.str_replace('@','',$switch));
		getLink($g['s'].'/?r='.$r.'&m=admin&module=admin&front=switch','parent.','['.getFolderName($_sw1.'/'.str_replace('@','',$switch)).'] 스위치가 켜졌습니다.','');
	}
	else {
		rename($_sw1.'/'.$switch,$_sw1.'/'.$switch.'@');
		getLink($g['s'].'/?r='.$r.'&m=admin&module=admin&front=switch','parent.','['.getFolderName($_sw1.'/'.$switch.'@').'] 스위치가 꺼졌습니다.','');
	}
}
exit;
?>