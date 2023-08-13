<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $review_id
 * @property int $product_id
 * @property int $user_id
 * @property int|null $rating
 * @property string|null $comment
 * @property int $created_at
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id', 'created_at'], 'required'],
            [['product_id', 'user_id', 'rating', 'created_at'], 'integer'],
            [['comment'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'review_id' => 'Review ID',
            'product_id' => 'Tên Sản Phẩm',
            'user_id' => 'Username',
            'rating' => 'Số Sao',
            'comment' => 'Bình Luận',
            'created_at' => 'Ngày Tạo',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['product_id' => 'product_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
