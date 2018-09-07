<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HoroscopePlanets;

/**
 * HoroscopeplanetsSearch represents the model behind the search form of `backend\models\HoroscopePlanets`.
 */
class HoroscopeplanetsSearchmain extends HoroscopePlanets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horoplanetId', 'horoscopeId', 'userid'], 'integer'],
            [['planet', 'digrees', 'strength', 'nakshatram', 'rashiname', 'lagnaLord', 'dhanaLord', 'kutumbaLord', 'maatruLord', 'putraLord', 'shetruLord', 'kalatraLord', 'shatruLord', 'bhaagyaLord', 'raajayLord', 'laabhaLord', 'vyayaLord'], 'safe'],
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
        $query = HoroscopePlanets::find()->groupBy(['userid']);

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
            'horoplanetId' => $this->horoplanetId,
            'horoscopeId' => $this->horoscopeId,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'planet', $this->planet])
            ->andFilterWhere(['like', 'digrees', $this->digrees])
            ->andFilterWhere(['like', 'strength', $this->strength])
            ->andFilterWhere(['like', 'nakshatram', $this->nakshatram])
            ->andFilterWhere(['like', 'rashiname', $this->rashiname])
            ->andFilterWhere(['like', 'userid', $this->userid]);

        return $dataProvider;
    }
}
