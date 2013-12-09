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


<link rel="stylesheet" type="text/css" href="<?php echo $g['url_module_skin']?>/assets/css/bootstrap-tree.css">


<style type="text/css">
.order-change .panel-body{
	padding: 0;
}
.order-change .panel-body a {
	display: block;
	color: #444;
	cursor: move;
	padding: 5px 10px;
	background-color: #eee;
}
.order-change .panel-body a:hover {
	text-decoration: none;
	background-color: #fff;
}
</style>

<div class="row">
<div class="col-md-4 col-lg-3" id="tab-content-list">
  <div class="site-selector" style="margin-bottom:10px">
		<select class="form-control" onchange="goHref('<?php echo $g['s']?>/?m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $front?>&r='+this.value);">
		<?php while($S = db_fetch_array($SITES)):?>
		<option value="<?php echo $S['id']?>"<?php if($r==$S['id']):?> selected="selected"<?php endif?>><?php echo $S['name']?> (<?php echo $S['id']?>)</option>
		<?php endwhile?>
		<?php if(!db_num_rows($SITES)):?>
		<option value="">등록된 사이트가 없습니다.</option>
		<?php endif?>
		</select>
  </div>
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
	  <div class="panel-heading">
		<div class="icon">
		  <i class="fa fa-sitemap fa-2x"></i>
		</div>
		<h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">메뉴구조</a></h4>
	  </div>

	  <div class="panel-collapse collapse in" id="collapseOne">
		<div class="panel-body">
			<!-- tree -->
			<div style="height:300px">


			<?php if($ISCAT):?>
			<div class="tree">
			<?php if(!$_isDragScript):?>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/core.js"></script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/events.js"></script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/css.js"></script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/coordinates.js"></script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/drag.js"></script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/opensrc/tool-man/dragsort.js"></script>
			<script type="text/javascript">
			//<![CDATA[
			var dragsort = ToolMan.dragsort();
			//]]>
			</script>
			<?php endif?>
			<script type="text/javascript">
			//<![CDATA[
			var dragsort = ToolMan.dragsort();
			var TreeImg = "<?php echo $g['img_core']?>/tree/default_none";
			var ulink = "<?php echo $g['adm_href']?>&amp;cat=";
			//]]>
			</script>
			<script type="text/javascript" src="<?php echo $g['s']?>/_core/js/tree.js"></script>
			<script type="text/javascript">
			//<![CDATA[
			var TREE_ITEMS = [['', null, <?php getMenuShow($s,$table['s_menu'],0,0,0,$cat,$CXA,0)?>]];
			new tree(TREE_ITEMS, tree_tpl);
			<?php echo $MenuOpen?>
			//]]>
			</script>
			</div>
			<?php else:?>
			<div>등록된 메뉴가 없습니다.</div>
			<?php endif?>

			</div>
			<!-- /tree -->
		</div>
		<div class="panel-footer">
			<div class="btn-group dropup btn-block">
				<button type="button" class="btn btn-default dropdown-toggle btn-block btn-lg" data-toggle="dropdown">
					<i class="fa fa-download fa-lg"></i> 구조 내려받기 
				</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=xml" target="_blank">XML로 생성/받기</a></li>
					<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=xls" target="_action_frame_<?php echo $m?>">엑셀로 받기</a></li>
					<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=txt" target="_action_frame_<?php echo $m?>">텍스트파일로 받기</a></li>
				</ul>
			</div>
		</div>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
		<div class="icon">
		  <i class="fa fa-retweet fa-2x"></i>
		</div>
		<h4 class="panel-title">
		  <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
			순서 조정
		  </a>
		</h4>
	  </div>
	  <div class="panel-collapse collapse" id="collapseTwo">
		<?php if($CINFO['isson']||(!$cat&&$ISCAT)):?>
		<form class="form-horizontal" role="form" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="modifymenugid" />
		<div class="panel-body order-change">
			<ul id="menuorder" class="list-unstyled">
			<?php $_MENUS=getDbSelect($table['s_menu'],'site='.$s.' and parent='.intval($CINFO['uid']).' and depth='.($CINFO['depth']+1).' order by gid asc','*')?>
			<?php while($_M=db_fetch_array($_MENUS)):?>
			<li style="padding:3px 0 3px 0;">
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="#."><i class="fa fa-folder"></i> <?php echo $_M['name']?> <?php if($_M['hidden']):?><img src="<?php echo $g['img_core']?>/_public/ico_hidden.gif" alt="" /><?php endif?></a>
					</div>
				</div>
				<input type="checkbox" name="menumembers[]" value="<?php echo $_M['uid']?>" checked="checked" class="hidden" />
			</li>
			<?php endwhile?>
			</ul>
		</div>
		<div class="panel-footer">
		  <button class="btn btn-default btn-lg btn-block" type="submit"><i class="fa fa-check fa-lg"></i> 순서저장</button>
		</div>
		</form>
		<?php endif?>
	  </div>
	</div>
  </div>
  <hr>
