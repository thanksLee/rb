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
			<?php else:?>
			<li><a href="<?php echo RW('mod=mypage')?>">마이페이지</a></li>
			<li><a href="<?php echo RW('mod=join')?>">회원가입</a></li>
			<li><a href="<?php echo RW('mod=login')?>">로그인</a></li>
			<?php endif?>
			</ul>
		</div>
		<div class="lnb">
			<ul>
			<li<?php if(!$_CA[0]&&!$mod):?> class="selected1"<?php endif?>><a href="<?php echo RW(0)?>" class="m1">HOME</a></li>
			<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
			<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
			<li<?php if(in_array($_M1['id'],$_CA)):?> class="selected1"<?php endif?> onmouseover="showM('<?php echo $_M1['uid']?>');" onmouseout="hideM('<?php echo $_M1['uid']?>');">
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
			<a href="<?php echo RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>" class="m1"><?php echo $_M1['name']?></a>
			</li>
			<?php $_i++; if($_i >= $d['layout']['menunum']) break; endwhile?>
			<?php if($_i < db_num_rows($_MENUS1)):?>
			<li onmouseover="showM('0');" onmouseout="hideM('0');">
			<div id="subMenuBox0">
			<dl>
			<?php while($_M1=db_fetch_array($_MENUS1)):?>
			<dt<?php if(in_array($_M1['id'],$_CA)):?> class="selected2"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></dt>
			<?php if($_M1['isson']):?>
			<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
			<?php while($_M2=db_fetch_array($_MENUS2)):?>
			<dd<?php if(in_array($_M2['id'],$_CA)):?> class="selected3"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>">ㆍ<?php echo $_M2['name']?></a></dd>
			<?php endwhile?>
			<?php endif?>
			<?php endwhile?>
			<?php if($my['admin']):?><dt class="selected3"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=layout&amp;front=main&amp;layout=<?php echo $d['layout']['dir']?>&amp;type=php" target="_blank">더보기 설정</a></dt><?php endif?>
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
			<input type="submit" value="검색" class="btnblue" />
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

			<div class="photo">
				<div class="tt">최근사진</div>
				<?php $_RCD=getDbArray($table['s_upload'],'site='.$s." and type=2 and ext='jpg'",'*','gid','asc',6,1)?>
				<?php for($i = 0; $i < 6; $i++):?>
				<?php $_R=db_fetch_array($_RCD)?>
				<div class="pic<?php if($i==2||$i==5):?> nomargin<?php endif?>">
					<?php if($_R['uid']):?>
					<a href="<?php echo getCyncUrl($_R['cync'])?>"><img src="<?php echo $_R['url'].$_R['folder'].'/'.$_R['thumbname']?>" alt="" title="<?php echo $_R['caption']?$_R['caption']:$_R['name']?>" /></a>
					<?php else:?>
					<img src="<?php echo $g['img_core']?>/blank.gif" alt="" />
					<?php endif?>
				</div>
				<?php endfor?>
				<div class="clear"></div>
			</div>

			<div class="post">
				<div class="tt">최근포스트</div>
				<ul>
				<?php $_RCD=getDbArray($table['bbsdata'],'display=1 and site='.$s,'*','gid','asc',5,1)?>
				<?php while($_R=db_fetch_array($_RCD)):?>
				<li>
					<a href="<?php echo getPostLink($_R)?>" title="<?php echo $_R[$_HS['nametype']]?>님"><?php echo $_R['subject']?></a>
					<?php if($_R['comment']):?><span class="comment">[<?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>]</span><?php endif?>
					<?php if($_R['trackback']):?><span class="trackback">[<?php echo $_R['trackback']?>]</span><?php endif?>
					<?php if(getNew($_R['d_regis'],24)):?><span class="new">new</span><?php endif?>
				</li>
				<?php endwhile?>
				<?php if(!db_num_rows($_RCD)):?><li class="none"></li><?php endif?>
				</ul>
			</div>
			<div class="post">
				<div class="tt">최근댓글</div>
				<ul>
				<?php $_RCD=getDbArray($table['s_comment'],'display=1 and site='.$s,'*','uid','asc',5,1)?>
				<?php while($_R=db_fetch_array($_RCD)):?>
				<li>
					<a href="<?php echo getCyncUrl($_R['cync'].',CMT:'.$_R['uid'])?>#CMT" title="<?php echo $_R[$_HS['nametype']]?>님"><?php echo $_R['subject']?></a>
					<?php if($_R['oneline']):?><span class="comment">[<?php echo $_R['oneline']?>]</span><?php endif?>
					<?php if(getNew($_R['d_regis'],24)):?><span class="new">new</span><?php endif?>
				</li>
				<?php endwhile?>
				<?php if(!db_num_rows($_RCD)):?><li class="none"></li><?php endif?>
				</ul>
			</div>

		</div>
		<div id="content">
			<?php include __KIMS_CONTENT__?>
		</div>
		<div class="clear"></div>
	</div>
	<?php include __KIMS_CONTAINER_FOOT__?>
</div>
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