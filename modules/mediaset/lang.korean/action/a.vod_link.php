<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

include $g['path_core'].'function/thumb.func.php';
include $g['dir_module'].'var/var.php';


$type		= 2;
$caption	= trim($caption);
$alt		= trim($alt);
$link		= trim($link);

if (!$category)
{
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
	$category	= $_C['uid'];
}

$mbruid		= $my['uid'];
$typefolder	= 'vod';
$saveDir	= $g['dir_module'].'files/'.$typefolder.'/'.$my['id'].'/';
$url		= $g['url_root'].'/modules/'.$m.'/files/'.$typefolder.'/'.$my['id'];
$down		= 0;
$hit		= 0;
$d_regis	= $date['totime'];
$d_update	= '';

$name		= '동영상';
$ext		= 'mp4';
$size		= 0;
$width		= 0;
$height		= 0;



$mingid = getDbCnt($table[$m.'data'],'min(gid)','');
$gid = $mingid ? $mingid - 1 : 100000000;

$QKEY = "gid,site,hidden,category,type,tmpcode,mbruid,ext,url,name,size,width,height,";
$QKEY.= "alt,caption,description,searchopen,tags,license,use_cment,use_cross,use_ad,link,down,hit,d_regis,d_update,cync";
$QVAL = "'$gid','$s','$hidden','$category','$type','$tmpcode','$mbruid','$ext','$url','$name','$size','$width','$height',";
$QVAL.= "'$alt','$caption','$description','$searchopen','$tags','$license','$use_cment','$use_cross','$use_ad','$link','$down','$hit','$d_regis','$d_update','$cync'";
getDbInsert($table[$m.'data'],$QKEY,$QVAL);
getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$category);

echo '<script>';
?>
parent.getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=admin&module=<?php echo $m?>&front=_modal_.vod&album=<?php echo $category?>&type=urlsave');
<?php
echo '</script>';
getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&front=main&album='.$category,'','저장되었습니다.','');
?>