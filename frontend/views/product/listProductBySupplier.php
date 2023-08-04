<?php

use frontend\models\Product;

?>
<div id="content-page" class="content-page">
    <div class="col-lg-12">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                <div class="iq-header-title">
                    <h4 class="card-title mb-0">Product</h4>
                </div>
            </div>

            <div class="iq-card-body">
                <div class="row">
                    <?php foreach ($data_supplier as $key => $value) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                <div class="iq-card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();">
                                                <img class="img-fluid rounded w-100"
                                                     src="<?= Yii::$app->homeUrl.$value['product_image'] ?>"
                                                     style="object-fit: cover; height: 280px; width: 220px"
                                                     alt="">
                                            </a>
                                            <div class="view-book">
                                                <a href="<?= Yii::$app->homeUrl?>product/detail?id=<?php echo $value["product_id"] ?>" class="btn btn-sm btn-white">
                                                    Xem
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <h6 class="mb-1"><?php echo $value['product_name']; ?></h6>
                                                <!--                                <p class="font-size-13 line-height mb-1">-->
                                                <?php //echo $product['author_name']; ?><!--</p>-->
                                                <!--                                <div class="d-block line-height">-->
                                                <!--                                    <span class="font-size-11 text-warning">-->
                                                <!--                                        --><?php //for ($i = 1; $i <= 5; $i++) {
                                                //                                            if ($i <= $product['rating']) { ?>
                                                <!--                                                <i class="fa fa-star"></i>-->
                                                <!--                                            --><?php //} else { ?>
                                                <!--                                                <i class="fa fa-star-o"></i>-->
                                                <!--                                            --><?php //}
                                                //                                        } ?>
                                                <!--                                    </span>-->
                                                <!--                                </div>-->
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <h6 style="color: red">
                                                    <b><?php echo number_format($value['product_price'], 0, ',', '.'); ?>
                                                        Đ</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                            class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                            class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>