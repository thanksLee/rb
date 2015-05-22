

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row site">


				<ul class="list-inline hidden-xs hidden-sm">
					<li>
						<a href="#">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x text-primary"></i>
							  <i class="fa fa-home fa-stack-1x text-primary"></i>
							</span>
							<p><span class="text-primary">레드블럭</span></p>
						</a>
					</li>
					<li>
						 <a href="#">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-shopping-cart fa-stack-1x"></i>
							</span>
							<p><span>쇼핑몰</span></p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-group fa-stack-1x"></i>
							</span>
							<p><span>그룹웨어</span></p>
						</a>
					</li>
					<li>
						  <a href="#">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-search fa-stack-1x"></i>
							</span>
							<p><span>통합검색</span></p>
						</a>
					</li>
				</ul>




				<ul class="list-inline visible-xs visible-sm">
					<li>
						<a data-toggle="modal" href="#home-Modal-site-info">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x text-primary"></i>
							  <i class="fa fa-home fa-stack-1x text-primary"></i>
							</span>
							<p><span class="text-primary">레드블럭</span></p>
						</a>
					</li>
					<li>
						<a data-toggle="modal" href="#home-Modal-site-info">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-shopping-cart fa-stack-1x"></i>
							</span>
							<p><span>쇼핑몰</span></p>
						</a>
					</li>
					<li>
						<a data-toggle="modal" href="#home-Modal-site-info">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-group fa-stack-1x"></i>
							</span>
							<p><span>그룹웨어</span></p>
						</a>
					</li>
					<li>
						<a data-toggle="modal" href="#home-Modal-site-info">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-square-o fa-stack-2x"></i>
							  <i class="fa fa-search fa-stack-1x"></i>
							</span>
							<p><span>통합검색</span></p>
						</a>
					</li>
				</ul>
	 




		</div>

	</div>
	<div class="panel-footer">
		<div class="btn-group">
			<a data-toggle="modal" href="#home-Modal-site" class="btn btn-link btn-sm visible-lg"><span class="glyphicon glyphicon-plus"></span> 사이트 추가</a>
			<button class="btn btn-link btn-sm" type="button">
				<span class="glyphicon glyphicon-saved"></span>
				순서저장</button>
		</div>
	</div>
</div>

