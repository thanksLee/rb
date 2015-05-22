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

[RESULT:
<form name="procForm2" class="form-horizontal" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="regissite" />
<input type="hidden" name="site_uid" value="<?php echo $R['uid']?>" />
<input type="hidden" name="icon" value="<?php echo $R['icon']?$R['icon']:'kf-home'?>" />
<input type="hidden" name="backgo" value="admin" />
<input type="hidden" name="iconaction" value="" />
<input type="hidden" name="type" value="2" />

<div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title">
		<span class="glyphicon glyphicon-globe"></span>&nbsp;사이트 정보 수정
	  </h4>
	</div>
	<div class="modal-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">사이트명</label>
						<div class="col-lg-9">
							<input class="form-control" placeholder="" type="text" name="name" value="<?php echo $R['name']?>">
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
									<input type="checkbox" name="titlefix" value="1"<?php if($R['titlefix']):?> checked<?php endif?>>
									고정 
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
									<input type="checkbox" name="usescode" value="1"<?php if($R['usescode']):?> checked<?php endif?>>
									사용 
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
							<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($R['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>><?php echo str_replace('.php','',$tpl1)?></option>
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
			</div>
			<div class="row">
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
									<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;front=page&amp;type=makepage"><button class="btn btn-default" type="button">
										<span class="glyphicon glyphicon-plus"></span>
									</button></a>
								</span>
							</div>
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
					<label class="checkbox-inline">
						<h4>헤더/테일 코드
							<small>사이트 전역에 사용자 코드를 적용할 수 있습니다.</small></h4>
					</label>
				</div>
				<div class="tabbable box-tabs">
					<ul class="nav nav-tabs tabs-left">
						<li class="text-center active" style="width:33.3%"><a href="#xbox_tab1" data-toggle="tab">헤더</a></li>
						<li class="text-center" style="width:33.3%"><a href="#xbox_tab2" data-toggle="tab">테일</a></li>
						<li class="text-center" style="width:33.3%"><a href="#xbox_tab3" data-toggle="tab">PHP</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="xbox_tab1">
							<div class="alert alert-info">
								<code>&lt;head&gt;</code>
								와 
								<code>&lt;/head&gt;</code>
								사이에 삽입하고자 할 코드가 있을 경우 등록해 주세요..</div>
							<textarea name="sitephpcode" class="form-control" rows="7"><?php if($R['uid']&&is_file($g['path_var'].'sitephp/'.$R['uid'].'.php')) echo htmlspecialchars(implode('',file($g['path_var'].'sitephp/'.$R['uid'].'.php')))?></textarea>
						</div>
						<div class="tab-pane" id="xbox_tab2">
							<div class="alert alert-info">
								<code>&lt;/body&gt;&lt;/html&gt;</code>
								바로앞에 삽입하고자 할 코드가 있을 경우 등록해 주세요.</div>
							<textarea name="headercode" class="form-control" rows="7"><?php echo htmlspecialchars($R['headercode'])?></textarea>
						</div>
						<div class="tab-pane" id="xbox_tab3">
							<div class="alert alert-info">
								이 사이트에 전용으로 사용될 PHP코드가 있을 경우 등록해 주세요.</div>
							<textarea name="footercode" class="form-control" rows="7"><?php echo htmlspecialchars($R['footercode'])?></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary btn-block btn-lg">사이트 속성 변경</button>
		<button type="button" class="btn btn-default btn-block btn-lg" data-dismiss="modal">닫기</button>
	</div>
</div>
</form>

:RESULT]
