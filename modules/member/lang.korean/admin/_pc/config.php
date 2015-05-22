
<style type="text/css">

.tab-content .tab-content {
	border: 0
}
</style>


<!-- Nav pills -->
<ul class="nav nav-pills">
	<li class="active"><a href="#signup-config" data-toggle="tab"><i class="fa fa-cog fa-lg"></i>  회원가입 설정</a></li>
	<li><a href="#signup-form-config" data-toggle="tab"><i class="fa fa-file-text-o fa-lg"></i> 가입양식 관리</a></li>
	<li><a href="#signup-form-add" data-toggle="tab"><i class="fa fa-plus-circle fa-lg"></i> 가입항목 추가</a></li>
	<li><a href="#profile" data-toggle="tab"><i class="fa fa-check-square fa-lg"></i> 로그인/프로필</a></li>
	<li><a href="#terms" data-toggle="tab"><i class="fa fa-bullhorn fa-lg"></i> 약관/안내메시지</a></li>
</ul>

<hr>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="signup-config">
		<!-- 회원가입 설정 -->
		<form class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">회원가입 작동상태</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 작동
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 중단
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">모바일 회원가입</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 작동
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 중단
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">가입시 소속그룹</label>
						<div class="col-lg-9">
							<select name="join_group" class="form-control">
							<option value="1" selected="selected">ㆍA그룹(1)</option>
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
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">가입시 회원등급</label>
						<div class="col-lg-9">
							<select name="join_level" class="form-control">
							<option value="1" selected="selected">ㆍ레벨1(1)</option>
							<option value="2">ㆍ레벨2(0)</option>
							<option value="3">ㆍ레벨3(0)</option>
							<option value="4">ㆍ레벨4(0)</option>
							<option value="5">ㆍ레벨5(0)</option>
							<option value="6">ㆍ레벨6(0)</option>
							<option value="7">ㆍ레벨7(0)</option>
							<option value="8">ㆍ레벨8(0)</option>
							<option value="9">ㆍ레벨9(0)</option>
							<option value="10">ㆍ레벨10(0)</option>
							<option value="11">ㆍ레벨11(0)</option>
							<option value="12">ㆍ레벨12(0)</option>
							<option value="13">ㆍ레벨13(0)</option>
							<option value="14">ㆍ레벨14(0)</option>
							<option value="15">ㆍ레벨15(0)</option>
							<option value="16">ㆍ레벨16(0)</option>
							<option value="17">ㆍ레벨17(0)</option>
							<option value="18">ㆍ레벨18(0)</option>
							<option value="19">ㆍ레벨19(0)</option>
							<option value="20">ㆍ레벨20(0)</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">탈퇴데이터 처리</label>
						<div class="col-lg-9">
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox1" value="option1"> 즉시삭제
							</label>
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox2" value="option2"> 관리자 확인 후 삭제
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">탈퇴후 재가입</label>
						<div class="col-lg-9">
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox1" value="option1"> 허용안함
							</label>
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox2" value="option2"> 허용
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">가입시 승인처리</label>
						<div class="col-lg-9">
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox1" value="option1"> 즉시승인
							</label>
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox2" value="option2"> 관리자 확인 후 승인
							</label>
							<label class="radio-inline">
							  <input type="radio" id="inlineCheckbox2" value="option2"> 이메일 인증 후 승인
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">가입시 지급포인트</label>
						<div class="col-lg-9">
							<input type="number" class="form-control" placeholder="">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">대표 이메일</label>
						<div class="col-lg-9">
							<input type="email" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">가입 이메일</label>
						<div class="col-lg-9">
							<div class="checkbox">
							  <label>
							    <input type="checkbox" value="">
							    가입안내 이메일 발송
							  </label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">회원가입 레이아웃</label>
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
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">로그인 레이아웃</label>
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
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">프로필 레이아웃</label>
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
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">소속메뉴</label>
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
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">포인트지급 메세지</label>
						<div class="col-lg-9">
							<input type="text" name="join_pointmsg" value="[가입축하포인트]회원가입을 축하합니다." class="form-control">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group error">
						<label class="col-lg-3 control-label">사용제한 아이디</label>
						<div class="col-lg-9">
							<input type="text" name="join_pointmsg" value="admin,root,webmaster" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">사용제한 닉네임</label>
						<div class="col-lg-9">
							<input type="text" name="join_pointmsg" value="관리자,운영자,마스터,웹마스터" class="form-control">
							<span class="help-block">사용을 제한하려는 아이디와 닉네임을 콤마(,)로 구분해서 입력해 주세요.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-9">
							<button type="submit" class="btn btn-primary hidden-xs hidden-sm"><i class="fa fa-check"></i> 정보저장</button>
							<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check"></i> 정보저장</button>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</form>
		<!-- /회원가입 설정 -->
	</div>
	<div class="tab-pane" id="signup-form-config">
		<!-- 가입양식 관리 -->
		<form class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">이용약관/개인정보</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 생략
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 동의얻음
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">회원가입 연령제한</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 연령 제한없음
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 14세이하 제한
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">외국인가입</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 허용안함
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 허용함
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">기업회원가입</label>
						<div class="col-lg-9">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1"> 사용안함
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2"> 사용함
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">SNS아이디 입력</label>
						<div class="col-lg-9">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Twitter
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> Facebook
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox3" value="option3"> Google Plus
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">패스워드찾기 질문</label>
						<div class="col-lg-9">
<textarea name="pw_question"  class="form-control" rows="18">
내가 좋아하는 캐릭터는?
타인이 모르는 자신만의 신체비밀이 있다면?
자신의 인생 좌우명은?
초등학교 때 기억에 남는 짝꿍 이름은?
유년시절 가장 생각나는 친구 이름은?
가장 기억에 남는 선생님 성함은?
친구들에게 공개하지 않은 어릴 적 별명이 있다면?
다시 태어나면 되고 싶은 것은?
가장 감명깊게 본 영화는?
읽은 책 중에서 좋아하는 구절이 있다면?
기억에 남는 추억의 장소는?
인상 깊게 읽은 책 이름은?
자신의 보물 제1호는?
받았던 선물 중 기억에 남는 독특한 선물은?
자신이 두번째로 존경하는 인물은?
아버지의 성함은?
어머니의 성함은?
</textarea>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">기업회원가입</label>
						<div class="col-lg-9">
