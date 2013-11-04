<?php
if(!defined('__KIMS__')) exit;

if (!$uid || !$tmpcode) getLink('','','잘못된 접근입니다','');
$R = getUidData($table[$m.'data'],$uid);
if (!$R['uid']) getLink('','','없는 파일입니다','');
if (!$my['admin'] && $R['tmpcode'] != $tmpcode && $my['uid'] != $R['mbruid']) getLink('','','권한이 없습니다.','');

$foler = $R['type'] == 1 ? 'photo' : 'vod';
$name = trim(strip_tags($name));
$_album = getUTFtoKR($R['category']);
$_name1 = getUTFtoKR($R['name']);
$_name2 = getUTFtoKR($name);
$caption = $my['admin'] ? trim($caption) : strip_tags(trim($caption));

if (strstr($name,'.')) getLink('','','파일명에는 점(.)을 사용할 수 없습니다.','');

@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/'.$_name2.'.'.$R['ext']);
if ($R['type']==1)
{
	@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb1_'.$_name2.'.'.$R['ext']);
	@rename($g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name1,$g['dir_module'].'files/'.$foler.'/'.$_album.'/thumb2_'.$_name2.'.'.$R['ext']);
}

getDbUpdate($table[$m.'data'],"name='".$name.'.'.$R['ext']."',caption='".$caption."',d_update='".$date['totime']."'",'uid='.$R['uid']);

getLink('reload','parent.','반영되었습니다.','');
?>