<!-- 사이트 상세정보  -->
<div class="hidden-xs hidden-sm">
	<div class="page-header" id="home-site-info">
		<h4>
			<span class="glyphicon glyphicon-globe"></span>&nbsp;사이트 기본 정보
			<small>(홈페이지1)</small></h4>
	</div>
	<form class="form-horizontal">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">사이트명</label>
					<div class="col-lg-9">
						<input class="form-control" placeholder="" type="text">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">사이트제목</label>
					<div class="col-lg-9">
						<div class="input-group">
							<input class="form-control" placeholder="" type="text">
							<span class="input-group-addon">
								<input type="checkbox">
								고정 
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">사이트 언어</label>
					<div class="col-lg-9">
						<select class="form-control">
							<option value="">한국어</option>
							<option value="">영어</option>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">사이트코드</label>
					<div class="col-lg-9">
						<div class="input-group">
							<input class="form-control" placeholder="" type="text">
							<span class="input-group-addon">
								<input type="checkbox">
								사용 
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">레이아웃</label>
					<div class="col-lg-9">
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
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">시작페이지</label>
					<div class="col-lg-9">
						<div class="input-group">
							<select class="form-control" name="startpage">
								<option value="">&nbsp;+ 선택하세요</option>
								<option selected="selected" value="1">ㆍ메인화면(main)</option>
							</select>
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
					<div class="col-lg-9">
						<select class="form-control" name="m_layout">
							<option value="">&nbsp;+ PC접속과 동일</option>
							<option value="tabula/main.php">ㆍtabula (main)</option>
							<option value="tabula/zone.php">ㆍtabula (zone)</option>
							<option value="mobile/main.php">ㆍ1.2.0 모바일(main)</option>
							<option value="bootstrap/main.php">ㆍbootstrap 3.0(main)</option>
							<option value="bootstrap/default.php">ㆍbootstrap 3.0(default)</option>
							<option value="default/main.php">ㆍ1.2.0 기본형(main)</option>
							<option value="default/zone.php">ㆍ1.2.0 기본형(zone)</option>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
					<div class="col-lg-9">
						<div class="input-group">
							<select class="form-control" name="m_startpage">
								<option value="">&nbsp;+ PC접속과 동일</option>
								<option value="1">ㆍ메인화면(main)</option>
								<option value="9">ㆍ메인화면(main_mobile)</option>
							</select>
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">서비스상태</label>
					<div class="col-lg-9">
						<div class="visible-lg">
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 정상서비스
							</label>
							<label class="radio-inline">
							  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 관리자오픈 
							</label>
							<label class="radio-inline">
							  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> 정지 
							</label>
						</div> 
						</div>      
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default">
								<input id="option1" name="options" type="radio">
								정상서비스 
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">
								관리자오픈 
							</label>
							<label class="btn btn-default">
								<input id="option3" name="options" type="radio">
								정지 
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">DTD형식</label>
					<div class="col-lg-9">
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> HTML 5
							</label>
							<label class="radio-inline">
							  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> XHTML 1.0
							</label>
						</div>   
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default">
								<input id="option1" name="options" type="radio">
								HTML 5
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">
								XHTML 1.0
							</label>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">이름표시</label>
					<div class="col-lg-9">
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default">
								<input id="option1" name="options" type="radio">닉네임
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">이름(실명)
							</label>
							<label class="btn btn-default">
								<input id="option3" name="options" type="radio">아이디
							</label>
						</div>
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 닉네임
							</label>
							<label class="radio-inline">
							  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 이름(실명) 
							</label>
							<label class="radio-inline">
							  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> 아이디 
							</label>
						</div>   
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">시간조정</label>
					<div class="col-lg-9">
						<select class="form-control" name="timecal">
							<option value="-23">ㆍ-23시간</option>
							<option value="-22">ㆍ-22시간</option>
							<option value="-21">ㆍ-21시간</option>
							<option value="-20">ㆍ-20시간</option>
							<option value="-19">ㆍ-19시간</option>
							<option value="-18">ㆍ-18시간</option>
							<option value="-17">ㆍ-17시간</option>
							<option value="-16">ㆍ-16시간</option>
							<option value="-15">ㆍ-15시간</option>
							<option value="-14">ㆍ-14시간</option>
							<option value="-13">ㆍ-13시간</option>
							<option value="-12">ㆍ-12시간</option>
							<option value="-11">ㆍ-11시간</option>
							<option value="-10">ㆍ-10시간</option>
							<option value="-9">ㆍ-9시간</option>
							<option value="-8">ㆍ-8시간</option>
							<option value="-7">ㆍ-7시간</option>
							<option value="-6">ㆍ-6시간</option>
							<option value="-5">ㆍ-5시간</option>
							<option value="-4">ㆍ-4시간</option>
							<option value="-3">ㆍ-3시간</option>
							<option value="-2">ㆍ-2시간</option>
							<option value="-1">ㆍ-1시간</option>
							<option selected="selected" value="0">ㆍ조정안함</option>
							<option value="1">ㆍ+1시간</option>
							<option value="2">ㆍ+2시간</option>
							<option value="3">ㆍ+3시간</option>
							<option value="4">ㆍ+4시간</option>
							<option value="5">ㆍ+5시간</option>
							<option value="6">ㆍ+6시간</option>
							<option value="7">ㆍ+7시간</option>
							<option value="8">ㆍ+8시간</option>
							<option value="9">ㆍ+9시간</option>
							<option value="10">ㆍ+10시간</option>
							<option value="11">ㆍ+11시간</option>
							<option value="12">ㆍ+12시간</option>
							<option value="13">ㆍ+13시간</option>
							<option value="14">ㆍ+14시간</option>
							<option value="15">ㆍ+15시간</option>
							<option value="16">ㆍ+16시간</option>
							<option value="17">ㆍ+17시간</option>
							<option value="18">ㆍ+18시간</option>
							<option value="19">ㆍ+19시간</option>
							<option value="20">ㆍ+20시간</option>
							<option value="21">ㆍ+21시간</option>
							<option value="22">ㆍ+22시간</option>
							<option value="23">ㆍ+23시간</option>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">퍼포먼스</label>
					<div class="col-lg-9">
						<div class="visible-lg">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> 짧은주소사용
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> 버퍼전송사용
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> 검색엔진 크롤링 차단
							</label>
						</div>   
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default">
								<input type="checkbox">
								짧은주소사용 
							</label>
							<label class="btn btn-default">
								<input type="checkbox">
								버퍼전송사용 
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">연결도메인</label>
					<div class="col-lg-9">
						<p class="form-control-static">
							<span class="text-muted">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								연결된 도메인이 없습니다.</span></p>
						<a class="btn btn-default btn-block" href="">도메인 연결하기</a>
						<ul class="list-unstyled">
							<li>
								<span class="glyphicon glyphicon-globe"></span>
								<a href="http://redblock.co.kr" target="_blank">redblock.co.kr</a></li>
							<li>
								<span class="glyphicon glyphicon-globe"></span>
								<a href="http://redblock.co.kr" target="_blank">redblock.co.kr</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<label class="checkbox-inline">
					<input id="" type="checkbox" value="">
					<h4>헤더/테일 코드
						<small>사이트 전역에 사용자 코드를 적용할 수 있습니다.</small></h4>
				</label>
			</div>
			<div class="tabbable box-tabs">
				<ul class="nav nav-tabs tabs-left">
					<li class=""><a href="#box_tab3" data-toggle="tab">테일코드</a></li>
					<li class=""><a href="#box_tab2" data-toggle="tab">헤더코드</a></li>
					<li class="active"><a href="#box_tab1" data-toggle="tab">PHP코드</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="box_tab1">
						<div class="alert alert-info">
							이 사이트에 전용으로 사용될 PHP코드가 있을 경우 등록해 주세요.</div>
						<textarea class="form-control" rows="7"></textarea>
					</div>
					<div class="tab-pane" id="box_tab2">
						<div class="alert alert-info">
							<code>&lt;head&gt;</code>
							와 
							<code>&lt;/head&gt;</code>
							사이에 삽입하고자 할 코드가 있을 경우 등록해 주세요..</div>
						<textarea class="form-control" rows="7"></textarea>
					</div>
					<div class="tab-pane" id="box_tab3">
						<div class="alert alert-info">
							<code>&lt;/body&gt;&lt;/html&gt;</code>
							바로앞에 삽입하고자 할 코드가 있을 경우 등록해 주세요.</div>
						<textarea class="form-control" rows="7"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div>
		<button class="btn btn-primary btn-block btn-lg" type="button">사이트
			속성 변경</button>
	</div>
