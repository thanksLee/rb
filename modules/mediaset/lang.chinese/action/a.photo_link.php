<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

include $g['path_core'].'function/thumb.func.php';
include $g['dir_module'].'var/var.php';


$caption	= trim($caption);
$alt		= trim($alt);
$link		= trim($link);
$link1		= explode('?',$link);
$link2		= $link1[0];

if (!strstr($link,'http')) getLink('','','이미지 URL을 정확히 입력해 주세요.','');

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
$type		= 1;
$typefolder	= 'photo';
$saveDir	= $g['dir_module'].'files/'.$typefolder.'/'.$my['id'].'/';
$url		= $g['url_root'].'/modules/'.$m.'/files/'.$typefolder.'/'.$my['id'];
$down		= 0;
$hit		= 0;
$d_regis	= $date['totime'];
$d_update	= '';
$ext	= getExt($link2);


if ($save && !$link1[1] && strstr('jpg/jpeg/gif/png',strtolower($ext)))
{
	include $g['path_core'].'function/rss.func.php';
	$linkdata = getUrlData($link2,10);
	if (!$linkdata) getLink('','','사진 주소를 확인하세요. 서버의 응답이 없습니다.','-1');
	
	$name	  = basename($link2);
	$_name	  = getUTFtoKR($name);
	$saveFile = $saveDir.$_name;

	$fp = fopen($saveFile,'w');
	fwrite($fp,$linkdata);
	fclose($fp);
	@chmod($saveFile,0707);
}
else {

	$name		= basename($link2);
	$_name		= getUTFtoKR($name);
	$saveFile	= $saveDir.$_name;
	$size		= 0;
	$width		= 0;
	$height		= 0;
	$url		= str_replace('/'.$name,'',$link2);
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

$QKEY = "gid,site,hidden,category,type,tmpcode,mbruid,ext,url,name,size,width,height,";
$QKEY.= "alt,caption,description,searchopen,tags,license,use_cment,use_cross,use_ad,link,down,hit,d_regis,d_update,cync";
$QVAL = "'$gid','$s','$hidden','$category','$type','$tmpcode','$mbruid','$ext','$url','$name','$size','$width','$height',";
$QVAL.= "'$alt','$caption','$description','$searchopen','$tags','$license','$use_cment','$use_cross','$use_ad','$link','$down','$hit','$d_regis','$d_update','$cync'";
getDbInsert($table[$m.'data'],$QKEY,$QVAL);
getDbUpdate($table[$m.'category'],'r_num=r_num+1','uid='.$category);

echo '<script>';
?>
parent.getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=admin&module=<?php echo $m?>&front=_modal_.photo&album=<?php echo $category?>&type=urlsave');
<?php
echo '</script>';
getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&front=main&album='.$category,'','저장되었습니다.','');
?>