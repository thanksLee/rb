<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_tmpdfile = $g['path_layout'].$nowLayout.'/_var/_var.php';
$d['layout'] = array();
include $_tmpdfile;

$d['layout']['begin'] = 1;

if ($changeType == 'front')
{
	if ($d['layout']['mainType_layout']&&$mainType_layout)
	{
		$d['layout']['bbs1'] = $bbs1;
		$d['layout']['sort1'] = $sort1;
		$d['layout']['bbs1_day'] = trim($bbs1_day);
		$d['layout']['viewType'] = $viewType;
		$d['layout']['recnum_list'] = trim($recnum_list);
		$d['layout']['recnum_revi'] = trim($recnum_revi);
		$d['layout']['recnum_open'] = trim($recnum_open);
		$d['layout']['comment_theme'] = $comment_theme;
		$d['layout']['review_length'] = trim($review_length);
	}
	$d['layout']['mainType_layout'] = $mainType_layout;
	$d['layout']['mainType_rb'] = $mainType_rb;
}
if ($changeType == 'theme')
{
	$d['layout']['theme'] = $theme;
}
if ($changeType == 'detail')
{
	$_newupload = false;
	$tmpname	= $_FILES['upfile']['tmp_name'];
	$realname	= $_FILES['upfile']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'logo.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imglogo'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$isize=getimagesize($saveFile2);

		$d['layout']['imglogo'] = $photo;
		$d['layout']['imglogo_w'] = $isize[0];
		$d['layout']['imglogo_h'] = $isize[1];
		$_newupload = true;
	}

	$tmpname	= $_FILES['upfile1']['tmp_name'];
	$realname	= $_FILES['upfile1']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'bgtitle.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['bg'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);

		$d['layout']['bg'] = $photo;
	}

	$tmpname	= $_FILES['upfile2']['tmp_name'];
	$realname	= $_FILES['upfile2']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'imgphoto.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imgphoto'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);

		$d['layout']['imgphoto'] = $photo;
	}

	$d['layout']['title'] = trim($title);
	$d['layout']['ment'] = trim($ment);
	$d['layout']['title_padding_top'] = trim($title_padding_top);
	$d['layout']['title_padding_btm'] = trim($title_padding_btm);
	$d['layout']['title_t'] = trim($title_t);
	$d['layout']['title_b'] = trim($title_b);
	$d['layout']['imglogo_use'] = is_file($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imglogo']) ? $imglogo_use : 0;
	$d['layout']['bg_use'] = $bg_use;
	$d['layout']['bg_o'] = $bg_o;
	$d['layout']['title_color'] = $title_color;
	$d['layout']['memberlink_color'] = $memberlink_color;
	$d['layout']['imgphoto_use'] = $imgphoto_use;

	if (!$_newupload)
	{
		$d['layout']['imglogo_w'] = trim($imglogo_w);
		$d['layout']['imglogo_h'] = trim($imglogo_h);
	}
}
if ($changeType == 'ad')
{
	$tmpname	= $_FILES['upfile']['tmp_name'];
	$realname	= $_FILES['upfile']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'ad.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_img'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','이미지는 gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$d['layout']['ad_img'] = $photo;
	}
	$tmpname	= $_FILES['upfile1']['tmp_name'];
	$realname	= $_FILES['upfile1']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'ad.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_swf'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[swf]',$fileExt))
		{
			getLink('','','플래쉬는 swf 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$d['layout']['ad_swf'] = $photo;
	}


	$d['layout']['adtype'] = $adtype;
	$d['layout']['ad_imglink'] = trim($ad_imglink);
	$d['layout']['ad_imgtarget'] = $ad_imgtarget;

	$_adfile = $g['path_layout'].$nowLayout.'/_var/_ad.txt';
	$fp = fopen($_adfile,'w');
	fwrite($fp,trim(stripslashes($adcode)));
	fclose($fp);

	@chmod($_adfile,0707);
}
if ($changeType == 'sns')
{
	$d['layout']['sns_use'] = $sns_use;
}

$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
foreach ($d['layout'] as $key => $val)
{
	fwrite($fp, "\$d['layout']['".$key."'] = \"".$val."\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);



getLink('reload','parent.','','');
?>