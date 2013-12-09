<?php
$_R=getUidData($table[$module.'data'],$uid);
$_M=getDbData($table['s_mbrdata'],'memberuid='.$_R['mbruid'],'*');

$_siteAply = 'site='.$_HS['uid'].' and ';
$_ealbum1 = '미분류';
$_ealbum2 = '휴지통';

$_CWHERE = $_siteAply.'mbruid='.$my['uid'].' and type=1';
$_CT_RCD = getDbArray($table[$module.'category'],$_CWHERE,'*','gid','asc',0,1);
$_CT_ARR = array();
while($_CT = db_fetch_array($_CT_RCD))
{
	if($_CT['name']==$_ealbum1) { $_CT1=$_CT; continue;}
	if($_CT['name']==$_ealbum2) { $_CT2=$_CT; continue;}
	$_CT_ARR[] = $_CT;
}
?>



[RESULT:

<input type="hidden" name="uid" value="<?php echo $_R['uid']?>" />

<div class="media-pic">

	<img alt="<?php echo $_R['alt']?>" class="img-rounded img-responsive" src="<?php echo $_R['url']?>/<?php if($_R['size']):?>thumb1_<?php endif?><?php echo $_R['name']?>">
	<div class="btn-group">
	<a href="<?php echo $_R['url']?>/<?php echo $_R['name']?>" class="btn btn-default btn-xs" data-original-title="크게보기" data-placement="top" data-toggle="tooltip" title=""><i class="fa fa-resize-full fa-lg"></i></a>
	</div>

</div>
<div class="media-name">
	<div class="form-group">
		<label class="sr-only" for="">이미지명</label>
		<input class="form-control" name="name" type="text" value="<?php echo str_replace('.'.$_R['ext'],'',$_R['name'])?>">
		<span>.<?php echo $_R['ext']?></span>
	</div>
	<ul class="list-unstyled photo-info">
		<li class="text-muted"><?php echo getDateFormat($_R['d_update']?$_R['d_update']:$_R['d_regis'],'Y.m.d H:i')?></li>
		<li class="text-muted"><?php if($_R['size']):?><?php echo $_R['width']?> × <?php echo $_R['height']?><?php else:?>외부파일<?php endif?></li>
		<li class="text-muted"><?php echo $_R['size'] ? getSizeFormat($_R['size'],1) : '외부파일'?></li>
	</ul>
</div>


<div class="panel-group" id="accordion">
<div class="panel panel-default">
  <div class="panel-heading">
	<h4 class="panel-title">
	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		<i class="fa fa-chevron-down"></i> 기본정보
	  </a>
	</h4>
  </div>
  <div id="collapseOne" class="panel-collapse collapse in">
	<div class="panel-body">
		  <div class="form-group">
			<label for="exampleInputEmail1">Caption</label>
			<textarea class="form-control" name="caption" rows="2"><?php echo $_R['caption']?></textarea>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Alt Text</label>
			<input type="text" class="form-control" name="alt" placeholder="Alt Text" value="<?php echo $_R['alt']?>">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Description</label>
			<textarea class="form-control" name="description" rows="3"><?php echo $_R['description']?></textarea>
		  </div>
	</div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
	<h4 class="panel-title">
	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		<i class="fa fa-chevron-right"></i> 셋트지정 및 접근권한
	  </a>
	</h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse">
	<div class="panel-body">
		<div class="form-group">
		  <label class="control-label">소속셋트</label><br>
			<select name="category" class="form-control">
				<option value="<?php echo $_CT1['uid']?>"<?php if($_R['category']==$_CT1['uid']):?> selected<?php endif?>><?php echo $_CT1['name']?> (<?php echo $_CT1['r_num']?>)</option>
				<?php foreach($_CT_ARR as $_C):?>
				<option value="<?php echo $_C['uid']?>"<?php if($_R['category']==$_C['uid']):?> selected<?php endif?>><?php echo $_C['name']?> (<?php echo $_C['r_num']?>)</option>
				<?php endforeach?>
				<option value="<?php echo $_CT2['uid']?>"<?php if($_R['category']==$_CT2['uid']):?> selected<?php endif?>><?php echo $_CT2['name']?> (<?php echo $_CT2['r_num']?>)</option>
			</select>
		</div>

		<div class="form-group">
		  <label class="control-label">접근권한</label><br>
			<select name="hidden" class="form-control">
			<option value="0"<?php if($_R['hidden']=='0'):?> selected<?php endif?>>전체공개</option>
			<option value="1"<?php if($_R['hidden']=='1'):?> selected<?php endif?>>지명공개</option>
			<option value="2"<?php if($_R['hidden']=='2'):?> selected<?php endif?>>비공개</option>
			</select>
		  <span class="help-block">미디어 최종 페이지의 접근권한</span>
		</div>

		<div class="form-group">
		  <label class="control-label">검색엔진</label><br>
		  <label class="radio-inline">
			<input name="searchopen" type="radio" value="1"<?php if($_R['searchopen']):?> checked<?php endif?>>
			공개함 
		  </label>
		  <label class="radio-inline">
			<input name="searchopen" type="radio" value="0"<?php if(!$_R['searchopen']):?> checked<?php endif?>>
			숨김 
		  </label>
		</div>
	</div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
	<h4 class="panel-title">
	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		<i class="fa fa-chevron-right"></i> 부가 정보
	  </a>
	</h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse">
	<div class="panel-body">
		<div class="form-group">
		  <label class="control-label">License</label>
			<select name="license" class="form-control">
				<option value="0"<?php if($_R['license']==0):?> selected<?php endif?>>None (All rights reserved)</option>
				<option value="1"<?php if($_R['license']==1):?> selected<?php endif?>>저작자표시-비영리-동일조건변경허락 Creative Commons</option>
				<option value="2"<?php if($_R['license']==2):?> selected<?php endif?>>저작자표시-비영리 Creative Commons</option>
				<option value="3"<?php if($_R['license']==3):?> selected<?php endif?>>저작자표시-비영리-변경금지 Creative Commons</option>
				<option value="4"<?php if($_R['license']==4):?> selected<?php endif?>>저작자표시 Creative Commons</option>
				<option value="5"<?php if($_R['license']==5):?> selected<?php endif?>>저작자표시-동일조건변경허락 Creative Commons</option>
				<option value="6"<?php if($_R['license']==6):?> selected<?php endif?>>저작자표시-변경금지 Creative Commons</option>
			</select>
		</div>

		<div class="form-group">
		  
			<label class="checkbox">
			<input name="use_cment" type="checkbox" value="1"<?php if($_R['use_cment']):?> checked<?php endif?>>
			댓글허용 
		  </label>
		  <label class="checkbox">
			<input name="use_cross" type="checkbox" value="1"<?php if($_R['use_cross']):?> checked<?php endif?>>
			공유허용 
		  </label>
		  <label class="checkbox">
			<input name="use_ad" type="checkbox" value="1"<?php if($_R['use_as']):?> checked<?php endif?>>
			광고노출 
		  </label>
		</div>
	</div>
  </div>
</div>


:RESULT]
