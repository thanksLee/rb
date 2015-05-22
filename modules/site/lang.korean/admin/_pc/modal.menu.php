<?php
$SITES = getDbArray($table['s_site'],'','*','gid','asc',0,$p);
include_once $g['path_core'].'function/menu.func.php';
$ISCAT = getDbRows($table['s_menu'],'site='.$_HS['uid']);

if($cat)
{
	$CINFO = getUidData($table['s_menu'],$cat);
	$ctarr = getMenuCodeToPath($table['s_menu'],$cat,0);
	$ctnum = count($ctarr);
	for ($i = 0; $i < $ctnum; $i++) $CXA[] = $ctarr[$i]['uid'];
}

$catcode = '';
$is_fcategory =  $CINFO['uid'] && $vtype != 'sub';
$is_regismode = !$CINFO['uid'] || $vtype == 'sub';
if ($is_regismode)
{
	$CINFO['menutype'] = '';
	$CINFO['name']	   = '';
	$CINFO['joint']	   = '';
	$CINFO['redirect'] = '';
	$CINFO['hidden']   = '';
	$CINFO['target']   = '';
	$CINFO['imghead']  = '';
	$CINFO['imgfoot']  = '';
}
?>


[RESULT:

<form name="procForm2" class="form-horizontal" role="form" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" enctype="multipart/form-data" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="regismenu" />
<input type="hidden" name="cat" value="<?php echo $CINFO['uid']?>" />
<input type="hidden" name="vtype" value="<?php echo $vtype?>" />
<input type="hidden" name="depth" value="<?php echo intval($CINFO['depth'])?>" />
<input type="hidden" name="parent" value="<?php echo intval($CINFO['uid'])?>" />
<input type="hidden" name="perm_g" value="<?php echo $CINFO['perm_g']?>" />
<input type="hidden" name="type" value="2" />

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class="fa fa-cog fa-lg"></i> &nbsp;메뉴 등록정보</h4>
		</div>
		<div class="modal-body">

			<div class="form-group">
			<?php if($vtype == 'sub'):?>
			 <label class="col-md-2 control-label">상위메뉴</label>
			  <div class="col-md-10">
				<p class="form-control-static">
				<?php for ($i = 0; $i < $ctnum; $i++): ?>
				<a href="#menu-modal" data-toggle="modal" data-target="#menu-modal"" onclick="getAjaxData('<?php echo $g['adm_href']?>&amp;cat=<?php echo $ctarr[$i]['uid']?>','menu-modal');"><?php echo $ctarr[$i]['name']?></a>
				<?php if($i < $ctnum-1):?> &gt; <?php endif?> 
				<?php $catcode .= $ctarr[$i]['id'].'/';endfor?>
				</p>
			  </div>
			<?php else:?>
			<?php if($cat):?>
			 <label class="col-md-2 control-label">상위메뉴</label>
			  <div class="col-md-10">
				<p class="form-control-static">
				<?php for ($i = 0; $i < $ctnum-1; $i++): ?>
				<a href="#menu-modal" data-toggle="modal" data-target="#menu-modal"" onclick="getAjaxData('<?php echo $g['adm_href']?>&amp;cat=<?php echo $ctarr[$i]['uid']?>','menu-modal');"><?php echo $ctarr[$i]['name']?></a>
				<?php if($i < $ctnum-2):?> &gt; <?php endif?> 
				<?php $delparent=$ctarr[$i]['uid'];$catcode .= $ctarr[$i]['id'].'/';endfor?>
				<?php if(!$delparent):?>최상위메뉴<?php endif?>
				</p>
			  </div>
			<?php endif?>
			<?php endif?>
			</div>

			<div class="form-group">
			  <label class="col-md-2 control-label">메뉴명칭</label>
			  <div class="col-md-10 col-lg-9">
				<div class="input-group">
				  <input class="form-control col-md-6" placeholder="" type="text" name="name" value="<?php echo $CINFO['name']?>">
				  <span class="input-group-btn">
					
					<?php if($is_fcategory):?>
					<a href="#menu-modal" data-toggle="modal" data-target="#menu-modal" onclick="getAjaxData('<?php echo $g['adm_href']?>&amp;cat=<?php echo $cat?>&amp;vtype=sub','menu-modal');"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="top" data-original-title="서브메뉴 만들기">
					  <i class="fa fa-share fa-rotate-90 fa-lg"></i>
					</button></a>
					<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $moudle?>&amp;a=deletemenu&amp;cat=<?php echo $cat?>&amp;parent=<?php echo $delparent?>" target="_action_frame_<?php echo $m?>" onclick="return confirm('정말로 삭제하시겠습니까?     ')"><button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" data-original-title="메뉴삭제">
					  <i class="fa fa-trash-o fa-lg"></i>
					</button></a>
					<?php else:?>
					<button class="btn btn-default disabled" type="button" data-toggle="tooltip" data-placement="top" data-original-title="서브메뉴 만들기">
					  <i class="fa fa-share fa-rotate-90 fa-lg"></i>
					</button>
					<button class="btn btn-danger disabled" type="button" data-toggle="tooltip" data-placement="top" data-original-title="메뉴삭제">
					  <i class="fa fa-trash-o fa-lg"></i>
					</button>
					<?php endif?>

				  </span>
				</div><!-- /input-group -->
				<span class="help-block">
					복수의 메뉴를 한번에 등록하시려면 메뉴명을 콤마(,)로 구분해 주세요.<br />
					보기)회사소개,커뮤니티,고객센터<br />
					메뉴코드를 같이 등록하시려면 다음과 같은 형식으로 등록해 주세요.<br />
					보기)회사소개=company,커뮤니티=community,고객센터=center<br />
				</span>
			  </div>
			</div>
			<?php if($CINFO['uid']&&!$vtype):?>
			<div class="form-group">
			  <label class="col-md-2 control-label">메뉴코드</label>
			  <div class="col-md-10 col-lg-9">
				<div class="input-group">
				  <input class="form-control" placeholder="" type="text" name="id" value="<?php echo $CINFO['id']?>" maxlength="20">
				  <span class="input-group-addon">
				  <?php if($CINFO['uid']):?>
					고유키=<code><?php echo sprintf('%05d',$CINFO['uid'])?></code>
				  <?php else:?>
					고유키=자동생성됨
				  <?php endif?>
				  </span>
				</div>
				<span class="help-block">
				  <ul class="list-unstyled">
					이 메뉴를 잘 표현할 수 있는 단어로 입력해 주세요.<br />
					영문대소문자/숫자/_/- 조합으로 등록할 수 있습니다.<br />
					보기) 메뉴호출주소 : <?php echo RW('c=<span class="b">메뉴코드</span>')?><br />
					메뉴코드는 중복될 수 없습니다.<br />
				  </ul>
				</span>
			  </div>
			</div>
			<?php endif?>
	<div class="form-group">
		<label class="col-md-2 col-lg-2 control-label">전시내용</label>
		<div class="col-md-10 col-lg-9">
			<div class="btn-group btn-group-justified" data-toggle="buttons">
				<a href="#codeBox1" class="btn btn-default<?php if(!$CINFO['uid']||$CINFO['menutype']==3):?> active<?php endif?>" data-toggle="tab">
					<input id="option1" name="menutype" type="radio" value="3"<?php if(!$CINFO['uid']||$CINFO['menutype']==3):?> checked<?php endif?>>
					직접꾸미기 
				</a>
				<a href="#widgetBox1" class="btn btn-default<?php if($CINFO['menutype']==2):?> active<?php endif?>" data-toggle="tab">
					<input id="option2" name="menutype" type="radio" value="2"<?php if($CINFO['menutype']==2):?> checked<?php endif?>>
					위젯전시 
				</a>
				<a href="#jointBox1" class="btn btn-default<?php if($CINFO['menutype']==1):?> active<?php endif?>" data-toggle="tab">
					<input id="option3" name="menutype" type="radio" value="1"<?php if($CINFO['menutype']==1):?> checked<?php endif?>>
					모듈연결 
				</a>
			</div>
		</div>
	</div>
	<div class="form-group tab-content">
		<div class="tab-pane active form-group" id="codeBox1">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<?php if($CINFO['uid']):?>
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.menu&_menu=<?php echo $CINFO['uid']?>&type=source" class="btn btn-default btn-block" type="button"><i class="fa fa-pencil fa-lg"></i> 직접편집</a>
				<?php else:?>
				메뉴 등록 후 사용자페이지에서 직접 편집할 수 있습니다.
				<?php endif?>
			</div>
		</div>
		<div class="tab-pane form-group" id="widgetBox1">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<?php if($CINFO['uid']):?>
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.menu&_menu=<?php echo $CINFO['uid']?>&type=widget" class="btn btn-default btn-block" type="button"><i class="fa fa-puzzle-piece fa-lg"></i> 위젯으로 꾸미기</a>				
				<?php else:?>
				메뉴 등록 후 사용자페이지에서 직접 꾸밀 수 있습니다.
				<?php endif?>
			</div>
		</div>
		<div class="tab-pane form-group" id="jointBox1">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<div class="input-group">
					<input type="text" name="joint" id="jointf" value="<?php echo $CINFO['joint']?>" class="form-control" />
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal-module-joint">
							<i class="fa fa-link fa-lg"></i> 모듈연결
						</button>
						<?php if($CINFO['joint']):?>
						<button class="btn btn-default" type="button" onclick="window.open('<?php echo $CINFO['joint']?>');">
							<i class="fa fa-external-link fa-lg"></i> 미리보기
						</button>
						<?php endif?>
					</span>
				</div>
				<span class="help-block">
					<label>
					<input type="checkbox" name="redirect" id="xredirect" value="1"<?php if($CINFO['redirect']):?> checked<?php endif?>>
					입력된 주소로 리다이렉트 시켜줍니다.(외부주소 링크시 사용)
					</label>
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
	  <label class="col-md-2 control-label">메뉴옵션</label>
	  <div class="col-md-10 col-lg-9">
		<div class="btn-group btn-group-justified hidden-xs" data-toggle="buttons">
		  <label class="btn btn-default<?php if($CINFO['mobile']):?> active<?php endif?>">
			<input type="checkbox" name="mobile1" value="1"<?php if($CINFO['mobile']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-phone"></span>
			모바일출력 
		  </label>
		  <label class="btn btn-default<?php if($CINFO['target']):?> active<?php endif?>">
			<input type="checkbox" name="target1" value="_blank"<?php if($CINFO['target']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-new-window"></span>
			새창열기 
		  </label>
		  <label class="btn btn-default<?php if($CINFO['hidden']):?> active<?php endif?>">
			<input type="checkbox" name="hidden1" value="1"<?php if($CINFO['hidden']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-eye-close"></span>
			메뉴숨김 
		  </label>
		  <label class="btn btn-default<?php if($CINFO['reject']):?> active<?php endif?>">
			<input type="checkbox" name="reject1" value="1"<?php if($CINFO['reject']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-lock"></span>
			메뉴잠금 
		  </label>
		</div>
		<div class="btn-group btn-group-justified visible-xs" data-toggle="buttons">
		  <label class="btn btn-default<?php if($CINFO['mobile']):?> active<?php endif?>">
			<input type="checkbox" name="mobile2" value="1"<?php if($CINFO['mobile']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-phone"></span>
		  </label>
		  <label class="btn btn-default<?php if($CINFO['target']):?> active<?php endif?>">
			<input type="checkbox" name="target2" value="_blank"<?php if($CINFO['target']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-new-window"></span>
		  </label>
		  <label class="btn btn-default<?php if($CINFO['hidden']):?> active<?php endif?>">
			<input type="checkbox" name="hidden2" value="1"<?php if($CINFO['hidden']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-eye-close"></span>
		  </label>
		  <label class="btn btn-default<?php if($CINFO['reject']):?> active<?php endif?>">
			<input type="checkbox" name="reject2" value="1"<?php if($CINFO['reject']):?> checked<?php endif?>>
			<span class="glyphicon glyphicon-lock"></span>
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">레이아웃</label>
	  <div class="col-md-10 col-lg-9">
		<select class="col-md-12 form-control" name="layout" tabindex="-1">
		<?php $dirs = opendir($g['path_layout'])?>
		<?php while(false !== ($tpl = readdir($dirs))):?>
		<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
		<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
		<optgroup label="<?php echo getFolderName($g['path_layout'].$tpl)?>">
		<?php while(false !== ($tpl1 = readdir($dirs1))):?>
		<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
		<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($CINFO['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?></option>
		<?php endwhile?>
		<?php closedir($dirs1)?>
		</optgroup>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</select>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">허용등급</label>
	  <div class="col-md-10 col-lg-9">
		<select class="col-md-12 form-control" name="perm_l">
		<option value="">&nbsp;+ 전체허용</option>
		<?php $_LEVEL=getDbArray($table['s_mbrlevel'],'','*','uid','asc',0,1)?>
		<?php while($_L=db_fetch_array($_LEVEL)):?>
		<option value="<?php echo $_L['uid']?>"<?php if($_L['uid']==$CINFO['perm_l']):?> selected="selected"<?php endif?>>ㆍ<?php echo $_L['name']?>(<?php echo number_format($_L['num'])?>) 이상</option>
		<?php if($_L['gid'])break; endwhile?>
		</select>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">차단그룹</label>
	  <div class="col-md-10 col-lg-9">
		<select class="col-md-12 form-control" name="_perm_g" multiple size="5">
		<option value=""<?php if(!$CINFO['perm_g']):?> selected="selected"<?php endif?>>ㆍ차단안함</option>
		<?php $_SOSOK=getDbArray($table['s_mbrgroup'],'','*','gid','asc',0,1)?>
		<?php while($_S=db_fetch_array($_SOSOK)):?>
		<option value="<?php echo $_S['uid']?>"<?php if(strstr($CINFO['perm_g'],'['.$_S['uid'].']')):?> selected="selected"<?php endif?>>ㆍ<?php echo $_S['name']?>(<?php echo number_format($_S['num'])?>)</option>
		<?php endwhile?>
		</select>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-2 control-label">캐시적용</label>
	  <div class="col-md-10 col-lg-9">

		<?php $cachefile = $g['path_page'].'menu/'.sprintf('%05d',$CINFO['uid']).'.txt'?>
		<?php $cachetime = file_exists($cachefile) ? implode('',file($cachefile)) : 0?>
		<select name="cachetime" class="col-md-12 form-control">
		<option value="">&nbsp;+ 적용안함</option>
		<?php for($i = 1; $i < 61; $i++):?>
		<option value="<?php echo $i?>"<?php if($cachetime==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>분</option>
		<?php endfor?>
		</select>

	  </div>
	</div>

	<?php if($CINFO['uid']):?>
	<div class="form-group">
	  <label class="col-md-2 control-label">메뉴주소</label>
	  <div class="col-md-10 col-lg-9">
		<dl class="dl-horizontal">
		  <dt>물리주소</dt>
		  <dd>
			<code><?php echo $g['s']?>/index.php?r=<?php echo $r?>&amp;c=<?php echo $vtype?substr($catcode,0,strlen($catcode)-1):$catcode.$CINFO['id']?></code>&nbsp;<a href="<?php echo $g['s']?>/index.php?r=<?php echo $r?>&amp;c=<?php echo $vtype?substr($catcode,0,strlen($catcode)-1):$catcode.$CINFO['id']?>" target="_blank">
				<span class="glyphicon glyphicon-new-window"></span>
			</a>
		  </dd>
		  <dt>현재주소</dt>
		  <dd>
			<code><?php echo RW($CINFO['uid']?'c='.($vtype?substr($catcode,0,strlen($catcode)-1):$catcode.$CINFO['id']):0)?></code>&nbsp;<a href="<?php echo RW($CINFO['uid']?'c='.($vtype?substr($catcode,0,strlen($catcode)-1):$catcode.$CINFO['id']):0)?>" target="_blank">
				<span class="glyphicon glyphicon-new-window"></span>
			</a>
		  </dd>
		</dl>
	  </div>
	</div>
	<?php endif?>

	</div>
	<div class="modal-footer">
	  <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check fa-lg"></i> 속성변경</button>
	  <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">닫기</button>
	</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form>

:RESULT]
