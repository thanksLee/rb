<?php
if(!defined('__KIMS__')) exit;
checkAdmin(0);
include_once $g['path_core'].'function/dir.func.php';
foreach ($table as $key => $val) db_query('drop table '.$val,$DB_CONNECT);
DirDelete('./');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>안내메세지</title>
<script type="text/javascript">
//<![CDATA[
alert('모든 데이터가 삭제되었습니다. 남아있는 폴더나 파일은 FTP에서 삭제해 주세요.');
location.href = 'http://<?php echo $_SERVER['HTTP_HOST']?>';
//]]>
</script>
</head>
<body></body>
</html>