</div>
<a name="cat"></a>
<div class="col-md-8 col-lg-9 hidden-xs hidden-sm" id="tab-content-view">
  <div class="page-header">
	<h4><i class="fa fa-cog fa-lg"></i>
	<?php if($is_regismode):?>
		<?php if($vtype == 'sub'):?>서브메뉴 만들기<?php else:?>최상위메뉴 만들기<?php endif?>
	<?php else:?>
		메뉴 등록정보
	<?php endif?>
	</h4>
  </div>



	<form  name="procForm1" class="form-horizontal" role="form" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" enctype="multipart/form-data" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="regismenu" />
	<input type="hidden" name="cat" value="<?php echo $CINFO['uid']?>" />
	<input type="hidden" name="vtype" value="<?php echo $vtype?>" />
	<input type="hidden" name="depth" value="<?php echo intval($CINFO['depth'])?>" />
	<input type="hidden" name="parent" value="<?php echo intval($CINFO['uid'])?>" />
	<input type="hidden" name="perm_g" value="<?php echo $CINFO['perm_g']?>" />
	<input type="hidden" name="type" value="1" />
	<input type="hidden" name="menutype" value="<?php echo $R['menutype']?$R['menutype']:3?>" />


	<div class="form-group">
	<?php if($vtype == 'sub'):?>
	 <label class="col-md-2 control-label">상위메뉴</label>
	  <div class="col-md-10">
		<p class="form-control-static">
		<?php for ($i = 0; $i < $ctnum; $i++): ?>
		<a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo $ctarr[$i]['uid']?>"><?php echo $ctarr[$i]['name']?></a>
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
		<a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo $ctarr[$i]['uid']?>"><?php echo $ctarr[$i]['name']?></a>
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
			<a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo $cat?>&amp;vtype=sub" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="서브메뉴 만들기">
			  <i class="fa fa-share fa-rotate-90 fa-lg"></i>
			</a>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $moudle?>&amp;a=deletemenu&amp;cat=<?php echo $cat?>&amp;parent=<?php echo $delparent?>" target="_action_frame_<?php echo $m?>" onclick="return confirm('정말로 삭제하시겠습니까?     ')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="메뉴삭제">
			  <i class="fa fa-trash-o fa-lg"></i>
			</a>
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
				<a href="#codeBox" class="btn btn-default<?php if(!$CINFO['uid']||$CINFO['menutype']==3):?> active<?php endif?>" data-toggle="tab" onclick="document.procForm1.menutype.value='2';">
					<input id="option1" name="_menutype" type="radio" value="3"<?php if(!$CINFO['uid']||$CINFO['menutype']==3):?> checked<?php endif?>>
					직접꾸미기 
				</a>
				<a href="#widgetBox" class="btn btn-default<?php if($CINFO['menutype']==2):?> active<?php endif?>" data-toggle="tab" onclick="document.procForm1.menutype.value='2';">
					<input id="option2" name="_menutype" type="radio" value="2"<?php if($CINFO['menutype']==2):?> checked<?php endif?>>
					위젯전시 
				</a>
				<a href="#jointBox" class="btn btn-default<?php if($CINFO['menutype']==1):?> active<?php endif?>" data-toggle="tab" onclick="document.procForm1.menutype.value='1';">
					<input id="option3" name="_menutype" type="radio" value="1"<?php if($CINFO['menutype']==1):?> checked<?php endif?>>
					모듈연결 
				</a>
			</div>
		</div>
	</div>
	<div class="form-group tab-content">
		<div class="tab-pane form-group<?php if(!$CINFO['uid']||$CINFO['menutype']==3):?> active<?php endif?>" id="codeBox">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<?php if($CINFO['uid']):?>
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.menu&_menu=<?php echo $CINFO['uid']?>&type=source" class="btn btn-default btn-block" type="button"><i class="fa fa-pencil fa-lg"></i> 직접편집</a>
				<?php else:?>
				메뉴 등록 후 사용자페이지에서 직접 편집할 수 있습니다.
				<?php endif?>
			</div>
		</div>
		<div class="tab-pane form-group<?php if($CINFO['menutype']==2):?> active<?php endif?>" id="widgetBox">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<?php if($CINFO['uid']):?>
				<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.menu&_menu=<?php echo $CINFO['uid']?>&type=widget" class="btn btn-default btn-block" type="button"><i class="fa fa-puzzle-piece fa-lg"></i> 위젯으로 꾸미기</a>				
				<?php else:?>
				메뉴 등록 후 사용자페이지에서 직접 꾸밀 수 있습니다.
				<?php endif?>
			</div>
		</div>
		<div class="tab-pane form-group<?php if($CINFO['menutype']==1):?> active<?php endif?>" id="jointBox">
			<div class="col-md-offset-2 col-md-10 col-lg-9">
				<div class="input-group">
					<input type="text" name="joint" id="jointf" value="<?php echo $CINFO['joint']?>" class="form-control" />
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal-module-joint">
							<i class="fa fa-link fa-lg"></i> 모듈연결
						</button>
						<button class="btn btn-default" type="button" onclick="getId('jointf').value!=''?window.open(getId('jointf').value):alert('모듈연결 주소를 등록해 주세요.');">
							<i class="fa fa-external-link fa-lg"></i> 미리보기
						</button>
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
		<option value="">사이트 대표레이아웃</option>
		<?php $dirs = opendir($g['path_layout'])?>
		<?php while(false !== ($tpl = readdir($dirs))):?>
		<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
		<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
		<optgroup label="<?php echo getFolderName($g['path_layout'].$tpl)?>">
		<?php while(false !== ($tpl1 = readdir($dirs1))):?>
		<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
		<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($CINFO['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?><?php if($CINFO['layout']==$tpl.'/'.$tpl1):?> (<?php echo getFolderName($g['path_layout'].$tpl)?>)<?php endif?></option>
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


	<div class="form-group">
	  <label class="col-md-2 control-label">코드확장</label>
	  <div class="col-md-10 col-lg-9">
		<div class="btn-group btn-group-justified hidden-xs" data-toggle="buttons">
		  <label class="btn btn-default<?php if($_COOKIE['ck_menu_header']=='block'):?> active<?php endif?>" onclick="codShowHide('menu_header','block','none');">
			<input type="checkbox">
			메뉴 헤더 
		  </label>
		  <label class="btn btn-default<?php if($_COOKIE['ck_menu_footer']=='block'):?> active<?php endif?>" onclick="codShowHide('menu_footer','block','none');">
			<input type="checkbox">
			메뉴 풋터 
		  </label>
		  <label class="btn btn-default<?php if($_COOKIE['ck_menu_addinfo']=='block'):?> active<?php endif?>" onclick="codShowHide('menu_addinfo','block','none');">
			<input type="checkbox">
			부가필드
		  </label>
		</div>
	  </div>
	</div>


	<div id="menu_header" class="well well-sm col-lg-offset-2 col-lg-9<?php if(!$_COOKIE['ck_menu_header']||$_COOKIE['ck_menu_header']=='none'):?> hidden<?php endif?>">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="menuheader-InputFile">헤더파일</label>
		  <div class="col-md-10 col-lg-10">
			<input type="file" name="imghead" id="menuheader-InputFile" />
			<?php if($CINFO['imghead']):?>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=filemanager&amp;front=main&amp;editmode=Y&amp;pwd=./_var/menu/&file=<?php echo $CINFO['imghead']?>" target="_blank" title="<?php echo $CINFO['imghead']?>" class="u">파일수정</a> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=menu_file_delete&amp;cat=<?php echo $CINFO['uid']?>&amp;dtype=head" target="_action_frame_<?php echo $m?>" class="u" onclick="return confirm('정말로 삭제하시겠습니까?     ');">삭제</a>
			<?php else:?>
			<span>(gif/jpg/png/swf 가능)</span>
			<?php endif?>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label">헤더코드<br><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" data-original-title="에디터 열기" onclick="OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.editor&iframe=Y&droparea=codheadArea');"><i class="fa fa-pencil fa-lg"></i></button></label>
		  <div class="col-md-10 col-lg-10">
			<textarea name="codhead" id="codheadArea" class="form-control" rows="5"><?php if(is_file($g['path_page'].'menu/'.sprintf('%05d',$CINFO['uid']).'.header.php')) echo htmlspecialchars(implode('',file($g['path_page'].'menu/'.sprintf('%05d',$CINFO['uid']).'.header.php')))?></textarea>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label">노출위치</label>
		  <div class="col-md-10 col-lg-10">
			<select name="puthead" class="form-control">
			<option value="0"<?php if(!$CINFO['puthead']):?> selected="selected"<?php endif?>>콘텐트</option>
			<option value="1"<?php if($CINFO['puthead']):?> selected="selected"<?php endif?>>콘테이너</option>
			</select>
		  </div>
		</div>
	</div>

	<div id="menu_footer" class="well well-sm col-lg-offset-2 col-lg-9<?php if(!$_COOKIE['ck_menu_footer']||$_COOKIE['ck_menu_footer']=='none'):?> hidden<?php endif?>">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="menuheader-InputFile">풋터파일</label>
		  <div class="col-md-10 col-lg-10">
			<input type="file" name="imgfoot" id="menufooter-InputFile" />
			<?php if($CINFO['imgfoot']):?>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=filemanager&amp;front=main&amp;editmode=Y&amp;pwd=./_var/menu/&file=<?php echo $CINFO['imgfoot']?>" target="_blank" title="<?php echo $CINFO['imgfoot']?>" class="u">파일수정</a> <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=menu_file_delete&amp;cat=<?php echo $CINFO['uid']?>&amp;dtype=foot" target="_action_frame_<?php echo $m?>" class="u" onclick="return confirm('정말로 삭제하시겠습니까?     ');">삭제</a>
			<?php else:?>
			<span>(gif/jpg/png/swf 가능)</span>
			<?php endif?>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label">풋터코드<br><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" data-original-title="에디터 열기" onclick="OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.editor&iframe=Y&droparea=codfootArea');"><i class="fa fa-pencil fa-lg"></i></button></label>
		  <div class="col-md-10 col-lg-10">
			<textarea name="codfoot" id="codfootArea" class="form-control" rows="5"><?php if(is_file($g['path_page'].'menu/'.sprintf('%05d',$CINFO['uid']).'.footer.php')) echo htmlspecialchars(implode('',file($g['path_page'].'menu/'.sprintf('%05d',$CINFO['uid']).'.footer.php')))?></textarea>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label">노출위치</label>
		  <div class="col-md-10 col-lg-10">
			<select name="putfoot" class="form-control">
			<option value="0"<?php if(!$CINFO['putfoot']):?> selected="selected"<?php endif?>>콘텐트</option>
			<option value="1"<?php if($CINFO['putfoot']):?> selected="selected"<?php endif?>>콘테이너</option>
			</select>
		  </div>
		</div>
	</div>

	<div id="menu_addinfo" class="well well-sm col-lg-offset-2 col-lg-9<?php if(!$_COOKIE['ck_menu_addinfo']||$_COOKIE['ck_menu_addinfo']=='none'):?> hidden<?php endif?>">
		<div class="form-group">
		  <label class="col-md-2 control-label">부가필드</label>
		  <div class="col-md-10 col-lg-10">
			<textarea name="addinfo" class="form-control" rows="3"><?php echo htmlspecialchars($CINFO['addinfo'])?></textarea>
			<span class="help-block">이 메뉴에 대해서 추가적인 정보가 필요할 경우 사용하며 필드명은<code>[addinfo]</code> 입니다.</span>
		  </div>
		</div>
	</div>

	<?php if($is_fcategory && $CINFO['isson']):?>
	<div class="form-group">
	<div class="col-md-offset-2 col-lg-9">
	  <hr>
	  <div class="checkbox">
		<label>
		  <input type="checkbox" name="subcopy" id="cubcopy" value="1" checked="checked" /> 이 설정을 서브메뉴에도 일괄적용 <small class="text-muted">(메뉴숨김, 레이아웃, 권한)</small>
		</label> 
	  </div>
	</div>
	</div>
	<?php endif?>


	<div class="form-group">
		<div class="col-md-offset-2 col-md-10 col-lg-9">
			<button class="btn btn-primary btn-block btn-lg visible-lg" type="submit" onclick="this.form.type.value=1;"><i class="fa fa-check fa-lg"></i> <?php if($CINFO['uid']):?>속성변경<?php else:?>신규메뉴 등록<?php endif?></button>
			<button class="btn btn-primary btn-block btn-lg hidden-lg" type="submit" onclick="this.form.type.value=2;"><i class="fa fa-check fa-lg"></i> <?php if($CINFO['uid']):?>속성변경<?php else:?>신규메뉴 등록<?php endif?></button>
		</div>
	</div>
  </form>
</div>
</div>




<!-- Modal-메뉴 -->
<div class="modal fade" id="menu-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!-- //Modal-메뉴 -->


<script type="text/javascript">
//<![CDATA[
function displaySelect(obj)
{
	var f = document.procForm1;
	if (obj.value == '1')
	{
		getId('jointBox').style.display = 'block';
		getId('widgetBox').style.display = 'none';
		getId('codeBox').style.display = 'none';
		f.joint.focus();
	}
	else if (obj.value == '2')
	{
		getId('jointBox').style.display = 'none';
		getId('widgetBox').style.display = 'block';
		getId('codeBox').style.display = 'none';
	}
	else if (obj.value == '3')
	{
		getId('jointBox').style.display = 'none';
		getId('widgetBox').style.display = 'none';
		getId('codeBox').style.display = 'block';
	}
	else
	{
		getId('jointBox').style.display = 'none';
		getId('widgetBox').style.display = 'none';
		getId('codeBox').style.display = 'none';
	}
}
function codShowHide(layer,show,hide)
{
	if(getId(layer).className.indexOf('hidden') != -1)
	{
		getId(layer).className = getId(layer).className.replace('hidden','');
		setCookie('ck_'+layer,show,1);
	}
	else
	{
		getId(layer).className += ' hidden';
		setCookie('ck_'+layer,hide,1);
	}
}
function saveCheck(f)
{

    var l1 = f._perm_g;
    var n1 = l1.length;
    var i;
	var s1 = '';

	for	(i = 0; i < n1; i++)
	{
		if (l1[i].selected == true && l1[i].value != '')
		{
			s1 += '['+l1[i].value+']';
		}
	}

	f.perm_g.value = s1;

	if (f.r.value == '')
	{
		alert('사이트가 등록되지 않았습니다.      ');
		return false;
	}
	if (f.name.value == '')
	{
		alert('메뉴명칭을 입력해 주세요.      ');
		f.name.focus();
		return false;
	}
	if (f.id)
	{
		if (f.id.value == '')
		{
			alert('메뉴코드를 입력해 주세요.      ');
			f.id.focus();
			return false;
		}
		if (!chkFnameValue(f.id.value))
		{
			alert('메뉴코드는 영문대소문자/숫자/_/- 만 사용할 수 있습니다.      ');
			f.id.focus();
			return false;
		}
	}
	if (f.menutype.value == '1')
	{
		if (f.joint.value == '')
		{
			alert('모듈을 연결해 주세요.      ');
			f.joint.focus();
			return false;
		}
	}

	return confirm('정말로 실행하시겠습니까?         ');
}
function slideshowOpen()
{
	<?php if($CINFO['uid']):?>

	var ch = getCookie('ck_menu_header');
	var cf = getCookie('ck_menu_footer');
	var ca = getCookie('ck_menu_addinfo');

	if (ch == 'block')
	{
		getId('menu_header').className = getId('menu_header').className.replace('hidden','');
	}
	if (cf == 'block')
	{
		getId('menu_footer').className = getId('menu_footer').className.replace('hidden','');
	}
	if (ca == 'block')
	{
		getId('menu_addinfo').className = getId('menu_addinfo').className.replace('hidden','');
	}
	<?php endif?>

	if(getId('menuorder')) dragsort.makeListSortable(getId("menuorder"));
}
slideshowOpen();
<?php if($type == 'makesite'):?>
document.procForm1.name.focus();
<?php endif?>
//]]>
</script>
