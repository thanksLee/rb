<?php
if(!defined('__KIMS__')) exit;

function getMenuUrlCode($site,$table,$parent,$depth,$uid,$code)
{
	static $string;

	$xdepth = $depth+1;
	$CD=getDbSelect($table,($site?'site='.$site.' and ':'').'depth='.$xdepth.' and parent='.$parent.' and hidden=0 and reject=0 order by gid asc','*');
	while($C=db_fetch_array($CD))
	{
		$code1 = $code.$C['id'].'/';
		$_code = substr($code1,0,strlen($code1)-1);
		
		$string .= "<url><loc>".getRWurl('c='.$_code)."</loc></url>\n";
		
		if ($C['isson'])
		{
			getMenuUrlCode($site,$table,$C['uid'],$C['depth'],$uid,$code1);
		}
	}
	return $string;
}
function getRWurl($url)
{
	global $_HS,$g;
	if ($_HS['rewrite'])
	{
		return 'http://'.$_SERVER['HTTP_HOST'].str_replace('./','/',RW($url));
	}
	else {
		return $g['url_root'].htmlspecialchars(str_replace('&amp;','&',str_replace('./','/',RW($url))));
	}
}
function getRWBurl($url)
{
	global $_HS,$g,$r;
	include $g['path_module'].'blog/var/var.php';
	if ($d['blog']['rewrite'])
	{
		return $g['url_root'].'/blog'.str_replace('m=blog&blog=','/',$url);
	}
	else {
		return $g['url_root'].'/?'.($_HS['usescode']?'r='.$r.'&amp;':'').htmlspecialchars($url);
	}
}
checkAdmin(0);

$filename = trim($filename);
$filename = str_replace('./','',$filename);

if (!$filename || strstr($filename,'/') || strstr($filename,"\\") || substr($filename,0,1) == '.') getLink('','','사이트맵 파일명이 잘 못되었습니다.','');

include $g['dir_module'].'var/var.php';

$gfile= './'.$filename;
$fp = fopen($gfile,'w');

fwrite($fp,"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
fwrite($fp,"<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\">\n\n");

if ($incmenu)
{
	fwrite($fp,getMenuUrlCode($s,$table['s_menu'],0,0,0,''));
	fwrite($fp,"\n");
}

$_RCD = getDbArray($table['bbslist'],'','id,d_last,d_regis','gid','asc',0,1);
while($_R=db_fetch_array($_RCD))
{
	if (!in_array($_R['id'],$bbsmembers)) continue;
	fwrite($fp,"<url>\n");
	fwrite($fp,"<loc>".getRWurl('m=bbs&bid='.$_R['id'])."</loc>\n");
 	fwrite($fp,"<lastmod>".getDateFormat(($_R['d_last']?$_R['d_last']:$_R['d_regis']),'Y-m-d')."</lastmod>\n");
	fwrite($fp,"<changefreq>daily</changefreq>\n");
	fwrite($fp,"</url>\n\n");
}

$_RCD = getDbArray($table['bloglist'],'','id,d_last,d_regis','gid','asc',0,1);
while($_R=db_fetch_array($_RCD))
{
	if (!in_array($_R['id'],$blogmembers)) continue;
	fwrite($fp,"<url>\n");
	fwrite($fp,"<loc>".getRWBurl('m=blog&blog='.$_R['id'])."</loc>\n");
 	fwrite($fp,"<lastmod>".getDateFormat(($_R['d_last']?$_R['d_last']:$_R['d_regis']),'Y-m-d')."</lastmod>\n");
	fwrite($fp,"<changefreq>daily</changefreq>\n");
	fwrite($fp,"</url>\n\n");
}

fwrite($fp,"</urlset>\n");

fclose($fp);
@chmod($gfile,0707);


$_tmpdfile = $g['dir_module'].'var/var.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
fwrite($fp, "\$d['sitemap']['filename'] = \"".trim($filename)."\";\n");
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);




getLink('','','사이트맵이 만들어졌습니다.','');
?>