<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CompatibilityData;

/**
 * CompatibilitydataSearch represents the model behind the search form of `backend\models\CompatibilityData`.
 */
class CompatibilitydataSearch extends CompatibilityData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cmpd_id', 'user_id'], 'integer'],
            [['date_of_birth', 'time_of_birth', 'place_of_birth', 'lagnam', 'seven_th_lord', 'plt_looking_at_seventh_house', 'planet_with_seventh_lord', 'seventh_lord_raasi_in_navaamsa', 'relation_type'], 'safe'],
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
        $query = CompatibilityData::find();

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
            'cmpd_id' => $this->cmpd_id,
            'date_of_birth' => $this->date_of_birth,
            'time_of_birth' => $this->time_of_birth,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'lagnam', $this->lagnam])
            ->andFilterWhere(['like', 'seven_th_lord', $this->seven_th_lord])
            ->andFilterWhere(['like', 'plt_looking_at_seventh_house', $this->plt_looking_at_seventh_house])
            ->andFilterWhere(['like', 'planet_with_seventh_lord', $this->planet_with_seventh_lord])
            ->andFilterWhere(['like', 'seventh_lord_raasi_in_navaamsa', $this->seventh_lord_raasi_in_navaamsa])
            ->andFilterWhere(['like', 'relation_type', $this->relation_type]);

        return $dataProvider;
    }
}
