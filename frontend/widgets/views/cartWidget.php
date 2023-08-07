<?php
$totalAmount = $total = 0;
if (is_array($infoCart)) {
foreach ($infoCart as $key => $value) {
    $totalAmount += $value['amount'];
    $total += $value['product_price'] * $value['amount'];
}}
?>
<li class="nav-item nav-icon dropdown">
    <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
        <i class="ri-shopping-cart-2-line"></i>
        <span class="badge badge-danger count-cart rounded-circle" id="amount"><?php echo $totalAmount?></span>
    </a>

    <div class="iq-sub-dropdown">
        <div class="iq-card shadow-none m-0">
            <div class="iq-card-body p-0 toggle-cart-info">
                <div class="bg-primary p-3">
                    <h5 class="mb-0 text-white">Giỏ Hàng</h5>
                </div>
                <?php
                    if (is_array($infoCart)) {
                    foreach ($infoCart as $key => $value) {
                ?>
                <a href="javascript:void(0)" class="iq-sub-card" id="item_<?= $key ?>">
                    <div class="media align-items-center">
                        <div class="">
                            <img class="rounded"
                                 src="<?= Yii::$app->homeUrl.$value['product_image'] ?>"
                                 alt="<?php echo $value['product_name']?>">
                        </div>
                        <div class="media-body ml-3">
                            <h6 class="mb-0 "><?php echo $value['product_name']?></h6>
                            <p class="mb-0"><?php echo number_format($value['product_price'], 0, ',', '.'); ?>Đ</p>
                        </div>
                        <div class="float-right font-size-18 text-dark" onclick="deleteCart(<?= $key ?>)">
                            <i class="fa fa-trash"></i></div>
                    </div>
                </a>
                <?php }} ?>

                <div class="d-flex align-items-center text-right p-3">
                    <div style="margin-top: 10px; float:right">
                        <span style="color: black"><b>Total: </b></span>
                        <span class="value" id="total" style="color: red">
                            <b>
                                <?php echo number_format($total, 0, ',', '.'); ?>Đ
                            </b>
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center text-center p-3">
                    <a class="btn btn-primary mr-2 iq-sign-btn" href="checkout.html"
                       role="button">Giỏ Hàng</a>
                    <a class="btn btn-primary iq-sign-btn" href="checkout.html"
                       role="button">Thanh Toán</a>
                </div>

            </div>
        </div>
    </div>
</li>