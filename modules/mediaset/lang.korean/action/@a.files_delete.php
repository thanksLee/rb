<?php
if(!defined('__KIMS__')) exit;

include $g['dir_module'].'var/var.php';

if ($file_uid)
{
	$R = getUidData($table[$m.'data'],$file_uid);
	if (!$my['admin'] && (!$R['mbruid'] || $my['uid'] != $R['mbruid']))
	{
		getLink('','','삭제권한이 없습니다.','');
	}
	if ($R['uid'])
	{

		$foler = $R['type'] == 1 ? 'photo' : 'vod';
		$_album = getUTFtoKR($R['category']);
		$_name1 = getUTFtoKR($R['name']);

		getDbDelete($table[$m.'data'],'uid='.$R['uid']);
		@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name1);
		if($R['type']==1)
		{
			@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name1);
			@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name1);
		}
	}
	
	if ($isreload == 'Y')
	{
		getLink('reload','parent.parent.','','');
	}
	exit;
}
else {

	$sescode = $_SESSION['upsescode'];

	if ($sescode)
	{

		$FILES = getDbArray($table[$m.'data'],"tmpcode='".$sescode."'",'*','uid','asc',0,0);
		while($R = db_fetch_array($FILES))
		{
			getDbDelete($table[$m.'data'],'uid='.$R['uid']);

			$foler = $R['type'] == 1 ? 'photo' : 'vod';
			$_album = getUTFtoKR($R['category']);
			$_name1 = getUTFtoKR($R['name']);

			getDbDelete($table[$m.'data'],'uid='.$R['uid']);
			@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name1);
			if($R['type']==1)
			{
				@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name1);
				@unlink($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name1);
			}

		}

	}
	if ($close == 'Y')
	{
		$_SESSION['upsescode'] = '';
		getLink('reload','parent.parent.','','');
	}
	else {
		getLink('reload','parent.','','');
	}
}
?>