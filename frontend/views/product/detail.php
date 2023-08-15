<?php

use frontend\models\Product;

?>
<div id="content-page" class="content-page">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                </div>
                <div class="iq-card-body pb-0">
                    <div class="description-contens align-items-top row">
                        <div class="col-md-6">
                            <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body p-0">
                                    <div class="row align-items-center">
                                        <div class="col-3">
<!--                                            <ul id="description-slider-nav"-->
<!--                                                class="list-inline p-0 m-0  d-flex align-items-center">-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/01.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/02.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/03.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/04.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/05.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/06.jpg"-->
<!--                                                             class="img-fluid rounded w-100" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
                                        </div>
                                        <div class="col-9">
                                            <ul id="description-slider"
                                                class="list-inline p-0 m-0  d-flex align-items-center">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <img src="<?php echo $data_detail['product_image']; ?>"
                                                             class="img-fluid w-100 rounded" alt="<?php echo $data_detail['product_image'] ?>">
                                                    </a>
                                                </li>
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/02.jpg"-->
<!--                                                             class="img-fluid w-100 rounded" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/03.jpg"-->
<!--                                                             class="img-fluid w-100 rounded" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/04.jpg"-->
<!--                                                             class="img-fluid w-100 rounded" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/05.jpg"-->
<!--                                                             class="img-fluid w-100 rounded" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <a href="javascript:void(0);">-->
<!--                                                        <img src="common/images/book-dec/06.jpg"-->
<!--                                                             class="img-fluid w-100 rounded" alt="">-->
<!--                                                    </a>-->
<!--                                                </li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                                        Thong tin san pham -->
                        <div class="col-md-6">
                            <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body p-0">
                                    <h3 class="mb-3"><?php echo $data_detail["product_name"]?></h3>
                                    <div class="price d-flex align-items-center font-weight-500 mb-2">
                                        <span class="font-size-20 pr-2 old-price">
                                            <?php echo number_format($data_detail['product_price'] * 1.1, 0, ',', '.'); ?>
                                                        Đ
                                        </span>
                                        <span class="font-size-24 text-dark">
                                            <b style="color: red">
                                                <?php echo number_format($data_detail['product_price'], 0, ',', '.'); ?>
                                                Đ
                                            </b>
                                        </span>
                                    </div>
                                    <div class="mb-3 d-block">
                                          <span class="font-size-20 text-warning">
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star"></i>
                                          </span>
                                    </div>
                                    <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">
                                        <?php echo $data_detail["product_description"]?>

                                    </span>
                                    <div class="text-primary mb-4">Tác giả:
                                        <span class="text-body">
                                            <?php echo $author_name; ?>
                                        </span>
                                    </div>
                                    <div class="mb-4 d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                           class="btn btn-outline-primary view-more mr-2"
                                           onclick="addCart(<?= $data_detail['product_id']; ?>)">
                                            Thêm vào giỏ hàng
                                        </a>
                                        <a href="javascript:void(0);" class="text-body text-center">
                                            <span class="avatar-30 rounded-circle bg-danger d-inline-block mr-2"
                                                  onclick="addWishlist(<?= $data_detail['product_id']; ?>)">
                                                <i class="ri-heart-fill"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        Sản phẩm tương tự -->
        <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">Related Products</h4>
                    </div>
                </div>
                <div class="iq-card-body single-similar-contens">
                    <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                        <?php foreach ($relatedProducts as $key=>$value) {

                        ?>
                        <li class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="position-relative image-overlap-shadow">
                                        <a href="">
                                            <img class="img-fluid rounded w-100"
                                                 src="<?php echo $value['product_image'] ?>"
                                                 style="object-fit: cover; height: 300px; width: 200px"
                                                 alt="">
                                        </a>
                                        <div class="view-book">
                                            <a href="<?= Yii::$app->homeUrl?>product/detail?id=<?php echo $value["product_id"] ?>"
                                               class="btn btn-sm btn-white">Xem
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 pl-0">
                                    <h6 class="mb-2"><?php echo $value['product_name']; ?></h6>
                                    <p class="text-body">Tác giả : <?= $value["author_name"]; ?></p>
                                    <p style="color: red">
                                        <b>
                                            <?php echo number_format($value['product_price'], 0, ',', '.'); ?> Đ
                                        </b>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
