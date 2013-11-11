<?php
if(!defined('__KIMS__')) exit;

//알림설정데이터
$_tmp = db_query( "select count(*) from ".$table[$module.'config'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("

CREATE TABLE ".$table[$module.'config']." (
mbruid		INT				PRIMARY KEY		NOT NULL,
usenoti		TINYINT			DEFAULT '0'		NOT NULL,
etcconf		TEXT			NOT NULL) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'config'],$DB_CONNECT); 
}

//알림데이터
$_tmp = db_query( "select count(*) from ".$table[$module.'data'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("
CREATE TABLE ".$table[$module.'data']." (
uid			VARCHAR(13)		PRIMARY KEY		NOT NULL,
mbruid		INT				DEFAULT '0'		NOT NULL,
site		INT				DEFAULT '0'		NOT NULL,
frommodule	VARCHAR(50)		DEFAULT ''		NOT NULL,
frommbr		INT				DEFAULT '0'		NOT NULL,
message		TEXT			NOT NULL,
referer		VARCHAR(250)	DEFAULT ''		NOT NULL,
d_regis		VARCHAR(14)		DEFAULT ''		NOT NULL,
d_read		VARCHAR(14)		DEFAULT ''		NOT NULL,
KEY mbruid(mbruid),
KEY site(site),
KEY frommbr(frommbr),
KEY d_read(d_read)) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'data'],$DB_CONNECT); 
}
?>