<textarea name="job" class="form-control" rows="18">
주부
중/고생
대학생
대학원생
회사원
공무원
자영업
교직자
의료인
법조인
금융/증권
보험업
언론/방송
종교
농/축산
수산/광업
서비스업
군인
건설업
제조업
유통업
부동산업
인터넷
경영컨설팅
문화/예술
스포츠/레져
정보통신업
프리랜서
무직
기타</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">노출항목 및 옵션</label>
						<div class="col-lg-9">
							<fieldset disabled>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked"> 아이디 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" checked="checked"> 필수입력
								</label>
							</fieldset>
							<fieldset disabled>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked"> 이메일 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" checked="checked"> 필수입력
								</label>
							</fieldset>
							<fieldset disabled>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked"> 패스워드 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" checked="checked"> 필수입력
								</label>
							</fieldset>
							<fieldset disabled>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked"> 이름 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" checked="checked"> 필수입력
								</label>
							</fieldset>
							<fieldset>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 닉네임 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" disabled="disabled"> 필수입력
								</label>
							</fieldset>
							<fieldset>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> 생년월일 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" disabled="disabled"> 필수입력
								</label>
							</fieldset>
							<fieldset>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 성별 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
								</label>
							</fieldset>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 패스워드 찾기질답 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 홈페이지 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 집전화 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 휴대폰 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 직업 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 결혼기념일 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
					<fieldset>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1" checked> 주소 &nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-lg text-muted"></i></label>
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2" checked> 필수입력
						</label>
					</fieldset>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-lg-offset-3 col-lg-9">
							<button type="submit" class="btn btn-primary hidden-xs hidden-sm"><i class="fa fa-check"></i> 정보저장</button>
							<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check"></i> 정보저장</button>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</form>

		<!-- /가입양식 관리 -->
	</div>
	<div class="tab-pane" id="signup-form-add">
		<!-- 가입항목 추가 -->
		<ul>
			<li>회원가입 폼에 기본양식외의 필요한 입력양식이 있을 경우 추가해 주세요.</li>
			<li>입력양식 추가는 반드시 회원가입 서비스를 정식으로 오픈하기 전에 셋팅해 주세요.</li>
			<li>서비스도중 양식을 추가하면 이미 가입한 회원에 대해서는 반영되지 않습니다.</li>
			<li>회원검색용도로 양식을 추가하는 것은 권장하지 않습니다.</li>
		</ul>

		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th colspan="2" class="text-center">명칭</th>
						<th class="text-center">형식</th>
						<th class="text-center">속성</th>
						<th class="text-center">가로(px)</th>
						<th>필수</th>
						<th>숨김</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td><button type="button" class="btn btn-primary">추가</button></td>
						<td><input type="text" class="form-control" placeholder=""></td>
						<td>
							<select name="add_type" class="form-control">
							<option value="text">TEXT</option>
							<option value="password">PASSWORD</option>
							<option value="select">SELECT</option>
							<option value="radio">RADIO</option>
							<option value="checkbox">CHECKBOX</option>
							<option value="textarea">TEXTAREA</option>
							</select>
						</td>
						<td><input type="text" class="form-control" placeholder=""></td>
						<td><input type="text" class="form-control" placeholder=""></td>
						<td>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
								</label>
							</div>
						</td>
						<td>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
								</label>
							</div>
						</td>
					</tr>	
				</tbody>
			</table>
		</div>


		<!-- /가입항목 추가 -->
	</div>
	<div class="tab-pane" id="profile">
		<!-- 로그인/프로필 -->
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label">로그인 포인트지급</label>
				<div class="col-lg-2">
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-addon">포인트</span>
					</div>
					<span class="help-block">1일 1회에 한함</span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label">로그인 페이지 옵션</label>
				<div class="col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							보안접속(SSL) 사용
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							이메일 아이디 사용
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							오픈아이디(OpenID) 사용
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label">프로필 페이지  메뉴노출</label>
				<div class="col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							게시물
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							댓글
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							한줄의견
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							캐릭터
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							스크랩
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							쪽지
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							친구
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							포인트
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							접속기록
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							정보수정
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							비번변경
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							회원탈퇴
						</label>
					</div>
				</div>
			</div>
			<hr>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary hidden-xs hidden-sm"><i class="fa fa-check"></i> 정보저장</button>
					<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check"></i> 정보저장</button>
				</div>
			</div>
		</form>

		<!-- /로그인/프로필 -->
	</div>
	<div class="tab-pane" id="terms">
		<!-- 약관/안내메시지 -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-parent="#accordion" data-toggle="collapse" href="#terms-1">
								홈페이지 이용약관
							</a>
						</h4>
					</div>
					<div class="panel-collapse collapse in" id="terms-1">
						<div>
<textarea name="agree1" class="form-control" rows="15">제1조(목적)

이 이용약관(이하 '약관')은 주식회사 OOO(이하 회사라 합니다)와 이용 고객(이하 '회원')간에 회사가 제공하는 서비스의 가입조건 및 이용에 관한 제반 사항과 기타 필요한 사항을 구체적으로 규정함을 목적으로 합니다. 

제2조(이용약관의 효력 및 변경)

