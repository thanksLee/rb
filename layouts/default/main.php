<?php if($g['disp_adm_bar']):?>
<style type="text/css">
.navbar-fixed-top {top:29px;}
</style>
<?php endif?>


<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/header.php' ?>

<div class="jumbotron">
  <div class="container">
    <h1>Hello, kimsQ!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg">Learn more »</a></p>
  </div>
</div>

<div class="container marketing">
    <?php include __KIMS_CONTENT__ ?>
    <hr>
    <footer>
      <?php include $g['path_layout'].$d['layout']['dir'].'/_cross/footer.php' ?>
    </footer>
</div>

