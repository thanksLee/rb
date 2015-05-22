[RESULT:

<!--
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#media-uploader">
  Launch media-uploader modal (photo)
</button>
-->


<!-- <div class="modal fade media-modal" id="media-uploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
<div class="modal fade media-modal in" id="media-uploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block;">

    <div class="media-modal-content modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="getId('media-uploader').style.display='none';getId('_fadein_').style.display='none';">&times;</button>
        <div class="media-frame">
            <div class="media-frame-menu hidden-xs">
                <h1 class="text-center">
                    <i class="fa fa-upload fa-3x"></i>
                    <small class="open-sans">Media Uploader</small></h1>
                <div class="list-group">
                    <a class="list-group-item active" href="#."><i class="fa fa-picture-o fa-lg"></i> 사진</a>
                    <a class="list-group-item" href="#." onclick="getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.vod&type=urlsave');"><i class="fa fa-youtube-play fa-lg"></i> 동영상</a>
                </div>
            </div>
            <div class="media-frame-content">
            



                <!-- 본문 영역 -->
                  <ul class="nav nav-tabs hidden-xs visible-sm visible-md">
                    <li<?php if($type=='upload'):?> class="active"<?php endif?>><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i> 직접 업로드</a></li>
                    <li<?php if($type=='urlsave'):?> class="active"<?php endif?>><a href="#urlsave" data-toggle="tab"><i class="fa fa-anchor fa-lg"></i> URL로 부터 저장</a></li>
                    <li<?php if($type=='library'):?> class="active"<?php endif?>><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i> 라이브러리</a></li>
                  </ul>

                    <ul class="nav nav-tabs visible-xs">
                    <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i></a></li>
                    <li><a href="#urlsave" data-toggle="tab"><i class="fa fa-anchor fa-lg"></i></a></li>
                    <li><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i></a></li>
                  </ul>


                  <div class="tab-content">

					<div class="tab-pane<?php if($type=='upload'):?> active<?php endif?>" id="upload">
					  <div class="tab-pane-body">
						<div id="dropzone">
						<form action="<?php echo $g['s']?>/" method="post" enctype="multipart/form-data" class="dropzone" onsubmit="return upCheck(this);">
						<input type="hidden" name="r" value="<?php echo $r?>" />
						<input type="hidden" name="m" value="<?php echo $module?>" />
						<input type="hidden" name="a" value="classic_upload" />
						<input type="hidden" name="type" value="1" />
						<input type="hidden" name="siteaply" value="<?php echo $_HS['uid']?>" />
						<input type="hidden" name="sescode" value="<?php echo $sescode?>" />
						<div class="fallback">
							<input name="file" type="file" multiple="" />
							<input type="submit" value="첨부하기" />
						</div>
						</form>
						</div>
						<div class="alert alert-info alert-dismissable" id="drag-drop-area-info">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <ul>
							<li>멀티 업로더(Chrome, Firefox, Safari, Opera & Internet Explorer 10 이상에서 동작)가 동작하지 않을 경우 기본 업로더를 사용하세요.</li>
							<li>Maximum upload file size: <code><?php echo str_replace('M','',ini_get('upload_max_filesize'))?>MB</code>.</li>
						  </ul>
						</div>
					  </div>
					</div>

					
					<div class="tab-pane<?php if($type=='urlsave'):?> active<?php endif?>" id="urlsave">
					
					<form name="cform" action="<?php echo $g['s']?>/" method="post" onsubmit="return upCheck(this);" />
					<input type="hidden" name="r" value="<?php echo $r?>" />
					<input type="hidden" name="m" value="<?php echo $module?>" />
					<input type="hidden" name="a" value="photo_link" />
					<input type="hidden" name="category" value="<?php echo $album?>" />
					<input type="hidden" name="siteaply" value="<?php echo $_HS['uid']?>" />


                      <div class="tab-pane-body">
                        <div class="inner">
                          <div class="well">
                            <input class="form-control input-lg" placeholder="http://" type="text" value="" name="link" onblur="if(this.value){getId('_previewSrc').src=this.value;}">
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4"><img class="img-thumbnail img-responsive" id="_previewSrc" src="http://kimsq.me/rb/pages/image/people/full/04.jpg"></div>
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Caption</label>
                                  <input class="form-control" placeholder="Caption" type="text" name="caption">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Alt Text</label>
                                  <input class="form-control" placeholder="Alt Text" type="text" name="alt">
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="save" value="1">
                                    내 파일서버에 저장
                                  </label>
                                </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane-footer">
                        <button class="btn btn-primary btn-lg hidden-xs pull-right" type="submit"><i class="fa fa-th-large fa-lg"></i> 라이브러리에 등록</button>
                        <button class="btn btn-primary btn-block btn-lg visible-xs pull-right" type="submit"><i class="fa fa-th-large fa-lg"></i> 라이브러리에 등록</button>
                      </div>
					  </form>
                    </div>
                    <div class="tab-pane<?php if($type=='library'):?> active<?php endif?>" id="library">

                      <div class="tab-pane-body">
                        <div class="attachments-browser">
                            <div class="thumbnails clearfix">


<?php
$sort	= $sort ? $sort : 'gid';
$orderby= $orderby ? $orderby : 'asc';
$recnum	= 0;

$_WHERE = 'type=1';
if ($album) $_WHERE .= ' and category='.$album;
$_RCD = getDbArray($table[$module.'data'],$_WHERE,'*',$sort,$orderby,$recnum,$p);
//$_NUM = getDbRows($table[$module.'data'],$_WHERE);
//$_TPG = getTotalPage($NUM,$recnum);
?>
							<?php while($_R=db_fetch_array($_RCD)):?>
							<a title="<?php echo $_R['name']?>" class="thumbnail" onclick="getModal('_HiddenSideBar_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.photo_data&uid=<?php echo $_R['uid']?>');"><img src="<?php echo $_R['url']?>/<?php if($_R['size']):?>thumb1_<?php endif?><?php echo $_R['name']?>" width="75" height="75" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
							<?php endwhile?>

   
                            </div>


							<form name="modifyForm" role="form" action="<?php echo $g['s']?>/" method="post">
							<input type="hidden" name="r" value="<?php echo $r?>" />
							<input type="hidden" name="m" value="<?php echo $module?>" />
							<input type="hidden" name="a" value="modify_photo" />
							<input type="hidden" name="stop" value="Y" />
							<div id="_HiddenSideBar_" class="media-sidebar"></div>
							</form>

                        </div>
                      </div> 
                      <div class="tab-pane-footer">
                        <button class="btn btn-primary btn-lg hidden-xs pull-right" type="button" onclick="modifyCheck1(document.modifyForm);"><i class="fa fa-check"></i> 정보저장</button>
                        <button class="btn btn-primary btn-block visible-xs btn-lg" type="button" onclick="modifyCheck1(document.modifyForm);"><i class="fa fa-check"></i> 정보저장</button>
                      </div>

                    </div>
                  </div>
                <!-- //본문 영역 -->




            
            </div>
        </div>
    </div>
</div>

<div id="_fadein_" class="modal-backdrop fade in"></div>


<style type="text/css">
.media-modal {
    top: 30px;
    left: 30px;
    right: 30px;
    bottom: 30px;
	overflow-y: auto;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,0.5);
    box-shadow: 0 3px 9px rgba(0,0,0,0.5);
    background-clip: padding-box;
}

