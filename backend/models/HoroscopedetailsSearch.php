<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Horoscopedetails;

/**
 * HoroscopedetailsSearch represents the model behind the search form of `backend\models\Horoscopedetails`.
 */
class HoroscopedetailsSearch extends Horoscopedetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horId',  'rashiId', 'createdBy', 'updatedBy'], 'integer'],
            [['rashiName', 'lagnaLord', 'dhanaLord', 'kutumbaLord', 'maatruLord', 'putraLord', 'shetruLord', 'kalatraLord', 'shatruLord', 'bhaagyaLord', 'raajayLord', 'laabhaLord', 'vyayaLord', 'createdDate', 'updatedDate'], 'safe'],
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
        $query = Horoscopedetails::find();

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
            'horId' => $this->horId,
            'rashiId' => $this->rashiId,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'rashiName', $this->rashiName])
            ->andFilterWhere(['like', 'lagnaLord', $this->lagnaLord])
            ->andFilterWhere(['like', 'dhanaLord', $this->dhanaLord])
            ->andFilterWhere(['like', 'kutumbaLord', $this->kutumbaLord])
            ->andFilterWhere(['like', 'maatruLord', $this->maatruLord])
            ->andFilterWhere(['like', 'putraLord', $this->putraLord])
            ->andFilterWhere(['like', 'shetruLord', $this->shetruLord])
            ->andFilterWhere(['like', 'kalatraLord', $this->kalatraLord])
            ->andFilterWhere(['like', 'shatruLord', $this->shatruLord])
            ->andFilterWhere(['like', 'bhaagyaLord', $this->bhaagyaLord])
            ->andFilterWhere(['like', 'raajayLord', $this->raajayLord])
            ->andFilterWhere(['like', 'laabhaLord', $this->laabhaLord])
            ->andFilterWhere(['like', 'vyayaLord', $this->vyayaLord]);

        return $dataProvider;
    }
}
