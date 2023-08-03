<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use frontend\widgets\topNavWidget;
use frontend\widgets\leftMenuWidget;
use frontend\widgets\topProductWidget;
use frontend\widgets\bestSellerProductWidget;
use frontend\widgets\footerWidget;
use frontend\widgets\suggestionWidget;

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
        <?= topNavWidget::widget() ?>
        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">

                    <?= topProductWidget::widget() ?>

                    <?= bestSellerProductWidget::widget() ?>

                    <?= suggestionWidget::widget() ?>
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
