<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OrderDetail;

/**
 * OrderDetailSearch represents the model behind the search form of `frontend\models\OrderDetail`.
 */
class OrderDetailSearch extends OrderDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_detail_id', 'order_id', 'product_id', 'product_quantity'], 'integer'],
            [['product_price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OrderDetail::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_detail_id' => $this->order_detail_id,
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'product_price' => $this->product_price,
            'product_quantity' => $this->product_quantity,
        ]);

        return $dataProvider;
    }
}