① 이 약관은 본 회사에 가입된 고객을 포함하여 서비스를 이용하고자 하는 모든 이용자에 대하여 서비스 메뉴 및 회사에 게시하여 공시하거나 기타의 방법으로 고객에게 공지함으로써 그 효력을 발생합니다. 약관의 게시는 OOO(http://www.OOO.com)사이트에서 확인 할 수 있습니다.
② 회사는 합리적인 사유가 발생될 경우에는 이 약관을 변경할 수 있으며, 약관을 변경할 경우에는 지체 없이 이를 사전에 공지합니다.

제3조(약관외 준칙)

서비스 이용에 관하여는 이 약관을 적용하며 이 약관에 명시되지 아니한 사항에 대하여는 전기통신기본법, 전기통신사업법,정보통신망 이용촉진등에 관한 법률 및 기타 관계법령의 규정에 의합니다. 

제4조(용어의 설명)

① 이 약관에서 사용하는 용어의 정의는 다음과 같습니다.
1.'이용고객'이라 함은 회원제로 운영하는 서비스를 이용하는 이용자를 의미합니다.
2.'이용계약'이라 함은 서비스 이용과 관련하여 회사와 이용고객 간에 체결 하는 계약을 말합니다.
3.'이용자번호(ID)'라 함은 회원식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 승인하는 영문자와 숫자의 조합을 말합니다.
4.'비밀번호'라 함은 이용고객이 부여 받은 이용자번호와 일치된 이용고객 임을 확인하고 이용고객의 권익보호를 위하여 이용고객이 선정한 문자와 숫자의 조합을 말합니다.
5.'해지'라 함은 회사 또는 회원이 이용계약을 해약하는 것을 말합니다.

② 이 약관에서 사용하는 용어의 정의는 제1항에서 정하는 것을 제외하고는 관계법령 및 서비스별 안내에서 정하는 바에 의합니다.

제5조(이용 계약의 성립)

① 이용계약은 이용하고자 하는 고객의 본 이용약관 내용에 대한 동의와 이용신청에 대하여 회사의 승낙으로 성립합니다.
② 본 이용약관에 대한 동의는 신청시 두드림사이트의 '동의' 버튼을 누름으로써 의사표시를 합니다.

제6조(서비스 이용 신청)

① 본 서비스를 이용하고자 하는 이용고객은 회사에서 요청하는 정보(성명, 주민등록번호, 연락처 등)를 제공하여 회원으로 가입한 후 이용이 가능합니다.
② 모든 회원은 반드시 회원 본인의 이름과 주민등록번호를 제공하여야만 서비스의 이용이 가능하며 비실명의 경우 서비스 이용에 제한을 받으실 수 있습니다.
③ 회원가입은 반드시 실명으로만 가입이 가능합니다.
④ 타인의 명의(이름 또는 주민등록번호)를 도용하여 이용신청을 한 회원의 ID는 사전예고없이 삭제가 될 수 있으며, 관계법령에 따라 처벌을 받을 수 있습니다.
⑤ 회사는 본 서비스를 이용하는 회원에 대하여 등급별로 구분하여 서비스의 이용에 차등을 둘 수 있습니다.

제7조(개인정보의 보호 및 사용)

회사는 관계법령이 정하는 바에 따라 서비스 이용자의 개인정보를 보호하기 위해 개인정보보호정책을 시행합니다. 이용자 개인정보의 보호 및 사용에 대해서는 관련법령 및 회사의 개인정보 보호정책이 적용됩니다. 그러나, 회사는 이용자의 귀책사유로 인해 노출된 정보에 대해서 일체의 책임을 지지 않습니다. 

제8조(이용 신청의 승낙과 제한)

① 회사는 제 6조의 규정에 의한 이용신청고객에 대하여 업무 수행상 또는 기술상 지장이 없는 경우에 서비스 이용을 승낙합니다.
② 회사는 아래사항에 해당하는 경우에 대해서 승낙하지 아니 합니다.
1. 타인 명의의 신청 또는 이름이 실명이 아닌경우
2. 허위 서류를 첨부하거나 허위내용을 기재하여 신청하는 경우
3. 신용정보의 이용과보호에 관한 법류에 의한 PC통신, 인터넷 서비스의 신용불량자로 등록되어 있는경우
4. 사회의 안녕 질서 또는 미풍양속을 저해할 목적으로 신청한 경우
5. 정보통신 윤리위원회에 PC통신, 인터넷 서비스의 불량 이용자로 등록되어 있는 경우
6. 기타 회사가 정한 이용신청요건이 만족되지 않았을경우

③ 회사는 서비스 이용신청이 다음 각 호에 해당하는 경우에는 그 신청에 대하여 승낙 제한사유가 해소될 때까지 승낙을 유보할 수 있습니다.
1. 회사가 설비의 여유가 없는 경우
2. 회사의 기술상 지장이 있는 경우
3. 기타 회사의 귀책사유로 이용승낙이 곤란한 경우
④ 회사는 규정에 의하여 이용신청이 불승낙되거나 승낙을 제한하는 경우에는 이를 이용신청 고객에게 즉시 알려야 합니다.
⑤ 회사는 이용신청고객이 미성년자인 경우에는 별도로 정하는 바에 따라 승낙을 제한할 수 있습니다.

제9조(회사의 권리와 의무)

① 회사는 회원으로 부터 제기되는 의견이나 불만이 정당하다고 인정할 경우에는 즉시 처리하여야 합니다. 다만, 즉시 처리가 곤란한 경우에는 회원에게 그 사유와 처리일정을 서면, 전자우편 또는 전화등으로 통보하여야 합니다.
② 회사는 회사가 제정한 개인정보보호정책에 따라서 이용고객의 개인정보를 보호할 의무를 가집니다. 단, 법률의 규정에 따른 적법한 절차에 의한 경우에는 그러하지 않을 수 있습니다.
③ 회사가 제 2 항의 규정에도 불구하고 고지 또는 명시한 범위를 초과하여 이용고객의 개인 정보를 이용하거나 제 3 자에게 제공하고자 하는 경우에는 반드시 해당 회원에게 개별적으로 공지하여 동의를 받아야 합니다.
④ 회사는 계속적이고 안정적인 서비스의 제공을 위하여 설비에 장애가 생기거나 멸실된 때에는 지체없이 이를 수리 또는 복구합니다. 다만, 천재지변, 비상사태 또는 그밖에 부득이한 경우에는 그 서비스를 일시 중단하거나 중지할 수 있습니다.
⑤ 회사는 이용계약의 체결, 계약사항의 변경 및 해지 등 회원과의 계약관련 절차 및 내용등에 있어 회원에게 편의를 제공해야 합니다.
⑥ 회사는 업무와 관련하여 회원의 사전동의 하에 회원전체 또는 일부의 개인정보에 관한 통계자료를 작성하여 이를 사용할 수 있고 서비스를 통하여 회원의 컴퓨터에 쿠키를 전송 할 수 있습니다. 이 경우 회원은 쿠키의 수신을 거부하거나 쿠키의 수신에 대하여 경고하도록 사용하는 컴퓨터의 브라우저의 설정을 변경할 수 있으며, 쿠키의 설정 변경에 의한 서비스 이용이 변경되는 것은 회원의 책임입니다.

제10조(회원의 권리와 의무)

① 회원은 서비스를 이용할 때 다음의 행위를 하지 않아야 합니다.

1. 다른 회원의 ID 및 비밀번호를 부정하게 사용하는 행위
2. 서비스를 이용하여 얻은 정보를 회원의 개인적인 이용 외에 복사,가공,번역, 2차적 저작 등을 통하여 복제,공연,방송,전시,배포,출판 등에 사용하거나 제3자에게 제공하는 행위
3. 타인의 명예를 손상시키거나 불이익을 주는 행위
4. 회사의 저작권, 제3자의 저작권 등 기타 권리를 침해하는 행위
5. 공공질서 및 미풍양속에 위반되는 내용의 정보,문장,도형,음성 등을 타인에게 유포하는 행위
6. 범죄와 결부된다고 객관적으로 인정되는 행위
7. 서비스와 관련된 설비의 오동작이나 정보 등의 파괴 및 혼란을 유발시키는 컴퓨터 바이러스 감염자료를 등록 또는 유포하는 행위
8. 서비스의 안정적 운영을 방해할 수 있는 정보를 전송하거나 수신자의 의사에 반하여 광고성 정보를 전송하는 행위
9. 정보통신윤리위원회, 소비자보호단체 등 공신력 있는 기관으로부터 시정요구를 받는 행위
10. 선거관리위원회의 중지, 경고 또는 시정명령을 받는 선거법 위반 행위
11. 기타 관계법령에 위배되는 행위

② 회원은 이 약관에 규정하는 사항과 서비스 이용안내 또는 주의사항을 준수하여야 하며 회사가 공지하거나 별도로 게시한 사항을 준수하여야 합니다.
③ 회원은 회사의 명시적인 사전 동의가 없이 서비스를 이용하여 영업활동을 할 수 없으며, 이에 위반하여 발생한 결과에 대하여 회사는 책임지지 않습니다.
④ 회원은 이와 같은 영업활동과 관련하여 회사에 대하여 손해배상의무를 집니다.
⑤ 회원은 서비스의 이용약관, 기타 이용계약상 지위를 타인에게 양도, 증여 할 수 없으며, 이를 담보로 제공할 수 없습니다.
⑥ 회원은 회사의 사전 승낙없이는 서비스의 전부 또는 일부 내용 및 기능을 전용할 수 없습니다.
⑦ 회사는 이용고객이 방문하거나 전자서명 또는 아이디(ID)등을 이용하여 자신의 개인정보에 대한 열람 또는 정정을 요구하는 경우에는 본인 여부를 확인하고 지체없이 필요한 조치를 취하여야 합니다.
⑧ 회사는 이용고객의 대리인이 방문하여 열람 또는 정정을 요구하는 경우에는 대리관계를 나타내는 증표를 제시하도록 요구할 수 있습니다.
⑨ 회사는 개인정보와 관련하여 이용고객의 의견을 수렴하고 불만을 처리하기 위한 절차를 마련하여야 합니다.

제11조(서비스 이용 시간)

① 서비스 이용은 회사의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴, 1일 24시간 운영을 원칙으로 합니다. 단, 회사는 시스템 정기점검, 증설 및 교체를 위해 회사가 정한 날이나 시간에 서비스를 일시중단할 수 있으며, 예정되어 있는 작업으로 인한 서비스 일시중단은 웹을 통해 사전에 공지합니다.
② 회사는 회사가 통제할 수 없는 사유로 인한 서비스중단의 경우(시스템관리자의 고의,과실없는 디스크장애, 시스템다운 등)에 사전통지가 불가능하며 타인(PC통신회사, 기간통신사업자 등)의 고의,과실로 인한 시스템중단 등의 경우에는 통지하지 않습니다.

제12조(이용자 ID 관리)

① 아이디(ID)와 비밀번호에 관한 모든 관리책임은 회원에게 있습니다.
② 자신의 아이디(ID)가 부정하게 사용된 경우 회원은 반드시 회사에 그 사실을 통보해야 합니다.

제13조(게시물의 관리)

회사는 다음 각 호에 해당하는 게시물이나 자료를 사전통지 없이 삭제하거나 이동 또는 등록 거부를 할 수 있습니다.

- 다른 회원 또는 제 3자에게 심한 모욕을 주거나 명예를 손상시키는 내용인 경우
- 공공질서 및 미풍양속에 위반되는 내용을 유포하거나 링크시키는 경우
- 불법복제 또는 해킹을 조장하는 내용인 경우
- 영리를 목적으로 하는 광고일 경우
- 범죄와 결부된다고 객관적으로 인정되는 내용일 경우
- 다른 이용자 또는 제 3자의 저작권 등 기타 권리를 침해하는 내용인 경우
- 회사에서 규정한 게시물 원칙에 어긋나거나, 게시판 성격에 부합하지 않는 경우
- 기타 관계법령에 위배된다고 판단되는 경우

제14조(게시물에 대한 저작권)

① 회원은 서비스를 이용하여 취득한 정보를 임의 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다.
② 회사는 회원이 게시하거나 등록하는 서비스 내의 내용물, 게시 내용에 대해 제 13조 각 호에 해당된다고 판단되는 경우 사전통지 없이 삭제하거나 이동 또는 등록 거부할 수 있습니다.

제15조(정보의 제공)

회사는 회원이 서비스 이용 도중 필요가 있다고 인정되는 다양한 정보에 대해서 전자우편이나 전화통신등의 방법으로 회원에게 제공할 수 있습니다.

제16조(광고게재 및 광고주와의 거래)

① 회사가 회원에게 서비스를 제공할 수 있는 서비스 투자기반의 일부는 광고게재를 통한 수익으로부터 나옵니다. 회원은 서비스 이용시 노출되는 광고게재에 대해 동의합니다.
② 회사는 서비스상에 게재되어 있거나 본 서비스를 통한 광고주의 판촉활동에 회원이 참여하거나 교신 또는 거래를 함으로써 발생하는 손실과 손해에 대해 책임을 지지 않습니다.

제17조(계약 변경 및 해지)

회원이 이용계약을 해지하고자 하는 때에는 회원 본인이 OOO 웹 내의 "회원탈퇴"메뉴를 이용해 가입해지를 해야 합니다.

제18조(서비스 이용제한)

① 회사는 회원이 서비스 이용내용에 있어서 본 약관 제 10조 내용을 위반하거나, 다음 각 호에 해당하는 경우 서비스 이용을 제한할 수 있습니다.
1. 미풍양속을 저해하는 비속한 ID 및 별명 사용
2. 타 이용자에게 심한 모욕을 주거나, 서비스 이용을 방해한 경우
3. 기타 정상적인 서비스 운영에 방해가 될 경우
4. 정보통신 윤리위원회 등 관련 공공기관의 시정 요구가 있는 경우
5. 불법 웹사이트인 경우
6. 상용소프트웨어나 크랙파일을 올린 경우
7. 정보통신윤리 위원회의 심의 세칙 제 7조에 어긋나는 음란물을 게재한 경우
8. 반국가적 행위의 수행을 목적으로 하는 내용을 포함한 경우
9. 저작권이 있는 글을 무단 복제하거나 mp3를 올린 경우
10.정보통신 설비의 오작동이나 정보등의 파괴를 유발시키는 컴퓨터 바이러스 프로그램등 을 유포하는 경우

② 상기 이용제한 규정에 따라 서비스를 이용하는 회원에게 서비스 이용에 대하여 별도 공지 없이 서비스 이용의 일시정지, 정지, 이용계약 해지 등을 불량이용자 처리규정에 따라 취할 수 있습니다.

제19조(손해배상의 범위 및 청구)

① 회사는 서비스로부터 회원이 받은 손해가 천재지변등 불가항력적이거나 회원의 고의 또는 과실로 인하여 발생한 때에는 손해배상을 하지 아니합니다.
② 회사는 전자상거래 호스팅 및 일반 호스팅의 경우 이에 준하는 서비스 이용회원일 경우 불가항력적으로 발생한 경우 위 1 항의 규정에 따릅니다.
③ 회원이 서비스를 이용함에 있어 행한 불법행위로 인하여 회사가 당해 회원 이외에 제 3 자로부터 손해배상 청구, 소송을 비롯한 각종의 이의제기를 받는 경우 당해 회원은 회사의 면책을 위하여 노력하여야 하며, 만일 회사가 면책되지 못한 경우는 당해 회원은 그로 인하여 회사에 발생한 모든 손해를 배상하여야 합니다.

제20조(면책사항)

① 회사는 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.
② 회사는 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.
③ 회사는 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대한 책임이 면제됩니다.
④ 회사는 회원의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.
⑤ 회사는 이용자의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 회원이 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.
⑥ 회사는 회원이 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.
⑦ 회사는 회원 상호간 또는 회원과 제 3 자 상호간에 서비스를 매개로 하여 물품거래(무형의 물품 포함)등을 한 경우에 그로부터 발생하는 일체의 손해에 대하여 책임지지 아니합니다.
⑧ 회사에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.

제21조(재판권 및 분쟁조정)

① 이 약관에 명시되지 않은 사항은 전기통신사업법 등 관계법령과 상관습에 따릅니다.
② 서비스 이용과 관련하여 회사와 회원사이에 분쟁이 발생한 경우, 쌍방간에 분쟁의 해결을 위해 성실히 협의한 후가 아니면 제소할 수 없습니다.
③ 서비스 이용으로 발생한 분쟁에 대해 소송이 제기되는 경우 회사의 본사 소재지를 관할하는 법원을 관할 법원으로 합니다.

이 약관은 OOOO년 OO월 OO일부터 시행합니다.</textarea>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-parent="#accordion" data-toggle="collapse" href="#terms-2">
								정보수집/이용목적
							</a>
						</h4>
					</div>
					<div class="panel-collapse collapse" id="terms-2">
						<div>
<textarea name="agree2" class="form-control" rows="15">'OOO'는 (이하 '회사'는) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다.
회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다. 

ο 본 방침은 : OOOO년 OO월 OO일 부터 시행됩니다.


개인정보의 수집 및 이용목적

회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. 

ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산
콘텐츠 제공, 구매 및 요금 결제, 물품배송 또는 청구지등 발송
ο 회원 관리
회원제 서비스 이용에 따른 본인확인, 불량회원의 부정 이용 방지와 비인가 사용 방지, 가입 의사 확인,
만14세 미만 아동 개인정보 수집 시 법정 대리인 동의여부 확인, 고지사항 전달
ο 마케팅 및 광고에 활용
이벤트 등 광고성 정보 전달, 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</textarea>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-parent="#accordion" data-toggle="collapse" href="#terms-3">
								개인정보수집항목
							</a>
						</h4>
					</div>
					<div class="panel-collapse collapse" id="terms-3">
						<div>
<textarea name="agree3" class="form-control" rows="8">수집하는 개인정보의 항목

회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
ο 수집항목 : 이름, 생년월일, 성별, 로그인ID, 비밀번호, 자택 전화번호, 자택 주소, 휴대전화번호, 회사명, 부서, 직책, 회사전화번호, 결혼여부, 기념일, 접속 로그, 쿠키, 접속IP 정보 
ο 개인정보 수집방법 : 웹사이트(www.OOO.com)</textarea>
						</div>
					</div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-parent="#accordion" data-toggle="collapse" href="#terms-4">
								정보보유/이용기간
							</a>
						</h4>
					</div>
					<div class="panel-collapse collapse" id="terms-4">
						<div>
<textarea name="agree4" class="form-control" rows="15">개인정보의 보유 및 이용기간 

원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 
보존 항목 : 이름, 성별, 로그인ID, 비밀번호, 자택 전화번호, 자택 주소, 휴대전화번호, 이메일
보존 근거 : 전자상거래등에서의 소비자보호에 관한 법률
보존 기간 : 회원탈퇴시까지

계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률)

