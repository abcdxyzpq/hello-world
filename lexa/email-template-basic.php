
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="public/assets/images/favicon.ico">

<link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="public/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="public/assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="public/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <!-- Begin page -->
        <div id="wrapper">
		      <!-- Top Bar Start -->
   <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="index" class="logo">
          <span>
            <img src="public/assets/images/logo-light.png" alt="" height="18">
            </span>
            <i>
                <img src="public/assets/images/logo-sm.png" alt="" height="22">
            </i>
    </a>
</div>

<nav class="navbar-custom">
    <ul class="navbar-right d-flex list-inline float-right mb-0">
        <li class="dropdown notification-list d-none d-md-block">
            <form role="search" class="app-search">
                <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="Search..">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </li>

        <!-- language-->
        <li class="dropdown notification-list d-none d-md-block">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="public/assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""/> English <span class="mdi mdi-chevron-down"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right language-switch">
                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                <a class="dropdown-item" href="#"><img src="public/assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
            </div>
        </li>

        <!-- full screen -->
        <li class="dropdown notification-list d-none d-md-block">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
        </li>

        <!-- notification -->
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="mdi mdi-bell-outline noti-icon"></i>
                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <!-- item-->
                <h6 class="dropdown-item-text">
                        Notifications (258)
                    </h6>
                <div class="slimscroll notification-item-list">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                    </a>
                </div>
                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
            </div>
        </li>
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="public/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
        <li class="d-none d-sm-block">
            <div class="dropdown pt-3 d-inline-block">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create
                    </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </li>
    </ul>

</nav>

</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="index" class="waves-effect">
                                    <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar" class="waves-effect"><i class="ti-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox">Inbox</a></li>
                                    <li><a href="email-read">Email Read</a></li>
                                    <li><a href="email-compose">Email Compose</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-package"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons">Buttons</a></li>
                                    <li><a href="ui-cards">Cards</a></li>
                                    <li><a href="ui-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid">Grid</a></li>
                                    <li><a href="ui-images">Images</a></li>
                                    <li><a href="ui-lightbox">Lightbox</a></li>
                                    <li><a href="ui-modals">Modals</a></li>
                                    <li><a href="ui-rangeslider">Range Slider</a></li>
                                    <li><a href="ui-session-timeout">Session Timeout</a></li>
                                    <li><a href="ui-progressbars">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert">Sweet-Alert</a></li>
                                    <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography">Typography</a></li>
                                    <li><a href="ui-video">Video</a></li>
                                    <li><a href="ui-general">General</a></li>
                                    <li><a href="ui-colors">Colors</a></li>
                                    <li><a href="ui-rating">Rating</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i><span> Forms <span class="badge badge-pill badge-success float-right">9</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="form-elements">Form Elements</a></li>
                                    <li><a href="form-validation">Form Validation</a></li>
                                    <li><a href="form-advanced">Form Advanced</a></li>
                                    <li><a href="form-editors">Form Editors</a></li>
                                    <li><a href="form-uploads">Form File Upload</a></li>
                                    <li><a href="form-xeditable">Form Xeditable</a></li>
                                    <li><a href="form-repeater">Form Repeater</a></li>
                                    <li><a href="form-wizard">Form Wizard</a></li>
                                    <li><a href="form-mask">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="charts-morris">Morris Chart</a></li>
                                    <li><a href="charts-chartist">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs">Chartjs Chart</a></li>
                                    <li><a href="charts-flot">Flot Chart</a></li>
                                    <li><a href="charts-knob">Jquery Knob Chart</a></li>
                                    <li><a href="charts-echart">E - Chart</a></li>
                                    <li><a href="charts-sparkline">Sparkline Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-view-grid"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="tables-basic">Basic Tables</a></li>
                                    <li><a href="tables-datatable">Data Table</a></li>
                                    <li><a href="tables-responsive">Responsive Table</a></li>
                                    <li><a href="tables-editable">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-face-smile"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="icons-material">Material Design</a></li>
                                    <li><a href="icons-fontawesome">Font Awesome</a></li>
                                    <li><a href="icons-ion">Ion Icons</a></li>
                                    <li><a href="icons-themify">Themify Icons</a></li>
                                    <li><a href="icons-dripicons">Dripicons</a></li>
                                    <li><a href="icons-typicons">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="maps-google"> Google Map</a></li>
                                    <li><a href="maps-vector"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-archive"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-login">Login 1</a></li>
                                    <li><a href="pages-login-2">Login 2</a></li>
                                    <li><a href="pages-register">Register 1</a></li>
                                    <li><a href="pages-register-2">Register 2</a></li>
                                    <li><a href="pages-recoverpw">Recover Password 1</a></li>
                                    <li><a href="pages-recoverpw-2">Recover Password 2</a></li>
                                    <li><a href="pages-lock-screen">Lock Screen 1</a></li>
                                    <li><a href="pages-lock-screen-2">Lock Screen 2</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-support"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-timeline">Timeline</a></li>
                                    <li><a href="pages-invoice">Invoice</a></li>
                                    <li><a href="pages-directory">Directory</a></li>
                                    <li><a href="pages-blank">Blank Page</a></li>
                                    <li><a href="pages-404">Error 404</a></li>
                                    <li><a href="pages-500">Error 500</a></li>
                                    <li><a href="pages-pricing">Pricing</a></li>
                                    <li><a href="pages-gallery">Gallery</a></li>
                                    <li><a href="pages-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon">Coming Soon</a></li>
                                    <li><a href="pages-faq">Faq</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bookmark-alt"></i><span> Email Templates <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-template-basic">Basic Action Email</a></li>
                                    <li><a href="email-template-Alert">Alert Email</a></li>
                                    <li><a href="email-template-Billing">Billing Email</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->		   
		   <div class="content-page">
		   <div class="content">
		    <div class="container-fluid">
			    <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Basic Email</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Email Templates</a></li>
                                        <li class="breadcrumb-item active">Basic Email</li>
                                    </ol>

                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings mr-2"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                        <td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                                            <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                                <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;">
                                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                        <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;padding: 30px;border: 3px solid #3c4ccf;border-radius: 7px; background-color: #fff;" valign="top">
                                                            <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                                                            <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        Please confirm your email address by clicking the link below.
                                                                    </td>
                                                                </tr>
                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        We may need to send you critical information about our service and it is important that we have an accurate email address.
                                                                    </td>
                                                                </tr>
                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                    <td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        <a href="#" class="btn-primary" itemprop="url" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #02a499; margin: 0; border-color: #02a499; border-style: solid; border-width: 8px 16px;">Confirm
                                                                            email address</a>
                                                                    </td>
                                                                </tr>
                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        <b>Veltrix</b>
                                                                        <p>Support Team</p>
                                                                    </td>
                                                                </tr>
        
                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                    <td class="content-block" style="text-align: center;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top">
                                                                        © 2019 Veltrix
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end row -->
			 </div>
		    </div>
			<footer class="footer">
    © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
</footer>		   </div>
		</div>
		
<script src="public/assets/js/jquery.min.js"></script>
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="public/assets/js/metisMenu.min.js"></script>
<script src="public/assets/js/jquery.slimscroll.js"></script>
<script src="public/assets/js/waves.min.js"></script>
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		