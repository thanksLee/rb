<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="fa fa-file-text-o fa-2x"></i>
				</div>
				<h4 class="dropdown panel-title">
					<a class=" dropdown-toggle" data-toggle="dropdown" href="#">
						전체페이지&nbsp;<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li role="presentation" class="dropdown-header">페이지 분류</li>
						<li><a href="#">분류1 <small>(1)</small></a></li>
						<li><a href="#">분류2 <small>(11)</small></a></li>
						<li><a href="#">분류3 <small>(1)</small></a></li>
						<li><a href="#">분류4 <small>(11)</small></a></li>
						<li class="active"><a href="#">분류5 <small>(1)</small></a></li>
						<li><a href="#">분류6 <small>(11)</small></a></li>
						<li><a href="#">분류7 <small>(1)</small></a></li>
						<li><a href="#">분류8 <small>(11)</small></a></li>
					</ul>
				</h4>
			</div>
			<div class="list-group">

				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-pencil fa-lg"></i>
					</span>메인화면
					<small>(main)</small>
				</a>
				<a class="list-group-item hidden-xs" href="#">
					<span class="badge">
						<i class="fa fa-pencil fa-lg"></i>
					</span>
					메인화면
					<small>(main)</small>
				</a>

				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-pencil fa-lg"></i>
					</span>
					통합검색
					<small>(search)</small>
				</a>
				<a class="list-group-item hidden-xs" href="#">
					<span class="badge">
						<i class="fa fa-pencil fa-lg"></i>
					</span>
					통합검색
					<small>(search)</small>
				</a>

				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>
					회원가입
					<small>(join)</small>
				</a>
				<a class="list-group-item visible-md visible-lg" href="#">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>회원가입
					<small>(join)</small>
				</a>

				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>
					로그인
					<small>(login)</small>
				</a>
				<a class="list-group-item visible-md visible-lg" href="#">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>
					로그인
					<small>(login)</small>
				</a>

				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>
					마이페이지
					<small>(mypage)</small>
				</a>
				<a class="list-group-item active visible-md visible-lg" href="#">
					<span class="badge">
						<i class="fa fa-puzzle-piece fa-lg"></i>
					</span>
					마이페이지
					<small>(mypage)</small>
				</a>
				<a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
					<span class="badge">
						<i class="fa fa-link fa-lg"></i>
					</span>홈페이지 이용약관
					<small>(agreement)</small>
				</a>
				<a class="list-group-item visible-md visible-lg" href="#">
					<span class="badge">
						<i class="fa fa-link fa-lg"></i>
					</span>홈페이지 이용약관
					<small>(agreement)</small>
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
				<i class="fa fa-cog fa-lg"></i> &nbsp;페이지 등록정보
				<span class="text-muted">( 통합검색 )</span></h4>
		</div>



		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">명칭</label>
				<div class="col-md-10 col-lg-9">
					<input class="form-control col-md-6" placeholder="" type="text" value="홈페이지">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-lg-offset-2 col-md-10 col-lg-9">
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox1" value="option1"> <span class="glyphicon glyphicon-home"></span>	시작 페이지 
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox2" value="option2"> <span class="glyphicon glyphicon-phone"></span> 모바일 전용 
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">코드</label>
				<div class="col-md-10 col-lg-9">
					<div class="input-group">
						<input class="form-control" type="text" value="search">
						<span class="input-group-btn">
							<button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" data-original-title="페이지삭제">
								<i class="fa fa-trash-o fa-lg"></i>
							</button>
						</span>
					</div>
					<span class="help-block">
						<ul class="list-unstyled">
							<li>이 메뉴를 잘 표현할 수 있는 단어로 입력해 주세요.</li>
							<li>영문대소문자/숫자/_/- 조합으로 등록할 수 있습니다.</li>
							<li>보기) 메뉴호출주소 :
							</li>
							<li>메뉴코드는 중복될 수 없습니다.</li>
						</ul>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">분류</label>
				<div class="col-md-10 col-lg-9">
					<div class="input-group">
						<input class="form-control" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">선택
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">기본페이지</a></li>
								<li><a href="#">모바일페이지</a></li>
								<li class="divider"></li>
								<li><a href="#">직접입력</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div>
					<span class="help-block">관리가 편하도록 페이지분류를 적절히 지정하여 등록해 주세요.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">전시내용</label>
				<div class="col-md-10 col-lg-9">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<a href="#codeBox" class="btn btn-default active" data-toggle="tab">
							<input id="option1" name="options" type="radio">
							직접꾸미기 
						</a>
						<a href="#widgetBox" class="btn btn-default" data-toggle="tab">
							<input id="option2" name="options" type="radio">
							위젯전시 
						</a>
						<a href="#jointBox" class="btn btn-default" data-toggle="tab">
							<input id="option3" name="options" type="radio">
							모듈연결 
						</a>
					</div>
				</div>
			</div>
			<div class="form-group tab-content">
				<div class="tab-pane active form-group" id="codeBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<a href="/rb/?r=home&m=admin&module=home&front=page-new" class="btn btn-default btn-block" type="button"><i class="fa fa-pencil fa-lg"></i> 페이지 직접편집</a>
					</div>
				</div>
				<div class="tab-pane form-group" id="widgetBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<button class="btn btn-default btn-block" type="button"><i class="fa fa-puzzle-piece fa-lg"></i> 위젯으로
							꾸미기</button>
					</div>
				</div>
				<div class="tab-pane form-group" id="jointBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<div class="input-group">
							<input class="form-control" type="text" value="/rb/home/c/home/site">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="fa fa-link fa-lg"></i> 모듈연결
								</button>
								<button class="btn btn-default" type="button">
									<i class="fa fa-external-link fa-lg"></i> 미리보기
								</button>
							</span>
						</div>
						<span class="help-block">
							<ul class="list-unstyled">
								<li>이 메뉴에 연결시킬 모듈이 있을 경우 모듈연결을 클릭한 후 선택해 주세요.</li>
								<li>모듈 연결주소가 지정되면 이 메뉴를 호출시 해당 연결주소의 모듈이 출력됩니다.</li>
								<li>접근권한은 연결된 모듈의 권한설정을 따릅니다.</li>
							</ul>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">레이아웃</label>
				<div class="col-md-10 col-lg-9">
					<select class="col-md-12 form-control" id="" tabindex="-1">
						<optgroup label="kimsQ 2.0 default">
							<option value="default">kimsQ 2.0 default-default</option>
							<option value="home">kimsQ 2.0 default-home</option>
							<option value="blank">kimsQ 2.0 default-blank</option>
						</optgroup>
						<optgroup label="Developer default">
							<option value="default">Developer default-default</option>
							<option value="home">Developer default-home</option>
							<option value="blank">Developer default-blank</option>
						</optgroup>
						<optgroup label="Tabula">
							<option value="default">Tabula-default</option>
							<option value="home">Tabula-home</option>
							<option value="blank">Tabula-blank</option>
						</optgroup>
						<optgroup label="Bootstrap 3.0">
							<option value="default">Bootstrap 3.0-default</option>
							<option value="home">Bootstrap 3.0-home</option>
							<option value="blank">Bootstrap 3.0-blank</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">소속메뉴</label>
				<div class="col-md-10 col-lg-9"></div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">허용등급</label>
				<div class="col-md-10 col-lg-9">
					<select class="col-md-12 form-control" name="perm_l">
						<option value="">&nbsp;+ 전체허용</option>
						<option value="1">ㆍ레벨1(1) 이상</option>
						<option value="2">ㆍ레벨2(0) 이상</option>
						<option value="3">ㆍ레벨3(0) 이상</option>
						<option value="4">ㆍ레벨4(0) 이상</option>
						<option value="5">ㆍ레벨5(0) 이상</option>
						<option value="6">ㆍ레벨6(0) 이상</option>
						<option value="7">ㆍ레벨7(0) 이상</option>
						<option value="8">ㆍ레벨8(0) 이상</option>
						<option value="9">ㆍ레벨9(0) 이상</option>
						<option value="10">ㆍ레벨10(0) 이상</option>
						<option value="11">ㆍ레벨11(0) 이상</option>
						<option value="12">ㆍ레벨12(0) 이상</option>
						<option value="13">ㆍ레벨13(0) 이상</option>
						<option value="14">ㆍ레벨14(0) 이상</option>
						<option value="15">ㆍ레벨15(0) 이상</option>
						<option value="16">ㆍ레벨16(0) 이상</option>
						<option value="17">ㆍ레벨17(0) 이상</option>
						<option value="18">ㆍ레벨18(0) 이상</option>
						<option value="19">ㆍ레벨19(0) 이상</option>
						<option value="20">ㆍ레벨20(0) 이상</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">차단그룹</label>
				<div class="col-md-10 col-lg-9">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default active">
							<input id="option1" name="options" type="radio">
							차단안함 
						</label>
						<label class="btn btn-default">
							<input id="option2" name="options" type="radio">
							<i class="fa fa-ban fa-lg"></i> 차단함 
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-lg-offset-2 col-md-10 col-lg-9">
					<select class="col-md-12 form-control" disabled multiple name="_perm_g" size="5">
						<option value="1">ㆍA그룹(1)</option>
						<option value="2">ㆍB그룹(0)</option>
						<option value="3">ㆍC그룹(0)</option>
						<option value="4">ㆍD그룹(0)</option>
						<option value="5">ㆍE그룹(0)</option>
						<option value="6">ㆍF그룹(0)</option>
						<option value="7">ㆍG그룹(0)</option>
						<option value="8">ㆍH그룹(0)</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">캐시적용</label>
				<div class="col-md-10 col-lg-9">
					<select class="col-md-12 form-control" name="cachetime">
						<option value="">&nbsp;+ 적용안함</option>
						<option value="1">01분</option>
						<option value="2">02분</option>
						<option value="3">03분</option>
						<option value="4">04분</option>
						<option value="5">05분</option>
						<option value="6">06분</option>
						<option value="7">07분</option>
						<option value="8">08분</option>
						<option value="9">09분</option>
						<option value="10">10분</option>
						<option value="11">11분</option>
						<option value="12">12분</option>
						<option value="13">13분</option>
						<option value="14">14분</option>
						<option value="15">15분</option>
						<option value="16">16분</option>
						<option value="17">17분</option>
						<option value="18">18분</option>
						<option value="19">19분</option>
						<option value="20">20분</option>
						<option value="21">21분</option>
						<option value="22">22분</option>
						<option value="23">23분</option>
						<option value="24">24분</option>
						<option value="25">25분</option>
						<option value="26">26분</option>
						<option value="27">27분</option>
						<option value="28">28분</option>
						<option value="29">29분</option>
						<option value="30">30분</option>
						<option value="31">31분</option>
						<option value="32">32분</option>
						<option value="33">33분</option>
						<option value="34">34분</option>
						<option value="35">35분</option>
						<option value="36">36분</option>
						<option value="37">37분</option>
						<option value="38">38분</option>
						<option value="39">39분</option>
						<option value="40">40분</option>
						<option value="41">41분</option>
						<option value="42">42분</option>
						<option value="43">43분</option>
						<option value="44">44분</option>
						<option value="45">45분</option>
						<option value="46">46분</option>
						<option value="47">47분</option>
						<option value="48">48분</option>
						<option value="49">49분</option>
						<option value="50">50분</option>
						<option value="51">51분</option>
						<option value="52">52분</option>
						<option value="53">53분</option>
						<option value="54">54분</option>
						<option value="55">55분</option>
						<option value="56">56분</option>
						<option value="57">57분</option>
						<option value="58">58분</option>
						<option value="59">59분</option>
						<option value="60">60분</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">주소</label>
				<div class="col-md-10 col-lg-9">
					<dl class="dl-horizontal">
						<dt>물리주소</dt>
						<dd>
							<code>/rb/index.php?r=home&c=home</code>&nbsp;<a href="#" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
						<dt>현재주소</dt>
						<dd>
							<code>/rb/home/c/home</code>&nbsp;<a href="#" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-lg-offset-2 col-md-10 col-lg-9">
					<button class="btn btn-primary btn-block btn-lg" type="button"><i class="fa fa-check fa-lg"></i> 속성
						변경</button>
				</div>
			</div>
		</form>
	</div>
