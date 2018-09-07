<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PredictionLordInOtherLordRaasis;

/**
 * PredictionLordInOtherLordRaasisSearch represents the model behind the search form of `backend\models\PredictionLordInOtherLordRaasis`.
 */
class PredictionLordInOtherLordRaasisSearch extends PredictionLordInOtherLordRaasis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plord_rasiid', 'position1', 'position2', 'position3', 'position4', 'position5', 'position6', 'position7', 'position8', 'position9', 'position10', 'position11', 'position12'], 'integer'],
            [['lord'], 'safe'],
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
        $query = PredictionLordInOtherLordRaasis::find();

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
            'plord_rasiid' => $this->plord_rasiid,
            'position1' => $this->position1,
            'position2' => $this->position2,
            'position3' => $this->position3,
            'position4' => $this->position4,
            'position5' => $this->position5,
            'position6' => $this->position6,
            'position7' => $this->position7,
            'position8' => $this->position8,
            'position9' => $this->position9,
            'position10' => $this->position10,
            'position11' => $this->position11,
            'position12' => $this->position12,
        ]);

        $query->andFilterWhere(['like', 'lord', $this->lord]);

        return $dataProvider;
    }
}