개인정보의 파기 절차 및 방법 

회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
ο 파기절차
회원님이 회원가입 등을 위해 입력하신 정보는 DB에 저장되며, 저장된 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.
ο 파기방법 
전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</textarea>
						</div>
					</div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-parent="#accordion" data-toggle="collapse" href="#terms-5">
								개인정보위탁처리
							</a>
						</h4>
					</div>
					<div class="panel-collapse collapse" id="terms-5">
						<div>
<textarea name="agree5" class="form-control" rows="15">개인 정보 제공

회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다. 
- 이용자들이 사전에 동의한 경우
- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우

수집한 개인정보의 위탁 

회사는 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.

이용자 및 법정대리인의 권리와 그 행사방법 

이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. 
이용자 혹은 만 14세 미만 아동의 개인정보 조회·수정을 위해서는 ‘개인정보변경’(또는 ‘회원정보수정’ 등)을 가입해지(동의철회)를 위해서는 “회원탈퇴”를 클릭 하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 
혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다. 
귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다. 
(주)이지소프트는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 “OOO가 수집하는 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다. 

개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항 

회사는 귀하의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’ 등을 운용합니다. 쿠키란 OOO의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다. 

▶ 쿠키 등 사용 목적
- 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공 
- 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 

▶ 쿠키 설정 거부 방법 
쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.