</div>
<!-- //사이트 상세정보  -->
</div>



<!-- 사이트 수정 모달 -->

<!-- Modal -->
<div class="modal fade" id="home-Modal-site-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title">
		<span class="glyphicon glyphicon-globe"></span>&nbsp;사이트 정보 수정
	  </h4>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">사이트명</label>
						<div class="col-lg-9">
							<input class="form-control" placeholder="" type="text" value="홈페이지1">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">사이트제목</label>
						<div class="col-lg-9">
							<div class="input-group">
								<input class="form-control" placeholder="" type="text" value="(주)레드블럭 홈페이지">
								<span class="input-group-addon">
									<input type="checkbox">
									고정 
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">사이트 언어</label>
						<div class="col-lg-9">
							<select class="form-control">
								<option value="">한국어</option>
								<option value="">영어</option>
							</select>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">사이트코드</label>
						<div class="col-lg-9">
							<div class="input-group">
								<input class="form-control" placeholder="" type="text">
								<span class="input-group-addon">
									<input type="checkbox">
									사용 
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">레이아웃</label>
						<div class="col-lg-9">
							<select class="col-md-12 form-control" id="" tabindex="-1">
								<optgroup label="Alaskan/Hawaiian Time Zone">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
								</optgroup>
								<optgroup label="Pacific Time Zone">
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
								</optgroup>
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
								</optgroup>
								<optgroup label="Central Time Zone">
									<option value="AL">Alabama</option>
									<option value="AR">Arkansas</option>
								</optgroup>
							</select>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">시작페이지</label>
						<div class="col-lg-9">
							<div class="input-group">
								<select class="form-control" name="startpage">
									<option value="">&nbsp;+ 선택하세요</option>
									<option selected="selected" value="1">ㆍ메인화면(main)</option>
								</select>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
						<div class="col-lg-9">
							<select class="form-control" name="m_layout">
								<option value="">&nbsp;+ PC접속과 동일</option>
								<option value="tabula/main.php">ㆍtabula (main)</option>
								<option value="tabula/zone.php">ㆍtabula (zone)</option>
								<option value="mobile/main.php">ㆍ1.2.0 모바일(main)</option>
								<option value="bootstrap/main.php">ㆍbootstrap 3.0(main)</option>
								<option value="bootstrap/default.php">ㆍbootstrap 3.0(default)</option>
								<option value="default/main.php">ㆍ1.2.0 기본형(main)</option>
								<option value="default/zone.php">ㆍ1.2.0 기본형(zone)</option>
							</select>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
						<div class="col-lg-9">
							<div class="input-group">
								<select class="form-control" name="m_startpage">
									<option value="">&nbsp;+ PC접속과 동일</option>
									<option value="1">ㆍ메인화면(main)</option>
									<option value="9">ㆍ메인화면(main_mobile)</option>
								</select>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">서비스상태</label>
						<div class="col-lg-9">
							<div class="visible-lg">
							<div class="visible-lg">
								<label class="radio-inline">
								   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 정상서비스
								</label>
								<label class="radio-inline">
								  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 관리자오픈 
								</label>
								<label class="radio-inline">
								  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> 정지 
								</label>
							</div> 
							</div>      
							<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input id="option1" name="options" type="radio">
									정상서비스 
								</label>
								<label class="btn btn-default">
									<input id="option2" name="options" type="radio">
									관리자오픈 
								</label>
								<label class="btn btn-default">
									<input id="option3" name="options" type="radio">
									정지 
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">DTD형식</label>
						<div class="col-lg-9">
							<div class="visible-lg">
								<label class="radio-inline">
								   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> HTML 5
								</label>
								<label class="radio-inline">
								  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> XHTML 1.0
								</label>
							</div>   
							<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input id="option1" name="options" type="radio">
									HTML 5
								</label>
								<label class="btn btn-default">
									<input id="option2" name="options" type="radio">
									XHTML 1.0
								</label>
							</div>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">이름표시</label>
						<div class="col-lg-9">
							<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input id="option1" name="options" type="radio">닉네임
								</label>
								<label class="btn btn-default">
									<input id="option2" name="options" type="radio">이름(실명)
								</label>
								<label class="btn btn-default">
									<input id="option3" name="options" type="radio">아이디
								</label>
							</div>
							<div class="visible-lg">
								<label class="radio-inline">
								   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 닉네임
								</label>
								<label class="radio-inline">
								  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 이름(실명) 
								</label>
								<label class="radio-inline">
								  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> 아이디 
								</label>
							</div>   
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">시간조정</label>
						<div class="col-lg-9">
							<select class="form-control" name="timecal">
								<option value="-23">ㆍ-23시간</option>
								<option value="-22">ㆍ-22시간</option>
								<option value="-21">ㆍ-21시간</option>
								<option value="-20">ㆍ-20시간</option>
								<option value="-19">ㆍ-19시간</option>
								<option value="-18">ㆍ-18시간</option>
								<option value="-17">ㆍ-17시간</option>
								<option value="-16">ㆍ-16시간</option>
								<option value="-15">ㆍ-15시간</option>
								<option value="-14">ㆍ-14시간</option>
								<option value="-13">ㆍ-13시간</option>
								<option value="-12">ㆍ-12시간</option>
								<option value="-11">ㆍ-11시간</option>
								<option value="-10">ㆍ-10시간</option>
								<option value="-9">ㆍ-9시간</option>
								<option value="-8">ㆍ-8시간</option>
								<option value="-7">ㆍ-7시간</option>
								<option value="-6">ㆍ-6시간</option>
								<option value="-5">ㆍ-5시간</option>
								<option value="-4">ㆍ-4시간</option>
								<option value="-3">ㆍ-3시간</option>
								<option value="-2">ㆍ-2시간</option>
								<option value="-1">ㆍ-1시간</option>
								<option selected="selected" value="0">ㆍ조정안함</option>
								<option value="1">ㆍ+1시간</option>
								<option value="2">ㆍ+2시간</option>
								<option value="3">ㆍ+3시간</option>
								<option value="4">ㆍ+4시간</option>
								<option value="5">ㆍ+5시간</option>
								<option value="6">ㆍ+6시간</option>
								<option value="7">ㆍ+7시간</option>
								<option value="8">ㆍ+8시간</option>
								<option value="9">ㆍ+9시간</option>
								<option value="10">ㆍ+10시간</option>
								<option value="11">ㆍ+11시간</option>
								<option value="12">ㆍ+12시간</option>
								<option value="13">ㆍ+13시간</option>
								<option value="14">ㆍ+14시간</option>
								<option value="15">ㆍ+15시간</option>
								<option value="16">ㆍ+16시간</option>
								<option value="17">ㆍ+17시간</option>
								<option value="18">ㆍ+18시간</option>
								<option value="19">ㆍ+19시간</option>
								<option value="20">ㆍ+20시간</option>
								<option value="21">ㆍ+21시간</option>
								<option value="22">ㆍ+22시간</option>
								<option value="23">ㆍ+23시간</option>
							</select>
							<span class="help-block"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">퍼포먼스</label>
						<div class="col-lg-9">
							<div class="visible-lg">
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox1" value="option1"> 짧은주소사용
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2"> 버퍼전송사용
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2"> 검색엔진 크롤링 차단
								</label>
							</div>   
							<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="checkbox">
									짧은주소사용 
								</label>
								<label class="btn btn-default">
									<input type="checkbox">
									버퍼전송사용 
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">연결도메인</label>
						<div class="col-lg-9">
							<p class="form-control-static">
								<span class="text-muted">
									<span class="glyphicon glyphicon-exclamation-sign"></span>
									연결된 도메인이 없습니다.</span></p>
							<a class="btn btn-default btn-block" href="">도메인 연결하기</a>
							<ul class="list-unstyled">
								<li>
									<span class="glyphicon glyphicon-globe"></span>
									<a href="http://redblock.co.kr" target="_blank">redblock.co.kr</a></li>
								<li>
									<span class="glyphicon glyphicon-globe"></span>
									<a href="http://redblock.co.kr" target="_blank">redblock.co.kr</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<label class="checkbox-inline">
						<input id="" type="checkbox" value="">
						<h4>헤더/테일 코드
							<small>사이트 전역에 사용자 코드를 적용할 수 있습니다.</small></h4>
					</label>
				</div>
				<div class="tabbable box-tabs">
					<ul class="nav nav-tabs tabs-left">
						<li class="text-center active" style="width:33.3%"><a href="#box_tab1" data-toggle="tab">헤더</a></li>
						<li class="text-center" style="width:33.3%"><a href="#box_tab2" data-toggle="tab">테일</a></li>
						<li class="text-center" style="width:33.3%"><a href="#box_tab3" data-toggle="tab">PHP</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="box_tab1">
							<div class="alert alert-info">
								<code>&lt;head&gt;</code>
								와 
								<code>&lt;/head&gt;</code>
								사이에 삽입하고자 할 코드가 있을 경우 등록해 주세요..</div>
							<textarea class="form-control" rows="7"></textarea>
						</div>
						<div class="tab-pane" id="box_tab2">
							<div class="alert alert-info">
								<code>&lt;/body&gt;&lt;/html&gt;</code>
								바로앞에 삽입하고자 할 코드가 있을 경우 등록해 주세요.</div>
							<textarea class="form-control" rows="7"></textarea>
						</div>
						<div class="tab-pane" id="box_tab3">
							<div class="alert alert-info">
								이 사이트에 전용으로 사용될 PHP코드가 있을 경우 등록해 주세요.</div>
							<textarea class="form-control" rows="7"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary btn-block btn-lg" type="button">사이트 속성 변경</button>
		<button type="button" class="btn btn-default btn-block btn-lg" data-dismiss="modal">닫기</button>
	</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->