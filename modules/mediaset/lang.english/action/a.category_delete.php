<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_CT = getUidData($table[$m.'category'],$album);
if (!$_CT['uid']) getLink('','','정상적인 접근이 아닙니다.',''); 
if ($my['uid'] != $_CT['mbruid']) getLink('','','삭제권한이 없습니다.',''); 

$_NOCAT = getUidData($table[$m.'category'],$nocat);
$_TRASH = getUidData($table[$m.'category'],$trash);

if ($my['uid'] != $_NOCAT['mbruid'] || $my['uid'] != $_TRASH['mbruid']) getLink('','','삭제권한이 없습니다.',''); 
if ($_CT['uid'] == $_NOCAT['uid']) getLink('','','미분류 셋은 삭제할 수 없습니다.',''); 

//휴지통비우기
if ($_CT['uid'] == $_TRASH['uid'])
{
	$myFolder = $g['dir_module'].'files/'.$type.'/'.$my['id'].'/';
	$RCD = getDbArray($table[$m.'data'],'category='.$_CT['uid'],'*','gid','asc',0,1);
	while($_C = db_fetch_array($RCD))
	{
		unlink($myFolder.$_C['name']);
	}
	getDbDelete($table[$m.'data'],'category='.$_CT['uid']);
	getDbUpdate($table[$m.'category'],'r_num=0','uid='.$_TRASH['uid']);
}
else {
	getDbDelete($table[$m.'category'],'uid='.$_CT['uid']);
	getDbUpdate($table[$m.'category'],'r_num=r_num'+$_CT['r_num'],'uid='.$_TRASH['uid']);
	getDbUpdate($table[$m.'data'],'category='.$_TRASH['uid'],'category='.$_CT['uid']);
}


getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&front='.($type=='photo'?'main':'vod'),'parent.','','');
?>