<div id="wrap">
	<div id="header">
		<div class="logo">
			<h1><a href="<?php echo RW(0)?>"><?php echo $_HS['title']?></a></h1>
		</div>
		<div class="gnb">
			<ul>
			<li><a href="<?php echo RW(0)?>">HOME</a></li>
			<?php if($my['id']):?>
			<li><a href="<?php echo RW('mod=mypage')?>">마이페이지</a></li>
			<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=mypage&amp;page=info">정보수정</a></li>
			<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout">로그아웃</a></li>
			<?php if($my['admin']):?><li class="admin"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=filemanager&amp;front=main&amp;pwd=<?php echo $g['path_layout'].$d['layout']['dir']?>/&amp;type=php&amp;iframe=Y&amp;editmode=Y&amp;file=_main.php" target="_blank">레이아웃환경</a></li><?php endif?>
			<?php else:?>
			<li><a href="<?php echo RW('mod=mypage')?>">마이페이지</a></li>
			<li><a href="<?php echo RW('mod=join')?>">회원가입</a></li>
			<li><a href="<?php echo RW('mod=login')?>">로그인</a></li>
			<?php endif?>
			</ul>
		</div>
		<div class="lnb">
			<ul>
			<li><a href="<?php echo RW(0)?>" class="m1">HOME</a></li>
			<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
			<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
			<li onmouseover="showM('<?php echo $_M1['uid']?>');" onmouseout="hideM('<?php echo $_M1['uid']?>');">
			<?php if($_M1['isson']):?>
			<div id="subMenuBox<?php echo $_M1['uid']?>">
			<dl>
			<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
			<?php while($_M2=db_fetch_array($_MENUS2)):?>
			<dt<?php if(in_array($_M2['id'],$_CA)):?> class="selected2"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"><?php echo $_M2['name']?></a></dt>
			<?php if($_M2['isson']):?>
			<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
			<?php while($_M3=db_fetch_array($_MENUS3)):?>
			<dd<?php if(in_array($_M3['id'],$_CA)):?> class="selected3"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>">ㆍ<?php echo $_M3['name']?></a></dd>
			<?php endwhile?>
			<?php endif?>
			<?php endwhile?>
			</dl>
			</div>
			<?php endif?>
			<a href="<?php echo RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>" class="m1<?php if(in_array($_M1['id'],$_CA)):$_parent=$_M1['uid']?> selected1<?php endif?>"><?php echo $_M1['name']?></a>
			</li>
			<?php $_i++; if($_i >= $d['layout']['menunum']) break; endwhile?>
			<?php if($_i < db_num_rows($_MENUS1)):?>
			<li onmouseover="showM('0');" onmouseout="hideM('0');">
			<div id="subMenuBox0">
			<dl>
			<?php while($_M1=db_fetch_array($_MENUS1)):?>
			<dt<?php if(in_array($_M1['id'],$_CA)):$_parent=$_M1['uid']?> class="selected2"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></dt>
			<?php if($_M1['isson']):?>
			<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
			<?php while($_M2=db_fetch_array($_MENUS2)):?>
			<dd<?php if(in_array($_M2['id'],$_CA)):?> class="selected3"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>">ㆍ<?php echo $_M2['name']?></a></dd>
			<?php endwhile?>
			<?php endif?>
			<?php endwhile?>
			</dl>
			</div>
			<a href="#." class="m1">더보기 <img src="<?php echo $g['img_layout']?>/ico_more.gif" alt="" /></a>
			</li>
			<?php endif?>
			<?php if(!$_i):?>
			<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&type=menu&makemenu=Y">이 사이트는 아직 메뉴가 등록되지 않았습니다. 메뉴를 등록해주세요</a></li>
			<?php endif?>
			</ul>
			<div class="search">
			<form action="<?php echo $g['s']?>/">
			<input type="hidden" name="r" value="<?php echo $r?>" />
			<input type="hidden" name="mod" value="search" />
			<input type="text" name="keyword" value="<?php echo $_keyword?>" class="input" /> 
			<span><input type="image" src="<?php echo $g['img_layout']?>/btn_search.jpg" /></span>
			</form>
			</div>
			
		</div>
		<div class="location">
			현재위치 : <?php echo $g['location']?>
		</div>
	</div>
	<div id="container">
		<?php include __KIMS_CONTAINER_HEAD__?>
		<div class="snb">
			
		<?php foreach($d['layout']['show'] as $_pluginkey => $_pluginval):if(!$_pluginval)continue?>
		<?php include $g['path_layout'].$d['layout']['dir'].'/plugin/'.$_pluginkey.'.php'?>
		<div class="plugingap"></div>
		<?php endforeach?>

		</div>
		<div id="content">
			<?php include __KIMS_CONTENT__?>
		</div>
		<div class="clear"></div>
	</div>
	<?php include __KIMS_CONTAINER_FOOT__?>
	<div id="footer">
		<div>
		<a href="<?php echo RW('mod=agreement')?>">홈페이지 이용약관</a> <span class="split">|</span>
		<a href="<?php echo RW('mod=private')?>">개인정보 취급방침</a> <span class="split">|</span>
		<a href="<?php echo RW('mod=postrule')?>">게시물 게재원칙</a> <span class="split">|</span>
		<a href="http://validator.w3.org/check?url=referer" target="_blank" title="W3C XHTML 1.0 VALIDATION">XHTML 1.0 VALIDATION</a>
		</div>
		<address>
		Copyrights © <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?> All Rights Reserved. Powered by kimsQ-RB (Excute Time <?php echo round(getNowTimes()-$g['time_start'],3)?>)
		</address>
	</div>
</div>
