<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Order $model */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'order_id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'order_id' => $model->order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'user_id',
            'user_name',
            'user_email:email',
            'user_mobile',
            'user_address',
            'totalMoney',
            'payment_id',
            'status',
            'created_at',
        ],
    ]) ?>

</div>
