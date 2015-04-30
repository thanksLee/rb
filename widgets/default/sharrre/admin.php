<?php
$icon_arr=explode('|',$wdgvar['icon_arr']); // 링크개체  배열 
?>
<div id="mjointbox">
	<h5>
		<i class="fa fa-info-circle"></i>
		이 위젯(<strong><?php echo getFolderName($g['path_widget'].$swidget)?></strong>)을 추가하시겠습니까?
	</h5>

	<form name="procform" class="form-horizontal rb-form" role="form">
		<div class="form-group">
			<label class="col-sm-3 control-label">항목 선택<small class="text-muted"><a data-tooltip="tooltip" title="노출할 Sharr 버튼 항목을 선택해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
			<div class="col-sm-8">
				 <label class="checkbox-inline"><input type="checkbox" name="icon_arr[]" <?php if(in_array('f',$icon_arr)):?>checked<?php endif?> id="f" value="f">페이스북 </label>
				 <label class="checkbox-inline"><input type="checkbox" name="icon_arr[]" <?php if(in_array('t',$icon_arr)):?>checked<?php endif?> id="t" value="t">트위터 </label>
				 <label class="checkbox-inline"><input type="checkbox" name="icon_arr[]" <?php if(in_array('g',$icon_arr)):?>checked<?php endif?> id="g" value="g">구글+1 </label>
				 <label class="checkbox-inline"><input type="checkbox" name="icon_arr[]" <?php if(in_array('kt',$icon_arr)):?>checked<?php endif?> id="kt" value="kt">카카오톡 </label>
				 <label class="checkbox-inline" style="margin-left:0;"><input type="checkbox" name="icon_arr[]" <?php if(in_array('ks',$icon_arr)):?>checked<?php endif?> id="ks" value="ks">카카오스토리 </label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">테마 선택<small class="text-muted"><a data-tooltip="tooltip" title="버튼 테마를 선택해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
			<div class="col-sm-8">
				<p> 
						<label class="count-check sha-drop">
							 <input type="radio" name="theme" value="theme01" class="theme_input" <?php if($wdgvar['theme']=='theme01'):?>checked<?php endif?>/>
						    <img src="<?php echo $g['path_widget'].$swidget?>/theme01.gif" alt="theme01" />
					   </label> 
						<span class="hide-count pull-right text-muted small <?php if($wdgvar['theme']!='theme01'):?>hide<?php endif?>">
                      <label><input type="checkbox" name="hide_count" value="yes" <?php if($wdgvar['hide_count']=='yes'):?>checked<?php endif?>> 카운트 숨기기</label> <br/>
             		</span>
				</p>
				<p> 
						<label class="count-check need-num">
							<input type="radio" name="theme" value="theme02" class="theme_input" <?php if($wdgvar['theme']=='theme02'):?>checked<?php endif?>/>
						   <img src="<?php echo $g['path_widget'].$swidget?>/theme02.gif" alt="theme02" />
						</label>
						<span class="hide-count pull-right text-muted small <?php if($wdgvar['theme']!='theme02'):?>hide<?php endif?>" >
                      <label><input type="checkbox" name="hide_count" value="yes" <?php if($wdgvar['hide_count']=='yes'):?>checked<?php endif?>> 카운트 숨기기</label> <br/>
                       <span class="text-muted">(카톡,카스 노출 안됨)</span>
						</span>
				</p>
				<p> 
						<label class="count-check only-icon need-num">
							 <input type="radio" name="theme" value="theme03" class="theme_input" <?php if($wdgvar['theme']=='theme03'):?>checked<?php endif?>/>
						    <img src="<?php echo $g['path_widget'].$swidget?>/theme03.gif" alt="theme03" />
						</label>
						<span class="hide-count no-count pull-right text-muted small" >
                       (카운트 없음)
						</span>
				</p>	
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">위젯 위치<small class="text-muted"><a data-tooltip="tooltip" title="전체 위젯의 위치를 선택해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
			<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" value="left" name="wdg_position" <?php if($wdgvar['wdg_position']=='left'|| $wdgvar['wdg_position']==''):?>checked<?php endif?>>좌측</label>
	         <label class="radio-inline"><input type="radio" value="right" name="wdg_position" <?php if($wdgvar['wdg_position']=='right'):?>checked<?php endif?>>우측</label>
         </div>
		</div>
		<div class="num-group <?php if($wdgvar['theme']=='theme01'):?>hide<?php endif?>">
				<div class="form-group ">
					<label class="col-sm-3 control-label">버튼 넓이<small class="text-muted"><a data-tooltip="tooltip" title="버튼 넓이를 입력해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
					<div class="col-sm-3">
						 <div class="input-group">
							<input type="text" name="icon_w" value="<?php echo $wdgvar['icon_w']?$wdgvar['icon_w']:70?>" class="form-control">
							<span class="input-group-addon">px</span>
						</div>
		         </div>
					<label class="col-sm-3 control-label">버튼 높이<small class="text-muted"><a data-tooltip="tooltip" title="버튼 높이를 입력해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
					<div class="col-sm-3">
						 <div class="input-group">
							<input type="text" name="icon_h" value="<?php echo $wdgvar['icon_h']?$wdgvar['icon_h']:30?>" class="form-control">
							<span class="input-group-addon">px</span>
						</div>
		         </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">버튼 간격<small class="text-muted"><a data-tooltip="tooltip" title="버튼의 좌우 간격을 입력해주세요"><i class="fa fa-question-circle fa-fw"></i></a></small></label>
					<div class="col-sm-3">
						 <div class="input-group">
						  	<input type="text" name="icon_m" value="<?php echo $wdgvar['icon_m']!=''?$wdgvar['icon_m']:10?>" class="form-control">
							<span class="input-group-addon">px</span>
						</div>
		         </div>
					<label class="col-sm-3 control-label radius-setting <?php if($wdgvar['theme']!='theme03'):?>hide<?php endif?>">버튼 모서리<small class="text-muted"><a data-tooltip="tooltip" title="버튼의 모서리 둥금비율을 입력해주세요 <br/>0%는 정사각형, 50% 는 원형 "><i class="fa fa-question-circle fa-fw"></i></a></small></label>
					<div class="col-sm-3 radius-setting <?php if($wdgvar['theme']!='theme03'):?>hide<?php endif?>">
						 <div class="input-group">
						  	<input type="text" name="icon_r" value="<?php echo $wdgvar['icon_r']!=''?$wdgvar['icon_r']:50?>" class="form-control">
							<span class="input-group-addon">%</span>
						</div>
		         </div>
				</div>	
		  </div> <!--.num-group-->			
	</form>
