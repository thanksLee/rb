<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);


$ext = getExt($_FILES['file']['name']);
if (!$_FILES['file']['tmp_name']) getLink('reload','parent.','','');
if (!strstr('jpg,jpeg,png,gif',strtolower($ext))) exit;

include $g['path_core'].'function/thumb.func.php';
include $g['dir_module'].'var/var.php';

if($siteaply) $_siteAply = 'site='.$siteaply.' and ';
$_CWHERE = $_siteAply.'mbruid='.$my['uid'].' and type='.$type;
$_CT_RCD = getDbArray($table[$m.'category'],$_CWHERE,'*','gid','asc',0,1);
$_C = array();
while($_CT = db_fetch_array($_CT_RCD))
{
	if($_CT['name']=='미분류')
	{
		$_C = $_CT;
		break;
	}
}


$site		= $_HS['uid'];
$hidden		= 0;
$users		= '';
$category	= $_C['uid'];
//$type		= 1;
$tmpcode	= $sescode;
$mbruid		= $my['uid'];
$typefolder = $type == 1 ? 'photo' : 'vod';
$url		= $g['url_root'].'/modules/'.$m.'/files/'.$typefolder.'/'.$my['id'];
$name		= $_FILES['file']['name'];
$size		= $_FILES['file']['size'];
$width		= 0;
$height		= 0;
$alt		= '';
$caption	= '';
$description= '';
$searchopen	= 1;
$tags		= '';
$license	= 0;
$use_cment	= 0;
$use_cross	= 0;
$use_ad		= 0;
$link		= '';
$down		= 0;
$hit		= 0;
$d_regis	= $date['totime'];
$d_update	= '';
$cync		= '';


$saveDir	= $g['dir_module'].'files/'.$typefolder.'/'.$my['id'].'/';
$tmpname	= $_FILES['file']['tmp_name'];
$_name		= getUTFtoKR($name);
$saveFile	= $saveDir.$_name;


move_uploaded_file($_FILES['file']['tmp_name'], $saveDir.$_name);
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

$QKEY = "gid,site,hidden,category,type,tmpcode,mbruid,ext,url,name,size,width,height,";
$QKEY.= "alt,caption,description,searchopen,tags,license,use_cment,use_cross,use_ad,link,down,hit,d_regis,d_update,cync";
$QVAL = "'$gid','$s','$hidden','$category','$type','$tmpcode','$mbruid','$ext','$url','$name','$size','$width','$height',";
$QVAL.= "'$alt','$caption','$description','$searchopen','$tags','$license','$use_cment','$use_cross','$use_ad','$link','$down','$hit','$d_regis','$d_update','$cync'";

getDbInsert($table[$m.'data'],$QKEY,$QVAL);
getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$category);

if ($gid == 100000000) db_query("OPTIMIZE TABLE ".$table[$m.'data'],$DB_CONNECT); 

getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&fornt='.($type==1?'main':'vod'),'parent.','','');
?>