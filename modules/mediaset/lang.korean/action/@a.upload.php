<?php
if(!defined('__KIMS__')) exit;

include $g['path_core'].'function/thumb.func.php';
include $g['dir_module'].'var/var.php';

$m			= $m ? $m : $qupload_m;
$sessArr	= explode('_',$sess_Code);
$tmpcode	= $sessArr[0];
$mbruid		= $sessArr[1];
$type		= $sessArr[2];
$typefolder	= $type == 1 ? 'photo' : 'vod';
$album		= $_SESSION['_sessAlbum'];
$save_Path	= $g['dir_module'].'files/'.$typefolder.'/';
$url		= $g['url_root'].'/modules/'.$m.'/files/'.$typefolder.'/';
$name		= $_FILES['Filedata']['name'];
$tmpname	= $_FILES['Filedata']['tmp_name'];
$size		= $_FILES['Filedata']['size'];
$width		= 0;
$height		= 0;
$caption	= trim($caption);
$link		= trim($link);
$down		= 0;
$d_regis	= $date['totime'];
$d_update	= '';
$fileExt	= strtolower(getExt($name));
$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;


$_name = getUTFtoKR($name);
$saveDir = $save_Path.getUTFtoKR($album).'/';
$saveFile = $saveDir.$_name;


move_uploaded_file($_FILES['Filedata']['tmp_name'], $saveDir.$_name);
if ($type == 1)
{
	$thumbFile1 = $saveDir.'thumb1_'.$_name;
	ResizeWidth($saveFile,$thumbFile1,$d['mediaset']['t_size2']);
	@chmod($thumbFile1,0707);

	$thumbFile2 = $saveDir.'thumb2_'.$_name;
	ResizeWidth($thumbFile1,$thumbFile2,$d['mediaset']['t_size1']);
	@chmod($thumbFile2,0707);

	$IM = getimagesize($saveFile);
	$width = $IM[0];
	$height= $IM[1];
}
@chmod($saveFile,0707);


$mingid = getDbCnt($table[$m.'data'],'min(gid)','');
$gid = $mingid ? $mingid - 1 : 100000000;

$QKEY = "gid,site,hidden,category,type,tmpcode,mbruid,ext,url,name,size,width,height,caption,link,down,d_regis,d_update,cync";
$QVAL = "'$gid','$s','$hidden','$album','$type','$tmpcode','$mbruid','$fileExt','$url','$name','$size','$width','$height','$caption','$link','$down','$d_regis','$d_update','$cync'";
getDbInsert($table[$m.'data'],$QKEY,$QVAL);

if ($gid == 100000000) db_query("OPTIMIZE TABLE ".$table[$m.'data'],$DB_CONNECT); 

if ($upType == 'normal')
{
	getLink($g['s'].'/?r='.$r.'&m='.$m.'&mod='.$mod.'&album='.urlencode($album).($cupload?'&cupload='.$cupload:''),'','','');
}
exit;
?>