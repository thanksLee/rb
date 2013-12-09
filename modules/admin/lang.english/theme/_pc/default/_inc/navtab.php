<!-- Medium devices, Large devices 에서 출력 됨 -->
<div class="visible-md visible-lg">
    <nav class="navbar navbar-default module-brand" role="navigation">
        <div class="navbar-header">
            <h1 class="navbar-brand">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                </span>
                <?php echo ucfirst($module)?> 
                <small><?php echo $MD['name']?> 관리</small>
            </h1>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <button class="btn btn-default navbar-btn pull-right" type="button">
                <i class="fa fa-star-o fa-lg"></i>
                <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;a=bookmark&amp;_addmodule=<?php echo $module?>&amp;_addfront=<?php echo $front?>" target="_action_frame_<?php echo $m?>">바로가기</a>
            </button>
        </div>
    </nav>
    <ul class="nav nav-tabs">
	
		<?php $_i=0?>
		<?php $_dropi=8?>
		<?php $_smenuCount=count($d['amenu'])?>
		<?php if($_smenuCount):?>
		<?php foreach($d['amenu'] as $_k => $_v):?>
		<?php if($_i>=$_dropi)break?>
		<li<?php if($front == $_k):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $_k?>"><?php echo $_v?></a></li>
		<?php $_i++;endforeach?>
		<?php endif?>
		
		<?php if($_smenuCount>$_dropi):?>
		<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
		<i class="fa fa-angle-double-right fa-lg"></i>
		</a>
		<ul class="dropdown-menu pull-right">
		<?php $_i=0?>
		<?php foreach($d['amenu'] as $_k => $_v):?>
		<?php if($_i>=$_dropi):?>
		<li<?php if($front == $_k):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $_k?>"><?php echo $_v?></a></li>
		<?php endif?>
		<?php $_i++;endforeach?>
		</ul>
		</li>
		<?php endif?>
    </ul>
</div>

<!-- Extra small devices ,Small devices 에서 출력 됨  -->
<div class="visible-xs visible-sm">
    <nav class="navbar navbar-default module-brand" role="navigation">
        <div class="navbar-header">
            <h1 class="navbar-brand">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                </span>
                <?php echo ucfirst($module)?> 
            </h1>
            <div class="btn-group pull-right">
                <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=<?php echo $m?>&amp;a=bookmark&amp;_addmodule=<?php echo $module?>&amp;_addfront=<?php echo $front?>" target="_action_frame_<?php echo $m?>"><button type="button" class="btn btn-default btn-lg"><i class="fa fa-star-o fa-lg"></i></button></a>
            </div>    
        </div>
    </nav>
    <ul class="nav nav-tabs">
	
		<?php $_i=0?>
		<?php $_dropi=3?>
		<?php $_smenuCount=count($d['amenu'])?>
		<?php if($_smenuCount):?>
		<?php foreach($d['amenu'] as $_k => $_v):?>
		<?php if($_i>=$_dropi)break?>
		<li<?php if($front == $_k):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $_k?>"><?php echo $_v?></a></li>
		<?php $_i++;endforeach?>
		<?php endif?>
		
		<?php if($_smenuCount>$_dropi):?>
		<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
		<i class="fa fa-angle-double-right fa-lg"></i>
		</a>
		<ul class="dropdown-menu pull-right">
		<?php $_i=0?>
		<?php foreach($d['amenu'] as $_k => $_v):?>
		<?php if($_i>=$_dropi):?>
		<li<?php if($front == $_k):?> class="active"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $m?>&module=<?php echo $module?>&front=<?php echo $_k?>"><?php echo $_v?></a></li>
		<?php endif?>
		<?php $_i++;endforeach?>
		</ul>
		</li>
		<?php endif?>
	
    </ul>
</div>
