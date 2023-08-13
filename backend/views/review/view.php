<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Review $model */

$this->title = $model->review_id;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="review-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?php //= Html::a('Update', ['update', 'review_id' => $model->review_id], ['class' => 'btn btn-primary']) ?>
<!--        --><?php //= Html::a('Delete', ['delete', 'review_id' => $model->review_id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'review_id',
            'product_id',
            'user_id',
            'rating',
            'comment',
//            'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
        ],
    ]) ?>

</div>
