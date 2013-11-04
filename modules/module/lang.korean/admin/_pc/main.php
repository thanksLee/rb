
<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="glyphicon glyphicon-globe"></i>
				</div>
				<h4 class="dropdown">
					모듈 정보
				</h4>
			</div>
			<div class="list-group visible-xs visible-sm">
				<a class="list-group-item" data-toggle="modal" href="#module-info">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>사이트
					<span class="text-muted">(site)</span></a>
				<a class="list-group-item active" data-toggle="modal" href="#module-info">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>모듈
					<span class="text-muted">(module)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">레이아웃
					<span class="text-muted">(layout)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">마켓
					<span class="text-muted">(market)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">시스템
					<span class="text-muted">(admin)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">회원관리
					<span class="text-muted">(member)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">게시판
					<span class="text-muted">(bbs)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
					</span>댓글<span class="text-muted">(comment)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>도메인
					<span class="text-muted">(domain)</span></a>
			</div>
			<div class="list-group hidden-xs hidden-sm">
				<a class="list-group-item" href="#">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>사이트
					<span class="text-muted">(site)</span></a>
				<a class="list-group-item active" href="#">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>모듈
					<span class="text-muted">(module)</span></a>
				<a class="list-group-item" data-toggle="modal" href="#module-info">레이아웃
					<span class="text-muted">(layout)</span></a>
				<a class="list-group-item" href="#">마켓
					<span class="text-muted">(market)</span></a>
				<a class="list-group-item" href="#">시스템
					<span class="text-muted">(admin)</span></a>
				<a class="list-group-item" href="#">회원관리
					<span class="text-muted">(member)</span></a>
				<a class="list-group-item" href="#">게시판
					<span class="text-muted">(bbs)</span></a>
				<a class="list-group-item" href="#">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
					</span>댓글<span class="text-muted">(comment)</span></a>
				<a class="list-group-item" href="#">
					<span class="badge">
						<span class="glyphicon glyphicon-eye-close"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>도메인
					<span class="text-muted">(domain)</span></a>
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
		<hr class="visible-xs visible-sm">
	</div>
	<div class="col-md-8 col-lg-9 hidden-xs hidden-sm" id="tab-content-view">

		<div class="page-header">
			<h4>
			<i class="kf-module fa-lg"></i>&nbsp; 모듈 등록정보
			</h4>
		</div>

		<div class="row">
			<div class="col-md-2 col-sm-2">
				<span class="fa-stack fa-3x">
					<i class="fa fa-square fa-stack-2x"></i>
					<i class="kf-home fa-stack-1x kf-inverse"></i>
				</span>
			</div>
			<div class="col-md-10 col-sm-10">
				<h4 class="media-heading">사이트
					<span class="text-muted">(home)</span></h4>
				<p class="text-muted">선택된 모듈에 대한 등록정보입니다. 시스템 기본모듈은 삭제할 수
					없습니다.</p>

				<!-- Split button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default">관리</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">실행</a></li>
				    <li class="divider"></li>
				    <li><a href="#">삭제</a></li>
				  </ul>
				</div>

			</div>
		</div>
		<hr>
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-md-2 control-label">모듈 아이디</label>
				<div class="col-md-10">
					<p class="form-control-static">home</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">모듈이름</label>
				<div class="col-md-10">
					<input class="form-control col-md-6" placeholder="" type="text" value="홈페이지">
				</div>
			</div>
			<!-- 모듈 아이콘  -->
			<div class="form-group">
				<label class="col-md-2 control-label">모듈아이콘</label>
				<div class="col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default active">
							<input id="option1" name="options" type="radio">
							<span class="glyphicon glyphicon-check"></span>&nbsp;선택
						</label>
						<label class="btn btn-default">
							<input id="option2" name="options" type="radio">
							<span class="glyphicon glyphicon-upload"></span>&nbsp;업로드
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button class="btn btn-default btn-block" type="button">아이콘 갤러리
					</button>
					<p class="help-block">아이콘 갤러리에서 선택해 주세요.</p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<input id="exampleInputFile" type="file">
					<p class="help-block">gif/jpg/png 파일가능 - 60*60픽셀 사이즈로 자동조정됩니다</p>
				</div>
			</div>
			<!-- /모듈 아이콘  -->
			<div class="form-group">
				<label class="col-md-2 control-label">모듈감추기</label>
				<div class="col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default active">
							<input id="option1" name="options" type="radio">
							<span class="glyphicon glyphicon-eye-open"></span>&nbsp;출력함
						</label>
						<label class="btn btn-default">
							<input id="option2" name="options" type="radio">
							<span class="glyphicon glyphicon-eye-close"></span>&nbsp;감춤
						</label>
					</div>
					<span class="help-block">모듈 리스트에서 출력하거나 감춤</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">모바일관리</label>
				<div class="col-md-10">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default active">
							<input id="option1" name="options" type="radio">
							<span class="glyphicon glyphicon-eye-open"></span>&nbsp;출력함
						</label>
						<label class="btn btn-default">
							<input id="option2" name="options" type="radio">
							<span class="glyphicon glyphicon-eye-close"></span>&nbsp;감춤
						</label>
					</div>
					<span class="help-block">모바일전용 관리자페이지에 출력하거나 감춤</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">테이블생성</label>
				<div class="col-md-10">
					<p class="form-control-static">이 모듈은 DB테이블을 생성하지 않습니다.</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">모듈등록일</label>
				<div class="col-md-10">
					<p class="form-control-static">2013/03/08</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">포함언어팩</label>
				<div class="col-md-10">
					<p class="form-control-static">한국어(korean)</p>
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



