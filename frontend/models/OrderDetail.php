<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property int $order_detail_id
 * @property int $order_id
 * @property int $product_id
 * @property float $product_price
 * @property int $product_quantity
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'product_price', 'product_quantity'], 'required'],
            [['order_id', 'product_id', 'product_quantity'], 'integer'],
            [['product_price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_detail_id' => 'Order Detail ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'product_price' => 'Product Price',
            'product_quantity' => 'Product Quantity',
        ];
    }
}
