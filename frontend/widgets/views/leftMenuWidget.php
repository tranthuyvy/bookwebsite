<?php
    use frontend\models\Group;
    use frontend\models\Author;
    use frontend\models\Supplier;
    use yii\bootstrap5\Nav;
    use yii\bootstrap5\NavBar;
?>
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="common/images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">NHASACHTV</span>
            </div>
        </a>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <li class="active active-menu">
                    <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse"
                       aria-expanded="true"><span class="ripple rippleEffect"></span><i
                            class="las la-home iq-arrow-left"></i><span>Trang Chủ</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>

                <li>
                    <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Thể Loại</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <?php
                        foreach ($dataGroup as $key => $value) {
                            ?>
                            <li>
                                <a href="<?= Yii::$app->homeUrl?>product/listproduct?id=<?php echo $value["group_id"] ?>">
                                    <i class="ri-question-answer-line"></i><?php echo $value["group_name"] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>

                <li>
                    <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-file-alt iq-arrow-left"></i>
                        <span>Tác Giả</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <?php
                            foreach ($dataAuthor as $key=>$value) {
                        ?>
                        <li>
                            <a href="<?=Yii::$app->homeUrl?>product/listProduct?id=<?php echo $value["author_id"] ?>">
                                <i class="ri-question-answer-line"></i>
                                <?php echo $value["author_name"]?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>

                <li>
                    <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="ri-pantone-line"></i>
                        <span>Nhà Xuất Bản</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                        <?php
                            foreach ($dataSupplier as $key=>$value) {
                        ?>
                        <li>
                            <a href="<?=Yii::$app->homeUrl?>product/listProduct?id=<?php echo $value["supplier_id"] ?>">
                                <i class="ri-mastercard-line"><?php echo $value["supplier_name"]?></i>
                            </a>
                        </li>

                        <?php } ?>
                    </ul>
                </li>

                <li><a href="sign-in.html"><i class="ri-book-line"></i>Logout</a></li>
            </ul>
        </nav>
    </div>
</div>