<!-- Modal -->
  <div class="modal fade" id="module-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><i class="kf-module fa-lg"></i>&nbsp; 모듈 등록정보</h4>
        </div>
        <div class="modal-body">

			<div class="row">
				<div class="col-md-2 col-sm-2">
					<span class="fa-stack fa-3x">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="kf-home fa-stack-1x kf-inverse"></i>
					</span>
				</div>
				<div class="col-md-10 col-sm-10">
					<h4 class="media-heading">사이트
						<span class="text-muted">(home)</span></h4>
					<p class="text-muted">선택된 모듈에 대한 등록정보입니다. 시스템 기본모듈은 삭제할 수
						없습니다.</p>

					<!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">관리</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="#">실행</a></li>
					    <li class="divider"></li>
					    <li><a href="#">삭제</a></li>
					  </ul>
					</div>

				</div>
			</div>
			<hr>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-2 control-label">모듈 아이디</label>
					<div class="col-md-10">
						<p class="form-control-static">home</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">모듈이름</label>
					<div class="col-md-10">
						<input class="form-control col-md-6" placeholder="" type="text" value="홈페이지">
					</div>
				</div>
				<!-- 모듈 아이콘  -->
				<div class="form-group">
					<label class="col-md-2 control-label">모듈아이콘</label>
					<div class="col-md-10">
						<div class="btn-group btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default active">
								<input id="option1" name="options" type="radio">
								<span class="glyphicon glyphicon-check"></span>&nbsp;선택
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">
								<span class="glyphicon glyphicon-upload"></span>&nbsp;업로드
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button class="btn btn-default btn-block" type="button">아이콘 갤러리
						</button>
						<p class="help-block">아이콘 갤러리에서 선택해 주세요.</p>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<input id="exampleInputFile" type="file">
						<p class="help-block">gif/jpg/png 파일가능 - 60*60픽셀 사이즈로 자동조정됩니다</p>
					</div>
				</div>
				<!-- /모듈 아이콘  -->
				<div class="form-group">
					<label class="col-md-2 control-label">모듈감추기</label>
					<div class="col-md-10">
						<div class="btn-group btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default active">
								<input id="option1" name="options" type="radio">
								<span class="glyphicon glyphicon-eye-open"></span>&nbsp;출력함
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">
								<span class="glyphicon glyphicon-eye-close"></span>&nbsp;감춤
							</label>
						</div>
						<span class="help-block">모듈 리스트에서 출력하거나 감춤</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">모바일관리</label>
					<div class="col-md-10">
						<div class="btn-group btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default active">
								<input id="option1" name="options" type="radio">
								<span class="glyphicon glyphicon-eye-open"></span>&nbsp;출력함
							</label>
							<label class="btn btn-default">
								<input id="option2" name="options" type="radio">
								<span class="glyphicon glyphicon-eye-close"></span>&nbsp;감춤
							</label>
						</div>
						<span class="help-block">모바일전용 관리자페이지에 출력하거나 감춤</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">테이블생성</label>
					<div class="col-md-10">
						<p class="form-control-static">이 모듈은 DB테이블을 생성하지 않습니다.</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">모듈등록일</label>
					<div class="col-md-10">
						<p class="form-control-static">2013/03/08</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">포함언어팩</label>
					<div class="col-md-10">
						<p class="form-control-static">한국어(korean)</p>
					</div>
				</div>
			</form>


        </div>
        <div class="modal-footer">
		<button class="btn btn-primary btn-block btn-lg" type="button">속성 변경</button>
		<button type="button" class="btn btn-default btn-block btn-lg" data-dismiss="modal">닫기</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->