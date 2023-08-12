<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Supplier $model */

$this->title = $model->supplier_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Nhà Xuất Bản', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập Nhật', ['update', 'supplier_id' => $model->supplier_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'supplier_id' => $model->supplier_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn chắc chắn muốn xóa nhà xuất bản?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'supplier_id',
            'supplier_name',
            'supplier_phone',
            'supplier_address',
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
