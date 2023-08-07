<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ward $model */

$this->title = 'Update Ward: ' . $model->ward_id;
$this->params['breadcrumbs'][] = ['label' => 'Wards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ward_id, 'url' => ['view', 'ward_id' => $model->ward_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ward-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
