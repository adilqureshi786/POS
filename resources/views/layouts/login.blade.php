<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Promate POS | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {{ Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
        {{ Html::style('assets/global/plugins/uniform/css/uniform.default.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ Html::style('assets/global/plugins/select2/css/select2.min.css') }}
        {{ Html::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        {{ Html::style('assets/global/css/components.min.css', array('id' => 'style_components')) }}
        {{ Html::style('assets/global/css/plugins.min.css') }}
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        {{ Html::style('assets/pages/css/login-5.min.css') }}
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url({{ url('assets/pages/img/login/bg1.jpg') }})">
                        <img class="login-logo" src="{{ url('assets/pages/img/login/logo.png') }}" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content">
                        <img style="padding: 0 38%;" src="{{ url('assets/pages/img/login/pos.png') }}">
                        <h1 style="padding: 0 35%;">Admin Login</h1>
                    
                        @yield('content')
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>2016 © Point of Sale by Quick Marketing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        {{ Html::script('assets/global/plugins/jquery.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
        {{ Html::script('assets/global/plugins/js.cookie.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
        {{ Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('assets/global/plugins/jquery.blockui.min.js') }}
        {{ Html::script('assets/global/plugins/uniform/jquery.uniform.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
        {{ Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}
        {{ Html::script('assets/global/plugins/select2/js/select2.full.min.js') }}
        {{ Html::script('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {{ Html::script('assets/global/scripts/app.min.js') }}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        {{ Html::script('assets/pages/scripts/login-5.min.js') }}
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>