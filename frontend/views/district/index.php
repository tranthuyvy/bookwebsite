<?php

use frontend\models\District;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DistrictSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create District', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'district_id',
            'district_name',
            'district_type',
            'province_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, District $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'district_id' => $model->district_id]);
                 }
            ],
        ],
    ]); ?>


</div>
