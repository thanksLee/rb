<?php $prelayout = $d['layout']['dir'].'/zone'?>


<div class="wrap">
	<div class="subsnb">
		<ul class="submenu">
		<li<?php if($_themeConfig=='detail'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=detail&amp;prelayout=<?php echo $prelayout?>">세부 설정</a></li>
		<li<?php if($_themeConfig=='front'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=front&amp;prelayout=<?php echo $prelayout?>">메인화면 설정</a></li>
		<li<?php if($_themeConfig=='ad'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=ad&amp;prelayout=<?php echo $prelayout?>">광고 설정</a></li>
		<li<?php if($_themeConfig=='sns'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=sns&amp;prelayout=<?php echo $prelayout?>">소셜 로그인</a></li>
		<li<?php if($_themeConfig=='page'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=page&amp;prelayout=<?php echo $prelayout?>">추가 페이지</a></li>
		</ul>

		<div class="info">
		- 레이아웃 : <span class="b"><?php echo getFolderName($g['path_layout'].$d['layout']['dir'])?></span><br />
		- 폴더명 : <span class="b"><?php echo $d['layout']['dir']?></span><br />
		- 최적화  : IE 7~9/FF/CR/SF/OP<br />
		- 라이선스 : RBL<br />
		- 원작자 : <a href="http://www.kimsq.com" target="_blank">김성호(세븐고)</a><br />
		</div>
	</div>
	<div id="subcontent">		
		
		<?php include  $g['path_layout'].$d['layout']['dir'].'/_admin/_'.$_themeConfig.'.php'?>

	</div>
	<div class="clear"></div>
</div>



<script type="text/javascript">
//<![CDATA[
function colorChange(f,v)
{
	if (f == 'title_color_')
	{
		if(getId('_layout_title_')) getId('_layout_title_').style.color = '#'+v;
	}
	if (f == 'title_color1_')
	{
		if(getId('_layout_title1_')) getId('_layout_title1_').style.color = '#'+v;
	}
	if (f == 'memberlink_color_')
	{
		var ele = getId('_layout_memberlink_').childNodes;
		var n = ele.length;
		var i;
		for (i = 0; i < n; i++)
		{
			if (ele[i].tagName != 'A' || ele[i].className == 'admin') continue;
			ele[i].style.color = '#'+v;
		}
	}
}
function configCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
function configCheck1(f)
{
	if (f.title.value == '')
	{
		alert('타이틀을 입력해 주세요.   ');
		f.title.focus();
		return false;
	}

	if (f.upfile.value != '')
	{
		var extarr = f.upfile.value.split('.');
		var filext = extarr[extarr.length-1].toLowerCase();
		var permxt = '[gif][jpg][jpeg][png]';

		if (permxt.indexOf(filext) == -1)
		{
			alert('gif/jpg/png 파일만 등록할 수 있습니다.    ');
			f.upfile.focus();
			return false;
		}
	}

	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
function configCheck2(f)
{
	if (f.upfile.value != '')
	{
		var extarr = f.upfile.value.split('.');
		var filext = extarr[extarr.length-1].toLowerCase();
		var permxt = '[gif][jpg][jpeg][png]';

		if (permxt.indexOf(filext) == -1)
		{
			alert('gif/jpg/png 파일만 등록할 수 있습니다.    ');
			f.upfile.focus();
			return false;
		}
	}
	if (f.upfile1.value != '')
	{
		var extarr1 = f.upfile1.value.split('.');
		var filext1 = extarr1[extarr1.length-1].toLowerCase();
		var permxt1 = '[swf]';

		if (permxt1.indexOf(filext1) == -1)
		{
			alert('swf 파일만 등록할 수 있습니다.    ');
			f.upfile1.focus();
			return false;
		}
	}
	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
//]]>
</script>

