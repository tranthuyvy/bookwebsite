<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $order_id
 * @property int $user_id
 * @property string $user_name
 * @property string $user_email
 * @property int $user_mobile
 * @property string $user_address
 * @property float $totalMoney
 * @property int $payment_id
 * @property int $status
 * @property int $created_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'user_name', 'user_email', 'user_mobile', 'user_address', 'totalMoney', 'payment_id', 'created_at'], 'required'],
            [['user_id', 'user_mobile', 'payment_id', 'status', 'created_at'], 'integer'],
            [['totalMoney'], 'number'],
            [['user_name', 'user_email', 'user_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Mã Đơn Hàng',
            'user_id' => 'Mã Người Đặt',
            'user_name' => 'Tên Người Nhận',
            'user_email' => 'Email',
            'user_mobile' => 'Số Điện Thoại Người Nhận',
            'user_address' => 'Địa Chỉ Người Nhận',
            'totalMoney' => 'Tổng Hóa Đơn',
            'payment_id' => 'Phương Thức Thanh Toán',
            'status' => 'Trạng Thái',
            'created_at' => 'Ngày Tạo',
        ];
    }
}
