@extends('dashboard1')
@section('main-content')
<link href="{{ URL::asset('themeAssets/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>
<div class="container-fluid pt-25">
	<!-- Row -->

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 _hidden">
			<div style="height: 600px;" class="panel panel-default card-view panel-refresh">
				<div class="refresh-container">
					<div class="la-anim-1"></div>
				</div>
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Daily Buy Report</h6>
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
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default card-view">
						<div class="panel-wrapper collapse in">
							<div class="panel-body sm-data-box-1">
								<span class="uppercase-font weight-500 font-14 block text-center txt-dark">Total Buy</span></span>
								<div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
									<span class="counter-anim">777</span>
								</div>
								<div class="progress-anim mt-20">
									<div class="progress">
										<div class="progress-bar progress-bar-primary
										wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<ul class="flex-stat mt-5">

									<p class="block pull-left" style="width:100%">
										<span class="pull-left">444</span>
										<span class="pull-right weight-500 txt-dark font-15">555</span>
									</p>	
									<p class="block pull-left" style="width:100%">
										<span class="pull-left">444</span>
										<span class="pull-right weight-500 txt-dark font-15">555</span>
									</p>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div style="_height: 290px" class="panel panel-default card-view">
						<div class="panel-wrapper collapse in">
							<div class="panel-body sm-data-box-1">
								<span class="uppercase-font weight-500 font-14 block text-center txt-dark">Last 30 Days Buy</span>
								<div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
									<span class="counter-anim">444</span>
								</div>
								<div class="progress-anim mt-20">
									<div class="progress">
										<div class="progress-bar progress-bar-primary
										wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<ul class="flex-stat mt-5">

									<p class="block pull-left" style="width:100%">
										<span class="pull-left">pp</span>
										<span class="pull-right weight-500 txt-dark font-15">333</span>
									</p>
									
								</ul>
							</div>
						</div>
					</div>
				</div>	

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default card-view panel-refresh">
						<div class="refresh-container">
							<div class="la-anim-1"></div>
						</div>
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Fish Buying Report</h6>
							</div>
							<div class="pull-right">
								<a href="#" class="pull-left inline-block refresh">
									<i class="zmdi zmdi-replay"></i>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div id="fish_buing" class="" style="height:220px;"></div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Row -->
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


@include('layouts.WhiteFish.buyer.dashboardJS')
@endsection