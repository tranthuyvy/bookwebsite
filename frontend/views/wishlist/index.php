<?php

use frontend\models\Wishlist;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\WishlistSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wishlists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wishlist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wishlist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'wishlist_id',
            'user_id',
            'product_id',
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wishlist $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'wishlist_id' => $model->wishlist_id]);
                 }
            ],
        ],
    ]); ?>


</div>
