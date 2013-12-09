<!-- Modal-모듈연결 -->
<style type="text/css">
@media screen and (min-width: 768px) {
    #modal-module-joint .modal-dialog {
        width: 730px;
    }
}

#modal-module-joint .modal-header h4 {
    width: 140px;
    float: left;
}
#modal-module-joint .modal-body {
    padding: 0 15px;
}
#modal-module-joint .modal-footer {
    margin-top: 0
}
#modal-module-joint .modal-header small {
    font-size: 11px;
    color: #999;
    float: left;
    padding: 6px 0 0 0;
}
#modal-module-joint .panel .panel-heading h4 {
    padding: 11px 0 11px 50px;
}
#modal-module-joint .panel .panel-heading h4.panel-title {
    font-size: 14px;
}
#modal-module-joint .col-sm-4 {
    overflow-y: scroll;
    padding: 15px 7px;
    height:480px;
}
#modal-module-joint .col-sm-8 {
    overflow: auto;
    padding: 15px;
    height:480px;
}
#modal-module-joint .col-sm-8 .page-header {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: 0
}
#modal-module-joint .tab-content .tab-pane {
    height: 360px
}
</style>
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-module-joint" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header clearfix">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        <i class="fa kf-module fa-lg"></i>  모듈연결 
                    </h4>
                    <small>콘텐츠를 제공하는 모듈은 메뉴나 페이지에 연결할 수 있습니다.</small>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">

                            <!-- 모듈선택 -->
                            <div class="list-group" id="_module_list_">
							<?php $MODULES = getDbArray($table['s_module'],'','*','gid','asc',0,1)?>
							<?php while($R=db_fetch_array($MODULES)):?>
							<?php if($R['id']== 'site')continue?>
							
							<?php $_jfile0 = $g['path_module'].$R['id'].'/lang.'.$_HS['lang'].'/admin/_mobile/var/var.joint.php'?>
							<?php $_jfile1 = $g['path_module'].$R['id'].'/lang.'.$_HS['lang'].'/admin/_pc/var/var.joint.php'?>
							<?php $_jfile2 = $g['path_module'].$R['id'].'/admin/_pc/var/var.joint.php'?>
							<?php if((!is_file($_jfile0)&&!is_file($_jfile1)&&!is_file($_jfile2))||strstr($cmodule,'['.$R['id'].']'))continue?>
							<?php if($smodule==$R['id']) $g['var_joint_file'] = is_file($_jfile0)?$_jfile0:(is_file($_jfile1)?$_jfile1:$_jfile2)?>

							<a class="list-group-item<?php if($smodule==$R['id']):?> active<?php endif?>" data-toggle="modal" href="#." onclick="moduleJoint(this);getAjaxData('<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=popup.joint&amp;iframe=Y&amp;dropfield=<?php echo $dropfield?>&amp;smodule=<?php echo $R['id']?>&amp;cmodule=<?php echo $cmodule?>','_modal_module_joint_');">
								<i class="fa <?php echo $R['icon']?$R['icon']:'fa-th-large'?> fa-lg fa-fw"></i> <?php echo $R['name']?>
								<small>(<?php echo $R['id']?>)</small>
							</a>

							<?php endwhile?>
                            </div>
                            <!-- //모듈선택 -->
                        </div>
                        <div id="_modal_module_joint_" class="col-sm-8">
<!--
                            <div class="page-header">
                                <h4>
                                    이 모듈 <small>(통합검색)</small> 을 연결 하시겠습니까?
                                </h4>
                            </div>

                            <p>
                                <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-link fa-lg"></i> 연결</button>
                            </p>
-->

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default btn-block" data-dismiss="modal" type="button">취소</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
//<![CDATA[
function moduleJoint(obj)
{
	var modules = getId('_module_list_');
	var i;
	for (i =0; i < modules.children.length; i++)
	{
		modules.children[i].className = 'list-group-item';
	}
	obj.className = 'list-group-item active';
}
function dropJoint(m)
{
	var f = getId('jointf');
	f.value = m;
	f.focus();
}
//]]>
</script>






  <!-- 포스트 신규 -->
  <div class="modal fade" id="modal-post-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">새 포스트 쓰기</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



  <!-- 미디어 업로드 -->
  <div class="modal fade" id="modal-media-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">미디어 업로드</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<!-- 새 페이지 Modal -->
