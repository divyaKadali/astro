<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserBhavasStrengths;

/**
 * UserbhavasstrengthsSearch represents the model behind the search form of `backend\models\UserBhavasStrengths`.
 */
class UserbhavasstrengthsSearch extends UserBhavasStrengths
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ubs_id', 'userid'], 'integer'],
            [['bhavam', 'strengths'], 'safe'],
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
        $query = UserBhavasStrengths::find();

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
            'ubs_id' => $this->ubs_id,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'bhavam', $this->bhavam])
            ->andFilterWhere(['like', 'strengths', $this->strengths]);

        return $dataProvider;
    }
}
