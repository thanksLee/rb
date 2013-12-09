<?php include_once $g['path_module'].$module.'/var/var.search.php'?>


<form name="procForm" action="<?php echo $g['s']?>/" method="post" class="form-horizontal" role="form" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="config" />

<div class="page-header">
	<h4><i class="fa fa-cog fa-lg"></i>
	통합검색 설정 </h4>
  </div>


	<div class="form-group">
	  <label class="col-md-2 control-label">검색요소</label>
	  <div class="col-md-10">
		<label class="checkbox-inline">
			<input type="checkbox" name="s_post" value="1"<?php if($d['search']['s_post']):?> checked="checked"<?php endif?> /> 통합 컨텐츠
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_bbs" value="1"<?php if($d['search']['s_bbs']):?> checked="checked"<?php endif?> /> 게시판
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_comment" value="1"<?php if($d['search']['s_comment']):?> checked="checked"<?php endif?> /> 댓글
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_image" value="1"<?php if($d['search']['s_image']):?> checked="checked"<?php endif?> /> 이미지
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_vod" value="1"<?php if($d['search']['s_vod']):?> checked="checked"<?php endif?> /> 비디오
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_upload" value="1"<?php if($d['search']['s_upload']):?> checked="checked"<?php endif?> /> 첨부파일
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="s_search" value="1"<?php if($d['search']['s_search']):?> checked="checked"<?php endif?> /> 외부검색
		</label>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">검색 결과수</label>
	  <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">통합 검색시</span>
			<input type="text" name="s_num1" size="5" value="<?php echo $d['search']['s_num1']?>" class="form-control" />
			<span class="input-group-addon">개</span>
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">상세 검색시</span>
			<input type="text" name="s_num2" size="20" value="<?php echo $d['search']['s_num2']?>" class="form-control" />
			<span class="input-group-addon">개</span>
		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-2 control-label">검색범위</label>
	  <div class="col-md-9">
		<select name="s_term" class="form-control">
			<option value="360"<?php if($d['search']['s_term']==360):?> selected="selected"<?php endif?>>전체</option>
			<option value="36"<?php if($d['search']['s_term']==36):?> selected="selected"<?php endif?>>최근 3년</option>
			<option value="24"<?php if($d['search']['s_term']==24):?> selected="selected"<?php endif?>>최근 2년</option>
			<option value="12"<?php if($d['search']['s_term']==12):?> selected="selected"<?php endif?>>최근 1년</option>
			<option value="6"<?php if($d['search']['s_term']==6):?> selected="selected"<?php endif?>>최근 6개월</option>
			<option value="3"<?php if($d['search']['s_term']==3):?> selected="selected"<?php endif?>>최근 3개월</option>
			<option value="1"<?php if($d['search']['s_term']==1):?> selected="selected"<?php endif?>>최근 한달</option>
		</select>
		<span class="help-block">검색양에 따라 처리속도가 느려질 수 있습니다. 적절한 기간을 지정해 주세요.</span>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">외부검색 목록</label>
	  <div class="col-md-9">
		<textarea name="s_searchlist" class="form-control" rows="5"><?php echo trim(implode('',file($g['path_module'].$module.'/var/search.list.txt')))?></textarea>
		<span class="help-block">검색엔진명과 검색URL을 콤마(,)로 구분해서 등록해 주세요. <br>외부검색을 이용해 검색어를 선택된 검색엔진으로 연결해 줍니다.</span>
	  </div>
	</div>
	<div class="form-group">
		<label class="col-md-2 col-lg-2 control-label">레이아웃</label>
		<div class="col-md-10 col-lg-9">
			<select class="col-md-12 form-control" name="layout" tabindex="-1">
			<?php $dirs = opendir($g['path_layout'])?>
			<?php while(false !== ($tpl = readdir($dirs))):?>
			<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
			<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
			<optgroup label="<?php echo getFolderName($g['path_layout'].$tpl)?>">
			<?php while(false !== ($tpl1 = readdir($dirs1))):?>
			<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
			<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($d['search']['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?></option>
			<?php endwhile?>
			<?php closedir($dirs1)?>
			</optgroup>
			<?php endwhile?>
			<?php closedir($dirs)?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 col-lg-2 control-label">소속메뉴</label>
		<div class="col-md-10 col-lg-9">
			<select name="sosokmenu" class="col-md-12 form-control">
			<option value="">&nbsp;+ 사용안함</option>
			<option value="">--------------------------------</option>
			<?php include_once $g['path_core'].'function/menu1.func.php'?>
			<?php $cat=$d['search']['sosokmenu']?>
			<?php getMenuShowSelect($s,$table['s_menu'],0,0,0,0,0,'')?>
			</select>		
		</div>
	</div>


	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-primary btn-lg hidden-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
			<button type="submit" class="btn btn-primary btn-lg btn-block visible-xs"><i class="fa fa-check fa-lg"></i> 변경사항 저장</button>
		</div>
	</div>

</form>	







<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>




