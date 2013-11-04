<?php
if(!defined('__KIMS__')) exit;

function getRWurl($url,$type)
{
	global $_HS,$g,$r;
	if ($type == 'bbs')
	{
		if ($_HS['rewrite'])
		{
			return 'http://'.$_SERVER['HTTP_HOST'].str_replace('./','/',RW($url));
		}
		else {
			return $g['url_root'].htmlspecialchars(str_replace('&amp;','&',str_replace('./','/',RW($url))));
		}
	}
	else {
		include $g['path_module'].'blog/var/var.php';
		if ($d['blog']['rewrite'])
		{
			return $g['url_root'].'/blog'.str_replace('&front=list&uid=','/',str_replace('m=blog&blog=','/',$url));
		}
		else {
			return $g['url_root'].'/?'.($_HS['usescode']?'r='.$r.'&amp;':'').htmlspecialchars($url);
		}
	}
}

//게시판
if ($bid)
{
	$B = getDbData($table['bbslist'],"id='".$bid."'",'*');
	if (!$B['uid']) exit;

	$recnum = (int)$recnum;
	$recnum	= $recnum < 501 ? $recnum : 50;
	$RCD = getDbArray($table['bbsdata'],'bbs='.$B['uid'],'*','gid','asc',$recnum,1);

	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\">\n\n";

	while($_R=db_fetch_array($RCD))
	{
		echo "<url>\n";
		echo "<loc>".getRWurl('m=bbs&bid='.$_R['bbsid'].'&uid='.$_R['uid'],'bbs')."</loc>\n";
		echo "<lastmod>".getDateFormat(($_R['d_modify']?$_R['d_modify']:$_R['d_regis']),'Y-m-d')."</lastmod>\n";
		echo "<changefreq>daily</changefreq>\n";
		echo "</url>\n\n";
	}

	echo "</urlset>\n";
	
	exit;
}

//블로그
if ($blog)
{
	$B = getDbData($table['bloglist'],"id='".$blog."'",'*');
	if (!$B['uid']) exit;

	$recnum = (int)$recnum;
	$recnum	= $recnum < 501 ? $recnum : 50;
	$RCD = getDbArray($table['blogdata'],'blog='.$B['uid'],'*','gid','asc',$recnum,1);

	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\">\n\n";

	while($_R=db_fetch_array($RCD))
	{
		echo "<url>\n";
		echo "<loc>".getRWurl('m=blog&blog='.$B['id'].'&front=list&uid='.$_R['uid'],'blog')."</loc>\n";
		echo "<lastmod>".getDateFormat(($_R['d_modify']?$_R['d_modify']:$_R['d_regis']),'Y-m-d')."</lastmod>\n";
		echo "<changefreq>daily</changefreq>\n";
		echo "</url>\n\n";
	}

	echo "</urlset>\n";
	
	exit;
}
?>