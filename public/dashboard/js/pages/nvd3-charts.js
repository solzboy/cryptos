//Project:	Crypto Admin - Responsive Admin Template
//Primary use:   Used only for the  widget charts



$( document ).ready(function() {
    "use strict";
	
	
	nv.addGraph(function() {
		var chart = nv.models.multiBarChart()
		  .transitionDuration(350)
		  .reduceXTicks(true)   //If 'false', every single x-axis tick label will be rendered.
		  .rotateLabels(0)      //Angle to rotate x-axis labels.
		  .showControls(true)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
		  .groupSpacing(0.1)    //Distance between each group of bars.
		  .color(['#ab8ce4', '#03a9f3', '#00c292']);
		;

		chart.xAxis
			.tickFormat(d3.format(',f'));

		chart.yAxis
			.tickFormat(d3.format(',.1f'));

		d3.select('#nvd3-bar svg')
			.datum(exampleData())
			.call(chart);

		nv.utils.windowResize(chart.update);

		return chart;
	});

	//Generate some nice data.
	function exampleData() {
	  return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
		return {
		  key: 'Stream #' + i,
		  values: data
		};
	  });
	}

        // nvd3-line3
       d3.json('http://nvd3.org/examples/cumulativeLineData.json', function(data) {
		  nv.addGraph(function() {
			var chart = nv.models.cumulativeLineChart()
						  .x(function(d) { return d[0] })
						  .y(function(d) { return d[1]/100 }) //adjusting, 100% is 1.00, not 100 as it is in the data						  
		  				  .color(d3.scale.ordinal().range(["#ab8ce4", "#03a9f3", "#00c292", "#fb9678"]).range())
						  .useInteractiveGuideline(true)
						  ;

			 chart.xAxis
				.tickValues([1078030800000,1122782400000,1167541200000,1251691200000])
				.tickFormat(function(d) {
					return d3.time.format('%x')(new Date(d))
				  });

			chart.yAxis
				.tickFormat(d3.format(',.1%'));

			d3.select('#nvd3-line3 svg')
				.datum(data)
				.call(chart);

			//TODO: Figure out a good way to do this automatically
			nv.utils.windowResize(chart.update);

			return chart;
		  });
		});

		/*Data sample:
{ 
      "key" : "North America" , 
      "values" : [ [ 1025409600000 , 23.041422681023] , [ 1028088000000 , 19.854291255832],
       [ 1030766400000 , 21.02286281168], 
       [ 1033358400000 , 22.093608385173],
       [ 1036040400000 , 25.108079299458],
       [ 1038632400000 , 26.982389242348]
       ...

	*/
	
	d3.json('http://nvd3.org/examples/stackedAreaData.json', function(data) {
		
	  nv.addGraph(function() {
		var chart = nv.models.stackedAreaChart()
					  .margin({right: 100})
					  .x(function(d) { return d[0] })   //We can modify the data accessor functions...
					  .y(function(d) { return d[1] })   //...in case your data is formatted differently.
					  .useInteractiveGuideline(true)    //Tooltips which show all data points. Very nice!
					  .rightAlignYAxis(true)      //Let's move the y-axis to the right side.
					  .transitionDuration(500)
					  .showControls(true)       //Allow user to choose 'Stacked', 'Stream', 'Expanded' mode.
					  .clipEdge(true)
					  .color(d3.scale.ordinal().range(["#ab8ce4", "#e4e7ea", "#00c292", "#03a9f3", "#fec107", "#fb9678", "#8d6658"]).range());
		  
		//Format x-axis labels with custom function.
		chart.xAxis
			.tickFormat(function(d) { 
			  return d3.time.format('%x')(new Date(d)) 
		});

		chart.yAxis
			.tickFormat(d3.format(',.2f'));

		d3.select('#nvd3-area svg')
		  .datum(data)
		  .call(chart);

		nv.utils.windowResize(chart.update);

		return chart;
	  });
	})

	
}); // End of use strict
