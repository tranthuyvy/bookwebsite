<?php

namespace frontend\models;

use Yii;
use yii\db\Expression;

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
            [['product_name', 'product_image', 'product_price', 'group_id', 'supplier_id', 'author_id', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['product_price'], 'number'],
            [['product_description'], 'string'],
            [['group_id', 'supplier_id', 'author_id', 'status', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['product_name', 'product_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'product_image' => 'Product Image',
            'product_price' => 'Product Price',
            'product_description' => 'Product Description',
            'group_id' => 'Group ID',
            'supplier_id' => 'Supplier ID',
            'author_id' => 'Author ID',
            'status' => 'Status',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getRandomProduct($limit = 12, $status = 1)
    {
        $data = Product::find()
            ->where(['status' => $status])
            ->orderBy(new Expression('RAND()'))
            ->limit($limit)
            ->distinct()
            ->asArray()
            ->all();
        return $data;
    }

    public function getBestSellerProduct($limit = 12, $status = 1)
    {
        $dataBestSeller = Product::find()
            ->where(['status' => $status])
            ->orderBy(new Expression('RAND()'))
            ->limit($limit)
            ->distinct()
            ->asArray()
            ->all();

        return $dataBestSeller;
    }
}