@media (max-width: 767px) { 
    .media-modal {
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
    }
 }

.modal-dialog {
    width: auto;
}
.modal-header {
border-bottom: 0;
}
.modal-body {
    padding-top: 10px
}
.modal .close {
    position: absolute;
    top: 15px;
    right:25px;
    z-index: 1000
}



.media-modal-close {
    position: absolute;
    top: 17px;
    right: 17px;
    width: 30px;
    height: 30px;
    z-index: 1000;
}
.media-modal-content {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: auto;
    min-height: 300px;
    background: #fff;
}

.media-modal h1  {
    margin-top: 10px;
    margin-bottom: 25px
}

.media-modal h1 small {
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    display: block;
    margin-top: 0px
}

.media-frame {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.media-frame-menu {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 199px;
    z-index: 150;
}

.media-frame-content {
    position: absolute;
    top: 15px;
    left: 200px;
    right: 15px;
    bottom: 0;
    height: auto;
    width: auto;
    margin: 0;
}

@media (max-width: 767px) {
    .media-frame-content {
    left: 10px;
    }
}


.media-frame-menu {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 199px;
    z-index: 150;
}

.media-frame-content .container,
.media-frame-content .container .tab-content {
    position: relative;
	min-height: 100%;
	height: auto;
	height: 100% !important;
		margin-bottom:  -40px;
	padding-bottom: 40px;
}

.page-header {
    padding-bottom: 9px;
    margin: 15px 0 10px;
    border-bottom: 1px solid #eeeeee;
}


.page-header h1, h2, h3 {
margin-top: 0;
margin-bottom: 0;
}


.media-sidebar {
position: absolute;
top: 0;
right: 0;
bottom: 0;
width: 267px;
padding: 15px;
z-index: 75;
background: #f5f5f5;
border-left: 1px solid #dfdfdf;
overflow: auto;
-webkit-overflow-scrolling: touch;
}

.media-sidebar .media-pic {
    position: relative;
}

.media-sidebar .media-pic .btn-group {
    position: absolute;
    bottom: 2px;
    right: 2px;
}

.media-sidebar .media-name {
    margin-top: 10px;
}
.media-frame-menu {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 199px;
    z-index: 150;
    padding: 15px;
}


.media-modal .tab-content {
    -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
    background: #fff;
    border-top: 0px;
    bottom: 15px;
    padding: 0px;
    position: absolute;
    top: 46px;
    width: 100%;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
}

.media-modal .tab-pane {
    height: 100%;
    overflow: auto;
}

.media-modal .tab-content #upload {
    position: absolute;
    top:0;
    bottom: 0;
    left:15px;
    right:15px;
}

