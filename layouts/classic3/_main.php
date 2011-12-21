<?php
function getLayoutLogo($layout)
{
	if ($layout['imglogo_use'])
	{
		return '<div style="margin:'.$layout['title_t'].'px 0 '.$layout['title_b'].'px 0;"><a href="'.RW(0).'"><img src="'.$GLOBALS['g']['s'].'/layouts/'.$layout['dir'].'/_var/'.$layout['imglogo'].'" width="'.$layout['imglogo_w'].'" height="'.$layout['imglogo_h'].'" alt="" /></a><div id="_layout_title1_" class="sment" style="color:'.$layout['title_color1'].';">'.$layout['ment'].'</div></div>';
	}
	else {
		return '<div style="margin:'.$layout['title_t'].'px 0 '.$layout['title_b'].'px 0;"><h1><a href="'.RW(0).'" id="_layout_title_" style="color:'.$layout['title_color'].';">'.$layout['title'].'</a></h1><div id="_layout_title1_" class="sment" style="color:'.$layout['title_color1'].';">'.$layout['ment'].'</div></div>';
	}
}


include  $g['path_layout'].$d['layout']['dir'].'/_var/_var.php';

if (isset($_layoutAction))
{
	include $g['path_layout'].$d['layout']['dir'].'/_action/a.'.$_layoutAction.'.php';
	exit;
}

if ($d['layout']['bg_use']) $d['layout']['_bg'] = ' style="background:url(\''.$g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['bg'].'\') '.$d['layout']['bg_o'].';"';
if ($d['layout']['message_color']) $d['layout']['_message_color'] = ' style="color:'.$d['layout']['message_color'].';"';
if ($d['layout']['memberlink_color']) $d['layout']['_memberlink_color'] = ' style="color:'.$d['layout']['memberlink_color'].';"';
$d['layout']['_titlebg'] = ' style="padding:'.$d['layout']['title_padding_top'].'px 0 '.$d['layout']['title_padding_btm'].'px 0;"';

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