<div class="modal fade" id="modal-page-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">새 페이지 만들기</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label for="exampleInputPassword1">새 페이지 이름 입력</label>
            <input type="text" class="form-control" name="" placeholder="제목없음" value="">
        </div>

        <div>
        <a href="/rb/?r=home&m=admin&module=home&front=page-new" class="btn btn-primary">확인</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>

        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


  <!-- 모듈 설치 -->
  <div class="modal fade" id="modal-module-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">모듈 설치</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<!-- 사이트 생성  -->
  <!-- Modal -->
  <div class="modal fade" id="home-Modal-site" tabindex="-1" role="dialog" aria-labelledby="home-Modal-site" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-globe"></span> 사이트 추가</h4>
        </div>
        <div class="modal-body">

            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">사이트명</label>
                            <input class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group error">
                            <label control-label>사이트제목</label>
                            <input class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="control-label">사이트 언어</label>
                            <select class="form-control">
                                <option value="">한국어</option>
                                <option value="">영어</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-error">
                            <label class="control-label">사이트코드</label>
                            <div class="input-group">
                                <input class="form-control" placeholder="" type="text">
                                <span class="input-group-addon">
                                    <input type="checkbox">
                                    사용 
                                </span>
                            </div>
                            <label for="required1" class="text-danger">Please enter at least 6 characters.</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="control-label">레이아웃</label>
                            <select class="col-md-12 form-control" id="" tabindex="-1">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group error">
                            <label class="control-label">시작페이지</label>
                            <div class="input-group">
                                <select class="form-control" name="startpage">
                                    <option value="">&nbsp;+ 선택하세요</option>
                                    <option selected="selected" value="1">ㆍ메인화면(main)</option>
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        <div class="modal-footer visible-xs">
          <button type="button" class="btn btn-primary btn-lg btn-block">완료</button>
          <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">취소</button>
        </div>
        <div class="modal-footer hidden-xs">
            <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-primary">완료</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<!-- 메뉴 추가  -->
<div aria-hidden="true" aria-labelledby="home-Modal-menu" class="modal fade" id="home-Modal-menu" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-globe"></span>
                    메뉴 추가</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">사이트명</label>
                                <input class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group error">
                                <label control-label>사이트제목</label>
                                <input class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">사이트 언어</label>
                                <select class="form-control">
                                    <option value="">한국어</option>
                                    <option value="">영어</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-error">
                                <label class="control-label">사이트코드</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="" type="text">
                                    <span class="input-group-addon">
                                        <input type="checkbox">
                                        사용 
                                    </span>
                                </div>
                                <label class="text-danger" for="required1">Please enter at least 6
                                    characters.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">레이아웃</label>
                                <select class="col-md-12 form-control" id="" tabindex="-1">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group error">
                                <label class="control-label">시작페이지</label>
                                <div class="input-group">
                                    <select class="form-control" name="startpage">
                                        <option value="">&nbsp;+ 선택하세요</option>
                                        <option selected="selected" value="1">ㆍ메인화면(main)</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer visible-xs">
                <button class="btn btn-primary btn-lg btn-block" type="button">완료</button>
                <button class="btn btn-default btn-lg btn-block" data-dismiss="modal" type="button">취소</button>
            </div>
            <div class="modal-footer hidden-xs">
                <button class="btn btn-default" data-dismiss="modal" type="button">취소</button>
                <button class="btn btn-primary" type="button">완료</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 
 <!-- 페이지 추가  -->
<div aria-hidden="true" aria-labelledby="home-Modal-page" class="modal fade" id="home-Modal-page" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-globe"></span>
                    페이지 추가</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">사이트명</label>
                                <input class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group error">
                                <label control-label>사이트제목</label>
                                <input class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">사이트 언어</label>
                                <select class="form-control">
                                    <option value="">한국어</option>
                                    <option value="">영어</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-error">
                                <label class="control-label">사이트코드</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="" type="text">
                                    <span class="input-group-addon">
                                        <input type="checkbox">
                                        사용 
                                    </span>
                                </div>
                                <label class="text-danger" for="required1">Please enter at least 6
                                    characters.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">레이아웃</label>
                                <select class="col-md-12 form-control" id="" tabindex="-1">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group error">
                                <label class="control-label">시작페이지</label>
                                <div class="input-group">
                                    <select class="form-control" name="startpage">
                                        <option value="">&nbsp;+ 선택하세요</option>
                                        <option selected="selected" value="1">ㆍ메인화면(main)</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer visible-xs">
                <button class="btn btn-primary btn-lg btn-block" type="button">완료</button>
                <button class="btn btn-default btn-lg btn-block" data-dismiss="modal" type="button">취소</button>
            </div>
            <div class="modal-footer hidden-xs">
                <button class="btn btn-default" data-dismiss="modal" type="button">취소</button>
                <button class="btn btn-primary" type="button">완료</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 



