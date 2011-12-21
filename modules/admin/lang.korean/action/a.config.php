<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);


$fdset = array('themepc','thememobile','autoclose','version','hidepannel','pannellink');

$_tmpdfile = $g['dir_module'].'var/var.system.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
foreach ($fdset as $val)
{
	fwrite($fp, "\$d['admin']['".$val."'] = \"".trim(${$val})."\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);


getLink('reload','parent.','','');
?>