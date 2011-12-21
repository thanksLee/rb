<div id="adminControl">
<div class="abox">
<div class="aleft">
<ul>
<li><a href="http://www.kimsq.com/" target="_blank"><img src="<?php echo $g['img_core']?>/_public/ico_rb.gif" class="rb" alt="RB" title="kimsQ-Rb <?php echo $d['admin']['version']?>" /></a></li>
<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>"><?php echo $lang['top']['home']?></a></li>
<li><a href="<?php echo RW('m=admin')?>"><?php echo $lang['top']['admin']?></a> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;type=editmode"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" title="<?php echo $lang['top']['desk']?>" class="deskedit" /></a></li>
<li><a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=site','',800,500,'',false,'r');"><?php echo $lang['top']['site']?></a> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=home&amp;type=makesite"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" title="<?php echo $lang['top']['newsite']?>" /></a></li>
<li><a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=menu','',800,500,'',false,'r');"><?php echo $lang['top']['menu']?></a> <a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=menu&amp;makemenu=Y','',800,500,'',false,'r');"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" title="<?php echo $lang['top']['newmenu']?>" /></a></li>
<li><a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=page','',800,500,'',false,'r');"><?php echo $lang['top']['page']?></a> <a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=pageadd','',800,500,'',false,'r');"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" title="<?php echo $lang['top']['newpage']?>" /></a></li>
<?php if(!$system):?>
<?php if($_HM['uid']):?>
<li><a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.menu&amp;_menu=<?php echo $_HM['uid']?>','',800,500,'',false,'r');" class="editpage" title="MENUKEY:<?php echo $_HM['uid']?>"><?php echo $lang['top']['edit']?></a> <a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=menu&amp;cat=<?php echo $_HM['uid']?>','',800,500,'',false,'r');" title="<?php echo $lang['top']['property']?>"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" /></a></li>
<?php elseif($_HP['uid']):?>
<li><a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.page&amp;_page=<?php echo $_HP['uid']?>','',800,500,'',false,'r');" class="editpage"><?php echo $lang['top']['edit']?></a> <a href="#" onclick="__getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=pageadd&amp;uid=<?php echo $_HP['uid']?>','',800,500,'',false,'r');" title="<?php echo $lang['top']['property']?>"><img src="<?php echo $g['img_core']?>/_public/btn_add_01.gif" alt="" /></a></li>
<?php endif?>
<?php else:?>
<li><?php echo $lang['top']['edit']?></li>
<?php endif?>
<li>
<a title="Editor" class="hand b" onclick="OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.editor&iframe=Y');" />E</a>ㆍ<a title="Widget" class="hand b" onclick="OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.widget&iframe=Y&isWcode=Y');" />W</a>
</li>
<li class="noline"></li>
</ul>
</div>
<div class="aright">
<div id="_adminBox_" class="amenu">
<div class="amenubox adminbox">
<ol>
<li class="tx nx tline"><?php echo $my['name']?></li>
<li class="tx nx uline"><?php echo $my['id']?> (<?php echo $my['uid']==1?$lang['top']['admin1']:$lang['top']['admin2']?>)</li>
<li class="tx nx"><i><?php echo $lang['top']['logtime']?></i></li>
<li class="tx nx uline"><i><?php echo getDateFormat($my['last_log'],'Y.m.d H:i')?></i></li>
<li class="tx nx"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><?php echo $lang['top']['logout']?></a></li>
</ol>
</div>
</div>

<div id="_amenuBox_" class="amenu">
<div class="amenubox">
<ol>
<li class="tx"><?php echo $lang['top']['shorttitle']?></li>
<li>ㆍ<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=bbs"><?php echo $lang['top']['shortboard']?></a></li>
<li>ㆍ<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=member"><?php echo $lang['top']['shortmember']?></a></li>
<li>ㆍ<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=counter"><?php echo $lang['top']['shortcounter']?></a></li>
<li class="tx"><?php echo $lang['top']['mybook']?><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;front=bookmark"><img src="<?php echo $g['img_core']?>/_public/btn_add.gif" alt="" /></a></li>
<?php $_ADMPAGE=getDbArray($table['s_admpage'],'memberuid='.$my['uid'],'*','gid','asc',0,1)?>
<?php while($_R=db_fetch_array($_ADMPAGE)):?>
<li>ㆍ<a href="<?php echo $_R['url']?>"><?php echo $_R['name']?></a></li>
<?php endwhile?>
<?php if(!db_num_rows($_ADMPAGE)):?><li>ㆍ<?php echo $lang['top']['none']?></li><?php endif?>
</ol>
</div>
</div>
<ul>
<li class="symbol"><img src="<?php if($my['photo']):?><?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?><?php else:?><?php echo $g['img_core']?>/_public/ico_user.gif<?php endif?>" width="18" height="18" alt="" /></li>
<li class="adminname"><a class="hand" onclick="toolCheck0();"><?php echo sprintf($lang['top']['adminname'],$my[$_HS['nametype']])?></a></li>
<li class="arrow"><img src="<?php echo $g['img_core']?>/_public/ico_under_01.gif" id="_arr_icon_" width="5" height="3" alt="" /></li>
<li class="tool"><img src="<?php echo $g['img_core']?>/_public/ico_admintool.gif" id="_tool_icon_" width="17" height="18" alt="" onclick="toolCheck1(this);" /></li>
</ul>
</div>
<div class="clear"></div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
function __getLayerBox(url,title,w,h,e,ar,direction)
{
	<?php if($d['admin']['pannellink']):?>getLayerBox(url+'&amp;iframe=Y',title,w,h,e,ar,direction);<?php else:?>goHref(url);<?php endif?>
}
function toolCheck0()
{

	if(getId('_adminBox_').style.display == 'block')
	{
		getId('_adminBox_').style.display = 'none';
		getId('_arr_icon_').src = rooturl+'/_core/image/_public/ico_under_01.gif';
		getId('_arr_icon_').style.background = 'transparent';
	}
	else
	{
		getId('_adminBox_').style.display = 'block';
		getId('_arr_icon_').src = rooturl+'/_core/image/_public/ico_under.gif';
		getId('_arr_icon_').style.background = '#ffffff';
	}
	if(getId('_tool_icon_').src.indexOf('_on.')!=-1)
	{
		getId('_tool_icon_').src=getId('_tool_icon_').src.replace('_on.','.');
		getId('_tool_icon_').style.background = 'transparent';
		getId('_amenuBox_').style.display = 'none';
	}
}
function toolCheck1(obj)
{

	if(obj.src.indexOf('_on.')!=-1)
	{
		obj.src=obj.src.replace('_on.','.');
		obj.style.background = 'transparent';
		getId('_amenuBox_').style.display = 'none';
	}
	else
	{
		obj.src=obj.src.replace('.','_on.');
		obj.style.background = '#ffffff';
		getId('_amenuBox_').style.display = 'block';
	}
	if(getId('_adminBox_').style.display == 'block')
	{
		getId('_adminBox_').style.display = 'none';
		getId('_arr_icon_').src = rooturl+'/_core/image/_public/ico_under_01.gif';
		getId('_arr_icon_').style.background = 'transparent';
	}
}
document.body.style.backgroundPosition = 'left 30px';
//]]>
</script>
