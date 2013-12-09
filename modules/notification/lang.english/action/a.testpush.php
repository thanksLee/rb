<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$isNotiConfig = getDbData($table[$m.'config'],'mbruid='.$my['uid'],'*');
if(!$isNotiConfig['mbruid']) getDbInsert($table[$m.'config'],'usenoti','1');

$QKEY = 'uid,mbruid,site,frommodule,frommbr,message,referer,d_regis,d_read';
$QVAL = "'".filterstr($g['time_start'])."','".$my['uid']."','".$s."','".$m."','0','테스트 알림 메세지입니다.','','".$date['totime']."',''";
getDbInsert($table[$m.'data'],$QKEY,$QVAL);

$nowNotiNum = getDbRows($table[$m.'data'],'mbruid='.$my['uid']." and d_read=''");

echo '<script>parent.mynoti='.$nowNotiNum.';parent.notiCheck();</script>';
getLink('','','테스트 알림을 전송하었습니다.','');
?>