


<div id="mjointbox">

	<div class="title">
		이 위젯(<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)을 추가하시겠습니까?
	</div>


	<div class="wg">
	<script src="http://widgetprovider.daum.net/view?url=http://widgetcfs1.daum.net/xml/10/widget/2009/05/25/04/20/4a199dec61a49.xml&&width=166&height=270&widgetId=408&scrap=1" type="text/javascript"></script>
	</div>

	<div class="btnbox">
	<?php if ($isWcode == 'Y'):?>
	<input type="button" value="위젯코드" class="btnblue" onclick="widgetCode();" />
	<?php else :?>
	<input type="button" value="위젯추가" class="btnblue" onclick="getWidgetCode();" />
	<?php endif?>
	</div>
</div>

<style type="text/css">
#mjointbox {}
#mjointbox .wg {text-align:center;}
#mjointbox .title {border-bottom:#dfdfdf dashed 1px;padding:0 0 10px 0;margin:0 0 20px 0;}
#mjointbox .btnbox {text-align:center;padding:20px 0 0 0;margin:20px 0 0 0;border-top:#dfdfdf dashed 1px;}
</style>




<script type="text/javascript">
//<![CDATA[
var RB_widgetCode;
function widgetCode()
{
	var widgetName = "<?php echo $swidget?>";
	var widgetInfo = "";

	RB_widgetCode = "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>";
	OpenWindow('./?system=popup.widgetcode&iframe=Y');
}
function getWidgetCode()
{
	<?php if(!$option):?>
	var i;
	var n = 0;

    for (i=0; i<opener.maxTiles; i++)
	{
        if (opener.moveObject[i].style.display=='block')
		{
			n = i+1;
        }
    }
	<?php else:?>
	var n = <?php echo $dropfield?>;
	<?php endif?>

	<?php if(!$option):?>
	opener.createTile('166px','270px','0px','0px');
	<?php endif?>

	opener.blocktitle[n] = "사다리게임";
	opener.blockarray[n] = "<?php echo $swidget?>";
	opener.getId('wtitle'+n).innerHTML = opener.blocktitle[n];
	top.close();
	return false;
}
//]]>
</script>

