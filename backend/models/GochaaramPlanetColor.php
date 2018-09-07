<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gochaaram_planet_color".
 *
 * @property int $g_plcId
 * @property string $sun
 * @property string $moon
 * @property string $mars
 * @property string $mercury
 * @property string $jupiter
 * @property string $venus
 * @property string $saturn
 */
class GochaaramPlanetColor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gochaaram_planet_color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        	//	[['sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn','planets'], 'required'],
            [['planets'], 'required'],
            [['sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn','planets'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_plcId' => 'G Plc ID',
        	'planets' =>'planets',
            'sun' => 'Sun',
            'moon' => 'Moon',
            'mars' => 'Mars',
            'mercury' => 'Mercury',
            'jupiter' => 'Jupiter',
            'venus' => 'Venus',
            'saturn' => 'Saturn',
        ];
    }
}
