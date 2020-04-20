<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:34:39 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Salt Admin</title>
    <!-- plugins:css -->
    @include('admin.layout.style')
</head>

<body class="sidebar-dark">
<!-- partial:../../partials/_settings-panel.html -->
<div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
            <div class="color-tiles">
                <div class="tiles primary" id="primary-theme"></div>
                <div class="tiles success" id="success-theme"></div>
                <div class="tiles warning" id="warning-theme"></div>
                <div class="tiles danger" id="danger-theme"></div>
                <div class="tiles pink" id="pink-theme"></div>
                <div class="tiles info" id="info-theme"></div>
                <div class="tiles dark" id="dark-theme"></div>
                <div class="tiles light" id="light-theme"></div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sidebar Mode
                </button>
                <div class="dropdown-menu" aria-labelledby="sidebar-color">
                    <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
                    <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
                </div>
            </div>
            <div class="dropdown d-none d-md-block">
                <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layouts
                </button>
                <div class="dropdown-menu" aria-labelledby="Layouts-type">
                    <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
                    <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
                    <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
                    <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
                </div>
            </div>
        </div>
        <!-- layout section tabends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- chat section tabends -->
    </div>
</div>
<!-- partial -->
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/salt_logo.svg" alt="Logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="btn-group d-none d-sm-block">
                <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
                <div class="input-group solid">
                    <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
                    <input type="text" class="form-control">
                </div>
            </form>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-warning">7</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-birthday-cake text-success fa-fw"></i>
                            <span class="notification-text">Today is John's birthday</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-phone text-danger fa-fw"></i>
                            <span class="notification-text">Call John Doe</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-handshake-o text-primary fa-fw"></i>
                            <span class="notification-text">Meeting Alisa</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-exclamation-triangle text-danger fa-fw"></i>
                            <span class="notification-text">Server space almost full</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-bell text-warning fa-fw"></i>
                            <span class="notification-text">Payment Due</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-message-outline"></i>
                        <span class="count bg-danger">4</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://via.placeholder.com/47x47" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">John Doe</p>
                                <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://via.placeholder.com/47x47" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Leanne Jones</p>
                                <p class="Sender-message">Can we schedule a call this afternoon?</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://via.placeholder.com/47x47" alt="">
                                <span class="badge badge-primary">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Stella</p>
                                <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://via.placeholder.com/47x47" alt="">
                                <span class="badge badge-warning">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">James Brown</p>
                                <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item view-all">View all</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <div class="profile">
                        <img src="http://via.placeholder.com/47x47" alt="">
                    </div>
                    <div class="details">
                        <p class="user-name">Dave Mattew</p>
                        <p class="designation">Developer</p>
                    </div>
                </div>
                <ul class="nav">
                    <!--main pages start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">Main</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../widgets.html">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">Widget</span>
                            <span class="badge badge-danger badge-pill ml-auto">New</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                            <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                            <span class="menu-title">Product Manage</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="layoutsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('products')}}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.product.store')}}">Store Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.products')}}">All Products</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">Manage Category</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sidebar_layouts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.categories')}}">Manage category</a>
                               </li>
                                <li class="nav-item">  <a class="nav-link" href="{{route('admin.category.create')}}">Add Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <!--main pages end-->
                    <!--sample pages start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">Sample pages</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                            <i class="mdi mdi-lock-outline menu-icon"></i>
                            <span class="menu-title">Authentication</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="authSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/login.html">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/login-2.html">
                                        Login 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/register.html">
                                        Register
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/register-2.html">
                                        Register 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/lock-screen.html">
                                        Lockscreen
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
                            <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                            <span class="menu-title">Error pages</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="errorSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/error-404.html">
                                        404
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/error-500.html">
                                        500
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
                            <i class="mdi mdi-google-pages menu-icon"></i>
                            <span class="menu-title">General Pages</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="generalSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/blank-page.html">
                                        Blank Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/landing-page.html">
                                        Landing Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/profile.html">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/faq.html">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/faq-2.html">
                                        FAQ 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/news-grid.html">
                                        News grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/portfolio-1.html">
                                        Portfolio 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/portfolio-2.html">
                                        Portfolio 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/search-results.html">
                                        Search result
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/timeline.html">
                                        Timeline
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ecommerceSubmenu" aria-expanded="false" aria-controls="ecommerceSubmenu">
                            <i class="mdi mdi-cart-outline menu-icon"></i>
                            <span class="menu-title">E-commerce</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ecommerceSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/pricing.html">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/invoice.html">
                                        Invoice
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../samples/orders.html">
                                        Orders
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--sample pages end-->
                    <!--ui features start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">UI Features</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="uiBasicSubmenu">
                            <i class="mdi mdi-buffer menu-icon"></i>
                            <span class="menu-title">Basic Elements</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="uiBasicSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/accordions.html">Accordions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/modals.html">Modals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/progress.html">Progress bar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/tabs.html">Tabs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#uiAdvancedSubmenu" aria-expanded="false" aria-controls="uiAdvancedSubmenu">
                            <i class="mdi mdi-cube-outline menu-icon"></i>
                            <span class="menu-title">Advanced Elements</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="uiAdvancedSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/image-cropper.html">Cropper</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/dragula.html">Dragula</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/carousel.html">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/colcade.html">Colcade</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#uiPopupSubmenu" aria-expanded="false" aria-controls="uiPopupSubmenu">
                            <i class="mdi mdi-message-text-outline menu-icon"></i>
                            <span class="menu-title">Popups</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="uiPopupSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/alerts.html">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/avgrund.html">Avgrund</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/tour.html">Tour</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#uiNotificationsSubmenu" aria-expanded="false" aria-controls="uiNotificationsSubmenu">
                            <i class="mdi mdi-bell-outline menu-icon"></i>
                            <span class="menu-title">Notifications</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="uiNotificationsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/notifications.html">Simple Notification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/desktop-notifications.html">Desktop Notification</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#sliderSubmenu" aria-expanded="false" aria-controls="sliderSubmenu">
                            <i class="mdi mdi-bulletin-board menu-icon"></i>
                            <span class="menu-title">Sliders</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sliderSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/no-ui-slider.html">noUiSlider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../ui-features/ion-range-slider.html">ion-rangeSlider</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#iconsSubmenu" aria-expanded="false" aria-controls="iconsSubmenu">
                            <i class="mdi mdi-album menu-icon"></i>
                            <span class="menu-title">Icons</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="iconsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../icons/themify.html">Themify icons</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ui end -->
                    <!-- data rep start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">Data representation</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#chartsSubmenu" aria-expanded="false" aria-controls="chartsSubmenu">
                            <i class="mdi mdi-chart-donut menu-icon"></i>
                            <span class="menu-title">Charts</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="chartsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/chartjs.html">ChartJs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/morris.html">Morris</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/flot-chart.html">Float</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/google-charts.html">Google charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/c3.html">C3 charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/chartist.html">Chartists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/rickshaw.html">Rickshaw</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../charts/justGage.html">JustGage</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="tablesSubmenu">
                            <i class="mdi mdi-table-large menu-icon"></i>
                            <span class="menu-title">Tables</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tablesSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="basic-table.html">Basic table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="data-table.html">Data table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="bootstrap-table.html">Bootstrap table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="js-grid.html">Js-grid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sortable-table.html">Sortable table</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#mapsSubmenu" aria-expanded="false" aria-controls="mapsSubmenu">
                            <i class="mdi mdi-map-marker-outline menu-icon"></i>
                            <span class="menu-title">Maps</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="mapsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../maps/mapeal.html">Mapeal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../maps/vector-map.html">Vector map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--data rep end-->
                    <!--forms start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">Forms</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsSubmenu" aria-expanded="false" aria-controls="formsSubmenu">
                            <i class="mdi mdi-clipboard-outline menu-icon"></i>
                            <span class="menu-title">Form components</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="formsSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/basic-elements.html">Basic elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/x-editable.html">X-editable</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/typeahead.html">Typeahead</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/form-repeater.html">Form repeater</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/form-mask.html">Form mask</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                            <i class="mdi mdi-repeat menu-icon"></i>
                            <span class="menu-title">Advanced components</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="advancedSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/form-addons.html">Form addons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/form-picker.html">Form Picker</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/bt-select-splitter.html">Splitter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/icheck.html">Icheck</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#validationSubmenu" aria-expanded="false" aria-controls="validationSubmenu">
                            <i class="mdi mdi-flag-outline menu-icon"></i>
                            <span class="menu-title">Validation</span>
                            <i class="mdi mdi-chevron-down menu-arrow"></i>
                        </a>
                        <div class="collapse" id="validationSubmenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/form-validation.html">Form validation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forms/bt-maxlength.html">Maxlength</a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <!--forms end-->
                    <!--Apps start-->


                    <!--Apps end-->

                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
                <h1 class="page-title">Data table</h1>
                <div class="card">
                    <div class="card-body">

                        <h2 class="card-title">Category table</h2>
                        @include('admin.partial.message')
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table table-striped" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th>Category Name</th>
                                        <th>Parent Category</th>
                                        <th>Category Image</th>

                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($categories as $category)
                                        <td>#</td>
                                        <td>{{$category->name}}</td>

                                            <td>

                                       @if($category->parent_id == NULL)
                                                Primary Category
                                            @else
                                              {{$category->parent->name}}

                                            @endif
                                                </td>
                                            <td><img src="{!!asset('images/categories/' .$category->image)!!}" width="50"></td>


                                            <td>
                                               <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-outline-primary">Edit</a>
                                                <a href="#deleteModal{{$category->id}}" data-toggle="modal" class="btn btn-warning">Delete</a>

                                                <!-- Delete modal -->


                                                <!-- Modal -->
                                              <div class="modal fade" id="deleteModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('admin.category.delete',$category->id)}}" method="post">
                                                                   @csrf
                                                                    <button type="submit" class="btn btn-danger" >Permanent Delete</button>

                                                                </form>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>






                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">e-commerce</a> &copy; 2020
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.layout.script')
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:34:39 GMT -->
</html>