</div>

<style>
#mjointbox {padding-bottom:50px;}
#mjointbox h5 {border-bottom:#dfdfdf dashed 1px;padding:12px 0 15px 0;margin:0 0 30px 0;}
#mjointbox .theme_input {margin-right: 15px;}
#mjointbox .hide-count {padding-top: 5px;}
#mjointbox label {cursor: pointer;}
</style>

<script>
// 카운트 테마 선택시 카운트 숨기기 옵션 보이기
$('.count-check').on('click',function(){
	 $(this).parent().parent().find('.hide-count').addClass('hide'); // 전체 .hide-count 에 hide 클래스 추가 
	 $(this).parent().parent().find('input[name="hide_count"]').attr('checked',false); // 기존 카운트 숨기기 체크 초기화 
	 $('.radius-setting').addClass('hide'); // 기존 카운트 숨기기 체크 초기화 
	
	 if($(this).parent().has('.hide-count').length){ // .hide-count 엘리먼트가 있는지 체크 
	 	 $(this).parent().find('.hide-count').removeClass('hide');    
	 }	 
})

// 테마 3 only-icon 형 선택시 border-radius 선택 항목 보이기 
$('.only-icon').on('click',function(){
   $('.radius-setting').removeClass('hide');
});

// 테마 1 drop down 스타일 선택시 num-group 숨기기
$('.sha-drop').on('click',function(){
   $('.num-group').addClass('hide');
});

