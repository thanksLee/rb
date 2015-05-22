<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
						<i class="fa fa-sitemap fa-2x"></i>
					</div>
					<h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">메뉴</a></h4>
				</div>
				<div class="panel-collapse collapse in" id="collapseOne">
					<div class="panel-body">
						여기는  트리영역 입니다.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
						<i class="fa fa-file-text-o fa-2x"></i>
					</div>
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
							페이지
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="collapseTwo">
	                <div class="list-group">

	                    <a class="list-group-item visible-xs" data-toggle="modal" href="#admin-seo-info">
							<i class="fa fa-check-circle fa-lg pull-right"></i> <!-- seo정보가 등록되었을 때 아이콘 출력 됨 -->
							메인화면
	                        <small>(main)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" href="#">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							메인화면
	                        <small>(main)</small>
	                    </a>
	                    <a class="list-group-item visible-xs" data-toggle="modal" href="#admin-seo-info">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							회사소개
	                        <small>(company)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" data-toggle="modal" href="#">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							회사소개
	                        <small>(company)</small>
	                    </a>
	                    <a class="list-group-item visible-xs" data-toggle="modal" href="#admin-seo-info">
							이용약관
	                        <small>(agreement)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" href="#">
							이용약관
	                        <small>(agreement)</small>
	                    </a>
	                </div>
	                <div class="panel-footer text-center">
	                    <ul class="pagination">
	                        <li><a href="#">&laquo;</a></li>
	                        <li><a href="#">1</a></li>
	                        <li><a href="#">2</a></li>
	                        <li><a href="#">3</a></li>
	                        <li><a href="#">&raquo;</a></li>
	                    </ul>
	                </div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
						<i class="kf-bbs fa-2x fa-fw"></i>
					</div>
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">
							게시판
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="collapseThree">
	                <div class="list-group">

	                    <a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
							<i class="fa fa-check-circle fa-lg pull-right"></i> <!-- seo정보가 등록되었을 때 아이콘 출력 됨 -->
							자유게시판
	                        <small>(main)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" href="#tab-content-view">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							자유게시판
	                        <small>(main)</small>
	                    </a>
	                    <a class="list-group-item visible-xs" data-toggle="modal" href="#page-modal">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							자료실
	                        <small>(company)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" data-toggle="modal" href="#page-modal">
							<i class="fa fa-check-circle fa-lg pull-right"></i>
							자료실
	                        <small>(company)</small>
	                    </a>
	                    <a class="list-group-item visible-xs" href="#tab-content-view">
							FAQ
	                        <small>(agreement)</small>
	                    </a>
	                    <a class="list-group-item hidden-xs" href="#tab-content-view">
							FAQ
	                        <small>(agreement)</small>
	                    </a>
	                </div>
	                <div class="panel-footer text-center">
	                    <ul class="pagination">
	                        <li><a href="#">&laquo;</a></li>
	                        <li><a href="#">1</a></li>
	                        <li><a href="#">2</a></li>
	                        <li><a href="#">3</a></li>
	                        <li><a href="#">&raquo;</a></li>
	                    </ul>
	                </div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-lg-9 hidden-xs hidden-sm" id="tab-content-view">
		<div class="page-header">
			<h4>
				<i class="kf-admin fa-lg fa-fw"></i>
				SEO 등록정보
				<span class="text-muted"></span>
			</h4>
		</div>

		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">SEO 고유주소</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" placeholder="이 문서를 잘 표현할 수 있는 단어로 입력해 주세요.">
					<span class="help-block">영문대소문자/숫자/_/- 조합으로 등록할 수 있으며 중복될 수 없습니다.</span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">타이틀(title)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">주제(subject)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">키워드(keywords)</label>
				<div class="col-lg-10">
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">설명(description)</label>
				<div class="col-lg-10">
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">분류(classification)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" placeholder="보기) 킴스큐">
					<span class="help-block">이 문서의 분류,카테고리라 할 수 있으며 핵심적인 키워드 1개를 기입합니다.</span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">연락처(reply-to)</label>
				<div class="col-lg-10">
					<input type="email" class="form-control" id="" placeholder="">
					<span class="help-block">문서에 관한 문의처 이메일 주소를 등록합니다.</span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">언어(content-language)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" placeholder="보기) kr">
					<span class="help-block">제작된 언어를 등록합니다. 한글 "kr", 영어 "en" , 일어 "ja" </span>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">제작일(build)</label>
				<div class="col-lg-10">
					<input type="date" class="form-control" id="" >
					<span class="help-block">제작 년월일을 등록합니다</span>
				</div>
			</div>
	        <div class="form-group">
	            <div class="col-md-offset-2 col-md-10">
	                <button class="btn btn-primary btn-lg" type="button"><i class="fa fa-check fa-lg"></i> 정보등록/수정</button>

					<hr>
					<div class="well hidden-xs">
					<ul>
					<li>검색 엔진 최적화(SEO; Search Engine Optimization)를 위해 메타정보를 등록해 주세요.</li>
					<li>SEO 에서 가장 중요한 요소는 키워드와 설명이므로 필히 등록해 주세요</li>
					<li>SEO 등록방법은 <a href="http://docs.kimsq.com/kr/" target="_blank">킴스큐 매뉴얼</a>을 참고하세요</li>
					</ul>
					</div>

	            </div>
	        </div>
		</form>	
	</div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="admin-seo-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><i class="kf-admin fa-lg fa-fw"></i> SEO 등록정보 <small>(페이지)</small></h4>
        </div>
        <div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">SEO 고유주소</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" placeholder="이 문서를 잘 표현할 수 있는 단어로 입력해 주세요.">
						<span class="help-block">영문대소문자/숫자/_/- 조합으로 등록할 수 있으며 중복될 수 없습니다.</span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">타이틀(title)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">주제(subject)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">키워드(keywords)</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">설명(description)</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">분류(classification)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" placeholder="보기) 킴스큐">
						<span class="help-block">이 문서의 분류,카테고리라 할 수 있으며 핵심적인 키워드 1개를 기입합니다.</span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">연락처(reply-to)</label>
					<div class="col-lg-10">
						<input type="email" class="form-control" id="" placeholder="">
						<span class="help-block">문서에 관한 문의처 이메일 주소를 등록합니다.</span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">언어(content-language)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" placeholder="보기) kr">
						<span class="help-block">제작된 언어를 등록합니다. 한글 "kr", 영어 "en" , 일어 "ja" </span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">제작일(build)</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" id="" >
						<span class="help-block">제작 년월일을 등록합니다</span>
					</div>
				</div>
			</form>	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check fa-lg"></i> 정보등록/수정</button>
          <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">닫기</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<br><br><br>
