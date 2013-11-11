<?php
function getVodCode($src)
{
	$exp1 = explode('youtube.com/embed/',$src);
	$exp2 = explode('?',$exp1[1]);
	return $exp2[0];
}
function getVodThumb($src,$what)
{
	return '//img.youtube.com/vi/'.getVodCode($src).'/'.$what.'.jpg';
}
function getVodUrl($src)
{
	return '//www.youtube.com/watch?feature=player_detailpage&v='.getVodCode($src);
}
?>