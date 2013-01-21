<?php
function LIB_getContents($str,$html)
{
	// 20120709 타이니님 제공
	if ($html == 'HTML')
	{
		$pattern = array 
		(
			"'<script[^>]*?>.*?</script>'si",
			"'<style[^>]*?>.*?</style>'si",
			"'<meta[^>]*?>'si"
		);      

		$str = str_replace('<A href=','<a target="_blank" href=',$str);
		$str = str_replace('<a href=','<a target="_blank" href=',$str);
		$str = str_replace('<a target="_blank" href="#','<a href="#',$str);
		$str = str_replace(' target="_blank">','>',$str);
		$str = str_replace('< param','<param',$str);
		$str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$str);
		$str = preg_replace($pattern,'',$str);

		$onAttributes = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavaible', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragdrop', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterupdate', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmoveout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');        
		$str = preg_replace('/<(.*?)>/ie', "'<' . preg_replace(array('/javascript:[^\"\']*/i', '/(" . implode('|', $onAttributes) . ")[ \\t\\n]*=/i', '/\s+/'), array('', '', ' '), stripslashes('\\1')) . '>'", $str);
		$str = str_replace('imgOrignWin(this.src)=""','onclick="imgOrignWin(this.src);"',$str);
		$str = str_replace('imgorignwin(this.src)=""','onclick="imgOrignWin(this.src);"',$str);
		if ($GLOBALS['my']['admin'])
		{
			$mat = '<div class="sysMsgBox"><img src="'.$GLOBALS['g']['img_core'].'/_public/ico_notice.gif" alt="" />'.$GLOBALS['lang']['sys']['sysmsg'].'</div>';
			$str = preg_replace("#(\<(embed|object)[^\>]*)\>(\<\/(embed|object)\>)?#i",$mat,$str);
		}
	}
	else {
		$str = str_replace('<','&lt;',$str);
		$str = str_replace('>','&gt;',$str);
		$str = str_replace('&nbsp;','&amp;nbsp;',$str);
		$str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$str);
		$str = nl2br($str);
	}
	return $str;
}
?>