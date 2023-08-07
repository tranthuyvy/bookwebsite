<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\District;

/**
 * DistrictSearch represents the model behind the search form of `frontend\models\District`.
 */
class DistrictSearch extends District
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'province_id'], 'integer'],
            [['district_name', 'district_type'], 'safe'],
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
        $query = District::find();

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
            'district_id' => $this->district_id,
            'province_id' => $this->province_id,
        ]);

        $query->andFilterWhere(['like', 'district_name', $this->district_name])
            ->andFilterWhere(['like', 'district_type', $this->district_type]);

        return $dataProvider;
    }
}
