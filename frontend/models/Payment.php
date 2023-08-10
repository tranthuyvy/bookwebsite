<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $payment_id
 * @property string $payment_name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['payment_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'payment_name' => 'Payment Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    function getAllPayment($status = 1)
    {
        $data = Payment::find()
            ->asArray()
            ->where(['status' => $status])
            ->all();
        return $data;
    }
}
