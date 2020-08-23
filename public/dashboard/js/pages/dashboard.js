//[Dashboard Javascript]

//Project:	Crypto Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	

	
		var options = {
          series: [{
          name: 'PRODUCT A',
          data: [44, 55, 41, 67, 22, 43, 44, 55, 41, 67, 22, 43]
        }, {
          name: 'PRODUCT B',
          data: [-44, -55, -41, -67, -22, -43, -44, -55, -41, -67, -22, -43]
        }],
          chart: {
		  foreColor:"#bac0c7",
          type: 'bar',
          height: 350,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],		
		grid: {
			show: true,
			borderColor: '#f7f7f7',      
		},
		colors:['#6993ff', '#f64e60'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '20%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
 
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
            '01/05/2011 GMT', '01/06/2011 GMT', '01/07/2011 GMT', '01/08/2011 GMT', '01/09/2011 GMT', '01/10/2011 GMT',
            '01/11/2011 GMT', '01/12/2011 GMT'
          ],
        },
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#summary-chart"), options);
        chart.render();
	
	
	
	// Apex  start
  if($('#apexChart2').length) {
    var options2 = {
      chart: {
        type: "bar",
        height: 100,
        sparkline: {
          enabled: !0
        }
      },
      plotOptions: {
        bar: {
          columnWidth: "25%"
        }
      },
      colors: ["#ffffff"],
      series: [{
        data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63, 36, 77, 52, 90, 74, 35, 55, 23, 47]
      }],
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      xaxis: {
        crosshairs: {
          width: 2
        }
      },
      tooltip: {
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },
        y: {
          title: {
            formatter: function(e) {
              return ""
            }
          }
        },
        marker: {
          show: !1
        }
      }
    };
    new ApexCharts(document.querySelector("#apexChart2"),options2).render();
  }
  // Apex  end
	
	
	
	// Apex  start
  if($('#apexChart3').length) {
    var options2 = {
      chart: {
        type: "bar",
        height: 100,
        sparkline: {
          enabled: !0
        }
      },
      plotOptions: {
        bar: {
          columnWidth: "25%"
        }
      },
      colors: ["#ffffff"],
      series: [{
        data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63, 36, 77, 52, 90, 74, 35, 55, 23, 47]
      }],
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      xaxis: {
        crosshairs: {
          width: 2
        }
      },
      tooltip: {
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },
        y: {
          title: {
            formatter: function(e) {
              return ""
            }
          }
        },
        marker: {
          show: !1
        }
      }
    };
    new ApexCharts(document.querySelector("#apexChart3"),options2).render();
  }
	
  // Apex chart2 end
	
	
	
	
	am4core.ready(function() {

	// Themes begin
	am4core.useTheme(am4themes_animated);
	// Themes end

	// Create chart instance
	var chart = am4core.create("order-chart", am4charts.XYChart);

	// Add data
	chart.dataSource.url = "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=50";
	chart.dataSource.reloadFrequency = 30000;
	chart.dataSource.adapter.add("parsedData", function(data) {

	  // Function to process (sort and calculate cummulative volume)
	  function processData(list, type, desc) {

		// Convert to data points
		for(var i = 0; i < list.length; i++) {
		  list[i] = {
			value: Number(list[i][0]),
			volume: Number(list[i][1]),
		  }
		}

		// Sort list just in case
		list.sort(function(a, b) {
		  if (a.value > b.value) {
			return 1;
		  }
		  else if (a.value < b.value) {
			return -1;
		  }
		  else {
			return 0;
		  }
		});

		// Calculate cummulative volume
		if (desc) {
		  for(var i = list.length - 1; i >= 0; i--) {
			if (i < (list.length - 1)) {
			  list[i].totalvolume = list[i+1].totalvolume + list[i].volume;
			}
			else {
			  list[i].totalvolume = list[i].volume;
			}
			var dp = {};
			dp["value"] = list[i].value;
			dp[type + "volume"] = list[i].volume;
			dp[type + "totalvolume"] = list[i].totalvolume;
			res.unshift(dp);
		  }
		}
		else {
		  for(var i = 0; i < list.length; i++) {
			if (i > 0) {
			  list[i].totalvolume = list[i-1].totalvolume + list[i].volume;
			}
			else {
			  list[i].totalvolume = list[i].volume;
			}
			var dp = {};
			dp["value"] = list[i].value;
			dp[type + "volume"] = list[i].volume;
			dp[type + "totalvolume"] = list[i].totalvolume;
			res.push(dp);
		  }
		}

	  }

	  // Init
	  var res = [];
	  processData(data.bids, "bids", true);
	  processData(data.asks, "asks", false);

	  return res;
	});

	// Set up precision for numbers
	chart.numberFormatter.numberFormat = "#,###.####";

	// Create axes
	var xAxis = chart.xAxes.push(new am4charts.CategoryAxis());
	xAxis.dataFields.category = "value";
	//xAxis.renderer.grid.template.location = 0;
	xAxis.renderer.minGridDistance = 50;
	xAxis.title.text = "";

	var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
	yAxis.title.text = "";

	// Create series
	var series = chart.series.push(new am4charts.StepLineSeries());
	series.dataFields.categoryX = "value";
	series.dataFields.valueY = "bidstotalvolume";
	series.strokeWidth = 2;
	series.stroke = am4core.color("#0f0");
	series.fill = series.stroke;
	series.fillOpacity = 0.1;
	series.tooltipText = "Ask: [bold]{categoryX}[/]\nTotal volume: [bold]{valueY}[/]\nVolume: [bold]{bidsvolume}[/]"

	var series2 = chart.series.push(new am4charts.StepLineSeries());
	series2.dataFields.categoryX = "value";
	series2.dataFields.valueY = "askstotalvolume";
	series2.strokeWidth = 2;
	series2.stroke = am4core.color("#f00");
	series2.fill = series2.stroke;
	series2.fillOpacity = 0.1;
	series2.tooltipText = "Ask: [bold]{categoryX}[/]\nTotal volume: [bold]{valueY}[/]\nVolume: [bold]{asksvolume}[/]"

	var series3 = chart.series.push(new am4charts.ColumnSeries());
	series3.dataFields.categoryX = "value";
	series3.dataFields.valueY = "bidsvolume";
	series3.strokeWidth = 0;
	series3.fill = am4core.color("#000");
	series3.fillOpacity = 0.2;

	var series4 = chart.series.push(new am4charts.ColumnSeries());
	series4.dataFields.categoryX = "value";
	series4.dataFields.valueY = "asksvolume";
	series4.strokeWidth = 0;
	series4.fill = am4core.color("#000");
	series4.fillOpacity = 0.2;

	// Add cursor
	chart.cursor = new am4charts.XYCursor();

	}); // end am4core.ready()
	
	
	
	if ($('#webticker-3').length) {   
			$("#webticker-3").webTicker({
				height:'auto', 
				duplicate:true, 
				startEmpty:false, 
				rssfrequency:5
			});
		}
	
	
	
	
	
	
	
	
	
	
	
}); // End of use strict

