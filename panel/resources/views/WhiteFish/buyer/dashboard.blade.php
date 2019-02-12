@extends('layouts.WhiteFish.buyer.master')
@section('main-content')
<link href="{{ URL::asset('themeAssets/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>
    <div class="container-fluid pt-25">
		<!-- Row -->
		<div class="row">
			{{--<div class="col-md-3">
				<div style="height: 290px" class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
							<span class="uppercase-font weight-500 font-14 block text-center txt-dark">Total investment<span style="color:#878787; font-size: 12px" class="block">Last harvest</span></span>	
							<div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
								<span class="counter-anim">0</span>
							</div>
							<div class="progress-anim mt-20">
								<div class="progress">
									<div class="progress-bar progress-bar-primary
									wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<ul class="flex-stat mt-5">
								@foreach($investInventoryTypeList as $key=>$value)
									@if($key<3)
										<p class="block">
											<span class="pull-left">{{ $value->name }}</span>
											<span class="pull-right weight-500 txt-dark font-15">{{ $value->inventoriesTotalPrice }} (&#2547)</span>
										</p>
									@endif
								@endforeach
							</ul>
						</div>
                    </div>
                </div>
			</div>
			 <div class="col-md-3">
				<div style="height: 290px" class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
							<span class="uppercase-font weight-500 font-14 block text-center txt-dark">Total revenue<span style="color:#878787; font-size: 12px" class="block">Last harvest</span></span>
							<div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
								<span class="counter-anim">{{ $harvestTotalAmount->totalPrice }}</span>
							</div>
							<div class="progress-anim mt-20">
								<div class="progress">
									<div class="progress-bar progress-bar-primary
									wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<ul class="flex-stat mt-5">
								@foreach($harvestFishWise as $key=>$value)
									@if($key<3)
										<p class="block pull-left" style="width:100%">
											<span class="pull-left">{{ $value->name }}</span>
											<span class="pull-right weight-500 txt-dark font-15">{{ $value->totalPrice }} (&#2547)</span>
										</p>
									@endif
								@endforeach
							</ul>
						</div>
                    </div>
                </div>
			</div> --}}
			<div class="col-md-3">
				<div style="height: 290px" class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
							<span class="uppercase-font weight-500 font-14 block text-center txt-dark">Total Order/Buy</span>	
							<div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
								<span class="counter-anim">4567833</span>
							</div>
							<div class="progress-anim mt-20">
								<div class="progress">
									<div class="progress-bar progress-bar-primary
									wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<ul class="flex-stat mt-5">
								<p class="block">
									<span class="pull-left">Telapia</span>
									<span class="pull-right weight-500 txt-dark font-15">34344 (&#2547)</span>
								</p>
							</ul>
						</div>
                    </div>
                </div>
			</div>
			<div class="col-md-3">
				<div style="height: 140px" class="panel card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body row pa-0">
							<div class="sm-data-box">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
											<span class="weight-500 uppercase-font block">Ponds</span>
											<span class="block counter txt-dark"><span class="counter-anim">{{ $curlData->pond_number }}</span></span>
										</div>
										<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
											<span class="weight-500 uppercase-font block">Blocks</span>
											<span class="block counter txt-dark"><span class="counter-anim">{{ count((array)$curlData->block) }}</span></span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="height: 140px" class="panel card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body row pa-0">
							<div class="sm-data-box">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left">
											<span class="weight-500 uppercase-font block">Cultivation Fishes</span>
											<span class="block counter txt-dark"><span class="counter-anim">{{ count((array)$curlData->fish) }}</span></span>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 _hidden">
				<div style="height: 508px; max-height: 598px;" class="panel panel-default card-view panel-refresh">

					<div class="refresh-container">
						<div class="la-anim-1"></div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Pond Invest Day Wise</h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block refresh">
								<i class="zmdi zmdi-replay"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box box-primary">
			            <div class="box-body no-padding">
			              <div style="padding:20px" id="dashboardCalendar"></div>
			            </div>
			        </div>

			        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      
					    </div>
					  </div>
					</div>
		         </div>
	        </div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 _hidden">
				<div style="height: 508px; max-height: 598px;" class="panel panel-default card-view panel-refresh">

					<div class="refresh-container">
						<div class="la-anim-1"></div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Pond Harvest Day Wise</h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block refresh">
								<i class="zmdi zmdi-replay"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box box-primary">
			            <div class="box-body no-padding">
			              <div style="padding:20px" id="dashboardHarvestCalendar"></div>
			            </div>
			        </div>

			        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      
					    </div>
					  </div>
					</div>
		         </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view panel-refresh">
					<iframe src="https://www.google.com/maps/d/embed?mid=1QElAMwhfDO0frK8O0yzfr7GkHr4_LPlc" width="100%" height="650"></iframe>
				</div>
			</div>
		</div>
		<!-- /Row -->
	</div>
	<script src="{{ URL::asset('themeAssets/bower_components/fullcalendar/dist/adminlte.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/fullcalendar/dist/moment.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/chartist/dist/Chart.min.js') }}"></script>
	{{-- <script src="{{ URL::asset('themeAssets/js/calendar.js') }}"></script> --}}

	@include('layouts.WhiteFish.buyer.dashboardJS')
@endsection