<?php

use backend\models\Review;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ReviewSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?php //= Html::a('Create Review', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Hình ảnh sản phẩm',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img($model->product->product_image, ['width' => '100']);
                },
            ],
//            'review_id',

//            'product_id',
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->product_name;
                },
            ],
//            'user_id',
            [
                'attribute' => 'user_id',
                'value' => function ($model) {
                    return $model->user->username;
                },
            ],
//            'rating',
            [
                'attribute' => 'rating',
                'format' => 'raw', // Sử dụng định dạng raw để hiển thị HTML
                'value' => function ($model) {
                    $stars = str_repeat('<i class="fa fa-star text-warning"></i>', $model->rating);
                    return $stars;
                },
            ],
            'comment',
            //'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
//            [
//                'class' => ActionColumn::className(),
//                'urlCreator' => function ($action, Review $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'review_id' => $model->review_id]);
//                 }
//            ],
        ],
    ]); ?>


</div>
