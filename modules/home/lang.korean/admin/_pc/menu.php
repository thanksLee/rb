<link rel="stylesheet" type="text/css" href="<?php echo $g['url_module_skin']?>/assets/css/bootstrap-tree.css">


<div class="row">
<div class="col-md-4 col-lg-3" id="tab-content-list">
  <div class="site-selector" style="margin-bottom:10px">
		<select class="form-control">
		  <option>사이트 1</option>
		  <option>사이트 2</option>
		  <option>사이트 3</option>
		  <option>사이트 4</option>
		  <option>사이트 5</option>
		</select>
  </div>
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
	  <div class="panel-heading">
		<div class="icon">
		  <i class="glyphicon glyphicon-globe"></i>
		</div>
		<h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">메뉴속성</a></h4>
	  </div>

	  <div class="panel-collapse collapse in" id="collapseOne">
		<div class="panel-body">
		  <!-- tree -->


여기는 트리영역 입니다.


		  <!-- /tree -->
		</div>
		<div class="panel-footer" style="padding:0">
		  <ul class="nav nav-pills nav-justified">
			<li><a href="#" title="메뉴구조를 XML로 생성/받기" ><i class="glyphicon glyphicon-file"></i></a></li>
			<li><a href="#" title="메뉴구조를 엑셀로 받기"><i class="glyphicon glyphicon-book"></i></a></li>
			<li><a href="#" title="메뉴구조를 텍스트파일로 받기"><i class="glyphicon glyphicon-folder-open"></i></a></li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h4 class="panel-title">
		  <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
			메뉴 순서 조정
		  </a>
		</h4>
	  </div>
	  <div class="panel-collapse collapse" id="collapseTwo">
		<div class="panel-body">
		  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
		  terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
		  skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
		  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
		  single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
		  helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
		  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
		  beer farm-to-table, raw denim aesthetic synth nesciunt you probably
		  haven't heard of them accusamus labore sustainable VHS.
		</div>
		<div class="panel-footer">
		  <button class="btn btn-primary btn-lg btn-block" type="button">순서저장</button>
		</div>
	  </div>
	</div>
  </div>
  <hr>
