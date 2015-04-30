<!-- katalk js -->
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<!-- kakaostory js -->
<script src="http://kakao.github.io/kakaolink-web/kakao.link.js"></script>
<div id="<?php echo $wdgvar['widget_id']?>-<?php echo $wdgvar['theme']?>" role="group" class="btn-group btn-group-sm">
       <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
            보내기
          <span class="caret"></span>
      </button>
      <ul role="menu" class="dropdown-menu dropdown-menu-<?php echo $wdgvar['wdg_position']?>">
      <?php if(in_array('t',$icon_arr)):?>
           <li id="twitter" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="Tweet"></li>
      <?php endif?>
      <?php if(in_array('f',$icon_arr)):?>
         <li id="facebook" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="Like"></li>
      <?php endif?>
      <?php if(in_array('g',$icon_arr)):?>
         <li id="googleplus" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="+1"></li>
      <?php endif?>
      <?php if(in_array('ks',$icon_arr)):?>
         <li id="kakaostory" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="ka-story"></li>
      <?php endif?>
      <?php if(in_array('kt',$icon_arr)):?>
         <li id="kakaotalk" data-url="<?php echo $_link_url?>" data-text="<?php echo $_WTIT?>" data-title="ka-talk"></li>
      <?php endif?>
    </ul>
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
 template : '<a href="#">트위터 <span class="badge count">{total}</span></a>',
   <?php if($wdgvar['hide_count']=='yes'):?>
  render: function(api, options){ // 카운트 숨기기 
      $('.count').hide();
  },
  <?php endif?>
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
  template : '<a href="#">페이스북 <span class="badge count">{total}</span></a>',
 <?php if($wdgvar['hide_count']=='yes'):?>
  render: function(api, options){ // 카운트 숨기기 
      $('.count').hide();
  },
  <?php endif?>
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
  template : '<a href="#">구글+ <span class="badge count">{total}</span></a>',
  <?php if($wdgvar['hide_count']=='yes'):?>
  render: function(api, options){ // 카운트 숨기기 
      $('.count').hide();
  },
  <?php endif?>
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
 template : '<a href="#">카카오스토리</a>',
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
 template : '<a href="#">카카오톡</a>',
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