.media-modal .tab-pane-body {
    height: 100%;
    overflow: auto;
    padding-bottom: 60px;
}
.media-modal .tab-pane-body .inner {
    padding: 15px;
}
.media-modal .tab-pane-footer {
    background-color: #f5f5f5;
    border: 0px solid #dfdfdf;
    border-width: 1px 0px 0px;
    bottom: 0;
    box-shadow: 0px -4px 4px -4px rgba(0, 0, 0, 0.1);
    height: 60px;
    padding: 10px 15px;
    position: absolute;
    right: 0px;
    width: 100%;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
}

#library button {
    border-radius: 0px;
}
#library .thumbnails {
    bottom: 0px;
    overflow: auto;
    padding: 10px 0 10px 10px;
    position: absolute;
    right: 266px;
    top: 0px;
    z-index: 1000;
}

#library .thumbnails a {
    margin: 3px;
    float: left;
    cursor: move;
}

#library .thumbnails .active {
    border: 1px solid #3276b1;
    background-color: #428bca;
}

.attachments-browser {
    height: 100%;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.attachments-browser .thumbnail {
    position: relative;
}
.attachments-browser .thumbnail button {
    position: absolute;
    bottom: 4px;
    left: 4px
}

#dropzone {
    border: 4px dashed #ddd;
    background-color: #f5f5f5;
    position: absolute;
    top: 15px;
    bottom: 15px;
    left: 0;
    right: 0;
}
#dropzone .drag-drop-inside {
    margin:20% auto 0;
}

#dropzone .drag-drop-inside .drag-drop-info{
    color:#777;
    font-size: 18px;
}


#drag-drop-area-info {
    position: absolute;
    left: 15px;
    right: 15px;
    bottom : 15px;
}

@media (max-width: 767px) {
    #drag-drop-area-info {
        left: 0;
        right:0;
        bottom : 15px;
    }
}
.dropzone {
  border: 1px solid rgba(0,0,0,0.03);
  min-height: 100%;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  background: rgba(0,0,0,0.03);
  padding: 23px;
}

.upload-list .list-group-item {
    padding: 0
}
.upload-list .list-group-item .edit-attachment {
    display: block;
    line-height: 36px;
    float: right;
    margin-right: 15px;
}
.upload-list .media-item .thumb {
    float: left;
    margin: 2px 2px 0;
    max-width: 40px;
    max-height: 32px;
}

.upload-list .media-item .filename {
    line-height: 36px;
    overflow: hidden;
    padding: 0 10px;
}


.media-sidebar .media {
    font-size: 12px;
}

.panel .panel-heading h4 {
    padding: 11px 0 11px 15px;
}


@media (max-width: 380px) {
    .media-sidebar {
    width: 167px;
    }
    #library .thumbnails {
    right: 166px;
    }
}

.media-sidebar .media-name .form-group {
    position: relative;
}

.media-sidebar .media-name .form-group input {
    padding-right: 50px;
}

.media-sidebar .media-name .form-group span {
    position: absolute;
    right:10px;
    top: 7px;
    font-weight: bold;
    color: #999;
}
</style>

:RESULT]
