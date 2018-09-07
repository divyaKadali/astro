<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "planet_strengths".
 *
 * @property int $planetStrId
 * @property string $rashiName
 * @property string $lordName
 * @property string $Sun
 * @property string $Moon
 * @property string $Mars
 * @property string $Mercury
 * @property string $Jupiter
 * @property string $Venus
 * @property string $Saturn
 * @property string $Rahu
 * @property string $Kethu
 */
class PlanetStrengths extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planet_strengths';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rashiName', 'lordName', 'Sun', 'Moon', 'Mars', 'Mercury', 'Jupiter', 'Venus', 'Saturn', 'Rahu', 'Kethu'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planetStrId' => 'Planet Str ID',
            'rashiName' => 'Rashi Name',
            'lordName' => 'Lord Name',
            'Sun' => 'Sun',
            'Moon' => 'Moon',
            'Mars' => 'Mars',
            'Mercury' => 'Mercury',
            'Jupiter' => 'Jupiter',
            'Venus' => 'Venus',
            'Saturn' => 'Saturn',
            'Rahu' => 'Rahu',
            'Kethu' => 'Kethu',
        ];
    }
}
