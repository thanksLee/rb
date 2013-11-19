<?php if($g['disp_adm_bar']):?>
<style type="text/css">
.navbar-fixed-top {top:29px;}
</style>
<?php endif?>

<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/header.php' ?>

<div class="page-title" id="content">
    <div class="container">
        <h1><strong><?php echo $_HM['name']?></strong> <?php if($_HM['addinfo']):?><span class="page-lead"><?php echo $_HM['addinfo']?></span><?php endif?></h1>
    </div> 
</div>

<div class="container bs-docs-container">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/sidebar-default.php' ?>
        </div>
        <div class="col-xs-12 col-sm-9" role="main">
            <p class="pull-left visible-xs">
                <button class="btn btn-primary btn-xs" data-toggle="offcanvas" type="button">Toggle
                    nav</button>
            </p>
            <?php include __KIMS_CONTENT__ ?>
        </div>
    </div>
    <hr>
    <footer>
      <?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/footer.php' ?>
    </footer>
</div>

