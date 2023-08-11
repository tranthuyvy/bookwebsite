<?php

use frontend\models\Wishlist;
use frontend\models\Product;
use yii\widgets\LinkPager;

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
                    <?php foreach ($wishlistItems as $wishlistItem) {
                        $product = $wishlistItem['product']
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                <div class="iq-card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();">
                                                <img class="img-fluid rounded w-100"
                                                     src="<?php echo $product['product_image']; ?>"
                                                     style="object-fit: cover; height: 280px; width: 220px"
                                                     alt="$value['product_name']">
                                            </a>
                                            <div class="view-book">
                                                <a href="<?= Yii::$app->homeUrl?>product/detail?id=<?php echo $product["product_id"] ?>" class="btn btn-sm btn-white">
                                                    <!--                                                    --><?php //= Yii::$app->homeUrl.'product/detail/'.$value['product_id'] ?>
                                                    Xem
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <h6 class="mb-1"><?php echo $product['product_name']; ?></h6>
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
                                                    <b><?php echo number_format($product['product_price'], 0, ',', '.'); ?>
                                                        Đ</b></h6>
                                            </div>

                                            <button class="btn btn-outline-primary" type="button" onclick="addCart(<?= $product['product_id']; ?>)">
                                                <i class="ri-shopping-cart-2-fill text-primary"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
<!--            --><?php
//            echo LinkPager::widget([
//                'pagination' => $page_wishlist,
//                'options' => ['class' => 'pagination justify-content-center'],
//                'firstPageLabel' => '|<',
//                'lastPageLabel' => '|>',
//                'prevPageLabel' => '<',
//                'nextPageLabel' => '>',
//                'maxButtonCount' => 5
//            ]);
//            ?>
        </div>
    </div>
</div>