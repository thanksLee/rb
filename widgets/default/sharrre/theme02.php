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
  url : '<?php echo $_link_url?>',
  enableHover: false,
  enableTracking: false,
  //shorterTotal: false, // count 숫자 k 로 안나타내기 할 때 사용 
  //buttons: { twitter: {via: 'kimsq.com'}}, // 트위터 계정을 포함시켜 링크 보낼 때 사용 
  template : '<a href="#" class="box"><div href="#" class="count">{total}</div><div class="share"><i class="fa fa-twitter"></i></div></a>',
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
  url : '<?php echo $_link_url?>',
  enableHover: false,
  enableTracking: false,
  template : '<a href="#" class="box"><div href="#" class="count">{total}</div><div class="share"><i class="fa fa-facebook-square"></i></div></a>',
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
  url : '<?php echo $_link_url?>',
  enableHover: false,
  enableTracking: false,
  buttons: {  //settings for buttons
      googlePlus : {  //http://www.google.com/webmasters/+1/button/
        lang: 'ko',
      }
  }, // 한글 패치     
  template : '<a href="#" class="box"><div href="#" class="count">{total}</div><div class="share"><i class="fa fa-google-plus-square"></i></div></a>',
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
.sharrre .box {
    display: block;
    width: <?php echo $wdgvar['icon_w']?>px;
}
.sharrre .count {
    background: none repeat scroll 0 0 #eee;
    border-radius: 4px;
    color: #333;
    display: block;
    font-size: 15px;
    font-weight: 600;
    line-height: 30px;
    position: relative;
    text-align: center;
}
.sharrre .count::after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee transparent transparent;
    border-image: none;
    border-right: 6px solid transparent;
    border-style: solid;
    border-width: 6px;
    bottom: -12px;
    content: "";
    display: block;
    height: 0;
    left: 49%;
    margin-left: -6px;
    position: absolute;
    width: 0;
}
.sharrre .share {
    display: block;
    font-size: 28px;
    font-weight: 600;
    line-height: 32px;
    margin-top: 12px;
    padding: 0;
    text-align: center;
    text-decoration: none;
}
.sharrre .box .share, .sharrre .box .count {
    transition: all 0.3s ease 0s;
}
.sharrre .box:hover .share, .sharrre .box:hover .count {
    color: #444 !important;
}
#twitter.sharrre .share, #twitter.sharrre .box .count {
    color: #00acee;
}
#facebook.sharrre .share, #facebook.sharrre .box .count {
    color: #3b5999;
}
#googleplus.sharrre .share, #googleplus.sharrre .box .count {
    color: #cd483c;
}
#pinterest.sharrre .share, #pinterest.sharrre .box .count {
    color: #ca2128;
}
</style>

