<?php

namespace frontend\models;

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
            'group_id' => 'Group ID',
            'group_name' => 'Group Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getGroupByParent($status = 1){
        $data = Group::find()
                ->asArray()
                ->where('status =:status',['status' => $status])
                ->all();
        return $data;
    }
}
