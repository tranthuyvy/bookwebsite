<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Author $model */

$this->title = 'Cập Nhật Tác Giả: ' . $model->author_name;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Tác Giả', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->author_name, 'url' => ['view', 'author_id' => $model->author_id]];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
