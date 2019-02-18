/*Dashboard3 Init*/
 
"use strict"; 

/*****Ready function start*****/
$(document).ready(function(){
	$('#support_table').DataTable({
		"bFilter": false,
		"bLengthChange": false,
		"bPaginate": false,
		"bInfo": false,
	});
});
/*****Ready function end*****/


/*****Load function* end*****/

/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#pondsInvest').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('pondsInvest'));
		var colors = ['#0FC5BB ', '#92F2EF','#1B76BC','#2B3991','#2CB474'];
		var option2 = {
			color: colors,

			tooltip: {
				trigger: 'axis',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				axisPointer: {
					type: 'cross',
					label: {
						backgroundColor: 'rgba(33,33,33,1)'
					}
				},
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Open Sans', sans-serif",
					fontSize: 12
				}	
			},
			grid:{
				show:false,
				top: 30,
				bottom: 10,
				containLabel: true,
			},
			xAxis: [
				{
					type: 'category',
					axisTick: {
						alignWithLabel: true
					},
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					axisPointer: {
						label: {
							formatter: function (params) {
								return params.value
									+ (params.seriesData.length ? '：' + params.seriesData[0].data : '');
							}
						}
					},
					data: ["Pond 1", "Pond 2", "Pond 3", "Pond 4", "Pond 5"]
				},
				{
					type: 'category',
					axisTick: {
						alignWithLabel: true
					},
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					axisPointer: {
						label: {
							formatter: function (params) {
								return  params.value
									+ (params.seriesData.length ? '：' + params.seriesData[0].data : '');
							}
						}
					},
					data: ["Jan", "Feb", "March", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"]
				}
			],
			yAxis: [
				{
					type: 'value',
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					splitLine: {
						show: false,
					}
				}
			],
			series: [
				{
					name:'Pond 1',
					type:'line',
					xAxisIndex: 1,
					smooth: true,
					data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120]
				},
				{
					name:'Pond 2',
					type:'line',
					smooth: true,
					data: [130, 140, 150, 160, 170, 180,190, 200, 210, 220, 230, 240]
				},
				{
					name:'Pond 3',
					type:'line',
					xAxisIndex: 1,
					smooth: true,
					data: [250, 260, 270, 280, 290, 300, 310,320,330,340,350,360]
				},
				{
					name:'Pond 4',
					type:'line',
					smooth: true,
					data: [100, 200, 300, 40, 50, 60, 70, 80, 90, 10, 110, 120]
				},
				{
					name:'Pond 5',
					type:'line',
					smooth: true,
					data: [250, 206, 270, 280, 290, 300, 310,320,330,340,350,360]
				}
			]
		};

		eChart_3.setOption(option2);
		eChart_3.resize();
	}
	/*if( $('#pondsRevenue').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('pondsRevenue'));
		var colors = ['#0FC5BB ', '#92F2EF','#1B76BC','#2B3991','#2CB474'];
		var option2 = {
			color: colors,

			tooltip: {
				trigger: 'axis',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				axisPointer: {
					type: 'cross',
					label: {
						backgroundColor: 'rgba(33,33,33,1)'
					}
				},
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Open Sans', sans-serif",
					fontSize: 12
				}	
			},
			grid:{
				show:false,
				top: 30,
				bottom: 10,
				containLabel: true,
			},
			xAxis: [
				{
					type: 'category',
					axisTick: {
						alignWithLabel: true
					},
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					axisPointer: {
						label: {
							formatter: function (params) {
								return params.value
									+ (params.seriesData.length ? '：' + params.seriesData[0].data : '');
							}
						}
					},
					data: ["Pond 1", "Pond 2", "Pond 3", "Pond 4", "Pond 5"]
				},
				{
					type: 'category',
					axisTick: {
						alignWithLabel: true
					},
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					axisPointer: {
						label: {
							formatter: function (params) {
								return  params.value
									+ (params.seriesData.length ? '：' + params.seriesData[0].data : '');
							}
						}
					},
					data: ["Jan", "Feb", "March", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"]
				}
			],
			yAxis: [
				{
					type: 'value',
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					splitLine: {
						show: false,
					}
				}
			],
			series: [
				{
					name:'Pond 1',
					type:'line',
					xAxisIndex: 1,
					smooth: true,
					data: [100, 200, 300, 400, 50, 60, 70, 800, 900, 100, 110, 120]
				},
				{
					name:'Pond 2',
					type:'line',
					smooth: true,
					data: [130, 140, 150, 160, 170, 180,190, 200, 210, 220, 230, 240]
				},
				{
					name:'Pond 3',
					type:'line',
					xAxisIndex: 1,
					smooth: true,
					data: [250, 260, 270, 280, 290, 300, 310,320,330,340,350,360]
				},
				{
					name:'Pond 4',
					type:'line',
					smooth: true,
					data: [100, 200, 300, 40, 50, 60, 70, 80, 90, 10, 110, 120]
				},
				{
					name:'Pond 5',
					type:'line',
					smooth: true,
					data: [250, 206, 270, 280, 290, 300, 310,320,330,340,350,360]
				}
			]
		};

		eChart_3.setOption(option2);
		eChart_3.resize();
	}*/
	
	
	
}
/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
		if( $('#sparkline_4').length > 0 ){
			$("#sparkline_4").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
				type: 'line',
				width: '100%',
				height: '45',
				lineColor: '#0FC5BB',
				fillColor: '#0FC5BB',
				minSpotColor: '#0FC5BB',
				maxSpotColor: '#0FC5BB',
				spotColor: '#0FC5BB',
				highlightLineColor: '#0FC5BB',
				highlightSpotColor: '#0FC5BB'
			});
		}	
	}
	var sparkResize;
/*****Sparkline function end*****/

/*****Resize function start*****/
var sparkResize,echartResize;
$(window).on("resize", function () {
	/*Sparkline Resize*/
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);
	
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
sparklineLogin();
echartsConfig();
/*****Function Call end*****/