<!-- Modal-패키지 설치 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-package-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  패키지 설치</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa fa-briefcase fa-3x" style="font-size:200px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    패키지를 설치 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                </div>
                            </dl>
                            <ul style="margin-left:0;padding-left:15px">
                                <li>패키지는 최상위폴더 이하에 압축폴더 경로에 맞춰서 등록됩니다.</li>
                                <li>동일명칭의 폴더나 파일이 존재할 경우 덧씌워지므로 주의하세요.</li>
                                <li>패키지의 형식은 <strong>rb_package_자료코드.zip</strong> 이어야 합니다.</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">설치하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-모듈 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-module-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  모듈 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa kf-module fa-3x" style="font-size:180px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    모듈을 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                </div>
                            </dl>
                            <ul style="margin-left:0;padding-left:15px">
                                <li>레이아웃 패키지의 형식은 rb_module_압축폴더명.zip 이어야 합니다.</li>
                                <li>추가된 패키지는 설치 대기리스트에서 확인하실 수 있으며 이후 설치버튼을 클릭하셔야 사용가능한 정식모듈로 등록됩니다.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-레이아웃 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-layout-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  레이아웃 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa kf-layout fa-3x" style="font-size:180px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    레이아웃을 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                </div>
                            </dl>
                            <ul style="margin-left:0;padding-left:15px">
                                <li>레이아웃 패키지의 형식은 rb_layout_압축폴더명.zip 이어야 합니다.</li>
                                <li>패키지는 /layouts/ 이하 선택된 폴더 밑에 등록됩니다. 등록할 폴더를 선택해 주세요.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-위젯 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-widget-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  위젯 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa kf-widget fa-3x" style="font-size:200px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    위젯을 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="widget-folder"><i class="fa fa-folder-open fa-lg"></i> 분류선택</label>
                                    <select class="form-control" id="widget-folder">
                                        <option>최상위폴더</option>
                                        <option>댓글 위젯</option>
                                        <option>메인구성 위젯</option>
                                        <option>외부제공 위젯</option>
                                        <option>게시판 위젯</option>
                                    </select>
                                    <span class="help-block">패키지는 /widgets/ 이하 선택된 폴더 밑에 등록됩니다. 등록할 폴더를 선택해 주세요.</span>
                                </div>
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                    <span class="help-block">위젯 패키지의 형식은 rb_widget_압축폴더명.zip 이어야 합니다.</span>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-스위치 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-switch-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  스위치 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa fa-power-off fa-3x" style="font-size:180px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    스위치 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="switch-folder"><i class="fa fa-folder-open fa-lg"></i> 분류선택</label>
                                    <select class="form-control" id="switch-folder" name="subfolder">
                                        <option value="start/">스타트 스위치</option>
                                        <option value="top/">탑 스위치</option>
                                        <option value="head/">헤더 스위치</option>
                                        <option value="foot/">풋터 스위치</option>
                                        <option value="end/">엔드 스위치</option>
                                    </select>
                                    <span class="help-block">패키지는 /switchs/ 폴더이하 지정된 스위치폴더에 등록됩니다.</span>
                                </div>
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                    <span class="help-block">스위치의 형식은 <strong>rb_switch_압축폴더명.zip</strong> 이어야 합니다.</span>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-컨텐츠 테마 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-ctheme-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  컨텐츠 테마 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa kf-contents fa-3x" style="font-size:200px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    컨텐츠 테마를 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="theme-type"><i class="fa fa-folder-open fa-lg"></i> 테마구분</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" id="theme-type1" value="option1"> 반응형
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" id="theme-type2" value="option2"> 모바일전용
                                        </label>
                                    </div>
                                    <span class="help-block">패키지는 /modules/bbs/theme/(_responsive/_mobile)/ 에 등록됩니다.</span>
                                </div>
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                    <span class="help-block">컨텐츠 테마 패키지의 형식은 rb_contentstheme_압축폴더명.zip 이어야 합니다..</span>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-게시판 테마 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-btheme-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  게시판 테마 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa kf-bbs fa-3x" style="font-size:200px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    게시판 테마를 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="theme-type"><i class="fa fa-folder-open fa-lg"></i> 테마구분</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" id="theme-type1" value="option1"> 반응형
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" id="theme-type2" value="option2"> 모바일전용
                                        </label>
                                    </div>
                                    <span class="help-block">패키지는 /modules/bbs/theme/(_responsive/_mobile)/ 에 등록됩니다.</span>
                                </div>
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                    <span class="help-block">컨텐츠 테마 패키지의 형식은 rb_bbstheme_압축폴더명.zip 이어야 합니다..</span>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal-기타자료 추가 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal-etc-add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content kimsq">
            <form>
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-lg"></i>  기타자료 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 text-center hidden-xs"><br><br>
                            <i class="fa fa-file fa-3x" style="font-size:200px"></i>
                        </div>
                        <div class="col-sm-7">
                            <div class="page-header">
                                <h4>
                                    기타자료를 추가 하시겠습니까?
                                </h4>
                            </div>
                            <dl class="well well-sm">
                                <div class="form-group">
                                    <label for="widget-InputFile" class="text-danger"><i class="fa fa-file fa-lg"></i> 파일첨부</label>
                                    <input type="file" id="widget-InputFile">
                                </div>
                            </dl>
                            <ul style="margin-left:0;padding-left:15px">
                                <li>기타자료 패키지의 형식은 rb_etc_자료코드.zip 이어야 합니다.</li>
                                <li>동일명칭의 폴더나 파일이 존재할 경우 덧씌워지므로(업데이트) 주의하세요.</li>
                                <li>패키지는 최상위폴더 이하에 압축폴더 경로에 맞춰서 등록됩니다.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" data-dismiss="modal" type="button">취소</button>
                    <button class="btn btn-primary" type="submit">추가하기</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal-아이콘 갤러리 -->
