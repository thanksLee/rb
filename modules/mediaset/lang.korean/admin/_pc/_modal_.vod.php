[RESULT:

<!--
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#media-uploader">
  Launch media-uploader modal (video)
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
                    <a class="list-group-item" href="#." onclick="getModal('_HiddenModal_','<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=_modal_.photo&type=upload');"><i class="fa fa-picture-o fa-lg"></i> 사진</a>
                    <a class="list-group-item active" href="#."><i class="fa fa-youtube-play fa-lg"></i> 동영상</a>
                </div>
            </div>
            <div class="media-frame-content">
            


                <!-- 본문 영역 -->
                  <ul class="nav nav-tabs hidden-xs visible-sm visible-md">
                    <li<?php if($type=='upload'):?> class="active"<?php endif?>><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i> 직접 업로드</a></li>
                    <li<?php if($type=='urlsave'):?> class="active"<?php endif?>><a href="#urlsave" data-toggle="tab"><i class="fa fa-code fa-lg"></i> 삽입코드 등록</a></li>
                    <li<?php if($type=='library'):?> class="active"<?php endif?>><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i> 라이브러리</a></li>
                  </ul>

                    <ul class="nav nav-tabs visible-xs">
                    <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i></a></li>
                    <li><a href="#urlsave" data-toggle="tab"><i class="fa fa-code fa-lg"></i></a></li>
                    <li><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i></a></li>
                  </ul>


                  <div class="tab-content">
                    <div class="tab-pane<?php if($type=='upload'):?> active<?php endif?>" id="upload">
                      <div class="tab-pane-body">
                        <div id="drag-drop-area">
                          <div class="drag-drop-inside text-center">
                            <p class="drag-drop-info open-sans">Drop files here</p>
                            <p>or</p>
                            <p><button class="btn btn-default btn-lg" type="file">Select
                              Files</button></p>
                          </div>
                        </div>
                        <div class="alert alert-info alert-dismissable" id="drag-drop-area-info">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <ul>
                            <li>멀티파일 업로더가 문제가 있을 경우
                              <a href="" class="alert-link">브라우저 업로더</a>를 사용해 보세요.</li>
                            <li>Maximum upload file size:
                              <code>350MB</code>.</li>
                          </ul>
                        </div>
                      </div>

                    </div>
                    <div class="tab-pane<?php if($type=='urlsave'):?> active<?php endif?>" id="urlsave">
                      <div class="tab-pane-body">

                        <div class="inner">
                          <div class="page-header">
                            <h3>삽입코드 등록
                            </h3>
                          </div>
                          <div class="well">
                            <textarea class="form-control" rows="5"></textarea>
                            <button type="button" class="btn btn-default btn-block" style="margin-top:10px">불러오기</button>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4"><img class="img-thumbnail img-responsive" src="http://kimsq.me/rb/pages/image/people/full/04.jpg"></div>
                            <div class="col-sm-8 col-md-8 col-lg-8">
                              <form role="form">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Caption</label>
                                  <input class="form-control" id="" placeholder="Caption" type="text">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Alt Text</label>
                                  <input class="form-control" id="" placeholder="Alt Text" type="text">
                                </div>
                  
                              </form>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane-footer">
                        <button class="btn btn-primary btn-lg hidden-xs pull-right" type="button"><i class="fa fa-th-large fa-lg"></i>  라이브러리에 등록</button>
                        <button class="btn btn-primary btn-block btn-lg visible-xs pull-right" type="button"><i class="fa fa-th-large fa-lg"></i>  라이브러리에 등록</button>
                      </div>
                    </div>
                    <div class="tab-pane<?php if($type=='library'):?> active<?php endif?>" id="library">
                      <div class="tab-pane-body">
                        <div class="attachments-browser">
                            <div class="thumbnails clearfix">
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10580128936_6c3fa089de_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7354/10575661416_146bb5b060_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7290/10574859463_d6527316ac_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2832/10583319726_77d458901b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7411/10583019196_7de4ca5a12_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7407/10582853294_68eb6068ee_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2889/10582697993_ca2e30bcca_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail active"><img src="http://farm4.static.flickr.com/3818/10581944385_6cd97a9de9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3727/10581673644_ef9bc4b3d9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2824/10580929106_a165c84a77_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3802/10580917513_48e9a55ba4_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3710/10580772273_a6fa30094e_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3825/10580368393_0e633c25b5_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3701/10579689294_c363c547dc_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5525/10579528804_0f60c09c96_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2859/10579276884_91b005153b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7329/10572774824_60a7050ca3_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5531/10572564453_c7c448eef5_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3684/10572399865_9c4d911c1f_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5495/10571078106_12011ff6b3_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10580128936_6c3fa089de_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7354/10575661416_146bb5b060_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7290/10574859463_d6527316ac_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2832/10583319726_77d458901b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7411/10583019196_7de4ca5a12_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7407/10582853294_68eb6068ee_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2889/10582697993_ca2e30bcca_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10581944385_6cd97a9de9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3727/10581673644_ef9bc4b3d9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2824/10580929106_a165c84a77_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10580128936_6c3fa089de_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7354/10575661416_146bb5b060_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7290/10574859463_d6527316ac_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2832/10583319726_77d458901b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7411/10583019196_7de4ca5a12_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7407/10582853294_68eb6068ee_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2889/10582697993_ca2e30bcca_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10581944385_6cd97a9de9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3727/10581673644_ef9bc4b3d9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2824/10580929106_a165c84a77_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3802/10580917513_48e9a55ba4_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3710/10580772273_a6fa30094e_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3825/10580368393_0e633c25b5_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3701/10579689294_c363c547dc_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5525/10579528804_0f60c09c96_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2859/10579276884_91b005153b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7329/10572774824_60a7050ca3_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5531/10572564453_c7c448eef5_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3684/10572399865_9c4d911c1f_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm6.static.flickr.com/5495/10571078106_12011ff6b3_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10580128936_6c3fa089de_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7354/10575661416_146bb5b060_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7290/10574859463_d6527316ac_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2832/10583319726_77d458901b_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7411/10583019196_7de4ca5a12_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm8.static.flickr.com/7407/10582853294_68eb6068ee_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2889/10582697993_ca2e30bcca_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3818/10581944385_6cd97a9de9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm4.static.flickr.com/3727/10581673644_ef9bc4b3d9_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                              <a title="파일명" class="thumbnail"><img src="http://farm3.static.flickr.com/2824/10580929106_a165c84a77_s.jpg" class="img-responsive"><button class="btn btn-default btn-xs" title="삭제" type="button"><i class="fa fa-times"></i></button></a>
                            </div>

                                    <div class="media-sidebar">


                                        <div class="media-pic">

                                          <div class="inwrap"  onclick="playVideo('video-1','hFo7eJR2cvc')">
                                              <iframe allowfullscreen="" class="video-iframe" id="video-1" src="javascript:'';"></iframe>
                                              <img alt="" class="bgimg img-rounded img-responsive" src="https://img.youtube.com/vi/hFo7eJR2cvc/0.jpg">
                                              <i class="fa fa-play-circle-o"></i>
                                          </div>

                                        </div>
                                        <div class="media-name">
                                            <div class="form-group">
                                                <label class="sr-only" for="">비디오명</label>
                                                <input class="form-control" id="" type="text" value="kimsQ4">
                                                <span>.mp4</span>
                                            </div>
                                            <ul class="list-unstyled photo-info">
                                                <li class="text-muted">등록일 : October 19, 2013</li>
                                                <li class="text-muted">재생시간 : 1:40</li>
                                                <li class="text-muted">출처 : Youtube</li>
                                            </ul>
                                        </div>
                          

                                      <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <i class="fa fa-chevron-down"></i> 기본정보
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <form role="form">
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Caption</label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Alt Text</label>
                                                    <input type="text" class="form-control" id="" placeholder="Alt Text">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                  </div>
                                                </form>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <i class="fa fa-chevron-right"></i> 셋트지정 및 접근권한
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                  <label class="control-label">소속셋트</label><br>
                                                  <select class="form-control">
                                                    <option>킴스큐 워크샵</option>
                                                  </select>
                                                </div>

                                                <div class="form-group">
                                                  <label class="control-label">접근권한</label><br>
                                                  <select class="form-control">
                                                    <option>전체공개</option>
                                                    <option>친구공개</option>
                                                    <option>등급공개</option>
                                                    <option>나만공개</option>
                                                  </select>
                                                  <span class="help-block">미디어 최종 페이지의 접근권한</span>
                                                </div>

                                                <div class="form-group">
                                                  <label class="control-label">검색엔진</label><br>
                                                  <label class="radio-inline">
                                                    <input id="" type="radio" value="option1">
                                                    공개함 
                                                  </label>
                                                  <label class="radio-inline">
                                                    <input id="" type="radio" value="option2">
                                                    숨김 
                                                  </label>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <i class="fa fa-chevron-right"></i> 부가 정보
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                  <label class="control-label">License</label>
                                                  <select class="form-control">
                                                    <option>None (All rights reserved)</option>
                                                    <option>저작자표시-비영리-동일조건변경허락 Creative Commons</option>
                                                    <option>저작자표시-비영리 Creative Commons</option>
                                                    <option>저작자표시-비영리-변경금지 Creative Commons</option>
                                                    <option>저작자표시 Creative Commons</option>
                                                    <option>저작자표시-동일조건변경허락 Creative Commons</option>
                                                    <option>저작자표시-변경금지 Creative Commons</option>
                                                  </select>
                                                </div>

                                                <div class="form-group">
                                                  
                                                    <label class="checkbox">
                                                    <input id="inlineCheckbox1" type="checkbox" value="option1">
                                                    댓글허용 
                                                  </label>
                                                  <label class="checkbox">
                                                    <input id="inlineCheckbox2" type="checkbox" value="option2">
                                                    공유허용 
                                                  </label>
                                                  <label class="checkbox">
                                                    <input id="inlineCheckbox2" type="checkbox" value="option2">
                                                    광고노출 
                                                  </label>
                                                  <label class="checkbox hidden-lg">
                                                    <input id="inlineCheckbox2" type="checkbox" value="option2">
                                                    위치정보 포함 
                                                  </label>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                        </div>
                      </div> 
                      <div class="tab-pane-footer">
                        <button class="btn btn-primary btn-lg hidden-xs pull-right" type="button" ><i class="fa fa-check"></i> 정보저장</button>
                        <button class="btn btn-primary btn-block visible-xs btn-lg" type="button"><i class="fa fa-check"></i> 정보저장</button>
                      </div>
                    </div>
                  </div>
                    <!-- //본문 영역 -->





            <!-- //본문 영역 -->
            </div>
        </div>
    </div>
</div>


<div id="_fadein_" class="modal-backdrop fade in"></div>



<style type="text/css" > 

.inwrap {
    cursor: pointer;
    height: 0px;
    overflow: hidden;
    padding-top: 56.25%;
    position: relative;
    width: 100%;
}
.video-iframe {
    border: 0px;
    display: none;
    height: 100%;
    left: 0px;
    position: absolute;
    top: 0px;
    width: 100%;
    z-index: 1;
}
.bgimg {
    left: 0px;
    position: absolute;
    top: -17%;
    width: 100%;
}
.fa-play-circle-o {
    left: 50%;
    margin: -39px 0px 0px -39px;
    position: absolute;
    top: 50%;
    font-size: 65px;
    color:#fff;
    text-shadow: 0 2px 5px #222;
    filter:alpha(opacity=90);
    opacity: 0.9;
    -moz-opacity:0.9;
}
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

#drag-drop-area {
    border: 4px dashed #ddd;
    background-color: #f5f5f5;
    position: absolute;
    top: 15px;
    bottom: 15px;
    left: 0;
    right: 0;
}
#drag-drop-area .drag-drop-inside {
    margin:20% auto 0;
}

#drag-drop-area .drag-drop-inside .drag-drop-info{
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

<!--
<script src="<?php echo $g['url_module_skin']?>/assets/jquery/jquery.fitvids.js"></script>
<script type="text/javascript">

function playVideo(a, c) {
    document.getElementById(a).style.display = "block";
    var b = "http://www.youtube.com/embed/" + c + "/?autoplay=1&autohide=1&rel=0&wmode=transparent";
    document.getElementById(a).src = b
};

$(document).ready(function () {
    // Target your .container, .wrapper, .post, etc.
    $(".container").fitVids({
        customSelector: "iframe[src^='http://www.slideshare.net'], iframe[src^='http://www.facebook.com'], iframe[src^='http://videofarm.daum.net'], iframe[src^='http://serviceapi.nmv.naver.com']"
    });
});

</script>
-->
