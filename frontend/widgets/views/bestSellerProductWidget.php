<?php
    use frontend\models\Product;
?>

<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
            <div class="iq-header-title">
                <h4 class="card-title mb-0">Best Seller</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <a href="<?= Yii::$app->homeUrl?>product/allproduct" class="btn btn-sm btn-primary view-more">Xem Thêm</a>
            </div>
        </div>

        <div class="iq-card-body">
            <div class="row">
                <?php foreach ($dataBestSeller as $product) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                        <div class="iq-card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                    <a href="javascript:void();">
                                        <img class="img-fluid rounded w-100"
                                             src="<?php echo $product['product_image']; ?>"
                                             style="object-fit: cover; height: 280px; width: 220px"
                                             alt="">
                                    </a>
                                    <div class="view-book">
                                        <a href="<?= Yii::$app->homeUrl?>product/detail?id=<?php echo $product["product_id"] ?>"
                                           class="btn btn-sm btn-white">
                                            Xem
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <h6 class="mb-1"><?php echo $product['product_name']; ?></h6>
                                        <div class="mb-3 d-block">
                                            <span class="font-size-20 text-warning">
                                                <?= $this->context->displayRatingStars($product['average_rating']); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="price d-flex align-items-center">
                                        <h6 style="color: red"><b><?php echo number_format($product['product_price'], 0, ',', '.'); ?>
                                                Đ</b></h6>
                                    </div>
                                    <button class="btn btn-outline-primary" type="button" onclick="addCart(<?= $product['product_id']; ?>)">
                                        <i class="ri-shopping-cart-2-fill text-primary"></i>
                                    </button>

                                    <button class="btn btn-outline-danger" type="button" onclick="addWishlist(<?= $product['product_id']; ?>)">
                                        <i class="ri-heart-fill text-danger"></i>
                                    </button>
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