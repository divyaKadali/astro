<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Monthly;

/**
 * MonthlySearch represents the model behind the search form of `backend\models\Monthly`.
 */
class MonthlySearch extends Monthly
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['month_id'], 'integer'],
            [['rashi_name', 'description'], 'safe'],
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
        $query = Monthly::find();

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
            'month_id' => $this->month_id,
        ]);

        $query->andFilterWhere(['like', 'rashi_name', $this->rashi_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
