<div id="header">
	<div class="topbox"<?php echo  $d['layout']['_titlebg']?>>
		<div class="wrap">
			<div class="logo">
				<?php echo getLayoutLogo($d['layout'])?>
			</div>
			<div class="clear"></div>
			<div class="logoside">
				<?php if($d['layout']['shortcut']):?>
				<ul id="_layout_shortcut_">
				<?php $d['layout']['_shortcut']=explode(',',$d['layout']['shortcut'])?>
				<?php foreach($d['layout']['_shortcut'] as $_val):if(!$_val)continue?>
				<li<?php if($_shortcut==$_val):?> class="on"<?php echo $d['layout']['_shortcut_bg']?><?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_shortcut=<?php echo urlencode($_val)?>"<?php echo $d['layout']['_shortcut_color'.($_shortcut==$_val?1:'')]?>><?php echo $_val?></a></li>
				<?php endforeach?>
				</ul>
				<?php endif?>
			</div>
			<div class="search">
				<div id="_layout_memberlink_" class="member">
					<img src="<?php echo $g['img_core']?>/blank.gif" width="1" height="20" alt="" />
					<?php if($my['uid']):?>
					<?php if($my['admin']):?><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=detail&amp;prelayout=<?php echo $d['layout']['dir']?>/zone" class="admin">설정</a> |  
					<?php endif?>
					<a href="<?php echo RW('mod=mypage')?>"<?php echo $d['layout']['_memberlink_color']?>>나의계정</a> | 
					<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"<?php echo $d['layout']['_memberlink_color']?>>로그아웃</a>
					<?php if($d['layout']['sns_use']):?>
					<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=account','소셜계정',600,650,event,false,'l');"<?php echo $d['layout']['_memberlink_color']?>><img src="<?php echo $g['img_layout']?>/sns.png" alt="" title="소셜계정" /> SNS</a>
					<?php endif?>
					<?php else:?>
					<a href="<?php echo RW('mod=join')?>"<?php echo $d['layout']['_memberlink_color']?>>회원가입</a> | 
					<a href="<?php echo RW('mod=login')?>"<?php echo $d['layout']['_memberlink_color']?>>로그인</a>
					<?php if($d['layout']['sns_use']):?>
					<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=login','소셜 로그인',350,300,event,false,'l');"<?php echo $d['layout']['_memberlink_color']?>><img src="<?php echo $g['img_layout']?>/sns.png" alt="" title="소셜 로그인" /> SNS</a>
					<?php endif?>
					<?php endif?>
				</div>

				<form action="<?php echo $g['s']?>/">
				<input type="hidden" name="r" value="<?php echo $r?>" />
				<input type="hidden" name="mod" value="search" />
				<input type="text" name="keyword" class="keyword<?php if($_keyword):?> done<?php endif?>" value="<?php echo $_keyword?>" />
				<input type="image" src="<?php echo $g['img_layout']?>/btn_search.gif" class="sbtn" alt="search" />
				</form>
			</div>
		</div>
	</div>
	<div class="btmbox">
		<div class="wrap">
			<div class="title">
				<?php if($_themeConfig):?>
				<h2>레이아웃 설정</h2>
				<?php else:?>
				<h2><?php echo $d['layout']['subtitle']?></h2>
				<?php endif?>
			</div>
			<div class="tabmenu">
				<?php if($d['layout']['category']):?>
				<ul>
				<li<?php if(!$cat):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;c=<?php echo $c?>">All</a></li>
				<?php $d['layout']['_category']=explode(',',$d['layout']['category'])?>
				<?php foreach($d['layout']['_category'] as $_val):if(!$_val)continue?>
				<li<?php if($cat==$_val):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;c=<?php echo $c?>&amp;cat=<?php echo urlencode($_val)?>"><?php echo $_val?></a></li>
				<?php endforeach?>
				</ul>
				<?php endif?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>


<div id="container">
	<div class="wrap">
	<?php include __KIMS_CONTAINER_HEAD__?>