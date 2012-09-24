<div class="wrap">
<?php include __KIMS_CONTAINER_FOOT__?>
</div>

<div id="footer">
	<div class="wrap">
		<div class="slinks">
			<div class="elink">
				<a href="<?php echo RW('mod=agreement')?>">홈페이지 이용약관</a> |
				<a href="<?php echo RW('mod=private')?>">개인정보 취급방침</a> |
				<a href="<?php echo RW('mod=postrule')?>">게시물 게재원칙</a>
			</div>
			<div class="copyright">
				Copyright &copy; <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?> All rights reserved.
			</div>
		</div>
		<div class="powered">
			<div class="kimsq"><!-- 출력을 원치 않으실 경우 지우세요 -->Powered by kimsQ rb (Runtime <?php echo round(getNowTimes()-$g['time_start'],3)?>)</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

<script type="text/javascript">
//<![CDATA[
function screenCheck()
{
	var _h = getId('header');
	var _t = getId('topmenu');
	var _c = getId('content');
	var _f = getId('footer');
	var _r = getId('rcontent');
	var _w;

	var w = parseInt(document.body.clientWidth);
	var b = getOfs(_c.children[0]);

	_w = w < 960 ? w : 960;
	_w = _w < 240 ? 240 : _w;

	_h.children[0].style.width = _w + 'px';
	_t.children[0].style.width = _w + 'px';
	_c.children[0].style.width = _w + 'px';
	_f.children[0].style.width = _w + 'px';
	document.body.style.overflowX = 'hidden';
}
//setTimeout("screenCheck()",100);
//window.onresize = screenCheck;
//]]>
</script>