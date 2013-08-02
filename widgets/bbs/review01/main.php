

<div class="widget_review01">
	<?php if($wdgvar['link']):?>
	<h2><a href="<?php echo $wdgvar['link']?>"><?php echo $wdgvar['title']?></a></h2>
	<?php else:?>
	<h2><?php echo $wdgvar['title']?></h2>
	<?php endif?>
	<ul>
	<?php $_RCD=getDbArray($table['bbsdata'],($wdgvar['bid']?'bbs='.$wdgvar['bid'].' and ':'').'display=1 and site='.$_HS['uid'],'*','gid','asc',$wdgvar['limit'],1)?>
	<?php while($_R=db_fetch_array($_RCD)):?>
	<?php $_thumbimg=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
	<?php $_link=getPostLink($_R)?>
	<li>
		<?php if($_thumbimg):?>
		<a href="<?php echo $_link?>"><img src="<?php echo $_thumbimg?>" width="<?php echo $wdgvar['width']?>"<?php if($wdgvar['height']):?> height="<?php echo $wdgvar['height']?>"<?php endif?> class="thumb" align="left" alt="" /></a>
		<?php endif?>
		<p>	
			<a href="<?php echo $_link?>" title="<?php echo $_R[$_HS['nametype']]?>님"><?php echo $_R['subject']?></a>
			<?php if($_R['comment']):?><span class="comment">[<?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>]</span><?php endif?>
			<?php if(getNew($_R['d_regis'],24)):?><span class="new">new</span><?php endif?>
			<span class="review"><?php echo getStrCut(str_replace('&nbsp;',' ',strip_tags($_R['content'])),$wdgvar['length'],'..')?></span>
		</p>
	</li>
	<?php endwhile?>
	</ul>
	<?php if($wdgvar['link']):?><a href="<?php echo $wdgvar['link']?>" class="more" title="더보기">more</a><?php endif?>
</div>
