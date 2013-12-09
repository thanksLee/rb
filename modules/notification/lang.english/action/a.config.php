<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);
$_tmpdfile = $g['dir_module'].'var/var.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
fwrite($fp, "\$d['notification']['cut_modules'] = \"".trim($cut_modules)."\";\n");
fwrite($fp, "\$d['notification']['cut_members'] = \"".trim($cut_members)."\";\n");
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);

getLink('reload','parent.','갱신되었습니다.','');
?>