<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MBS tracking system dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url ('assets/images/favicon2.ico'); ?>">
    <!-- Google Fonts
		============================================ -->
    <link  href="<?php echo base_url ('assets/css/fonts_robo.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css'); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css'); ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/owl.theme.css'); ?>">
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/owl.transitions.css'); ?>">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/meanmenu/meanmenu.min.css'); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/animate.css'); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/normalize.css'); ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/scrollbar/jquery.mCustomScrollbar.min.css'); ?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/jvectormap/jquery-jvectormap-2.0.3.css'); ?>">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/notika-custom-icon.css'); ?>">

    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/wave/waves.min.css'); ?>">
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/wave/button.css'); ?>">
    <!-- dialog CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/dialog/dialog.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/style.css'); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet"  href="<?php echo base_url ('assets/css/responsive.css'); ?>">
    <!-- modernizr JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
</head>
 
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img  src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notification</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>billy kamwaza</h3>
                                                    <p>edited a report on human rights</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Octavius Dulani</h3>
                                                    <p>did not do work assigned</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Emily Bwanali</h3>
                                                    <p>on leave till further notice</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Nora Nyasulu</h3>
                                                    <p>substandard goods reported to be illigally imported in malawi</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Lola Rice</h3>
                                                    <p>restuarants in shambles in mzuzu</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="glyphicon glyphicon-user"></i></span></a>
                                <div role="menu" class=" dropdown-menu animated zoomIn dropdown-trig-sing">
                                       <ul class="dropdown-menu" role="menu">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="notika-icon notika-house"></i> Action</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="notika-icon notika-star"></i> Another action</a>
                                                        </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="notika-icon notika-next"></i> Settings</a></li>
                                                        <li class="divider"></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="notika-icon notika-map"></i> log out</a>
                                                        </li>
                                                    </ul>
                                        
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="#">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="<?php echo base_url() ?>tables">Normal Table</a></li>
                                        <li><a href="<?php echo base_url() ?>tables">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Data</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Lab Admin</a></li>
                                        <li><a href="form-components.html">Scientic Officer</a></li>
                                        <li><a href="form-examples.html">Deputy Director</a></li>
                                        <li><a href="form-examples.html">Director</a></li>
                                    </ul>
                                </li>
 
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Admin</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Add Users</a>
                                        </li>
                                        <li><a href="invoice.html">Modify Rights</a>
                                        </li>
                                        <li><a href="typography.html">Database Backup</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Data</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Admin</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="flot-charts.html">Personel Work Statistics</a>
                                </li>
                                <li><a href="bar-charts.html">Reporting Statistics</a>
                                </li>
                                <li><a href="line-charts.html">Monthly Task Forecast</a>
                                </li>
                                <li><a href="area-charts.html">Monthly Forecast View</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo base_url() ?>tables">Monthly Backcast</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>tables">Monthly Task</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>tables">General Reporting</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>tables">Divisional Statistics</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>tables">Sectional Statistics</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>tables">Personel Stats</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Lab Administrator</a>
                                </li>
                                <li><a href="form-components.html">Scientific Officer</a>
                                </li>
                                <li><a href="form-examples.html">Deputy Director</a>
                                </li>
                                <li><a href="form-examples.html">Director</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Add Users</a>
                                </li>
                                <li><a href="invoice.html">Modify Rights</a>
                                </li>
                                <li><a href="typography.html">Backup Database</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Dialog area Start-->
    <div class="dialog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner">
                        <div class="contact-hd dialog-hd">
                            <h2>Start a New Sample</h2>
                            <p>You can start a new sample request</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <a href="<?php echo base_url(); ?>samples/new_sample"><button class="btn btn-info" id="sa-basic">Start</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner sm-res-mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>View Previous Samples</h2>
                            <p>You can view all sample being processed and those alread finished</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <a href="<?php echo base_url(); ?>samples/previous_samples"><button class="btn btn-info" id="sa-title">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Reports</h2>
                            <p>View different analysis report</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <a href="<?php echo base_url(); ?>reports/line_charts"><button class="btn btn-info" id="sa-success">View</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="dialog-inner mg-t-30">
                        <div class="contact-hd dialog-hd">
                            <h2>Users</h2>
                            <p>View and Manage users</p>
                        </div>
                        <div class="dialog-pro dialog">
                            <a href="<?php echo base_url(); ?>manage_users/all_users"><button class="btn btn-info" id="sa-warning">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dialog area End-->


    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"> </script>
    <script  src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- wow JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/jquery-price-slider.js'); ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js" src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/jquery.scrollUp.min.js'); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/jquery.meanmenu.js'); ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/counterup/jquery.counterup.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/counterup/waypoints.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/counterup/counterup-active.js'); ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <!-- jvectormap JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/jvectormap/jquery-jvectormap-2.0.2.min.jss'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/jvectormap/jvectormap-active.js'); ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/sparkline/sparkline-active.js'); ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/flot/jquery.flot.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/flot/jquery.flot.resize.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/flot/curvedLines.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/flot/flot-active.js'); ?>"></script>
    <!-- knob JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/knob/jquery.knob.jss'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/knob/jquery.appear.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/knob/knob-active.js'); ?>"></script>
    <!--  wave JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/wave/waves.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/wave/wave-active.js'); ?>"></script>
    <!--  todo JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/todo/jquery.todo.js'); ?>"></script>
    <!-- plugins JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
	<!--  Chat JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/chat/moment.min.js'); ?>"></script>
    <script  src="<?php echo base_url('assets/js/chat/jquery.chat.js'); ?>"></script>
    <!-- main JS
		============================================ -->
    <script  src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>