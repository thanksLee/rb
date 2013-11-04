<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);
$_tmpdfile = $g['dir_module'].'var/var.php';
include $_tmpdfile;

$name = '';
foreach ($_albums as $_ab)
{
	$name .= $_ab.',';
}

$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");

foreach($d['mediaset'] as $_key => $_val)
{
	if ($category != $_key)
	{
		fwrite($fp, "\$d['mediaset']['".$_key."'] = \"".trim($_val)."\";\n");
	}
	else {
		fwrite($fp, "\$d['mediaset']['".$_key."'] = \"".$name."\";\n");
	}
}

fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);

getLink('','','순서가 변경되었습니다.','');
?>