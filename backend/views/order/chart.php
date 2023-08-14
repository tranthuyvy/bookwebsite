<?php
    use dosamigos\chartjs\ChartJs;
    use yii\helpers\Json;
    use yii\web\JsExpression;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i></div>
                        <div class="text-left ml-3">
                            <h2 class="mb-0"><span class="counter"><?= $totalUsers ?></span></h2>
                            <h5 class="">Người dùng</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i></div>
                        <div class="text-left ml-3">
                            <h2 class="mb-0"><span class="counter"><?= $totalBooks ?></span></h2>
                            <h5 class="">Tổng Số Sách</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-shopping-cart-2-line"></i></div>
                        <div class="text-left ml-3">
                            <h2 class="mb-0"><span class="counter"><?= $totalOrdersSuccess ?></span></h2>
                            <h5 class="">Đơn Hàng Thành Công</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i></div>
                        <div class="text-left ml-3">
                            <h2 class="mb-0"><span class="counter"><?= $totalOrders ?></span></h2>
                            <h5 class="">Đơn Chờ Xác Nhận</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">Tóm lược</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <ul class="list-inline p-0 mb-0">
                        <li>
                            <div class="iq-details mb-2">
                                <span class="title">Thu nhập</span>
                                <div class="percentage float-right text-primary"><?= number_format($totalIncome, 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-primary">
                                        <span class="bg-primary" data-percent="100"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="iq-details mb-2">
                                <span class="title">Lợi nhuận</span>
                                <div class="percentage float-right text-warning"><?= number_format($totalIncome*0.4, 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-warning">
                                        <span class="bg-warning" data-percent="40"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="iq-details mb-2">
                                <span class="title">Chi phí</span>
                                <div class="percentage float-right text-info">
                                    <?= number_format($totalIncome*0.6, 0, ',', '.') . ' VNĐ'; ?>
                                </div>
                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-info">
                                        <span class="bg-info" data-percent="60"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">Thu Nhập Theo Ngày</h4>
                    </div>
                </div>
            <div class="iq-card-body">
                <ul class="list-inline p-0 mb-0">
                    <?php foreach ($dailySalesData as $dailySale): ?>
                        <li>
                            <div class="iq-details mb-2">
                                <span class="title"><?php echo $dailySale[0]; ?></span>
                                <div class="percentage float-right text-dark">
                                    <?= number_format($dailySale[1], 0, ',', '.') . ' VNĐ'; ?>
                                </div>
                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-danger">
                                        <span class="bg-danger" data-percent="<?php echo $dailySale[1]/$totalIncome*100; ?>"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>