<div class="modal fade" id="modal-icon-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-flag"></i> 아이콘 갤러리</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs hidden-xs">
                    <li class="active"><a href="#kf" data-toggle="tab">kimsQ</a></li>
                    <li><a href="#glyphicon" data-toggle="tab">Glyphicons</a></li>
                    <li><a href="#awesome" data-toggle="tab">Awesome</a></li>
                </ul>
                <ul class="nav nav-tabs visible-xs">
                    <li class="active" style="width:33.3%;text-align:center"><a href="#kf" data-toggle="tab">kimsQ</a></li>
                    <li style="width:33.3%;text-align:center"><a href="#glyphicon" data-toggle="tab">Gly..</a></li>
                    <li style="width:33.4%;text-align:center"><a href="#awesome" data-toggle="tab">Awe..</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content icon-gallery">
                    <div class="tab-pane active" id="kf">
                        <h5 class="text-primary">Default Modules</h5>
                        <ul class="icon-list kf">
                            <li><span class="kf-comment" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-bbs" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-analysis" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-admin" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-widget" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-upload" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-tag" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-home" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-search" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-popup" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-notify" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-module" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-member" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-media" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-market" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-layout" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-domain" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-device" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-dbmanager" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-dashboard" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="kf-contents" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                        </ul>
                        <h5 class="text-primary">kimsQ BI</h5>
                        <ul class="icon-list kf">
                            <li><span class="fa kf-bi-03" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="fa kf-bi-04" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="fa kf-bi-05" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="fa kf-bi-06" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="fa kf-bi-07" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="glyphicon">
                        <ul class="icon-list">
                            <li><span class="glyphicon glyphicon-adjust" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-align-center" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-align-justify" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-align-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-align-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-arrow-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-arrow-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-arrow-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-arrow-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-asterisk" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-backward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-ban-circle" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-barcode" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-bell" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-bold" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-book" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-bookmark" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-briefcase" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-bullhorn" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-calendar" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-camera" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-certificate" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-check" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-chevron-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-chevron-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-chevron-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-chevron-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-cloud" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-cloud-download" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-cloud-upload" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-cog" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-collapse-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-collapse-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-comment" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-compressed" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-copyright-mark" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-credit-card" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-cutlery" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-dashboard" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-download" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-download-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-earphone" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-edit" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-eject" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-envelope" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-euro" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-exclamation-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-expand" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-export" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-eye-close" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-eye-open" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-facetime-video" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-fast-backward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-fast-forward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-file" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-film" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-filter" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-fire" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-flag" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-flash" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-floppy-disk" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-floppy-open" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-floppy-remove" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-floppy-save" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-floppy-saved" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-folder-close" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-folder-open" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-font" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-forward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-fullscreen" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-gbp" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-gift" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-glass" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-globe" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hand-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hand-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hand-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hand-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hd-video" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-hdd" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-header" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-headphones" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-heart" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-heart-empty" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-home" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-import" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-inbox" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-indent-left" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-indent-right" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-info-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-italic" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-leaf" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-link" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-list" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-list-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-lock" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-log-in" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-log-out" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-magnet" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-map-marker" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-minus" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-minus-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-move" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-music" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-new-window" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-off" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-ok" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-ok-circle" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-ok-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-open" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-paperclip" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-pause" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-pencil" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-phone" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-phone-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-picture" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-plane" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-play" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-play-circle" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-plus" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-plus-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-print" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-pushpin" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-qrcode" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-question-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-random" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-record" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-refresh" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-registration-mark" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-remove" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-remove-circle" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-remove-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-repeat" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-resize-full" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-resize-horizontal" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-resize-small" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-resize-vertical" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-retweet" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-road" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-save" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-saved" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-screenshot" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sd-video" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-search" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-send" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-share" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-share-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-shopping-cart" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-signal" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-alphabet" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-alphabet-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-attributes" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-attributes-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-order" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sort-by-order-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sound-5-1" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sound-6-1" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sound-7-1" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sound-dolby" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-sound-stereo" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-star" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-star-empty" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-stats" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-step-backward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-step-forward" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-stop" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-subtitles" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tag" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tags" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tasks" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-text-height" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-text-width" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-th" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-th-large" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-th-list" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-thumbs-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-thumbs-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-time" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tint" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tower" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-transfer" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-trash" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tree-conifer" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-tree-deciduous" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-unchecked" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-upload" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-usd" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-user" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-volume-down" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-volume-off" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-volume-up" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-warning-sign" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-wrench" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-zoom-in" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="glyphicon glyphicon-zoom-out" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="awesome">
                        <h5 class="text-primary">Brand Icons <small></small></h5>
                        <ul class="icon-list awesome">
                            <li title="android"><span class="fa fa-android" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="apple"><span class="fa fa-apple" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="google-plus"><span class="fa fa-google-plus" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="twitter"><span class="fa fa-twitter" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="facebook"><span class="fa fa-facebook" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="html5"><span class="fa fa-html5" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="css3"><span class="fa fa-css3" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="dropbox"><span class="fa fa-dropbox" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="flickr"><span class="fa fa-flickr" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="github"><span class="fa fa-github" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="github-alt"><span class="fa fa-github-alt" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="instagram"><span class="fa fa-instagram" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="linkedin"><span class="fa fa-linkedin" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="linux"><span class="fa fa-linux" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="pinterest"><span class="fa fa-pinterest" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="skype"><span class="fa fa-skype" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="vimeo"><span class="fa fa-vimeo-square" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="windows"><span class="fa fa-windows" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="youtube"><span class="fa fa-youtube" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="dribbble"><span class="fa fa-dribbble" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="foursquare"><span class="fa fa-foursquare" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="tumblr"><span class="fa fa-tumblr" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="pagelines"><span class="fa fa-pagelines" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li title="maxcdn"><span class="fa fa-maxcdn" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                        </ul>
                        <h5 class="text-primary">Web Application Icons <small>(업데이트 예정)</small></h5>
                        <ul class="icon-list awesome">
                            <li><span class="fa fa-adjust" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                            <li><span class="fa fa-anchor" onclick="iconDrop(this.className);" data-dismiss="modal"></span></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal" type="button">닫기</button>
                <button class="btn btn-primary" type="button" onclick="iconDropAply();" data-dismiss="modal">아이콘 지정</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal-아이콘 갤러리 -->

