<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

if ($moduleid)
{
	getDbUpdate($table['s_module'],"name='".trim($name)."',hidden='$hidden',mobile='$mobile',icon='$icon'","id='".$moduleid."'");
}

if($iconaction) exit;

getLink('reload','parent.','','');
?>