<?php
include $g['path_module'].$module.'/var/var.php';
$SITES = getDbArray($table['s_site'],'','*','gid','asc',0,1);

$sort	= $sort ? $sort : 'gid';
$orderby= $orderby ? $orderby : 'asc';
$recnum	= $recnum && $recnum < 200 ? $recnum : 20;

$_WHERE = 'type=1';
if ($account) $_WHERE .= ' and site='.$account;
if ($album) $_WHERE .= " and category='".$album."'";
if ($where && $keyw)
{
	if (strstr('[mbruid]',$where)) $_WHERE .= " and ".$where."='".$keyw."'";
	else $_WHERE .= getSearchSql($where,$keyw,$ikeyword,'or');	
}
$RCD = getDbArray($table[$module.'data'],$_WHERE,'*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table[$module.'data'],$_WHERE);
$TPG = getTotalPage($NUM,$recnum);

$_albums = explode(',',$d['mediaset']['category1']);
?>

<?php if(!$_isDragScript):?>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/core.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/events.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/css.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/coordinates.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/drag.js"></script>
<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/dragsort.js"></script>
<script type="text/javascript">
//<![CDATA[
var dragsort = ToolMan.dragsort();
//]]>
</script>
<?php endif?>

<div id="catebody">

	<form action="<?php echo $g['s']?>/" method="post" onsubmit="return categoryGid(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="category_gid" />
	<input type="hidden" name="category" value="category1" />

	<div id="category">
		<div class="title">
			<span class="add">
			<a href="#." title="앨범 추가" onclick="AddAlbumLayer('category1',event);"><img src="<?php echo $g['img_core']?>/_public/btn_add.gif" alt="" /></a>
			<input type="image" src="<?php echo $g['img_core']?>/_public/btn_save.gif" title="순서저장" />
			</span>
			사진 앨범
		</div>
		<?php if($d['mediaset']['category1']):?>
		<div class="tgap"></div>
		<ul id="menuorder">
		<?php foreach($_albums as $_ab):?>
		<?php if(!trim($_ab))continue?>
		<?php $_num=getDbRows($table[$module.'data'],"type=1 and category='".$_ab."'")?>
		<li>
		<input type="checkbox" name="_albums[]" value="<?php echo $_ab?>" checked="checked" />
		<table width="100%">
		<tr class="layout1">
		<td class="ltd">
			<a href="#." onclick="crLayer('사진등록','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&mod=photo&album=<?php echo urlencode($_ab)?>','iframe',728,580,'15%');"><img src="<?php echo $g['img_core']?>/_public/ico_folder_0<?php echo $_num?2:1?>.gif" alt="사진등록" /></a>
			<a href="<?php echo $g['adm_href']?>&amp;album=<?php echo urlencode($_ab)?>" class="<?php if($album==$_ab):?> on<?php endif?>"> <?php echo $_ab?> <i>(<?php echo number_format($_num)?>)</i></a>
		</td>
		<td class="rtd">
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&a=category_delete&category=category1&amp;name=<?php echo urlencode($_ab)?>" onclick="return hrefCheck(this,true,'앨범내의 파일까지 모두 삭제됩니다.\n정말로 삭제하시겠습니까?');"><img src="<?php echo $g['img_core']?>/_public/btn_del_s01.gif" alt="삭제" title="삭제" /></a>
		</td>
		</tr>
		</table>
		</li>
		<?php endforeach?>
		</ul>
		<?php else:?>
		<div class="none">등록된 앨범이 없습니다.</div>
		<?php endif?>
	</div>
	</form>


	<div id="catinfo">
		<div class="title">
			<div class="xleft">
			<?php if($type == 'upload'):?>
				사진등록
			<?php else:?>
				앨범<?php if($album):?> &gt; <?php echo $album?><?php endif?>
			<?php endif?>

				<form action="<?php echo $g['s']?>/" method="get">
				<input type="hidden" name="r" value="<?php echo $r?>" />
				<input type="hidden" name="m" value="<?php echo $m?>" />
				<input type="hidden" name="module" value="<?php echo $module?>" />
				<input type="hidden" name="front" value="<?php echo $front?>" />
				<input type="hidden" name="album" value="<?php echo $album?>" />

				<select name="account" class="account" onchange="this.form.submit();">
				<option value="">&nbsp;+ 전체사이트</option>
				<option value="">---------------------------</option>
				<?php while($S = db_fetch_array($SITES)):?>
				<option value="<?php echo $S['uid']?>"<?php if($account==$S['uid']):?> selected="selected"<?php endif?>>ㆍ<?php echo $S['name']?></option>
				<?php endwhile?>
				<?php if(!db_num_rows($SITES)):?>
				<option value="">등록된 사이트가 없습니다.</option>
				<?php endif?>
				</select>
						
				<select name="sort" onchange="this.form.submit();">
				<option value="gid"<?php if($sort=='gid'):?> selected="selected"<?php endif?>>등록일</option>
				<option value="down"<?php if($sort=='down'):?> selected="selected"<?php endif?>>다운</option>
				<option value="size"<?php if($sort=='size'):?> selected="selected"<?php endif?>>사이즈</option>
				</select>
				<select name="orderby" onchange="this.form.submit();">
				<option value="desc"<?php if($orderby=='desc'):?> selected="selected"<?php endif?>>역순</option>
				<option value="asc"<?php if($orderby=='asc'):?> selected="selected"<?php endif?>>정순</option>
				</select>

				<select name="recnum" onchange="this.form.submit();">
				<option value="20"<?php if($recnum==20):?> selected="selected"<?php endif?>>20개</option>
				<option value="35"<?php if($recnum==35):?> selected="selected"<?php endif?>>35개</option>
				<option value="50"<?php if($recnum==50):?> selected="selected"<?php endif?>>50개</option>
				<option value="75"<?php if($recnum==75):?> selected="selected"<?php endif?>>75개</option>
				<option value="90"<?php if($recnum==90):?> selected="selected"<?php endif?>>90개</option>
				</select>
				<select name="where">
				<option value="name"<?php if($where=='name'):?> selected="selected"<?php endif?>>파일명</option>
				<option value="caption"<?php if($where=='caption'):?> selected="selected"<?php endif?>>캡션</option>
				</select>

				<input type="text" name="keyw" value="<?php echo stripslashes($keyw)?>" class="input1" />

				<input type="submit" value="검색" class="btnblue" />
				<input type="button" value="리셋" class="btngray" onclick="location.href='<?php echo $g['adm_href']?>';" />

				</form>

			</div>
			<div class="xright">
				<?php if($album):?><a href="#." onclick="crLayer('사진등록','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&mod=photo&album=<?php echo urlencode($album)?>','iframe',728,580,'15%');">사진등록</a><?php endif?>
			</div>
			<div class="clear"></div>
		</div>
		

		<form name="listForm" action="<?php echo $g['s']?>/" method="post">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="" />

		<table width="100%">
		<tr>
		<td>
		<div class="photobox">

			<?php while($_R=db_fetch_array($RCD)):?>
			<div class="photo">
				<div class="pic" style="background:url('<?php echo $_R['width']?$_R['url'].$_R['category'].'/thumb2_'.$_R['name']:$_R['link']?>') center center no-repeat;" onmouseover="imgShow('<?php echo $_R['width']?$_R['url'].$_R['category'].'/thumb1_'.$_R['name']:$_R['link']?>',event);" onmouseout="imgHide();"><input type="checkbox" name="photo_members[]" value="<?php echo $_R['uid']?>" /></div>
				<div class="name"><input type="text" name="photo_names_<?php echo $_R['uid']?>" value="<?php echo str_replace('.'.$_R['ext'],'',$_R['name'])?>" title="<?php echo $_R['name']?>" /></div>
				<div class="info">(<?php if($_R['width']):?><?php echo number_format($_R['width'])?>*<?php echo number_format($_R['height'])?> / <?php echo getSizeFormat($_R['size'],1)?><?php else:?>LINK<?php endif?> / <?php echo strtoupper($_R['ext'])?>)</div>
			</div>
			<?php endwhile?>
			
			<div class="clear"></div>
		</div>
		</td>
		</tr>
		</table>

		<?php if(!$NUM):?>
		<div class="none">등록된 사진이 없습니다.</div>
		<?php endif?>	
		<div class="pagebox01">
		<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
		</div>
		<div class="submit">
		<input type="button" value="선택/해제" class="btngray" onclick="chkFlag('photo_members[]');" />
		<input type="button" value="삭제" class="btnblue" onclick="actCheck('multi_delete');" />
		<input type="button" value="수정" class="btnblue" onclick="actCheck('multi_update');" />
		
		&nbsp;&nbsp;&nbsp;

		<select name="move_category">
		<option value="">&nbsp;+ 앨범선택</option>
		<?php foreach($_albums as $_ab):?>
		<?php if(!trim($_ab))continue?>
		<option value="<?php echo trim($_ab)?>">ㆍ<?php echo trim($_ab)?></option>
		<?php endforeach?>
		</select>

		<input type="button" value="이동" class="btnblue" onclick="actCheck('multi_move');" />

		</div>

		</form>

	</div>
	<div class="clear"></div>
</div>


<div id="hImg"></div>


<script type="text/javascript">
//<![CDATA[
function imgShow(im,e)
{
	var xy = getEventXY(e);

	getId('hImg').style.display = 'block';
	getId('hImg').style.top = parseInt(xy.y) + 'px'
	getId('hImg').style.left = (parseInt(xy.x) - 150) + 'px';

	if (im.indexOf('.swf') != -1)
	{
		getId('hImg').innerHTML = '<div style="background:#ffffff;border:#000000 solid 4px;"><embed src="'+im+'" style="padding:5px;"></embed></div>';
	}
	else {
		getId('hImg').innerHTML = '<div style="background:#ffffff;border:#000000 solid 4px;"><img src="'+im+'" style="padding:5px;" /></div>';
	}
}
function imgHide()
{
	getId('hImg').style.display = 'none';
}
function actCheck(act)
{
	var f = document.listForm;
    var l = document.getElementsByName('photo_members[]');
    var n = l.length;
	var j = 0;
    var i;

    for (i = 0; i < n; i++)
	{
		if(l[i].checked == true)
		{
			j++;
		}
	}
	if (!j)
	{
		alert('선택된 사진이 없습니다.      ');
		return false;
	}
	if (act == 'multi_delete')
	{
		if (confirm('정말로 삭제하시겠습니까?        '))
		{
			getIframeForAction(f);
			f.a.value = act;
			f.submit();
		}
	}
	if (act == 'multi_update')
	{
		if (confirm('정말로 수정하시겠습니까?        '))
		{
			getIframeForAction(f);
			f.a.value = act;
			f.submit();
		}
	}
	if (act == 'multi_move')
	{
		if (f.move_category.value == '')
		{
			alert('이동할 앨범을 선택해 주세요.   ');
			f.move_category.focus();
			return false;
		}
		if (confirm('정말로 수정하시겠습니까?        '))
		{
			getIframeForAction(f);
			f.a.value = act;
			f.submit();
		}
	}

	return false;
}

function categoryGid(f)
{
	getIframeForAction(f);
	return true;
}
function AddAlbumLayer(fd,e)
{
	var xy = getEventBoxPos(e);
	var t = xy.y + 20;
	var l = xy.x - 30;
	var html = '';
	html += '<div id="_modal_on_" style="position:absolute;z-index:10001;top:'+(t-7)+'px;left:'+(l+5)+'px;width:300px;height:140px;background:#ffffff;border:#cccccc solid 2px;padding:10px;">';
	html += '<div style="border-bottom:#dfdfdf solid 1px;padding:0 0 7px 2px;color:#666666;"><b>사진앨범 만들기</b><img src="<?php echo $g['img_module_admin']?>/btn_close.gif" alt="닫기" style="position:relative;left:185px;top:2px;cursor:pointer;" onclick="AddAlbumLayerClose();" /></div>';
	html += '<form action="<?php echo $g['s']?>/" method="post" onsubmit="return AddAlbumRcheck(this);">';
	html += '<input type="hidden" name="r" value="<?php echo $r?>" />';
	html += '<input type="hidden" name="m" value="<?php echo $module?>" />';
	html += '<input type="hidden" name="a" value="category_add" />';
	html += '<input type="hidden" name="category" value="'+fd+'" />';
	html += '<div style="padding:20px 0 20px 0;color:#666666;font-size:11px;font-family:dotum;">새로만들 앨범을 입력해 주세요.</div>';
	html += '<input type="text" name="name" id="_category_name" class="input" value="" size="25" />';
	html += ' <input type="submit" value=" 만들기 " class="btnblue" /> <input type="button" value="취소" class="btngray" onclick="AddAlbumLayerClose();" /></form>';
	html += '</div>';
	getId('_overLayer_').innerHTML = html;
	getId('_overLayer_').className = '';
	getId('_category_name').focus();
}
function AddAlbumLayerClose()
{
	getId('_overLayer_').className = 'hide';
	_modal_setting = false;
}
function AddAlbumRcheck(f)
{
	getIframeForAction(f);
	if (f.name.value == '')
	{
		alert('앨범명을 입력해 주세요.   ');
		f.name.focus();
		return false;
	}
	return true;
}
if(getId('menuorder')) dragsort.makeListSortable(getId("menuorder"));
//]]>
</script>