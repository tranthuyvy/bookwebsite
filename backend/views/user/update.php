<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = 'Cập Nhật Thành Viên: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Thành Viên', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
