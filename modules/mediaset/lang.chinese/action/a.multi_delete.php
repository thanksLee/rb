<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_file_members = getArrayString($_data_);

foreach($_file_members['data'] as $val)
{
	$R = getUidData($table[$m.'data'],$val);

	$orignFolder= explode('/files/'.$type.'/',$R['url']);
	$myFolder = $g['dir_module'].'files/'.$type.'/'.$orignFolder[1].'/';

	if ($R['uid'] && $R['mbruid']==$my['uid'])
	{
		$_name1 = getUTFtoKR($R['name']);

		if (is_file($myFolder.$_name1))
		{
			unlink($myFolder.$_name1);
			if($R['type']==1)
			{
				unlink($myFolder.'thumb1_'.$_name1);
				unlink($myFolder.'thumb2_'.$_name1);
			}
		}

		getDbDelete($table[$m.'data'],'uid='.$R['uid']);
		getDbUpdate($table[$m.'category'],'r_num=r_num-1','uid='.$R['category']);
	}
}

if ($back)
{
	if($layer == 'Y')
	{
		echo '<script>';
		?>
		parent.getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=admin&module=<?php echo $m?>&front=_modal_.<?php echo $back?>&album=<?php echo $album?>&type=library');
		<?php
		echo '</script>';
	}
	else {
		getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.'&front='.$back.'&album='.$album,'parent.','','');
	}
}
else {
	getLink('reload','parent.','','');
}
?>