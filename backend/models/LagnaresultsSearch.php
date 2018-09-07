<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LagnaResults;

/**
 * LagnaresultsSearch represents the model behind the search form of `backend\models\LagnaResults`.
 */
class LagnaresultsSearch extends LagnaResults
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lagnaresult_id'], 'integer'],
            [['rashi_name', 'information'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = LagnaResults::find();

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
            'lagnaresult_id' => $this->lagnaresult_id,
        ]);

        $query->andFilterWhere(['like', 'rashi_name', $this->rashi_name])
            ->andFilterWhere(['like', 'information', $this->information]);

        return $dataProvider;
    }
}
