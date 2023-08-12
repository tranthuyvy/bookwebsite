<?php

use backend\models\Product;
use backend\models\Group;
use backend\models\Author;
use backend\models\Supplier;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sản Phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tạo Mới Sản Phẩm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'product_id',
            'product_name',
//            'product_image',
            [
                'attribute' => 'product_image',
                'format' => 'html',
                'content' => function ($data) {
                    return Html::img($data->product_image, ['alt' => 'yii', 'width' => '100']);
                }
            ],

//            'product_price',
            [
                'attribute' => 'product_price',
                'value' => function ($data) {
                    return number_format($data->product_price, 0, ',', '.') . 'Đ';
                },
            ],
//            'product_description:ntext',
            [
                'attribute' => 'product_description',
                'format' => 'ntext',
                'value' => function ($data) {
                    return StringHelper::truncate($data->product_description, 300);
                },
            ],
//            'group_id',
            [
                'attribute' => 'group_id', 'value' => function ($data) {
                $group_name = Group::getGroupByName($data->group_id);
                return $group_name;}
            ],
//            'supplier_id',
            [
                'attribute' => 'supplier_id', 'value' => function ($data) {
                $supplier_name = Supplier::getSupplierByName($data->supplier_id);
                return $supplier_name;}
            ],
//            'author_id',
            [
                'attribute' => 'author_id', 'value' => function ($data) {
                $author_name = Author::getAuthorByName($data->author_id);
                return $author_name;}
            ],
            //'status',
            //'user_id',
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'product_id' => $model->product_id]);
                 }
            ],
        ],
    ]); ?>


</div>
