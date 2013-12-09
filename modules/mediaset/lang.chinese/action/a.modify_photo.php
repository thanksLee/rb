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

$tmpname	= $_FILES['upfiles']['tmp_name'][0];
if (is_uploaded_file($tmpname))
{
	$_name = getUTFtoKR($_R['name']);
	if (is_file($myFolder.$_name))
	{
		unlink($myFolder.$_name);
		unlink($myFolder.'thumb1_'.$_name);
		unlink($myFolder.'thumb2_'.$_name);
	}

	$size		= $_FILES['upfiles']['size'][0];
	$ext		= getExt($_FILES['upfiles']['name'][0]);
	$name		= $name.'.'.$ext;
	$_name		= getUTFtoKR($name);
	$saveFile	= $myFolder.$_name;

	move_uploaded_file($tmpname,$saveFile);
	@chmod($saveFile,0707);

	$thumbFile1 = $myFolder.'thumb1_'.$_name;
	ResizeWidth($saveFile,$thumbFile1,$d['mediaset']['t_size2']);
	@chmod($thumbFile1,0707);

	$thumbFile2 = $myFolder.'thumb2_'.$_name;
	ResizeWidth($thumbFile1,$thumbFile2,$d['mediaset']['t_size1']);
	@chmod($thumbFile2,0707);

	$IM = getimagesize($saveFile);
	$width = $IM[0];
	$height= $IM[1];
	$url   =  $g['url_root'].'/modules/'.$m.'/files/photo/'.$_M['id'];

}
else {
	$name = $name.'.'.$_R['ext'];
	if ($name != $_R['name'] && $size)
	{
		$_name1 = getUTFtoKR($_R['name']);
		$_name2 = getUTFtoKR($name);
		rename($myFolder.$_name1,$myFolder.$_name2);
		rename($myFolder.'thumb1_'.$_name1,$myFolder.'thumb1_'.$_name2);
		rename($myFolder.'thumb2_'.$_name1,$myFolder.'thumb2_'.$_name2);
	}
}


$QVAL = "hidden='$hidden',category='$category',ext='$ext',url='$url',name='$name',size='$size',width='$width',height='$height',alt='$alt',caption='$caption',description='$description',searchopen='$searchopen',tags='$tags',";
$QVAL.= "license='$license',use_cment='$use_cment',use_cross='$use_cross',use_ad='$use_ad',d_update='$d_update'";
getDbUpdate($table[$m.'data'],$QVAL,'uid='.$_R['uid']);

if ($_R['category'] != $category)
{
	getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$category);
	getDbUpdate($table[$m.'category'],'r_num=r_num-1','uid='.$_R['category']);
}

if ($stop == 'Y') getLink('','','반영되었습니다.','');
getLink('reload','parent.','','');
?>