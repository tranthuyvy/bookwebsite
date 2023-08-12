<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
//            'id',
            'username',
            'fullname',
//            'auth_key',
            'password_hash',
//            'password_reset_token',
            'email:email',
            'mobile',
            'address',
//            'gender',
//            'province',
//            'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($data) {
                    if ($data->status == 10) {
                        return '<i class="fas fa-check-circle text-success"></i>';
                    } else {
                        return '<i class="fas fa-times-circle text-danger"></i>';
                    }
                },
            ],
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
//            'verification_token',
        ],
    ]) ?>

</div>
