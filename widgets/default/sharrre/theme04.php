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
 <?php if($wdgvar['hide_count']=='yes'):?>
  render: function(api, options){ // 카운트 숨기기 
      $('.count').hide();
  },
  <?php endif?>
  urlCurl: rooturl+'/plugins/sharrre/1.0.1/sharrre.php',
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
  .sharrre .count {
    color:#525b67;
    display:block;
    font-size:18px;
    font-weight:bold;
    line-height:40px;
    height:<?php echo $wdgvar['icon_h']+10?>px;
    position:relative;
    text-align:center;
    width:<?php echo $wdgvar['icon_w']?>px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    border:1px solid #b2c6cc;
    background: #fbfbfb; /* Old browsers */
    background: -moz-linear-gradient(top, #fbfbfb 0%, #f6f6f6 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #fbfbfb 0%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #fbfbfb 0%,#f6f6f6 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #fbfbfb 0%,#f6f6f6 100%); /* IE10+ */
    background: linear-gradient(top, #fbfbfb 0%,#f6f6f6 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
  }
  .sharrre .count:before, .sharrre .count:after {
  	content:'';
  	display:block;
  	position:absolute;
  	left:49%;
  	width:0;
  	height:0;
  }
  .sharrre .count:before {
  	border:solid 7px transparent;
  	border-top-color:#b2c6cc;
  	margin-left:-7px;
  	bottom: -14px;
  }
  .sharrre .count:after {
  	border:solid 6px transparent;
  	margin-left:-6px;
  	bottom:-12px;
  	border-top-color:#fbfbfb;
  }
  .sharrre .share {
    color:#FFFFFF;
    display:block;
    font-size:12px;
    font-weight:bold;
    height:<?php echo $wdgvar['icon_h']?>px;
    line-height:30px;
    margin-top:8px;
    padding:0;
    text-align:center;
    text-decoration:none;
    width:<?php echo $wdgvar['icon_w']?>px; 
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px; 
  }
  #twitter .share {
    text-shadow: 1px 0px 0px #0077be;
    filter: dropshadow(color=#0077be, offx=1, offy=0); 
    border:1px solid #0075c5;
    background: #26c3eb;
    background: -moz-linear-gradient(top, #26c3eb 0%, #26b3e6 50%, #00a2e1 51%, #0080d6 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#26c3eb), color-stop(50%,#26b3e6), color-stop(51%,#00a2e1), color-stop(100%,#0080d6)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #26c3eb 0%,#26b3e6 50%,#00a2e1 51%,#0080d6 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #26c3eb 0%,#26b3e6 50%,#00a2e1 51%,#0080d6 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #26c3eb 0%,#26b3e6 50%,#00a2e1 51%,#0080d6 100%); /* IE10+ */
    background: linear-gradient(top, #26c3eb 0%,#26b3e6 50%,#00a2e1 51%,#0080d6 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#26c3eb', endColorstr='#0080d6',GradientType=0 ); /* IE6-9 */
    box-shadow: 0 1px 4px #DDDDDD, 0 1px 0 #5cd3f1 inset;
  }
  #facebook .share {
    text-shadow: 1px 0px 0px #26427e;
    filter: dropshadow(color=#26427e, offx=1, offy=0); 
    border:1px solid #24417c;
    background: #5582c9; /* Old browsers */
    background: -moz-linear-gradient(top, #5582c9 0%, #33539a 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5582c9), color-stop(100%,#33539a)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #5582c9 0%,#33539a 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #5582c9 0%,#33539a 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #5582c9 0%,#33539a 100%); /* IE10+ */
    background: linear-gradient(top, #5582c9 0%,#33539a 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5582c9', endColorstr='#33539a',GradientType=0 ); /* IE6-9 */
    box-shadow: 0 1px 4px #DDDDDD, 0 1px 0 #80a1d6 inset;
  }
  #googleplus .share {
    text-shadow: 1px 0px 0px #222222;
    filter: dropshadow(color=#222222, offx=1, offy=0); 
    border:1px solid #262626;
    background: #6d6d6d; /* Old browsers */
    background: -moz-linear-gradient(top, #6d6d6d 0%, #434343 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#434343)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #6d6d6d 0%,#434343 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #6d6d6d 0%,#434343 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #6d6d6d 0%,#434343 100%); /* IE10+ */
    background: linear-gradient(top, #6d6d6d 0%,#434343 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6d6d6d', endColorstr='#434343',GradientType=0 ); /* IE6-9 */
    box-shadow: 0 1px 4px #DDDDDD, 0 1px 0 #929292 inset;
  }
</style>

