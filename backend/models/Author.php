<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $author_id
 * @property string $author_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['author_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'Mã Tác Giả',
            'author_name' => 'Tên Tác Giả',
            'status' => 'Trạng Thái',
            'created_at' => 'Ngày Tạo',
            'updated_at' => 'Ngày Cập Nhật',
        ];
    }

    public function getAllAuthor(){
        $data = Author::find()
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        return $data;
    }

    function getAuthorByName($author_id)
    {
        $data = Author::find()
            ->asArray()
            ->where('author_id=:author_id',['author_id'=>$author_id])
            ->one();
        return $data["author_name"];
    }
}
