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
                    <a href="#" class="header-logo">
                        <div class="logo-title">
                            <span class="text-primary text-uppercase">logo</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navbar-breadcrumb">
                <h5 class="mb-0"></h5>
            </div>
            <div class="iq-search-bar">
                <form action="<?= Yii::$app->urlManager->createUrl(['product/search']) ?>" class="searchbox" method="get">
                    <input type="text" name="searchQuery" class="text search-input" placeholder="Tìm kiếm sản phẩm...">
                    <button style="margin-left: -10px; margin-top: -2px" type="submit" class="search-link" href="#">
                        <i class="ri-search-line"></i>
                    </button>
<!--                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>-->
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
                            <img src="<?php echo Yii::$app->homeUrl?>common/images/user/2.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                            <div class="caption">
                                <?php
                                    if (!Yii::$app->user->isGuest){
                                ?>
                                <h6 class="mb-1 line-height">Xin Chào
                                    <?php
                                        $user = Yii::$app->user->identity;
                                        if (empty($user->fullname) || $user->fullname===null) {
                                            echo $user->username;
                                        }else{
                                            echo $user->fullname;
                                        }
                                    ?>
                                </h6>
<!--                                <p class="mb-0 text-primary">Tài Khoản</p>-->
                            </div>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </div>
</div>
