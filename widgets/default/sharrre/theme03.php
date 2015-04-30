<!-- katalk js -->
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<!-- kakaostory js -->
<script src="http://kakao.github.io/kakaolink-web/kakao.link.js"></script>
<div id="<?php echo $wdgvar['widget_id']?>" class="sharrre-widget-wrap">
   <div id="<?php echo $wdgvar['theme']?>">
      <?php if(in_array('t',$icon_arr)):?>
           <div id="twitter" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="Tweet"></div>
      <?php endif?>
      <?php if(in_array('f',$icon_arr)):?>
         <div id="facebook" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="Like"></div>
      <?php endif?>
      <?php if(in_array('g',$icon_arr)):?>
         <div id="googleplus" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="+1"></div>
      <?php endif?>
      <?php if(in_array('ks',$icon_arr)):?>
         <div id="kakaostory" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="ka-story"></div>
      <?php endif?>
      <?php if(in_array('kt',$icon_arr)):?>
         <div id="kakaotalk" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="ka-talk"></div>
      <?php endif?>
    </div>
</div>
<script>
$('#twitter').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  //shorterTotal: false, // count 숫자 k 로 안나타내기 할 때 사용 
  //buttons: { twitter: {via: 'kimsq.com'}}, // 트위터 계정을 포함시켜 링크 보낼 때 사용 
 template : '<a href="#" class="box"><div class="share"><i class="fa fa-twitter"></i></div></a>',
 click: function(api, options){
    api.simulateClick();
    api.openPopup('twitter');
  }
});
$('#facebook').sharrre({
  share: {
    facebook: true
  },
  enableHover: false,
  enableTracking: false,
  template : '<a href="#" class="box"><div class="share"><i class="fa fa-facebook"></i></div></a>',
  click: function(api, options){
    api.simulateClick();
    api.openPopup('facebook');
  }
});
$('#googleplus').sharrre({
  share: {
    googlePlus: true
  },
  enableHover: false,
  enableTracking: false,
  buttons: {  //settings for buttons
      googlePlus : {  //http://www.google.com/webmasters/+1/button/
        lang: 'ko',
      }
  }, // 한글 패치     
  template : '<a href="#" class="box"><div class="share"><i class="fa fa-google-plus"></i></div></a>',
  urlCurl: rooturl+'/plugins/sharrre/1.3.5/sharrre.php',
  click: function(api, options){
    api.simulateClick();
    api.openPopup('googlePlus');
  }
});
$('#kakaostory').sharrre({
  share: {
    twitter: true // 여기서 twitter 는 트릭
  },
  enableHover: false,
  enableTracking: false,
 template : '<a href="#" class="box"><div class="share"><img src="'+rooturl+'/widgets/<?php echo $wdgvar['widget_path']?>/ks_logo.png" alt="카카오스토리 로고"/></div></a>',
 click: function(api, options){
    api.simulateClick();
    executeKakaoStoryLink(); // 아래 카카오 스토리 링크 함수 호출
  }
});
$('#kakaotalk').sharrre({
  share: {
    twitter: true // 여기서 twitter 는 트릭
  },
  enableHover: false,
  enableTracking: false,
 template : '<a href="#" class="box"><div class="share"><img src="'+rooturl+'/widgets/<?php echo $wdgvar['widget_path']?>/kt_logo.png" alt="카카오톡 로고"/></div></a>',
 click: function(api, options){
    api.simulateClick();
    executeKakaoLink(); // 아래 카카오톡 링크 함수 호출 
  }
});

//############  카카오톡 & 카카오 스토리  링크 내용 ########################################

// 카톡 링크 
 Kakao.init('928b2975c63f16a7093a7ba21b9a7300');//사용할 앱의 Javascript 키를 설정해 주세요.
 function executeKakaoLink() {
    var _tit ='<?php echo $_WTIT?> ';
    var _url = '<?php echo $_link_url?>';
    var _br  = '\r\n';

     if(!navigator.userAgent.match(/(android)|(iphone)|(ipod)|(ipad)/i)){
         alert('이 기능은 모바일에서만 사용할 수 있습니다.');
     }else{
         Kakao.Link.sendTalkLink({
         installTalk : true,
         label: _tit+_url+_br, // 링크주소는 앱에서 등록해야 하므로 앱 등록하지 않고 링크를 보내기 위해서 라벨에 보낸다.
         image: {
             src: '<?php echo strip_tags($g['meta_img'])?>',
             width: '300',
             height: '200'
          }
          });
     } 

 }
 // 카카오스토리 링크 
 function executeKakaoStoryLink()
 { 
    var _url='<?php echo $_link_url?>';
     if(!navigator.userAgent.match(/(android)|(iphone)|(ipod)|(ipad)/i)){
        window.open("https://story.kakao.com/share?url="+encodeURIComponent(_url ), "", "toolbar=0, status=0, width=900, height=500");
     }else{
        kakao.link("story").send({
            post : "<?php echo $_link_url?>", // url
            appid : "<?php echo $_HS['name']?>", // 사이트명
            appver : "", // 버전 
            appname : "<?php echo strip_tags($g['meta_tit'])?>", // 사이트 타이틀
            urlinfo : JSON.stringify({title:"<?php echo strip_tags($g['meta_tit'])?>", desc:"<?php echo strip_tags($g['meta_des'])?>", imageurl:["<?php echo strip_tags($g['meta_img'])?>"], type:"article"})
        });
     }   
 }
