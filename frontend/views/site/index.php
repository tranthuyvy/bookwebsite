<?php
    use frontend\widgets\topProductWidget;
    use frontend\widgets\bestSellerProductWidget;
    use frontend\widgets\suggestionWidget;
/** @var yii\web\View $this */
$this->title = 'Yii Book Store';
?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">

            <?= topProductWidget::widget() ?>

            <?= bestSellerProductWidget::widget() ?>

            <?= suggestionWidget::widget() ?>
        </div>
    </div>
</div>
