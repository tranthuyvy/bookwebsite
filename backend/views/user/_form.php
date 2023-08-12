<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'gender')->textInput() ?>

<!--    --><?php //= $form->field($model, 'province')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '10' => 'Hoạt Động',
        '1' => 'Vô Hiệu Hóa',
        ])
    ?>

<!--    --><?php //= $form->field($model, 'created_at')->textInput() ?>

<!--    --><?php //= $form->field($model, 'updated_at')->textInput() ?>

<!--    --><?php //= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
