
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
                                    <h4 class="page-title">Tabs & Accordions</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Tabs & Accordions</li>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Default Tabs</h4>
                                        <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                            it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                            file—to extend our navigational tabs and pills to create tabbable panes
                                            of local content, even via dropdown menus.</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Justify Tabs</h4>
                                        <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                            it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                            file—to extend our navigational tabs and pills to create tabbable panes
                                            of local content, even via dropdown menus.</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Custom Tabs</h4>
                                        <p class="text-muted m-b-30">Example of custom tabs</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Custom Tabs Justified</h4>
                                        <p class="text-muted m-b-30">Example of custom tabs</p>
        
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>   
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <p class="mb-0">
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                    qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                    iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                                    vero magna velit sapiente labore stumptown. Vegan fanny pack
                                                    odio cillum wes anderson 8-bit.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="messages2" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings2" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
        
                        <!-- Collapse -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Default Collapse</h4>
                                        <p class="text-muted m-b-30">
                                            You can use a link with the <code class="highlighter-rouge">href</code>
                                            attribute, or a button with the <code class="highlighter-rouge">data-target</code>
                                            attribute. In both cases, the <code class="highlighter-rouge">data-toggle="collapse"</code>
                                            is required.
                                        </p>
        
                                        <p>
                                            <a class="btn btn-primary mo-mb-2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-primary mo-mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-target
                                            </button>
                                        </p>
                                        <div class="collapse show" id="collapseExample">
                                            <div class="card card-body mb-0">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Accordion example</h4>
                                        <p class="text-muted m-b-30">Extend the default collapse behavior to create an accordion.</p>
        
        
                                        <div id="accordion">
                                            <div class="card mb-1">
                                                <div class="card-header p-3" id="headingOne">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseOne" class="text-dark" data-toggle="collapse"
                                                                aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h6>
                                                </div>
        
                                                <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header p-3" id="headingTwo">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header p-3" id="headingThree">
                                                    <h6 class="m-0 font-14">
                                                        <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                        sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                        helvetica, craft beer labore wes anderson cred nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim
                                                        aesthetic synth nesciunt you probably haven't heard of them
                                                        accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
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
		