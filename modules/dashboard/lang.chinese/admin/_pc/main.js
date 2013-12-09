// make console.log safe to use
window.console||(console={log:function(){}});

$(document).ready(function() {

    conditionizr({
        ie8: { 
            customScript: "js/excanvas.min.js" 
        }         
    });

    //Init the genyxAdmin plugin
    $.genyxAdmin({
        fixedWidth: false,// make true if you want to use fixed widht instead of fluid version.
        customScroll: false,// Custom scroll for page. true or false 
        responsiveTablesCustomScroll: true,// custom scroll for responsive tables. true or false
        backToTop: true,//show back to top , true or false
        navigation: {
            useNavMore: true, //use arrow for hint. ture or false
            navMoreIconDown: 'i-arrow-down-2', //icon for down state.
            navMoreIconUp: 'i-arrow-up-2',//icon for up state
            rotateIcon: true//rotate icon on hover , true or false
        },
        setCurrent: {
            absoluteUrl: false, //put true if use absolute path links. example http://www.host.com/dashboard instead of /dashboard
            subDir: '' //if you put template in sub dir you need to fill here. example '/html'
        },
        collapseNavIcon: 'i-arrow-left-7', //icon for collapse navigation button
        collapseNavRestoreIcon: 'i-arrow-right-8', //icon for restore navigation button
        rememberNavState: true, //remember if menu is collapsed 
        remeberExpandedSub: false, //remeber expanded sub menu by user
        hoverDropDown: false, //set false if not want to show dropdown on hover ( click instead)
        accordionIconShow: 'i-arrow-down-2',//icon for accordion expand
        accordionIconHide: 'i-arrow-up-2'//icon for accordion hide
    });

    //Disable certain links
    $('a[href^=#]').click(function (e) {
        e.preventDefault()
    })

    //------------- Prettify code  -------------//
    window.prettyPrint && prettyPrint();

    //------------- Bootstrap tooltips -------------//
    $("[data-toggle=tooltip]").tooltip ({});
    $(".tip").tooltip ({placement: 'top', container: 'body'});
    $(".tipR").tooltip ({placement: 'right', container: 'body'});
    $(".tipB").tooltip ({placement: 'bottom', container: 'body'});
    $(".tipL").tooltip ({placement: 'left', container: 'body'});
    //--------------- Popovers ------------------//
    //using data-placement trigger
    $("a[data-toggle=popover]")
      .popover()
      .click(function(e) {
        e.preventDefault()
    });

    $('#fixedwidth').click(function() {
        $.genyxAdmin({fixedWidth: true});
    });

    //init this last don`t change
    //------------- Uniform  -------------//
    //add class .nostyle if not want uniform to style field
    //$("input, textarea, select").not('.nostyle').uniform();
    //$("[type='checkbox'], [type='radio'], [type='file'], select").not('.toggle, .select2, .multiselect').uniform();
	$("[type='checkbox'], [type='radio'], [type='file']").not('.toggle, .select2, .multiselect').uniform();
});





















