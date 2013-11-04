<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="fa fa-envelope fa-lg"></i>
				</div>
				<h4>
					이메일 양식
				</h4>
			</div>
			<div class="list-group">

				<a class="list-group-item visible-xs visible-sm" data-toggle="modal" href="#member-maildoc">
					<i class="fa fa-envelope-o"></i> 이메일인증 양식
					<small>(_auth)</small>
				</a>
				<a class="list-group-item visible-md visible-lg" href="#">
					<i class="fa fa-envelope-o"></i> 이메일인증 양식
					<small>(_auth)</small>
				</a>

				<a class="list-group-item visible-xs visible-sm" data-toggle="modal" href="#member-maildoc">
					<i class="fa fa-envelope-o"></i> 비밀번호요청 양식
					<small>(_pw)</small>
				</a>
				<a class="list-group-item visible-md visible-lg" href="#">
					<i class="fa fa-envelope-o"></i> 비밀번호요청 양식
					<small>(_pw)</small>
				</a>

				<a class="list-group-item visible-xs visible-sm active" data-toggle="modal" href="#member-maildoc">
					<i class="fa fa-envelope-o"></i> 회원가입축하 양식
					<small>(_join)</small>
				</a>
				<a class="list-group-item visible-md visible-lg active" href="#">
					<i class="fa fa-envelope-o"></i> 회원가입축하 양식
					<small>(_join)</small>
				</a>

			</div>
			<div class="panel-footer text-center">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-lg-9 hidden-xs hidden-sm" id="tab-content-view">
		<div class="page-header">
			<h4>
				<i class="fa fa-envelope fa-lg"></i> &nbsp;이메일 양식 등록정보
				<span class="text-muted">( 회원가입축하 양식 )</span></h4>
		</div>

		<!-- 에디터 -->
		<div class="form-group">
			<label class="sr-only" for="">제목</label>
			<input type="text" class="form-control input-lg" placeholder="이메일 양식 제목을 입력해 주세요">
		</div>



		<div class="editor">

			<div class="btn-toolbar">
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-picture-o fa-lg"></i> 미디어 불러오기</button>
				  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-upload fa-lg"></i> 미디어 업로드</button>
				</div>
			</div>

			<!-- Wysiwyg toolbar -->
			<div class="btn-toolbar">
				<div class="btn-group">
					<div class="btn-group" data-toggle="tooltip" data-placement="top" data-original-title="글꼴">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle open-sans" data-toggle="dropdown">
						Arial <span class="caret"></span>
					</button>
					<ul class="dropdown-menu open-sans" role="menu">
						<li><a href="#">굴림</a></li>
						<li><a href="#">돋움</a></li>
						<li><a href="#">바탕</a></li>
						<li><a href="#">고딕</a></li>
						<li><a href="#">맑은고딕</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="fa fa-check"></i> Arial</a></li>
						<li><a href="#">Verdana</a></li>
						<li><a href="#">Tomaha</a></li>
						<li><a href="#">Open-Sans</a></li>
						<li><a href="#">Sans-serif</a></li>
					</ul>
					</div>


					<div class="btn-group" data-toggle="tooltip" data-placement="top" data-original-title="글꼴 크기">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
					10 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#"><i class="fa fa-check"></i> 10</a></li>
					<li><a href="#">11</a></li>
					<li><a href="#">12</a></li>
					<li><a href="#">14</a></li>
					<li><a href="#">18</a></li>
					<li><a href="#">24</a></li>
					<li><a href="#">36</a></li>
					</ul>
					</div>

				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="굵게(Ctrl+B)"><i class="fa fa-bold fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴(Ctrl+I)"><i class="fa fa-italic fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="밑줄(Ctrl+U)"><i class="fa fa-underline fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴색"><i class="fa fa-font fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="왼쪽 맞춤(Ctrl+L)"><i class="fa fa-align-left fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="가운데 맞춤(Ctrl+E)"><i class="fa fa-align-center fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="오른쪽 맞춤(Ctrl+R)"><i class="fa fa-align-right fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="양쪽 맞춤"><i class="fa fa-align-justify fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기(Ctrl+E)"><i class="fa fa-list fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기(Ctrl+E)"><i class="fa fa-list-ol fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="내어쓰기(Shift+Tab)"><i class="fa fa-outdent fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="들여쓰기(Tab)"><i class="fa fa-indent fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크해제"><i class="fa fa-chain-broken fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="다시실행"><i class="fa fa-repeat fa-lg"></i></button>
				</div>
			</div>
			<!-- /Wysiwyg toolbar -->

			<!-- Markdown toolbar -->
			<div class="btn-toolbar">
				<fieldset class="btn-group" disabled> <!-- 미리보기가 활성화 되었을 때  fieldset은 비활성 처리 됩니다.  -->
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="굵게"><i class="fa fa-bold fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴"><i class="fa fa-italic fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="제목"><i class="fa fa-font fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기"><i class="fa fa-list fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기"><i class="fa fa-list-ol fa-lg"></i></button>
				</fieldset>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm active" data-toggle="button"><i class="fa fa-search fa-lg"></i> 미리보기</button>
				</div>
			</div>
			<!-- /Markdown toolbar -->

			<textarea class="form-control" rows="15"></textarea>
			<div class="btn-toolbar">
				<div class="btn-group open-sans" data-toggle="buttons">
					<label class="btn btn-default active">
						<input type="radio" name="options" id="option1">Wysiwyg
					</label>
					<label class="btn btn-default">
						<input type="radio" name="options" id="option2">Markdown
					</label>
					<label class="btn btn-default">
						<input type="radio" name="options" id="option3"><i class="fa fa-code fa-lg"></i> Code
					</label>
				</div>
			</div>
		</div>
		<!-- /에티터 -->
		<div class="form-action">
			<button type="submit" class="btn btn-primary hidden-xs hidden-sm"><i class="fa fa-check"></i> 양식등록/수정</button>
			<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check"></i> 양식등록/수정</button>
			<button type="button" class="btn btn-default">미리보기 <i class="fa fa-angle-double-right fa-lg"></i></button>
		</div>

		<div class="well">
			<ul>
				<li>이메일 양식 소스코드를 등록해 주세요. 이미지 파일경로는 반드시 <code>http://</code>를 포함한 전체주소이어야 합니다.</li>
				<li>내용에는 다음과 같은 치환문자를 사용할 수 있습니다.</li>
				<li>회원이름 : <code>{NAME}</code> / 닉네임 <code>{NICK}</code> / 아이디 <code>{ID}</code> / 이메일 <code>{EMAIL}</code></li>
			</ul>
		</div>

	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="member-maildoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope fa-lg"></i> 이메일 양식 등록정보</h4>
      </div>
      <div class="modal-body">
		<!-- 에디터 -->
		<div class="form-group">
			<label class="sr-only" for="">제목</label>
			<input type="text" class="form-control input-lg" placeholder="이메일 양식 제목을 입력해 주세요">
		</div>



		<div class="editor">

			<div class="btn-toolbar">
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-picture-o fa-lg"></i> 불러오기</button>
				  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-upload fa-lg"></i> 업로드</button>
				</div>
			</div>

			<!-- Wysiwyg toolbar -->
			<div class="btn-toolbar">
				<div class="btn-group">
					<div class="btn-group" data-toggle="tooltip" data-placement="top" data-original-title="글꼴">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle open-sans" data-toggle="dropdown">
						Arial <span class="caret"></span>
					</button>
					<ul class="dropdown-menu open-sans" role="menu">
						<li><a href="#">굴림</a></li>
						<li><a href="#">돋움</a></li>
						<li><a href="#">바탕</a></li>
						<li><a href="#">고딕</a></li>
						<li><a href="#">맑은고딕</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="fa fa-check"></i> Arial</a></li>
						<li><a href="#">Verdana</a></li>
						<li><a href="#">Tomaha</a></li>
						<li><a href="#">Open-Sans</a></li>
						<li><a href="#">Sans-serif</a></li>
					</ul>
					</div>
					<div class="btn-group" data-toggle="tooltip" data-placement="top" data-original-title="글꼴 크기">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
					10 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#"><i class="fa fa-check"></i> 10</a></li>
					<li><a href="#">11</a></li>
					<li><a href="#">12</a></li>
					<li><a href="#">14</a></li>
					<li><a href="#">18</a></li>
					<li><a href="#">24</a></li>
					<li><a href="#">36</a></li>
					</ul>
					</div>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="굵게(Ctrl+B)"><i class="fa fa-bold fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴(Ctrl+I)"><i class="fa fa-italic fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="밑줄(Ctrl+U)"><i class="fa fa-underline fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴색"><i class="fa fa-font fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="왼쪽 맞춤(Ctrl+L)"><i class="fa fa-align-left fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="가운데 맞춤(Ctrl+E)"><i class="fa fa-align-center fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="오른쪽 맞춤(Ctrl+R)"><i class="fa fa-align-right fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="양쪽 맞춤"><i class="fa fa-align-justify fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기(Ctrl+E)"><i class="fa fa-list fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기(Ctrl+E)"><i class="fa fa-list-ol fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="내어쓰기(Shift+Tab)"><i class="fa fa-outdent fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="들여쓰기(Tab)"><i class="fa fa-indent fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크해제"><i class="fa fa-chain-broken fa-lg"></i></button>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
				  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="다시실행"><i class="fa fa-repeat fa-lg"></i></button>
				</div>
			</div>
			<!-- /Wysiwyg toolbar -->

			<!-- Markdown toolbar -->
			<div class="btn-toolbar">
				<fieldset class="btn-group" disabled> <!-- 미리보기가 활성화 되었을 때  fieldset은 비활성 처리 됩니다.  -->
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="굵게"><i class="fa fa-bold fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴"><i class="fa fa-italic fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="제목"><i class="fa fa-font fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기"><i class="fa fa-list fa-lg"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기"><i class="fa fa-list-ol fa-lg"></i></button>
				</fieldset>
				<div class="btn-group">
				  <button type="button" class="btn btn-default btn-sm active" data-toggle="button"><i class="fa fa-search fa-lg"></i> 미리보기</button>
				</div>
			</div>
			<!-- /Markdown toolbar -->

			<textarea class="form-control" rows="15"></textarea>
			<div class="btn-toolbar">
				<div class="btn-group open-sans" data-toggle="buttons">
					<label class="btn btn-default btn-sm active">
						<input type="radio" name="options" id="option1">Wysiwyg
					</label>
					<label class="btn btn-default btn-sm">
						<input type="radio" name="options" id="option2">Markdown
					</label>
					<label class="btn btn-default btn-sm">
						<input type="radio" name="options" id="option3"><i class="fa fa-code fa-lg"></i> Code
					</label>
				</div>
			</div>
		</div>
		<!-- /에티터 -->
		<div class="well">
			<ul>
				<li>이메일 양식 소스코드를 등록해 주세요. 이미지 파일경로는 반드시 <code>http://</code>를 포함한 전체주소이어야 합니다.</li>
				<li>내용에는 다음과 같은 치환문자를 사용할 수 있습니다.</li>
				<li>회원이름 : <code>{NAME}</code> / 닉네임 <code>{NICK}</code> / 아이디 <code>{ID}</code> / 이메일 <code>{EMAIL}</code></li>
			</ul>
		</div>
      </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check"></i> 양식등록/수정</button>
		<button type="button" class="btn btn-default btn-lg btn-block">미리보기 <i class="fa fa-angle-double-right fa-lg"></i></button>
		<button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">닫기</button>
	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<br><br><br>



