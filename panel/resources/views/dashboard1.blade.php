<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/goofy/full-width-light/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 06:28:33 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>title</title>
	<meta name="description" content="eTraceability" />	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="{{ URL::asset('themeAssets/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="{{ URL::asset('themeAssets/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="{{ URL::asset('themeAssets/css/style.css') }}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="{{ URL::asset('themeAssets/css/jquery-ui.css') }}">

	<!-- jQuery -->
	<script src="{{ URL::asset('themeAssets/bower_components/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>
	

	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
	<div class="wrapper theme-5-active pimary-color-blue slide-nav-toggle">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="#">
							<img class="brand-img" src="{{ asset('image/nav_logo.png') }}" alt="eTraceability"/>
							<span class="brand-text">eTraceability</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">

					<li>
						<a title="Quick Search" id="open_right_sidebar" href="#"><i class="zmdi zmdi-search top-nav-icon"></i></a>
					</li>
					<li class="dropdown app-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
							<li>
								<div class="app-nicescroll-bar" style="width:300px !important; height: 435px !important;">
									<div class="row">
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/pond.svg') }}" alt="Ponds"/>
												<span class="block">Ponds</span>
											</a>
										</div>
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/harvest.svg') }}" alt="Harvest"/>
												<span class="block">Harvest</span>
											</a>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/feed.svg') }}" alt="Feeds"/>
												<span class="block">Feeds</span>
											</a>
										</div>
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/fish.svg') }}" alt="Fish"/>
												<span class="block">Fish</span>
											</a>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/commercial.svg') }}" alt="Commercial"/>
												<span class="block">Commercial</span>
											</a>
										</div>
										<div class="col-md-6 app-nicescroll-bar-icon">
											<a href="#" class="connection-item">
												<img class="img-responsive" src="{{ asset('image/shortcutIcon/overhead.svg') }}" alt="Overhead"/>
												<span class="block">Overhead</span>
											</a>
										</div>
									</div>
								</div>	
							</li>
							<li>
								<div class="app-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> more </a>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">33</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">Notifications</span>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									
									<a href="#">

										<a href="#">

											<div class="sl-item">
												<p>
													<div class="icon bg-green">
														
														<i class="zmdi zmdi-flag"></i>

														<i class="zmdi zmdi-trending-up"></i>
														
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font  pull-left truncate head-notifications" style="color: green">

														</span>
														<span class="inline-block font-11  pull-right notifications-time"></span>
														<div class="clearfix"></div>
														<p class="truncate">

														</p>
													</div>
												</p>	
											</div>
											<hr class="light-grey-hr ma-0"/>
										</a>

									</div>
								</li>
								<li>
									<div class="notification-box-bottom-wrap">
										<hr class="light-grey-hr ma-0"/>
										<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</li>

						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="#"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>	
			</nav>
			<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span> 
						<i class="zmdi zmdi-more"></i>
					</li>

					
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->

			<!-- Right Sidebar Menu -->

			<div class="fixed-sidebar-right">
				<ul class="right-sidebar nav navbar-nav">
					<li class="right-sidebar-panel">
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#QuickFilter">Search</a></li>

							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="QuickFilter" class="tab-pane fade active in" role="tabpanel">
									<div class="QuickFilter-cmplt-wrap">
										<div class="QuickFilter-box-wrap">
											<div class="row">
												<div class="col-md-12">
													<div class="form-wrap">
														<form>



															<div class="form-group QuickFilter-Item">
																<label for="selectInventory" class="control-label mb-10">Inventory Type</label>
																<select class="form-control" name="inventoryType">
																	<option value="0">Choose Inventory Type</option>
																</select>
															</div>

															<div class="form-group QuickFilter-Item">
																<button type="submit" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								

							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<!-- /Right Sidebar Menu -->

		<!-- Right Setting Menu -->
		<div class="setting-panel">
			<ul class="right-sidebar nicescroll-bar pa-0">
				<li class="layout-switcher-wrap">
					<ul>
						<li>
							<span class="layout-title">Scrollable header</span>
							<span class="layout-switcher">
								<input type="checkbox" id="switch_3" class="js-switch"  data-color="#0FC5BB" data-secondary-color="#dedede" data-size="small"/>
							</span>	
							<h6 class="mt-30 mb-15">Theme colors</h6>
							<ul class="theme-option-wrap">
								<li id="theme-1"><i class="zmdi zmdi-check"></i></li>
								<li id="theme-2"><i class="zmdi zmdi-check"></i></li>
								<li id="theme-3"><i class="zmdi zmdi-check"></i></li>
								<li id="theme-4"><i class="zmdi zmdi-check"></i></li>
								<li id="theme-5"><i class="zmdi zmdi-check"></i></li>
								<li id="theme-6"  class="active-theme"><i class="zmdi zmdi-check"></i></li>
							</ul>
							<h6 class="mt-30 mb-15">Primary color Settings</h6>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-green" value="pimary-color-green">
								<label for="pimary-color-green"> Green </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-red" value="pimary-color-red">
								<label for="pimary-color-red"> Red </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-blue" checked value="pimary-color-blue">
								<label for="pimary-color-blue"> Blue </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-yellow" value="pimary-color-yellow">
								<label for="pimary-color-yellow"> Yellow </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-pink" value="pimary-color-pink">
								<label for="pimary-color-pink"> Pink </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-orange" value="pimary-color-orange">
								<label for="pimary-color-orange"> Orange </label>
							</div>
							<div class="radio mb-5">
								<input type="radio" name="radio-primary-color" id="pimary-color-gold" value="pimary-color-gold">
								<label for="pimary-color-gold"> Gold </label>
							</div>
							<div class="radio mb-35">
								<input type="radio" name="radio-primary-color" id="pimary-color-silver" value="pimary-color-silver">
								<label for="pimary-color-silver"> Silver </label>
							</div>
							<button id="reset_setting" class="btn  btn-primary btn-xs btn-outline btn-rounded mb-10">reset</button>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
		<div class="page-wrapper">
			@include('message')
			@yield('main-content')
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30" style="background-color: #56B7E1;color: white">
				<div class="row">
					<div class="col-sm-12">
						<p>Designed &amp; Develped By <a href="http://www.unifoxdigitalmedia.com/" target="_blank">Unifox Digital Media</a> &copy; <?php echo date('Y'); ?> , eTraceability.</p>
					</div>
				</div>
			</footer>
		</div>	

	</div>






	<!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

	<!-- Counter Animation JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

	<!-- Data table JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/jszip/dist/jszip.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

	<script src="{{ URL::asset('themeAssets/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/js/export-table-data.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/js/productorders-data.js') }}"></script>

	<!-- Owl JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/switchery/dist/switchery.min.js') }}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{ URL::asset('themeAssets/js/jquery.slimscroll.js') }}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{ URL::asset('themeAssets/js/dropdown-bootstrap-extended.js') }}"></script>

	<!-- Sparkline JavaScript -->
	<script src="{{ URL::asset('themeAssets/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

	<!-- EChartJS JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/echarts/dist/echarts-en.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/echarts-liquidfill.min.js') }}"></script>

	<!-- Toast JavaScript -->
	<script src="{{ URL::asset('themeAssets/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>

	<!-- Init JavaScript -->
	<script src="{{ URL::asset('themeAssets/js/init.js') }}"></script>
	<script src="{{ URL::asset('themeAssets/js/dashboard3-data.js') }}"></script>

	<!--  DtePicker  -->
	<script src="{{ URL::asset('themeAssets/js/jquery-ui.js') }}"></script>

	<script type="text/javascript">
		$( function() {
			$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });




		});
	</script>
</body>


</html>
