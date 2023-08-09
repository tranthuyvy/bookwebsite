<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property int $wishlist_id
 * @property int $user_id
 * @property int $product_id
 * @property int $created_at
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'created_at'], 'required'],
            [['user_id', 'product_id', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wishlist_id' => 'Wishlist ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'created_at' => 'Created At',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['product_id' => 'product_id'])->asArray();
    }
}
