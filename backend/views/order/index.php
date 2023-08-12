<?php

use backend\models\Order;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\OrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Đơn Hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?php //= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'order_id',
//            'user_id',
            'user_name',
            'user_email:email',
            'user_mobile',
            'user_address',
//            'totalMoney',
            [
                'attribute' => 'totalMoney',
                'value' => function ($data) {
                    return number_format($data->totalMoney, 0, ',', '.') . 'Đ';
                },
            ],
            //'payment_id',
            //'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) use ($statuses) {
                    return ArrayHelper::getValue($statuses, $model->status);
                },
            ],
            //'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'order_id' => $model->order_id]);
                 }
            ],
        ],
    ]); ?>


</div>