설정방법 예(인터넷 익스플로어의 경우) : 
웹 브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보 

단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.

개인정보에 관한 민원서비스 

회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.

고객서비스담당 부서 : 
전화번호 : 
이메일 : 

개인정보관리책임자 성명 : 
전화번호 : 
이메일 : 

귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.

기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.
1.개인분쟁조정위원회 (www.1336.or.kr/1336)
2.정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)
3.대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)
4.경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)</textarea>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div>
				<button type="submit" class="btn btn-primary hidden-xs hidden-sm"><i class="fa fa-check"></i> 정보저장</button>
				<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check"></i> 정보저장</button>
			</div>
		<!-- 약관/안내메시지 -->
	</div>
</div>

<br><br><br>
<!-- 여기까지  권기택 작업 입니다.  -->



<?php include_once $g['path_module'].$module.'/var/var.join.php'?>


<div id="configbox">

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="member_config" />
	<input type="hidden" name="_join_menu" value="<?php echo $_SESSION['_join_menu']?$_SESSION['_join_menu']:1?>" />


	<div class="tab">
		<ul>
		<li id="tbox1" class="leftside selected" onclick="confShow(1);">회원가입 설정</li>
		<li id="tbox2" onclick="confShow(2);">가입양식 관리</li>
		<li id="tbox3" onclick="confShow(3);">가입항목 추가</li>
		<li id="tbox4" onclick="confShow(4);">로그인/MYPAGE</li>
		<li id="tbox5" onclick="confShow(5);">약관/안내메세지</li>
		</ul>
	</div>
	<div class="agreebox">
		<div id="tarea1">


			<table>
				<tr>
					<td class="td1"><span>회원가입 작동상태</span></td>
					<td class="td2">
						<select name="join_enable" class="select1">
						<option value="0"<?php if(!$d['member']['join_enable']):?> selected="selected"<?php endif?>>ㆍ회원가입 중단</option>
						<option value="1"<?php if($d['member']['join_enable']):?> selected="selected"<?php endif?>>ㆍ회원가입 작동</option>
						</select>
					</td>
					<td class="td1"><span>모바일 회원가입</span></td>
					<td class="td2">
						<select name="join_mobile" class="select1">
						<option value="1"<?php if($d['member']['join_mobile']):?> selected="selected"<?php endif?>>ㆍ지원</option>
						<option value="0"<?php if(!$d['member']['join_mobile']):?> selected="selected"<?php endif?>>ㆍ지원하지 않음</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td1"><span>가입시 소속그룹</span></td>
					<td class="td2">
						<select name="join_group" class="select1">
						<?php $_SOSOK=getDbArray($table['s_mbrgroup'],'','*','gid','asc',0,1)?>
						<?php while($_S=db_fetch_array($_SOSOK)):?>
						<option value="<?php echo $_S['uid']?>"<?php if($_S['uid']==$d['member']['join_group']):?> selected="selected"<?php endif?>>ㆍ<?php echo $_S['name']?>(<?php echo number_format($_S['num'])?>)</option>
						<?php endwhile?>
						</select>
					</td>

					<td class="td1"><span>가입시 회원등급</span></td>
					<td class="td2">
						<select name="join_level" class="select1">
						<?php $_LEVEL=getDbArray($table['s_mbrlevel'],'','*','uid','asc',0,1)?>
						<?php while($_L=db_fetch_array($_LEVEL)):?>
						<option value="<?php echo $_L['uid']?>"<?php if($_L['uid']==$d['member']['join_level']):?> selected="selected"<?php endif?>>ㆍ<?php echo $_L['name']?>(<?php echo number_format($_L['num'])?>)</option>
						<?php if($_L['gid'])break; endwhile?>
						</select>
					</td>
				</tr>

				<tr>
					<td class="td1"><span>탈퇴데이터 처리</span></td>
					<td class="td2">
						<select name="join_out" class="select1">
						<option value="1"<?php if($d['member']['join_out']==1):?> selected="selected"<?php endif?>>ㆍ즉시삭제</option>
						<option value="2"<?php if($d['member']['join_out']==2):?> selected="selected"<?php endif?>>ㆍ관리자확인 후 삭제</option>
						</select>
					</td>

					<td class="td1"><span>탈퇴후 재가입</span></td>
					<td class="td2">
						<select name="join_rejoin" class="select1">
						<option value="0"<?php if(!$d['member']['join_rejoin']):?> selected="selected"<?php endif?>>ㆍ허용안함</option>
						<option value="1"<?php if($d['member']['join_rejoin']):?> selected="selected"<?php endif?>>ㆍ허용</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="td1"><span>가입시 승인처리</span></td>
					<td class="td2">
						<select name="join_auth" class="select1">
						<option value="1"<?php if($d['member']['join_auth']==1):?> selected="selected"<?php endif?>>ㆍ즉시승인</option>
						<option value="2"<?php if($d['member']['join_auth']==2):?> selected="selected"<?php endif?>>ㆍ관리자확인 후 승인</option>
						<option value="3"<?php if($d['member']['join_auth']==3):?> selected="selected"<?php endif?>>ㆍ이메일인증 후 승인</option>
						</select>
					</td>
					<td class="td1"><span>가입시 지급포인트</span></td>
					<td class="td2">
						<input type="text" name="join_point" value="<?php echo $d['member']['join_point']?>" class="input sname" />
					</td>
				</tr>

				<tr>
					<td class="td1"><span>포인트지급 메세지</span></td>
					<td class="td2" colspan="3">
						<input type="text" name="join_pointmsg" value="<?php echo $d['member']['join_pointmsg']?>" class="input sname1" />
					</td>
				</tr>

				<tr>
					<td class="td1"><span>사용제한 아이디</span></td>
					<td class="td2" colspan="3">
						<input type="text" name="join_cutid" value="<?php echo $d['member']['join_cutid']?>" class="input sname1" />
					</td>
				</tr>
				<tr>
					<td class="td1"><span>사용제한 닉네임</span></td>
					<td class="td2" colspan="3">
						<input type="text" name="join_cutnic" value="<?php echo $d['member']['join_cutnic']?>" class="input sname1" />
						<div class="guide">사용을 제한하려는 아이디와 닉네임을 콤마(,)로 구분해서 입력해 주세요.</div>
					</td>
				</tr>
				<tr>
					<td class="td1"><span>대표 이메일</span></td>
					<td class="td2">
						<input type="text" name="join_email" value="<?php echo $d['member']['join_email']?>" class="input sname" />
					</td>
					<td class="td1"><span>가입 이메일</span></td>
					<td class="td2">
						<input type="checkbox" name="join_email_send" value="1"<?php if($d['member']['join_email_send']):?> checked="checked"<?php endif?> />가입안내 이메일 발송
					</td>
				</tr>
				<tr>
					<td class="td1"><span>회원가입 레이아웃</span></td>
					<td class="td2">
						<select name="layout_join" class="select1">
						<option value="">&nbsp;+ 사이트 대표레이아웃</option>
						<?php $dirs = opendir($g['path_layout'])?>
						<?php while(false !== ($tpl = readdir($dirs))):?>
						<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
						<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
						<option value="">--------------------------------</option>
						<?php while(false !== ($tpl1 = readdir($dirs1))):?>
						<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
						<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($d['member']['layout_join']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($g['path_layout'].$tpl)?>(<?php echo str_replace('.php','',$tpl1)?>)</option>
						<?php endwhile?>
						<?php closedir($dirs1)?>
						<?php endwhile?>
						<?php closedir($dirs)?>
						</select>
					</td>
					<td class="td1"><span>로그인 레이아웃</span></td>
					<td class="td2">
						<select name="layout_login" class="select1">
						<option value="">&nbsp;+ 사이트 대표레이아웃</option>
						<?php $dirs = opendir($g['path_layout'])?>
						<?php while(false !== ($tpl = readdir($dirs))):?>
						<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
						<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
						<option value="">--------------------------------</option>
						<?php while(false !== ($tpl1 = readdir($dirs1))):?>
						<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
						<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($d['member']['layout_login']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($g['path_layout'].$tpl)?>(<?php echo str_replace('.php','',$tpl1)?>)</option>
						<?php endwhile?>
						<?php closedir($dirs1)?>
						<?php endwhile?>
						<?php closedir($dirs)?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td1"><span>마이페이지 레이아웃</span></td>
					<td class="td2">
						<select name="layout_mypage" class="select1">
						<option value="">&nbsp;+ 사이트 대표레이아웃</option>
						<?php $dirs = opendir($g['path_layout'])?>
						<?php while(false !== ($tpl = readdir($dirs))):?>
						<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
						<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
						<option value="">--------------------------------</option>
						<?php while(false !== ($tpl1 = readdir($dirs1))):?>
						<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
						<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($d['member']['layout_mypage']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($g['path_layout'].$tpl)?>(<?php echo str_replace('.php','',$tpl1)?>)</option>
						<?php endwhile?>
						<?php closedir($dirs1)?>
						<?php endwhile?>
						<?php closedir($dirs)?>
						</select>
					</td>
					<td class="td1"><span>소속메뉴</span></td>
					<td class="td2">

						<select name="sosokmenu" class="select1">
						<option value="">&nbsp;+ 사용안함</option>
						<option value="">--------------------------------</option>
						<?php include_once $g['path_core'].'function/menu1.func.php'?>
						<?php $cat=$d['member']['sosokmenu']?>
						<?php getMenuShowSelect($s,$table['s_menu'],0,0,0,0,0,'')?>
						</select>
					
					</td>
				</tr>
			</table>


		</div>
		<div id="tarea2" class="hide">
		


			<table>
				<tr>
					<td class="td1"><span>이용약관/개인정보</span></td>
					<td class="td2">
						<select name="form_agree" class="select1">
						<option value="0"<?php if(!$d['member']['form_agree']):?> selected="selected"<?php endif?>>ㆍ생략</option>
						<option value="1"<?php if($d['member']['form_agree']):?> selected="selected"<?php endif?>>ㆍ동의얻음</option>
						</select>
					</td>

					<td class="td1"></td>
					<td class="td2">

					</td>
				</tr>
				<tr>
					<td class="td1"><span>주민등록번호 확인</span></td>
					<td class="td2">
						<select name="form_jumin" class="select1">
						<option value="0"<?php if(!$d['member']['form_jumin']):?> selected="selected"<?php endif?>>ㆍ확인안함</option>
						<option value="1"<?php if($d['member']['form_jumin']):?> selected="selected"<?php endif?>>ㆍ확인함</option>
						</select>
					</td>

					<td class="td1"><span>회원가입 연령제한</span></td>
					<td class="td2">
						<select name="form_age" class="select1">
						<option value="0"<?php if(!$d['member']['form_age']):?> selected="selected"<?php endif?>>ㆍ연령제한없음</option>
						<option value="1"<?php if($d['member']['form_age']):?> selected="selected"<?php endif?>>ㆍ14세이하제한</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td1"><span>외국인가입</span></td>
					<td class="td2">
						<select name="form_foreign" class="select1">
						<option value="0"<?php if(!$d['member']['form_foreign']):?> selected="selected"<?php endif?>>ㆍ허용안함</option>
						<option value="1"<?php if($d['member']['form_foreign']):?> selected="selected"<?php endif?>>ㆍ허용</option>
						</select>
					</td>

					<td class="td1"><span>기업회원가입</span></td>
					<td class="td2">
						<select name="form_comp" class="select1">
						<option value="0"<?php if(!$d['member']['form_comp']):?> selected="selected"<?php endif?>>ㆍ사용안함</option>
						<option value="1"<?php if($d['member']['form_comp']):?> selected="selected"<?php endif?>>ㆍ사용</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td1"><span>노출항목 및 옵션</span></td>
					<td class="td2 shift">
						
						<table>
							<?php $pilsuset = array('아이디','이메일','패스워드','이름')?>
							<?php foreach($pilsuset as $_val):?>
							<tr>
							<td><input type="checkbox" checked="checked" disabled="disabled" /><?php echo $_val?></td>
							<td>-</td>
							<td><input type="checkbox" checked="checked" disabled="disabled" />필수입력</td>
							</tr>
							<?php endforeach?>
							<?php $opset = array('nic'=>'닉네임','birth'=>'생년월일','sex'=>'성별')?>
							<?php foreach($opset as $_key => $_val):?>
							<tr>
							<td><input type="checkbox" name="form_<?php echo $_key?>" value="1"<?php if($d['member']['form_'.$_key]):?> checked="checked"<?php endif?> /><?php echo $_val?></td>
							<td>-</td>
							<td><input type="checkbox" name="form_<?php echo $_key?>_p" value="1"<?php if($d['member']['form_'.$_key.'_p']):?> checked="checked"<?php endif?> />필수입력</td>
							</tr>
							<tr>
							<?php endforeach?>
						</table>
					
					</td>
					<td class="td2" colspan="2">
						<table>
							<?php $opset = array('qa'=>'비번찾기질답','home'=>'홈페이지','tel1'=>'집전화','tel2'=>'휴대폰','job'=>'직업','marr'=>'결혼기념일','addr'=>'주소')?>
							<?php foreach($opset as $_key => $_val):?>
							<tr>
							<td><input type="checkbox" name="form_<?php echo $_key?>" value="1"<?php if($d['member']['form_'.$_key]):?> checked="checked"<?php endif?> /><?php echo $_val?></td>
							<td>-</td>
							<td><input type="checkbox" name="form_<?php echo $_key?>_p" value="1"<?php if($d['member']['form_'.$_key.'_p']):?> checked="checked"<?php endif?> />필수입력</td>
							</tr>
							<tr>
							<?php endforeach?>
						</table>
					</td>
				</tr>
			</table>
			<table class="table">
				<tr>
					<td class="td1"><span>비번찾기 질문/직업군</span></td>
					<td class="td2">
						<textarea name="pw_question" class="question"><?php readfile($g['path_module'].$module.'/var/pw_question.txt')?></textarea>
					</td>
					<td class="td2">
						<textarea name="job" class="job"><?php readfile($g['path_module'].$module.'/var/job.txt')?></textarea>
					</td>
				</tr>
			</table>



		</div>
		<div id="tarea3" class="hide">
			
			<div class="addf">


			<ul>
			<li>회원가입 폼에 기본양식외의 필요한 입력양식이 있을 경우 추가해 주세요.</li>
			<li>입력양식 추가는 반드시 회원가입 서비스를 정식으로 오픈하기 전에 셋팅해 주세요.</li>
			<li>서비스도중 양식을 추가하면 이미 가입한 회원에 대해서는 반영되지 않습니다.</li>
			<li>회원검색용도로 양식을 추가하는 것은 권장하지 않습니다.</li>
			</ul>

			<table summary="회원리스트 입니다.">
			<caption>회원리스트</caption> 
			<colgroup> 
			<col width="60"> 
			<col width="100"> 
			<col width="100"> 
			<col> 
			<col width="50"> 
			<col width="50"> 
			<col width="50"> 
			</colgroup> 
			<thead>
			<tr>
			<th scope="col" class="side1"></th>
			<th scope="col">명칭</th>
			<th scope="col">형식</th>
			<th scope="col">속성</th>
			<th scope="col">가로(px)</th>
			<th scope="col">필수</th>
			<th scope="col" class="side2">숨김</th>
			</tr>
			</thead>
			<tbody>

			<?php $_add = file($g['path_module'].$module.'/var/add_field.txt')?>
			<?php foreach($_add as $_key):?>
			<?php $_val = explode('|',trim($_key))?>

			<tr>
			<td><input type="button" value="삭제" class="btngray" onclick="delField(this.form,'<?php echo $_val[0]?>');" /></td>
			<td><input type="text" name="add_name_<?php echo $_val[0]?>" size="13" value="<?php echo $_val[1]?>" class="input" /></td>
			<td>
				<input type="checkbox" name="addFieldMembers[]" value="<?php echo $_val[0]?>" checked="checked" class="hide" />
				<select name="add_type_<?php echo $_val[0]?>">
				<option value="text"<?php if($_val[2]=='text'):?> selected="selected"<?php endif?>>TEXT</option>
				<option value="password"<?php if($_val[2]=='password'):?> selected="selected"<?php endif?>>PASSWORD</option>
				<option value="select"<?php if($_val[2]=='select'):?> selected="selected"<?php endif?>>SELECT</option>
				<option value="radio"<?php if($_val[2]=='radio'):?> selected="selected"<?php endif?>>RADIO</option>
				<option value="checkbox"<?php if($_val[2]=='checkbox'):?> selected="selected"<?php endif?>>CHECKBOX</option>
				<option value="textarea"<?php if($_val[2]=='textarea'):?> selected="selected"<?php endif?>>TEXTAREA</option>
				</select>
			</td>
			<td><input type="text" name="add_value_<?php echo $_val[0]?>" size="30" value="<?php echo $_val[3]?>" class="input" /></td>
			<td><input type="text" name="add_size_<?php echo $_val[0]?>" size="4" value="<?php echo $_val[4]?>" class="input" /></td>
			<td><input type="checkbox" name="add_pilsu_<?php echo $_val[0]?>" value="1"<?php if($_val[5]):?> checked="checked"<?php endif?> /></td>
			<td><input type="checkbox" name="add_hidden_<?php echo $_val[0]?>" value="1"<?php if($_val[6]):?> checked="checked"<?php endif?> /></td>
			</tr>
			
			<?php endforeach?>

			<tr class="addline">
			<td><input type="button" value="추가" class="btnblue" onclick="addField(this.form);" /></td>
			<td><input type="text" name="add_name" size="13" class="input" /></td>
			<td>
				<select name="add_type">
				<option value="text">TEXT</option>
				<option value="password">PASSWORD</option>
				<option value="select">SELECT</option>
				<option value="radio">RADIO</option>
				<option value="checkbox">CHECKBOX</option>
				<option value="textarea">TEXTAREA</option>
				</select>
			</td>
			<td><input type="text" name="add_value" size="30" class="input" /></td>
			<td><input type="text" name="add_size" size="4" class="input" /></td>
			<td><input type="checkbox" name="add_pilsu" /></td>
			<td><input type="checkbox" name="add_hidden" /></td>
			</tr>
			
			</tbody>
			</table>


			<div class="preview">
				<table>
				<?php $i=0?>
				<?php foreach($_add as $_key):?>
				<?php $_val = explode('|',trim($_key))?>
				<?php if($_val[6]) continue?>
				<tr>
				<td class="td1"><?php echo $_val[1]?></td>
				<td>:</td>
				
				<?php if($_val[2]=='text'):?>
				<td class="td2"><input type="text" name="add_<?php echo $_val[0]?>" class="input" style="width:<?php echo $_val[4]?>px;" value="<?php echo $_val[3]?>" /></td>
				<?php endif?>
				<?php if($_val[2]=='password'):?>
				<td class="td2"><input type="password" name="add_<?php echo $_val[0]?>" class="input" style="width:<?php echo $_val[4]?>px;" value="<?php echo $_val[3]?>" /></td>
				<?php endif?>
				<?php if($_val[2]=='select'): $_skey=explode(',',$_val[3])?>
				<td class="td2">
				<select name="add_<?php echo $_val[0]?>" style="width:<?php echo $_val[4]?>px;">
				<option value="">&nbsp;+ 선택하세요</option>
				<?php foreach($_skey as $_sval):?>
				<option value="<?php echo trim($_sval)?>">ㆍ<?php echo trim($_sval)?></option>
				<?php endforeach?>
				</select>
				</td>
				<?php endif?>
				<?php if($_val[2]=='radio'): $_skey=explode(',',$_val[3])?>
				<td class="td2 shift">
				<?php foreach($_skey as $_sval):?>
				<input type="radio" name="add_<?php echo $_val[0]?>" value="<?php echo trim($_sval)?>" /><?php echo trim($_sval)?>
				<?php endforeach?>
				</td>
				<?php endif?>
				<?php if($_val[2]=='checkbox'): $_skey=explode(',',$_val[3])?>
				<td class="td2 shift">
				<?php foreach($_skey as $_sval):?>
				<input type="checkbox" name="add_<?php echo $_val[0]?>[]" value="<?php echo trim($_sval)?>" /><?php echo trim($_sval)?>
				<?php endforeach?>
				</td>
				<?php endif?>
				<?php if($_val[2]=='textarea'):?>
				<td class="td2"><textarea name="add_<?php echo $_val[0]?>" rows="5" style="width:<?php echo $_val[4]?>px;"><?php echo $_val[3]?></textarea></td>
				<?php endif?>

				</tr>
				<?php $i++; endforeach?>
				</table>
			</div>

			</div>

		</div>
		<div id="tarea4" class="hide">
			


			<table>
				<tr>
					<td class="td1"><span>로그인 포인트지급</span></td>
					<td class="td2">
						<input type="text" name="login_point" value="<?php echo $d['member']['login_point']?>" size="5" class="input" />포인트(1일 1회에 한함)
					</td>
				</tr>
				<tr>
					<td class="td1"><span>로그인페이지 옵션</span></td>
					<td class="td2">
						<input type="checkbox" name="login_ssl" value="1"<?php if($d['member']['login_ssl']):?> checked="checked"<?php endif?> />보안접속(SSL) 사용<br />
						<input type="checkbox" name="login_emailid" value="1"<?php if($d['member']['login_emailid']):?> checked="checked"<?php endif?> />이메일아이디 사용<br />
						<input type="checkbox" name="login_openid" value="1"<?php if($d['member']['login_openid']):?> checked="checked"<?php endif?> />오픈아이디(OpenID) 사용<br />
					</td>
				</tr>
				<tr>
					<td class="td1"><span>마이페이지 메뉴노출</span></td>
					<td class="td2">
						<input type="checkbox" name="mytab_post" value="1"<?php if($d['member']['mytab_post']):?> checked="checked"<?php endif?> />게시물<br />
						<input type="checkbox" name="mytab_comment" value="1"<?php if($d['member']['mytab_comment']):?> checked="checked"<?php endif?> />댓글<br />
						<input type="checkbox" name="mytab_oneline" value="1"<?php if($d['member']['mytab_oneline']):?> checked="checked"<?php endif?> />한줄의견<br />
						<input type="checkbox" name="mytab_simbol" value="1"<?php if($d['member']['mytab_simbol']):?> checked="checked"<?php endif?> />캐릭터<br />
						<input type="checkbox" name="mytab_scrap" value="1"<?php if($d['member']['mytab_scrap']):?> checked="checked"<?php endif?> />스크랩<br />
						<input type="checkbox" name="mytab_paper" value="1"<?php if($d['member']['mytab_paper']):?> checked="checked"<?php endif?> />쪽지<br />
						<input type="checkbox" name="mytab_friend" value="1"<?php if($d['member']['mytab_friend']):?> checked="checked"<?php endif?> />친구<br />
						<input type="checkbox" name="mytab_point" value="1"<?php if($d['member']['mytab_point']):?> checked="checked"<?php endif?> />포인트<br />
						<input type="checkbox" name="mytab_log" value="1"<?php if($d['member']['mytab_log']):?> checked="checked"<?php endif?> />접속기록<br />
						<input type="checkbox" name="mytab_info" value="1"<?php if($d['member']['mytab_info']):?> checked="checked"<?php endif?> />정보수정<br />
						<input type="checkbox" name="mytab_pw" value="1"<?php if($d['member']['mytab_pw']):?> checked="checked"<?php endif?> />비번변경<br />
						<input type="checkbox" name="mytab_out" value="1"<?php if($d['member']['mytab_out']):?> checked="checked"<?php endif?> />회원탈퇴<br />
					</td>
				</tr>
			</table>
		
		</div>
		<div id="tarea5" class="hide">
		
		</div>
	</div>


	<div class="submitbox">
		<input type="submit" class="btnblue" value=" 확인 " />
	</div>
	</form>

</div>















<div id="agreebox">
	<form name="nprocForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="agreesave" />
	<input type="hidden" name="_join_tab" value="<?php echo $_SESSION['_join_tab']?$_SESSION['_join_tab']:1?>" />

	<div class="tab">
		<ul>
		<li id="tagree1" class="leftside selected" onclick="tabShow(1);">홈페이지 이용약관</li>
		<li id="tagree2" onclick="tabShow(2);">정보수집/이용목적</li>
		<li id="tagree3" onclick="tabShow(3);">개인정보수집항목</li>
		<li id="tagree4" onclick="tabShow(4);">정보보유/이용기간</li>
		<li id="tagree5" onclick="tabShow(5);">개인정보위탁처리</li>
		</ul>
	</div>
	<div class="agreebox">
		<div id="bagree1"><textarea name="agree1"><?php readfile($g['path_module'].$module.'/var/agree1.txt')?></textarea></div>
		<div id="bagree2" class="hide"><textarea name="agree2"><?php readfile($g['path_module'].$module.'/var/agree2.txt')?></textarea></div>
		<div id="bagree3" class="hide"><textarea name="agree3"><?php readfile($g['path_module'].$module.'/var/agree3.txt')?></textarea></div>
		<div id="bagree4" class="hide"><textarea name="agree4"><?php readfile($g['path_module'].$module.'/var/agree4.txt')?></textarea></div>
		<div id="bagree5" class="hide"><textarea name="agree5"><?php readfile($g['path_module'].$module.'/var/agree5.txt')?></textarea></div>
	</div>

	<div class="submitbox">
		<input type="submit" value=" 확인 " class="btnblue" />
	</div>

	</form>
</div>

<script type="text/javascript">
//<![CDATA[
function addField(f)
{
	if (f.add_name.value == '')
	{
		alert('명칭을 입력해 주세요.  ');
		f.add_name.focus();
		return false;
	}
	f.submit();
}
function delField(f,dval)
{
	if (confirm('정말로 삭제하시겠습니까?   '))
	{
		var l = document.getElementsByName('addFieldMembers[]');
		var n = l.length;
		var i;

		for (i = 0; i < n; i++)
		{
			if (dval == l[i].value)
			{
				l[i].checked = false;
			}
		}
		f.submit();
	}
}
function confShow(n)
{
	var i;

	for (i = 1; i < 6; i++)
	{
		getId('tbox'+i).style.borderBottom = '#dfdfdf solid 1px';
		getId('tbox'+i).style.background = '#f9f9f9';
		getId('tbox'+i).style.color = '#000000';
		getId('tarea'+i).style.display = 'none';
	}
	getId('tbox'+n).style.borderBottom = '#ffffff solid 1px';
	getId('tbox'+n).style.background = '#ffffff';
	getId('tbox'+n).style.color = '#FF5B01';
	getId('tarea'+n).style.display = 'block';

	if (n == 5)
	{
		getId('agreebox').style.display = 'block';
	}
	else {
		getId('agreebox').style.display = 'none';
	}
	document.procForm._join_menu.value = n;
}
function tabShow(n)
{
	var i;

	for (i = 1; i < 6; i++)
	{
		getId('tagree'+i).style.borderBottom = '#dfdfdf solid 1px';
		getId('tagree'+i).style.background = '#f9f9f9';
		getId('tagree'+i).style.color = '#000000';
		getId('bagree'+i).style.display = 'none';
	}
	getId('tagree'+n).style.borderBottom = '#ffffff solid 1px';
	getId('tagree'+n).style.background = '#ffffff';
	getId('tagree'+n).style.color = '#078DFF';
	getId('bagree'+n).style.display = 'block';
	document.nprocForm._join_tab.value = n;
}
function saveCheck(f)
{
	if (f.join_auth.value == '3')
	{
		if (f.join_email.value == '')
		{
			alert('이메일인증을 설정하시려면 대표이메일을 반드시 등록해야 합니다.   ');
			f.join_email.focus();
			return false;
		}
	}
	if (f.join_email_send.checked == true)
	{
		if (f.join_email.value == '')
		{
			alert('가입이메일을 발송하시려면 대표이메일을 반드시 등록해야 합니다.   ');
			f.join_email.focus();
			return false;
		}
	}
	return confirm('정말로 실행하시겠습니까?      ');
}

tabShow(parseInt(document.nprocForm._join_tab.value));
confShow(parseInt(document.procForm._join_menu.value));
//]]>
</script>