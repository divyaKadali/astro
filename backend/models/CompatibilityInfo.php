<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "compatibility_info".
 *
 * @property int $cmpinfo_id
 * @property int $understanding
 * @property int $supporting
 * @property int $intimacy
 * @property int $taking_care_of_kids
 * @property int $overall_married_life_rating
 * @property string $divorced_or_separates
 * @property string $divorce_separation_date
 * @property int $cmpinfo_user_id
 */
class CompatibilityInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compatibility_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        		[['understanding', 'supporting', 'intimacy', 'taking_care_of_kids', 'overall_married_life_rating', 'cmpinfo_user_id'], 'required'],
        		
            [['understanding', 'supporting', 'intimacy', 'taking_care_of_kids', 'overall_married_life_rating', 'cmpinfo_user_id'], 'integer'],
            [['divorce_separation_date'], 'safe'],
            [['divorced_or_separates'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cmpinfo_id' => 'Cmpinfo ID',
            'understanding' => 'Understanding',
            'supporting' => 'Supporting',
            'intimacy' => 'Intimacy',
            'taking_care_of_kids' => 'Taking Care Of Kids',
            'overall_married_life_rating' => 'Overall Married Life Rating',
            'divorced_or_separates' => 'Divorced Or Separates',
            'divorce_separation_date' => 'Divorce Separation Date',
            'cmpinfo_user_id' => 'Cmpinfo User ID',
        ];
    }
}
