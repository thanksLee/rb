<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_MYCAT = getUidData($table[$m.'category'],$_album_);
if ($my['uid'] != $_MYCAT['mbruid']) getLink('','','권한이 없습니다.','');

$_file_members = getArrayString($_data_);

foreach($_file_members['data'] as $val)
{
	$R = getUidData($table[$m.'data'],$val);

	$orignFolder= explode('/files/'.$type.'/',$_R['url']);
	$myFolder = $g['dir_module'].'files/'.$type.'/'.$orignFolder[1].'/';

	if ($R['uid'] && $R['mbruid']==$my['uid'])
	{
		if ($R['category'] == $_album_) continue;

		getDbUpdate($table[$m.'category'],'r_num=r_num-1','uid='.$R['category']);
		getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$_MYCAT['uid']);
		getDbUpdate($table[$m.'data'],'category='.$_MYCAT['uid'],'uid='.$R['uid']);
	}
}

getLink('reload','parent.','','');
?>