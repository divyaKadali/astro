<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PlanetTransistion;

/**
 * PlanetTransistionSearch represents the model behind the search form of `backend\models\PlanetTransistion`.
 */
class PlanetTransistionSearch extends PlanetTransistion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planetTransId', 'rashiName', 'createdBy', 'updatedBy'], 'integer'],
            [['sun', 'moon', 'mars', 'mercury', 'jupitar', 'venus', 'saturan', 'rahu', 'kethu', 'createdDate', 'updatedDate'], 'safe'],
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
        $query = PlanetTransistion::find();

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
            'planetTransId' => $this->planetTransId,
            'rashiName' => $this->rashiName,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'sun', $this->sun])
            ->andFilterWhere(['like', 'moon', $this->moon])
            ->andFilterWhere(['like', 'mars', $this->mars])
            ->andFilterWhere(['like', 'mercury', $this->mercury])
            ->andFilterWhere(['like', 'jupitar', $this->jupitar])
            ->andFilterWhere(['like', 'venus', $this->venus])
            ->andFilterWhere(['like', 'saturan', $this->saturan])
            ->andFilterWhere(['like', 'rahu', $this->rahu])
            ->andFilterWhere(['like', 'kethu', $this->kethu]);

        return $dataProvider;
    }
}
