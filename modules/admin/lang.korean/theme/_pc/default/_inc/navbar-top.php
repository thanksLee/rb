<style type="text/css">
@media (min-width: 768px) and (max-width: 991px) {
    .navbar-toggle {
        display: block;
    }
    .navbar-header {
        float: none;
    }
    .navbar-collapse.collapse {
        display: none !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
    }
    .navbar-collapse.in {
        overflow-y: auto;
    }
    .navbar-nav {
        float: none;
        margin: 7.5px -15px;
    }
    .navbar-nav > li {
        float: none;

    }
    .container > .navbar-header,
    .container > .navbar-collapse {
        margin-right: -15px;
        margin-left: -15px;
    }
    .navbar > .container .navbar-brand {
        margin-left: 0;
    }
}
</style>

<header class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=dashboard&amp;front=modules" class="navbar-toggle navbar-add" style="padding-top:6px;padding-bottom:7px">
        <i class="fa fa-th-large fa-lg"></i> 
      </a>
      <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=dashboard" class="navbar-toggle navbar-add" style="padding-top:6px;padding-bottom:7px">
        <i class="fa fa-tachometer fa-lg"></i>
      </a>
      <button type="button" class="navbar-toggle navbar-add " data-toggle="collapse" data-target=".user-collapse">
        <i class="fa fa-user fa-lg"></i>
      </button> 
      <h1><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=dashboard" class="navbar-brand"><span class="kf-bi-01"></span></a></h1>
    </div>

    <div class="search-collapse collapse">
      <!-- 검색 -->
      <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control input-lg" id="focusedInput" placeholder="검색어를 입력해 주세요">
        <span class="help-block"><small>통합검색을 위해 검색어를 입력해 주세요.</small></span>
        <button type="submit" class="btn btn-primary btn-block btn-lg" data-toggle="collapse" data-target=".search-collapse">검색</button>
        <a class="btn btn-default btn-block btn-lg" data-toggle="collapse" data-target=".search-collapse"><span class="glyphicon glyphicon-chevron-up"></span> 닫기</a>
      </div>
      </form>
      <!-- /검색 -->
    </div>


    <div class="user-collapse collapse">
      <ul class="nav">
        <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg">알림 <span class="badge">0</span></a></a></li>
        <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg">메시지함 <span class="badge">0</span></a></li>
        <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg"><span class="glyphicon glyphicon-user"></span> 프로필 보기</a></li>
        <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" class="btn btn-danger btn-block navbar-btn btn-lg"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
        <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".user-collapse"><span class="glyphicon glyphicon-chevron-up"></span> 닫기</a></li>
      </ul>
    </div>

    <div class="navbar-collapse collapse">
    <!-- 로그인 & lg,md,sm 관련 -->
    <div class="visible-md visible-lg">
      <ul class="nav navbar-nav navbar-right">
      <!-- 개인정보 관리 -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> </a>
        <ul class="dropdown-menu">
          <li class="dropdown-header"><img width="25" height="25" class="img-rounded" src="<?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?$my['photo']:'0.gif'?>"> <span><?php echo $my[$_HS['nametype']]?></span></li>
          <li class="divider"></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> 프로필</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-lock"></span> 정보변경</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-bell"></span> 알림설정</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
        </ul>
      </li>
      <!-- /개인정보 관리 -->
      </ul>
    </div>
     <!-- /로그인& lg,md,sm  관련 -->

    <div class="visible-xs visible-sm">
      <ul class="nav navbar-nav">
        <li role="presentation" class="dropdown-header">Module List</li>

		<?php $_i=0?>
		<?php foreach($_MODULES['disp0'] as $R):?>
		<?php if(strpos('_'.$my['adm_view'],'['.$R['id'].']')) continue?>
        <li<?php if($R['id']==$module):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $R['id']?>"><i class="fa <?php echo $_fontset[$_i]?$_fontset[$_i]:'fa-th-large'?> fa-lg fa-fw"></i>&nbsp;<?php echo $R['name']?> <?php echo ucfirst($R['id'])?></a><!-- <span class="badge pull-right">0</span>--></li> 
		<?php $_i++;endforeach?>
        <li role="presentation" class="divider"></li>
        <li><a href="#" class="btn btn-default btn-block navbar-btn btn-lg" data-toggle="collapse" data-target=".navbar-collapse"><span class="glyphicon glyphicon-chevron-up"></span> 닫기</a></li>
      </ul>
    </div>
   

    </div><!--/.navbar-collapse -->
  </div>
</header>


