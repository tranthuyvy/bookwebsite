<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $payment_id
 * @property string $payment_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['payment_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Mã Phương Thức Thanh Toán',
            'payment_name' => 'Tên Phương Thức Thanh Toán',
            'status' => 'Trạng Thái',
            'created_at' => 'Ngày Tạo',
            'updated_at' => 'Ngày Cập Nhật',
        ];
    }
}
