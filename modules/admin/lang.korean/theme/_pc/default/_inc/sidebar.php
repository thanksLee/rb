<div class="visible-lg" style="margin-right:-15px;height:100%;">

	<!-- 상단로고  -->
	<div>
		<div class="btn-group">
			<button class="btn btn-link dropdown-toggle btn-lg" data-toggle="dropdown" style="font-size:18px;color:#444;text-decoration:none" type="button">
				<span class="kf-bi-01"></span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#"><i class="fa fa-check"></i> 킴스큐 어드민 모드</a></li>
				<li><a href="#">사용자 테마 관리1</a></li>
				<li><a href="#">사용자 테마 관리2</a></li>
				<li><a href="#">사용자 테마 관리3</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=market&amp;front=pack&amp;type=package"<i class="fa fa-plus"></i> 패키지 추가</a></li>
			</ul>
		</div>
		<!-- Single button -->
		<div class="btn-group pull-right">
			<button class="btn btn-link dropdown-toggle btn-lg" data-toggle="dropdown" style="font-size:18px;color:#444;text-decoration:none" type="button">
				<i class="fa fa-user"></i>
				<span class="badge">0</span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#"><i class="fa fa-user"></i> 프로필관리</a></li>
				<li><a href="#"><i class="fa fa-clock-o"></i> 접속기록</a></li>
				<li><a href="#"><i class="fa fa-lock"></i> 잠그기</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><i class="fa fa-sign-out"></i> 로그아웃</a></li>
			</ul>
		</div>
	</div>

	<!-- 탭 영역 -->
	<div class="tabbable tabs-below" id="sidebar-tab">
	
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade<?php if(!$_COOKIE['sideBottomTab']||$_COOKIE['sideBottomTab']=='quick'):?> in active<?php endif?>" id="side-quick">

				<div class="site-selector" style="margin-bottom:10px">
					<select class="form-control" onchange="location.href='<?php echo $g['s']?>/?r='+this.value+'&m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $front?>';">
					<?php $_i=0;foreach($_SITES['list'] as $S):?>
					<?php if($_i>9)break?>
					<option value="<?php echo $S['id']?>"<?php if($r==$S['id']):?> selected="selected"<?php endif?>>ㆍ<?php echo $S['name']?></option>
					<?php $_i++;endforeach?>
					</select>
				</div>


				<p class="open-sans"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=dashboard" class="btn btn-default btn-lg btn-block"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a></p>
				<div class="btn-group btn-group-justified">
					<a data-toggle="modal" id="modal-post-new" class="btn btn-default" title=""><span data-toggle="tooltip" data-placement="bottom" data-original-title="새 포스트 쓰기"><i class="fa fa-edit fa-2x"></i></span></a>
					<a  data-toggle="modal" data-target="#modal-page-new" class="btn btn-default" title=""><span data-toggle="tooltip" data-placement="bottom" data-original-title="새 페이지 만들기"><i class="fa fa-file-text-o fa-2x"></i></span></a>
					<a data-toggle="modal" href="#" target="_blank" class="btn btn-default" title=""><span data-toggle="tooltip" data-placement="bottom" data-original-title="업로드"><i class="fa fa-upload fa-2x"></i></span></a>
				</div>

				<h5><small><i class="fa fa-star"></i> Quick Link</small></h5>
				<div class="list-group list-group-scroll" style="top:170px">
					<?php $_i=0?>
					<?php foreach($_MODULES['disp0'] as $R):?>
					<?php if(strpos('_'.$my['adm_view'],'['.$R['id'].']')) continue?>
					<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>" class="list-group-item module-list-item<?php if($R['id']==$module):?> active<?php endif?>"><i class="fa <?php echo $R['icon']?$R['icon']:'fa-th-large'?> fa-2x fa-fw"></i>&nbsp;<!--<span class="badge">0</span>--><?php echo $R['name']?> <small><?php echo ucfirst($R['id'])?></small></a>
					<?php $_i++;endforeach?>
					
					<!--
					<div class="checkbox list-group-item module-list-item">
						<label>
						<input type="checkbox" value="">
						side admin-panel 고정
						</label>
					</div>
					-->
				</div>



			</div>
			<div class="tab-pane fade<?php if($_COOKIE['sideBottomTab']=='sites'):?> in active<?php endif?>" id="side-sites">
				<p>
					<a class="btn btn-default btn-block btn-lg" data-toggle="modal" href="#home-Modal-site"><i class="fa fa-plus-circle fa-lg"></i>  사이트추가</a>
				</p>
				<h5><small>사이트 목록</small></h5>
				<select class="form-control">
					<option>전체보기(<?php echo number_format($_SITES['count1']+$_SITES['count2']+$_SITES['count3'])?>개)</option>
					<option>정상서비스(<?php echo number_format($_SITES['count1'])?>개)</option>
					<option>관리자오픈(<?php echo number_format($_SITES['count2'])?>개)</option>
					<option>정지(<?php echo number_format($_SITES['count3'])?>개)</option>
				</select>

				<div class="list-group list-group-scroll">
				
					<?php foreach($_SITES['list'] as $S):?>
					<a class="list-group-item" href="<?php echo $g['s']?>/?r=<?php echo $S['id']?>" target="_blank"><i class="fa fa-angle-right"></i> <?php echo $S['name']?> <small>(<?php echo $S['id']?>)</small>
						<span class="pull-right">
							<?php if($S['open']==3):?><i class="fa fa-unlink fa fa-large"></i><?php endif?>
							<?php if($S['open']==2):?><i class="fa fa-lock fa fa-large"></i><?php endif?>
						</span>
					</a>
					<?php endforeach?>
				</div>
			</div>
			<div class="tab-pane fade<?php if($_COOKIE['sideBottomTab']=='modules'):?> in active<?php endif?>" id="side-modules">
				<!-- <h5><small>설치된 모듈</small></h5> -->
						<!-- Split button -->
						<div class="btn-group">
						  <a  data-toggle="modal" data-target="#modal-package-add" class="btn btn-default" style="width:170px"><i class="fa fa-plus-circle fa-lg"></i> 패키지 설치</a>
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu pull-right" role="menu">
							<li role="presentation" class="dropdown-header">익스텐션 추가하기</li>
						    <li><a href="" data-toggle="modal" data-target="#modal-layout-add">레이아웃</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-module-add">모듈</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-widget-add">위젯</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-switch-add">스위치</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-ctheme-add">컨텐츠 테마</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-btheme-add">게시판 테마</a></li>
						    <li><a href="" data-toggle="modal" data-target="#modal-etc-add">기타자료</a></li>
						  </ul>
						</div>
					</p>
				<div class="list-group list-group-scroll">
					<?php $_i=0?>
					<?php foreach($_MODULES['display'] as $R):?>
					<?php if(strpos('_'.$my['adm_view'],'['.$R['id'].']')) continue?>
					<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>" class="list-group-item module-list-item<?php if($R['id']==$module):?> active<?php endif?>"><i class="fa <?php echo $R['icon']?$R['icon']:'fa-th-large'?> fa-2x fa-fw"></i>&nbsp;<?php echo $R['name']?> <small><?php echo ucfirst($R['id'])?></small></a>
					<?php $_i++;endforeach?>
				</div>
			</div>
		</div>
		<ul class="nav nav-tabs nav-justified">
		  <li<?php if(!$_COOKIE['sideBottomTab']||$_COOKIE['sideBottomTab']=='quick'):?> class="active"<?php endif?>><a href="#side-quick" data-toggle="tab" onclick="sideBottomTab('quick');"><i class="kf-bi-05 fa-2x"></i></a></li>
		  <li<?php if($_COOKIE['sideBottomTab']=='sites'):?> class="active"<?php endif?>><a href="#side-sites" data-toggle="tab" onclick="sideBottomTab('sites');"><i class="kf-home fa-2x"></i></a></li>
		  <li<?php if($_COOKIE['sideBottomTab']=='modules'):?> class="active"<?php endif?>><a href="#side-modules" data-toggle="tab" onclick="sideBottomTab('modules');"><i class="kf-module fa-2x"></i></a></li>
		</ul>
	</div>