</div>
<div class="col-md-8 col-lg-9" id="tab-content-view">
  <div class="page-header">
	<h4><i class="fa fa-sitemap fa-lg"></i>
	메뉴 등록정보 <span class="text-muted">( 회사소개 )</span> </h4>
  </div>
  <form class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-md-2 control-label">상위메뉴</label>
	  <div class="col-md-10">
		<p class="form-control-static">최상위 메뉴</p>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">메뉴명칭</label>
	  <div class="col-md-10">
		<div class="input-group">
		  <input class="form-control col-md-6" placeholder="" type="text" value="홈페이지">
		  <span class="input-group-btn">

			<button class="btn btn-default" type="button">
			  <i class="fa fa-level-down fa-lg"></i>
			</button>
			<button class="btn btn-default" type="button">
			  <i class="fa fa-trash-o fa-lg"></i>
			</button>

		  </span>
		</div><!-- /input-group -->
		<span class="help-block">메뉴를 삭제하면 소속된 하위메뉴까지 모두 삭제됩니다.</span>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">메뉴코드</label>
	  <div class="col-md-10">
		<div class="input-group">
		  <input class="form-control" placeholder="" type="text" value="home">
		  <span class="input-group-addon">
			고유키=<code>00015</code>
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
	<!-- 전시내용-직접꾸미기 일때  -->
	<div class="form-group">
	  <label class="col-md-2 control-label">전시내용</label>
	  <div class="col-md-10">
		<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
		  <label class="btn btn-default active">
			<input id="option1" name="options" type="radio">
			<i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="btn btn-default">
			<input id="option2" name="options" type="radio">
			위젯전시 
		  </label>
		  <label class="btn btn-default">
			<input id="option3" name="options" type="radio">
			모듈연결 
		  </label>
		</div>
		<div class="visible-lg">
		  <label class="radio-inline">
			<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="option1"><i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios2" name="optionsRadios" type="radio" value="option2">
			위젯전시 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios3" name="optionsRadios" type="radio" value="option3">
			모듈연결 
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-md-offset-2 col-md-10">
		<button class="btn btn-default btn-block" type="button">소스코드
		  직접편집</button>
	  </div>
	</div>
	<!-- /전시내용-직접꾸미기 일때  -->
	<!-- 전시내용-위젯전시 일때 -->
	<div class="form-group">
	  <label class="col-md-2 control-label">전시내용</label>
	  <div class="col-md-10">
		<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
		  <label class="btn btn-default">
			<input id="option1" name="options" type="radio">
			<i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="btn btn-default active">
			<input id="option2" name="options" type="radio">
			위젯전시 
		  </label>
		  <label class="btn btn-default">
			<input id="option3" name="options" type="radio">
			모듈연결 
		  </label>
		</div>
		<div class="visible-lg">
		  <label class="radio-inline">
			<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="option1"><i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios2" name="optionsRadios" type="radio" value="option2">
			위젯전시 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios3" name="optionsRadios" type="radio" value="option3">
			모듈연결 
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-md-offset-2 col-md-10">
		<button class="btn btn-default btn-block" type="button">위젯으로
		  꾸미기</button>
	  </div>
	</div>
	<!-- /전시내용-위젯전시 일때  -->
	<!-- 전시내용-모듈 컨텐츠일때 -->
	<div class="form-group">
	  <label class="col-md-2 control-label">전시내용</label>
	  <div class="col-md-10">
		<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
		  <label class="btn btn-default">
			<input id="option1" name="options" type="radio">
			<i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="btn btn-default">
			<input id="option2" name="options" type="radio">
			위젯전시 
		  </label>
		  <label class="btn btn-default active">
			<input id="option3" name="options" type="radio">
			모듈연결 
		  </label>
		</div>
		<div class="visible-lg">
		  <label class="radio-inline">
			<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="option1"><i class="fa fa-code fa-lg"></i>
			직접꾸미기 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios2" name="optionsRadios" type="radio" value="option2">
			위젯전시 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios3" name="optionsRadios" type="radio" value="option3">
			모듈연결 
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-md-offset-2 col-md-10">
		<div class="input-group">
		  <input class="form-control" type="text" value="/rb/home/c/home/site">
		  <span class="input-group-btn">
			<button class="btn btn-default" type="button">
			  <span class="glyphicon glyphicon-link"></span>
			</button>
			<button class="btn btn-default" type="button">
			  <span class="glyphicon glyphicon-globe"></span>
			</button>
		  </span>
		</div>
		<div class="checkbox">
		  <label>
			<input type="checkbox" value="">
			입력된 주소로 리다이렉트 시켜줍니다.(외부주소 링크시 사용)
		  </label>
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
	<!-- 전시내용-모듈 컨텐츠일때  -->
	<div class="form-group">
	  <label class="col-md-2 control-label">메뉴옵션</label>
	  <div class="col-md-10">
		<div class="btn-group btn-group-justified hidden-xs" data-toggle="buttons">
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-phone"></span>
			모바일출력 
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-new-window"></span>
			새창열기 
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-eye-close"></span>
			메뉴숨김 
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-lock"></span>
			메뉴잠금 
		  </label>
		</div>
		<div class="btn-group btn-group-justified visible-xs" data-toggle="buttons">
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-phone"></span>
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-new-window"></span>
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-eye-close"></span>
		  </label>
		  <label class="btn btn-default">
			<input type="checkbox">
			<span class="glyphicon glyphicon-lock"></span>
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">레이아웃</label>
	  <div class="col-md-10">
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
	  </div>
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
		<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
		  <label class="btn btn-default active">
			<input id="option1" name="options" type="radio">
			차단안함 
		  </label>
		  <label class="btn btn-default">
			<input id="option2" name="options" type="radio">
			차단함 
		  </label>
		</div>
		<div class="visible-lg">
		  <label class="radio-inline">
			<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="option1">
			차단안함 
		  </label>
		  <label class="radio-inline">
			<input id="optionsRadios2" name="optionsRadios" type="radio" value="option2">
			차단함 
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
	  <label class="col-md-2 control-label">메뉴주소</label>
	  <div class="col-md-10">
		<dl class="dl-horizontal">
		  <dt>물리주소</dt>
		  <dd>
			<a href="#" target="_blank"><code>/rb/index.php?r=home&c=home</code></a>
		  </dd>
		  <dt>현재주소</dt>
		  <dd>
			<a href="#" target="_blank"><code>/rb/home/c/home</code></a>
		  </dd>
		</dl>
	  </div>
	</div>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<button class="btn btn-primary btn-block btn-lg" type="button">메뉴 속성
				변경</button>
		</div>
	</div>
  </form>
</div>
</div>
