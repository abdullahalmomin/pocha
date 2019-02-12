<script type="text/javascript">
		$(document).ready(function(){
			$('.pondsRevenueBlock').on('click',function(){
				var block_id = $(this).attr('data-id');
				var change = $(this).closest('.panel-heading');
	            {{-- var url='{{ route('WhiteFish.client.pondsRevenueBlockWise') }}'; --}}
	            $.ajax({
	                url:url+'?block_id='+block_id,
	            }).done(function(pondsRevenueData){
	            	var dataPondsRevenue = [];
	            	$.each(pondsRevenueData, function(index, element) {
					    dataPondsRevenue.push({value: element.pondTotalInvest, name: element.name});
					});
	            	change.find('.harvestPondWiseBlock').html(pondsRevenueData[0].blockName);
	            	var eChart_2 = echarts.init(document.getElementById('pondsRevenue'));
					var option1 = {
						tooltip : {
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
						// color: ['#0FC5BB', '#92F2EF', '#D0F6F5'],
						color: ['#0FC5BB', '#0FC5BB', '#5AC4CC'],
						series : [
							{
								name: 'task',
								type: 'pie',
								radius : '55%',
								center: ['50%', '50%'],
								roseType : 'radius',
								tooltip : {
									trigger: 'item',
									formatter: "{a} <br/>{b} : {c} ({d}%)",
									backgroundColor: 'rgba(33,33,33,1)',
									borderRadius:0,
									padding:10,
									textStyle: {
										color: '#fff',
										fontStyle: 'normal',
										fontWeight: 'normal',
										fontFamily: "'Open Sans', sans-serif",
										fontSize: 12
									}	
								},
								data:dataPondsRevenue,
								itemStyle: {
									emphasis: {
										shadowBlur: 10,
										shadowOffsetX: 0,
										shadowColor: 'rgba(0, 0, 0, 0.5)'
									}
								}
							}
						]
					};
					eChart_2.setOption(option1);
					eChart_2.resize();
	            }).fail(function (data) {
	                console.log('error');
	            });
			});
		$('.datatable').DataTable({
			"bFilter": true,
			"bLengthChange": true,
			"bPaginate": true,
			"bInfo": true,
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});

		/*if( $('#pondsRevenue').length > 0 ){
			var eChart_2 = echarts.init(document.getElementById('pondsRevenue'));
			var option1 = {
				tooltip : {
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
				// color: ['#0FC5BB', '#92F2EF', '#D0F6F5'],
				color: ['#0FC5BB', '#0FC5BB', '#5AC4CC'],
				series : [
					{
						name: 'task',
						type: 'pie',
						radius : '55%',
						center: ['50%', '50%'],
						roseType : 'radius',
						tooltip : {
							trigger: 'item',
							formatter: "{a} <br/>{b} : {c} ({d}%)",
							backgroundColor: 'rgba(33,33,33,1)',
							borderRadius:0,
							padding:10,
							textStyle: {
								color: '#fff',
								fontStyle: 'normal',
								fontWeight: 'normal',
								fontFamily: "'Open Sans', sans-serif",
								fontSize: 12
							}	
						},
						data:[
							 {{--@foreach($harvestPondWise as $value) --}}
								{{-- {value:{{ $value->pondTotalInvest }}, name:'{{ $value->name }}'}, --}}
							{{--@endforeach--}}
						],
						itemStyle: {
							emphasis: {
								shadowBlur: 10,
								shadowOffsetX: 0,
								shadowColor: 'rgba(0, 0, 0, 0.5)'
							}
						}
					}
				]
			};
			eChart_2.setOption(option1);
			eChart_2.resize();
		}*/

		// Return on Investment
		/*if( $('#roi').length > 0 ){
			var ctx6 = document.getElementById("roi").getContext("2d");
			var data6 = {
				 labels: [
				"Invest",
				"Revenue"
			],
			datasets: [
				{
					{{-- data: [{{ $investTotalAmount->totalPrice }},{{ $harvestTotalAmount->totalPrice }}], --}}
					backgroundColor: [
						"rgba(15, 197, 187, 1)",
						"rgba(90, 196, 204, 1)"
					],
					hoverBackgroundColor: [
						"rgba(15, 197, 187, 1)",
						"rgba(90, 196, 204,1)"
					]
				}]
			};
			
			var pieChart  = new Chart(ctx6,{
				type: 'pie',
				data: data6,
				options: {
					animation: {
						duration:	3000
					},
					responsive: true,
					legend: {
						labels: {
						fontFamily: "Open Sans",
						fontColor:"#878787"
						}
					},
					tooltip: {
						backgroundColor:'rgba(33,33,33,1)',
						cornerRadius:0,
						footerFontFamily:"'Open Sans'"
					},
					elements: {
						arc: {
							borderWidth: 0
						}
					}
				}
			});
		}*/


		/*if( $('#pond_invest').length > 0 ){
			var eChart_2 = echarts.init(document.getElementById('pond_invest'));
			var option1 = {
				tooltip : {
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
				// color: ['#0FC5BB', '#92F2EF', '#D0F6F5'],
				color: ['#0FC5BB', '#0FC5BB', '#5AC4CC'],
				series : [
					{
						name: 'task',
						type: 'pie',
						radius : '55%',
						center: ['50%', '50%'],
						roseType : 'radius',
						tooltip : {
							trigger: 'item',
							formatter: "{a} <br/>{b} : {c} ({d}%)",
							backgroundColor: 'rgba(33,33,33,1)',
							borderRadius:0,
							padding:10,
							textStyle: {
								color: '#fff',
								fontStyle: 'normal',
								fontWeight: 'normal',
								fontFamily: "'Open Sans', sans-serif",
								fontSize: 12
							}	
						},
						data:[
							{{-- @foreach($investPondWise as $value) --}}
								{{-- {value:{{ $value->pondTotalInvest }}, name:'{{ $value->name }}'}, --}}
							{{-- @endforeach --}}
						],
						itemStyle: {
							emphasis: {
								shadowBlur: 10,
								shadowOffsetX: 0,
								shadowColor: 'rgba(0, 0, 0, 0.5)'
							}
						}
					}
				]
			};
			eChart_2.setOption(option1);
			eChart_2.resize();
		}*/
	})
	$(function () {

	    /* initialize the external events
	     -----------------------------------------------------------------*/
	    function init_events(ele) {
	      ele.each(function () {

	        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
	        // it doesn't need to have a start or end
	        var eventObject = {
	          title: $.trim($(this).text()) // use the element's text as the event title
	        }

	        // store the Event Object in the DOM element so we can get to it later
	        $(this).data('eventObject', eventObject)

	        // make the event draggable using jQuery UI
	        $(this).draggable({
	          zIndex        : 1070,
	          revert        : true, // will cause the event to go back to its
	          revertDuration: 0  //  original position after the drag
	        })

	      })
	    }

	    init_events($('#external-events div.external-event'))

	    /* initialize the calendar
	     -----------------------------------------------------------------*/
	    //Date for the calendar events (dummy data)
	    var date = new Date()
	    var d    = date.getDate(),
	        m    = date.getMonth(),
	        y    = date.getFullYear()
	    $('#dashboardCalendar').fullCalendar({
	      header    : {
	        left  : 'prev,next today',
	        center: 'title',
	        right : 'month,agendaWeek,agendaDay'
	      },
	      buttonText: {
	        today: 'today',
	        month: 'month',
	        week : 'week',
	        day  : 'day'
	      },
	      //Random default Events
	      events    : [
	      	@if(isset($curlData->allHarvestRecord))
		      	@foreach($curlData->allHarvestRecord as $value)
			        {
			          title          : '{{ $value->qty }}',
			          start          : '{{ $value->created_at->toDateString() }}',
			          backgroundColor: '#f39c12',
			          borderColor    : '#f39c12',
			          
			          url            : '{{ url('WhiteFish/investBreakdown?to='.$value->created_at->toDateString()) }}', 
			        },
		        @endforeach
	        @endif
	      ],
	      editable  : true,
	      droppable : true, // this allows things to be dropped onto the calendar !!!
	      drop      : function (date, allDay) { // this function is called when something is dropped

	        // retrieve the dropped element's stored Event Object
	        var originalEventObject = $(this).data('eventObject')

	        // we need to copy it, so that multiple events don't have a reference to the same object
	        var copiedEventObject = $.extend({}, originalEventObject)

	        // assign it the date that was reported
	        copiedEventObject.start           = date
	        copiedEventObject.allDay          = allDay
	        copiedEventObject.backgroundColor = $(this).css('background-color')
	        copiedEventObject.borderColor     = $(this).css('border-color')

	        // render the event on the calendar
	        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
	        $('#dashboardCalendar').fullCalendar('renderEvent', copiedEventObject, true)

	        // is the "remove after drop" checkbox checked?
	        if ($('#drop-remove').is(':checked')) {
	          // if so, remove the element from the "Draggable Events" list
	          $(this).remove()
	        }

	      }
	    })

	    /* initialize the  Harvest calendar
	     -----------------------------------------------------------------*/
	    //Date for the calendar events (dummy data)
	    var date = new Date()
	    var d    = date.getDate(),
	        m    = date.getMonth(),
	        y    = date.getFullYear()
	    $('#dashboardHarvestCalendar').fullCalendar({
	      header    : {
	        left  : 'prev,next today',
	        center: 'title',
	        right : 'month,agendaWeek,agendaDay'
	      },
	      buttonText: {
	        today: 'today',
	        month: 'month',
	        week : 'week',
	        day  : 'day'
	      },
	      //Random default events
	      events    : [
	      	@if(isset($curlData->allHarvestRecord))
		      	@foreach($curlData->allHarvestRecord as $value){
			          title          : '{{ $value->qty }} /=',
			          start          : '{{ $value->created_at->toDateString() }}',
			          backgroundColor: '#f39c12',
			          borderColor    : '#f39c12',
			          {{-- url            : '{{ url('WhiteFish/investBreakdown?to='.$value->created_at->toDateString().isset($pond_id)?'&pond_id='.$pond_id:'') }}',  --}}
			          url            : '{{ url('WhiteFish/harvestBreakdown?to='.$value->created_at->toDateString()) }}', 
			          {{-- url            : '{{ route('WhiteFish.client.investBreakdown',['to'=>$value->created_at->toDateString(),'pond_id'=>4]) }}', --}}
			        },
		        @endforeach
	        @endif
	      ],
	      editable  : true,
	      droppable : true, // this allows things to be dropped onto the calendar !!!
	      drop      : function (date, allDay) { // this function is called when something is dropped

	        // retrieve the dropped element's stored Event Object
	        var originalEventObject = $(this).data('eventObject')

	        // we need to copy it, so that multiple events don't have a reference to the same object
	        var copiedEventObject = $.extend({}, originalEventObject)

	        // assign it the date that was reported
	        copiedEventObject.start           = date
	        copiedEventObject.allDay          = allDay
	        copiedEventObject.backgroundColor = $(this).css('background-color')
	        copiedEventObject.borderColor     = $(this).css('border-color')

	        // render the event on the calendar
	        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
	        $('#dashboardHarvestCalendar').fullCalendar('renderEvent', copiedEventObject, true)

	        // is the "remove after drop" checkbox checked?
	        if ($('#drop-remove').is(':checked')) {
	          // if so, remove the element from the "Draggable Events" list
	          $(this).remove()
	        }

	      }
	    })

	    /* ADDING EVENTS */
	    var currColor = '#3c8dbc' //Red by default
	    //Color chooser button
	    var colorChooser = $('#color-chooser-btn')
	    $('#color-chooser > li > a').click(function (e) {
	      e.preventDefault()
	      //Save color
	      currColor = $(this).css('color')
	      //Add color effect to button
	      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
	    })
	    $('#add-new-event').click(function (e) {
	      e.preventDefault()
	      //Get value and make sure it is not null
	      var val = $('#new-event').val()
	      if (val.length == 0) {
	        return
	      }

	      //Create events
	      var event = $('<div />')
	      event.css({
	        'background-color': currColor,
	        'border-color'    : currColor,
	        'color'           : '#fff'
	      }).addClass('external-event')
	      event.html(val)
	      $('#external-events').prepend(event)

	      //Add draggable funtionality
	      init_events(event)

	      //Remove event from text input
	      $('#new-event').val('')
	    })
	  })
</script>