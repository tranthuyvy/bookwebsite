<?php

namespace backend\models;

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
            'supplier_id' => 'Mã Nhà Xuất Bản',
            'supplier_name' => 'Tên Nhà Xuất Bản',
            'supplier_phone' => 'Số Điện Thoại Nhà Xuất Bản',
            'supplier_address' => 'Địa Chỉ Nhà Xuất Bản',
            'status' => 'Trạng Thái',
            'created_at' => 'Ngày Tạo',
            'updated_at' => 'Ngày Cập Nhật',
        ];
    }

    public function getAllSupplier(){
        $data = Supplier::find()
            ->where(['status' => '1'])
            ->asArray()
            ->all();
        return $data;
    }

    function getSupplierByName($supplier_id)
    {
        $data = Supplier::find()
            ->asArray()
            ->where('supplier_id=:supplier_id',['supplier_id'=>$supplier_id])
            ->one();
        return $data["supplier_name"];
    }
}
