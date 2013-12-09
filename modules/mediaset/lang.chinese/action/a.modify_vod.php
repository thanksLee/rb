<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

include $g['path_core'].'function/thumb.func.php';
include $g['dir_module'].'var/var.php';

$_R=getUidData($table[$m.'data'],$uid);
if (!$_R['uid']) exit;

$_M=getUidData($table['s_mbrid'],$_R['mbruid']);
$myFolder = $g['dir_module'].'files/photo/'.$_M['id'].'/';

$name		= trim($name);
$url		= $_R['url'];
$ext		= $_R['ext'];
$size		= $_R['size'];
$width		= $_R['width'];
$height		= $_R['height'];
$alt		= trim($alt);
$caption	= trim($caption);
$description= trim($description);
$tags		= trim($tags);
$d_update	= $date['totime'];
$link		= trim($link);

$QVAL = "hidden='$hidden',category='$category',ext='$ext',url='$url',name='$name',size='$size',width='$width',height='$height',alt='$alt',caption='$caption',description='$description',searchopen='$searchopen',tags='$tags',";
$QVAL.= "license='$license',use_cment='$use_cment',use_cross='$use_cross',use_ad='$use_ad',link='$link',d_update='$d_update'";
getDbUpdate($table[$m.'data'],$QVAL,'uid='.$_R['uid']);

if ($_R['category'] != $category)
{
	getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$category);
	getDbUpdate($table[$m.'category'],'r_num=r_num-1','uid='.$_R['category']);
}

if ($stop == 'Y') getLink('','','반영되었습니다.','');
getLink('reload','parent.','','');
?>