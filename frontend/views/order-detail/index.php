<?php

use frontend\models\OrderDetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\OrderDetailSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_detail_id',
            'order_id',
            'product_id',
            'product_price',
            'product_quantity',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderDetail $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'order_detail_id' => $model->order_detail_id]);
                 }
            ],
        ],
    ]); ?>


</div>
