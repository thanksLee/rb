<link rel="stylesheet" href="<?php echo $g['url_module_skin']?>/assets/css/prettify.css" />

<div class="row">
	<div class="col-md-4 col-lg-3" id="tab-content-list">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="icon">
					<i class="glyphicon glyphicon-globe"></i>
				</div>
				<h4>레이아웃 리스트</h4>
			</div>
			<div class="list-group">
				<a class="list-group-item" href="#">
					<span class="badge">
						<span class="glyphicon glyphicon-home"></span>
						<span class="glyphicon glyphicon-phone"></span>
					</span>1.2.0 모바일
					<span class="text-muted">(mobile)</span></a>
			</div>
			<div class="panel-footer text-center">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
		<hr class="visible-xs">
	</div>
	<div class="col-md-8 col-lg-9" id="tab-content-view">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">
							레이아웃 코드
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse in" id="collapseOne">
					<div class="panel-body">
<pre class="prettyprint linenums">
&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
&lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
&lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;
</pre>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
							CSS 코드
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="collapseTwo">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
						terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
						skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
						Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
						single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
						helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
						proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
						beer farm-to-table, raw denim aesthetic synth nesciunt you probably
						haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">
							Collapsible Group Item #3
						</a>
					</h4>
				</div>
				<div class="panel-collapse collapse" id="collapseThree">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
						terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
						skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
						Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
						single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
						helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
						proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
						beer farm-to-table, raw denim aesthetic synth nesciunt you probably
						haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script src="<?php echo $g['url_module_skin']?>/assets/js/prettify.js"></script>

<script type="text/javascript">
    jQuery(function($) {
    
        window.prettyPrint && prettyPrint();
        $('#id-check-horizontal').removeAttr('checked').on('click', function(){
            $('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
        });
    
    })
</script>