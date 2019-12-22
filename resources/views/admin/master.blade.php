<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        @include("admin.master-partials.head")
        @include("admin.master-partials.head-css")
        @yield('pagelevelcss')
    </head>
    <!-- END HEAD -->

    <body class="">
        <!-- BEGIN HEADER -->
        <header class="page-header">
            <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="havbar-header">
                        <!-- BEGIN LOGO -->
                        <a id="index" class="navbar-brand" href="start.html">
                            <img src="{!! asset('public/adminpanel/pages/img/logo.png') !!}" alt="Logo"> </a>
                        <!-- END LOGO -->
                        <!-- BEGIN TOPBAR ACTIONS -->
                        <div class="topbar-actions">
                            <!-- BEGIN USER PROFILE -->
                            <div class="btn-group-img btn-group">
                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img src="{!! asset('public/adminpanel/layouts/layout5/img/avatar1.jpg') !!}" alt=""> </button>
                                <ul class="dropdown-menu-v2" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END USER PROFILE -->
                        </div>
                        <!-- END TOPBAR ACTIONS -->
                    </div>
                </div>
                <!--/container-->
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="container-fluid">
            <div class="page-content page-content-popup">
                <div class="page-content-fixed-header">
                    <!-- BEGIN BREADCRUMBS -->
                    <ul class="page-breadcrumb">
                        @yield('breadcrumb')
                    </ul>
                    <!-- END BREADCRUMBS -->
                    <div class="content-header-menu">
                        <!-- BEGIN MENU TOGGLER -->
                        <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- END MENU TOGGLER -->
                    </div>
                </div>
                @include("admin.master-partials.sidebar")
                <div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    @include("admin.master-partials.validation-errors")
                    @include("admin.master-partials.success")
                    @yield('content')
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- BEGIN FOOTER -->
                @include("admin.master-partials.footer")
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <!-- END QUICK SIDEBAR -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    @include("admin.master-partials.footer-js")    
    @yield('pageleveljs')
    
    </body>

</html>