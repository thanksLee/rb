<?php
$R=array();
$SITES = getDbArray($table['s_site'],'','*','gid','asc',0,$p);
$SITEN = db_num_rows($SITES);
$PAGES1 = getDbArray($table['s_page'],'ismain=1','*','uid','asc',0,$p);
$PAGES2 = getDbArray($table['s_page'],'mobile=1','*','uid','asc',0,$p);

if ($type != 'makesite')
{
	$R = $_HS;
}

if ($R['uid'])
{
	$DOMAINS = getDbArray($table['s_domain'],'site='.$R['uid'],'*','gid','asc',0,$p);
	$DOMAINN = db_num_rows($DOMAINS);
}
?>

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


<form name="" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="siteorder_update" />
<input type="hidden" name="type" value="1" />
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row site">

				<ul id="siteorder1" class="list-inline hidden-xs hidden-sm">
					<?php $_TMP_SITES=array()?>
					<?php while($S = db_fetch_array($SITES)):?>
					<li>
						<a href="<?php echo $g['s']?>/?r=<?php echo $S['id']?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>">
							<span class="fa-stack fa-lg" style="text-align:center;">
							  <i class="fa fa-square-o fa-stack-2x<?php if($S['uid']==$R['uid']):?> text-primary<?php endif?>"></i>
							  <i class="<?php echo $S['icon']?><?php if($S['uid']==$R['uid']):?> text-primary<?php endif?>" id="_siteIcon_<?php echo $S['id']?>_"></i>
							</span>
							<p><span<?php if($S['uid']==$R['uid']):?> class="text-primary"<?php endif?>><?php echo $S['name']?></span></p>
						</a>
						<input type="checkbox" name="sitemembers1[]" value="<?php echo $S['uid']?>" checked="checked" class="hidden" />
					</li>
					<?php $_TMP_SITES[]=$S;endwhile?>
				</ul>


				<ul id="siteorder2" class="list-inline visible-xs visible-sm">
					<?php foreach($_TMP_SITES as $S):?>
					<li>
						<a data-toggle="modal" href="#home-modal-site-info" onclick="getAjaxData('<?php echo $g['s']?>/?r=<?php echo $S['id']?>&m=<?php echo $m?>&module=<?php echo $module?>&front=modal.main','home-modal-site-info');">
							<span class="fa-stack fa-lg" style="text-align:center;">
							  <i class="fa fa-square-o fa-stack-2x<?php if($S['uid']==$R['uid']):?> text-primary<?php endif?>"></i>
							  <i class="<?php echo $S['icon']?><?php if($S['uid']==$R['uid']):?> text-primary<?php endif?>"></i>
							</span>
							<p><span<?php if($S['uid']==$R['uid']):?> class="text-primary"<?php endif?>><?php echo $S['name']?></span></p>
						</a>
						<input type="checkbox" name="sitemembers2[]" value="<?php echo $S['uid']?>" checked="checked" class="hidden" />
					</li>
					<?php endforeach?>
				</ul>
		</div>
	</div>
	<div class="panel-footer">
		<div class="btn-group">
			<a href="<?php echo $g['adm_href']?>&amp;type=makesite" class="btn btn-default btn-sm visible-lg"><span class="glyphicon glyphicon-plus"></span> 사이트 추가</a>
			<button class="btn btn-default btn-sm hidden-xs hidden-sm" type="submit">
				<span class="glyphicon glyphicon-saved"></span>
				순서저장</button>
			<button class="btn btn-default btn-sm visible-xs visible-sm" type="button" onclick="this.form.type.value=2;this.form.submit();">
				<span class="glyphicon glyphicon-saved"></span>
				순서저장</button>
		</div>
	</div>
</div>
</form>

