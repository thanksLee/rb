<?php
function getLayoutLogo($layout)
{
	if ($layout['imglogo_use'])
	{
		return '<a href="'.RW(0).'" style="margin:'.$layout['title_t'].'px 0 '.$layout['title_b'].'px 0;"><img src="'.$GLOBALS['g']['s'].'/layouts/'.$layout['dir'].'/_var/'.$layout['imglogo'].'" width="'.$layout['imglogo_w'].'" height="'.$layout['imglogo_h'].'" alt="" /></a>';
	}
	else {
		return '<h1><a href="'.RW(0).'" style="margin:'.$layout['title_t'].'px 0 '.$layout['title_b'].'px 0;color:'.$layout['title_color'].';" id="_layout_title_">'.$layout['title'].'</a></h1>';
	}
}
function getLayoutMenuShow($site,$table,$j,$parent,$depth,$uid,$CXA,$ncpath)
{
	global $MenuOpen,$numhidden,$_HM;
	static $j;

	$CD=getDbSelect($table,($site?'site='.$site.' and ':'').'depth='.($depth+1).' and parent='.$parent.' and hidden=0 order by gid asc','*');
	while($C=db_fetch_array($CD))
	{
		$j++;
		if(in_array($C['uid'],$CXA)) $MenuOpen .= 'trees[0].tmB('.$j.');';
		$numprintx = !$numhidden && $C['num'] ? '&lt;span class="num"&gt;('.$C['num'].')&lt;/span&gt;' : '';
		$name = $C['uid'] != $_HM['uid'] ? addslashes($C['name']): '&lt;span class="on"&gt;'.addslashes($C['name']).'&lt;/span&gt;';
		$name = '&lt;span class="ticon tdepth'.$C['depth'].'"&gt;&lt;/span&gt;&lt;span class="name ndepth'.$C['depth'].'"&gt;'.$name.'&lt;/span&gt;';

		if ($C['isson'])
		{
			echo "['".$name.$numprintx."','".$ncpath.$C['id']."',";
			getLayoutMenuShow($site,$table,$j,$C['uid'],$C['depth'],$uid,$CXA,$ncpath.$C['id'].'/');
			echo "],\n";
		}
		else {
			echo "['".$name.$numprintx."','".$ncpath.$C['id']."',''],\n";
		}
	}
}
function getLayoutMenuCodeToPath($table,$cat,$j)
{
	static $arr;
	$R=getUidData($table,$cat);
	if($R['parent'])
	{
		$arr[$j]['uid'] = $R['uid'];
		getLayoutMenuCodeToPath($table,$R['parent'],$j+1);
	}
	else {
		$C=getUidData($table,$cat);
		$arr[$j]['uid'] = $C['uid'];
	}
	sort($arr);
	reset($arr);
	return $arr;
}

$CXA = array();
if($_HM['uid'])
{
	$_ctarr = getLayoutMenuCodeToPath($table['s_menu'],$_HM['uid'],0);
	foreach ($_ctarr as $_key) $CXA[] = $_key['uid'];
}

include  $g['path_layout'].$d['layout']['dir'].'/_var/_var.php';

if (isset($_layoutAction))
{
	include $g['path_layout'].$d['layout']['dir'].'/_action/a.'.$_layoutAction.'.php';
	exit;
}

if ($d['layout']['bg_use']) $d['layout']['_titlebg'] = ' style="padding:'.$d['layout']['title_padding_top'].'px 0 '.$d['layout']['title_padding_btm'].'px 0;background:url(\''.$g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['bg'].'\') '.$d['layout']['bg_o'].';"';
else $d['layout']['_titlebg'] = ' style="padding:'.$d['layout']['title_padding_top'].'px 0 '.$d['layout']['title_padding_btm'].'px 0;"';
if ($d['layout']['memberlink_color']) $d['layout']['_memberlink_color'] = ' style="color:'.$d['layout']['memberlink_color'].';"';

$d['layout']['_is_ownmain'] = $d['layout']['mainType_layout']&&!$system&&!$_themePage&&$_HP['id']=='main';
$d['layout']['_is_content'] = $d['layout']['mainType_rb']||$system||$_themePage||$_HP['id']!='main';

if (isset($_themeConfig))
{
	if (!$my['admin']) getLink(RW(0),'','권한이 없습니다.','');
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main.php';

	$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main';
	$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_admin/main';
	$d['layout']['_twhite'] = false;
}
if (isset($_themePage))
{
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage.'.php';
	if (strpos($_themePage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage;
		$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_pages/'.$_themePage;
	}
}
?>