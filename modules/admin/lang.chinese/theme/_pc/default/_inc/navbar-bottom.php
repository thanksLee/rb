<!-- 로그인 후 & 모바일 태블릿에서만 활성화 됨  -->

<style type="text/css">
/*body { padding-bottom: 70px; }*/  
</style>


<nav class="navbar navbar-inverse navbar-fixed-bottom visible-xs">
    <div class="container">

        <!-- 공유 -->
        <div class="admin-collapse collapse">
          <ul class="nav">
            
            <li><p class="alert alert-dismissable text-muted text-center">설치버전 : <span class="kf-bi-01" style="font-size:15px;"></span> Rb <?php echo $d['admin']['version']?><br>마지막 접속 : <?php echo getDateFormat($my['last_log'],'Y.m.d H:i')?></p></li>
            <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-sign-out fa-lg"></i> 로그아웃 (<?php echo $my['name']?> 님)</a></li>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".admin-collapse"><i class="fa fa-chevron-down fa-lg"></i> 닫기</a></li>
          </ul>
        </div>
        <!-- /공유 -->

        <!-- 쓰기 -->
        <div class="write-collapse collapse">
          <ul class="nav">
            <li><a href="#" id="modal-post-new" class="btn btn-primary btn-block navbar-btn btn-lg"><i class="fa fa-edit fa-lg fa-inverse"></i> 새글 등록</a></li>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-upload fa-lg"></i> 미디어 추가</a></li>
            <li><button type="button" id="modal-page-new" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-file-text-o fa-lg"></i> 페이지 추가</button></li>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-user fa-lg"></i> 회원 추가</a></li>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".write-collapse"><i class="fa fa-chevron-down fa-lg"></i> 닫기</a></li>
          </ul>
        </div>
        <!-- /공유 -->

        <!-- 관리 -->
        <div class="site-collapse collapse">
          <ul class="nav" style="z-index:10000;">
			<?php $_i=0;foreach($_SITES['list'] as $S):?>
			<?php if($_i>9)break?>
			<li<?php if($r==$S['id']):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $S['id']?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;front=<?php echo $front?>" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-globe fa-lg"></i> <?php echo $S['name']?></a></li>
			<?php $_i++;endforeach?>			
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".site-collapse"><i class="fa fa-chevron-down fa-lg"></i> 닫기</a></li>
          </ul>
        </div>
        <!-- /관리 -->

        <!-- 관리 -->
        <div class="star-collapse collapse">
          <ul class="nav">
			<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $m?>&amp;front=bookmark" class="btn btn-primary btn-block navbar-btn btn-lg"><i class="fa fa-wrench fa-lg"></i> 즐겨찾기 관리</a></li>
			<?php $_ADMPAGE = getDbArray($table['s_admpage'],'memberuid='.$my['uid'],'*','gid','asc',0,1)?>
			<?php if(db_num_rows($_ADMPAGE)):?>
			<?php while($_R=db_fetch_array($_ADMPAGE)):?>
			<li><a href="<?php echo $_R['url']?>" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-star fa-lg"></i> <?php echo $_R['name']?></a></li>
			<?php endwhile?>
			<?php endif?>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".star-collapse"><i class="fa fa-chevron-down fa-lg"></i> 닫기</a></li>
          </ul>
        </div>
        <!-- /관리 -->

        <!-- 판매 -->
        <div class="card-collapse collapse">
          <ul class="nav">
            <li><a href="#" class="btn btn-primary btn-block navbar-btn btn-lg"><i class="fa fa-shopping-cart fa-lg"></i> 유료 컨텐츠 관리</a></li>
             <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg"><i class="fa fa-bar-chart-o fa-lg"></i> 판매현황</a></li>
            <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".card-collapse"><i class="fa fa-chevron-down fa-lg"></i> 닫기</a></li>
          </ul>
        </div>
        <!-- /판매 -->

        <div class="navbar-header">

            <button type="button" class="navbar-toggle navbar-add" data-toggle="collapse" data-target=".write-collapse">
            <i class="fa fa-plus fa-lg fa-inverse"></i> <span>추가</span>
            </button>

            <button type="button" class="navbar-toggle navbar-add" data-toggle="collapse" data-target=".card-collapse">
            <i class="fa fa-krw fa-lg fa-inverse"></i>
            </button>

            <button type="button" class="navbar-toggle navbar-add" data-toggle="collapse" data-target=".site-collapse">
            <i class="fa fa-exchange fa-lg fa-inverse"></i>
            </button>

            <button type="button" class="navbar-toggle navbar-add" data-toggle="collapse" data-target=".star-collapse">
            <i class="fa fa-star fa-lg fa-inverse"></i> 
            </button>



            <button type="button" class="navbar-toggle navbar-add pull-left" data-toggle="collapse" data-target=".admin-collapse" style="padding:4px 10px 0;margin-left:7px">
            <span class="kf-bi-05 kf-inverse" style="font-size:25px;"></span>
            </button>

        </div>
    </div>
</nav>


<script type="text/javascript">
!function ($) {

  $(function(){
    // tooltip demo
    $('.container').tooltip({
      selector: "[data-toggle=tooltip]",
      container: "body"
    })
})
}(window.jQuery)
</script>
