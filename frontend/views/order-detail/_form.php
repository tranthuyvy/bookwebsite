<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\OrderDetail $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
