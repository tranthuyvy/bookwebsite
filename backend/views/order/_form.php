<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_mobile')->textInput() ?>

    <?= $form->field($model, 'user_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalMoney')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '2' => 'Đã Xác Nhận',
        '3' => 'Đang Xử Lý',
        '4' => 'Đang Giao Hàng',
        '5' => 'Thành Công',
        '7' => 'Hủy Đơn Hàng'
    ]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
