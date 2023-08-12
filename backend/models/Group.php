<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $group_id
 * @property string $group_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['group_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Mã Thể Loại',
            'group_name' => 'Tên Thể Loại',
            'status' => 'Trạng Thái',
            'created_at' => 'Ngày Tạo',
            'updated_at' => 'Ngày Cập Nhật',
        ];
    }

    public function getAllGroup(){
        $data = Group::find()
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        return $data;
    }

    function getGroupByName($group_id)
    {
        $data = Group::find()
            ->asArray()
            ->where('group_id=:group_id',['group_id'=>$group_id])
            ->one();
        return $data["group_name"];
    }
}
