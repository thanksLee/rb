[RESULT:

<div class="page-header">
	<h4>
		이 모듈 <small>(회원관리)</small>은 회원가입/로그인/마이페이지를 포함하고 있습니다.<br />
		연결할 페이지를 선택해 주세요.<br />
	</h4>
</div>

<p>
<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=join');"><i class="fa fa-link fa-lg"></i> 회원가입</button>
<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=login');"><i class="fa fa-link fa-lg"></i> 로그인</button>
<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=mypage');"><i class="fa fa-link fa-lg"></i> 마이페이지</button>
</p>

:RESULT]
