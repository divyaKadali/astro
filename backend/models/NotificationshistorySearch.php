<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NotificationsHistory;

/**
 * NotificationshistorySearch represents the model behind the search form of `backend\models\NotificationsHistory`.
 */
class NotificationshistorySearch extends NotificationsHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notification_historyid', 'not_id', 'created_by', 'updated_by'], 'integer'],
            [['notification_type', 'notification_title', 'notification_description', 'schedule_time', 'created_date', 'updated_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = NotificationsHistory::find()->orderBy(['notification_historyid'=>SORT_DESC])->limit(10);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        	'pagination' => [ 'pageSize' => 10 ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'notification_historyid' => $this->notification_historyid,
            'not_id' => $this->not_id,
            'schedule_time' => $this->schedule_time,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'notification_type', $this->notification_type])
            ->andFilterWhere(['like', 'notification_title', $this->notification_title])
            ->andFilterWhere(['like', 'notification_description', $this->notification_description]);

        return $dataProvider;
    }
}
