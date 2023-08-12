<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Group $model */

$this->title = 'Cập Nhật Thể Loại: ' . $model->group_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Thể Loại', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_name, 'url' => ['view', 'group_id' => $model->group_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
