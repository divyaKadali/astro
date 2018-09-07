<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\GochaaramIndicator;

/**
 * GochaaramindicatorSearch represents the model behind the search form of `backend\models\Gochaaramindicator`.
 */
class GochaaramindicatorSearch extends GochaaramIndicator
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_indId', 'g_positionid'], 'integer'],
            [['sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn'], 'safe'],
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
        $query = Gochaaramindicator::find();

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
            'g_indId' => $this->g_indId,
            'g_positionid' => $this->g_positionid,
        ]);

        $query->andFilterWhere(['like', 'sun', $this->sun])
            ->andFilterWhere(['like', 'moon', $this->moon])
            ->andFilterWhere(['like', 'mars', $this->mars])
            ->andFilterWhere(['like', 'mercury', $this->mercury])
            ->andFilterWhere(['like', 'jupiter', $this->jupiter])
            ->andFilterWhere(['like', 'venus', $this->venus])
            ->andFilterWhere(['like', 'saturn', $this->saturn]);

        return $dataProvider;
    }
}
