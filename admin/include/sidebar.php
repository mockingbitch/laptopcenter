<?php
include_once '../lib/session.php';
Session::checkSession();
if (isset($_GET['logout'])){
    Session::destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="css/mdi/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/@mdi/font@6.3.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item sidebar-category">
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="mdi mdi-view-quilt menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                    <div class="badge badge-info badge-pill">2</div>
                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Components</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-palette menu-icon"></i>
                    <span class="menu-title">Danh mục</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="themdanhmuc.php">Thêm danh mục sản phẩm</a></li>
                        <li class="nav-item"> <a class="nav-link" href="danhsachdanhmuc.php">Danh sách danh mục</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-view-headline menu-icon"></i>
                    <span class="menu-title">Sản phẩm</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="themsanpham.php">Thêm sản phẩm</a></li>
                        <li class="nav-item"> <a class="nav-link" href="danhsachsanpham.php">Danh sách sản phẩm</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="themslider.php">
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Thêm Slider</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showslider.php">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Show Slider</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/icons/mdi.html">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Pages</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item sidebar-category">
                <p>Apps</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="docs/documentation.html">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Documentation</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="navbar-brand-wrapper">
                    <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo.svg" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
                </div>
                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Xin chào <?php echo $_SESSION['name']; ?></h4>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <h4 class="mb-0 font-weight-bold d-none d-xl-block">Oct 1, 2021 - Nov 20, 2021</h4>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face5.jpg" alt="profile" />
                            <span class="nav-profile-name"><?php echo $_SESSION['name'];?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i> Settings
                            </a>
                            <a class="dropdown-item" href="?logout">
                                <i class="mdi mdi-logout text-primary"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">