<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buyer</title>


    <link rel="stylesheet" href="{{ asset('auth/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/custom-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/cubeportfolio.min.css') }}">


    <!-- charts css Starts-->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="{{ asset('assets/css/skins/_all-skins.min.css') }}">
       <!-- Morris chart -->
       <link rel="stylesheet" href="{{ asset('assets/css/morris.css') }}">
       <!-- bootstrap datepicker -->
       <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">

       <!-- charts css Ends-->
       <!-- Google Font -->
       <link rel="stylesheet"
       href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


       <script src="{{ asset('auth/js/jquery.min.js') }}"></script>
       <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
       <!-- <script src="{{ asset('auth/js/custom.js') }}"></script> -->
       <script src="{{ asset('auth/js/modernizr.custom.js') }}"></script>
       <script>
        // $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/jquery.simplemarquee.js') }}"></script> -->

    <!-- Important Javascripts -->


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('js')

    <script src="{{ asset('assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <style>
    .header_section{
        width: 100%;
        height: 50px;
        overflow: hidden;
    }
    .site_info_left{
        background: #72AC4B;
        height: 50px;
        transform: skewX(-30deg);
        -webkit-transform: skewX(-30deg);
        position: absolute;
        left: 0;
        margin-left: -14px;
    }
    .site_info_left .social-link{
        transform: skewX(30deg);
        -webkit-transform: skewX(30deg);
        padding: 10px;
    }
    .site_info_left .social-link a{
        padding: 10px;
        color: #ffffff;
    }
    .site_info_left p{
        transform: skewX(30deg);
        -webkit-transform: skewX(30deg);
        margin: 0;
        font-size: 17px;
        color: #fff;
        text-transform: capitalize;
        line-height: 1.5;
        padding: 10px;
    }

    .main_header{
        /*padding: 0;*/
        /*margin: 0;*/
    }
    .site_info_right{
        /*display: block;*/
        position: absolute;
        right: 0;
        background: url("{{asset('files/auth/1.png')}}");
        height: 50px;
    }

    .middle_header{
        width: 100%;
        min-height: 100px;
        background: #f3f3f5;
        border-bottom: 2px solid #72AC4B;
        overflow: hidden;
    }
    .logo{
        position: absolute;
        left: 0;
    }
    .nav_info_block{
        position: absolute;
        right: 0;
    }
    .nav_info{
        float: right;
        padding: 30px 10px 10px 10px;
    }
    .nav_info .form-control{
        border-color: #72AC4B;
    }
    .nav_info .form-control option:checked { color: #72AC4B; }
    .nav_info a{
        background-color: #72AC4B;
        color:white;
    }
    .footer{
        width: 100%;
        /*height: 250px;*/
        /*overflow: hidden;*/
        background: #ffffff;
        /*position: absolute;*/
        /*bottom: 0;*/
        /*border-top: 2px solid #72AC4B;*/
    }
    .footer_top{
        min-height: 200px;
        /*overflow: hidden;*/
    }
    .widget h5{
        margin-bottom: 30px;
        display: inline-block;
        position: relative;
        font-size: 18px;
        line-height: 28px;
        text-transform: uppercase;
    }
    .widget a{
        color: #303030;
    }
    .widget a:hover{
        border-bottom: 1px  solid #303030;
    }
    .widget p{
        font-size: 15px;
        font-weight: 400;
    }
    .widget ul{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .widget ul li{
        font-size: 15px;
        padding: 5px 0;
    }
    .widget_icon a{
        display: inline-block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        border: 1px solid #ddd;
        text-align: center;
        margin-right: 10px;
    }
    .widget_icon a:hover {
        background: #72AC4B;
        color: #fff;
        border: 1px solid #72AC4B;
    }
    .footer_bottom{
        background-color: #72AC4B;
        padding: 10px 0;
        height: 50px;
        /*position: absolute;*/
        /*bottom: 0;*/
        /*overflow: hidden;*/
    }
    .footer-bottom-text{
        text-align: center;
        color: #ffffff;
        font-size: 15px;
    }
    .main_content{
        width: 100%;
        overflow: hidden;
        /*height: 800px;*/
        background: url('{{asset('files/3_a.png')}}') fixed no-repeat;
        background-size: cover;
        -webkit-background-size: cover;

    }
    .content_info{
        background: #72ac4b7a;
    }
    .content_info h1{
        color: #ffffff
    }
    .tab_content a{
        color: #72AC4B;
    }
    .btn_custom{
        background-color: #72AC4B;
        border-color: #72AC4B;
        color: #ffffff !important;
    }
    .single_product_info{
        background-color: #ffffff
    }
    .single_product_info h4{
        padding: 5px;
        text-align: center;
    }
    .client_section{
        background: #ffffff;
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        margin-bottom: 20px;
        padding-top: 50px;
    }
    .client_section a{
        box-shadow: 2px 2px 15px 1px #222;
        transition: transform .5s;
        -webkit-transition: transform .5s;
    }
    .client_section a:hover{
        transform: scale(1.05);
        -webkit-transform:  scale(1.05);
    }
</style>
</head>
<body>
    <div class="header_section">
        <div class="container">
            <div class="row main_header">
                {{--<div class="col-md-6 site_info">--}}
                    {{--<p>--}}
                        {{--Welcome to Farmersmarket.Asia--}}
                    {{--</p>--}}
                {{--</div>--}}
                <div class="col-md-6 site_info_left">
                    <div class="social-link">
                        <a href="https://www.facebook.com/farmersmarket.asia/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-6 site_info_right">
                    {{--<div class="social-link">--}}
                        {{--<a href="https://www.facebook.com/farmersmarket.asia/"><i class="fa fa-facebook"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="middle_header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 logo">
                    <a class=""  href=""><img src="{{ asset('files/Farmers-Market.png') }}" alt="" width="200"   /></a>
                </div>
                <div class="col-md-6 nav_info_block">
                    <div class="nav_info">
                        <div class="col-md-7 col-sm-6">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <a href="" class="btn pull-right">Client Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content">
        <section class="container content_info">
            @yield('content')
        </section>
    </div>


    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="widget">
                            <h5><a href="#">About Us</a></h5>
                            <p>Asia's largest agricultural online auction market place with credible and verified inventory /data base that allows famers and traders to engage, interact and trade cross boarder on single platform.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h5><a href="#">Keep in Touch</a></h5>
                            <ul>
                                <li>Address : Road - 4 House - 57, Banani Dhaka, Bangladesh</li>
                                <li>Phone : +880298207793  </li>
                                <li>Email : info@farmersmarket.asia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h5><a href="#">Social Media Profile</a></h5>
                            <div class="widget_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer-bottom-text">
                <p>Farmersmarket.Asia © 2018 - All Right Reserved</p>
            </div>

        </div>
    </footer>
    <script>

        $('#country').on('change',function () {
            var countryId=$(this).val();
            if(countryId!=1){
                var countryName=$('#country option:selected').text();
                alert('No Data Available for '+countryName);
                $(this).val(1);
            }
        })
    </script>
</body>

</html>