<div class="panel panel-default">
  <div class="panel-heading text-center open-sans"><a href="http://www.kimsq.com/" target="_blank"><span class="kf-bi-03" style="font-size:30px;"></span></a></div>


	<div class="btn-group-vertical">
		
		<div class="btn-group">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop4" type="button">
				<i class="fa fa-exchange"></i>
			</button>
			<ul aria-labelledby="btnGroupVerticalDrop4" class="dropdown-menu pull-right" role="menu">
				<?php $_i=0;foreach($_SITES['list'] as $S):?>
				<?php if($_i>9)break?>
				<li<?php if($r==$S['id']):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $S['id']?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;front=<?php echo $front?>"><i class="fa fa-globe fa-lg"></i> <?php echo $S['name']?></a></li>
				<?php $_i++;endforeach?>
			</ul>
		</div>
		
		<div class="btn-group">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button" >
				<i class="fa fa-star"></i>
			</button>
			<ul aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu pull-right" role="menu">
				<?php $_ADMPAGE = getDbArray($table['s_admpage'],'memberuid='.$my['uid'],'*','gid','asc',0,1)?>
				<?php if(db_num_rows($_ADMPAGE)):?>
				<?php while($_R=db_fetch_array($_ADMPAGE)):?>
				<li><a href="<?php echo $_R['url']?>"><i class="icon-edit pull-right"></i> <?php echo $_R['name']?></a></li>
				<?php endwhile?>
				<li class="divider"></li>
				<?php endif?>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $m?>&amp;front=bookmark"><i class="icon-edit pull-right"></i> 즐겨찾기 관리</a></li>
			</ul>
		</div>

		<div class="btn-group">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button" >
				<i class="fa fa-plus-circle"></i>
			</button>
			<ul aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu pull-right" role="menu">
				<li><a href="#"><i class="fa fa-edit fa-lg"></i> 포스트</a></li>
				<li><a href="#"><i class="fa fa-picture-o fa-lg"></i> 미디어</a></li>
				<li><a href="#"><i class="fa fa-file-text-o fa-lg"></i> 페이지</a></li>
				<li><a href="#"><i class="fa fa-user fa-lg"></i> 회원</a></li>
			</ul>
		</div>
	
		<button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="업데이트"><i class="fa fa-download"></i></button>

		<button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="컨텐츠 판매현황"><i class="fa fa-krw"></i></button>

		<div class="btn-group">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop3" type="button">
				<i class="fa fa-question-circle"></i> 
				
			</button>
			<ul aria-labelledby="" class="dropdown-menu pull-right" role="menu">
				<li><a href="#">킴스큐 소개</a></li>
				<li><a href="http://www.kimsq.com/" target="_blank">kimsQ.com</a></li>
				<li><a href="#">문서</a></li>
				<li><a href="#">지원포럼</a></li>
				<li><a href="#">커뮤니티</a></li>
			</ul>
		</div>
	
	
	
	</div>

</div>





