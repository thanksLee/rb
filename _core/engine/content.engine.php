<?php
if(!defined('__KIMS__')) exit;

if (is_file($g['main']))
{
	if (!$system)
	{
		if ($_HM['puthead'] == 0)
		{
			if(!$g['mobile'] || $_SESSION['pcmode']=='Y')
			{
				if(is_file($_HM['incfile'].'.header.php'))
				{
					include_once $_HM['incfile'].'.header.php';
				}

				if(is_file($g['add_header_inc']))
				{
					include_once $g['add_header_inc'];
				}

				echo $g['add_header_cod'];

				if (!$_HM['puthead'])
				{
					if ($_HM['imghead'])
					{
						if (strstr($_HM['imghead'],'swf'))
						{
							echo '<div><embed id="swf_menu_header" src="'.$g['s'].'/_var/menu/'.$_HM['imghead'].'"></embed></div>';
						}
						else {
							echo '<div><img id="img_menu_header" src="'.$g['s'].'/_var/menu/'.$_HM['imghead'].'" alt="" /></div>';
						}
					}
				}

				if ($g['add_header_img'])
				{
					if (strstr($g['add_header_img'],'swf'))
					{
						echo '<div><embed id="swf_menu_header" src="'.$g['add_header_img'].'"></embed></div>';
					}
					else {
						echo '<div><img id="img_menu_header" src="'.$g['add_header_img'].'" alt="" /></div>';
					}
				}
			}
		}

		include_once $g['main'];


		if ($_HM['putfoot'] == 0)
		{

			if(!$g['mobile'] || $_SESSION['pcmode']=='Y')
			{
				if ($g['add_footer_img'])
				{
					if (strstr($g['add_footer_img'],'swf'))
					{
						echo '<div><embed id="swf_menu_header" src="'.$g['add_footer_img'].'"></embed></div>';
					}
					else {
						echo '<div><img id="img_menu_header" src="'.$g['add_footer_img'].'" alt="" /></div>';
					}
				}

				if ($_HM['imgfoot'])
				{
					if (strstr($_HM['imgfoot'],'swf'))
					{
						echo '<div><embed id="swf_menu_footer" src="'.$g['s'].'/_var/menu/'.$_HM['imgfoot'].'"></embed></div>';
					}
					else {
						echo '<div><img id="img_menu_footer" src="'.$g['s'].'/_var/menu/'.$_HM['imgfoot'].'" alt="" /></div>';
					}
				}

				echo $g['add_footer_cod'];

				if(is_file($g['add_footer_inc']))
				{
					include_once $g['add_footer_inc'];
				}

				if (!$_HM['putfoot'])
				{
					if(is_file($_HM['incfile'].'.footer.php'))
					{
						include_once $_HM['incfile'].'.footer.php';
					}
				}
			}
		}
	}
	else {
		include_once $g['main'];
	}
}
else
{
	getLink($g['s'].'/?r='.$r,'','','');
}
?>