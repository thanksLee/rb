<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>


<div id="content">
<?php if($d['layout']['_is_ownmain']):?>
<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
<?php if(!$d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>
<?php endif?>
<?php if($d['layout']['_is_content']) include __KIMS_CONTENT__?>
</div>

<div class="snb">
	<div class="mybox">
		<?php if($my['id']):?>
		<div class="login">
			<div class="mbrinfo">
				<div class="symbol"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=mypage&amp;page=simbol"><img src="<?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?$my['photo']:'0.gif'?>" alt="" /></a></div>
				<div class="info">
					<div class="name">
						<div class="namel"><?php echo $my[$_HS['nametype']]?>님</div>
						<div class="namer">
							<?php if($d['layout']['sns_hide']):?>
							<a href="<?php echo RW('mod=mypage')?>"><img src="<?php echo $g['img_layout']?>/btn_config.gif" alt="" /></a>
							<?php else:?>
							<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=account','소셜계정',600,650,event,true,'l');"><img src="<?php echo $g['img_layout']?>/btn_config1.gif" alt="" /></a>
							<?php endif?>
							<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><img src="<?php echo $g['img_layout']?>/btn_logout.gif" alt="" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="score"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=mypage&amp;page=point">포인트 <?php echo number_format($my['point'])?>P</a> / 가입일 <?php echo getDateFormat($my['d_regis'],'Y.m.d')?></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="tabbox">
				<div class="tp vline on" onclick="tabCheck_s(1,this,'_myMSGlayer_');">알림</div>
				<div class="tp vline" onclick="tabCheck_s(2,this,'_myMSGlayer_');">메세지<?php $_MSGNUM=getDbRows($table['s_paper'],'my_mbruid='.$my['uid']." and d_read='0'"); if($_MSGNUM):?><i>(<?php echo $_MSGNUM?>)</i><?php endif?></div>
				<div class="tp" onclick="tabCheck_s(3,this,'_myMSGlayer_');">팔로워</div>
				<div class="clear"></div>
			</div>
			<div id="_myMSGlayer_" class="lbody scrollbar01">
				<ul>
				<?php $_date=date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-30,$date['year']))?>
				<?php $_RCD=getDbArray($table['bbsdata'],'mbruid='.$my['uid'].' and site='.$s.' and comment>0 and d_regis > '.$_date,'*','d_comment','desc',5,1);?>
				<?php $_i=0;while($_R=db_fetch_array($_RCD)):$_i++?>
				<?php $_C=getDbData($table['s_comment'],"parent='bbs".$_R['uid']."'",'*')?>
				<?php $_L=getOverTime($date['totime'],$_R['d_comment'])?>
				<li>
				<a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']):?><span class="comment">(<?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>)</span><?php endif?>
				<?php if(getNew($_R['d_regis'],24)):?><span class="new">new</span><?php endif?><br />
				<span class="reply">ㄴ<?php echo $_C[$_HS['nametype']]?>님이 <?php echo $_L[1]<4?$_L[0].$lang['sys']['time'][$_L[1]].'전':getDateFormat($_R['d_last'],'Y.m.d').' 일'?>에 남김</span>
				</li>
				<?php endwhile?>
				</ul>
				<?php if(!$_i):?>
				<div class="none">
					<span>내 알림이 없습니다.</span>
					<p>내가 작성한 포스트,댓글의<br />반응을 바로바로 알려드려요</p>
				</div>
				<?php endif?>
			</div>
		</div>
		<?php else:?>
		<div class="logout">
			<div class="tabbox">
				<?php if($d['layout']['sns_hide']):?>
				<div class="np">회원 로그인</div>
				<?php else:?>
				<div class="tp vline on" onclick="tabCheck(1,this);">일반 로그인</div>
				<div class="tp" onclick="tabCheck(2,this);">소셜 로그인</div>
				<div class="clear"></div>
				<?php endif?>
			</div>
			<div id="nlogLayer" class="nlog">
				<form name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);">
				<input type="hidden" name="r" value="<?php echo $r?>" />
				<input type="hidden" name="a" value="login" />
				<div class="i1">
				<input type="text" name="id" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',0)?>" class="input" title="아이디" />
				<input type="checkbox" name="idpwsave" value="checked" class="checkbox" onclick="layoutRMBpw(this);"<?php if($_COOKIE['svshop']):?> checked="checked"<?php endif?> />아이디/비번 기억
				<div class="clear"></div>
				</div>
				<div class="i1">
				<input type="password" name="pw" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',1)?>" class="input" title="패스워드" />
				<input type="image" src="<?php echo $g['img_layout']?>/btn_login.gif" class="submit" />
				<div class="clear"></div>
				</div>
				</form>
				<div class="rbtm">
					<a href="<?php echo RW('mod=join')?>" class="b">회원가입</a> <span>|</span>
					<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=login&amp;page=idpwsearch" class="ipc">아이디/패스워드찾기</a>
				</div>
			</div>
			<div id="slogLayer" class="slog hide">
				<div class="icon">
				<?php if($d['layout']['sns_t']):?><img src="<?php echo $g['img_core']?>/_public/sns_t2.gif" alt="" title="트위터" onclick="snsCheck('t','','connect');" /><?php endif?>
				<?php if($d['layout']['sns_f']):?><img src="<?php echo $g['img_core']?>/_public/sns_f2.gif" alt="" title="페이스북" onclick="snsCheck('f','','connect');" /><?php endif?>
				<?php if($d['layout']['sns_m']):?><img src="<?php echo $g['img_core']?>/_public/sns_m2.gif" alt="" title="미투데이" onclick="snsCheck('m','','connect');" /><?php endif?>
				<?php if($d['layout']['sns_y']):?><img src="<?php echo $g['img_core']?>/_public/sns_y2.gif" alt="" title="요즘" onclick="snsCheck('y','','connect');" /><?php endif?>
				</div>
				<div class="guide">
					소셜네트워크 서비스를 통해서 로그인하시면 별도의 로그인 절차없이 회원서비스를 이용하실 수 있습니다.
				</div>
			</div>
		</div>
		<?php endif?>
	</div>
	
	<?php if($d['layout']['adtype']):?>
	<div class="banner">
	<?php if($d['layout']['adtype']==1):?><a href="<?php echo $d['layout']['ad_imglink']?>" target="<?php echo $d['layout']['ad_imgtarget']?>"><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_img']?>" width="240" alt="" /></a><?php endif?>
	<?php if($d['layout']['adtype']==2):?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_swf']?>" width="240"></embed><?php endif?>
	<?php if($d['layout']['adtype']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_ad.txt'?>
	</div>
	<?php endif?>

	<div class="hotbox">
		<div class="tabbox">
			<div class="tp vline on" onclick="tabCheck_s(1,this,'_myHOTlayer_');">많이 본 글</div>
			<div class="tp vline" onclick="tabCheck_s(2,this,'_myHOTlayer_');">댓글 많은 글</div>
			<div class="tp" onclick="tabCheck_s(3,this,'_myHOTlayer_');">추천글</div>
			<div class="clear"></div>
		</div>
		<div id="_myHOTlayer_" class="hbody">
			<ul>
			<?php $_date=date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-30,$date['year']))?>
			<?php $_RCD=getDbArray($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date,'*','hit','desc',15,1);?>
			<?php $_i=0;while($_R=db_fetch_array($_RCD)):$_i++?>
			<li><i<?php if($_i<4):?> class="emp"<?php endif?>><?php echo $_i?></i><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?></li>
			<?php endwhile?>
			</ul>
		</div>
	</div>



</div>
<div class="clear"></div>

<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
