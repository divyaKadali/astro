<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CompatibilityInfo;

/**
 * CompatibilityinfoSearch represents the model behind the search form of `backend\models\CompatibilityInfo`.
 */
class CompatibilityinfoSearch extends CompatibilityInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cmpinfo_id', 'understanding', 'supporting', 'intimacy', 'taking_care_of_kids', 'overall_married_life_rating', 'cmpinfo_user_id'], 'integer'],
            [['divorced_or_separates', 'divorce_separation_date'], 'safe'],
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
        $query = CompatibilityInfo::find();

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
            'cmpinfo_id' => $this->cmpinfo_id,
            'understanding' => $this->understanding,
            'supporting' => $this->supporting,
            'intimacy' => $this->intimacy,
            'taking_care_of_kids' => $this->taking_care_of_kids,
            'overall_married_life_rating' => $this->overall_married_life_rating,
            'divorce_separation_date' => $this->divorce_separation_date,
            'cmpinfo_user_id' => $this->cmpinfo_user_id,
        ]);

        $query->andFilterWhere(['like', 'divorced_or_separates', $this->divorced_or_separates]);

        return $dataProvider;
    }
}
