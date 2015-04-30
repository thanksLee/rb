<?php 
// seo 데이타 -- 전송되는 타이틀 추출
$_MSEO = getDbData($table['s_seo'],'rel=1 and parent='.$_HM['uid'],'*');
$_PSEO = getDbData($table['s_seo'],'rel=2 and parent='.$_HP['uid'],'*');
$_WTIT=strip_tags($g['meta_tit']);
//$_link_domain = 'http'.($_SERVER['HTTPS']=='on'?'s':'').'://';
//$_link_url = $_link_domain.$_SERVER['REQUEST_URI']; // URL
$_link_url=$g['url_root'].$_SERVER['REQUEST_URI'];
$icon_arr=explode('|',$wdgvar['icon_arr']); // 링크개체  배열 
$wdgvar['widget_path']='default/sharrre';
?>
<?php getImport('sharrre','jquery.sharrre',false,'js')?>
<!-- 해당 테마 css 인클루드-->
<?php include $g['path_widget'].$wdgvar['widget_path'].'/'.$wdgvar['theme'].'.php';?>




