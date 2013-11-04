<p>여기는 본문 영역이며 업로더는 모달 레이어 형태로 출력 됩니다.</p>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#media-uploader">
  Launch media-uploader modal (video)
</button>


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

</style>

<div class="modal fade media-modal" id="media-uploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!-- 바로 아랫줄은 작업의 편의를 위해서 모달레이어르를 강제로 띄워놓기 위한 설정 입니다.  -->    
<!-- <div class="modal fade media-modal in" id="media-uploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block"> -->

    <div class="media-modal-content modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="media-frame">
            <div class="media-frame-menu hidden-xs">
                <h1 class="text-center">
                    <i class="fa fa-upload fa-3x"></i>
                    <small class="open-sans">Media Uploader</small></h1>
                <div class="list-group">
                    <a class="list-group-item" href="/rb/?r=home&m=admin&module=mediaset&front=upload_photo"><i class="fa fa-picture-o fa-lg"></i> 사진</a>
                    <a class="list-group-item active" href="/rb/?r=home&m=admin&module=mediaset&front=upload_vod"><i class="fa fa-youtube-play fa-lg"></i> 동영상</a>
                </div>
            </div>
            <div class="media-frame-content">
            


                <!-- 본문 영역 -->
                  <ul class="nav nav-tabs hidden-xs visible-sm visible-md">
                    <li><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i> 직접 업로드</a></li>
                    <li class="active"><a href="#urlsave" data-toggle="tab"><i class="fa fa-code fa-lg"></i> 삽입코드 등록</a></li>
                    <li><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i> 라이브러리</a></li>
                  </ul>

                    <ul class="nav nav-tabs visible-xs">
                    <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload fa-lg"></i></a></li>
                    <li><a href="#urlsave" data-toggle="tab"><i class="fa fa-code fa-lg"></i></a></li>
                    <li><a href="#library" data-toggle="tab"><i class="fa fa-th fa-lg"></i></a></li>
                  </ul>


                  <div class="tab-content">
                    <div class="tab-pane" id="upload">
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
                    <div class="tab-pane active" id="urlsave">
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
                    <div class="tab-pane" id="library">
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


<!-- 이사님, 아래의 효과는 임의로 출력한 부분으로 모달 레이어 출력시에 자동으로 출력되는 부분 입니다. 
    modal 레이어 밑에  반투명 검은색으로 깔리는 영역 입니다. 실제 적용시에는 지우시면 될 것 같습니다.   -->
<!-- <div class="modal-backdrop fade in"></div> -->


<script src="<?php echo $g['s']?>/layouts/bootstrap/assets/jquery/jquery.fitvids.js"></script>
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