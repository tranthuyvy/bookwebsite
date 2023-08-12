<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Product $model */

$this->title = 'Tạo Sản Phẩm Mới';
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataGroup' => $dataGroup,
        'dataSupplier' => $dataSupplier,
        'dataAuthor' => $dataAuthor
    ]) ?>

</div>
