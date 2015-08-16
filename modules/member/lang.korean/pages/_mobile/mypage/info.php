<?php include_once $g['dir_module_skin'].'_menu.php'?>





<div id="pages_join">

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $m?>" />
	<input type="hidden" name="front" value="<?php echo $front?>" />
	<input type="hidden" name="a" value="info_update" />
	<input type="hidden" name="check_nic" value="<?php echo $my['nic']?1:0?>" />
	<input type="hidden" name="check_email" value="<?php echo $my['email']?1:0?>" />


	<div class="msg">
		<span class="b">(*)</span> 표시가 있는 항목은 반드시 입력해야 합니다.<br />
		허위로 작성된 정보일 경우 승인이 보류되거나 임의로 삭제처리될 수 있으니 주의해 주세요.
	</div>


	<table summary="회원가입 기본정보를 입력받는 표입니다.">
	<caption>회원가입 기본정보</caption> 
	<colgroup> 
	<col width="80"> 
	<col> 
	</colgroup> 
	<thead>
	<tr>
	<th scope="col"></th>
	<th scope="col"></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td class="key">이름(실명)<span>*</span></td>
	<td>
		<input type="text" name="name" value="<?php echo $my['name']?>" maxlength="10" class="input disabled" readonly="readonly" />
	</td>
	</tr>
	<?php if($d['member']['form_nic']):?>
	<tr>
	<td class="key">닉네임<?php if($d['member']['form_nic_p']):?><span>*</span><?php endif?></td>
	<td>
		<input type="text" name="nic" value="<?php echo $my['nic']?>" maxlength="20" class="input" onblur="sameCheck(this,'hLayernic');" />
		<span class="hmsg" id="hLayernic"></span>
		<div>닉네임은 자신을 표현할 수 있는 단어로 20자까지 자유롭게 사용할 수 있습니다.</div>
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_birth']):?>
	<tr>
	<td class="key">생년월일<?php if($d['member']['form_birth_p']):?><span>*</span><?php endif?></td>
	<td>
		<select name="birth_1">
		<option value="">년도</option>
		<?php for($i = substr($date['today'],0,4); $i > 1930; $i--):?>
		<option value="<?php echo $i?>"<?php if($my['birth1']==$i):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
		<select name="birth_2">
		<option value="">월</option>
		<?php $birth_2=substr($my['birth2'],0,2)?>
		<?php for($i = 1; $i < 13; $i++):?>
		<option value="<?php echo sprintf('%02d',$i)?>"<?php if($birth_2==$i):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
		<select name="birth_3">
		<option value="">일</option>
		<?php $birth_3=substr($my['birth2'],2,2)?>
		<?php for($i = 1; $i < 32; $i++):?>
		<option value="<?php echo sprintf('%02d',$i)?>"<?php if($birth_3==$i):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
		<input type="checkbox" name="birthtype" value="1"<?php if($my['birthtype']):?> checked="checked"<?php endif?> />음력<br />
	</td>
	</tr>
	<?php endif?>
	<?php if($d['member']['form_sex']):?>
	<tr>
	<td class="key">성별<?php if($d['member']['form_sex_p']):?><span>*</span><?php endif?></td>
	<td class="shift">
		<div class="shift">
		<input type="radio" name="sex" value="1"<?php if($my['sex']==1):?> checked="checked"<?php endif?> />남성
		<input type="radio" name="sex" value="2"<?php if($my['sex']==2):?> checked="checked"<?php endif?> />여성
		</div>
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_qa']):?>
	<tr>
	<td class="key">비번찾기 질문<?php if($d['member']['form_qa_p']):?><span>*</span><?php endif?></td>
	<td>
		<input type="text" name="pw_q" value="<?php echo $my['pw_q']?>" class="input pw_q2" />
	</td>
	</tr>

	<tr>
	<td class="key">비번찾기 답변<?php if($d['member']['form_qa_p']):?><span>*</span><?php endif?></td>
	<td>
		<input type="text" name="pw_a" value="<?php echo $my['pw_a']?>" class="input" />
		<div>
		비밀번호찾기 질문에 대한 답변을 혼자만 알 수 있는 단어나 기호로 입력해 주세요.<br />
		비밀번호를 찾을 때 필요하므로 반드시 기억해 주세요.
		</div>
	</td>
	</tr>
	<?php endif?>

	<tr>
	<td class="key">이메일<span>*</span></td>
	<td>
		<input type="email" name="email" value="<?php echo $my['email']?>" class="input emailx" onblur="sameCheck(this,'hLayeremail');" />
		<span class="hmsg" id="hLayeremail"></span>
		<div>주로 사용하는 이메일 주소를 입력해 주세요. 비밀번호 잊어버렸을 때 확인 받을 수 있습니다.</div>
		<div class="remail"><input type="checkbox" name="remail" value="1"<?php if($my['mailing']):?> checked="checked"<?php endif?> />뉴스레터나 공지이메일을 수신받음</div>
	</td>
	</tr>

	<?php if($d['member']['form_home']):?>
	<tr>
	<td class="key">홈페이지<?php if($d['member']['form_home_p']):?><span>*</span><?php endif?></td>
	<td>
		<input type="url" name="home" value="<?php echo $my['home']?>" class="input emailx" />
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_tel2']):?>
	<tr>
	<td class="key">휴대전화<?php if($d['member']['form_tel2_p']):?><span>*</span><?php endif?></td>
	<td><?php $tel2=explode('-',$my['tel2'])?>
		<input type="tel" name="tel2_1" value="<?php echo $tel2[0]?>" maxlength="3" size="4" class="input" />-
		<input type="tel" name="tel2_2" value="<?php echo $tel2[1]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="tel2_3" value="<?php echo $tel2[2]?>" maxlength="4" size="4" class="input" />
		<div class="remail"><input type="checkbox" name="sms" value="1"<?php if($my['sms']):?> checked="checked"<?php endif?> />알림문자를 받음</div>
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_tel1']):?>
	<tr>
	<td class="key">전화번호<?php if($d['member']['form_tel1_p']):?><span>*</span><?php endif?></td>
	<td><?php $tel1=explode('-',$my['tel1'])?>
		<input type="tel" name="tel1_1" value="<?php echo $tel1[0]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="tel1_2" value="<?php echo $tel1[1]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="tel1_3" value="<?php echo $tel1[2]?>" maxlength="4" size="4" class="input" />
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_addr']):?>
	<tr>
	<td class="key">주소<?php if($d['member']['form_addr_p']):?><span>*</span><?php endif?></td>
	<td>
		<div id="addrbox"<?php if($my['addr0']=='해외'):?> class="hide"<?php endif?>>
		<div>
		<input type="number" name="zip" id="zip" value="<?php echo $my['zip']?>" maxlength="6" size="6" readonly="readonly" class="input" />
		<input type="button" value="우편번호" class="btngray btn" onclick="openDaumPostcode('zip','addr1','addr2');" />
		</div>
		<div><input type="text" name="addr1" id="addr1" value="<?php echo $my['addr1']?>" readonly="readonly" class="input addrx" /></div>
		<div><input type="text" name="addr2" id="addr2" value="<?php echo $my['addr2']?>" class="input addrx" /></div>
		</div>
		<?php if($d['member']['form_foreign']):?>
		<div class="remail shift">
		<?php if($my['addr0']=='해외'):?>
		<input type="checkbox" name="foreign" value="1" checked="checked" onclick="foreignChk(this);" /><span id="foreign_ment">해외거주자 입니다.</span>
		<?php else:?>
		<input type="checkbox" name="foreign" value="1" onclick="foreignChk(this);" /><span id="foreign_ment">해외거주자일 경우 체크해 주세요.</span>
		<?php endif?>
		</div>
		<?php endif?>
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_job']):?>
	<tr>
	<td class="key">직업<?php if($d['member']['form_job_p']):?><span>*</span><?php endif?></td>
	<td>
		<select name="job">
		<option value="">&nbsp;+ 선택하세요</option>
		<option value="">------------------</option>
		<?php $_job=file($g['dir_module'].'var/job.txt')?>
		<?php foreach($_job as $_val):?>
		<option value="<?php echo trim($_val)?>"<?php if(trim($_val)==$my['job']):?> selected="selected"<?php endif?>>ㆍ<?php echo trim($_val)?></option>
		<?php endforeach?>
		</select>
	</td>
	</tr>
	<?php endif?>

	<?php if($d['member']['form_marr']):?>
	<tr>
	<td class="key">결혼기념일<?php if($d['member']['form_marr_p']):?><span>*</span><?php endif?></td>
	<td>
		<select name="marr_1">
		<option value="">년도</option>
		<?php for($i = substr($date['today'],0,4); $i > 1930; $i--):?>
		<option value="<?php echo $i?>"<?php if($i==$my['marr1']):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
		<select name="marr_2">
		<option value="">월</option>
		<?php for($i = 1; $i < 13; $i++):?>
		<option value="<?php echo sprintf('%02d',$i)?>"<?php if($i==substr($my['marr2'],0,2)):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
		<select name="marr_3">
		<option value="">일</option>
		<?php for($i = 1; $i < 32; $i++):?>
		<option value="<?php echo sprintf('%02d',$i)?>"<?php if($i==substr($my['marr2'],2,2)):?> selected="selected"<?php endif?>><?php echo $i?></option>
		<?php endfor?>
		</select>
	</td>
	</tr>
	<?php endif?>


	<?php $_add = file($g['dir_module'].'var/add_field.txt')?>
	<?php foreach($_add as $_key):?>
	<?php $_val = explode('|',trim($_key))?>
	<?php if($_val[6]) continue?>
	<?php $_myadd1 = explode($_val[0].'^^^',$my['addfield'])?>
	<?php $_myadd2 = explode('|||',$_myadd1[1])?>

	<tr>
	<td class="key"><?php echo $_val[1]?><?php if($_val[5]):?><span>*</span><?php endif?></td>
	<td>
	<?php if($_val[2]=='text'):?>
	<input type="text" name="add_<?php echo $_val[0]?>" class="input" style="width:<?php echo $_val[4]?>px;" value="<?php echo $_myadd2[0]?>" />
	<?php endif?>
	<?php if($_val[2]=='password'):?>
	<input type="password" name="add_<?php echo $_val[0]?>" class="input" style="width:<?php echo $_val[4]?>px;" value="<?php echo $_myadd2[0]?>" />
	<?php endif?>
	<?php if($_val[2]=='select'): $_skey=explode(',',$_val[3])?>
	<select name="add_<?php echo $_val[0]?>" style="width:<?php echo $_val[4]?>px;">
	<option value="">&nbsp;+ 선택하세요</option>
	<?php foreach($_skey as $_sval):?>
	<option value="<?php echo trim($_sval)?>"<?php if(trim($_sval)==$_myadd2[0]):?> selected="selected"<?php endif?>>ㆍ<?php echo trim($_sval)?></option>
	<?php endforeach?>
	</select>
	<?php endif?>
	<?php if($_val[2]=='radio'): $_skey=explode(',',$_val[3])?>
	<div class="shift">
	<?php foreach($_skey as $_sval):?>
	<input type="radio" name="add_<?php echo $_val[0]?>" value="<?php echo trim($_sval)?>"<?php if(trim($_sval)==$_myadd2[0]):?> checked="checked"<?php endif?> /><?php echo trim($_sval)?>
	<?php endforeach?>
	</div>
	<?php endif?>
	<?php if($_val[2]=='checkbox'): $_skey=explode(',',$_val[3])?>
	<div class="shift">
	<?php foreach($_skey as $_sval):?>
	<input type="checkbox" name="add_<?php echo $_val[0]?>[]" value="<?php echo trim($_sval)?>"<?php if(strstr($_myadd2[0],'['.trim($_sval).']')):?> checked="checked"<?php endif?> /><?php echo trim($_sval)?>
	<?php endforeach?>
	</div>
	<?php endif?>
	<?php if($_val[2]=='textarea'):?>
	<textarea name="add_<?php echo $_val[0]?>" rows="5" style="width:<?php echo $_val[4]?>px;"><?php echo $_myadd2[0]?></textarea>
	<?php endif?>

	</tr>
	<?php endforeach?>

	</tbody>
	</table>


	<?php if($d['member']['form_comp']):?>
	<?php if($my['comp']) $myc = getDbData($table['s_mbrcomp'],'memberuid='.$my['uid'],'*')?>
	<?php $tel = explode('-',$myc['comp_tel'])?>
	<?php $fax = explode('-',$myc['comp_fax'])?>
	<div class="tt_comp">
	기업정보
	<?php if(!$my['comp']):?>
	<span class="tt_check">(<input type="checkbox" name="comp" value="1" />기업정보를 등록합니다)</span>
	<?php else:?>
	<input type="checkbox" name="comp" value="1" checked="checked" class="hide" />
	<?php endif?>	
	</div>

	<table summary="회원가입 기업정보를 입력받는 표입니다.">
	<caption>회원가입 기업정보</caption> 
	<colgroup> 
	<col width="80"> 
	<col> 
	</colgroup> 
	<thead>
	<tr>
	<th scope="col"></th>
	<th scope="col"></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td class="key">사업자번호<span>*</span></td>
	<td>
		<input type="number" name="comp_num_1" size="4" maxlength="3" class="input" value="<?php echo substr($myc['comp_num'],0,3)?>" /> -
		<input type="number" name="comp_num_2" size="3" maxlength="2" class="input" value="<?php echo substr($myc['comp_num'],3,2)?>" /> -
		<input type="number" name="comp_num_3" size="5" maxlength="5" class="input" value="<?php echo substr($myc['comp_num'],5,5)?>" />
		<input type="radio" name="comp_type" value="1"<?php if($myc['comp_type']==1||!$myc['comp_type']):?> checked="checked"<?php endif?> />개인
		<input type="radio" name="comp_type" value="2"<?php if($myc['comp_type']==2):?> checked="checked"<?php endif?> />법인
	</td>
	</tr>
	<tr>
	<td class="key">회사명<span>*</span></td>
	<td>
		<input type="text" name="comp_name" class="input" value="<?php echo $myc['comp_name']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">대표자명<span>*</span></td>
	<td>
		<input type="text" name="comp_ceo" class="input" value="<?php echo $myc['comp_ceo']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">업태<span>*</span></td>
	<td>
		<input type="text" name="comp_upte" class="input" value="<?php echo $myc['comp_upte']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">종목<span>*</span></td>
	<td>
		<input type="text" name="comp_jongmok" class="input" value="<?php echo $myc['comp_jongmok']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">대표전화<span>*</span></td>
	<td>
		<input type="tel" name="comp_tel_1" value="<?php echo $tel[0]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="comp_tel_2" value="<?php echo $tel[1]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="comp_tel_3" value="<?php echo $tel[2]?>" maxlength="4" size="4" class="input" />
	</td>
	</tr>
	<tr>
	<td class="key">팩스</td>
	<td>
		<input type="tel" name="comp_fax_1" value="<?php echo $fax[0]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="comp_fax_2" value="<?php echo $fax[1]?>" maxlength="4" size="4" class="input" />-
		<input type="tel" name="comp_fax_3" value="<?php echo $fax[2]?>" maxlength="4" size="4" class="input" />
	</td>
	</tr>
	<tr>
	<td class="key">소속부서</td>
	<td>
		<input type="text" name="comp_part" class="input" value="<?php echo $myc['comp_part']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">직책</td>
	<td>
		<input type="text" name="comp_level" class="input" value="<?php echo $myc['comp_level']?>" />
	</td>
	</tr>
	<tr>
	<td class="key">사업장주소<span>*</span></td>
	<td>
		<div>
		<input type="number" name="comp_zip" id="comp_zip" value="<?php echo $myc['comp_zip']?>" maxlength="6" size="6" readonly="readonly" class="input" />
		<input type="button" value="우편번호" class="btngray btn" onclick="openDaumPostcode('comp_zip','comp_addr1','comp_addr2');" />
		</div>
		<div><input type="text" name="comp_addr1" id="comp_addr1" value="<?php echo $myc['comp_addr1']?>" readonly="readonly" class="input addrx" /></div>
		<div><input type="text" name="comp_addr2" id="comp_addr2" value="<?php echo $myc['comp_addr2']?>" class="input addrx" /></div>
		</div>
	</td>
	</tr>
	</tbody>
	</table>
	<?php endif?>


	<div class="submitbox">
		<input type="submit" value="정보수정" class="btnblue" />
	</div>

	</form>

