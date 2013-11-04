<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

include $g['dir_module'].'var/var.php';

foreach($photo_members as $val)
{
	$R = getUidData($table[$m.'data'],$val);
	if ($R['uid'])
	{
		$foler = $R['type'] == 1 ? 'photo' : 'vod';
		$name = trim(strip_tags(${'photo_names_'.$R['uid']}));
		$_album = getUTFtoKR($R['category']);
		$_name1 = getUTFtoKR($R['name']);
		$_name2 = getUTFtoKR($name);

		if (strstr($name,'.')) continue;

		@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name2.'.'.$R['ext']);
		if ($R['type']==1)
		{
			@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name2.'.'.$R['ext']);
			@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name2.'.'.$R['ext']);
		}

		getDbUpdate($table[$m.'data'],"name='".$name.'.'.$R['ext']."',d_update='".$date['totime']."'",'uid='.$R['uid']);
	}
}

getLink('reload','parent.','','');
?>