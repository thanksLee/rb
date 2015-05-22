
<div class="form-horizontal">

<!--
	<div class="page-header">
	  <h4><i class="fa fa-exclamation-circle"></i> 업데이트 정보</h4>
	</div>
-->

	<div class="page-header">
	  <h4><i class="fa fa-exclamation-circle"></i> 모듈 기본정보</h4>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label" for="firstName">모듈명:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><?php echo $MD['name']?></p>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label" for="">모듈아이디:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><?php echo $MD['id']?></p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">모듈의위치:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><?php echo $g['path_module'].$module?>/</p> 
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">테이블생성:</label>
				<div class="col-lg-9">
					<p class="form-control-static">
					<?php if($MD['tblnum']):?>
					<?php echo $MD['tblnum']?>개
					<?php else:?>
					없음
					<?php endif?>
					</p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->        
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">모듈등록일:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><?php echo getDateFormat($MD['d_regis'],'Y/m/d')?></p>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">버젼:</label>
				<div class="col-lg-9">                                                
					<p class="form-control-static">1.0</p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->                
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">공식 웹사이트:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><a href="http://www.kimsq.com/" target="_blank">http://www.kimsq.com</a></p>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">저장소</label>
				<div class="col-lg-9">                                                
					<p class="form-control-static"><a href="http://github.com/kimsq/rb" target="_blank">http://github.com/kimsq/rb</a></p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->     


	<div class="page-header">
	  <h4><i class="fa fa-exclamation-circle"></i> 제작사 정보</h4>
	</div>


	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">제작사:</label>
				<div class="col-lg-9">
					<p class="form-control-static">(주)레드블럭</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">회원아이디:</label>
				<div class="col-lg-9">
					<p class="form-control-static">세븐고(kims)</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">회원아이디:</label>
				<div class="col-lg-9">
					<p class="form-control-static">세븐고(kims)</p>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">이메일:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><a href="mailto:admin@kimsq.com">admin@kimsq.com</a></p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->           
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">홈페이지:</label>
				<div class="col-lg-9">
					<p class="form-control-static"><a href="http://www.kimsq.com/" target="_blank">www.kimsq.com</a></p>
				</div>
			</div>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">라이센스:</label>
				<div class="col-lg-9">
					<p class="form-control-static">LGPL</p>
				</div>
			</div>
		</div>
		<!--/span-->
	</div>

</div>



