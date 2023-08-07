<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property int $district_id
 * @property string $district_name
 * @property string $district_type
 * @property int $province_id
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_name', 'district_type', 'province_id'], 'required'],
            [['province_id'], 'integer'],
            [['district_name', 'district_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'district_id' => 'District ID',
            'district_name' => 'District Name',
            'district_type' => 'District Type',
            'province_id' => 'Province ID',
        ];
    }

    public function getById($id){
        $data = District::find()
            ->asArray()
            ->where('province_id=:id',['id'=>$id])
            ->all();
        return $data;
    }
}
