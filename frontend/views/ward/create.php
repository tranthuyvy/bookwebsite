<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ward $model */

$this->title = 'Create Ward';
$this->params['breadcrumbs'][] = ['label' => 'Wards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ward-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
