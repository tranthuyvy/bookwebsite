<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ward".
 *
 * @property int $ward_id
 * @property string $ward_name
 * @property string $ward_type
 * @property int $district_id
 */
class Ward extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ward';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ward_name', 'ward_type', 'district_id'], 'required'],
            [['district_id'], 'integer'],
            [['ward_name', 'ward_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ward_id' => 'Ward ID',
            'ward_name' => 'Ward Name',
            'ward_type' => 'Ward Type',
            'district_id' => 'District ID',
        ];
    }

    public function getWardById($id){
        $data = Ward::find()
            ->asArray()
            ->where('district_id=:id',['id'=>$id])
            ->all();
        return $data;
    }
}