</script>
<?php if($wdgvar['wdg_position']=='left'):?>
  <style>
   .sharrre-widget-wrap .box {margin-right: <?php echo $wdgvar['icon_m']?>px}
  </style>
<?php else:?>
   <style>
   .sharrre-widget-wrap .box {margin-left: <?php echo $wdgvar['icon_m']?>px}
  </style> 
<?php endif?>

<style type="text/css">
  .sharrre-widget-wrap {
    float:<?php echo $wdgvar['wdg_position']?>;
  }
  .sharrre{
    float:left;
  }
  .sharrre .box a:hover{
    text-decoration:none;
  }
 .sharrre-container {
    border-radius: 4px;
    float: right;
    margin-right: -100px;
    padding: 0 10px;
    width: 50px;
}
.sharrre-container span {
    color: #aaa;
    display: block;
    font-size: 11px;
    text-align: center;
    text-transform: uppercase;
}
.sharrre {
    padding: 10px 0 0;
}

#kakaotalk a img {width:17px;height:17px;}
#kakaostory a img {width:8px;height:12px;}

.sharrre .box {
    display: block;
    width: <?php echo $wdgvar['icon_w']?>px;
}

.sharrre .box {
    border-radius: <?php echo $wdgvar['icon_r']?$wdgvar['icon_r']:0?>%;
    color: #fff !important;
    display: block;
    float: left;
    height: 34px;
    line-height: 34px;
    padding: 0;
    text-align: center;
    transition: all 0.4s ease 0s;
    width: 34px;
}
.sharrrre .box i {
    margin-top: 2px;
}
.sharrrre .box:hover {
    background: none repeat scroll 0 0 #444;
    color: #fff;
}
.sharrrre .box {
    color: #fff;
}
#youtube a {
    background: none repeat scroll 0 0 #c9322b;
}
#rss a {
    background: none repeat scroll 0 0 #ef922f;
}
#twitter a {
    background: none repeat scroll 0 0 #40bff5;
}
#facebook a {
    background: none repeat scroll 0 0 #5d82d1;
}
#googleplus a {
    background: none repeat scroll 0 0 #eb5e4c;
}
#vimeo a {
    background: none repeat scroll 0 0 #35c6ea;
}
#dribbble a {
    background: none repeat scroll 0 0 #f7659c;
}
#tumblr a {
    background: none repeat scroll 0 0 #426d9b;
}
#instagram a {
    background: none repeat scroll 0 0 #91653f;
}
#flickr a {
    background: none repeat scroll 0 0 #ff48a3;
}
#pinterest a {
    background: none repeat scroll 0 0 #e13138;
}
#linkedin a {
    background: none repeat scroll 0 0 #238cc8;
}
#github a {
    background: none repeat scroll 0 0 #b5a470;
}
#email a {
    background: none repeat scroll 0 0 #1d90dd;
}
#behance a {
    background: none repeat scroll 0 0 #1879fd;
}
#skype a {
    background: none repeat scroll 0 0 #13c1f3;
}
#soundcloud a {
    background: none repeat scroll 0 0 #ff7e30;
}
#stumbleupon a {
    background: none repeat scroll 0 0 #ff5c30;
}
#dropbox a {
    background: none repeat scroll 0 0 #3476e4;
}
#foursquare a {
    background: none repeat scroll 0 0 #0bbadf;
}
#reddit a {
    background: none repeat scroll 0 0 #ff4400;
}
#kakaotalk a  {
    background: none repeat scroll 0 0 #ffeb00;
}

#kakaostory a  {
    background: none repeat scroll 0 0 #ffcc33;
}
.sharrre a:hover {background: #444 !important;}
</style>

