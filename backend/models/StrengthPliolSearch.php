<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StrenghtPredictionlordinotherlord;

/**
 * StrengthPliolSearch represents the model behind the search form of `backend\models\StrenghtPredictionlordinotherlord`.
 */
class StrengthPliolSearch extends StrenghtPredictionlordinotherlord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['splord_rasiid'], 'integer'],
            [['lord', 'position1', 'position2', 'position3', 'position4', 'position5', 'position6', 'position7', 'position8', 'position9', 'position10', 'position11', 'position12'], 'safe'],
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
        $query = StrenghtPredictionlordinotherlord::find();

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
            'splord_rasiid' => $this->splord_rasiid,
        ]);

        $query->andFilterWhere(['like', 'lord', $this->lord])
            ->andFilterWhere(['like', 'position1', $this->position1])
            ->andFilterWhere(['like', 'position2', $this->position2])
            ->andFilterWhere(['like', 'position3', $this->position3])
            ->andFilterWhere(['like', 'position4', $this->position4])
            ->andFilterWhere(['like', 'position5', $this->position5])
            ->andFilterWhere(['like', 'position6', $this->position6])
            ->andFilterWhere(['like', 'position7', $this->position7])
            ->andFilterWhere(['like', 'position8', $this->position8])
            ->andFilterWhere(['like', 'position9', $this->position9])
            ->andFilterWhere(['like', 'position10', $this->position10])
            ->andFilterWhere(['like', 'position11', $this->position11])
            ->andFilterWhere(['like', 'position12', $this->position12]);

        return $dataProvider;
    }
}
