<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/css/dropzone.css" />


<?php
if (!$_SESSION['upsescode'])
{
	$_SESSION['upsescode'] = str_replace('.','',$g['time_start']);
}

$sescode = $_SESSION['upsescode'];
?>


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





<p>
	<ul>
	<li>멀티 업로더(Chrome, Firefox, Safari, Opera & Internet Explorer 10 이상에서 동작)가 동작하지 않을 경우 기본 업로더를 사용하세요.</li>
	<li>Maximum upload file size: <code><?php echo str_replace('M','',ini_get('upload_max_filesize'))?>MB</code>.</li>
	</ul>
</p>




<script src="<?php echo $g['url_module_skin']?>/assets/js/dropzone.min.js"></script>


<script type="text/javascript">
function upCheck(f)
{
	if (f.file.value == '')
	{
		alert('파일을 첨부해 주세요.   ');
		return false;
	}
	getIframeForAction(f);
	return true;
}
jQuery(function($){

try {
  $(".dropzone").dropzone({
	paramName: "file", // The name that will be used to transfer the file
	maxFilesize: <?php echo str_replace('M','',ini_get('upload_max_filesize'))?>, // MB
  
	addRemoveLinks : false,
	dictDefaultMessage :
	'<span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Drop files</span> to upload \
	<span class="smaller-80 grey">(or click)</span> <br /> \
	<i class="upload-icon icon-cloud-upload blue icon-3x"></i>'
,
	dictResponseError: 'Error while uploading file!',
	
	//change the previewTemplate to use Bootstrap progress bars
	previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
  });
} catch(e) {
  //alert('Dropzone.js does not support older browsers!');
}

});
</script>
