<?php
    use yii\bootstrap5\Html;
    use frontend\widgets\cartWidget;
?>

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
                <h5 class="mb-0"></h5>
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

                    <?= cartWidget::widget() ?>

                    <li class="nav-item nav-icon dropdown">
                        <?php
                            if (Yii::$app->user->isGuest){
                        ?>
                        <a href="<?php echo Yii::$app->homeUrl ?>site/login" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="icon fa fa-lock"></i>
                        </a>
                    </li>
                    <li class="search-toggle iq-waves-effect text-gray rounded">
                        <?php }else {
                                echo Html::beginForm(['/site/logout'],'post');

                                echo Html::submitButton(
                                        'Logout('.Yii::$app->user->identity->username.')', ['class'=>'btn btn-link']

                                );
                                echo Html::endForm();
                        }?>
                    </li>
                    <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <img src="common/images/user/2.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                            <div class="caption">
                                <?php
                                    if (!Yii::$app->user->isGuest){
                                ?>
                                <h6 class="mb-1 line-height"><?php echo Yii::$app->user->identity->username?></h6>
                                <p class="mb-0 text-primary">Tài Khoản</p>
                            </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Xin Chào <?php echo Yii::$app->user->identity->username?></h5>
                                    </div>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Tài khoản</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-account-box-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Đơn hàng</h6>
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
                    <?php }?>
                </ul>
            </div>
        </nav>
    </div>
</div>
