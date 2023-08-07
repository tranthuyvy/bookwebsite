<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $province_id
 * @property string $province_name
 * @property string $province_type
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_name', 'province_type'], 'required'],
            [['province_name', 'province_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'province_type' => 'Province Type',
        ];
    }

    public function getAllProvince (){
        $data = Province::find()
            ->asArray()
            ->all();
        return $data;
    }
}
