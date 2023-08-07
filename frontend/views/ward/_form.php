<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Ward $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ward-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ward_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ward_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
