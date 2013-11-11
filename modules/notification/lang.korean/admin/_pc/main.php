<?php
$sort	= $sort ? $sort : 'uid';
$orderby= $orderby ? $orderby : 'desc';
$recnum	= $recnum && $recnum < 301 ? $recnum : 30;
$_WHERE	= 'uid';

if ($account) $_WHERE .= ' and site='.$account;
if ($d_regis == 1) $_WHERE .= " and d_regis<>''";
if ($d_regis == 2) $_WHERE .= " and d_regis=''";
if ($where && $keyw)
{
	if (strstr('[id]',$where)) $_WHERE .= " and ".$where."='".$keyw."'";
	else $_WHERE .= getSearchSql($where,$keyw,$ikeyword,'or');	
}

$RCD = getDbArray($table[$module.'data'],$_WHERE,'*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table[$module.'data'],$_WHERE);
$TPG = getTotalPage($NUM,$recnum);
?>



<form name="procForm" action="<?php echo $g['s']?>/" method="get">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $m?>" />
<input type="hidden" name="module" value="<?php echo $module?>" />
<input type="hidden" name="front" value="<?php echo $front?>" />

<select name="account" onchange="this.form.submit();">
<option value="">&nbsp;+ 전체사이트</option>
<option value="">---------------------------</option>
<?php $SITES = getDbArray($table['s_site'],'','*','gid','asc',0,1)?>
<?php while($S = db_fetch_array($SITES)):?>
<option value="<?php echo $S['uid']?>"<?php if($account==$S['uid']):?> selected="selected"<?php endif?>>ㆍ<?php echo $S['name']?></option>
<?php endwhile?>
</select>

<select name="d_regis" onchange="this.form.submit();">
<option value="">상태(전체)</option>
<option value="">--------</option>
<option value="1"<?php if($d_regis == 1):?> selected="selected"<?php endif?>>확인</option>
<option value="2"<?php if($d_regis == 2):?> selected="selected"<?php endif?>>미확인</option>
</select>


<select name="sort" onchange="this.form.submit();">
<option value="uid"<?php if($sort=='uid'):?> selected="selected"<?php endif?>>알림일</option>
<option value="d_read"<?php if($sort=='d_read'):?> selected="selected"<?php endif?>>확인일</option>
</select>
<select name="orderby" onchange="this.form.submit();">
<option value="desc"<?php if($orderby=='desc'):?> selected="selected"<?php endif?>>역순</option>
<option value="asc"<?php if($orderby=='asc'):?> selected="selected"<?php endif?>>정순</option>
</select>

<select name="recnum" onchange="this.form.submit();">
<?php for($i=30;$i<=300;$i=$i+30):?>
<option value="<?php echo $i?>"<?php if($i==$recnum):?> selected="selected"<?php endif?>><?php echo $i?>개</option>
<?php endfor?>
</select>
<select name="where">
<option value="message"<?php if($where=='message'):?> selected="selected"<?php endif?>>메세지</option>
<option value="frommodule"<?php if($where=='frommodule'):?> selected="selected"<?php endif?>>모듈아이디</option>
<option value="referer"<?php if($where=='referer'):?> selected="selected"<?php endif?>>URL</option>
</select>

<input type="text" name="keyw" value="<?php echo stripslashes($keyw)?>" />

<input type="submit" value="검색" />
<input type="button" value="리셋" onclick="location.href='<?php echo $g['adm_href']?>';" />

</form>




<form name="listForm" action="<?php echo $g['s']?>/" method="post">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="" />


<table border="1">
<tr>
<th><img src="<?php echo $g['img_core']?>/_public/ico_check_01.gif" class="hand" alt="" onclick="chkFlag('noti_members[]');" /></th>
<th>번호</th>
<th>보낸회원</th>
<th>받는회원</th>
<th>사이트</th>
<th>알림모듈</th>
<th>내용</th>
<th>연결URL</th>
<th>알림일시</th>
<th>확인일시</th>
</tr>
<?php while($R=db_fetch_array($RCD)):?>
<?php $_S=getUidData($table['s_site'],$R['site'])?>
<?php $_M1=$R['frommbr']?getDbData($table['s_mbrdata'],'memberuid='.$R['frommbr'],'*'):array()?>
<?php $_M2=getDbData($table['s_mbrdata'],'memberuid='.$R['mbruid'],'*')?>
<tr>
<td><input type="checkbox" name="noti_members[]" value="<?php echo $R['uid']?>" /></td>
<td><?php echo $NUM-((($p-1)*$recnum)+$_rec++)?></td>
<td>
	<?php if($_M1['memberuid']):?>
	<?php echo $_M1['nic']?>
	<img src="<?php echo $g['s']?>/_var/simbol/<?php echo $_M1['photo']?$_M1['photo']:'0.gif'?>" alt="" />
	<?php else:?>
	시스템
	<?php endif?>
</td>
<td>
	<?php echo $_M2['nic']?>
	<img src="<?php echo $g['s']?>/_var/simbol/<?php echo $_M2['photo']?$_M2['photo']:'0.gif'?>" alt="" />

</td>
<td><?php echo $_S['name']?></td>
<td><?php echo $R['frommodule']?></td>
<td><?php echo $R['message']?></td>
<td><?php echo $R['referer']?$R['referer']:'없음'?></td>
<td><?php echo getDateFormat($R['d_regis'],'Y/m/d H:i')?></td>
<td><?php echo $R['d_read']?getDateFormat($R['d_read'],'Y/m/d H:i'):'미확인'?></td>
</tr>
<?php endwhile?>
</table>

<?php if(!$NUM):?>
<div>알림이 없습니다.</div>
<?php endif?>

<div class="pagebox01">
<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
</div>	

<input type="button" value="선택/해제" onclick="chkFlag('noti_members[]');" />
<input type="button" value="삭제" onclick="actCheck('multi_delete');" />
</form>


<script type="text/javascript">
//<![CDATA[
function actCheck(act)
{
	var f = document.listForm;
    var l = document.getElementsByName('noti_members[]');
    var n = l.length;
	var j = 0;
    var i;
	var s = '';

    for (i = 0; i < n; i++)
	{
		if(l[i].checked == true)
		{
			j++;
			s += '['+l[i].value+']';
		}
	}
	if (!j)
	{
		alert('선택된 알림이 없습니다.      ');
		return false;
	}
	
	if (act == 'multi_delete')
	{
		if(confirm('정말로 삭제하시겠습니까?    '))
		{
			getIframeForAction(f);
			f.a.value = act;
			f.submit();
		}
	}
	return false;
}

//]]>
</script>
