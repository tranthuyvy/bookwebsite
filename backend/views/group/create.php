<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Group $model */

$this->title = 'Tạo Mới Thể Loại';
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Thể Loại', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>

</div>
