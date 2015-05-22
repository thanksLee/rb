<?php
include $g['path_module'].$module.'/_func.php';
include $g['path_module'].$module.'/var/var.php';
$_siteAply = 'site='.$_HS['uid'].' and ';
$_ealbum1 = '미분류';
$_ealbum2 = '휴지통';

if (!$uid):

$csort	 = $csort ? $csort : 'gid';
$corderby= $corderby ? $corderby : 'asc';
$setnum = 13;
$p1 = $p1 ? $p1 : 1;

$_CWHERE = $_siteAply.'mbruid='.$my['uid'].' and type=2';
$_CT_RCD = getDbArray($table[$module.'category'],$_CWHERE,'*',$csort,$corderby,0,1);
$_CT_ALL = array();
$_CT_ARR = array();
$_i=0;
while($_CT = db_fetch_array($_CT_RCD))
{
	if($_CT['name']==$_ealbum1) { $_CT1=$_CT; $_cat1_=$_CT['uid']; continue;}
	if($_CT['name']==$_ealbum2) { $_CT2=$_CT; $_cat2_=$_CT['uid']; continue;}
	$_CT_ALL[] = $_CT;
	if ($setsearch && !strstr($_CT['name'],$setsearch)) continue;
	$_i++;
	if($_i > ($p1-1)*$setnum && $_i <= $p1*$setnum) $_CT_ARR[] = $_CT;
}
$_CT=array();

$_CT_NUM = $_i;
$_CT_TPG = getTotalPage($_CT_NUM,$setnum);

if (!$_cat1_&&!$_cat2_)
{
	getDbInsert($table[$module.'category'],'gid,site,mbruid,type,hidden,users,name,r_num,d_regis,d_update',"'0','".$_HS['uid']."','".$my['uid']."','2','0','','$_ealbum1','0','".$date['totime']."',''");
	getDbInsert($table[$module.'category'],'gid,site,mbruid,type,hidden,users,name,r_num,d_regis,d_update',"'1','".$_HS['uid']."','".$my['uid']."','2','0','','$_ealbum2','0','".$date['totime']."',''");
	getLink('reload','','','');
}
//$album = $album ? $album : $_cat1_;

$sort	= $sort ? $sort : 'gid';
$orderby= $orderby ? $orderby : 'asc';
$recnum	= $recnum && $recnum < 200 ? $recnum : 20;

