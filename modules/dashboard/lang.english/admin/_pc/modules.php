
<div class="module-list-xs">

	<?php $_MODULES = getDbArray($table['s_module'],'hidden=0','*','gid','asc',0,1)?>
	<?php while($_R = db_fetch_array($_MODULES)):?>
	<?php if(strpos('_'.$my['adm_view'],'['.$_R['id'].']')) continue?>

	<span class="fa-stack fa-2x">
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=<?php echo $_R['id']?>">
			<i class="fa fa-square fa-stack-2x"></i>
			<i class="<?php echo $_R['icon']?$_R['icon']:'fa-th-large'?> fa-stack-1x kf-inverse"></i>
			<i class="name"><?php echo ucfirst($_R['id'])?></i>
		</a>
	</span>

	<?php endwhile?>

</div>


	<hr>
	<div class="btn-group btn-group-justified">
	  <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;module=module" class="btn btn-default btn-lg">모듈관리</a>
	  <a href="" class="btn btn-default btn-lg">순서저장</a>
	</div>


</div>
