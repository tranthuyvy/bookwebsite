<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Payment $model */

$this->title = 'Tạo Phương Thức Thanh Toán Mới';
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Phương Thức Thanh Toán', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