<!-- 여기까지 권기택 작업 입니다.  -->


<?php
$account = $account ? $account : $s;
if ($s != $account)
{
	$_TMPSITE=getUidData($table['s_site'],$account);
}
else {
	$_TMPSITE['id'] = $r;
}

$SITES = getDbArray($table['s_site'],'','*','gid','asc',0,$p);
include_once $g['path_core'].'function/menu.func.php';
$ISCAT = getDbRows($table['s_menu'],'site='.$account);

if($rel==1&&$cat)
{
	$CINFO = getUidData($table['s_menu'],$cat);
	$RINFO = getDbData($table['s_seo'],'rel=1 and parent='.$CINFO['uid'],'*');
	$ctarr = getMenuCodeToPath($table['s_menu'],$cat,0);
	$ctnum = count($ctarr);
	for ($i = 0; $i < $ctnum; $i++) $CXA[] = $ctarr[$i]['uid'];
}
if ($rel==2&&$spage)
{
	$CINFO = getUidData($table['s_page'],$spage);
	$RINFO = getDbData($table['s_seo'],'rel=2 and parent='.$CINFO['uid'],'*');
}
if ($rel==3&&$sbbs)
{
	$CINFO = getUidData($table['bbslist'],$sbbs);
	$RINFO = getDbData($table['s_seo'],'rel=3 and parent='.$CINFO['uid'],'*');
}
?>

