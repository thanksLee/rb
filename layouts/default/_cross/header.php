<header class="navbar <?php if($g['disp_adm_bar']):?>navbar-inverse <?php else:?>navbar-default <?php endif?>navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1<?php if(!$my['id']):?> class="guest"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>" class="navbar-brand"><span aria-hidden="true" data-icon="&#x31;"></span></a></h1>
    </div>
    <div class="navbar-collapse collapse">
		<!-- 메뉴 -->
      <ul class="nav navbar-nav">
		<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
		<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
		<?php if($_M1['isson']):?>
		<li class="dropdown<?php if(in_array($_M1['id'],$_CA)):$g['nowFMemnu']=$_M1['uid']?> active<?php endif?>"><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"<?php if($_M1['isson']):?> class="dropdown-toggle" data-toggle="dropdown"<?php endif?>><?php echo $_M1['name']?><?php if($_M1['isson']):?> <b class="caret"></b><?php endif?></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
			<?php while($_M2=db_fetch_array($_MENUS2)):?>
            <li<?php if(in_array($_M2['id'],$_CA)):?> class="active"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"><?php echo $_M2['name']?></a></li>
			<?php endwhile?>
          </ul>
		</li>
		<?php else:?>
        <li<?php if($_CA[0]==$_M1['id']):?> class="active"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></li>
		<?php endif?>
		<?php endwhile?>
      </ul>
	  <!-- //메뉴 -->

    <!-- 검색 -->
    <form action="<?php echo $g['s']?>/" method="get" class="navbar-form navbar-left" role="search">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="mod" value="search" />
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">검색</button>
    </form>
    <!-- /검색 -->

    <?php if($my['id']):?>
    <ul class="nav navbar-nav navbar-right">

    <!-- 알림 설정 -->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-primary">0</span></a>
      <ul class="dropdown-menu media-list">
        <li class="dropdown-header"><span class="glyphicon glyphicon-bell"></span> 알림</li>
        <li class="divider"></li>
        <li><a href="<?php echo RW('mod=mypage')?>"><span class="glyphicon glyphicon-plus"></span> 더보기</a></li>
      </ul>
    </li>
    <!-- /알림설정 -->

    <!-- 개인정보 관리 -->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> </a>
      <ul class="dropdown-menu">
        <li class="dropdown-header"><img width="25" height="25" class="img-rounded" src="<?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?$my['photo']:'0.gif'?>"> <span><?php echo $my[$_HS['nametype']]?></span></li>
        <li class="divider"></li>
        <li><a href="<?php echo RW('mod=mypage')?>"><span class="glyphicon glyphicon-user"></span> 프로필</a></li>
        <li><a href="<?php echo RW('mod=mypage&page=info')?>"><span class="glyphicon glyphicon-lock"></span> 정보변경</a></li>
        <li><a href="<?php echo RW('mod=mypage&page=info')?>"><span class="glyphicon glyphicon-bell"></span> 알림설정</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><span class="glyphicon glyphicon-log-out"></span> 로그아웃</a></li>
      </ul>
    </li>
    <!-- /개인정보 관리 -->

    </ul>
    <?php else:?>
    <div class="nav navbar-nav navbar-right btn-group">
    <a href="<?php echo RW('mod=login')?>" class="btn btn-default btn-sm navbar-btn">로그인</a>
    <a href="<?php echo RW('mod=join')?>" class="btn btn-default btn-sm navbar-btn">가입</a>
    </div>
    <?php endif?>

    </div>
  </div>
</header>


