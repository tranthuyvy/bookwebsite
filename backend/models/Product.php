<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $product_name
 * @property string $product_image
 * @property float $product_price
 * @property string|null $product_description
 * @property int $group_id
 * @property int $supplier_id
 * @property int $author_id
 * @property int $status
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_image', 'product_price', 'group_id', 'supplier_id', 'author_id', 'user_id', 'created_at', 'updated_at'], 'required', 'message'=>'{attribute} không được để trống'],
            [['product_price'], 'number'],
            [['group_id', 'supplier_id', 'author_id', 'status', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['product_name', 'product_image', 'product_description'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Mã Sản Phẩm',
            'product_name' => 'Tên Sản Phẩm',
            'product_image' => 'Hình Ảnh Sản Phẩm',
            'product_price' => 'Giá Sản Phẩm',
            'product_description' => 'Mô Tả Sản Phẩm',
            'group_id' => 'Thể Loại',
            'supplier_id' => 'Nhà Xuất Bản',
            'author_id' => 'Tác Giả',
            'status' => 'Trạng Thái',
            'user_id' => 'Người tạo',
            'created_at' => 'Ngày Tạo',
            'updated_at' => 'Ngày Cập Nhật',
        ];
    }
}
