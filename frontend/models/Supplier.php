<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $supplier_id
 * @property string $supplier_name
 * @property string $supplier_phone
 * @property string $supplier_address
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supplier_name', 'supplier_phone', 'supplier_address', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['supplier_name', 'supplier_phone', 'supplier_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'supplier_name' => 'Supplier Name',
            'supplier_phone' => 'Supplier Phone',
            'supplier_address' => 'Supplier Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSupplierByParent($status = 1){
        $data = Supplier::find()
            ->asArray()
            ->where('status =:status',['status' => $status])
            ->all();
        return $data;
    }
}
