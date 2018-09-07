<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gochaaram_indicator".
 *
 * @property int $g_indId
 * @property int $g_positionid
 * @property string $ravi
 * @property string $moon
 * @property string $mars
 * @property string $mercury
 * @property string $jupitor
 * @property string $venus
 * @property string $saturn
 */
class GochaaramIndicator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gochaaram_indicator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        		//[['g_positionid', 'ravi', 'moon', 'mars', 'mercury', 'jupitor', 'venus', 'saturn'], 'required'],
            [['g_positionid'], 'required'],
            [['g_positionid'], 'integer'],
            [['sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_indId' => 'G Ind ID',
            'g_positionid' => 'Position',
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
