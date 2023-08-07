<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WardSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ward-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ward_id') ?>

    <?= $form->field($model, 'ward_name') ?>

    <?= $form->field($model, 'ward_type') ?>

    <?= $form->field($model, 'district_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