$(document).ready(function() {

	//------------- jGrowl notification -------------//
    setTimeout(function() {
    	$.jGrowl("<i class='icon16 i-checkmark-3'></i> Login is successfull", {
    		group: 'success',
    		position: 'center',
    		sticky: false,
    		closeTemplate: '<i class="icon16 i-close-2"></i>',
    		animateOpen: {
		        width: 'show',
		        height: 'show'
		    }
    	});
    }, 250);
 	
 	//define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
 	var chartColours = ['#62aeef', '#d8605f', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

 	//generate random number for charts
	randNum = function(){
		return (Math.floor( Math.random()* (1+40-20) ) ) + 20;
	}


 	//check if element exist and draw chart
	if($(".chart").length) {
		$(function () {
			var d1 = [];
			var d2 = [];

			//here we generate data for chart
			for (var i = 0; i < 32; i++) {
				d1.push([new Date(Date.today().add(i).days()).getTime(),randNum()+i+i]);
				d2.push([new Date(Date.today().add(i).days()).getTime(),randNum()]);
			}

			var chartMinDate = d1[0][0]; //first day
    		var chartMaxDate = d1[31][0];//last day

    		var tickSize = [1, "day"];
    		var tformat = "%d/%m/%y";

		    //graph options
			var options = {
					grid: {
						show: true,
					    aboveData: true,
					    color: "#3f3f3f" ,
					    labelMargin: 5,
					    axisMargin: 0, 
					    borderWidth: 0,
					    borderColor:null,
					    minBorderMargin: 5 ,
					    clickable: true, 
					    hoverable: true,
					    autoHighlight: true,
					    mouseActiveRadius: 100
					},
			        series: {
			            lines: {
		            		show: true,
		            		fill: true,
		            		lineWidth: 2,
		            		steps: false
			            	},
			            points: {
			            	show:true,
			               	radius: 2.8,
			            	symbol: "circle",
			            	lineWidth: 2.5
			            }
			        },
			        legend: { 
			        	position: "ne", 
			        	margin: [0,-25], 
			        	noColumns: 0,
			        	labelBoxBorderColor: null,
			        	labelFormatter: function(label, series) {
						    // just add some space to labes
						    return label+'&nbsp;&nbsp;';
						},
						width: 40,
						height: 1
			    	},
			        colors: chartColours,
			        shadowSize:0,
			        tooltip: true, //activate tooltip
					tooltipOpts: {
						content: "%s: %y.0",
						xDateFormat: "%d/%m",
						shifts: {
							x: -30,
							y: -50
						},
						defaultTheme: false
					},
					yaxis: { min: 0 },
					xaxis: { 
			        	mode: "time",
			        	minTickSize: tickSize,
			        	timeformat: tformat,
			        	min: chartMinDate,
			        	max: chartMaxDate
			        }
			};  
			var plot = $.plot($(".chart"),
	           [{
	    			label: "Email Send", 
	    			data: d1,
	    			lines: {fillColor: "#f3faff"},
	    			points: {fillColor: "#fff"}
	    		}, 
	    		{	
	    			label: "Email Open", 
	    			data: d2,
	    			lines: {fillColor: "#fff8f7"},
	    			points: {fillColor: "#fff"}
	    		}], options);
		});
	}//End .chart if  

	//check if element exist and draw chat pie
	if($(".chart-pie-social").length) {
		$(function () {
			var options = {
				series: {
					pie: { 
						show: true,
						highlight: {
							opacity: 0.1
						},
						radius: 1,
						stroke: {
							width: 2
						},
						startAngle: 2,
						border: 30, //darken the main color with 30
						label: {
		                    show: true,
		                    radius: 2/3,
		                    formatter: function(label, series){
		                        return '<div class="pie-chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
		                    }
		                }
					}				
				},
				legend:{
					show:false
				},
				grid: {
		            hoverable: true,
		            clickable: true
		        },
		        tooltip: true, //activate tooltip
				tooltipOpts: {
					content: "%s : %y.1"+"%",
					shifts: {
						x: -30,
						y: -50
					},
					defaultTheme: false
				}
			};
			var data = [
			    { label: "Facebook",  data: 64, color: chartColours[0]},
			    { label: "Twitter",  data: 25, color: chartColours[1]},
			    { label: "Google",  data: 11, color: chartColours[2]}
			];

		    $.plot($(".chart-pie-social"), data, options);

		});

	}//End of .cart-pie-social

	//Init campaign stats
	initPieChart();


	//------------- Spark stats -------------//
	$('.spark>.positive').sparkline('html', { type:'bar', barColor:'#42b449'});
	$('.spark>.negative').sparkline('html', { type:'bar', barColor:'#db4a37'});

	//------------- Gauge -------------//
	var g = new JustGage({
	    id: "gauge", 
	    value: getRandomInt(0, 100), 
	    min: 0,
	    max: 100,
	    title: "server usage",
	    gaugeColor: '#6f7a8a',
	    labelFontColor: '#555',
	    titleFontColor: '#555',
	    valueFontColor: '#555',
	    showMinMax: false
	 });

	var g1 = new JustGage({
	    id: "gauge1", 
	    value: getRandomInt(100, 500), 
	    min: 100,
	    max: 500,
	    title: "Visitors now",
	    gaugeColor: '#6f7a8a',
	    labelFontColor: '#555',
	    titleFontColor: '#555',
	    valueFontColor: '#555',
	    showMinMax: false
	 });

	setInterval(function() {
      g.refresh(getRandomInt(0, 100));
      g1.refresh(getRandomInt(100, 500));
    }, 2500);

});

//Setup campaign stats
var initPieChart = function() {
	$(".percentage").easyPieChart({
        barColor: '#62aeef',
        borderColor: '#227dcb',
        trackColor: '#d7e8f6',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 20,
        size: 80,
        animate: 1500
    });
    $(".percentage-red").easyPieChart({
        barColor: '#d8605f',
        trackColor: '#f6dbdb',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 20,
        size: 80,
        animate: 1500
    });

}

