
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




  <!-- 페이지 신규 -->
  <div class="modal fade" id="modal-page-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">새 페이지 만들기</h4>
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
 

 