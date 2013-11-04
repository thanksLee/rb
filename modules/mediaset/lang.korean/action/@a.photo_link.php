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
$name		= trim($name);
$caption	= trim($caption);
$link		= trim($link);
$link1		= explode('?',$link);
$link2		= $link1[0];
$down		= 0;
$d_regis	= $date['totime'];
$d_update	= '';
$saveDir = $save_Path.getUTFtoKR($album).'/';
$fileExt	= strtolower(getExt($link2));
$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;


if ($save && !$link1[1] && strstr('jpg/jpeg/gif/png',$fileExt))
{
	include $g['path_core'].'function/rss.func.php';
	$linkdata = getUrlData($link2,10);
	if (!$linkdata) getLink('','','사진 주소를 확인하세요. 서버의 응답이 없습니다.','-1');
	
	$name	  = $name ? $name.'.'.$fileExt : basename($link1[0]);
	$_name = getUTFtoKR($name);
	$saveFile = $saveDir.$_name;

	$fp = fopen($saveFile,'w');
	fwrite($fp,$linkdata);
	fclose($fp);
	@chmod($saveFile,0707);
}
else {

	$name	  = $name ? $name.'.'.$fileExt : basename($link1[0]);
	$_name = getUTFtoKR($name);
	$saveFile = $saveDir.$_name;
	$size		= 0;
	$width		= 0;
	$height		= 0;
}

if ($save)
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
	$size = filesize($saveFile);

	@chmod($saveFile,0707);
}


$mingid = getDbCnt($table[$m.'data'],'min(gid)','');
$gid = $mingid ? $mingid - 1 : 100000000;

$QKEY = "gid,site,hidden,category,type,tmpcode,mbruid,ext,url,name,size,width,height,caption,link,down,d_regis,d_update,cync";
$QVAL = "'$gid','$s','$hidden','$album','$type','$tmpcode','$mbruid','$fileExt','$url','$name','$size','$width','$height','$caption','$link2','$down','$d_regis','$d_update','$cync'";
getDbInsert($table[$m.'data'],$QKEY,$QVAL);

if ($gid == 100000000) db_query("OPTIMIZE TABLE ".$table[$m.'data'],$DB_CONNECT); 

getLink($g['s'].'/?r='.$r.'&m='.$m.'&mod=photo&album='.urlencode($album),'','','');

exit;
?>