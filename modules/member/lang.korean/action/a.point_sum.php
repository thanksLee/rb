<?php
if(!defined('__KIMS__')) exit;

if (!$my['uid'])
{
	getLink('','','정상적인 접근이 아닙니다.','');
}

$memberuid = 0;
$price = 0;

if ($my['admin'])
{
	foreach($members as $val)
	{
		$P = getUidData($table['s_point'],$val);
		$price = $price + $P['price'];
		$memberuid = $P['my_mbruid'];

		getDbDelete($table['s_point'],'uid='.$P['uid']);
	}

	getDbInsert($table['s_point'],'my_mbruid,by_mbruid,price,content,d_regis',"'".$memberuid."','0','$price','포인트내역을 정리하였습니다.','".$date['totime']."'");	

}
else {
	foreach($members as $val)
	{
		$P = getUidData($table['s_point'],$val);
		$price = $price + $P['price'];

		getDbDelete($table['s_point'],'uid='.$R['uid'].' and my_mbruid='.$my['uid']);
	}

	getDbInsert($table['s_point'],'my_mbruid,by_mbruid,price,content,d_regis',"'".$my['uid']."','0','$price','포인트내역을 정리하였습니다.','".$date['totime']."'");	

}

getLink('reload','parent.','','');
?>