</div>




<!-- Modal 방식 페이지 속성 수정 -->
<div class="modal fade" id="page-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title"><i class="fa fa-cog fa-lg"></i> &nbsp;페이지 등록정보</h4>
	</div>
	<div class="modal-body">

		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-md-2 control-label">명칭</label>
				<div class="col-md-10">
					<input class="form-control col-md-6" placeholder="" type="text" value="통합검색">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="checkbox">
							<span class="glyphicon glyphicon-home"></span>
							시작페이지 
						</label>
						<label class="btn btn-default">
							<input type="checkbox">
							<span class="glyphicon glyphicon-phone"></span>
							모바일용 
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">코드</label>
				<div class="col-md-10">
					<div class="input-group">
						<input class="form-control" type="text" value="search">
						<span class="input-group-btn">
							<button class="btn btn-danger" type="button">
								<i class="fa fa-trash-o fa-lg"></i> 삭제
							</button>
						</span>
					</div>
					<span class="help-block">
						<ul class="list-unstyled">
							<li>이 메뉴를 잘 표현할 수 있는 단어로 입력해 주세요.</li>
							<li>영문대소문자/숫자/_/- 조합으로 등록할 수 있습니다.</li>
							<li>보기) 메뉴호출주소 :
							</li>
							<li>메뉴코드는 중복될 수 없습니다.</li>
						</ul>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">분류</label>
				<div class="col-md-10">
					<div class="input-group">
						<input class="form-control" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">선택
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">기본페이지</a></li>
								<li><a href="#">모바일페이지</a></li>
								<li class="divider"></li>
								<li><a href="#">직접입력</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div>
					<span class="help-block">관리가 편하도록 페이지분류를 적절히 지정하여 등록해 주세요.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">전시내용</label>
				<div class="col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<a href="#codeBox-xs" class="btn btn-default active" data-toggle="tab">
							<input id="option1" name="options" type="radio">
							직접꾸미기 
						</a>
						<a href="#widgetBox-xs" class="btn btn-default" data-toggle="tab">
							<input id="option2" name="options" type="radio">
							위젯전시 
						</a>
						<a href="#jointBox-xs" class="btn btn-default" data-toggle="tab">
							<input id="option3" name="options" type="radio">
							모듈연결 
						</a>
					</div>
				</div>
			</div>
			<div class="form-group tab-content">
				<div class="tab-pane active form-group" id="codeBox-xs">
					<div class="col-md-offset-2 col-md-10">
						<a href="/rb/?r=home&m=admin&module=home&front=page-new" class="btn btn-default btn-block" type="button"><i class="fa fa-pencil fa-lg"></i> 페이지 직접편집</a>
					</div>
				</div>
				<div class="tab-pane form-group" id="widgetBox-xs">
					<div class="col-md-offset-2 col-md-10">
						<button class="btn btn-default btn-block" type="button"><i class="fa fa-puzzle-piece fa-lg"></i> 위젯으로
							꾸미기</button>
					</div>
				</div>
				<div class="tab-pane form-group" id="jointBox-xs">
					<div class="col-md-offset-2 col-md-10">
						<div class="input-group">
							<input class="form-control" type="text" value="/rb/home/c/home/site">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-link fa-lg"></i>
							</button>
							<button class="btn btn-default" type="button">
								<i class="fa fa-external-link fa-lg"></i>
							</button>
							</span>
						</div>
						<span class="help-block">
							<ul class="list-unstyled">
								<li>이 메뉴에 연결시킬 모듈이 있을 경우 모듈연결을 클릭한 후 선택해 주세요.</li>
								<li>모듈 연결주소가 지정되면 이 메뉴를 호출시 해당 연결주소의 모듈이 출력됩니다.</li>
								<li>접근권한은 연결된 모듈의 권한설정을 따릅니다.</li>
							</ul>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">소속메뉴</label>
				<div class="col-md-10"></div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">허용등급</label>
				<div class="col-md-10">
					<select class="col-md-12 form-control" name="perm_l">
						<option value="">&nbsp;+ 전체허용</option>
						<option value="1">ㆍ레벨1(1) 이상</option>
						<option value="2">ㆍ레벨2(0) 이상</option>
						<option value="3">ㆍ레벨3(0) 이상</option>
						<option value="4">ㆍ레벨4(0) 이상</option>
						<option value="5">ㆍ레벨5(0) 이상</option>
						<option value="6">ㆍ레벨6(0) 이상</option>
						<option value="7">ㆍ레벨7(0) 이상</option>
						<option value="8">ㆍ레벨8(0) 이상</option>
						<option value="9">ㆍ레벨9(0) 이상</option>
						<option value="10">ㆍ레벨10(0) 이상</option>
						<option value="11">ㆍ레벨11(0) 이상</option>
						<option value="12">ㆍ레벨12(0) 이상</option>
						<option value="13">ㆍ레벨13(0) 이상</option>
						<option value="14">ㆍ레벨14(0) 이상</option>
						<option value="15">ㆍ레벨15(0) 이상</option>
						<option value="16">ㆍ레벨16(0) 이상</option>
						<option value="17">ㆍ레벨17(0) 이상</option>
						<option value="18">ㆍ레벨18(0) 이상</option>
						<option value="19">ㆍ레벨19(0) 이상</option>
						<option value="20">ㆍ레벨20(0) 이상</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">차단그룹</label>
				<div class="col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default active">
							<input id="option1" name="options" type="radio">
							차단안함 
						</label>
						<label class="btn btn-default">
							<input id="option2" name="options" type="radio">
							<i class="fa fa-ban fa-lg"></i> 차단함 
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<select class="col-md-12 form-control" disabled multiple name="_perm_g" size="5">
						<option value="1">ㆍA그룹(1)</option>
						<option value="2">ㆍB그룹(0)</option>
						<option value="3">ㆍC그룹(0)</option>
						<option value="4">ㆍD그룹(0)</option>
						<option value="5">ㆍE그룹(0)</option>
						<option value="6">ㆍF그룹(0)</option>
						<option value="7">ㆍG그룹(0)</option>
						<option value="8">ㆍH그룹(0)</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">캐시적용</label>
				<div class="col-md-10">
					<select class="col-md-12 form-control" name="cachetime">
						<option value="">&nbsp;+ 적용안함</option>
						<option value="1">01분</option>
						<option value="2">02분</option>
						<option value="3">03분</option>
						<option value="4">04분</option>
						<option value="5">05분</option>
						<option value="6">06분</option>
						<option value="7">07분</option>
						<option value="8">08분</option>
						<option value="9">09분</option>
						<option value="10">10분</option>
						<option value="11">11분</option>
						<option value="12">12분</option>
						<option value="13">13분</option>
						<option value="14">14분</option>
						<option value="15">15분</option>
						<option value="16">16분</option>
						<option value="17">17분</option>
						<option value="18">18분</option>
						<option value="19">19분</option>
						<option value="20">20분</option>
						<option value="21">21분</option>
						<option value="22">22분</option>
						<option value="23">23분</option>
						<option value="24">24분</option>
						<option value="25">25분</option>
						<option value="26">26분</option>
						<option value="27">27분</option>
						<option value="28">28분</option>
						<option value="29">29분</option>
						<option value="30">30분</option>
						<option value="31">31분</option>
						<option value="32">32분</option>
						<option value="33">33분</option>
						<option value="34">34분</option>
						<option value="35">35분</option>
						<option value="36">36분</option>
						<option value="37">37분</option>
						<option value="38">38분</option>
						<option value="39">39분</option>
						<option value="40">40분</option>
						<option value="41">41분</option>
						<option value="42">42분</option>
						<option value="43">43분</option>
						<option value="44">44분</option>
						<option value="45">45분</option>
						<option value="46">46분</option>
						<option value="47">47분</option>
						<option value="48">48분</option>
						<option value="49">49분</option>
						<option value="50">50분</option>
						<option value="51">51분</option>
						<option value="52">52분</option>
						<option value="53">53분</option>
						<option value="54">54분</option>
						<option value="55">55분</option>
						<option value="56">56분</option>
						<option value="57">57분</option>
						<option value="58">58분</option>
						<option value="59">59분</option>
						<option value="60">60분</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">주소</label>
				<div class="col-md-10">
					<dl class="dl-horizontal">
						<dt>물리주소</dt>
						<dd>
							<code>/rb/index.php?r=home&c=home</code>&nbsp;<a href="#" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
						<dt>현재주소</dt>
						<dd>
							<code>/rb/home/c/home</code>&nbsp;<a href="#" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
					</dl>
				</div>
			</div>
		</form>

	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check fa-lg"></i> 속성변경</button>
	  <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">닫기</button>
	</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->