<!-- 사이트 상세정보  -->
<div class="hidden-xs hidden-sm">
	<div class="page-header" id="home-site-info">
		<h4>
			<span class="glyphicon glyphicon-globe"></span>&nbsp;사이트 기본 정보
			<?php if($R['uid']):?><small>(<?php echo $R['name']?>)</small><?php endif?></h4>
	</div>
		<form name="procForm1" class="form-horizontal" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="regissite" />
		<input type="hidden" name="site_uid" value="<?php echo $R['uid']?>" />
		<input type="hidden" name="icon" value="<?php echo $R['icon']?$R['icon']:'kf-home'?>" />
		<input type="hidden" name="backgo" value="admin" />
		<input type="hidden" name="iconaction" value="" />
		<input type="hidden" name="type" value="" />

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">사이트명</label>
					<div class="col-lg-9">
						<div class="input-group">
							<input type="text" name="name" value="<?php echo $R['name']?>" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal-icon-gallery"><i class="fa fa-flag fa-lg"  data-toggle="tooltip" data-placement="top" data-original-title="사이트 아이콘지정"></i></button>
								<?php if($R['uid']):?>
								<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=deletesite&amp;account=<?php echo $R['uid']?>" target="_action_frame_<?php echo $m?>" onclick="return confirm('사이트관련 모든 데이터가 삭제됩니다.\n정말로 선택된 사이트를 삭제하시겠습니까?');" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
								<?php else:?>

								<?php endif?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">사이트제목</label>
					<div class="col-lg-9">
						<div class="input-group">
							<input class="form-control" placeholder="" type="text" name="title" value="<?php echo $R['title']?>">
							<span class="input-group-addon">
								<input type="checkbox" name="titlefix" value="1"<?php if($R['titlefix']):?> checked<?php endif?>>고정
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">사이트 언어</label>
					<div class="col-lg-9">
						<select name="sitelang" class="form-control">
						<?php $dirs = opendir($g['path_var'].'language/')?>
						<?php while(false !== ($tpl = readdir($dirs))):?>
						<?php if($tpl=='.'||$tpl=='..')continue?>
						<option value="<?php echo $tpl?>"<?php if($g['sys_selectlang']==$tpl):?> selected<?php endif?>><?php echo getFolderName($g['path_var'].'language/'.$tpl)?></option>
						<?php endwhile?>
						<?php closedir($dirs)?>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">사이트코드</label>
					<div class="col-lg-9">
						<div class="input-group">
							<input class="form-control" placeholder="" type="text" name="id" value="<?php echo $R['id']?>">
							<span class="input-group-addon">
								<input type="checkbox" name="usescode" value="1"<?php if($R['usescode']):?> checked<?php endif?>>사용
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">레이아웃</label>
					<div class="col-lg-9">
						<select class="col-md-12 form-control" name="layout" tabindex="-1">
						<?php $dirs = opendir($g['path_layout'])?>
						<?php while(false !== ($tpl = readdir($dirs))):?>
						<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
						<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
						<optgroup label="<?php echo getFolderName($g['path_layout'].$tpl)?>">
						<?php while(false !== ($tpl1 = readdir($dirs1))):?>
						<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
						<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($R['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?><?php if($R['layout']==$tpl.'/'.$tpl1):?> (<?php echo getFolderName($g['path_layout'].$tpl)?>)<?php endif?></option>
						<?php endwhile?>
						<?php closedir($dirs1)?>
						</optgroup>
						<?php endwhile?>
						<?php closedir($dirs)?>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">시작페이지</label>
					<div class="col-lg-9">
						<div class="input-group">
							<select name="startpage" class="form-control">
							<?php while($S = db_fetch_array($PAGES1)):?>
							<option value="<?php echo $S['uid']?>"<?php if($R['startpage']==$S['uid']):?> selected="selected"<?php endif?>><?php echo $S['name']?>(<?php echo $S['id']?>)</option>
							<?php endwhile?>
							</select>
							<span class="input-group-btn">
								<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;front=page&amp;type=makepage"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="left" data-original-title="시작페이지 추가">
									<span class="glyphicon glyphicon-plus"></span>
								</button></a>
							</span>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
					<div class="col-lg-9">
						<select class="form-control" name="m_layout">
							<option value="">PC접속과 동일</option>
							<?php $dirs = opendir($g['path_layout'])?>
							<?php while(false !== ($tpl = readdir($dirs))):?>
							<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
							<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
							<optgroup label="<?php echo getFolderName($g['path_layout'].$tpl)?>">
							<?php while(false !== ($tpl1 = readdir($dirs1))):?>
							<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
							<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($R['m_layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?></option>
							<?php endwhile?>
							<?php closedir($dirs1)?>
							</optgroup>
							<?php endwhile?>
							<?php closedir($dirs)?>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label"><span class="text-muted">모바일접속</span></label>
					<div class="col-lg-9">
						<div class="input-group">
							<select class="form-control" name="m_startpage">
								<option value="">PC접속과 동일</option>
								<?php while($S = db_fetch_array($PAGES2)):?>
								<option value="<?php echo $S['uid']?>"<?php if($R['m_startpage']==$S['uid']):?> selected="selected"<?php endif?>><?php echo $S['name']?>(<?php echo $S['id']?>)</option>
								<?php endwhile?>
							</select>
							<span class="input-group-btn">
								<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;front=page&amp;type=makepage"><button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-plus"></span>
								</button></a>
							</span>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">서비스상태</label>
					<div class="col-lg-9">
						<div class="visible-lg">
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" name="open1" id="optionsRadios1" value="1"<?php if(!$R['uid']||$R['open']=='1'):?> checked<?php endif?>> 정상서비스
							</label>
							<label class="radio-inline">
							  <input type="radio" name="open1" id="optionsRadios2" value="2"<?php if($R['open']=='2'):?> checked<?php endif?>> 관리자오픈 
							</label>
							<label class="radio-inline">
							  <input type="radio" name="open1" id="optionsRadios3" value="3"<?php if($R['open']=='3'):?> checked<?php endif?>> 정지 
							</label>
						</div> 
						</div>      
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default<?php if(!$R['uid']||$R['open']=='1'):?> active<?php endif?>">
								<input id="option1" name="open2" type="radio" value="1"<?php if(!$R['uid']||$R['open']=='1'):?> checked<?php endif?>>
								정상서비스 
							</label>
							<label class="btn btn-default<?php if($R['open']=='2'):?> active<?php endif?>">
								<input id="option2" name="open2" type="radio" value="2"<?php if($R['open']=='2'):?> checked<?php endif?>>
								관리자오픈 
							</label>
							<label class="btn btn-default<?php if($R['open']=='3'):?> active<?php endif?>">
								<input id="option3" name="open2" type="radio" value="3"<?php if($R['open']=='3'):?> checked<?php endif?>>
								정지 
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">DTD형식</label>
					<div class="col-lg-9">
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" name="dtd1" id="optionsRadios1" value="html5"<?php if(!$R['uid']||$R['dtd']=='html5'):?> checked<?php endif?>> HTML 5
							</label>
							<label class="radio-inline">
							  <input type="radio" name="dtd1" id="optionsRadios2" value="xhtml_1"<?php if($R['dtd']=='xhtml_1'):?> checked<?php endif?>> XHTML 1.0
							</label>
						</div>   
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default<?php if(!$R['uid']||$R['dtd']=='html5'):?> active<?php endif?>">
								<input id="option1" name="dtd2" type="radio" value="html5"<?php if(!$R['uid']||$R['dtd']=='html5'):?> checked<?php endif?>>
								HTML 5
							</label>
							<label class="btn btn-default<?php if($R['dtd']=='xhtml_1'):?> active<?php endif?>">
								<input id="option2" name="dtd2" type="radio" value="xhtml_1"<?php if($R['dtd']=='xhtml_1'):?> checked<?php endif?>>
								XHTML 1.0
							</label>
						</div>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">이름표시</label>
					<div class="col-lg-9">
						<div class="visible-lg">
							<label class="radio-inline">
							   <input type="radio" id="optionsRadios1" name="nametype1" value="nic"<?php if(!$R['uid']||$R['nametype']=='nic'):?> checked<?php endif?>> 닉네임
							</label>
							<label class="radio-inline">
							  <input type="radio" id="optionsRadios2" name="nametype1" value="name"<?php if($R['nametype']=='name'):?> checked<?php endif?>> 이름(실명) 
							</label>
							<label class="radio-inline">
							  <input type="radio" id="optionsRadios3" name="nametype1" value="id"<?php if($R['nametype']=='id'):?> checked<?php endif?>> 아이디 
							</label>
						</div>   
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default<?php if(!$R['uid']||$R['nametype']=='nic'):?> active<?php endif?>">
								<input type="radio" id="option1" name="nametype2" value="nic"<?php if(!$R['uid']||$R['nametype']=='nic'):?> checked<?php endif?>>닉네임
							</label>
							<label class="btn btn-default<?php if($R['nametype']=='name'):?> active<?php endif?>">
								<input type="radio" id="option2" name="nametype2" value="name"<?php if($R['nametype']=='name'):?> checked<?php endif?>>이름(실명)
							</label>
							<label class="btn btn-default<?php if($R['nametype']=='id'):?> active<?php endif?>">
								<input type="radio" id="option3" name="nametype2" value="id"<?php if($R['nametype']=='id'):?> checked<?php endif?>>아이디
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">시간조정</label>
					<div class="col-lg-9">
						<select class="form-control" name="timecal">
						<?php for($i = -23; $i < 24; $i++):?>
						<option value="<?php echo $i?>"<?php if($i == $R['timecal']):?> selected="selected"<?php endif?>><?php if($i > 0):?>+<?php endif?><?php echo $i?$i.'시간':'조정안함'?></option>
						<?php endfor?>
						</select>
						<span class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-3 control-label">퍼포먼스</label>
					<div class="col-lg-9">
						<div class="visible-lg">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" name="rewrite1" value="1"<?php if($R['rewrite']):?> checked<?php endif?>> 짧은주소사용
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" name="buffer1" value="1"<?php if($R['buffer']):?> checked<?php endif?>> 버퍼전송사용
							</label>
						</div>   
						<div class="btn-group hidden-lg btn-group-justified" data-toggle="buttons">
							<label class="btn btn-default<?php if($R['rewrite']):?> active<?php endif?>">
								<input type="checkbox" name="rewrite2" value="1"<?php if($R['rewrite']):?> checked<?php endif?>>
								짧은주소사용 
							</label>
							<label class="btn btn-default<?php if($R['buffer']):?> active<?php endif?>">
								<input type="checkbox" name="buffer2" value="1"<?php if($R['buffer']):?> checked<?php endif?>>
								버퍼전송사용 
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group error">
					<label class="col-lg-3 control-label">연결도메인</label>
					<div class="col-lg-9">

						<?php if($R['uid']):?>
						<?php if($DOMAINN):?>
						<ul class="list-unstyled">
						<?php while($D=db_fetch_array($DOMAINS)):?>
						<li>
							<span class="glyphicon glyphicon-globe"></span>
							<a href="//<?php echo $D['name']?>" target="_blank"><?php echo $D['name']?></a></li>
						<?php endwhile?>
						</ul>
						<?php else:?>

						<p class="form-control-static">
							<span class="text-muted">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								연결된 도메인이 없습니다.</span></p>
						<a class="btn btn-default btn-block" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=domain&amp;selsite=<?php echo $R['uid']?>&amp;type=makedomain">도메인 연결하기</a>
						<?php endif?>
						<?php else:?>
						<p class="form-control-static">
							<span class="text-muted">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								사이트 생성 후 연결할 수 있습니다.</span></p>
						<?php endif?>

					</div>
				</div>
			</div>
		</div>

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h4>
					<label class="checkbox-inline">
						헤더/테일 코드
						<small>사이트 전역에 사용자 코드를 적용할 수 있습니다.</small>
					</label>
				</h4>
			</div>
			<div class="tabbable box-tabs">
				<ul class="nav nav-tabs tabs-left">
					<li class=""><a href="#box_tab2" data-toggle="tab">헤더코드</a></li>
					<li class=""><a href="#box_tab3" data-toggle="tab">테일코드</a></li>
					<li class="active"><a href="#box_tab1" data-toggle="tab">PHP코드</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="box_tab1">
						<div class="alert alert-info">
							이 사이트에 전용으로 사용될 PHP코드가 있을 경우 등록해 주세요.</div>
						<textarea name="sitephpcode" class="form-control" rows="7"><?php if($R['uid']&&is_file($g['path_var'].'sitephp/'.$R['uid'].'.php')) echo htmlspecialchars(implode('',file($g['path_var'].'sitephp/'.$R['uid'].'.php')))?></textarea>
					</div>
					<div class="tab-pane" id="box_tab2">
						<div class="alert alert-info">
							<code>&lt;head&gt;</code>
							와 
							<code>&lt;/head&gt;</code>
							사이에 삽입하고자 할 코드가 있을 경우 등록해 주세요..</div>
						<textarea name="headercode" class="form-control" rows="7"><?php echo htmlspecialchars($R['headercode'])?></textarea>
					</div>
					<div class="tab-pane" id="box_tab3">
						<div class="alert alert-info">
							<code>&lt;/body&gt;&lt;/html&gt;</code>
							바로앞에 삽입하고자 할 코드가 있을 경우 등록해 주세요.</div>
						<textarea name="footercode" class="form-control" rows="7"><?php echo htmlspecialchars($R['footercode'])?></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div>
		<button class="btn btn-primary btn-block btn-lg visible-lg" type="submit" onclick="this.form.type.value=1;"><?php if($R['uid']):?>사이트
			속성 변경<?php else:?>신규 사이트 만들기<?php endif?></button>
		<button class="btn btn-primary btn-block btn-lg hidden-lg" type="submit" onclick="this.form.type.value=2;"><?php if($R['uid']):?>사이트
			속성 변경<?php else:?>신규 사이트 만들기<?php endif?></button>
	</div>
	</form>
</div>
<!-- //사이트 상세정보  -->




<!-- Modal-사이트 수정 -->
<div class="modal fade" id="home-modal-site-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!-- // Modal-사이트 수정 -->







<?php include_once $g['path_module'].$module.'/lang.'.$_HS['lang'].'/action/a.inscheck.php'?>
<script type="text/javascript">
//<![CDATA[
function iconDrop(val)
{
	var f = document.procForm1;
	f.icon.value = val;
	<?php if ($type != 'makesite'):?>
	getId('_siteIcon_<?php echo $r?>_').className = val + ' text-primary';
	iconDropAply();
	<?php endif?>
}
function iconDropAply()
{
	var f = document.procForm1;
	<?php if($R['uid']):?>
	f.iconaction.value = '1';
	f.submit();
	<?php endif?>
}
function saveCheck(f)
{
	if (f.name.value == '')
	{
		alert('사이트명을 입력해 주세요.      ');
		f.name.focus();
		return false;
	}
	if (f.title.value == '')
	{
		alert('사이트제목을 입력해 주세요.      ');
		f.title.focus();
		return false;
	}
	if (f.id.value == '')
	{
		alert('사이트코드를 입력해 주세요.      ');
		f.id.focus();
		return false;
	}
	if (!chkFnameValue(f.id.value))
	{
		alert('사이트코드는 영문대소문자/숫자/_/- 만 사용할 수 있습니다.      ');
		f.id.focus();
		return false;
	}
	if (f.layout.value == '')
	{
		alert('대표 레이아웃을 지정해 주세요.      ');
		f.layout.focus();
		return false;
	}
	if (f.startpage.value == '')
	{
		alert('시작페이지를 지정해 주세요.      ');
		f.startpage.focus();
		return false;
	}

	return confirm('정말로 실행하시겠습니까?         ');
}



dragsort.makeListSortable(getId("siteorder1"));
dragsort.makeListSortable(getId("siteorder2"));
<?php if($type == 'makesite' || $nosite == 'Y'):?>
document.procForm.name.focus();
<?php endif?>
//]]>
</script>