</div>



<div class="sidebar-nav visible-md">
	<div class="list-group">
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>" class="list-group-item module-list-item text-center<?php if($module=='dashboard'):?> active<?php endif?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="현황판"><i class="fa fa-dashboard fa-2x fa-fw"></i></a>
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=dashboard&amp;front=modules" class="list-group-item module-list-item text-center<?php if($front=='modules'):?> active<?php endif?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="전체모듈"><i class="fa fa-th-large fa-2x fa-fw"></i></a>
		<?php $_dropi=10?>
		<?php $_i=0?>
		<?php $_hModules=array()?>
		<?php foreach($_MODULES['disp0'] as $R):?>
		<?php if(strpos('_'.$my['adm_view'],'['.$R['id'].']')) continue?>
		<?php if($_i>=$_dropi){$_hModules[]=$R;continue;}?>
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>" class="list-group-item module-list-item text-center<?php if($R['id']==$module):?> active<?php endif?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo $R['name']?>"><i class="fa <?php echo $R['icon']?$R['icon']:'fa-th-large'?> fa-2x fa-fw"></i></a>
		<?php $_i++;endforeach?>
	</div>
	<?php if(count($_hModules)):?>
	<div class="more-module">
		<div class="btn-group dropup text-center">
			<button class="btn btn-link dropdown-toggle" data-toggle="dropdown" type="button">
				<i class="fa fa-double-angle-right fa-2x fa-fw"></i>
			</button>
			<ul aria-labelledby="" class="dropdown-menu" role="menu">
				<?php foreach($_hModules as $R):?>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>" style="text-align:left;"><i class="fa fa-globe pull-right"></i> <?php echo $R['name']?></a></li>
				<?php endforeach?>
			</ul>
		</div>
	</div>
	<?php endif?>
</div>

<script src="<?php echo $g['url_module_skin']?>/assets/js/ace-elements.min.js"></script>



<script type="text/javascript">
jQuery(function($) 
{
	$("#modal-post-new").on(ace.click_event, function() {
		bootbox.prompt("새 포스트 제목 입력", function(result) {
			if (result === null) {
				//Example.show("Prompt dismissed");
			} else {
				//Example.show("Hi <b>"+result+"</b>");
			}
		});
	});

	$("#modal-page-new").on(ace.click_event, function() {
		bootbox.prompt("새 페이지 제목 입력", function(result) {
			if (result === null) {
				//Example.show("Prompt dismissed");
			} else {
				//Example.show("Hi <b>"+result+"</b>");
			}
		});
	});
});

!function ($) {

  $(function(){
    // tooltip demo
    $('#side-quick').tooltip({
      selector: "[data-toggle=tooltip]",
      container: "body"
    })
})
}(window.jQuery)
</script>
