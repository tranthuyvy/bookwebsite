<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Role $model */

$this->title = 'Cập Nhật Quyền: ' . $model->role_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->role_name, 'url' => ['view', 'role_id' => $model->role_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
