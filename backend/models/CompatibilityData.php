<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "compatibility_data".
 *
 * @property int $cmpd_id
 * @property string $date_of_birth
 * @property string $time_of_birth
 * @property string $place_of_birth
 * @property string $lagnam
 * @property string $seven_th_lord
 * @property string $plt_looking_at_seventh_house
 * @property string $planet_with_seventh_lord
 * @property string $seventh_lord_raasi_in_navaamsa
 * @property int $user_id
 * @property string $relation_type
 */
class CompatibilityData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compatibility_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        	[['date_of_birth', 'time_of_birth','place_of_birth', 'lagnam', 'seven_th_lord', 'plt_looking_at_seventh_house', 'planet_with_seventh_lord', 'seventh_lord_raasi_in_navaamsa', 'relation_type'], 'required'],
            [['date_of_birth', 'time_of_birth'], 'safe'],
            [['user_id'], 'integer'],
            [['place_of_birth', 'lagnam', 'seven_th_lord', 'plt_looking_at_seventh_house', 'planet_with_seventh_lord', 'seventh_lord_raasi_in_navaamsa', 'relation_type'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cmpd_id' => 'Cmpd ID',
            'date_of_birth' => 'Date Of Birth',
            'time_of_birth' => 'Time Of Birth',
            'place_of_birth' => 'Place Of Birth',
            'lagnam' => 'Lagnam',
            'seven_th_lord' => 'Seven Th Lord',
            'plt_looking_at_seventh_house' => 'Plt Looking At Seventh House',
            'planet_with_seventh_lord' => 'Planet With Seventh Lord',
            'seventh_lord_raasi_in_navaamsa' => 'Seventh Lord Raasi In Navaamsa',
            'user_id' => 'User ID',
            'relation_type' => 'Relation Type',
        ];
    }
}
