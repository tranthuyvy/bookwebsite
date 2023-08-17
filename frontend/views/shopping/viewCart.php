<?php
    use frontend\widgets\topNavWidget;
    use frontend\widgets\leftMenuWidget;
?>
<?= topNavWidget::widget() ?>
<?= leftMenuWidget::widget() ?>

<div id="content-page" class="content-page">
    <div class="container-fluid checkout-content">
        <div class="row">
            <div id="cart" class="card-block show p-0 col-12">
                <div class="row align-item-center">
                    <div class="col-lg-8">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Giỏ hàng</h4>
                                </div>
                            </div>
                            <div class="iq-card-body" id="listAllCart">
                                <ul class="list-inline p-0 m-0">
                                    <?php
                                        $total = 0;
                                        foreach ($cart as $key => $value){
                                    ?>

                                    <li class="checkout-product">
                                        <div class="row align-items-center">
                                            <div class="col-sm-2">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();">
                                                 <img class="img-fluid rounded"
                                                      src="<?php echo $value['product_image'] ?>"
                                                      style="object-fit: cover; height: 90px; width: 150px; margin-left: 30px"
                                                      alt="<?= $value["product_name"]?>">
                                             </a>
                                             </span>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkout-product-details">
                                                    <h5><?= $value["product_name"]?></h5>
                                                    <p class="text-success">Còn hàng</p>
                                                    <div class="price">
                                                        <h5 style="color: red">
                                                            <?php echo number_format($value['product_price'], 0, ',', '.'); ?>Đ
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="row align-items-center mt-2">
                                                            <div class="col-sm-7 col-md-6">

                                                                <input style="height: 35px; width: 40px"
                                                                        type="number"
                                                                        onchange="updateCart(<?php echo $key?>);"
                                                                        id="amount_<?php echo $key ?>"
                                                                        name="amount_<?php echo $key ?>"
                                                                        value="<?php echo $value['amount'] ?>" >
                                                            </div>
                                                            <div class="col-sm-5 col-md-6">
                                                                <span class="product-price">
                                                                    <h5 style="color: red">
                                                                        <?php echo number_format($value['product_price'] * $value['amount'], 0, ',', '.');
                                                                        $total += $value['product_price'] * $value['amount'];
                                                                        ?>Đ
                                                                    </h5>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="javascript:void(0);" onclick="deleteCart(<?php echo $key?>)" class="text-dark font-size-20">
                                                            <i class="ri-delete-bin-7-fill"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <p><b>Chi tiết hóa đơn</b></p>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Tổng chưa thuế</span>
                                    <span>
                                        <strong>
                                            <?php echo number_format($total * (95/100), 0, ',', '.'); ?>Đ
                                        </strong>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Thuế VAT 8%</span>
                                    <span>
                                        <strong>
                                            <?php echo number_format($total * (5/100), 0, ',', '.'); ?>Đ
                                        </strong>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Phí vận chuyển</span>
                                    <span class="text-success">Miễn phí</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark">
                                        <strong>Tổng (Đã bao gồm VAT)</strong>
                                    </span>
                                    <span class="text-dark" >
                                        <strong style="color: red">
                                            <?php echo number_format($total, 0, ',', '.'); ?>Đ
                                        </strong>
                                    </span>
                                </div>
                                <a id="place-order" href="<?= Yii::$app->homeUrl.'shopping/checkout'?>" class="btn btn-primary d-block mt-3 next">Đặt
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>