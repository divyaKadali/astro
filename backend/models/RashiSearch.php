<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rashi;

/**
 * RashiSearch represents the model behind the search form of `backend\models\Rashi`.
 */
class RashiSearch extends Rashi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rashiId', 'createdBy', 'updatedBy'], 'integer'],
            [['rashiName', 'lord','description', 'createdDate', 'updatedDate'], 'safe'],
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
        $query = Rashi::find();

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
            'rashiId' => $this->rashiId,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'rashiName', $this->rashiName])
              ->andFilterWhere(['like', 'lord', $this->lord])
              ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
