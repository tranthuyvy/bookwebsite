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
            [['product_name', 'product_image'], 'string', 'max' => 10000],
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

    public function getSuggestProduct($limit = 5, $status = 1)
    {
        $dataSuggestion = Product::find()
            ->where(['status' => $status])
            ->orderBy(new Expression('RAND()'))
            ->limit($limit)
            ->distinct()
            ->asArray()
            ->all();

        return $dataSuggestion;
    }

    public function getProductByGroupId($id){
        $data = Product::find()
            ->asArray()
            ->where('group_id=:group_id', ['group_id'=>$id])
            ->all();
        return $data;
    }

    public function getProductByAuthorId($id){
        $data_author = Product::find()
            ->asArray()
            ->where('author_id=:author_id', ['author_id'=>$id])
            ->all();
        return $data_author;
    }

    public function getProductBySupplierId($id){
        $data_supplier = Product::find()
            ->asArray()
            ->where('supplier_id=:supplier_id', ['supplier_id'=>$id])
            ->all();
        return $data_supplier;
    }

    public function getProductById($id){
        $data_detail = Product::find()
            ->asArray()
            ->where('product_id=:id', ['id' => $id])
            ->one();
        return $data_detail;
    }

    public static function getAuthorName($author_id)
    {
        $author = Author::findOne(['author_id' => $author_id]);

        return $author ? $author->author_name : null;
    }

    public static function getRelatedProduct($group_id, $product_id, $limit = 5)
    {
        $data_related = Product::find()
            ->where(['group_id' => $group_id])
            ->andWhere(['not', ['product_id' => $product_id]])
            ->limit($limit)
            ->asArray()
            ->all();

        return $data_related;
    }

}
