<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Review $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

<!--    <div class="form-group">-->
<!--        --><?php //= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<!--    </div>-->

    <?php ActiveForm::end(); ?>

</div>
