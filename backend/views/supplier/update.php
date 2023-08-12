<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Supplier $model */

$this->title = 'Cập Nhật Nhà Xuất Bản: ' . $model->supplier_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Nhà Xuất Bản', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supplier_name, 'url' => ['view', 'supplier_id' => $model->supplier_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="supplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
