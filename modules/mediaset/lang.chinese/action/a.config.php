<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);
$ftp_port = $ftp_port ? trim($ftp_port) : '21';
$_tmpdfile = $g['dir_module'].'var/var.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
fwrite($fp, "\$d['mediaset']['t_size1'] = \"".trim($t_size1)."\";\n");
fwrite($fp, "\$d['mediaset']['t_size2'] = \"".trim($t_size2)."\";\n");
fwrite($fp, "\$d['mediaset']['category1'] = \"".trim($category1)."\";\n");
fwrite($fp, "\$d['mediaset']['category2'] = \"".trim($category2)."\";\n");

fwrite($fp, "\$d['mediaset']['use_fileserver'] = \"".$use_fileserver."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_host'] = \"".trim($ftp_host)."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_port'] = \"".$ftp_port."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_user'] = \"".trim($ftp_user)."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_pasv'] = \"".$ftp_pasv."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_pass'] = \"".trim($ftp_pass)."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_folder'] = \"".trim($ftp_folder)."\";\n");
fwrite($fp, "\$d['mediaset']['ftp_urlpath'] = \"".trim($ftp_urlpath)."\";\n");
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);

getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&front='.$front.'&xmod='.$xmod,'parent.',!$xmod?'갱신되었습니다.':'','');
?>