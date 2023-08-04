<?php

use frontend\models\Product;

?>
<div id="content-page" class="content-page">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
<!--                    <h4 class="card-title mb-0">Chi Tiết Sản Phẩm</h4>-->
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
                                                        <img src="<?= Yii::$app->homeUrl.$data_detail['product_image'] ?>"
                                                             class="img-fluid w-100 rounded" alt="<?= Yii::$app->homeUrl.$data_detail['product_image'] ?>">
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
                                            <b>
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
                                        <a href="checkout.html"
                                           class="btn btn-primary view-more mr-2" style="color: ">
                                            Thêm vào giỏ hàng
                                        </a>
<!--                                        <a href="book-pdf.html" class="btn btn-primary view-more mr-2">Mua ngay</a>-->
                                    </div>

                                    <div class="mb-3">
                                        <a href="#" class="text-body text-center"><span
                                                    class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i
                                                        class="ri-heart-fill"></i></span><span>Thêm vào danh sách yêu thích</span></a>
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
                        <h4 class="card-title mb-0">Parity Product</h4>
                    </div>
<!--                    <div class="iq-card-header-toolbar d-flex align-items-center">-->
<!--                        <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>-->
<!--                    </div>-->
                </div>
                <div class="iq-card-body single-similar-contens">
                    <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                        <li class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="position-relative image-overlap-shadow">
                                        <a href="javascript:void();">
                                            <img class="img-fluid rounded w-100"
                                                 src="<?= Yii::$app->homeUrl.$data_detail['product_image'] ?>"
                                                 style="object-fit: cover; height: 300px; width: 200px"
                                                 alt="">
                                        </a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">Xem</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 pl-0">
                                    <h6 class="mb-2">Nhà Đầu Tư Thông Minh...</h6>
                                    <p class="text-body">Dịch giả : Lê Quốc Phương</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
