//Project:	Crypto Admin - Responsive Admin Template
//Primary use:   Used only for the  widget charts


$( document ).ready(function() {
    "use strict";
	
	


        // Draws a realtime Rickshaw Chart
        (function() {
            var container = '#rickshaw-realtime';

            var seriesData = [
                [],
                [],
                []
            ];
            var random = new Rickshaw.Fixtures.RandomData(50);
            for (var i = 0; i < 50; i++) {
                random.addData(seriesData);
            }
            var graph = new Rickshaw.Graph({
                element: document.querySelector(container),
                height: 350,
                width: $(container).width(),
                renderer: 'area',
                padding: {
                    top: 0.1
                },
                series: [{
                    data: seriesData[0],
                    color: '#398bf7', // Get Pages contextual color
                    name: 'DB Server'
                }, {
                    data: seriesData[1],
                    color: '#f96197', // Get Pages contextual color
                    name: 'Web Server'
                }]
            });

            var y_axis = new Rickshaw.Graph.Axis.Y({
                graph: graph,
                orientation: 'right',
                tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
                element: document.getElementById('rickshaw-realtime_y_axis'),
            });

            var hoverDetail = new Rickshaw.Graph.HoverDetail({
                graph: graph
            });

            // Update the graph with realtime data. 
            setInterval(function() {
                random.removeData(seriesData);
                random.addData(seriesData);
                graph.update();
            }, 1000);

            d3.selectAll('#rickshaw-realtime_y_axis .tick.major line').attr('x2', '7');
            d3.selectAll('#rickshaw-realtime_y_axis .tick.major text').attr('x', '12');

            $(window).resize(function() {
                graph.configure({
                    width: $(container).width(),
                    height: 350
                });
                graph.render()
            });

            $(container).data('chart', graph);

        })();


        // Draws a stacked bar chart using Rickshaw
        (function() {
            var container = '#rickshaw-stacked-bars';

            var seriesData = [
                [],
                []
            ];
            var random = new Rickshaw.Fixtures.RandomData(40);
            for (var i = 0; i < 40; i++) {
                random.addData(seriesData);
            }

            var graph = new Rickshaw.Graph({
                renderer: 'bar',
                element: document.querySelector(container),
                height: 500,
                width: $(container).width(),
                padding: {
                    top: 0.1
                },
                series: [{
                    data: seriesData[0],
                    color: '#926dde', // Get Pages contextual color
                    name: "New users"
                }, {
                    data: seriesData[1],
                    color: '#57c7d4', // Get Pages contextual color
                    name: "Returning users"

                }]

            });

            var hoverDetail = new Rickshaw.Graph.HoverDetail({
                graph: graph,
                formatter: function(series, x, y) {
                    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
                    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                    return content;
                }
            });

            graph.render();


            $(window).resize(function() {
                graph.configure({
                    width: $(container).width(),
                    height: 500
                });
                graph.render()
            });

            $(container).data('chart', graph);

        })();


        // Renders an area chart with a slider option using Rickshaw
        (function() {

            var seriesData = [
                []
            ];
            var random = new Rickshaw.Fixtures.RandomData(50);

            for (var i = 0; i < 75; i++) {
                random.addData(seriesData);
            }

            var graph = new Rickshaw.Graph({
                element: document.querySelector("#rickshaw-slider .chart"),
                renderer: 'multi',
                dotSize: 5,
                height: 350,
                padding: {
                    left: 0
                },
                series: [{
                    name: 'Temperature',
                    data: seriesData.shift(),
                    color: '#fb9678', // Get Pages contextual color
                    opacity: 0,
                    renderer: 'stack'
                }]
            });

            var y_ticks = new Rickshaw.Graph.Axis.Y({
                graph: graph,
                orientation: 'left',
                pixelsPerTick: 30,
                tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
                element: document.querySelector('#rickshaw-slider .y_axis')
            });

            var x_ticks = new Rickshaw.Graph.Axis.Time({
                graph: graph,
                timeFixture: new Rickshaw.Fixtures.Time()
            });

            var slider = new Rickshaw.Graph.RangeSlider.Preview({
                graph: graph,
                height: 100,
                element: document.querySelector('#rickshaw-slider .slider')
            });

            var hoverDetail = new Rickshaw.Graph.HoverDetail({
                graph: graph,
                formatter: function(series, x, y) {
                    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
                    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                    return content;
                }
            });

            graph.render();

            $(window).resize(function() {
                graph.configure({
                    width: $('#rickshaw-slider .chart').width(),
                    height: $('#rickshaw-slider .chart').height()
                });

                graph.render()
            });

            $('#rickshaw-slider .rickshaw-chart').data('chart', graph);

        })();

	
}); // End of use strict