</div>

<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function openDaumPostcode(zip,addr1,addr2) {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById(zip).value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById(addr1).value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById(addr2).focus();
            }
        }).open();
    }
</script>

<script type="text/javascript">
//<![CDATA[
function foreignChk(obj)
{
	if (obj.checked == true)
	{
		getId('addrbox').style.display = 'none';
		getId('foreign_ment').innerHTML= '해외거주자 입니다.';
	}
	else {
		getId('addrbox').style.display = 'block';
		getId('foreign_ment').innerHTML= '해외거주자일 경우 체크해 주세요.';
	}
}
function sameCheck(obj,layer)
{

	if (!obj.value)
	{
		eval('obj.form.check_'+obj.name).value = '0';
		getId(layer).innerHTML = '';
	}
	else
	{
		if (obj.name == 'email')
		{
			if (!chkEmailAddr(obj.value))
			{
				obj.form.check_email.value = '0';
				obj.focus();
				getId(layer).innerHTML = '이메일형식이 아닙니다.';
				return false;
			}
		}

		frames._action_frame_<?php echo $m?>.location.href = '<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&a=same_check&fname=' + obj.name + '&fvalue=' + obj.value + '&flayer=' + layer;
	}
}
function saveCheck(f)
{

	<?php if($d['member']['form_nic_p']):?>
	if (f.check_nic.value == '0')
	{
		alert('닉네임을 확인해 주세요.');
		f.nic.focus();
		return false;
	}
	<?php endif?>
	<?php if($d['member']['form_birth']&&$d['member']['form_birth_p']):?>
	if (f.birth_1.value == '')
	{
		alert('생년월일을 지정해 주세요.');
		f.birth_1.focus();
		return false;
	}
	if (f.birth_2.value == '')
	{
		alert('생년월일을 지정해 주세요.');
		f.birth_2.focus();
		return false;
	}
	if (f.birth_3.value == '')
	{
		alert('생년월일을 지정해 주세요.');
		f.birth_3.focus();
		return false;
	}
	<?php endif?>
	<?php if($d['member']['form_sex']&&$d['member']['form_sex_p']):?>
	if (f.sex[0].checked == false && f.sex[1].checked == false)
	{
		alert('성별을 선택해 주세요.  ');
		return false;
	}
	<?php endif?>
	<?php if($d['member']['form_qa']&&$d['member']['form_qa_p']):?>
	if (f.pw_q.value == '')
	{
		alert('비밀번호 찾기 질문을 입력해 주세요.');
		f.pw_q.focus();
		return false;
	}
	if (f.pw_a.value == '')
	{
		alert('비밀번호 찾기 답변을 입력해 주세요.');
		f.pw_a.focus();
		return false;
	}
	<?php endif?>

	if (f.check_email.value == '0')
	{
		alert('이메일을 확인해 주세요.');
		f.email.focus();
		return false;
	}
	<?php if($d['member']['form_home']&&$d['member']['form_home_p']):?>
	if (f.home.value == '')
	{
		alert('홈페이지 주소를 입력해 주세요.');
		f.home.focus();
		return false;
	}
	<?php endif?>
	<?php if($d['member']['form_tel2']&&$d['member']['form_tel2_p']):?>
	if (f.tel2_1.value == '')
	{
		alert('휴대폰번호를 입력해 주세요.');
		f.tel2_1.focus();
		return false;
	}
	if (f.tel2_2.value == '')
	{
		alert('휴대폰번호를 입력해 주세요.');
		f.tel2_2.focus();
		return false;
	}
	if (f.tel2_3.value == '')
	{
		alert('휴대폰번호를 입력해 주세요.');
		f.tel2_3.focus();
		return false;
	}
	<?php endif?>

	<?php if($d['member']['form_tel1']&&$d['member']['form_tel1_p']):?>
	if (f.tel1_1.value == '')
	{
		alert('전화번호를 입력해 주세요.');
		f.tel1_1.focus();
		return false;
	}
	if (f.tel1_2.value == '')
	{
		alert('전화번호를 입력해 주세요.');
		f.tel1_2.focus();
		return false;
	}
	if (f.tel1_3.value == '')
	{
		alert('전화번호를 입력해 주세요.');
		f.tel1_3.focus();
		return false;
	}
	<?php endif?>
		
	<?php if($d['member']['form_addr']&&$d['member']['form_addr_p']):?>
	if (!f.foreign || f.foreign.checked == false)
	{
		if (f.addr1.value == '')
		{
			alert('주소를 입력해 주세요.');
			f.addr2.focus();
			return false;
		}
	}
	<?php endif?>


	<?php if($d['member']['form_job']&&$d['member']['form_job_p']):?>
	if (f.job.value == '')
	{
		alert('직업을 선택해 주세요.');
		f.job.focus();
		return false;
	}
	<?php endif?>

	<?php if($d['member']['form_marr']&&$d['member']['form_marr_p']):?>
	if (f.marr_1.value == '')
	{
		alert('결혼기념일을 지정해 주세요.');
		f.marr_1.focus();
		return false;
	}
	if (f.marr_2.value == '')
	{
		alert('결혼기념일을 지정해 주세요.');
		f.marr_2.focus();
		return false;
	}
	if (f.marr_3.value == '')
	{
		alert('결혼기념일을 지정해 주세요.');
		f.marr_3.focus();
		return false;
	}
	<?php endif?>

	var radioarray;
	var checkarray;
	var i;
	var j = 0;

	<?php foreach($_add as $_key):?>
	<?php $_val = explode('|',trim($_key))?>
	<?php if(!$_val[5]||$_val[6]) continue?>

	<?php if($_val[2]=='text' || $_val[2]=='password' || $_val[2]=='select' || $_val[2]=='textarea'):?>
	if (f.add_<?php echo $_val[0]?>.value == '')
	{
		alert('<?php echo $_val[1]?>이(가) <?php echo $_val[2]=='select'?'선택':'입력'?>되지 않았습니다.     ');
		f.add_<?php echo $_val[0]?>.focus();
		return false;
	}
	<?php endif?>
	<?php if($_val[2]=='radio'):?>
	j = 0;
	radioarray = f.add_<?php echo $_val[0]?>;
	for (i = 0; i < radioarray.length; i++)
	{
		if (radioarray[i].checked == true) j++;
	}
	if (!j)
	{
		alert('<?php echo $_val[1]?>이(가) 선택되지 않았습니다.     ');
		radioarray[0].focus();
		return false;
	}
	<?php endif?>
	<?php if($_val[2]=='checkbox'):?>
	j = 0;
	checkarray = document.getElementsByName("add_<?php echo $_val[0]?>[]");
	for (i = 0; i < checkarray.length; i++)
	{
		if (checkarray[i].checked == true) j++;
	}
	if (!j)
	{
		alert('<?php echo $_val[1]?>이(가) 선택되지 않았습니다.     ');
		checkarray[0].focus();
		return false;
	}
	<?php endif?>
	<?php endforeach?>


	<?php if($d['member']['form_comp']):?>
	if (f.comp.checked == true)
	{
		if (f.comp_num_1.value == '')
		{
			alert('사업자등록번호를 입력해 주세요.     ');
			f.comp_num_1.focus();
			return false;
		}
		if (f.comp_num_2.value == '')
		{
			alert('사업자등록번호를 입력해 주세요.     ');
			f.comp_num_2.focus();
			return false;
		}
		if (f.comp_num_3.value == '')
		{
			alert('사업자등록번호를 입력해 주세요.     ');
			f.comp_num_3.focus();
			return false;
		}

		if (f.comp_name.value == '')
		{
			alert('회사명을 입력해 주세요.     ');
			f.comp_name.focus();
			return false;
		}
		if (f.comp_ceo.value == '')
		{
			alert('대표자명을 입력해 주세요.     ');
			f.comp_ceo.focus();
			return false;
		}
		if (f.comp_upte.value == '')
		{
			alert('업태를 입력해 주세요.     ');
			f.comp_upte.focus();
			return false;
		}
		if (f.comp_jongmok.value == '')
		{
			alert('종목을 입력해 주세요.     ');
			f.comp_jongmok.focus();
			return false;
		}
		if (f.comp_tel_1.value == '')
		{
			alert('대표전화번호를 입력해 주세요.');
			f.comp_tel_1.focus();
			return false;
		}
		if (f.comp_tel_2.value == '')
		{
			alert('대표전화번호를 입력해 주세요.');
			f.comp_tel_2.focus();
			return false;
		}

		if (f.comp_addr1.value == '')
		{
			alert('사업장주소를 입력해 주세요.');
			f.comp_addr2.focus();
			return false;
		}
	}
	<?php endif?>



	return confirm('정말로 수정하시겠습니까?       ');
}
//]]>
</script>




