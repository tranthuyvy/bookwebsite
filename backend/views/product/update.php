<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Product $model */

$this->title = 'Cập Nhật Sản Phẩm ' . $model->product_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_name, 'url' => ['view', 'product_id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataGroup' => $dataGroup,
        'dataSupplier' => $dataSupplier,
        'dataAuthor' => $dataAuthor
    ]) ?>

</div>
