<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

foreach($noti_members as $val)
{
	getDbDelete($table[$m.'data'],'uid='.$val);
}

getLink('reload','parent.','','');
?>