<?php
    use frontend\models\Product;
?>
<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
            <div class="iq-header-title">
                <h4 class="card-title mb-0">Suggestion For You</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>
            </div>
        </div>

        <div class="iq-card-body favorites-contens">
            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">

                <?php
                    foreach ($dataSuggestion as $product){
                ?>
                <li class="col-md-4">
                    <div class="d-flex align-items-center">
                        <div class="col-5 p-0 position-relative">
                            <a href="javascript:void();">
                                <img src="<?php echo $product['product_image']; ?>" class="img-fluid rounded w-100"
                                     alt="">
                            </a>
                        </div>

                        <div class="col-7">
                            <h5 class="mb-2"><?php echo $product['product_name']; ?></h5>
                            <p class="mb-2" style="color: red"><b><?php echo number_format($product['product_price'], 0, ',', '.'); ?>
                                    Đ</b></p>
                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Lượt bán</span>
                            </div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-dark">
                                    <?php
                                        $randomPercent = rand(50, 100);
                                    ?>
                                    <span class="bg-info" data-percent="<?php echo $randomPercent; ?>"></span>
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
