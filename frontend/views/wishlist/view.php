<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Wishlist $model */

$this->title = $model->wishlist_id;
$this->params['breadcrumbs'][] = ['label' => 'Wishlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wishlist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'wishlist_id' => $model->wishlist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'wishlist_id' => $model->wishlist_id], [
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
            'wishlist_id',
            'user_id',
            'product_id',
            'created_at',
        ],
    ]) ?>

</div>
