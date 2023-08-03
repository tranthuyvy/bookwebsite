<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use frontend\widgets\leftMenuWidget;
use frontend\widgets\topProductWidget;
use frontend\widgets\bestSellerProductWidget;
use frontend\widgets\footerWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <?= leftMenuWidget::widget() ?>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="common/images/logo.png" class="img-fluid rounded-normal" alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">img01</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Trang Chủ</h5>
                    </div>
                    <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Tìm kiếm sản phẩm...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-search-line"></i>
                                </a>
                                <form action="#" class="search-box p-0">
                                    <input type="text" class="text search-input" placeholder="Type here to search...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                            </li>
                            <li class="nav-item nav-icon">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-notification-2-line"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">Thông Báo<small
                                                            class="badge  badge-light float-right pt-1">4</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">Just Now</small>
                                                        <p class="mb-0">95.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/02.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">5 days ago</small>
                                                        <p class="mb-0">255.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/03.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">2 days ago</small>
                                                        <p class="mb-0">79.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/04.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng #7979 giao không thành công</h6>
                                                        <small class="float-right font-size-12">3 days ago</small>
                                                        <p class="mb-0">100.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-mail-line"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">Tin Nhắn<small
                                                            class="badge  badge-light float-right pt-1">5</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/01.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">QT Shop</h6>
                                                        <small class="float-left font-size-12">13 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/02.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Tran Thuan Store</h6>
                                                        <small class="float-left font-size-12">20 Apr</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/03.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Hoang Vu Book</h6>
                                                        <small class="float-left font-size-12">30 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/04.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Quang Minh Book</h6>
                                                        <small class="float-left font-size-12">12 Sep</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="common/images/user/05.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">TV Team</h6>
                                                        <small class="float-left font-size-12">5 Dec</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-shopping-cart-2-line"></i>
                                    <span class="badge badge-danger count-cart rounded-circle">2</span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 toggle-cart-info">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">Giỏ Hàng<small
                                                            class="badge  badge-light float-right pt-1">2</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="rounded" src="common/images/cart/01.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Night People book</h6>
                                                        <p class="mb-0">$32</p>
                                                    </div>
                                                    <div class="float-right font-size-24 text-danger"><i
                                                                class="ri-close-fill"></i></div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="rounded" src="common/images/cart/02.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">The Sin Eater Book</h6>
                                                        <p class="mb-0">$40</p>
                                                    </div>
                                                    <div class="float-right font-size-24 text-danger"><i
                                                                class="ri-close-fill"></i></div>
                                                </div>
                                            </a>
                                            <div class="d-flex align-items-center text-center p-3">
                                                <a class="btn btn-primary mr-2 iq-sign-btn" href="checkout.html"
                                                   role="button">Giỏ Hàng</a>
                                                <a class="btn btn-primary iq-sign-btn" href="checkout.html"
                                                   role="button">Thanh Toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="line-height pt-3">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <img src="common/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                                    <div class="caption">
                                        <h6 class="mb-1 line-height">Vy Trần</h6>
                                        <p class="mb-0 text-primary">Tài Khoản</p>
                                    </div>
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">Xin Chào Vy Trần</h5>
                                            </div>
                                            <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-profile-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Sổ địa chỉ</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-account-box-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng của tôi</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-heart-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Yêu Thích</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign
                                                    out<i class="ri-login-box-line ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">

                    <?= topProductWidget::widget() ?>

                    <?= bestSellerProductWidget::widget() ?>

                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Sách yêu thích</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>
                                </div>
                            </div>

                            <div class="iq-card-body favorites-contens">
                                <ul id="favorites-slider" class="list-inline p-0 mb-0 row">

                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="common/images/favorite/01.jpg" class="img-fluid rounded w-100"
                                                         alt="">
                                                </a>
                                            </div>

                                            <div class="col-7">
                                                <h5 class="mb-2">D. Trump - Nghệ Thuật Đàm Phán</h5>
                                                <p class="mb-2">Tác giả : Pedro Araez</p>
                                                <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                    <span>Đã bán</span>
                                                    <span class="mr-4">69</span>
                                                </div>
                                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                                    <div class="iq-progress-bar iq-bg-primary">
                                                        <span class="bg-primary" data-percent="65"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="common/images/favorite/02.jpg" class="img-fluid rounded w-100"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <h5 class="mb-2">Một Đời Quản Trị</h5>
                                                <p class="mb-2">Tác giả : Michael klock</p>
                                                <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                    <span>Đã bán</span>
                                                    <span class="mr-4">450</span>
                                                </div>
                                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                                    <div class="iq-progress-bar iq-bg-danger">
                                                        <span class="bg-danger" data-percent="45"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="common/images/favorite/03.jpg" class="img-fluid rounded w-100"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <h5 class="mb-2">Người Bán Hàng Vĩ Đại Nhất Thế Giới</h5>
                                                <p class="mb-2">Tác giả : Daniel Ace</p>
                                                <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                    <span>Đã bán</span>
                                                    <span class="mr-4">79</span>
                                                </div>
                                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                                    <div class="iq-progress-bar iq-bg-info">
                                                        <span class="bg-info" data-percent="78"></span>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-dark">Đọc ngay<i
                                                            class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="common/images/favorite/04.jpg" class="img-fluid rounded w-100"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <h5 class="mb-2">Economix- Các Nền Kinh Tế Vận Hành</h5>
                                                <p class="mb-2">Tác giả : Luka Afton</p>
                                                <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                    <span>Đã bán</span>
                                                    <span class="mr-4">900</span>
                                                </div>
                                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                                    <div class="iq-progress-bar iq-bg-success">
                                                        <span class="bg-success" data-percent="90"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->

    <!-- Footer -->
        <?= footerWidget::widget() ?>
    <!-- Footer END -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
