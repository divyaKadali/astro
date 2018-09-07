<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Planets;

/**
 * PlanetsSearch represents the model behind the search form of `backend\models\Planets`.
 */
class PlanetsSearch extends Planets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planetId', 'createdBy', 'updatedBy'], 'integer'],
            [['planetName', 'direction', 'organs', 'diceases', 'gemStone', 'dhaanam', 'characterstic', 'kaaraka', 'createdDate', 'updatedDate'], 'safe'],
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
        $query = Planets::find();

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
            'planetId' => $this->planetId,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'planetName', $this->planetName])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'organs', $this->organs])
            ->andFilterWhere(['like', 'diceases', $this->diceases])
            ->andFilterWhere(['like', 'gemStone', $this->gemStone])
            ->andFilterWhere(['like', 'dhaanam', $this->dhaanam])
            ->andFilterWhere(['like', 'characterstic', $this->characterstic])
            ->andFilterWhere(['like', 'kaaraka', $this->kaaraka]);

        return $dataProvider;
    }
}
