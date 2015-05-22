
<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
						<i class="fa fa-wrench fa-2x"></i>
					</div>
					<h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">관리</a></h4>
				</div>
				<div class="panel-collapse collapse in" id="collapseOne">
					<div class="panel-body" style="padding:0 10px">
						<div class="checkbox">
							<label>
								<ol class="breadcrumb">
									<li><input type="checkbox" value=""></li>
									<li>홈페이지</li>
									<li>사이트</li>
								</ol>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<ol class="breadcrumb">
									<li><input type="checkbox" value=""></li>
									<li>시스템</li>
									<li>스위치</li>
								</ol>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<ol class="breadcrumb">
									<li><input type="checkbox" value=""></li>
									<li>레이아웃</li>
									<li>레이아웃</li>
								</ol>
							</label>
						</div>
					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-lg btn-block" type="button"><i class="fa fa-trash-o fa-lg"></i> 제외하기</button>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="icon">
						<i class="fa fa-move fa-2x"></i>
					</div>
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
							순서 조정
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="collapseTwo">
					<div class="panel-body" style="padding:10px 15px">

						<ul class="nav nav-pills nav-stacked">
							<li>
								<ol class="breadcrumb">
									<li><i class="fa fa-move"></i> </li>
									<li>홈페이지</li>
									<li>사이트</li>
								</ol>
							</li>
							<li>
								<ol class="breadcrumb">
									<li><i class="fa fa-move"></i> </li>
									<li>홈페이지</li>
									<li>사이트</li>
								</ol>
							</li>
							<li>
								<ol class="breadcrumb">
									<li><i class="fa fa-move"></i> </li>
									<li>홈페이지</li>
									<li>사이트</li>
								</ol>
							</li>
						</ul>

					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-lg btn-block" type="button"><i class="fa fa-check fa-lg"></i> 순서저장</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-lg-9" id="tab-content-view">
		<div class="page-header">
			<h4>
				<i class="fa fa-exclamation-circle fa-lg"></i>
				바로가기 사용 가이드
				<span class="text-muted">(Quick Link)</span>
			</h4>
		</div>

		<ul>
		<li>바로가기 프로그램의 실행단계를 5개의 구역으로 분리하여 각각의 구역에 실행여부를 온/오프 할 수 있는 응용 프로그램입니다.</li>
		<li>바로가기의 실행여부는 ON/OFF 아이콘을 클릭해서 전환할 수 있습니다.</li>
		<li>너무 많은 스위치를 동작시킬 경우 실행속도에 영향을 줄 수 있으니 꼭 필요한 스위치만 사용하세요.</li>
		<li>스위치는 마켓모듈의 패키지설치 페이지에서 추가할 수 있습니다.</li>
		</ul>



	</div>
</div>




<br><br><br>
<!-- 여기까지 권기택 작업 입니다.  -->



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
<div id="catebody">
	<div id="category">
		<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="m" value="<?php echo $module?>" />
		<input type="hidden" name="a" value="" />

		<div class="title">
			즐겨찾는 페이지
		</div>
		
		<div class="tree">
			<ul id="moduleorder3">
			<?php $ADMPAGE = getDbArray($table['s_admpage'],'memberuid='.$my['uid'],'*','gid','asc',0,1)?>
			<?php while($R=db_fetch_array($ADMPAGE)):?>
			<li class="move">
				<input type="checkbox" name="bookmark_pages[]" value="<?php echo $R['uid']?>" />
				<span><?php echo $R['name']?></span>
			</li>
			<?php endwhile?>
			<?php if(!db_num_rows($ADMPAGE)):?>
			<li>
				<input type="checkbox" disabled="disabled" />
				등록된 페이지가 없습니다.
			</li>
			<?php endif?>
			</ul>
		</div>

		</form>
	</div>


	<div id="catinfo">
		
		<ul>
		<li><input type="button" value="순서변경" class="btnblue" onclick="actQue('bookmark_order');" /> : 즐겨찾는 페이지의 순서를 드래그한 후 클릭해주세요.</li>
		<li><input type="button" value="제외하기" class="btnblue" onclick="actQue('bookmark_delete');" /> : 페이지의 체크한 후 클릭해주세요.</li>
		</ul>

	</div>
	<div class="clear"></div>
</div>




<script type="text/javascript">
//<![CDATA[
function actQue(act)
{
	var f  = document.procForm;
    var l = document.getElementsByName('bookmark_pages[]');
    var n = l.length;
    var i;
	var j=0;

	if (act == 'bookmark_order')
	{
		if (confirm('정말로 이 순서를 저장하시겠습니까?     '))
		{

			for	(i = 0; i < n; i++)
			{
				l[i].checked = true;
			}

			f.a.value = act;
			f.submit();
		}
	}
	if (act == 'bookmark_delete')
	{
		f.a.value = act;
		f.submit();
	}
}
dragsort.makeListSortable(getId("moduleorder3"));
//]]>
</script>





