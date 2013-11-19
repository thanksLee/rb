<div class="well sidebar-nav">
    <ul class="nav">
	
	<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.(int)$g['nowFMemnu'].' and hidden=0 and depth=2 order by gid asc','*')?>
	<?php $_MENUSN=db_num_rows($_MENUS2)?>
	<?php $_i=0;while($_M2=db_fetch_array($_MENUS2)):$_i++?>
	<li class="b<?php if($_M2['id']==$_CA[0]):$g['nowSMemnu']=$_M2['uid']?> active<?php endif?>"><a href="<?php echo RW('c='.$_CA[0].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"<?php if($_M2['id']==$_CA[1]):?> class="on"<?php endif?>><?php echo $_M2['name']?></a></li>
	<?php if(($_HM['uid']==$_M2['uid']||$_HM['parent']==$_M2['uid'])&&$_M2['isson']):?>
	<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
	<?php while($_M3=db_fetch_array($_MENUS3)):?>
	<li<?php if($_M3['uid']==$_HM['uid']):?> class="active"<?php endif?>><a href="<?php echo RW('c='.$_CA[0].'/'.$_CA[1].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>"><?php echo $_M3['name']?></a></li>
	<?php endwhile?>
	<?php endif?>
	<?php endwhile?>

    </ul>
</div>