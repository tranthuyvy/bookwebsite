<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Đánh giá sản phẩm</h1>
<h2>Đơn hàng: #<?= $order->order_id ?></h2>
<div id="content-page" class="content-page">

    <?php $form = ActiveForm::begin(); ?>

    <?php foreach ($order->orderDetails as $orderDetail): ?>
        <div class="product-review-form">
            <h3>Đánh giá sản phẩm: <?= $orderDetail->product->product_name ?></h3>
            <?= $form->field($reviewForm, "rating[$orderDetail->product_id]")->dropDownList(
                [1 => 'Tệ', 2 => 'Không Hay', 3 => 'Bình Thường', 4 => 'Hay', 5 => 'Rất Hay'],
                ['prompt' => 'Chọn đánh giá']
            ) ?>
            <?= $form->field($reviewForm, "comment[$orderDetail->product_id]")->textarea(['rows' => 4]) ?>
        </div>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton('Gửi đánh giá', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
