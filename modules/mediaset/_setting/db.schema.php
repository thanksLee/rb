<?php
if(!defined('__KIMS__')) exit;

//카테고리데이터
$_tmp = db_query( "select count(*) from ".$table[$module.'category'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("

CREATE TABLE ".$table[$module.'category']." (
uid			INT				PRIMARY KEY		NOT NULL AUTO_INCREMENT,
gid			INT				DEFAULT '0'		NOT NULL,
site		INT				DEFAULT '0'		NOT NULL,
mbruid		INT				DEFAULT '0'		NOT NULL,
type		TINYINT			DEFAULT '0'		NOT NULL,
hidden		TINYINT			DEFAULT '0'		NOT NULL,
users		TEXT			NOT NULL,
name		VARCHAR(50)		DEFAULT ''		NOT NULL,
r_num		INT				DEFAULT '0'		NOT NULL,
d_regis		VARCHAR(14)		DEFAULT ''		NOT NULL,
d_update	VARCHAR(14)		DEFAULT ''		NOT NULL,
KEY gid(gid),
KEY site(site),
KEY mbruid(mbruid),
KEY type(type),
KEY hidden(hidden)) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'category'],$DB_CONNECT); 
}

//첨부파일데이터
$_tmp = db_query( "select count(*) from ".$table[$module.'data'], $DB_CONNECT );
if ( !$_tmp ) {
$_tmp = ("

CREATE TABLE ".$table[$module.'data']." (
uid			INT				PRIMARY KEY		NOT NULL AUTO_INCREMENT,
gid			INT				DEFAULT '0'		NOT NULL,
site		INT				DEFAULT '0'		NOT NULL,
hidden		TINYINT			DEFAULT '0'		NOT NULL,
users		TEXT			NOT NULL,
category	INT				DEFAULT '0'		NOT NULL,
type		TINYINT			DEFAULT '0'		NOT NULL,
tmpcode		VARCHAR(20)		DEFAULT ''		NOT NULL,
mbruid		INT				DEFAULT '0'		NOT NULL,
ext			VARCHAR(4)		DEFAULT '0'		NOT NULL,
url			VARCHAR(150)	DEFAULT ''		NOT NULL,
name		VARCHAR(250)	DEFAULT ''		NOT NULL,
size		INT				DEFAULT '0'		NOT NULL,
width		INT				DEFAULT '0'		NOT NULL,
height		INT				DEFAULT '0'		NOT NULL,
alt			VARCHAR(250)	DEFAULT ''		NOT NULL,
caption		TEXT			NOT NULL,
description	TEXT			NOT NULL,
searchopen	TINYINT			DEFAULT '0'		NOT NULL,
tags		VARCHAR(250)	DEFAULT ''		NOT NULL,
license		VARCHAR(250)	DEFAULT ''		NOT NULL,
use_cment	TINYINT			DEFAULT '0'		NOT NULL,
use_cross	TINYINT			DEFAULT '0'		NOT NULL,
use_ad		TINYINT			DEFAULT '0'		NOT NULL,
link		TEXT			NOT NULL,
down		INT				DEFAULT '0'		NOT NULL,
hit			INT				DEFAULT '0'		NOT NULL,
d_regis		VARCHAR(14)		DEFAULT ''		NOT NULL,
d_update	VARCHAR(14)		DEFAULT ''		NOT NULL,
cync		VARCHAR(250)	DEFAULT ''		NOT NULL,
KEY gid(gid),
KEY site(site),
KEY hidden(hidden),
KEY category(category),
KEY type(type),
KEY tmpcode(tmpcode),
KEY mbruid(mbruid),
KEY ext(ext),
KEY name(name),
KEY d_regis(d_regis)) ENGINE=".$DB['type']." CHARSET=UTF8");                            
db_query($_tmp, $DB_CONNECT);
db_query("OPTIMIZE TABLE ".$table[$module.'data'],$DB_CONNECT); 
}
?>