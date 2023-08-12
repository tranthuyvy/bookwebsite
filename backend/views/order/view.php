<?php

use backend\models\Order;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Order $model */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Danh Sách Đơn Hàng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập Nhật', ['update', 'order_id' => $model->order_id],
            ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hủy Đơn', ['delete', 'order_id' => $model->order_id],
            ['class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn muốn hủy đơn hàng?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'user_id',
            'user_name',
            'user_email:email',
            'user_mobile',
            'user_address',
//            'totalMoney',
            [
                'attribute' => 'totalMoney',
                'value' => function ($data) {
                    return number_format($data->totalMoney, 0, ',', '.') . 'Đ';
                },
            ],
            'payment_id',
            'status',

//            'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
            ],
        ],
    ]) ?>

    <h2>Chi tiết đơn hàng</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Sản phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($orderDetails as $detail): ?>
            <tr>
                <td><?php echo $detail['product_name'] ?></td>
                <td>
                    <img src="<?php echo $detail['product_image']?>" style="height: 5%; width: 5%">
                </td>
                <td>

                    <?php echo number_format($detail['product_price'], 0, ',', '.') . 'Đ'; ?>
                </td>
                <td><?php echo $detail['product_quantity'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