<div id="catebody">

	<div id="category">
		<div class="title">
			
			<select onchange="goHref('<?php echo $g['adm_href']?>&amp;account='+this.value);">
			<?php while($S = db_fetch_array($SITES)):?>
			<option value="<?php echo $S['uid']?>"<?php if($account==$S['uid']):?> selected="selected"<?php endif?>>ㆍ<?php echo $S['name']?></option>
			<?php endwhile?>
			<?php if(!db_num_rows($SITES)):?>
			<option value="">등록된 사이트가 없습니다.</option>
			<?php endif?>
			</select>
			
			<a href="<?php echo $g['s']?>/?r=<?php echo $_TMPSITE['id']?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=xml" target="_blank" title="메뉴구조를 XML파일로 생성/받기" onclick="return confirm('정말로 이 사이트의 메뉴구조를 XML파일로 받으시겠습니까?\n받기와함께 _var/xml폴더에 [menu_사이트코드.xml]로 생성됩니다    ');"><img src="<?php echo $g['img_core']?>/file/small/xml.gif" alt="xml" /></a>
			<a href="<?php echo $g['s']?>/?r=<?php echo $_TMPSITE['id']?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=xls" target="_action_frame_<?php echo $m?>" title="메뉴구조를 엑셀파일로 받기" onclick="return confirm('정말로 이 사이트의 메뉴구조를 엑셀파일로 받으시겠습니까?');"><img src="<?php echo $g['img_core']?>/file/small/xls.gif" alt="xls" /></a>
			<a href="<?php echo $g['s']?>/?r=<?php echo $_TMPSITE['id']?>&amp;m=<?php echo $module?>&amp;a=dumpmenu&amp;type=txt" target="_action_frame_<?php echo $m?>" title="메뉴구조를 텍스트파일로 받기" onclick="return confirm('정말로 이 사이트의 메뉴구조를 텍스트파일로 받으시겠습니까?');"><img src="<?php echo $g['img_core']?>/file/small/txt.gif" alt="txt" /></a>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $module?>&amp;type=makesite"><img src="<?php echo $g['img_core']?>/_public/btn_add.gif" alt="사이트추가" title="사이트추가" /></a>

		</div>
		<?php if($ISCAT):?>
		<div class="joinimg"></div>
		<div class="tree<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 7')):?> ie7<?php endif?>">
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
		var ulink = "<?php echo $g['adm_href']?>&amp;account=<?php echo $account?>&amp;rel=1&amp;cat=";
		//]]>
		</script>
		<script type="text/javascript" src="<?php echo $g['s']?>/_core/js/tree.js"></script>
		<script type="text/javascript">
		//<![CDATA[
		var TREE_ITEMS = [['', null, <?php getMenuShow($account,$table['s_menu'],0,0,0,$cat,$CXA,0)?>]];
		new tree(TREE_ITEMS, tree_tpl);
		<?php echo $MenuOpen?>
		//]]>
		</script>
		</div>
		<?php else:?>
		<div class="none">등록된 메뉴가 없습니다.</div>
		<?php endif?>

		<br />
		<div class="title1">
		<?php $PAGES=getDbArray($table['s_page'],'','*','uid','asc',0,1)?>
		<select onchange="goHref('<?php echo $g['adm_href']?>&amp;account=<?php echo $account?>&amp;rel=2&amp;spage='+this.value);">
		<option value="">&nbsp;+ 페이지 SEO</option>
		<option value="">--------------------------------</option>
		<?php while($PG=db_fetch_array($PAGES)):?>
		<option value="<?php echo $PG['uid']?>"<?php if($PG['uid']==$spage):?> selected="selected"<?php endif?>>ㆍ<?php echo $PG['name']?> (<?php echo $PG['id']?>)</option>
		<?php endwhile?>
		</select>
		</div>
		<br />
		<div class="title1">
		<?php $PAGES=getDbArray($table['bbslist'],'','*','gid','asc',0,1)?>
		<select onchange="goHref('<?php echo $g['adm_href']?>&amp;account=<?php echo $account?>&amp;rel=3&amp;sbbs='+this.value);">
		<option value="">&nbsp;+ 게시판 SEO</option>
		<option value="">--------------------------------</option>
		<?php while($PG=db_fetch_array($PAGES)):?>
		<option value="<?php echo $PG['uid']?>"<?php if($PG['uid']==$sbbs):?> selected="selected"<?php endif?>>ㆍ<?php echo $PG['name']?> (<?php echo $PG['id']?>)</option>
		<?php endwhile?>
		</select>
		</div>

	</div>


	<div id="catinfo">


		<form name="procForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return saveCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="seo" />
		<input type="hidden" name="rel" value="<?php echo $rel?>" />
		<input type="hidden" name="cat" value="<?php echo $CINFO['uid']?>" />
		<input type="hidden" name="oid" value="<?php echo $CINFO['id']?>" />
		<input type="hidden" name="seo" value="<?php echo $RINFO['uid']?>" />

		<div class="title">
			<div class="xleft">
				SEO 등록정보
			</div>
			<div class="xright">

			</div>
		</div>

		<div class="notice">
			검색 엔진 최적화(SEO; Search Engine Optimization)를 위해 메타정보를 등록해 주세요.<br />
			SEO 에서 가장 중요한 요소는 키워드와 설명이므로 필히 등록해 주세요<br />
			SEO 등록방법은 킴스큐 매뉴얼을 참고하세요<br /><br />
		</div>

		<table>
			<?php if($rel!=3):?>
			<tr>
				<td class="td1 b">
					SEO 고유주소
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_menucode','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="id" value="<?php echo $CINFO['id']?>" class="input sname1" />
					<div id="guide_menucode" class="guide hide">
					이 문서를 잘 표현할 수 있는 단어로 입력해 주세요.<br />
					영문대소문자/숫자/_/- 조합으로 등록할 수 있습니다.<br />
					고유주소는 중복될 수 없습니다.<br />
					보기) KimsqRb-Like-SEO<br />
					결과) <?php echo $g['url_root']?>/c/KimsqRb-Like-SEO
					</div>
				</td>
			</tr>
			<?php endif?>
			<tr>
				<td class="td1 b">
					타이틀(title)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_title','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="title" value="<?php echo $RINFO['title']?>" class="input sname2" />
					<div id="guide_title" class="guide hide">
					문서의 타이틀을 등록합니다.
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1 b">
					주제(subject)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_subject','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="subject" value="<?php echo $RINFO['subject']?>" class="input sname2" />
					<div id="guide_subject" class="guide hide">
					문서의 주제를 등록합니다.
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1 b">
					키워드(keywords)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_keywords','block','none');" />
				</td>
				<td class="td2">
					<textarea name="keywords" rows="2" cols="45"><?php echo $RINFO['keywords']?></textarea>
					<div id="guide_keywords" class="guide hide">
						이 문서의 핵심 키워드를 콤마로 구분하여 지정합니다.<br />
						키워드의 갯수는 20개미만을 권장합니다.<br />
						키워드는 엔터없이 입력해 주세요.<br />
						보기)킴스큐,킴스큐Rb,CMS,웹프레임워크,큐마켓<br />
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1 b">
					설명(description)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_description','block','none');" />
				</td>
				<td class="td2">
					<textarea name="description" rows="2" cols="45"><?php echo $RINFO['description']?></textarea>
					<div id="guide_description" class="guide hide">
						검색 결과에 표시되는 문자를 지정합니다.<br />
						이 문서를 키워드 위주로 가급적 150자 이내로 설명해 주세요.<br />
						설명글은 엔터없이 입력해 주세요.<br />
						보기)웹 프레임워크의 혁신 - 킴스큐 Rb 에 대한 다운로드,팁 공유등을 제공합니다.<br />
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1 b">
					분류(classification)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_classification','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="classification" value="<?php echo $RINFO['classification']?>" class="input sname1" />
					<div id="guide_classification" class="guide hide">
						이 문서의 분류,카테고리라 할 수 있으며 핵심적인 키워드 1개를 기입합니다.<br />
						보기) 킴스큐
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1">
					연락처(reply-to)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_replyto','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="replyto" value="<?php echo $RINFO['replyto']?$RINFO['replyto']:$my['email']?>" class="input sname1" />
					<div id="guide_replyto" class="guide hide">
					문서에 관한 문의처 이메일 주소를 등록합니다.
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1">
					언어(content-language)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_language','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="language" value="<?php echo $RINFO['language']?$RINFO['language']:'kr'?>" size="10" class="input" />
					<div id="guide_language" class="guide hide">
					제작된 언어를 등록합니다.<br />
					- 한글 "kr"<br />
					- 영어 "en"<br />
					- 일어 "ja"<br />
					</div>
				</td>
			</tr>
			<tr>
				<td class="td1">
					제작일(build)
					<img src="<?php echo $g['img_core']?>/_public/ico_q.gif" alt="도움말" title="도움말" class="hand" onclick="layerShowHide('guide_build','block','none');" />
				</td>
				<td class="td2">
					<input type="text" name="build" value="<?php echo $RINFO['build']?$RINFO['build']:date('Y.m.d')?>" size="10" class="input" />
					<div id="guide_build" class="guide hide">
					제작 년월일을 등록합니다. 보기)2012.09.24
					</div>
				</td>
			</tr>
		</table>

		<div class="submitbox">
			<input type="submit" class="btnblue" value="정보등록/수정" />
		</div>

		</form>
		
	</div>
	<div class="clear"></div>
</div>

<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
<?php if($rel!=3):?>
	if (f.cat.value == '')
	{
		alert('메뉴/페이지/게시판을 선택하신 후 등록해 주세요.   ');
		return false;
	}
	if (f.id.value == '')
	{
		alert('SEO 고유주소를 입력해 주세요.      ');
		f.id.focus();
		return false;
	}
	if (!chkFnameValue(f.id.value))
	{
		alert('SEO 고유주소는 영문대소문자/숫자/_/- 만 사용할 수 있습니다.      ');
		f.id.focus();
		return false;
	}
<?php endif?>

	getIframeForAction(f);
	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>