// 테마 2,3 스타일 선택시 num-group 보이기 
$('.need-num').on('click',function(){
   $('.num-group').removeClass('hide');
});



//위젯코드 리턴
function widgetCode(n)
{
	var icon_arr=$("input[name='icon_arr[]']:checked").map( function() { return $(this).val(); } ).get(); // 선택한 sharrre 버튼 배열
	icon_arr=icon_arr.toString();
	icon_arr=icon_arr.replace(/,/g,'|'); // 아래 변수 저장하는 과정에서 혼동을 피하기 위해 | 로 변경을 한다.
   var theme=$('input[name="theme"]:checked').val(); // 테마 
	var wdg_position=$('input[name="wdg_position"]:checked').val(); // 위젯 위치 
	var f = document.procform;
	var widgetName = "<?php echo $swidget?>"; // 위젯명칭
	var widgetInfo = "";
   if(icon_arr!='') widgetInfo+= "'icon_arr'=>'"+icon_arr+"',";
   if(theme) widgetInfo+= "'theme'=>'"+theme+"',";
   if(f.hide_count){
     	var hide_count_val;
      if($('input[name="hide_count"]').is(':checked')==true) {hide_count_val='yes';}
      else {hide_count_val='';}
     widgetInfo+= "'hide_count'=>'"+hide_count_val+"',";

   } 
   if(f.icon_w) widgetInfo+= "'icon_w'=>'"+f.icon_w.value+"',";
   if(f.icon_h) widgetInfo+= "'icon_h'=>'"+f.icon_h.value+"',";
   if(f.icon_m) widgetInfo+= "'icon_m'=>'"+f.icon_m.value+"',";
   if(f.icon_r) widgetInfo+= "'icon_r'=>'"+f.icon_r.value+"',";
   if(wdg_position) widgetInfo+= "'wdg_position'=>'"+wdg_position+"'";


	if (n) return "<img alt=\"getWidget('"+widgetName+"',array("+widgetInfo+"))\" class=\"rb-widget-edit-img\" src=\"./_core/images/blank.gif\" />"; // 에디터삽입 위젯 이미지 코드
	else return "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>"; // PHP 위젯함수 코드
}
//위젯 삽입하기
function saveCheck(n)
{
	var icon_arr=$("input[name='icon_arr[]']:checked").map( function() { return $(this).val(); } ).get(); // 선택한 sharrre 버튼 배열
	icon_arr=icon_arr.toString();
	icon_arr=icon_arr.replace(/,/g,'|'); // 아래 변수 저장하는 과정에서 혼동을 피하기 위해 | 로 변경을 한다.
	var theme=$('input[name="theme"]:checked').val(); // 테마 
	var hide_count_val;
   if($('input[name="hide_count"]').is(':checked')==true) {hide_count_val='yes';}
   else {hide_count_val='';}
   var wdg_position=$('input[name="wdg_position"]:checked').val(); // 위젯 위치 
	if (n) parent.InserHTMLtoEditor(widgetCode(n));
	else {
		var f = document.procform;
		<?php if(!$option):?>
		var i;
		var n = 0;
		for (i = 0; i < parent.maxTiles; i++)
		if (parent.moveObject[i].style.display=='block') n = i+1;
		<?php else:?>
		var n = <?php echo $dropfield?>;
		<?php endif?>

		<?php if(!$option):?>
		parent.createTile('400px','150px','0px','0px'); // 위젯블럭 사이즈 및 위치(너비,높이,top,left)
		<?php endif?>
		parent.blocktitle[n] = 'Sharre 공유링크 위젯'; // 위젯블럭 타이틀
		parent.blockarray[n] = "<?php echo $swidget?>,icon_arr^" + icon_arr+",theme^"+theme+",hide_count^"+hide_count_val+",icon_w^"+f.icon_w.value+",icon_h^"+f.icon_h.value+",icon_m^"+f.icon_m.value+",icon_r^"+f.icon_r.value+",wdg_position^"+wdg_position; // 위젯변수 셋팅
	  parent.getId('wtitle'+n).innerHTML = parent.blocktitle[n];
	}
}
</script>
