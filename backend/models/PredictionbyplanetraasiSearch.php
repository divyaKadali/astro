<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PredictionByPlanetRaasi;

/**
 * PredictionbyplanetraasiSearch represents the model behind the search form of `backend\models\PredictionByPlanetRaasi`.
 */
class PredictionbyplanetraasiSearch extends PredictionByPlanetRaasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pprId', 'position_id'], 'integer'],
            [['Moon', 'Jupiter', 'Mercury', 'Sun', 'Mars', 'Venus', 'Saturn', 'Rahu', 'Ketu'], 'safe'],
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
        $query = PredictionByPlanetRaasi::find();

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
            'pprId' => $this->pprId,
            'position_id' => $this->position_id,
        ]);

        $query->andFilterWhere(['like', 'Moon', $this->Moon])
            ->andFilterWhere(['like', 'Jupiter', $this->Jupiter])
            ->andFilterWhere(['like', 'Mercury', $this->Mercury])
            ->andFilterWhere(['like', 'Sun', $this->Sun])
            ->andFilterWhere(['like', 'Mars', $this->Mars])
            ->andFilterWhere(['like', 'Venus', $this->Venus])
            ->andFilterWhere(['like', 'Saturn', $this->Saturn])
            ->andFilterWhere(['like', 'Rahu', $this->Rahu])
            ->andFilterWhere(['like', 'Ketu', $this->Ketu]);

        return $dataProvider;
    }
}
