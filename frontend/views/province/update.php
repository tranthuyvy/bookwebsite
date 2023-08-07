<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Province $model */

$this->title = 'Update Province: ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'province_id' => $model->province_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
