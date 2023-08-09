<?php

    use frontend\models\Product;

?>
<div class="col-lg-12">
    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
        <div class="newrealease-contens">
            <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                <?php
                    foreach ($dataProduct as $key=>$value){
                ?>
                <li class="item">
                    <a href="javascript:void(0);">
                        <span>
                            <img src="<?php echo $value["product_image"] ?>"
                                 class="img-fluid w-100 rounded"
                                 style="object-fit: cover; height: 190px"
                                 alt="">
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>