<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ecommerce Admin</title>
    <!-- plugins:css -->
    @include('admin.layout.style')
</head>
<body class="sidebar-dark">
<!-- partial:partials/_settings-panel.html -->
<div class="settings-panel">
    @include('admin.layout.nav')
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
@yield('content')
<!-- page-body-wrapper ends -->

<!-- container-scroller -->

<!-- plugins:js -->
@include('admin.layout.script')
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
