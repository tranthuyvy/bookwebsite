<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Payment $model */

$this->title = 'Cập Nhật Phương Thức: ' . $model->payment_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Phương Thức Thanh Toán', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payment_name, 'url' => ['view', 'payment_id' => $model->payment_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
