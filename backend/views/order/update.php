<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Order $model */

$this->title = 'Cập Nhật Đơn Hàng: ' . $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Đơn Hàng', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_id, 'url' => ['view', 'order_id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
