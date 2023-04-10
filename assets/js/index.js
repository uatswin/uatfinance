(function($) {
    "use strict";

	/*----Echart2----*/
	var chartdata = [{
		name: 'Vistors',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15]
	}, {
		name: 'PageViews',
		type: 'line',
		smooth: true,
		data: [8, 5, 25, 10, 10]
	}, {
		name: 'Clients',
		type: 'bar',
		data: [10, 14, 10, 15, 9, 25]
	}];
	

	/*-----AreaChart1-----*/
    /*
	var ctx = document.getElementById( "AreaChart1" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7'],
            type: 'line',
            datasets: [ {
                data: [35, 55, 62, 77, 89, 92, 112],
                label: 'Profit',
                backgroundColor: 'rgba(208, 238, 251, 0.2)',
                borderColor: 'rgba(208, 238, 251, 0.5)',

            }
			]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#7886a0',
                bodyFontColor: '#7886a0',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );
*/
})(jQuery);

