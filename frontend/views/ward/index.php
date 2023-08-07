<?php

use frontend\models\Ward;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\WardSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ward-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ward', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ward_id',
            'ward_name',
            'ward_type',
            'district_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ward $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ward_id' => $model->ward_id]);
                 }
            ],
        ],
    ]); ?>


</div>
