<?php 
include $g['path_core'].'function/rss.func.php';
include $g['path_module'].'market/var/var.php';
$_serverinfo = explode('/',$d['market']['url']);
$_updatelist = getUrlData('http://'.$_serverinfo[2].'/__update/market/'.$module.'/update.txt',10);
$_updatelist = explode("\n",$_updatelist);
$_updatelength = count($_updatelist)-1;
$recnum	=  15;
$TPG = getTotalPage($_updatelength,$recnum);
?>

<div class="form-horizontal">
	<div class="page-header">
	  <h4><i class="fa fa-exclamation-circle"></i> 업데이트 정보</h4>
	</div>

	<div class="update-info table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr class="active">
					<th>버전</th>
					<th>패치/업데이트</th>
					<th>적용일자</th>
					<th>처리여부</th>
					<th>관리</th>
				</tr>
			</thead>
			<tbody>
			<!--
				<?php $_ishistory=false?>
				<?php for($i = $_updatelength-(($p-1)*$recnum)-1; $i > $_updatelength-($p*$recnum)-1; $i--):?>
				<?php $_update=trim($_updatelist[$i]);if(!$_update)continue?>
				<?php $var1=explode(',',$_update)?>
				<?php $var2=explode(',',$_updatelist[$i-1])?>
				<?php $_updatefile=$g['path_module'].$module.'/update/'.$var1[1].'.txt'?>
				<tr>
					<td><?php echo $var1[0]?></td>
					<td><i class="fa fa-file-text-o fa-lg"></i> <a href="http://<?php echo $_serverinfo[2]?>/market/<?php echo $var1[2]?>" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 내역 보기"><?php echo $var1[0]?>_<?php echo $var1[1]?></a></td>
					<td>
						<?php if(is_file($_updatefile)):?>
						<?php $_supdate=explode(',',implode('',file($_updatefile)))?>
						<span class="udate1_1"><?php echo getDateFormat($_supdate[0],'Y.m.d')?></span>
						<?php else:$_supdate=array()?>
						<span class="udate1_2">업데이트 전</span>
						<?php endif?>
					</td>
					<?php if(!is_file($_updatefile)&&(is_file($_updatefile)||!trim($var2[1]))):?>
					<td><span class="label label-default">미적용</span></td>
					<td>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;a=update&amp;type=auto&amp;ufile=<?php echo $var1[1]?>" class="btnGray01 plusBlue hand" onclick="return hrefCheck(this,true,'정말로 업데이트 하시겠습니까?');"><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="원격 업데이트 실행"><i class="fa fa-sign-in fa"></i> 원격</button></a>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;a=update&amp;type=manual&amp;ufile=<?php echo $var1[1]?>" class="u" title="수동 업데이트 처리" onclick="return hrefCheck(this,true,'정말로 수동으로 업데이트 처리하시겠습니까?\n수동 업데이트 처리시 원격업데이트는 건너뜁니다.');"><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="수동으로 업데이트 완료처리"><i class="fa fa-pencil"></i> 수동</button></a>
					</td>
					<?php else:?>
					<?php if(is_file($_updatefile)):?>
					<td><span class="label label-default"><i class="fa fa-circle-o"></i> 완료됨</span></td>
					<td><?php if($_supdate[1]):?>수동<?php endif?></td>
					<td>
						<?php if(!$_ishistory):?><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;a=update&amp;type=delete&amp;ufile=<?php echo $var1[1]?>" title="업데이트기록 제거" onclick="return hrefCheck(this,true,'정말로 업데이트 기록을 제거하시겠습니까?');"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 기록 제거"><i class="fa fa-times"></i> 기록제거</button></a><?php endif?>
					</td>
					<?php $_ishistory=true?>
					<?php else:?>

					<?php endif?>
					<?php endif?>
					<td><span class="label label-default">미적용</span></td>
					<td>
						<div class="btn-group btn-group-sm">
							<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="원격 업데이트 실행"><i class="fa fa-sign-in fa"></i> 원격</button>
							<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="수동으로 업데이트 완료처리"><i class="fa fa-pencil"></i> 수동</button>
						</div>
					</td>
				</tr>
					-->
				<tr class="active">
					<td>1.1.0</td>
					<td><i class="fa fa-file-text-o fa-lg"></i> <a href="http://www.kimsq.com" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 내역 보기">1.1.0_20111221</a></td>
					<td>2012.03.30</td>
					<td><span class="label label-default"><i class="fa fa-circle-o"></i> 완료됨</span></td>
					<td>
						<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 기록 제거"><i class="fa fa-times"></i> 기록제거</button>
					</td>
				</tr>
				<tr class="active">
					<td>0.0.5</td>
					<td><i class="fa fa-file-text-o fa-lg"></i> <a href="http://www.kimsq.com" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 내역 보기">1.1.0_20111221</a></td>
					<td>2012.03.30</td>
					<td><span class="label label-default"><i class="fa fa-circle-o"></i> 완료됨</span></td>
					<td>
						<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="업데이트 기록 제거"><i class="fa fa-times"></i> 기록제거</button>
					</td>

				</tr>
				<?php endfor?>
				<?php if(!$_updatelength):?>
				<tr>
				<td colspan="5">업데이트 대기리스트가 없습니다.</td>
				</tr>
				<?php endif?>
			</tbody>
		</table>
	</div>

	<p class="text-muted">
		<i class="fa fa-question-circle fa-2x pull-left fa-border"></i>
		원격 업데이트를 이용하시면 킴스큐Rb를 항상 최신의 상태로 유지할 수 있습니다. <br>
		 사용자가 직접 수정한 사항이 업데이트 내역에 포함되어 있을 경우 해당사항이 덧씌워 지므로 이 경우 반드시 수작업으로 패치한 후 수동 업데이트를 클릭해 주어야 합니다. <a href="http://docs.kimsq.com/kr/" target="_blank" class="text-primary"><strong>[도움말 보기]</strong></a>
	</p>

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

