<?php

use yii\helpers\Html;
use frontend\widgets\topNavWidget;
use frontend\models\Product;

$statusLabels = [
    1 => 'Chờ Xác Nhận',
    2 => 'Đã Xác Nhận',
    3 => 'Đang Xử Lý',
    4 => 'Đang Giao Hàng',
    5 => 'Thành Công',
    6 => 'Hủy Đơn Hàng'
];
?>
<?= topNavWidget::widget() ?>
<div id="content-page" class="content-page">
    <?php foreach ($orders as $order) { ?>
        <div class="container-fluid checkout-content">
            <div class="row">
                <div id="cart" class="card-block show p-0 col-12">
                    <div class="row align-item-center">
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <hr>
                                <b style="margin-left: 40%">Thông tin đơn hàng</b>
                                <div class="iq-card-body">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Người nhận</span>
                                        <span class="text-dark">
                                            <?php echo $order["user_name"] ?>
                                    </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Email</span>
                                        <span class="text-dark">
                                            <?php echo $order["user_email"] ?>
<!--                                            --><?php //echo number_format($total * (5/100), 0, ',', '.'); ?><!--Đ-->
                                    </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Phone</span>
                                        <span class="text-dark">
                                        <?php echo $order["user_mobile"] ?>
                                    </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Address</span>
                                        <span class="text-dark">
                                        <?php echo $order["user_address"] ?>
                                    </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Ngày đặt</span>
                                        <span class="text-dark">
                                            <?= Yii::$app->formatter->format($order['created_at'], ['date', 'php:d/m/Y']) ?>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Trạng thái đơn hàng</span>
                                        <span class="text-dark">
                                            <?php echo $statusLabels[$order['status']] ?>
                                        </span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                    <span class="text-dark">
                                        <strong>Tổng</strong>
                                    </span>
                                        <span class="text-dark">
                                        <strong style="color: red">
                                            <?php echo number_format($order['totalMoney'], 0, ',', '.'); ?>Đ
                                        </strong>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Chi tiết đơn hàng</h4>
                                    </div>
                                </div>

                                <?php
                                foreach ($orderDetails as $detail) {
                                    ?>
                                    <?php if ($detail["order_id"] == $order["order_id"]) { ?>
                                        <?php
                                        $product = Product::find()
                                            ->where(['product_id' => $detail["product_id"]])
                                            ->asArray()
                                            ->one();
                                        if ($product) {
                                            ?>
                                            <div class="iq-card-body">
                                                <ul class="list-inline p-0 m-0">
                                                    <li class="checkout-product">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-2">
                                                        <span class="checkout-product-img">
                                                            <a href="javascript:void();">
                                                                <img class="img-fluid rounded"
                                                                     src="<?php echo $product['product_image'] ?>"
                                                                     style="object-fit: cover; height: 100px; width: 150px; margin-left: 30px"
                                                                     alt="<?= $product["product_name"] ?>">
                                                            </a>
                                                        </span>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="checkout-product-details">
                                                                    <h5>
                                                                        <?php echo $product["product_name"] ?></h5>
                                                                    <div class="price">
                                                                        <h5 style="color: red">
                                                                            <?php echo number_format($detail['product_price'], 0, ',', '.'); ?>
                                                                            Đ
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <div class="row align-items-center mt-2">
                                                                            <div class="col-sm-7 col-md-6">
                                                                                <div>Số
                                                                                    Lượng: <?php echo $detail['product_quantity'] ?></div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-6">
                                                                        <span class="product-price">
                                                                            <h5 style="color: red">
                                                                                <?php echo number_format($detail['product_price'] * $detail['product_quantity'], 0, ',', '.');
                                                                                ?>Đ
                                                                            </h5>
                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>