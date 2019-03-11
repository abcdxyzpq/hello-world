
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php"" class="logo">
                        <span>
                            <img src="assets/images/logo-light.png" alt="" height="18">
                        </span>
                        <i>
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0"> 
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> 
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
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
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
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
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
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
                        </li>                        <li class="d-none d-sm-block">
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
            <!-- Top Bar End -->            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="index.php"" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.php"" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.php"">Inbox</a></li>
                                    <li><a href="email-read.php"">Email Read</a></li>
                                    <li><a href="email-compose.php"">Email Compose</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts.php"">Alerts</a></li>
                                    <li><a href="ui-buttons.php"">Buttons</a></li>
                                    <li><a href="ui-badge.php"">Badge</a></li>
                                    <li><a href="ui-cards.php"">Cards</a></li>
                                    <li><a href="ui-carousel.php"">Carousel</a></li>
                                    <li><a href="ui-dropdowns.php"">Dropdowns</a></li>
                                    <li><a href="ui-grid.php"">Grid</a></li>
                                    <li><a href="ui-images.php"">Images</a></li>
                                    <li><a href="ui-lightbox.php"">Lightbox</a></li>
                                    <li><a href="ui-modals.php"">Modals</a></li>
                                    <li><a href="ui-pagination.php"">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.php"">Popover & Tooltips</a></li>
                                    <li><a href="ui-rangeslider.php"">Range Slider</a></li>
                                    <li><a href="ui-session-timeout.php"">Session Timeout</a></li>
                                    <li><a href="ui-progressbars.php"">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert.php"">Sweet-Alert</a></li>
                                    <li><a href="ui-tabs-accordions.php"">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.php"">Typography</a></li>
                                    <li><a href="ui-video.php"">Video</a></li>


                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms <span class="badge badge-pill badge-success float-right">6</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="form-elements.php"">Form Elements</a></li>
                                    <li><a href="form-validation.php"">Form Validation</a></li>
                                    <li><a href="form-advanced.php"">Form Advanced</a></li>
                                    <li><a href="form-editors.php"">Form Editors</a></li>
                                    <li><a href="form-uploads.php"">Form File Upload</a></li>
                                    <li><a href="form-xeditable.php"">Form Xeditable</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="charts-morris.php"">Morris Chart</a></li>
                                    <li><a href="charts-chartist.php"">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.php"">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.php"">Flot Chart</a></li>
                                    <li><a href="charts-c3.php"">C3 Chart</a></li>
                                    <li><a href="charts-other.php"">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.php"">Basic Tables</a></li>
                                    <li><a href="tables-datatable.php"">Data Table</a></li>
                                    <li><a href="tables-responsive.php"">Responsive Table</a></li>
                                    <li><a href="tables-editable.php"">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="icons-material.php"">Material Design</a></li>
                                    <li><a href="icons-ion.php"">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.php"">Font Awesome</a></li>
                                    <li><a href="icons-themify.php"">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.php"">Dripicons</a></li>
                                    <li><a href="icons-typicons.php"">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="maps-google.php""> Google Map</a></li>
                                    <li><a href="maps-vector.php""> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-login.php"">Login</a></li>
                                    <li><a href="pages-register.php"">Register</a></li>
                                    <li><a href="pages-recoverpw.php"">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.php"">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-timeline.php"">Timeline</a></li>
                                    <li><a href="pages-invoice.php"">Invoice</a></li>
                                    <li><a href="pages-directory.php"">Directory</a></li>
                                    <li><a href="pages-blank.php"">Blank Page</a></li>
                                    <li><a href="pages-404.php"">Error 404</a></li>
                                    <li><a href="pages-500.php"">Error 500</a></li>
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
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Alerts</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Alerts</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 ">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code
                                                    class="highlighter-rouge">.alert-success</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Link color</h4>
                                        <p class="text-muted m-b-30 ">Use the <code
                                                class="highlighter-rouge">.alert-link</code> utility class to
                                            quickly provide matching colored links within any alert.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Dismissing</h4>
                                        <p class="text-muted m-b-30 ">You can see this in action with a live demo:</p>
        
                                        <div class="">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Additional content</h4>
                                        <p class="text-muted m-b-30 ">Alerts can also contain additional HTML elements like headings and paragraphs.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <h4 class="alert-heading font-18">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 ">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code
                                                    class="highlighter-rouge">.alert-success .bg-**</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div class="">
                                            <div class="alert alert-success bg-success text-white" role="alert">
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info bg-info text-white" role="alert">
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning bg-warning text-white" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger bg-danger text-white" role="alert">
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

            	<footer class="footer">
                        © 2019 Lexa - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
                </footer>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>