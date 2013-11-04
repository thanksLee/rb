<?php
if(!defined('__KIMS__')) exit;

$S = 0;
$N = 0;

if ($files)
{
	$d['upload'] = getArrayString($files);
	foreach($d['upload']['data'] as $_val)
	{
		$U = getUidData($table[$m.'data'],$_val);
		if ($U['uid'])
		{
			$S+= $U['size'];
			$N++;
		}
	}
}


$P = array();

if (!$_SESSION['upsescode'])
{
	$_SESSION['upsescode'] = str_replace('.','',$g['time_start']);
}

$sescode = $_SESSION['upsescode'];
$_SESSION['_sessAlbum'] = $album;

if ($sescode)
{
	$PHOTOS = getDbArray($table[$m.'data'],"tmpcode='".$sescode."'",'*','uid','asc',0,0);
	while($R = db_fetch_array($PHOTOS))
	{
		$P[] = $R;
		$S += $R['size'];
		$N++;
	}
}

?>