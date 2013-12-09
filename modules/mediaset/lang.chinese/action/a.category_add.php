<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$myFolder = $g['dir_module'].'files/'.$type.'/'.$my['id'].'/';
if (!is_dir($myFolder))
{
	mkdir($myFolder,0707);
	@chmod($myFolder,0707);
}

$_type = $type == 'photo' ? 1 : 2;

$MAXC = getDbCnt($table[$m.'category'],'max(gid)',$_siteAply.'mbruid='.$my['uid'].' and type='.$_type);
$sarr = explode(',',trim($name));
$slen = count($sarr);


for ($i = 0 ; $i < $slen; $i++)
{
	$xname	= trim($sarr[$i]);
	if (!$xname) continue;
	if ($xname == '미분류' || $xname == '휴지통') continue;
	$gid = $MAXC+1+$i;
	getDbInsert($table[$m.'category'],'gid,site,mbruid,type,hidden,users,name,r_num,d_regis,d_update',"'$gid','".$_HS['uid']."','".$my['uid']."','$_type','0','','$xname','0','".$date['totime']."',''");
}

getLink('reload','parent.','','');
?>