<!-- 여기까지 권기택 작업입니다. -->


<?php
function getMDname($id)
{
	global $typeset;
	if ($typeset[$id]) return $typeset[$id].'<span class="id">('.$id.')</span>';
	else return $id;
}
$typeset = array
(
	'_join'=>'회원가입축하 양식',
	'_auth'=>'이메일인증 양식',
	'_pw'=>'비밀번호요청 양식',
);
$type = $type ? $type : '_join';
?>
<div id="catebody">
	<div id="category">
		<div class="title">
			이메일양식
		</div>

		<div class="tree">
		<ul>
		<?php $tdir = $g['path_module'].$module.'/doc/'?>
		<?php $dirs = opendir($tdir)?>
		<?php while(false !== ($skin = readdir($dirs))):?>
		<?php if($skin=='.' || $skin == '..')continue?>
		<?php $_type = str_replace('.txt','',$skin)?>
		<li>
			<a href="<?php echo $g['adm_href']?>&amp;type=<?php echo $_type?>"><span class="name<?php if($_type==$type):?> on<?php endif?>"><?php echo getMDname($_type)?></span></a>
		</li>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</ul>
		</div>

	</div>


	<div id="catinfo">


		<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="maildoc_regis" />
		<input type="hidden" name="type" value="<?php echo $type?>" />

		<div class="title">
			<div class="xleft">
				양식등록정보
			</div>
			<div class="xright">

			</div>
		</div>

		<div class="notice">
			이메일 양식 소스코드를 등록해 주세요. 이미지 파일경로는 반드시 http://를 포함한 전체주소이어야 합니다.<br />
			내용에는 다음과 같은 치환문자를 사용할 수 있습니다.<br />
			회원이름 : {NAME} / 닉네임 {NICK} / 아이디 {ID} / 이메일 {EMAIL}
		</div>

		
		<div class="xwrap">
		<div class="iconbox">
			<a class="hand" onclick="window.open('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=filemanager&front=main&fileupload=Y&iframe=Y&pwd=./files/_etc/&pwd1=email');" /><img src="<?php echo $g['img_core']?>/_public/ico_photo.gif" alt="" />이미지 첨부하기</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.image&folder=./files/_etc/&sfolder=email&iframe=Y');" /><img src="<?php echo $g['img_core']?>/_public/ico_photo.gif" alt="" />이미지 불러오기</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="ToolCheck('layout');">레이아웃</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="ToolCheck('table');">테이블</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="ToolCheck('box');">박스</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="ToolCheck('link');">링크</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="ToolCheck('icon');">아이콘</a>
			<img src="<?php echo $g['img_core']?>/_public/split_01.gif" alt="" class="split" />
			<a class="hand" onclick="frames.editFrame.ToolboxShowHide(0);" /><img src="<?php echo $g['img_core']?>/_public/ico_edit.gif" alt="" />편집</a>
		</div>

		<input type="hidden" name="html" id="editFrameHtml" value="HTML" />
		<input type="hidden" name="content" id="editFrameContent" value="<?php echo htmlspecialchars(implode('',file($g['path_module'].$module.'/doc/'.$type.'.txt')))?>" />
		<iframe name="editFrame" id="editFrame" src="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=editor&amp;toolbox=Y" width="100%" height="450" frameborder="0" scrolling="no"></iframe>
		</div>
		
		<div class="submitbox">
			<?php if(!$typeset[$type]):?>
			<input type="button" class="btngray" value=" 삭제 " onclick="delCheck('<?php echo $type?>');" />
			<?php endif?>
			<input type="submit" class="btnblue" value=" 수정 " />
			또는 이 양식을 
			<input type="text" name="newdoc" value="" size="15" class="input" title="영문소문자+숫자+_ 조합만 입력가능합니다." />으로
			<input type="submit" class="btngray" value=" 등록 " />
		</div>

		</form>
		

	</div>
	<div class="clear"></div>
</div>




<script type="text/javascript">
//<![CDATA[
function ToolCheck(compo)
{
	frames.editFrame.showCompo();
	frames.editFrame.EditBox(compo);
}
function delCheck(t)
{
	if (confirm('정말로 삭제하시겠습니까?   '))
	{
		frames._action_frame_<?php echo $m?>.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=maildoc_delete&type=' + t;
	}
}
function saveCheck(f)
{
	frames.editFrame.getEditCode(f.content,f.html);
	if (f.content.value == '')
	{
		alert('내용을 입력해 주세요.       ');
		frames.editFrame.getEditFocus();
		return false;
	}
	if (f.newdoc.value != '')
	{
		if (!chkIdValue(f.newdoc.value))
		{
			alert('양식명은 영문소문자/숫자/_ 만 사용가능합니다.      ');
			f.newdoc.value = '';
			f.newdoc.focus();
			return false;
		}
	}

	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>