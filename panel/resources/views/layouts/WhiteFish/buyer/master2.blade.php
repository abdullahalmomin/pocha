<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/goofy/full-width-dark/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 May 2018 17:16:28 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data table CSS -->
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Toast CSS -->
    <link href="{{ asset('css/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <!-- bootstrap-select CSS -->
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Calendar CSS -->
    <link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Datetimepicker CSS -->
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <style type="text/css">
        /* .side-nav li span,.side-nav li i,{color: white !important;} */
    </style>
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-5-active pimary-color-blue">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="{{ route('client.dashboard') }}">
                        <img class="brand-img" src="{{ asset('image/nav_logo.png') }}" alt="eTraceability"/>
                        <span class="brand-text">eTraceability</span>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li style="background-color: #0FC5BB"><a href="{{URL::to('/')}}" style="color: #ffffff;font-weight: bold">Go to main site</a></li>
                <li class="dropdown alert-drp">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                    <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                        <li>
                            <div class="notification-box-head-wrap">
                                <span class="notification-box-head pull-left inline-block">notifications</span>
                                <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                                <div class="clearfix"></div>
                                <hr class="light-grey-hr ma-0"/>
                            </div>
                        </li>
                        <li>
                            <div class="streamline message-nicescroll-bar">
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-green">
                                            <i class="zmdi zmdi-flag"></i>
                                        </div>
                                        <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                New subscription created</span>
                                            <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-yellow">
                                            <i class="zmdi zmdi-trending-down"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                            <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-blue">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                            <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="sl-avatar">
                                            <img class="img-responsive" src="{{asset('image/avatar.png')}}" alt="avatar"/>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-red">
                                            <i class="zmdi zmdi-storage"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">consectetur, adipisci velit.</p>
                                        </div>
                                    </a>
                                </div>
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
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="@if(!is_null(auth()->user()->photo)){{asset(auth()->user()->photo)}} @else {{asset('image/avatar.png')}}@endif" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <li>
                            <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                        </li>
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-power"></i><span>Log Out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar" _style="background: #282e3f">
            <li class="navigation-header">
                <span>Welcome, {{auth()->user()->name}}!</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a class="active"  href="{{ route('client.dashboard') }}"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
            </li>
            {{-- <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#cluster_perspective" class="" aria-expanded="false"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Cluster-Perspective</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="cluster_perspective" class="collapse-level-1 two-col-list collapse in" aria-expanded="false" style="">
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#clusters" class="collapsed" aria-expanded="false">Clusters<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="clusters" class="collapse collapse-level-2" aria-expanded="false">
                            <li>
                                <a href="{{route('client.cluster.index')}}">View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#cluster_ponds" class="collapsed" aria-expanded="false">Cluster Ponds<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="cluster_ponds" class="collapse collapse-level-2" aria-expanded="false">
                            <li>
                                <a href="{{route('client.cluster_pond.index')}}">View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#cluster_pond_management" class="collapsed" aria-expanded="false">Pond Management<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="cluster_pond_management" class="collapse collapse-level-2" aria-expanded="false">
                            <li>
                                <a href="{{ route('client.cluster.enter_to_enclosure') }}">Enter to Enclosure</a>
                            </li>
                            <li>
                                <a href="{{ route('client.cluster.during_enclosure') }}">During Enclosure</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->


    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">
    @include('layouts.semi_intensive_client.messege')
    @yield('main-content')

    <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p><?php date('Y'); ?> &copy; 2018, eTraceability.</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- Moment JavaScript -->
<script type="text/javascript" src="{{ asset('js/moment-with-locales.min.js') }}"></script>
<!-- Bootstrap Datetimepicker JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
{{-- Datatables --}}
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/export-table-data.js') }}"></script>

<!-- EChartJS JavaScript -->
<script src="{{ asset('js/echarts-en.min.js') }}"></script>
<script src="{{ asset('js/echarts-liquidfill.min.js') }}"></script>
<script src="{{ asset('js/ecStat.min.js') }}"></script>

<!-- Toast JavaScript -->
<script src="{{ asset('js/jquery.toast.min.js') }}"></script>

<!-- Progressbar Animation JavaScript -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Calender JavaScripts -->
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar-data.js') }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset('js/switchery.min.js') }}"></script>

<!-- Bootstrap Select JavaScript -->
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('js/init.js') }}"></script>
<script src="{{ asset('js/dashboard4-data.js') }}"></script>
<script src="{{ asset('js/widgets-data.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script type="text/javascript">
    {{-- Sales Analytics --}}
    /*****E-Charts function start*****/
    var echartsConfig = function() {
        if( $('#e_chart_sales').length > 0 ){
            var eChart_1 = echarts.init(document.getElementById('e_chart_sales'));
            var option = {
                color: ['#0FC5BB', '#92F2EF','#D0F6F5'],
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
                toolbox: {
                    show: true,
                    orient: 'vertical',
                    left: 'right',
                    top: 'center',
                    showTitle: false,
                    feature: {
                        mark: {show: true},
                        magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                        restore: {show: true},
                    }
                },
                grid: {
                    left: '3%',
                    right: '10%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis : [
                    {
                        type : 'category',
                        data : ['2011','2012','2013','2014','2015','2016','2017'],
                        axisLine: {
                            show:false
                        },
                        axisLabel: {
                            textStyle: {
                                color: '#878787',
                                fontFamily: "'Open Sans', sans-serif",
                                fontSize: 12
                            }
                        },
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLine: {
                            show:false
                        },
                        axisLabel: {
                            textStyle: {
                                color: '#878787',
                                fontFamily: "'Open Sans', sans-serif",
                                fontSize: 12
                            }
                        },
                        splitLine: {
                            show: false,
                        }
                    }
                ],
                series : [
                    {
                        name:'1',
                        type:'bar',
                        data:[320, 332, 301, 334, 390, 330, 320]
                    },
                    {
                        name:'2',
                        type:'line',
                        stack: 'st1',
                        data:[120, 132, 101, 134, 90, 230, 210]
                    },
                    {
                        name:'3',
                        type:'bar',
                        stack: 'st1',
                        data:[220, 182, 191, 234, 290, 330, 310]
                    }
                ]
            };

            eChart_1.setOption(option);
            eChart_1.resize();
        }
    }
    /*****E-Charts function end*****/
            {{-- For Dashboard population Graph --}}
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
                    highlightLineColor: 'rgba(0, 0, 0, 0.6)',
                    highlightSpotColor: '#0FC5BB'
                });
            }
            if( $('#sparkline_5').length > 0 ){
                $("#sparkline_5").sparkline([0,2,8,6,8], {
                    type: 'bar',
                    width: '100%',
                    height: '45',
                    barWidth: '10',
                    resize: true,
                    barSpacing: '10',
                    barColor: '#0FC5BB',
                    highlightSpotColor: '#0FC5BB'
                });
            }
        }
    var sparkResize,echartResize;
    $(window).on("resize", function () {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 200);
        clearTimeout(echartResize);
        echartResize = setTimeout(echartsConfig, 200);
    }).resize();
    sparklineLogin();
    echartsConfig();
    {{-- End Dashboard population Graph --}}
</script>

{{-- Validator --}}
<script type="text/javascript" src="{{ asset('js/validator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>


<!-- Mirrored from hencework.com/theme/goofy/full-width-dark/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 May 2018 17:16:29 GMT -->
</html>
