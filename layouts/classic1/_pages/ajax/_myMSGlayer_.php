

[RESULT:

<?php if($type==1):?>
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
<?php endif?>

<?php if($type==2):?>
<ul>
<?php $_RCD=getDbArray($table['s_paper'],'my_mbruid='.$my['uid']." and d_read='0'",'*','uid','desc',0,1)?>
<?php while($_R=db_fetch_array($_RCD)):?>
<?php $_M=$_R['by_mbruid']?getDbData($table['s_mbrdata'],'memberuid='.$_R['by_mbruid'],'*'):array()?>
<?php $_L=getOverTime($date['totime'],$_R['d_regis'])?>
<li>
<div class="pic">
<img src="<?php echo $g['s']?>/_var/simbol/<?php echo $_M['photo']?$_M['photo']:'0.gif'?>" width="30" height="30" alt="" class="hand" onclick="getMemberLayer('<?php echo $_M['memberuid']?>',event);" />
</div>
<div class="info">
<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.papersend&iframe=Y&type=send&rcvmbr=<?php echo $_M['memberuid']?>','메세지 보내기',300,270,event,true,'b');"><?php echo getStripTags($_R['content'])?></a>
<span class="reply">(<?php echo $_M['nic']?$_M['nic']:'관리자'?>님이, <?php echo $_L[1]<3?$_L[0].$lang['sys']['time'][$_L[1]].'전':getDateFormat($_R['d_regis'],'Y.m.d ').'일'?>에 보냄)</span>
</div>
<div class="clear"></div>
</li>
<?php endwhile?>
</ul>
<?php if(!db_num_rows($_RCD)):?>
<div class="none">
	<span>새 쪽지가 없습니다.</span>
	<p>새로 도착한 쪽지를 실시간으로<br />갯수와 함께 알려드려요</p>
</div>
<?php endif?>
<?php endif?>

<?php if($type==3):?>
<table width="100%">
<?php $_RCD=getDbArray($table['s_friend'],'by_mbruid='.$my['uid'],'*','uid','desc',0,1);?>
<?php while($_R=db_fetch_array($_RCD)):?>
<?php $_M=getDbData($table['s_mbrdata'],'memberuid='.$_R['my_mbruid'],'*')?>
<?php $_L=getOverTime($date['totime'],$_R['d_regis'])?>
<tr height="40">
<td width="35">
<img src="<?php echo $g['s']?>/_var/simbol/<?php echo $_M['photo']?$_M['photo']:'0.gif'?>" width="30" height="30" alt="" class="hand" onclick="getMemberLayer('<?php echo $_M['memberuid']?>',event);" />
</td>
<td>
<a><?php echo $_M['nic']?>님</a>
<span style="display:block;font-family:dotum;font-size:11px;color:#888888;padding-top:3px;">(<?php echo $_L[1]<3?$_L[0].$lang['sys']['time'][$_L[1]].'전':getDateFormat($_R['d_regis'],'Y.m.d').'일'?>전)</span>
</td>
<td width="97">
<?php if($my['uid']==$_M['memberuid']):?>
<a class="btnGray01 plusBlue filter"><i><s>나</s></i></a>
<?php else:?>
<?php $ISF = getDbData($table['s_friend'],'my_mbruid='.$my['uid'].' and by_mbruid='.$_M['memberuid'],'uid')?>
<?php if($ISF['uid']):?>
<a href="#" class="btnGray01 plusBlue hand" onclick="followAction('friend_unfollow','<?php echo $ISF['uid']?>');"><i><s>Unfollow</s></i></a>
<?php else:?>
<?php $ISF = getDbData($table['s_friend'],'my_mbruid='.$_M['memberuid'].' and by_mbruid='.$my['uid'],'uid')?>
<a href="#" class="btnGray01 plusBlue hand" onclick="followAction('friend_follow','<?php echo $ISF['uid']?>');"><i><s>Follow</s></i></a>
<?php endif?>
<?php endif?>
</div>
</td>
</tr>
<?php endwhile?>
</table>
<?php if(!db_num_rows($_RCD)):?>
<div class="none">
	<span>팔로워가 없습니다.</span>
	<p><?php echo $my[$_HS['nametype']]?>님의 팔로워들을<br />실시간으로 알려드려요</p>
</div>
<?php endif?>
<?php endif?>


:RESULT]

