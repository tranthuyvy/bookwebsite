<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
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
//            'product_image',
            [
                'attribute' => 'product_image',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img($data->product_image, ['width' => '100']);
                },
            ],
//            'product_price',
            [
                'attribute' => 'product_price',
                'value' => function ($data) {
                    return number_format($data->product_price, 0, ',', '.') . ' VNĐ';
                },
            ],
            'product_description:ntext',
//            'group_id',
            [
                'attribute' => 'group_id',
                'value' => function ($data) {
                    return $data->group->group_name;
                },
            ],
//            'supplier_id',
            [
                'attribute' => 'supplier_id',
                'value' => function ($data) {
                    return $data->supplier->supplier_name;
                },
            ],
//            'author_id',
            [
                'attribute' => 'author_id',
                'value' => function ($data) {
                    return $data->author->author_name;
                },
            ],

//            'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($data) {
                    if ($data->status == 1) {
                        return '<i class="fas fa-check-circle text-success"></i>';
                    } else {
                        return '<i class="fas fa-times-circle text-danger"></i>';
                    }
                },
            ],
//            'user_id',
            [
                'attribute' => 'user_id',
                'value' => function ($data) {
                    return $data->user->username;
                },
            ],
//            'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
            //'updated_at',
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
        ],
    ]) ?>

</div>
