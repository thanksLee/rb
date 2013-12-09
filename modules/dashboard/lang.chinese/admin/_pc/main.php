<!-- 업데이트 알림 -->
<div class="alert alert-warning  fade in text-center">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <a href="#" class="alert-link">kimsQ Rb 2.0.1</a> is available! <a href="#" class="alert-link">Please update now</a>.
</div>
<!-- /업데이트 알림 -->


<!-- Important plugins put in all pages -->

<script src="<?php echo $g['url_module_skin']?>/js/conditionizr.min.js"></script>  
<script src="<?php echo $g['url_module_skin']?>/js/bootstrap/bootstrap.js"></script>  
<script src="<?php echo $g['url_module_skin']?>/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/core/jrespond/jRespond.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/js/jquery.genyxAdmin.js"></script>

<!-- Charts plugins -->
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.pie.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.resize.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.orderBars.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/sparklines/jquery.sparkline.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/flot/date.js"></script> <!-- Only for generating random data delete in production site-->
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/gauge/justgage.1.0.1.min.js"></script>
<script src="<?php echo $g['url_module_skin']?>/plugins/charts/gauge/raphael.2.1.0.min.js"></script>

<!-- Form plugins -->
<script src="<?php echo $g['url_module_skin']?>/plugins/forms/uniform/jquery.uniform.min.js"></script>

<!-- Misc plugins -->
<script src="<?php echo $g['url_module_skin']?>/plugins/misc/fullcalendar/fullcalendar.min.js"></script>

<!-- UI plugins -->
<script src="<?php echo $g['url_module_skin']?>/plugins/ui/jgrowl/jquery.jgrowl.min.js"></script>

  

<div class="row">
	<div class="col-lg-6 col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon"><i class="icon20 i-stats"></i></div>
				<h4>Statistic</h4>
				<a href="#" class="minimize"></a>
			</div><!-- End .panel-heading -->
		
			<div class="panel-body">

				<div class="chart" style="width: 100%; height:250px; margin-top: 10px;">
					
				</div>



				<div class="clearfix"></div>

			</div><!-- End .panel-body -->
		</div><!-- End .widget -->
	</div><!-- End .col-lg-8  --> 
	<div class="col-lg-6 col-md-6">
	  <div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon"><i class="icon20 i-share-2"></i></div>
				<h4>Social sharing</h4>
				<a href="#" class="minimize"></a>
			</div><!-- End .panel-heading -->
		
			<div class="panel-body center">

				<div class="chart-pie-social" style="width: 50%; height:225px; float:left;">                               

				</div>

				<div class="social-stats">
					<ul>
						<li class="item clearfix">
							<div class="icon"><i class="icon32 i-facebook-4 blue"></i></div>
							<span class="number">765</span>
							<span class="txt">likes</span>
						</li>
						<li class="item clearfix">
							<div class="icon"><i class="icon32 i-twitter-3 blue"></i></div>
							<span class="number">325</span>
							<span class="txt">retweets</span>
						</li>
						<li class="item clearfix">
							<div class="icon"><i class="icon32 i-google-plus-4 red"></i></div>
							<span class="number">56</span>
							<span class="txt">share</span>
						</li>
					</ul>
				</div>

				<div class="clearfix"></div>
				
			</div><!-- End .panel-body -->
		</div><!-- End .widget -->                                             
	</div><!-- End .col-lg-4  --> 

</div><!-- End .row-fluid  -->



<div class="sidebar-widget center visible-xs">
	<h4 class="sidebar-widget-header"><i class="icon i-fire-2"></i> Site overload</h4>
	<div id="gauge" style="width:200px; height:150px;"></div>
	<div id="gauge1" style="width:200px; height:150px;"></div>
</div><!-- end .sidebar-widget -->


