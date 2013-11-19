<!-- BEGIN GLOBAL PLUGINS -->   
<!--[if lt IE 9]>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/respond.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/excanvas.min.js"></script> 
<![endif]-->   
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END GLOBAL PLUGINS -->


<?php include_once $g['path_module'].'member/var/var.join.php' ?>

<div class="login">

	<!-- BEGIN LOGO -->
	<div class="logo">
		<h1><span class="kf-bi-01"></span> Rb <small>Administration Mode</small> </h1>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content tab-content">
		<!-- BEGIN LOGIN FORM -->
		<form id="login-form" class="tab-pane fade in active" name="loginform" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return loginCheck(this);">
			<input type="hidden" name="r" value="<?php echo $r?>">
			<input type="hidden" name="a" value="login">
			<input type="hidden" name="referer" value="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=dashboard">
			<input type="hidden" name="usessl" value="<?php echo $d['member']['login_ssl']?>" />
			<input type="hidden" name="usertype" value="admin">

			<h3 class="form-title">관리자 로그인</h3>
			<?php if($nosite=='Y'):?>
			<div class="alert alert-warning">등록된 사이트가 없습니다.<br>로그인 후 사이트를 등록해 주세요.</div>
			<?php endif?>
			<div class="form-group">
				<label class="sr-only"><?php echo $d['member']['login_emailid']?'이메일':'아이디'?></label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control" type="text" title="<?php echo $d['member']['login_emailid']?'이메일':'아이디'?>" placeholder="아이디" name="id" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',0)?>">
				</div>
			</div>
			<div class="form-group">
				<label class="sr-only">패스워드</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control" type="password" title="패스워드" placeholder="패스워드" name="pw"  value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',1)?>">
				</div>
			</div>
			<div class="form-actions">

				<label class="checkbox-inline">
					<input type="checkbox" name="idpwsave" value="checked" onclick="remember_idpw(this)"<?php if($_COOKIE['svshop']):?> checked="checked"<?php endif?>> 정보저장
				</label>

				<?php if($d['member']['login_ssl']):?>
				<label class="checkbox-inline">
					<input type="checkbox" name="ssl" value="checked"> 보안로그인
				</label>
				<?php endif?>

				<button type="submit" class="btn btn-primary pull-right hidden-xs">
					로그인 <i class="fa fa-arrow-circle-o-right"></i>
				</button>
				<button type="submit" class="btn btn-primary visible-xs btn-block btn-lg">
					로그인 <i class="fa fa-arrow-circle-o-right fa-lg"></i>
				</button>

			</div>
			<!--
			<div class="forget-password">
				<p>
					<a href="#forget-form" data-toggle="tab">패스워드를 잊어버리셨나요 ?</a>
				</p>
			</div>
			<div class="create-account">
				<p>
					<a href="#register-form" data-toggle="tab">새 회원계정 만들기</a>
				</p>
			</div>
			-->
		</form>
		<form name="SSLLoginForm" action="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']?>" method="post" target="_action_frame_<?php echo $m?>">
			<input type="hidden" name="r" value="<?php echo $r?>">
			<input type="hidden" name="a" value="login">
			<input type="hidden" name="referer" value="<?php echo $referer?$referer:$_SERVER['HTTP_REFERER']?>" />
			<input type="hidden" name="id" value="">
			<input type="hidden" name="pw" value="">
			<input type="hidden" name="idpwsave" value="">
			<input type="hidden" name="usertype" value="admin">
		</form>
		<!-- END LOGIN FORM -->
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form id="forget-form" class="tab-pane fade" action="index.html" method="post">
			<h3>패스워드를 잊으셨나요? ?</h3>
			<p>등록된 이메일을 입력해 주세요</p>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" />
				</div>
			</div>
			<div class="form-actions clearfix">
				<a href="#login-form" data-toggle="tab" class="btn btn-default hidden-xs pull-left"><i class="fa fa-arrow-circle-o-left fa-lg"></i> 이전</a>
				<button type="submit" class="btn btn-primary pull-right hidden-xs">
					패스워드 초기화 <i class="fa fa-arrow-circle-o-right fa-lg"></i>
				</button>
				<button type="submit" class="btn btn-primary visible-xs btn-block btn-lg">
					패스워드 초기화 <i class="fa fa-arrow-circle-o-right fa-lg"></i>
				</button>
				<a href="#login-form" data-toggle="tab" class="btn btn-default visible-xs btn-block btn-lg"><i class="fa fa-arrow-circle-o-left fa-lg"></i> 이전</a>          
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
		<form id="register-form" class="tab-pane fade" action="index.html" method="post">
			<h3>회원 계정 등록</h3>
			<p> 회원 계정등록을 위한 가입정보를 입력해 주세요</p>
			<div class="form-group">
				<label class="control-label sr-only">이름</label>
				<div class="input-icon">
					<i class="fa fa-font"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="이름" name="fullname"/>
				</div>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label sr-only">Email</label>
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="email" placeholder="이메일" name="email"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label sr-only">아이디</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="아이디" name="id"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label sr-only">패스워드</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="패스워드" name="pw"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label sr-only">패스워드 재입력</label>
				<div class="controls">
					<div class="input-icon">
						<i class="fa fa-check"></i>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="패스워드 재입력" name="rpassword"/>
					</div>
				</div>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" name="agreement"/> <a href="#">이용약관</a> 과 <a href="#">개인정보취급방침</a>에 동의
				</label>  
				<div id="register_tnc_error"></div>
			</div>
			<div class="form-actions clearfix">
				<a href="#login-form" data-toggle="tab" class="btn btn-default hidden-xs pull-left"><i class="fa fa-arrow-circle-o-left fa-lg"></i> 이전</a>
				<button type="submit" class="btn btn-primary pull-right hidden-xs">
					회원계정 등록 <i class="fa fa-arrow-circle-o-right fa-lg"></i>
				</button>
				<button type="submit" class="btn btn-primary visible-xs btn-block btn-lg">
					회원계정 등록 <i class="fa fa-arrow-circle-o-right fa-lg"></i>
				</button>
				<a href="#login-form" data-toggle="tab" class="btn btn-default visible-xs btn-block btn-lg"><i class="fa fa-arrow-circle-o-left fa-lg"></i> 이전</a>          
			</div>
		</form>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		<!-- Powered by kimsQ Rb 2.0.0 -->
	</div>
	<!-- END COPYRIGHT -->

</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>	
<script src="<?php echo $g['url_module_skin']?>/assets/plugins/select2/select2.min.js" type="text/javascript" ></script>     
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $g['url_module_skin']?>/assets/scripts/app.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS --> 

<script>
	jQuery(document).ready(function() {     
	  App.init();
	  Login.init();
	});
</script>

