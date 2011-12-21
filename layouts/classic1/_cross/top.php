<div<?php echo $d['layout']['_bg']?>>
<div id="header">
	<div class="topline<?php if($d['layout']['_bg']):?> nobg<?php endif?>">
		<div class="wrap">
			<div id="_layout_message_" class="ltop"<?php echo $d['layout']['_message_color']?>><?php echo $d['layout']['message']?></div>
			<div id="_layout_memberlink_" class="rtop">
				<img src="<?php echo $g['img_core']?>/blank.gif" width="1" height="20" alt="" />
				<?php if($my['uid']):?>
				<?php if($my['admin']):?><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=theme&amp;prelayout=<?php echo $d['layout']['dir']?>/zone" class="admin">레이아웃 설정하기</a> | <?php endif?>
				<a href="<?php echo RW('mod=mypage')?>"<?php echo $d['layout']['_memberlink_color']?>>나의계정</a> | 
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"<?php echo $d['layout']['_memberlink_color']?>>로그아웃</a>
				<?php if(!$d['layout']['sns_hide']):?>
				<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=account','소셜계정',600,650,event,false,'l');"<?php echo $d['layout']['_memberlink_color']?>><img src="<?php echo $g['img_layout']?>/sns.png" alt="" title="소셜계정" /> SNS</a>
				<?php endif?>
				<?php else:?>
				<a href="<?php echo RW('mod=join')?>"<?php echo $d['layout']['_memberlink_color']?>>회원가입</a> | 
				<a href="<?php echo RW('mod=login')?>"<?php echo $d['layout']['_memberlink_color']?>>로그인</a>
				<?php if(!$d['layout']['sns_hide']):?>
				<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=login','소셜 로그인',350,300,event,false,'l');"<?php echo $d['layout']['_memberlink_color']?>><img src="<?php echo $g['img_layout']?>/sns.png" alt="" title="소셜 로그인" /> SNS</a>
				<?php endif?>
				<?php endif?>		
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrap">
		<div class="logo">
			<?php echo getLayoutLogo($d['layout'])?>
		</div>
		<div class="tabmenu">
			<div class="twrap">

				<ul>
				<?php if($d['layout']['homestr_use']):?>
				<li><a href="<?php echo $g['s']?>/"<?php if($_HP['id']=='main'&&!$_themeConfig):?> class="on"<?php endif?>><?php echo $d['layout']['homestr']?></a></li>
				<li class="vline"></li>
				<?php endif?>
				<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
				<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
				<li onmouseover="showM('<?php echo $_M1['uid']?>');" onmouseout="hideM('<?php echo $_M1['uid']?>');">
				<?php if($_M1['isson']):?>
				<div id="subMenuBox<?php echo $_M1['uid']?>">
				<dl>
				<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
				<?php while($_M2=db_fetch_array($_MENUS2)):?>
				<dt<?php if(in_array($_M2['id'],$_CA)):?> class="on1"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"><?php echo $_M2['name']?></a></dt>
				<?php if($_M2['isson']):?>
				<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
				<?php while($_M3=db_fetch_array($_MENUS3)):?>
				<dd><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>">ㆍ<?php echo $_M3['name']?></a></dd>
				<?php endwhile?>
				<?php endif?>
				<?php endwhile?>
				</dl>
				</div>
				<?php endif?>
				<a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"<?php if(in_array($_M1['id'],$_CA)):?> class="on"<?php endif?>><?php echo $_M1['name']?></a>
				</li>
				<li class="vline"></li>
				<?php $_i++; if($_i >= $d['layout']['menunum']) break; endwhile?>
				<?php if($_i < db_num_rows($_MENUS1)):?>
				<li onmouseover="showM('0');" onmouseout="hideM('0');">
				<div id="subMenuBox0">
				<dl>
				<?php while($_M1=db_fetch_array($_MENUS1)):?>
				<dt<?php if(in_array($_M1['id'],$_CA)):?> class="on1"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></dt>
				<?php if($_M1['isson']):?>
				<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
				<?php while($_M2=db_fetch_array($_MENUS2)):?>
				<dd><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>">ㆍ<?php echo $_M2['name']?></a></dd>
				<?php endwhile?>
				<?php endif?>
				<?php endwhile?>
				</dl>
				</div>
				
				<a href="#.">더보기 <img src="<?php echo $g['img_layout']?>/ico_more.gif" class="more" alt="" /></a>
				</li>
				<?php endif?>
				<?php if(!$_i):?>
				<li class="none">메뉴를 등록해 주세요</li>
				<?php endif?>
				</ul>


			</div>
		</div>
		<div class="search">
			<form action="<?php echo $g['s']?>/" method="get">
			<input type="hidden" name="r" value="<?php echo $r?>" />
			<input type="hidden" name="mod" value="search" />
			<input type="text" name="keyword" placeholder="통합검색" class="keyword<?php if($_keyword):?> done<?php endif?>" value="<?php echo $_keyword?>" />
			<input type="image" src="<?php echo $g['img_layout']?>/btn_search.gif" class="sbtn" alt="search" />
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>


<div id="container" class="wrap">
<?php include __KIMS_CONTAINER_HEAD__?>	
