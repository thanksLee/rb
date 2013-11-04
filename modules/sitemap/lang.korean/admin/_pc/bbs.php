<?php
$sort	= $sort ? $sort : 'gid';
$orderby= $orderby ? $orderby : 'asc';
$recnum	= $recnum && $recnum < 301 ? $recnum : 50;
$bbsque	= 'uid';

if ($where && $keyw)
{
	if (strstr('[id]',$where)) $bbsque .= " and ".$where."='".$keyw."'";
	else $bbsque .= getSearchSql($where,$keyw,$ikeyword,'or');	
}

$RCD = getDbArray($table['bbslist'],$bbsque,'*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table['bbslist'],$bbsque);
$TPG = getTotalPage($NUM,$recnum);
?>


<div id="mainbox">

	<h2>게시판 맵</h2>

	<p>
		개별 게시판별로 사이트맵을 제출할 수 있습니다.<br />
		사이트맵 주소를 복사하여 제출하세요. 게시물수는 주소줄의 마지막숫자로 조절할 수 있으며 최대 500개까지 가능합니다.<br />
	</p>

	<table>
		<?php while($_R=db_fetch_array($RCD)):?>		
		<tr>
			<td class="td1"><a href="<?php echo RW('m=bbs&bid='.$_R['id'])?>" target="_blank"><?php echo $_R['name']?>(<?php echo $_R['id']?>)</a></td>
			<td>:</td>
			<td class="td2">
				<input type="text" value="<?php echo $g['url_root']?>/?<?php if($_HS['usescode']):?>r=<?php echo $r?>&<?php endif?>m=<?php echo $module?>&bid=<?php echo $_R['id']?>&recnum=50" size="70" class="input" />
			</td>
		</tr>
		<?php endwhile?>
	</table>


	<div class="pagebox01">
	<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
	</div>	
</div>

<script type="text/javascript">
//<![CDATA[

//]]>
</script>


