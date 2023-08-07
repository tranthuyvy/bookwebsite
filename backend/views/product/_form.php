<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_image')->textInput(['maxlength' => true, 'id' => 'proImg']) ?>

    <img src="" id="previewImage" alt="" width="200px" >

    <?= $form->field($model, 'product_price')->textInput(['type' => 'number', 'step' => 'any'])?>

    <?= $form->field($model, 'product_description')->textarea(['row' => 6, "id" => 'product_description']) ?>

    <?= $form->field($model, 'group_id')->dropDownList($dataGroup, ['prompt'=>'-Chọn thể loại-']) ?>

    <?= $form->field($model, 'supplier_id')->dropDownList($dataSupplier, ['prompt'=>'-Chọn nhà xuất bản-']) ?>

    <?= $form->field($model, 'author_id')->dropDownList($dataAuthor, ['prompt'=>'-Chọn tác giả-']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
