<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Role $model */

$this->title = 'Tạo Quyền Mới';
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
