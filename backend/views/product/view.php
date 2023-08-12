<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Product $model */

$this->title = $model->product_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập Nhật', ['update', 'product_id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'product_id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn xóa sản phẩm?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'product_name',
            'product_image',
            'product_price',
            'product_description:ntext',
            'group_id',
            'supplier_id',
            'author_id',
            'status',
            'user_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
