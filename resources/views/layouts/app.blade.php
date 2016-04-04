<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>POS | Point of Sale</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/morris/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('/assets/global/css/components.css') }}" rel="stylesheet" id="style_components">
        <link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" id="style_color">
        <link href="{{ asset('/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet">

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('/') }}">
                        
                        <img src="{{ url('assets/layouts/layout/img/logo.png') }}" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                
                                <img alt="" class="img-circle" src="{{ url('assets/layouts/layout/img/avatar.png') }}" />
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    @include('layouts.partial.sidebar')
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    @yield('demo')
                </div>
                <!-- END CONTENT BODY -->
            </div>

            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 © Promate POS by Quick Marketing.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/js.cookie.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       <script src="{{ asset('/assets/global/plugins/moment.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/morris/morris.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/morris/raphael-min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/counterup/jquery.waypoints.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/counterup/jquery.counterup.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/amcharts.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/serial.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/pie.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/radar.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/light.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/ammap/ammap.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/amcharts/amstockcharts/amstock.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/flot/jquery.flot.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/flot/jquery.flot.resize.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/flot/jquery.flot.categories.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/jquery.sparkline.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/datatables/datatables.min.js') }}"></script>
       <script src="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
       <script src="{{ asset('/assets/global/scripts/app.min.js') }}"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="{{ asset('/assets/pages/scripts/dashboard.min.js') }}"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
       <script src="{{ asset('/assets/layouts/layout/scripts/layout.min.js') }}"></script>
       <script src="{{ asset('/assets/layouts/layout/scripts/demo.min.js') }}"></script>
       <script src="{{ asset('/assets/layouts/global/scripts/quick-sidebar.min.js') }}"></script>
       

        <!-- END THEME LAYOUT SCRIPTS -->
        @push('scripts')
        <script type="text/javascript">
        @yield('js')
        </script>
        @endpush
    </body>

</html>

 @stack('scripts')
    @if (config('analytics.enabled', false))
        @include('analytics')
    @endif