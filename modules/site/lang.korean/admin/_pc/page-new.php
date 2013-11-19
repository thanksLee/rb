<div class="row">

	<div class="col-md-8 col-lg-9" id="tab-content-view">

		<!-- -XS작성 전용  -->
		<div class="editor visible-xs">

			<div class="page-header">
				<h1 data-toggle="modal" data-target="#modal-page-rename">
					<i class="fa fa-file-text-o pull-left fa-border"></i>
					<a data-toggle="tooltip" data-placement="bottom" data-original-title="이름 바꾸기" >제목 없음</a>
				</h1>
			</div>

			<!-- Markdown -->
			<div class="panel panel-default" id="markdown">
				<div class="panel-heading">
					<fieldset> <!-- 미리보기가 활성화 되었을 때  fieldset은 비활성 처리 됩니다.  -->
						<div class="btn-toolbar">
							<div class="btn-group"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="굵게"><i class="fa fa-bold fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴"><i class="fa fa-italic fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="제목"><i class="fa fa-font fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="이미지 삽입"><i class="fa fa-picture-o fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기"><i class="fa fa-list fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기"><i class="fa fa-list-ol fa-lg"></i></button>
							</div>
						</div>
					<fieldset>
				</div>
				<div class="panel-body">
					<textarea class="form-control" rows="10"></textarea>
				</div>
				<div class="panel-footer clearfix">
					<!-- 에디터 전환  -->
					<ul class="nav nav-pills editor-change open-sans">
						<li class="active"><a href="#wysiwyg" data-toggle="tab"><i class="fa fa-pencil fa-lg"></i> <small>편집</small></a></li>
						<li><a href="#"><i class="fa fa-eye fa-lg"></i> <small>미리보기</small></a></li>
						<li><a href="http://daringfireball.net/projects/markdown/basics" target="_blank"><i class="fa fa-question-circle fa-lg"></i> <small>도움말</small></a></li>
					</ul>
				</div>
			</div>
			<!-- /Markdown -->

			<!-- 태그 -->
			<div class="form-group well well-sm">
				<label class="sr-only" for="">TAG</label>
				<input type="text" class="form-control" id="" placeholder="Tags">
				<span class="help-block">콤마(,)로 구분하여 입력해 주세요</span>
			</div>

			<!-- 파일첨부 -->
			<div class="attach well well-sm">
				<div class="row">
					<div class="col-lg-2">
						<button type="file" class="btn btn-default btn-block"><i class="fa fa-paperclip fa-lg"></i> 파일첨부</button>
					</div>
					<div class="col-lg-6">
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								<span class="sr-only">60% Complete</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<p class="form-control-static text-muted">파일 <code>20개</code> / <code>100M</code> 업로드 가능</p>
					</div>
				</div>			
				<ul class="list-group attach-list">
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href="">혁신벤처센터멘토링지원사업-최종보고서-초안.hwp</a> &nbsp;&nbsp;<span class="label label-default">211.5kB</span>
					</li>
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href="">양해각서(물품거래).hwp</a> &nbsp;&nbsp;<span class="label label-default">211.5 kB</span>
					</li>
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href="">양해각서(물품거래).hwp</a> &nbsp;&nbsp;<span class="label label-default">211.5 kB</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /XS작성 전용 -->

		<!-- 작성 -->
		<div class="editor hidden-xs">

			<div class="page-header row">
				<h1 class="col-sm-8 col-md-7 col-lg-9" data-toggle="modal" data-target="#modal-page-rename">
					<i class="fa fa-file-text-o pull-left fa-border"></i>
					<a data-toggle="tooltip" data-placement="bottom" data-original-title="이름 바꾸기" >제목 없음</a>
				</h1>
				<div class="col-sm-4 col-md-5 col-lg-3 hidden-xs">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-primary btn-lg"><i class="fa fa-check fa-lg"></i>  정보수정</button>
						<button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/rb/?r=home&m=admin&module=home&front=page"><i class="fa fa-cog fa-lg"></i> 페이지 등록정보</a></li>
							<li><a href="/rb/home/p/main" target="_blank"><i class="fa fa-external-link fa-lg"></i> 페이지 보기</a></li>
							<li><a href="#"><i class="fa fa-trash-o fa-lg"></i> 페이지 삭제</a></li>
							<li class="divider"></li>
							<li><a href=""><i class="fa fa-plus fa-lg"></i> 새 페이지</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Wysiwyg 일 때  -->
			<div class="panel panel-default" id="wysiwyg">
				<div class="panel-heading">
					<fieldset>
						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-toggle="button" data-placement="top" data-original-title="굵게(Ctrl+B)">
									<input type="checkbox"><i class="fa fa-bold fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴(Ctrl+I)">
									<input type="checkbox"><i class="fa fa-italic fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="밑줄(Ctrl+U)">
									<input type="checkbox"><i class="fa fa-underline fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="취소선(Ctrl+D)">
									<input type="checkbox"><i class="fa fa-strikethrough fa-lg"></i>
								</label>
							</div>
							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="왼쪽 맞춤(Ctrl+L)">
									<input type="radio" name="options" id="option1"><i class="fa fa-align-left fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="가운데 맞춤(Ctrl+E)">
									<input type="radio" name="options" id="option2"><i class="fa fa-align-center fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="오른쪽 맞춤(Ctrl+R)">
									<input type="radio" name="options" id="option3"><i class="fa fa-align-right fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="양쪽 맞춤">
									<input type="radio" name="options" id="option3"><i class="fa fa-align-justify fa-lg"></i>
								</label>
							</div>
							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기(Ctrl+E)">
									<input type="radio" name="options" id="option1"><i class="fa fa-list fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기(Ctrl+E)">
									<input type="radio" name="options" id="option2"><i class="fa fa-list-ol fa-lg"></i>
								</label>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#page-editor-link" title="링크"><i class="fa fa-link fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="링크해제"><i class="fa fa-chain-broken fa-lg"></i></button>
							</div>
						</div>
						<div class="btn-toolbar">
							<div class="btn-group">
								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="본문스타일">
									<button type="button" class="btn btn-default dropdown-toggle open-sans" data-toggle="dropdown">
										<i class="fa fa-font fa-lg"></i> 일반 텍스트 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu open-sans typography" role="menu">
										<li role="presentation" class="dropdown-header">Headings</li>
										<li><a href="#"><h1>제목 1</h1> </a></li>
										<li><a href="#"><h2>제목 2</h2></a></li>
										<li><a href="#"><h3>제목 3</h3></a></li>
										<li><a href="#"><h4>제목 4</h4></a></li>
										<li><a href="#"><h5>제목 5</h5></a></li>
										<li class="divider"></li>
										<li role="presentation" class="dropdown-header">Body copy</li>
										<li><a href="#">단락 <small class="pull-right">&lt;p&gt;</small></a></li>
										<li class="active"><a href="#">인용문 <small class="pull-right">&lt;blockquote&gt;</small></a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="fa fa-cog"></i> 설정</a></li>
									</ul>
								</div>
								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴">
									<button type="button" class="btn btn-default dropdown-toggle open-sans" data-toggle="dropdown">
										Arial <span class="caret"></span>
									</button>
									<ul class="dropdown-menu open-sans" role="menu">
										<li><a href="#">굴림 <small style="font-family: '굴림';">(가나다라)</small></a></li>
										<li><a href="#">돋움 <small style="font-family: '돋움';">(가나다라)</small></a></li>
										<li><a href="#">바탕 <small style="font-family: '바탕';">(가나다라)</small></a></li>
										<li class="divider"></li>
										<li><a href="#">맑은고딕 <small style="font-family: '맑은고딕';">(가나다라)</small></a></li>
										<li><a href="#">나눔고딕 <small style="font-family: '바탕';">(가나다라)</small></a></li>
										<li><a href="#">나눔명조 <small style="font-family: '맑은고딕';">(가나다라)</small></a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="fa fa-check"></i> Arial <small style="font-family: 'Arial';">(abcd)</small></a></li>
										<li><a href="#">Verdana <small style="font-family: verdana;">(abcd)</small></a></li>
										<li><a href="#">Tomaha <small style="font-family: tomaha;">(abcd)</small></a></li>
										<li><a href="#">Open-Sans <small style="font-family: Open Sans;">(abcd)</small></a></li>
										<li><a href="#">Sans-serif <small style="font-family: sans-serif;">(abcd)</small></a></li>
										<li><a href="#">Courier New <small style="font-family: courier new;">(abcd)</small></a></li>
										<li><a href="#">Times New Roman <small style="font-family: times new roman;">(abcd)</small></a></li>
									</ul>
								</div>

								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴 크기">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
								<div class="btn-group btn-group-sm dropdown-colorpicker" data-toggle="tooltip" data-placement="top" data-original-title="글꼴색">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-font"></i> <i class="fa fa-minus fa-lg"></i>
									<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ac725e;" data-color="#ac725e"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#d06b64;" data-color="#d06b64"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#f83a22;" data-color="#f83a22"></a>
										</li>
										<li>
											<a class="colorpick-btn selected" href="#" style="background-color:#fa573c;" data-color="#fa573c"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ff7537;" data-color="#ff7537"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ffad46;" data-color="#ffad46"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#42d692;" data-color="#42d692"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#16a765;" data-color="#16a765"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#7bd148;" data-color="#7bd148"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#fbe983;" data-color="#fbe983"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#fad165;" data-color="#fad165"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#92e1c0;" data-color="#92e1c0"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#4986e7;" data-color="#4986e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9a9cff;" data-color="#9a9cff"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#b99aff;" data-color="#b99aff"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cabdbf;" data-color="#cabdbf"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cca6ac;" data-color="#cca6ac"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#f691b2;" data-color="#f691b2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cd74e6;" data-color="#cd74e6"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#a47ae2;" data-color="#a47ae2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#444444;" data-color="#444444"></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="내어쓰기(Shift+Tab)"><i class="fa fa-outdent fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="들여쓰기(Tab)"><i class="fa fa-indent fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="미디어 불러오기"><i class="fa fa-picture-o fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="미디어 업로드"><i class="fa fa-upload fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="다시실행" disabled="disabled"><i class="fa fa-repeat fa-lg"></i></button>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="panel-body">
					<textarea class="form-control" rows="25"></textarea>
				</div>
				<div class="panel-footer clearfix">
					<!-- 에디터 전환  -->
					<ul class="nav nav-pills editor-change open-sans">
						<li class="active"><a href="#wysiwyg" data-toggle="tab"><i class="fa fa-pencil fa-lg"></i> <small>위지위그 편집</small></a></li>
						<li><a href="#"><i class="fa fa-code fa-lg"></i> <small>HTML 편집</small></a></li>
						<li><a href="" target="_blank"><i class="fa fa-file-text-o fa-lg"></i> <small>페이지에서 보기</small></a></li>
					</ul>
				</div>
			</div>
			<!-- /Wysiwyg  -->
			<hr>
			<!-- Wysiwyg에서 html탭 클릭하여 소스보기 할 때   -->
			<div class="panel panel-default" id="wysiwyg">
				<div class="panel-heading">
					<fieldset disabled>
						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-toggle="button" data-placement="top" data-original-title="굵게(Ctrl+B)">
									<input type="checkbox"><i class="fa fa-bold fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴(Ctrl+I)">
									<input type="checkbox"><i class="fa fa-italic fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="밑줄(Ctrl+U)">
									<input type="checkbox"><i class="fa fa-underline fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="취소선(Ctrl+D)">
									<input type="checkbox"><i class="fa fa-strikethrough fa-lg"></i>
								</label>
							</div>

							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="왼쪽 맞춤(Ctrl+L)">
									<input type="radio" name="options" id="option1"><i class="fa fa-align-left fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="가운데 맞춤(Ctrl+E)">
									<input type="radio" name="options" id="option2"><i class="fa fa-align-center fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="오른쪽 맞춤(Ctrl+R)">
									<input type="radio" name="options" id="option3"><i class="fa fa-align-right fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="양쪽 맞춤">
									<input type="radio" name="options" id="option3"><i class="fa fa-align-justify fa-lg"></i>
								</label>
							</div>

							<div class="btn-group btn-group-sm" data-toggle="buttons">
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기(Ctrl+E)">
									<input type="radio" name="options" id="option1"><i class="fa fa-list fa-lg"></i>
								</label>
								<label class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기(Ctrl+E)">
									<input type="radio" name="options" id="option2"><i class="fa fa-list-ol fa-lg"></i>
								</label>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#page-editor-link" title="링크"><i class="fa fa-link fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="링크해제"><i class="fa fa-chain-broken fa-lg"></i></button>
							</div>
						</div>
						<div class="btn-toolbar">
							<div class="btn-group">
								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="본문스타일">
									<button type="button" class="btn btn-default dropdown-toggle open-sans" data-toggle="dropdown">
										<i class="fa fa-font fa-lg"></i> 일반 텍스트 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu open-sans typography" role="menu">
										<li role="presentation" class="dropdown-header">Headings</li>
										<li><a href="#"><h1>제목 1</h1> </a></li>
										<li><a href="#"><h2>제목 2</h2></a></li>
										<li><a href="#"><h3>제목 3</h3></a></li>
										<li><a href="#"><h4>제목 4</h4></a></li>
										<li><a href="#"><h5>제목 5</h5></a></li>
										<li class="divider"></li>
										<li role="presentation" class="dropdown-header">Body copy</li>
										<li class="active"><a href="#"><i class="fa fa-check"></i> 단락 <small class="pull-right">&lt;p&gt;</small></a></li>
										<li><a href="#">인용문 <small class="pull-right">&lt;blockquote&gt;</small></a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="fa fa-cog"></i> 설정</a></li>
									</ul>
								</div>
								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴">
									<button type="button" class="btn btn-default dropdown-toggle open-sans" data-toggle="dropdown">
										Arial <span class="caret"></span>
									</button>
									<ul class="dropdown-menu open-sans" role="menu">
										<li><a href="#">굴림 <small style="font-family: '굴림';">(가나다라)</small></a></li>
										<li><a href="#">돋움 <small style="font-family: '돋움';">(가나다라)</small></a></li>
										<li><a href="#">바탕 <small style="font-family: '바탕';">(가나다라)</small></a></li>
										<li class="divider"></li>
										<li><a href="#">맑은고딕 <small style="font-family: '맑은고딕';">(가나다라)</small></a></li>
										<li><a href="#">나눔고딕 <small style="font-family: '바탕';">(가나다라)</small></a></li>
										<li><a href="#">나눔명조 <small style="font-family: '맑은고딕';">(가나다라)</small></a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="fa fa-check"></i> Arial <small style="font-family: 'Arial';">(abcd)</small></a></li>
										<li><a href="#">Verdana <small style="font-family: verdana;">(abcd)</small></a></li>
										<li><a href="#">Tomaha <small style="font-family: tomaha;">(abcd)</small></a></li>
										<li><a href="#">Open-Sans <small style="font-family: Open Sans;">(abcd)</small></a></li>
										<li><a href="#">Sans-serif <small style="font-family: sans-serif;">(abcd)</small></a></li>
										<li><a href="#">Courier New <small style="font-family: courier new;">(abcd)</small></a></li>
										<li><a href="#">Times New Roman <small style="font-family: times new roman;">(abcd)</small></a></li>
									</ul>
								</div>

								<div class="btn-group btn-group-sm" data-toggle="tooltip" data-placement="top" data-original-title="글꼴 크기">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
								<div class="btn-group btn-group-sm dropdown-colorpicker" data-toggle="tooltip" data-placement="top" data-original-title="글꼴색">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-font"></i> <i class="fa fa-minus fa-lg"></i>
									<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ac725e;" data-color="#ac725e"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#d06b64;" data-color="#d06b64"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#f83a22;" data-color="#f83a22"></a>
										</li>
										<li>
											<a class="colorpick-btn selected" href="#" style="background-color:#fa573c;" data-color="#fa573c"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ff7537;" data-color="#ff7537"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#ffad46;" data-color="#ffad46"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#42d692;" data-color="#42d692"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#16a765;" data-color="#16a765"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#7bd148;" data-color="#7bd148"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#fbe983;" data-color="#fbe983"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#fad165;" data-color="#fad165"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#92e1c0;" data-color="#92e1c0"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#4986e7;" data-color="#4986e7"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#9a9cff;" data-color="#9a9cff"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#b99aff;" data-color="#b99aff"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cabdbf;" data-color="#cabdbf"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cca6ac;" data-color="#cca6ac"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#f691b2;" data-color="#f691b2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#cd74e6;" data-color="#cd74e6"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#a47ae2;" data-color="#a47ae2"></a>
										</li>
										<li>
											<a class="colorpick-btn" href="#" style="background-color:#444444;" data-color="#444444"></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="내어쓰기(Shift+Tab)"><i class="fa fa-outdent fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="들여쓰기(Tab)"><i class="fa fa-indent fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="미디어 불러오기"><i class="fa fa-picture-o fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="미디어 업로드"><i class="fa fa-upload fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="다시실행" disabled="disabled"><i class="fa fa-repeat fa-lg"></i></button>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="panel-body">
					<textarea class="form-control" rows="25"></textarea>
				</div>
				<div class="panel-footer clearfix">
					<!-- 에디터 전환  -->
					<ul class="nav nav-pills editor-change open-sans">
						<li><a href="#" data-toggle="tab"><i class="fa fa-pencil fa-lg"></i> <small>위지위그 편집</small></a></li>
						<li class="active"><a href="#"><i class="fa fa-code fa-lg"></i> <small>HTML 편집</small></a></li>
						<li><a href="" target="_blank"><i class="fa fa-file-text-o fa-lg"></i> <small>페이지에서 보기</small></a></li>
					</ul>
				</div>
			</div>
			<!-- /Wysiwyg에서 html탭 클릭하여 소스보기 할 때   -->
			<hr>
			<!-- Markdown -->
			<div class="panel panel-default" id="markdown">
				<div class="panel-heading">
					<fieldset> <!-- 미리보기가 활성화 되었을 때  fieldset은 비활성 처리 됩니다.  -->
						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="굵게"><i class="fa fa-bold fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴"><i class="fa fa-italic fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="제목"><i class="fa fa-font fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="이미지 삽입"><i class="fa fa-picture-o fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기"><i class="fa fa-list fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기"><i class="fa fa-list-ol fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="다시실행" disabled="disabled"><i class="fa fa-repeat fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm pull-right">
							  <a href="http://daringfireball.net/projects/markdown/basics" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="도움말"><i class="fa fa-question-circle fa-lg"></i></a>
							</div>
						</div>
					<fieldset>
				</div>
				<div class="panel-body">
					<textarea class="form-control" rows="25"></textarea>
				</div>
				<div class="panel-footer clearfix">
					<!-- 에디터 전환  -->
					<ul class="nav nav-pills editor-change open-sans">
						<li class="active"><a href="#wysiwyg" data-toggle="tab"><i class="fa fa-pencil fa-lg"></i> <small>마크다운 편집</small></a></li>
						<li><a href="#"><i class="fa fa-eye fa-lg"></i> <small>미리보기</small></a></li>
						<li><a href="" target="_blank"><i class="fa fa-file-text-o fa-lg"></i> <small>페이지에서 보기</small></a></li>
					</ul>
				</div>
			</div>
			<!-- /Markdown -->
			<hr>
			<!-- Markdown 에서 미리보기 탭을 클릭할 때 -->
			<div class="panel panel-default" id="markdown">
				<div class="panel-heading">
					<fieldset disabled>
						<div class="btn-toolbar">
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="굵게"><i class="fa fa-bold fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="기울임꼴"><i class="fa fa-italic fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="제목"><i class="fa fa-font fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="링크"><i class="fa fa-link fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="이미지 삽입"><i class="fa fa-picture-o fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm"> 
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="글머리 기호 넣기"><i class="fa fa-list fa-lg"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="번호 매기기"><i class="fa fa-list-ol fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm">
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="실행취소"><i class="fa fa-undo fa-lg"></i></button>
							  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="다시실행" disabled="disabled"><i class="fa fa-repeat fa-lg"></i></button>
							</div>
							<div class="btn-group btn-group-sm pull-right">
							  <a href="http://daringfireball.net/projects/markdown/basics" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="도움말"><i class="fa fa-question-circle fa-lg"></i></a>
							</div>
						</div>
					<fieldset>
				</div>
				<div class="panel-body">
					<textarea class="form-control" rows="25"></textarea>
				</div>
				<div class="panel-footer clearfix">
					<!-- 에디터 전환  -->
					<ul class="nav nav-pills editor-change open-sans">
						<li><a href="#wysiwyg" data-toggle="tab"><i class="fa fa-pencil fa-lg"></i> <small>마크다운 편집</small></a></li>
						<li class="active"><a href="#"><i class="fa fa-eye fa-lg"></i> <small>미리보기</small></a></li>
						<li><a href="" target="_blank"><i class="fa fa-file-text-o fa-lg"></i> <small>페이지에서 보기</small></a></li>
					</ul>
				</div>
			</div>
			<!-- /Markdown  에서 미리보기 탭을 클릭할 때 -->				
		
			<!-- 태그 -->
			<div class="form-group well well-sm">
				<label class="sr-only" for="">TAG</label>
				<input type="text" class="form-control" id="" placeholder="Tags">
				<span class="help-block">콤마(,)로 구분하여 입력해 주세요</span>
			</div>

			<!-- 파일첨부 -->
			<div class="attach well well-sm">
				<div class="row">
					<div class="col-lg-2">
						<button type="file" class="btn btn-default"><i class="fa fa-paperclip fa-lg"></i> 파일첨부</button>
					</div>
					<div class="col-lg-6">
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								<span class="sr-only">60% Complete</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 text-right">
						<p class="form-control-static text-muted">파일 <code>20개</code> / <code>100M</code> 업로드 가능</p>
					</div>
				</div>			
				<ul class="list-group attach-list">
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href=""><code>혁신벤처센터멘토링지원사업-최종보고서-초안.hwp</code></a> &nbsp;&nbsp;<span class="label label-default">211.5kB</span>
					</li>
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href=""><code>양해각서(물품거래).hwp</code></a> &nbsp;&nbsp;<span class="label label-default">211.5 kB</span>
					</li>
					<li class="list-group-item">
						<span class="pull-right"><a href=""><i class="fa fa-times"></i></a></span>
						<i class="fa fa-file-text fa-lg"></i> <a href=""><code>양해각서(물품거래).hwp</code></a> &nbsp;&nbsp;<span class="label label-default">211.5 kB</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /작성 -->

		<div class="page-url well well-sm">
			<div class="input-group">
				<span class="input-group-addon"> 물리주소</span>
				<input class="form-control" type="text" value="/rb/index.php?r=home&mod=main">
				<span class="input-group-btn">
				<a href="" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="클립보드 저장"><i class="fa fa-clipboard fa-lg"></i> </a>
				<a href="/rb/index.php?r=home&mod=main" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="페이지 열기(새창)"> <i class="fa fa-external-link fa-lg"></i> </a>
				</span>
			</div>
			<div class="input-group">
				<span class="input-group-addon"> 현재주소</span>
				<input class="form-control" type="text" value="/rb/home/p/main">
				<span class="input-group-btn">
				<a href="" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="클립보드 저장"><i class="fa fa-clipboard fa-lg"></i> </a>
				<a href="/rb/home/p/main" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="페이지 열기(새창)"> <i class="fa fa-external-link fa-lg"></i> </a>
				</span>
			</div>
		</div>
	</div>

	<div class="col-md-4 col-lg-3" id="tab-content-list">

		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<i class="fa fa-flag fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-1">
							기본설정
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-1">
					<div class="panel-body">


						<div class="form-group">
							<label for="exampleInputPassword1">페이지코드</label>
							<input type="text" class="form-control" name="alt" value="0001">
							<span class="help-block">영문대소문자/숫자/_/- 조합으로 등록할 수 있으며 중복될 수 없습니다.</span>
						</div>
						<div class="form-group">
							<label for="">상태</label>
							<select class="form-control">
								<option>작성 중</option>
								<option>검토 중</option>
								<option>발행 됨</option>
							</select>
							<span class="help-block">콤마(,)로 구분하여 입력해 주세요</span>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									댓글 포함
								</label>
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label">컨텐츠 사용권 표기 (License)</label>
							<select name="license" class="form-control">
								<option value="0" selected="">표기안함 (All rights reserved)</option>
								<option value="1">저작자표시-비영리-동일조건변경허락 Creative Commons</option>
								<option value="2">저작자표시-비영리 Creative Commons</option>
								<option value="3">저작자표시-비영리-변경금지 Creative Commons</option>
								<option value="4">저작자표시 Creative Commons</option>
								<option value="5">저작자표시-동일조건변경허락 Creative Commons</option>
								<option value="6">저작자표시-변경금지 Creative Commons</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<!-- <i class="fa fa-unlock fa-2x"></i> 공개설정 일때 -->
                    	<i class="fa fa-lock fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-2">
							 접근권한 
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-2">
					<div class="panel-body">

						<div class="form-group">
						  <label class="control-label">접근권한</label><br>
							<select name="hidden" class="form-control">
							<option value="0" selected="">전체공개</option>
							<option value="1">암호잠금</option>
							<option value="2">그룹별 제한</option>
							<option value="3">등급별 제한</option>
							<option value="4">나만보기</option>
							</select>
						</div>

						<div class="form-group">
							<label class="control-label">허용등급</label><br>
							<select class="form-control" name="perm_l">
								<option value="">전체허용</option>
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
						<div class="form-group">
							<label class="control-label">차단그룹</label><br>
								<select class="form-control" multiple="" name="_perm_g" size="5">
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
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<i class="fa fa-bullhorn fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-6">
							 홍보 
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-6">
					<div class="panel-body">
						<div class="form-group">
						  <label class="control-label">SNS 공유버튼 출력</label><br>
						  <label class="radio-inline">
							<input name="searchopen" type="radio" value="1" checked="">
							출력함 
						  </label>
						  <label class="radio-inline">
							<input name="searchopen" type="radio" value="0">
							출력안함 
						  </label>
						</div>
						<div class="form-group">
						  <label class="control-label">검색엔진</label><br>
						  <label class="radio-inline">
							<input name="searchopen" type="radio" value="1" checked="">
							공개함 
						  </label>
						  <label class="radio-inline">
							<input name="searchopen" type="radio" value="0">
							숨김 
						  </label>
						</div>
						<div class="form-group">
							<label for="">타이틀</label>
							<input type="text" class="form-control" name="" value="" placeholder="title">
						</div>
						<div class="form-group">
							<label for="">주제</label>
							<input type="text" class="form-control" name="" value="" placeholder="subject">
						</div>
						<div class="form-group">
							<label for="">키워드</label>
							<textarea class="form-control" rows="3"></textarea>
							<span class="help-block">자세한 셋팅은 <a href="">SEO관리</a>에서 할수 있습니다.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<i class="fa fa-krw fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-3">
							비즈니스
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-3">
					<div class="panel-body">
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									광고 삽입
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									판매 설정
								</label>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<i class="fa fa-columns fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-4">
							디자인  
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-4">
					<div class="panel-body">
						<div class="form-group">
						  <label class="control-label">레이아웃</label>
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
						<div class="form-group">
							<label for="exampleInputPassword1">본문 스타일셋</label>
							<select class="form-control">
								<option>사용안함</option>
								<option>Bootstrap-default</option>
								<option>나눔체 스타일셋</option>
								<option>다음체 스타일셋</option>
								<option>사용자 스타일셋</option>
							</select>
							<span class="help-block">본문 스타일 미지정 시 레이아웃에서 정의하는 스타일이 적용됩니다.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
                    	<i class="fa fa-info-circle fa-2x"></i>
                    </div>
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#page-collapse-5">
							세부설정
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="page-collapse-5">
					<div class="panel-body">

						<div class="form-group">
							<label for="exampleInputPassword1">소속메뉴</label>
							<select class="form-control">
								<option>사용안함</option>
								<option>회사소개</option>
								<option>제품소개</option>
								<option>오시는길</option>
								<option>고객센터</option>
								<option>커뮤니티</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">캐시적용</label>
							<select class="form-control" name="cachetime">
	                            <option value="">적용안함</option>
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
							<span class="help-block">캐시를 적용하면 페이지 접속이 빨라 집니다.</span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">기본 에디터 변경</label>
							<select class="form-control">
								<option>위지위그(wysiwyg)</option>
								<option>마크다운(Markdown)</option>
								<option>HTML</option>
								<option>TEXT</option>
							</select>
							<span class="help-block">본 페이지의 에디터를 변경합니다. 변경시 편집내용이 손실될 수 있습니다.</span>
						</div>

						<div class="form-group">
							<label for="">분류</label>
							<div class="input-group">
								<input class="form-control" type="text">
								<div class="input-group-btn dropup">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">선택
									<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">기본페이지</a></li>
										<li><a href="#">모바일페이지</a></li>
										<li class="divider"></li>
										<li><a href="#">직접입력</a></li>
									</ul>
								</div>
							</div>
							<span class="help-block">관리가 편하도록 페이지분류를 적절히 지정해 주세요.</span>
						</div>

					</div>
				</div>
			</div>
		</div>
		<hr>
		<button type="button" class="btn btn-primary btn-lg btn-block visible-xs visible-sm"><i class="fa fa-check fa-lg"></i>  정보수정</button>

		<div class="page-info panel panel-default">
			<div class="panel-body">
				<dl>
					<dt>최종 수정</dt>
					<dd><i class="fa fa-user"></i> 관리자  <i class="fa fa-clock-o"></i><code>2013.10.20 13:24:24</code></dd>
				</dl>
				<dl>
					<dt>생성일</dt>
					<dd><i class="fa fa-user"></i> 관리자 <i class="fa fa-clock-o"></i><code>2013.10.20 13:24:24</code></dd>
				</dl>
				<dl>
					<dt>조회수</dt>
					<dd><code>2,000</code></dd>
				</dl>	
			</div>
		</div>
	</div>

</div>


<!-- 페이지명 변경 Modal -->
<div class="modal fade" id="modal-page-rename" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">페이지 이름 바꾸기</h4>
      </div>
      <div class="modal-body">

		<div class="form-group">
			<label for="exampleInputPassword1">새 페이지 이름 입력</label>
			<input type="text" class="form-control" name="" placeholder="" value="제목없음">
		</div>

		<div>
		<button type="button" class="btn btn-primary" data-dismiss="modal">확인</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">취소</button>

		</div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--에디터 링크추가 버튼  Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="page-editor-link" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
				<h4 class="modal-title" id="myModalLabel">링크 추가하기</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inputEmail3">URL</label>
						<div class="col-sm-9">
							<input class="form-control" id="inputEmail3" placeholder="Email" type="URL">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="">Title</label>
						<div class="col-sm-9">
							<input class="form-control" id="" placeholder="" type="text">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-9">
							<div class="checkbox">
								<label>
									<input type="checkbox">
									링크를 새창에서 염
								</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal" type="button">취소</button>
				<button class="btn btn-primary" type="button">링크추가</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<br><br><br>



<!-- 여기까지 권기택 작업입니다. -->