$_WHERE = 'type=2';
if ($album) $_WHERE .= ' and category='.$album;
if ($where && $keyw)
{
	if (strstr('[mbruid]',$where)) $_WHERE .= " and ".$where."='".$keyw."'";
	else $_WHERE .= getSearchSql($where,$keyw,$ikeyword,'or');	
}
$RCD = getDbArray($table[$module.'data'],$_WHERE,'*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table[$module.'data'],$_WHERE);
$TPG = getTotalPage($NUM,$recnum);
?>

<!-- chosen -->
<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/css/chosen.css" />

<!-- uniform -->
<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/uniform/uniform.default.css" /> 

<div id="_HiddenModal_"></div>

<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="glyphicon glyphicon-facetime-video"></i>
				</div>
				<h4>비디오셋 <small class="open-sans">( Video Set )</small></h4>
			</div>
			<div class="panel-body">
				<form action="<?php echo $g['s']?>/" method="get">
				<input type="hidden" name="r" value="<?php echo $r?>" />
				<input type="hidden" name="m" value="<?php echo $m?>" />
				<input type="hidden" name="module" value="<?php echo $module?>" />
				<input type="hidden" name="front" value="<?php echo $front?>" />
				<input type="text" name="setsearch" value="<?php echo urldecode($setsearch)?>" class="form-control" placeholder="비디오셋 찾기">
				</form>
			</div>
			<div class="list-group">
				
				<a class="list-group-item hidden-xs<?php if($album==$_CT1['uid']):$_CT=$_CT1?> active<?php endif?>" href="#." onclick="formSubmit(document.listForm,'album','<?php echo $_CT1['uid']?>');">
					<span class="badge"><?php echo number_format($_CT1['r_num'])?></span>
					<?php if($_CT1['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_CT1['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-folder<?php if($album==$_CT1['uid']):?>-open<?php endif?>"></i>
					<?php echo $_CT1['name']?>
				</a>
				<a class="list-group-item visible-xs<?php if($album==$_CT1['uid']):?> active<?php endif?>" data-toggle="modal" href="<?php echo $g['adm_href']?>&amp;album=<?php echo $_CT1['uid']?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $p1?>#media-Modal-photoset">
					<span class="badge"><?php echo number_format($_CT1['r_num'])?></span>
					<?php if($_CT1['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_CT1['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-folder<?php if($album==$_CT1['uid']):?>-open<?php endif?>"></i>
					<?php echo $_CT1['name']?>
				</a>

				<?php foreach($_CT_ARR as $_C):?>
				<a class="list-group-item hidden-xs<?php if($album==$_C['uid']):$_CT=$_C?> active<?php endif?>" href="#." onclick="formSubmit(document.listForm,'album','<?php echo $_C['uid']?>');">
					<span class="badge"><?php echo number_format($_C['r_num'])?></span>
					<?php if($_C['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_C['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-folder<?php if($album==$_C['uid']):?>-open<?php endif?>"></i>
					<?php echo $_C['name']?> 
				</a>
				<a class="list-group-item visible-xs<?php if($album==$_C['uid']):?> active<?php endif?>" data-toggle="modal" href="<?php echo $g['adm_href']?>&amp;album=<?php echo $_C['uid']?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $p1?>#media-Modal-photoset">
					<span class="badge"><?php echo number_format($_C['r_num'])?></span> 
					<?php if($_C['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_C['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-folder<?php if($album==$_C['uid']):?>-open<?php endif?>"></i>
					<?php echo $_C['name']?> 
				</a>
				<?php endforeach?>

	
				<a class="list-group-item hidden-xs<?php if($album==$_CT2['uid']):$_CT=$_CT2?> active<?php endif?>" href="#." onclick="formSubmit(document.listForm,'album','<?php echo $_CT2['uid']?>');">
					<span class="badge"><?php echo number_format($_CT2['r_num'])?></span>
					<?php if($_CT2['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_CT2['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-trash-o fa-lg"></i>
					<?php echo $_CT2['name']?>
				</a>
				<a class="list-group-item visible-xs<?php if($album==$_CT2['uid']):?> active<?php endif?>" data-toggle="modal" href="<?php echo $g['adm_href']?>&amp;album=<?php echo $_CT2['uid']?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $p1?>#media-Modal-photoset">
					<span class="badge"><?php echo number_format($_CT2['r_num'])?></span>
					<?php if($_CT2['hidden']==1):?><span class="badge"><i class="fa fa-user"></i></span><?php endif?>
					<?php if($_CT2['hidden']==2):?><span class="badge"><i class="fa fa-lock"></i></span><?php endif?>
					<i class="fa fa-trash-o fa-lg"></i>
					<?php echo $_CT2['name']?>
				</a>

			</div>
			<div class="panel-footer">
				<form action="<?php echo $g['s']?>/" method="post" onsubmit="return AddAlbumRcheck(this);">
				<input type="hidden" name="r" value="<?php echo $r?>" />
				<input type="hidden" name="m" value="<?php echo $module?>" />
				<input type="hidden" name="a" value="category_add" />
				<input type="hidden" name="p1" value="<?php echo $p1?>" />
				<input type="hidden" name="setsearch" value="<?php echo $setsearch?>" />
				<input type="hidden" name="type" value="vod" />
				<input type="hidden" name="_siteAply" value="<?php echo $_siteAply?>" />
				<div class="input-group">
					<input type="text" name="name" class="form-control" placeholder="추가할 비디오셋명 입력">
					<span class="input-group-btn">
					<input type="submit" class="btn btn-default" value="추가">
					</span>
				</div>
				</form>
			</div>
			<div class="panel-footer text-center">
				<ul class="pagination">
					<li><a href="<?php echo $g['adm_href']?>&amp;album=<?php echo $album?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $p1-1>1?$p1-1:1?>">&laquo;</a></li>
					<?php for($i=1;$i<=$_CT_TPG;$i++):?>
					<li<?php if($p1==$i):?> class="active"<?php endif?>><a href="<?php echo $g['adm_href']?>&amp;album=<?php echo $album?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $i?>"><?php echo $i?></a></li>
					<?php endfor?>
					<li><a href="<?php echo $g['adm_href']?>&amp;album=<?php echo $album?>&amp;setsearch=<?php echo urlencode($setsearch)?>&amp;p1=<?php echo $p1+1<$setpag?$p1+1:$setpag?>">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-lg-9 hidden-xs" id="tab-content-view">

		<div class="page-header clearfix">
			<h4 class="pull-left"><i class="fa fa-folder-open fa-lg"></i>
			<?php echo $_CT['uid']?$_CT['name']:'전체비디오'?> <span class="text-muted">(<?php echo number_format($NUM)?>)</span> </h4>

			<div class="btn-group pull-right">
			  <button type="button" class="btn btn-primary btn-lg" onclick="getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.vod&album=<?php echo $album?>&type=urlsave');"><i class="icon-youtube icon-large"></i>  비디오 추가</button>
			  <button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#." onclick="getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.vod&album=<?php echo $album?>&type=upload');"><i class="icon-cloud-upload icon-large"></i> 직접 업로드</a></li>
				<li><a href="#." onclick="getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.vod&album=<?php echo $album?>&type=urlsave&youtube=Y');"><i class="icon-youtube icon-large"></i> 유튜브 비디오 추가</a></li>
				<?php if($_CT['uid']):?>
				<li class="divider"></li>
				<?php if($_CT['uid']==$_cat2_):?>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=category_delete&amp;type=vod&amp;album=<?php echo $album?>&amp;nocat=<?php echo $_cat1_?>&amp;trash=<?php echo $_cat2_?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');"><i class="fa fa-remove fa-lg pull-right"></i> 휴지통 <small class="text-muuted"></small> 비우기</a></li>
				<?php else:?>
				<li role="presentation" class="dropdown-header"><?php echo $_CT['name']?> 셋트</li>
				<li><a href="#"><i class="fa fa-pencil fa-lg pull-right"></i> 정보<small class="text-muuted"></small> 수정</a></li>
				<?php endif?>
				<?php endif?>
				<?php if($_CT['uid']&&$_CT['uid']!=$_cat1_&&$_CT['uid']!=$_cat2_):?>
				<li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $module?>&amp;a=category_delete&amp;type=vod&amp;album=<?php echo $album?>&amp;nocat=<?php echo $_cat1_?>&amp;trash=<?php echo $_cat2_?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');"><i class="fa fa-remove fa-lg pull-right"></i> 셋트 <small class="text-muuted"></small> 삭제</a></li>
				<?php endif?>
			  </ul>
			</div>

		</div>
		<div class="btn-toolbar well well-sm<?php if(!$NUM):?> hide<?php endif?>">

			<div class="btn-group">
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="전체선택" onclick="elementsCheck('vod_members[]',true);">
					<input type="radio"><i class="fa fa-check-square-o fa-lg"></i>
				  </label>
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="선택해제" onclick="elementsCheck('vod_members[]',false);">
					<input type="radio"><i class="fa fa-minus-square-o fa-lg"></i>
				  </label>
				</div>
			</div>
			<div class="btn-group">
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="새로고침" onclick="formSubmit(document.listForm,'sort','<?php echo $sort?>');"><i class="fa fa-refresh fa-lg"></i></button>
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="영구삭제" onclick="elementsDelete('vod_members[]',0);"><i class="fa fa-times fa-lg"></i></button>
			  <div class="btn-group" data-toggle="tooltip" data-placement="top" title="" data-original-title="이동">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				 <i class="fa fa-folder fa-lg"></i>
				  <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
				  <?php $_i=0;foreach($_CT_ALL as $_C):if($_i>=15)continue?>
				  <li><a href="#." onclick="elementsMove('vod_members[]','<?php echo $_C['uid']?>');"><i class="fa fa-folder"></i> <?php echo $_C['name']?></a></li>
				  <?php $_i++;endforeach?>
				  <li class="divider"></li>
				  <li><a href="#." onclick="elementsMove('vod_members[]','<?php echo $_cat2_?>');"><i class="fa fa-trash-o fa-lg"></i> 휴지통</a></li>
				</ul>
			  </div>
			</div>

			<div class="btn-group">
				<label data-toggle="tooltip" data-placement="top" title="" data-original-title="필터바 열기/닫기" onclick="formSubmit(document.listForm,'filterbar','<?php echo $filterbar?'':1?>');">
					<button type="button" class="btn btn-default<?php echo $filterbar?' active':''?>" data-toggle="button"><i class="fa fa-filter fa-lg"></i></button>
				</label>
				<label data-toggle="tooltip" data-placement="top" title="" data-original-title="검색바 열기/닫기" onclick="formSubmit(document.listForm,'searchbar','<?php echo $searchbar?'':1?>');">
					<button type="button" class="btn btn-default<?php echo $searchbar?' active':''?>" data-toggle="button"><i class="fa fa-search fa-lg"></i></button>
				</label>
			 </div>

			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default"<?php if($p-1<1):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="이전" onclick="formSubmit(document.listForm,'p','<?php echo $p-1?>');">
				  <i class="fa fa-chevron-left fa-lg"></i>
				</button>
				<button type="button" class="btn btn-default"<?php if($p+1>$TPG):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="다음" onclick="formSubmit(document.listForm,'p','<?php echo $p+1?>');">
				  <i class="fa fa-chevron-right fa-lg"></i>
				</button>
			</div>
			<div class="btn-group pull-right">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo number_format($NUM)?>개 (<?php echo $p?>/<?php echo $TPG?>페이지)
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li<?php if($p==1):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','1');">첫 페이지</a></li>
				<?php for($i=2;$i<$TPG;$i++):?>
				<li<?php if($p==$i):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','<?php echo $i?>');"><?php echo $i?> 페이지</a></li>
				<?php endfor?>
				<?php if($TPG>1):?>
				<li<?php if($p==$TPG):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','<?php echo $TPG?>');">마지막 페이지</a></li>
				<?php else:?>
				<li class="disabled"><a>마지막 페이지</a></li>
				<?php endif?>
			  </ul>
			</div> 
		</div>
		
		
		<form name="listForm" class="form-inline" role="form" action="<?php echo $g['s']?>/" method="get">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $m?>" />
		<input type="hidden" name="module" value="<?php echo $module?>" />
		<input type="hidden" name="front" value="<?php echo $front?>" />
		<input type="hidden" name="album" value="<?php echo $album?>" />
		<input type="hidden" name="p1" value="<?php echo $p1?>" />
		<input type="hidden" name="setsearch" value="<?php echo $setsearch?>" />
		<input type="hidden" name="sort" value="<?php echo $sort?>" />
		<input type="hidden" name="orderby" value="<?php echo $orderby?>" />
		<input type="hidden" name="filterbar" value="<?php echo $filterbar?>" />
		<input type="hidden" name="searchbar" value="<?php echo $searchbar?>" />
		<input type="hidden" name="p" value="" />


		<!-- 툴바 내  정열 버튼을 클릭했을 때 출력됨 -->
		<div class="btn-toolbar well well-sm<?php if(!$filterbar):?> hide<?php endif?>">
			<div class="btn-group" data-toggle="buttons">
			  <label class="btn btn-default<?php if($sort=='gid'):?> active<?php endif?>" onclick="formSubmit(document.listForm,'sort','gid');">
				<input type="radio" id="option1"<?php if($sort=='gid'):?> checked<?php endif?>><i class="fa fa-calendar"></i> 등록일순
			  </label>
			  <label class="btn btn-default<?php if($sort=='size'):?> active<?php endif?>" onclick="formSubmit(document.listForm,'sort','size');">
				<input type="radio" id="option2"<?php if($sort=='size'):?> checked<?php endif?>><i class="fa fa-certificate"></i> 용량순
			  </label>
			  <label class="btn btn-default<?php if($sort=='name'):?> active<?php endif?>" onclick="formSubmit(document.listForm,'sort','name');">
				<input type="radio" id="option3"<?php if($sort=='name'):?> checked<?php endif?>><i class="fa fa-font"></i> 이름순
			  </label>
			</div>

			<div class="btn-group" data-toggle="buttons">
			  <label class="btn btn-default<?php if($orderby=='asc'):?> active<?php endif?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="정순" onclick="formSubmit(document.listForm,'orderby','asc');">
				<input type="radio" id="option1"<?php if($orderby=='asc'):?> checked<?php endif?>> <i class="fa fa-sort-amount-asc fa-lg"></i>
			  </label>
			  <label class="btn btn-default<?php if($orderby=='desc'):?> active<?php endif?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="역순" onclick="formSubmit(document.listForm,'orderby','desc');">
				<input type="radio" id="option2"<?php if($orderby=='desc'):?> checked<?php endif?>> <i class="fa fa-sort-amount-desc fa-lg"></i>
			  </label>
			</div>

			<div class="btn-group">
			<label class="sr-only" for="">공개옵션</label>
			<select name="hidden" class="form-control" onchange="this.form.submit();">
			<option value="0"<?php if($hidden=='0'):?> selected<?php endif?>>전체공개</option>
			<option value="1"<?php if($hidden=='1'):?> selected<?php endif?>>지명공개</option>
			<option value="2"<?php if($hidden=='2'):?> selected<?php endif?>>비공개</option>
			</select>
			</div>

			<div class="btn-group">
			<label class="sr-only" for="">출력갯수</label>
			<select name="recnum" class="form-control" onchange="this.form.submit();">
			<option value="20"<?php if($recnum=='20'):?> selected<?php endif?>>20개</option>
			<option value="30"<?php if($recnum=='30'):?> selected<?php endif?>>30개</option>
			<option value="40"<?php if($recnum=='40'):?> selected<?php endif?>>40개</option>
			<option value="50"<?php if($recnum=='50'):?> selected<?php endif?>>50개</option>
			<option value="60"<?php if($recnum=='60'):?> selected<?php endif?>>60개</option>
			</select>
			</div>
		</div>

		<!-- 툴바 내 검색 버튼을 클릭했을 때 출력됨 -->
		<div class="well well-sm<?php if(!$searchbar):?> hide<?php endif?>">
			<div class="form-group">
				<label class="sr-only" for="">검색조건</label>
				<label class="radio-inline">
				  <input type="radio" name="where" id="inlineCheckbox1" value="name"<?php if($where==''||$where=='name'):?> checked<?php endif?>> File Name
				</label>
				<label class="radio-inline">
				  <input type="radio" name="where" id="inlineCheckbox2" value="cation"<?php if($where=='cation'):?> checked<?php endif?>> Caption
				</label>
				<label class="radio-inline">
				  <input type="radio" name="where" id="inlineCheckbox2" value="alt"<?php if($where=='alt'):?> checked<?php endif?>> ALT 
				</label>
				<label class="radio-inline">
				  <input type="radio" name="where" id="inlineCheckbox2" value="description"<?php if($where=='description'):?> checked<?php endif?>> Description
				</label>
			</div>
			<div class="form-group" style="margin-left:15px">
			<label class="sr-only" for="">검색어 입력</label>
			<input name="keyw" value="<?php echo $keyw?>" type="text" class="form-control" id="" size="25" placeholder="검색어를 입력해 주세요">
			</div>
			<button type="submit" class="btn btn-default">검색</button>
			<button type="button" class="btn btn-default" onclick="formSubmit(document.listForm,'keyw','');">리셋</button>
		</div>
		
		</form>

		<div id="set">
			<?php if($NUM):?>
			<div class="row">
				<?php $_TMP_RCD=array()?>
				<?php $_i=0;while($_R=db_fetch_array($RCD)):$_TMP_RCD[]=$_R?>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="thumbnail">
						<div class="inwrap" >
							<iframe allowfullscreen="" class="video-iframe" id="video-<?php echo $_i?>" src="javascript:'';"></iframe>
							<img alt="" class="bgimg img-responsive" src="<?php echo getVodThumb($_R['link'],0)?>">
						</div>
						<label class="checkbox">
							<input type="checkbox" name="vod_members[]" value="<?php echo $_R['uid']?>">
						</label>
						<div class="caption">
							<div class="btn-group btn-group-justified">
								<a class="btn btn-default" data-original-title="재생" data-placement="bottom" data-toggle="tooltip" title=""  onclick="playVideo('video-<?php echo $_i?>','<?php echo getVodCode($_R['link'])?>')">
								<i class="fa fa-play fa-lg"></i>
								</a>
								<a class="btn btn-default" data-original-title="수정" data-placement="bottom" data-toggle="tooltip" title="" href="<?php echo $g['adm_href']?>&amp;album=<?php echo $album?>&amp;uid=<?php echo $_R['uid']?>">
								<i class="fa fa-pencil-square-o fa-lg"></i>
								</a>
								<a class="btn btn-default<?php if($album==$_cat2_):?> disabled<?php endif?>" data-original-title="휴지통" data-placement="bottom" data-toggle="tooltip" title="" onclick="elementsTrash('vod_members[]','<?php echo $_cat2_?>','<?php echo $_i?>');">
								<i class="fa fa-trash-o fa-lg"></i>
								</a>
								<a class="btn btn-default<?php if(!$_R['alt']&&!$_R['caption']&&!$_R['description']):?> disabled<?php endif?>" data-original-title="<?php echo $_R['alt']?>" data-placement="bottom" data-toggle="popover" title=""  data-content="<?php echo $_R['caption']?> <?php echo $_R['description']?>"  data-container="body" >
								<i class="fa fa-exclamation-circle fa-lg"></i>
								</a>
								<a href="<?php echo $g['url_root']?>/?r=<?php echo $r?>&m=<?php echo $module?>&vod=<?php echo $_R['uid']?>" target="_blank" class="btn btn-default" data-original-title="페이지" data-placement="top" data-toggle="tooltip" title="">
								<i class="fa fa-external-link fa-lg"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php $_i++;endwhile?>
			</div>
			<?php else:?>
			<div class="well text-center text-muted">
				<span class="glyphicon glyphicon-warning-sign"></span> 등록된 자료가 없습니다.
			</div>
			<?php endif?>
		</div>


		<div class="btn-toolbar well well-sm<?php if(!$NUM):?> hide<?php endif?>">
			<div class="btn-group">
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="전체선택" onclick="elementsCheck('vod_members[]',true);">
					<input type="radio"><i class="fa fa-check-square-o fa-lg"></i>
				  </label>
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="선택해제" onclick="elementsCheck('vod_members[]',false);">
					<input type="radio"><i class="fa fa-minus-square-o fa-lg"></i>
				  </label>
				</div>
			</div>
			<div class="btn-group">
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="새로고침" onclick="formSubmit(document.listForm,'sort','<?php echo $sort?>');"><i class="fa fa-refresh fa-lg"></i></button>
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="영구삭제" onclick="elementsDelete('vod_members[]',0);"><i class="fa fa-times fa-lg"></i></button>
			  <div class="btn-group dropup" data-toggle="tooltip" data-placement="top" title="" data-original-title="이동">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				 <i class="fa fa-folder fa-lg"></i>
				  <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
				  <?php $_i=0;foreach($_CT_ALL as $_C):if($_i>=15)continue?>
				  <li><a href="#." onclick="elementsMove('vod_members[]','<?php echo $_C['uid']?>');"><i class="fa fa-folder"></i> <?php echo $_C['name']?></a></li>
				  <?php $_i++;endforeach?>
				  <li class="divider"></li>
				  <li><a href="#." onclick="elementsMove('vod_members[]','<?php echo $_cat2_?>');"><i class="fa fa-trash-o fa-lg"></i> 휴지통</a></li>
				</ul>
			  </div>
			</div>

			<div class="btn-group">
				<label data-toggle="tooltip" data-placement="top" title="" data-original-title="필터바 열기/닫기" onclick="formSubmit(document.listForm,'filterbar','<?php echo $filterbar?'':1?>');">
					<button type="button" class="btn btn-default<?php echo $filterbar?' active':''?>" data-toggle="button"><i class="fa fa-filter fa-lg"></i></button>
				</label>
				<label data-toggle="tooltip" data-placement="top" title="" data-original-title="검색바 열기/닫기" onclick="formSubmit(document.listForm,'searchbar','<?php echo $searchbar?'':1?>');">
					<button type="button" class="btn btn-default<?php echo $searchbar?' active':''?>" data-toggle="button"><i class="fa fa-search fa-lg"></i></button>
				</label>
			 </div>

			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default"<?php if($p-1<1):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="이전" onclick="formSubmit(document.listForm,'p','<?php echo $p-1?>');">
				  <i class="fa fa-chevron-left fa-lg"></i>
				</button>
				<button type="button" class="btn btn-default"<?php if($p+1>$TPG):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="다음" onclick="formSubmit(document.listForm,'p','<?php echo $p+1?>');">
				  <i class="fa fa-chevron-right fa-lg"></i>
				</button>
			</div>
			<div class="btn-group pull-right">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo number_format($NUM)?>개 (<?php echo $p?>/<?php echo $TPG?>페이지)
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li<?php if($p==1):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','1');">첫 페이지</a></li>
				<?php for($i=2;$i<$TPG;$i++):?>
				<li<?php if($p==$i):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','<?php echo $i?>');"><?php echo $i?> 페이지</a></li>
				<?php endfor?>
				<?php if($TPG>1):?>
				<li<?php if($p==$TPG):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.listForm,'p','<?php echo $TPG?>');">마지막 페이지</a></li>
				<?php else:?>
				<li class="disabled"><a>마지막 페이지</a></li>
				<?php endif?>
			  </ul>
			</div> 

		</div>

	</div>
</div>
</div>










































<!-- Modal -->
<div class="modal fade" id="media-Modal-photoset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form name="modalForm" class="form-inline" role="form" action="<?php echo $g['s']?>/" method="get">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $m?>" />
<input type="hidden" name="module" value="<?php echo $module?>" />
<input type="hidden" name="front" value="<?php echo $front?>" />
<input type="hidden" name="album" value="<?php echo $album?>" />
<input type="hidden" name="p1" value="<?php echo $p1?>" />
<input type="hidden" name="setsearch" value="<?php echo $setsearch?>" />
<input type="hidden" name="sort" value="<?php echo $sort?>" />
<input type="hidden" name="orderby" value="<?php echo $orderby?>" />
<input type="hidden" name="filterbar" value="<?php echo $filterbar?>" />
<input type="hidden" name="searchbar" value="<?php echo $searchbar?>" />
<input type="hidden" name="p" value="" />

<div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title">
		<i class="fa fa-folder-open fa-lg"></i>
		<?php echo $_CT['uid']?$_CT['name']:'전체비디오'?> <span class="text-muted">(<?php echo number_format($NUM)?>)</span></h4>
	</div>
	<div class="modal-body">

		<div class="btn-toolbar well well-sm<?php if(!$NUM):?> hide<?php endif?>">

			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo number_format($NUM)?>개 (<?php echo $p?>/<?php echo $TPG?>페이지)
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li<?php if($p==1):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.modalForm,'p','1');">첫 페이지</a></li>
				<?php for($i=2;$i<$TPG;$i++):?>
				<li<?php if($p==$i):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.modalForm,'p','<?php echo $i?>');"><?php echo $i?> 페이지</a></li>
				<?php endfor?>
				<?php if($TPG>1):?>
				<li<?php if($p==$TPG):?> class="active"<?php endif?>><a href="#." onclick="formSubmit(document.modalForm,'p','<?php echo $TPG?>');">마지막 페이지</a></li>
				<?php else:?>
				<li class="disabled"><a>마지막 페이지</a></li>
				<?php endif?>
			  </ul>
			</div> 


			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default"<?php if($p-1<1):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="이전" onclick="formSubmit(document.modalForm,'p','<?php echo $p-1?>');">
				  <i class="fa fa-chevron-left fa-lg"></i>
				</button>
				<button type="button" class="btn btn-default"<?php if($p+1>$TPG):?> disabled="disabled"<?php endif?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="다음" onclick="formSubmit(document.modalForm,'p','<?php echo $p+1?>');">
				  <i class="fa fa-chevron-right fa-lg"></i>
				</button>
			</div>
		</div>


		<div id="set">
			<?php if($NUM):?>
			<div class="row">
				<?php $_i=0;foreach($_TMP_RCD as $_R):?>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="thumbnail active">
						<div class="inwrap" >
							<iframe allowfullscreen="" class="video-iframe" id="_video-<?php $_i?>" src="javascript:'';"></iframe>
							<img alt="" class="bgimg img-responsive" src="<?php echo getVodThumb($_R['link'],0)?>">
						</div>
						<label class="checkbox">
							<input type="checkbox" name="_vod_members[]" value="<?php echo $_R['uid']?>">
						</label>
						<div class="caption">
							<div class="btn-group btn-group-justified">
								<a class="btn btn-default" title="" onclick="playVideo('_video-<?php echo $_i?>','<?php echo getVodCode($_R['link'])?>')">
								<i class="fa fa-play fa-lg"></i>
								</a>
								<a class="btn btn-default" title="" href="<?php echo $g['adm_href']?>&amp;album=<?php echo $album?>&amp;uid=<?php echo $_R['uid']?>">
								<i class="fa fa-pencil-square-o fa-lg"></i>
								</a>
								<a class="btn btn-default<?php if($album==$_cat2_):?> disabled<?php endif?>" title="" onclick="elementsTrash('_vod_members[]','<?php echo $_cat2_?>','<?php echo $_i?>');">
								<i class="fa fa-trash-o fa-lg"></i>
								</a>
								<a class="btn btn-default<?php if(!$_R['alt']&&!$_R['caption']&&!$_R['description']):?> disabled<?php endif?>" data-original-title="<?php echo $_R['alt']?>" data-placement="bottom" data-toggle="popover" title=""  data-content="<?php echo $_R['caption']?> <?php echo $_R['description']?>"  data-container="body">
								<i class="fa fa-exclamation-circle fa-lg"></i>
								</a>
								<a href="<?php echo $g['url_root']?>/?r=<?php echo $r?>&m=<?php echo $module?>&vod=<?php echo $_R['uid']?>" target="_blank" class="btn btn-default" title="">
								<i class="fa fa-external-link fa-lg"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php $_i++;endforeach?>

			</div>
			<?php else:?>
			<div class="well text-center text-muted">
				<span class="glyphicon glyphicon-warning-sign"></span> 등록된 자료가 없습니다.
			</div>
			<?php endif?>
		</div>


		<div class="btn-toolbar well well-sm<?php if(!$NUM):?> hide<?php endif?>">
			<div class="btn-group">
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="전체선택" onclick="elementsCheck('_vod_members[]',true);">
					<input type="radio"><i class="fa fa-check-square-o fa-lg"></i>
				  </label>
				  <label class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="선택해제" onclick="elementsCheck('_vod_members[]',false);">
					<input type="radio"><i class="fa fa-minus-square-o fa-lg"></i>
				  </label>
				</div>
			</div>
			<div class="btn-group">
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="새로고침" onclick="formSubmit(document.modalForm,'sort','<?php echo $sort?>');"><i class="fa fa-refresh fa-lg"></i></button>
			  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="영구삭제" onclick="elementsDelete('_vod_members[]',0);"><i class="fa fa-times fa-lg"></i></button>
			  <div class="btn-group dropup" data-toggle="tooltip" data-placement="top" title="" data-original-title="이동">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				 <i class="fa fa-folder fa-lg"></i>
				  <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
				  <?php $_i=0;foreach($_CT_ALL as $_C):if($_i>=15)continue?>
				  <li><a href="#." onclick="elementsMove('_vod_members[]','<?php echo $_C['uid']?>');"><i class="fa fa-folder"></i> <?php echo $_C['name']?></a></li>
				  <?php $_i++;endforeach?>
				  <li class="divider"></li>
				  <li><a href="#." onclick="elementsMove('_vod_members[]','<?php echo $_cat2_?>');"><i class="fa fa-trash-o fa-lg"></i> 휴지통</a></li>
				</ul>
			  </div>
		</div>


	</div>
	<div class="modal-footer">
	  <!--<button type="button" class="btn btn-primary btn-lg btn-block">정보변경</button>-->
	  <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">닫기</button>
	</div>
</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->





<form name="actionForm" action="<?php echo $g['s']?>/" method="post">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="" />
<input type="hidden" name="type" value="vod" />
<input type="hidden" name="_siteAply" value="<?php echo $_siteAply?>" />
<input type="hidden" name="_data_" value="" />
<input type="hidden" name="_album_" value="" />
</form>


<!-- fitvids -->
<script src="<?php echo $g['url_module_skin']?>/assets/js/jquery.fitvids.js"></script>


<script type="text/javascript">
function getModal(layer,url)
{
	var result = getHttprequest(url);
	getId(layer).innerHTML=getAjaxFilterString(result,'RESULT');
}
function formSubmit(f,fd,val)
{
	eval('f.'+fd).value = val;
	f.submit();
}
function elementsCheck(members,flag)
{
    var l = document.getElementsByName(members);
    var n = l.length;
    var i;
    for (i = 0; i < n; i++)
	{
		l[i].checked = flag;
	}
	$("[type='checkbox']").not('.toggle, .select2, .multiselect').uniform();
}
function elementsDelete(members,flag)
{
	var f = document.actionForm;
    var l = document.getElementsByName(members);
    var n = l.length;
    var i;
	var s = '';
    for (i = 0; i < n; i++)
	{
		if(flag != 0)
		{
			if (l[i].value == flag)
			{
				l[i].checked = true;
				s = '['+l[i].value+']';
			}
			else {
				l[i].checked = false;
			}
		}
		else {
			if (l[i].checked == true)
			{
				s += '['+l[i].value+']';
			}
		}
	}
	if (s == '')
	{
		alert('선택된 비디오가 없습니다.');
		return false;
	}
	if (confirm('정말로 영구히 삭제하시겠습니까?    '))
	{
		getIframeForAction(f);
		f.a.value = 'multi_delete';
		f._data_.value = s;
		f.submit();
	}
	return false;
}
function elementsMove(members,flag)
{
	var f = document.actionForm;
    var l = document.getElementsByName(members);
    var n = l.length;
    var i;
	var s = '';
    for (i = 0; i < n; i++)
	{
		if (l[i].checked == true)
		{
			s += '['+l[i].value+']';
		}
	}
	if (s == '')
	{
		alert('선택된 비디오가 없습니다.');
		return false;
	}

	getIframeForAction(f);
	f.a.value = 'multi_move';
	f._data_.value = s;
	f._album_.value = flag;
	f.submit();
}
function elementsTrash(members,flag,_i)
{
    var l = document.getElementsByName(members);
    var n = l.length;
    var i;
    for (i = 0; i < n; i++)
	{
		if (i == _i) l[i].checked = true;
		else l[i].checked = false;
	}

	elementsMove(members,flag);
}
function AddAlbumRcheck(f)
{
	getIframeForAction(f);
	if (f.name.value == '')
	{
		alert('세트명을 입력해 주세요.   ');
		f.name.focus();
		return false;
	}
	return true;
}

// uniform
$(document).ready(function() {
	//init this last don`t change
	//------------- Uniform  -------------//
	//add class .nostyle if not want uniform to style field
	//$("input, textarea, select").not('.nostyle').uniform();
	//$("[type='checkbox'], [type='radio'], [type='file'], select").not('.toggle, .select2, .multiselect').uniform();
	$("[type='checkbox'], [type='radio']").not('.toggle, .select2, .multiselect').uniform();
});

// popover
!function ($) {

  $(function(){
	// popover demo
	$("[data-toggle=popover]")
	  .popover()
})

}(window.jQuery)


// tooltip
!function ($) {

  $(function(){
	// tooltip demo
	$('#tab-content-view').tooltip({
	  selector: "[data-toggle=tooltip]",
	  container: "body"
	})
})
}(window.jQuery)

// playVideo
function playVideo(a, c) {
	document.getElementById(a).style.display = "block";
	var b = "http://www.youtube.com/embed/" + c + "/?autoplay=1&autohide=1&rel=0&wmode=transparent";
	document.getElementById(a).src = b
};

// fitVids
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$(".container").fitVids();
});
</script>


<?php 
else:
$_R=getUidData($table[$module.'data'],$uid);
$_M=getDbData($table['s_mbrdata'],'memberuid='.$_R['mbruid'],'*');
$_CWHERE = $_siteAply.'mbruid='.$my['uid'].' and type=2';
$_CT_RCD = getDbArray($table[$module.'category'],$_CWHERE,'*','gid','asc',0,1);
$_CT_ARR = array();
while($_CT = db_fetch_array($_CT_RCD))
{
	if($_CT['name']==$_ealbum1) { $_CT1=$_CT; continue;}
	if($_CT['name']==$_ealbum2) { $_CT2=$_CT; continue;}
	$_CT_ARR[] = $_CT;
}
?>




<!-- uniform -->
<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/uniform/uniform.default.css" />
<script src="<?php echo $g['url_module_skin']?>/assets/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/js/conditionizr.min.js"></script>  
<script src="<?php echo $g['url_module_skin']?>/assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/assets/jrespond/jRespond.min.js"></script>


<div class="row">
	<div class="col-lg-8">

		<div class="page-header clearfix">
			<h4 class="pull-left"><i class="fa fa-pencil fa-lg"></i> 
			비디오 수정하기 </h4>
			<span class="pull-right action"><button type="button" class="btn btn-default" onclick="goBack()"><i class="icon-angle-left"></i> 이전</button></span>
		</div>

		<form name="modifyForm" class="form-horizontal" role="form" action="<?php echo $g['s']?>/" method="post" enctype="multipart/form-data" onsubmit="return modifyCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="modify_vod" />
		<input type="hidden" name="uid" value="<?php echo $_R['uid']?>" />

		  <div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">제목</label>
			<div class="col-lg-10">
			  <input type="text" name="name" class="form-control" id="inputName" value="<?php echo str_replace('.'.$_R['ext'],'',$_R['name'])?>">
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
				<?php echo $_R['link']?>
			</div>
		  </div>

		  <div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">삽입코드</label>
			<div class="col-lg-10">
				<div class="well">
				<textarea name="link" class="form-control" rows="2"><?php echo htmlspecialchars($_R['link'])?></textarea>
				</div>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">URL</label>
			<div class="col-lg-10">


				<div class="well">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-youtube-square fa-lg"></i> <i class="fa fa-vimeo-square fa-lg"></i> 출처</span>
					<input class="form-control" type="text" value="<?php echo getVodUrl($_R['link'])?>">
					<span class="input-group-btn">
					<a href="<?php echo getVodUrl($_R['link'])?>" target="_blank" class="btn btn-default"> <i class="fa fa-external-link fa-lg"></i> </a>
					</span>
					</div>

					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-file-text fa-lg"></i> 페이지</span>
					<input class="form-control" type="text" value="<?php echo $g['url_root']?>/?r=<?php echo $r?>&m=<?php echo $module?>&photo=<?php echo $_R['uid']?>">
					<span class="input-group-btn">
					<a href="<?php echo $g['url_root']?>/?r=<?php echo $r?>&m=<?php echo $module?>&photo=<?php echo $_R['uid']?>" target="_blank" class="btn btn-default"> <i class="fa fa-external-link fa-lg"></i> </a>
					</span>
					</div>			    	
				</div>

			</div>
		  </div>
		  <div class="form-group">
			<label for="inputCaption" class="col-lg-2 control-label">Caption</label>
			<div class="col-lg-10">
			  <input type="text" name="caption" class="form-control" id="inputCaption" value="<?php echo $_R['caption']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputTags" class="col-lg-2 control-label">Tag</label>
			<div class="col-lg-10">
			  <input type="text" name="tags" class="form-control" id="inputTags" value="<?php echo $_R['tags']?>" />
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputAlt" class="col-lg-2 control-label">Alternative Text</label>
			<div class="col-lg-10">
			  <input type="text" name="alt" class="form-control" id="inputAlt" value="<?php echo $_R['alt']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputDescription" class="col-lg-2 control-label">Description</label>
			<div class="col-lg-10">
			  <textarea name="description" class="form-control" id="inputDescription" rows="6"><?php echo $_R['description']?></textarea>
			</div>
		  </div>
	</div>
	<div class="col-lg-4">
<div class="panel panel-default">
<div class="panel-heading">
	<h3 class="panel-title">동영상 속성</h3>
</div>
<ul class="list-group">
	<li class="list-group-item form-horizontal">
		<div class="form-group">
			<label class="col-lg-3 control-label">등록자</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_M['name']?></p</div>
			</div>
		</li>
		<li class="list-group-item form-horizontal">
			<div class="form-group">
				<label class="col-lg-3 control-label">업데이트</label>
				<div class="col-lg-9"><p class="form-control-static"><?php echo getDateFormat($_R['d_update']?$_R['d_update']:$_R['d_regis'],'Y.m.d H:i')?>
					2:05</p</div>
				</div>
			</li>
			<li class="list-group-item form-horizontal">
				<div class="form-group">
					<label class="col-lg-3 control-label">출처</label>
					<div class="col-lg-9"><p class="form-control-static">Youtube</p></div>
					</div>
				</li>
					<li class="list-group-item form-horizontal">
						<div class="form-group">
							<label class="col-lg-3 control-label">소속셋트</label>
							<div class="col-lg-9">
								<select name="category" class="form-control">
									<option value="<?php echo $_CT1['uid']?>"<?php if($_R['category']==$_CT1['uid']):?> selected<?php endif?>><?php echo $_CT1['name']?> (<?php echo $_CT1['r_num']?>)</option>
									<?php foreach($_CT_ARR as $_C):?>
									<option value="<?php echo $_C['uid']?>"<?php if($_R['category']==$_C['uid']):?> selected<?php endif?>><?php echo $_C['name']?> (<?php echo $_C['r_num']?>)</option>
									<?php endforeach?>
									<option value="<?php echo $_CT2['uid']?>"<?php if($_R['category']==$_CT2['uid']):?> selected<?php endif?>><?php echo $_CT2['name']?> (<?php echo $_CT2['r_num']?>)</option>
								</select>
							</div>
						</div>
					</li>
					<li class="list-group-item form-horizontal">
						<div class="form-group">
							<label class="col-lg-3 control-label">접근권한</label>
							<div class="col-lg-9">
								<select name="hidden" class="form-control">
								<option value="0"<?php if($_R['hidden']=='0'):?> selected<?php endif?>>전체공개</option>
								<option value="1"<?php if($_R['hidden']=='1'):?> selected<?php endif?>>지명공개</option>
								<option value="2"<?php if($_R['hidden']=='2'):?> selected<?php endif?>>비공개</option>
								</select>
								<span class="help-block">미디어 최종 페이지의 접근권한</span>
							</div>
						</div>
					</li>
					<li class="list-group-item form-horizontal">
						<div class="form-group">
							<label class="col-lg-3 control-label">검색엔진</label>
							<div class="col-lg-9">
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
					</li>
					<li class="list-group-item form-horizontal">
						<div class="form-group">
							<label class="col-lg-3 control-label">License</label>
							<div class="col-lg-9">
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
						</div>
					</li>
					<li class="list-group-item form-horizontal">
						<div class="form-group">
							<label class="col-lg-3 control-label">기타설정</label>
							<div class="col-lg-9">
								<label class="checkbox-inline">
									<input name="use_cment" type="checkbox" value="1"<?php if($_R['use_cment']):?> checked<?php endif?>>
									댓글허용 
								</label>
								<label class="checkbox-inline">
									<input name="use_cross" type="checkbox" value="1"<?php if($_R['use_cross']):?> checked<?php endif?>>
									공유허용 
								</label>
								<label class="checkbox-inline">
									<input name="use_ad" type="checkbox" value="1"<?php if($_R['use_as']):?> checked<?php endif?>>
									광고노출 
								</label>
							</div>
						</div>
					</li>
				</ul>
				<div class="panel-footer hidden-xs">
					<input class="btn btn-primary btn-lg" type="submit" value="정보 업데이트">
					<button class="btn btn-default btn-lg" type="button" onclick="deleteFile('<?php echo $_R['uid']?>');"><i class="fa fa-trash-o fa-lg"></i> 삭제하기</button>
				</div>
				<div class="panel-footer visible-xs">
					<input class="btn btn-primary btn-lg btn-block" type="submit" value="정보 업데이트">
					<button class="btn btn-default btn-lg btn-block" type="button" onclick="deleteFile('<?php echo $_R['uid']?>');"><i class="fa fa-trash-o fa-lg"></i> 삭제하기</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- fitvids -->
<script src="<?php echo $g['url_module_skin']?>/assets/js/jquery.fitvids.js"></script>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".container").fitVids();
  });
</script>

<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>

<?php endif?>




<script type="text/javascript">
function modifyCheck(f)
{
	if (f.name.value == '')
	{
		alert('파일명을 입력해 주세요.   ');
		f.name.focus();
		return false;
	}
	if (f.link.value == '')
	{
		alert('동영상 삽입코드를 입력해 주세요.   ');
		f.link.focus();
		return false;
	}
	getIframeForAction(f);
	return true;
}
function modifyCheck1(f)
{
	if (getId('_HiddenSideBar_').innerHTML == '')
	{
		return false;
	}
	if (f.name.value == '')
	{
		alert('파일명을 입력해 주세요.   ');
		f.name.focus();
		return false;
	}
	getIframeForAction(f);
	f.submit();
}
function upCheck(f)
{
	if (f.file.value == '')
	{
		alert('파일을 첨부해 주세요.   ');
		return false;
	}
	getIframeForAction(f);
	return true;
}
function upCheck1(f)
{
	if (f.link.value == '')
	{
		alert('동영상 삽입 소스코드를 입력해 주세요.   ');
		f.link.focus();
		return false;
	}
	getIframeForAction(f);
	return true;
}

function deleteFile(uid)
{
	if (confirm('정말로 삭제하시겠습니까?   '))
	{
		getIframeForAction('');
		frames.__iframe_for_action__.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=multi_delete&type=vod&_data_=['+uid+']&back=vod&album=<?php echo $album?>';
	}
}
function deleteFile1(uid,type,album)
{
	if (confirm('정말로 삭제하시겠습니까?   '))
	{
		getIframeForAction('');
		frames.__iframe_for_action__.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>&a=multi_delete&type='+type+'&_data_=['+uid+']&back='+type+'&layer=Y&album='+album;
	}
}
function getVodPreview()
{
	if (getId('_vod_embed_code_').value.indexOf('<iframe') == -1)
	{
		alert('유투브 iframe 소스를 입력해주세요.   ');
		return false;
	}
	getId('_vod_play_layer_').innerHTML = getId('_vod_embed_code_').value.replace('640','100%').replace('360','100%');
}
</script>
