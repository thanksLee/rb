<?php
$R=array();
$recnum= 20;
$catque= ($cat?"category='".$cat."'":'');
$PAGES = getDbArray($table['s_page'],$catque,'*','uid','asc',$recnum,$p);
$NUM = getDbRows($table['s_page'],$catque);
$TPG = getTotalPage($NUM,$recnum);

if ($uid)
{
	$R = getUidData($table['s_page'],$uid);
}
?>


<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="fa fa-file-text-o fa-2x"></i>
				</div>
				<h4 class="dropdown panel-title">
					<a class=" dropdown-toggle" data-toggle="dropdown" href="#">
						전체페이지&nbsp;<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li role="presentation" class="dropdown-header">페이지 분류</li>
						<?php $_cats=array()?>
						<?php $CATS=db_query("select *,count(*) as cnt from ".$table['s_page']." group by category",$DB_CONNECT)?>
						<?php while($C=db_fetch_array($CATS)):$_cats[]=$C['category']?>
						<li<?php if($C['category']==$cat):?> class="active"<?php endif?>><a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo urlencode($C['category'])?>"><?php echo $C['category']?> <small>(<?php echo $C['cnt']?>)</small></a></li>
						<?php endwhile?>
					</ul>
				</h4>
			</div>
			<div class="list-group">
				
				<?php $_pagetypeset=array('','fa-link','fa-puzzle-piece','fa-pencil')?>
				<?php while($PR = db_fetch_array($PAGES)):?>
				<a class="list-group-item<?php if($uid==$PR['uid']):?> active<?php endif?>" href="<?php echo $g['adm_href']?>&amp;cat=<?php echo urlencode($cat)?>&amp;p=<?php echo $p?>&amp;uid=<?php echo $PR['uid']?>#cat">
					<span class="badge">
						<i class="fa <?php echo $_pagetypeset[$PR['pagetype']]?> fa-lg"></i>
					</span>
					<?php echo $PR['name']?>
					<small>(<?php echo $PR['id']?>)</small>
				</a>
				<?php endwhile?>

			</div>
			<div class="panel-footer text-center">
				<ul class="pagination">
					<li><a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo urlencode($cat)?>&amp;p=1">&laquo;</a></li>
					<?php for($i = 1; $i <= $TPG; $i++):?>
					<li><a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo urlencode($cat)?>&amp;p=<?php echo $i?>"><?php echo $i?></a></li>
					<?php endfor?>
					<li><a href="<?php echo $g['adm_href']?>&amp;cat=<?php echo urlencode($cat)?>&amp;p=<?php echo $TPG?>">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<a name="cat"></a>
	<div class="col-md-8 col-lg-9" id="tab-content-view">
		<div class="page-header">
			<h4>
				<?php if($R['uid']):?>
				<i class="fa fa-cog fa-lg"></i> &nbsp;페이지 등록정보
				<span class="text-muted">( <?php echo $R['name']?> )</span>
				<?php else:?>
				<i class="fa fa-cog fa-lg"></i> &nbsp;새 페이지 만들기
				<?php endif?>
			</h4>
		</div>



		<form class="form-horizontal" role="form" name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="regispage" />
		<input type="hidden" name="uid" value="<?php echo $R['uid']?>" />
		<input type="hidden" name="orign_id" value="<?php echo $R['id']?>" />
		<input type="hidden" name="perm_g" value="<?php echo $R['perm_g']?>" />
		<input type="hidden" name="type" value="1" />

			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">명칭</label>
				<div class="col-md-10 col-lg-9">
					<input class="form-control col-md-6" placeholder="" type="text" name="name" value="<?php echo $R['name']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-lg-offset-2 col-md-10 col-lg-9">
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox1" name="ismain" value="1"<?php if($R['ismain']):?> checked="checked"<?php endif?>> <span class="glyphicon glyphicon-home"></span>	시작 페이지 
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox2" name="mobile" value="1"<?php if($R['mobile']):?> checked="checked"<?php endif?>> <span class="glyphicon glyphicon-phone"></span> 모바일 전용 
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">코드</label>
				<div class="col-md-10 col-lg-9">
					<div class="input-group">
						<input class="form-control" type="text" name="id" value="<?php echo $R['id']?$R['id']:$_mod?>" maxlength="20">
						<span class="input-group-btn">
							<?php if($R['id']):?>
							<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=deletepage&amp;uid=<?php echo $R['uid']?>" target="_action_frame_<?php echo $m?>" onclick="return confirm('정말로 삭제하시겠습니까?     ')"><button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" data-original-title="페이지삭제">
								<i class="fa fa-trash-o fa-lg"></i>
							</button></a>
							<?php else:?>
							<button class="btn btn-danger disabled" type="button" data-toggle="tooltip" data-placement="top" data-original-title="페이지삭제">
								<i class="fa fa-trash-o fa-lg"></i>
							</button>
							<?php endif?>
						</span>
					</div>
					<span class="help-block">
						<ul class="list-unstyled">
						페이지 호출시에 사용되는 코드이며 영문대소문자/숫자/_/- 조합으로 등록할 수 있습니다.<br />
						보기) 페이지호출주소 : <?php echo $g['r']?>/?mod=<span class="b">페이지코드</span><br />
						보기) 마이페이지호출 : <?php echo $g['r']?>/?mod=<span class="b">mypage</span><br />
						</ul>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">분류</label>
				<div class="col-md-10 col-lg-9">
					<div class="input-group">
						<input class="form-control" type="text" name="category" value="<?php echo $R['category']?>">
						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">선택
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right">
								<?php foreach($_cats as $_val):?>
								<li><a href="#." onclick="document.procForm.category.value=this.innerHTML;"><?php echo $_val?></a></li>
								<?php endforeach?>
								<?php if(count($_cats)):?>
								<li class="divider"></li>
								<?php endif?>
								<li><a href="#." onclick="document.procForm.category.value='';document.procForm.category.focus();">직접입력</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div>
					<span class="help-block">관리가 편하도록 페이지분류를 적절히 지정하여 등록해 주세요.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">전시내용</label>
				<div class="col-md-10 col-lg-9">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<a href="#codeBox" class="btn btn-default<?php if(!$R['uid']||$R['pagetype']==3):?> active<?php endif?>" data-toggle="tab">
							<input id="option1" name="pagetype" type="radio" value="3"<?php if(!$R['uid']||$R['pagetype']==3):?> checked<?php endif?>>
							직접꾸미기 
						</a>
						<a href="#widgetBox" class="btn btn-default<?php if($R['pagetype']==2):?> active<?php endif?>" data-toggle="tab">
							<input id="option2" name="pagetype" type="radio" value="2"<?php if($R['pagetype']==2):?> checked<?php endif?>>
							위젯전시 
						</a>
						<a href="#jointBox" class="btn btn-default<?php if($R['pagetype']==1):?> active<?php endif?>" data-toggle="tab">
							<input id="option3" name="pagetype" type="radio" value="1"<?php if($R['pagetype']==1):?> checked<?php endif?>>
							모듈연결 
						</a>
					</div>
				</div>
			</div>
			<div class="form-group tab-content">
				<div class="tab-pane active form-group" id="codeBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<?php if($R['uid']):?>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.page&_page=<?php echo $R['uid']?>&type=source" class="btn btn-default btn-block" type="button"><i class="fa fa-pencil fa-lg"></i> 직접편집</a>
						<?php else:?>
						페이지 등록 후 사용자페이지에서 직접 편집할 수 있습니다.
						<?php endif?>
					</div>
				</div>
				<div class="tab-pane form-group" id="widgetBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<?php if($R['uid']):?>
						<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&system=edit.page&_page=<?php echo $R['uid']?>&type=widget" class="btn btn-default btn-block" type="button"><i class="fa fa-puzzle-piece fa-lg"></i> 위젯으로 꾸미기</a>				
						<?php else:?>
						페이지 등록 후 사용자페이지에서 직접 꾸밀 수 있습니다.
						<?php endif?>
					</div>
				</div>
				<div class="tab-pane form-group" id="jointBox">
					<div class="col-md-offset-2 col-md-10 col-lg-9">
						<div class="input-group">
							<input type="text" name="joint" id="jointf" value="<?php echo $R['joint']?>" class="form-control" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal-module-joint">
									<i class="fa fa-link fa-lg"></i> 모듈연결
								</button>
								<?php if($R['joint']):?>
								<button class="btn btn-default" type="button" onclick="window.open('<?php echo $R['joint']?>');">
									<i class="fa fa-external-link fa-lg"></i> 미리보기
								</button>
								<?php endif?>
							</span>
						</div>
						<span class="help-block">
							<ul class="list-unstyled">
								<li>이 페이지에 연결시킬 모듈이 있을 경우 모듈연결을 클릭한 후 선택해 주세요.</li>
								<li>모듈 연결주소가 지정되면 이 메뉴를 호출시 해당 연결주소의 모듈이 출력됩니다.</li>
								<li>접근권한은 연결된 모듈의 권한설정을 따릅니다.</li>
							</ul>
						</span>
					</div>
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
					<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($R['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?></option>
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
					<select class="col-md-12 form-control" name="sosokmenu">
					<option value="">&nbsp;+ 사용안함</option>
					<?php include_once $g['path_core'].'function/menu1.func.php'?>
					<?php $cat=$R['sosokmenu']?>
					<?php getMenuShowSelect($s,$table['s_menu'],0,0,0,0,0,'')?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">허용등급</label>
				<div class="col-md-10 col-lg-9">
					<select class="col-md-12 form-control" name="perm_l">
					<option value="">&nbsp;+ 전체허용</option>
					<?php $_LEVEL=getDbArray($table['s_mbrlevel'],'','*','uid','asc',0,1)?>
					<?php while($_L=db_fetch_array($_LEVEL)):?>
					<option value="<?php echo $_L['uid']?>"<?php if($_L['uid']==$R['perm_l']):?> selected="selected"<?php endif?>>ㆍ<?php echo $_L['name']?>(<?php echo number_format($_L['num'])?>) 이상</option>
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
				<option value="<?php echo $_S['uid']?>"<?php if(strstr($R['perm_g'],'['.$_S['uid'].']')):?> selected="selected"<?php endif?>>ㆍ<?php echo $_S['name']?>(<?php echo number_format($_S['num'])?>)</option>
				<?php endwhile?>
				</select>
			  </div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">캐시적용</label>
				<div class="col-md-10 col-lg-9">
				<?php $cachefile = $g['path_page'].$R['id'].'.txt'?>
				<?php $cachetime = file_exists($cachefile) ? implode('',file($cachefile)) : 0?>
				<select name="cachetime" class="col-md-12 form-control">
				<option value="">&nbsp;+ 적용안함</option>
				<?php for($i = 1; $i < 61; $i++):?>
				<option value="<?php echo $i?>"<?php if($cachetime==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>분</option>
				<?php endfor?>
				</select>
				</div>
			</div>
			<?php if($R['uid']):?>
			<div class="form-group">
				<label class="col-md-2 col-lg-2 control-label">주소</label>
				<div class="col-md-10 col-lg-9">
					<dl class="dl-horizontal">
						<dt>물리주소</dt>
						<dd>
							<code><?php echo $g['s']?>/index.php?r=<?php echo $r?>&amp;mod=<?php echo $R['id']?></code>&nbsp;<a href="<?php echo $g['s']?>/index.php?r=<?php echo $r?>&amp;mod=<?php echo $R['id']?>" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
						<dt>현재주소</dt>
						<dd>
							<code><?php echo RW('mod='.$R['id'])?></code>&nbsp;<a href="<?php echo RW('mod='.$R['id'])?>" target="_blank">
								<span class="glyphicon glyphicon-new-window"></span>
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<?php endif?>
			<div class="form-group">
				<div class="col-md-offset-2 col-lg-offset-2 col-md-10 col-lg-9">
					<button class="btn btn-primary btn-block btn-lg visible-lg" type="submit" onclick="this.form.type.value=1;"><i class="fa fa-check fa-lg"></i> <?php if($R['uid']):?>속성변경<?php else:?>신규페이지 등록<?php endif?></button>
					<button class="btn btn-primary btn-block btn-lg hidden-lg" type="submit" onclick="this.form.type.value=2;"><i class="fa fa-check fa-lg"></i> <?php if($R['uid']):?>속성변경<?php else:?>신규페이지 등록<?php endif?></button>
				</div>
			</div>
		</form>
	</div>
</div>





<script type="text/javascript">
//<![CDATA[
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

	if (f.name.value == '')
	{
		alert('페이지명 입력해 주세요.      ');
		f.name.focus();
		return false;
	}
	if (f.id.value == '')
	{
		alert('페이지코드를 입력해 주세요.      ');
		f.id.focus();
		return false;
	}

	if (!chkFnameValue(f.id.value))
	{
		alert('페이지코드는 영문대소문자/숫자/_/- 만 사용할 수 있습니다.      ');
		f.id.focus();
		return false;
	}
	if (f.category.value == '')
	{
		alert('페이지분류를 입력해 주세요.      ');
		f.category.focus();
		return false;
	}
	if (f.pagetype.value == '1')
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
<?php if($type == 'makepage'):?>
document.procForm.name.focus();
<?php endif?>
//]]>
</script>
