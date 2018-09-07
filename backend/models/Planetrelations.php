<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "planetrelations".
 *
 * @property int $planetrel
 * @property string $planetName
 * @property string $sun
 * @property string $moon
 * @property string $mars
 * @property string $mercury
 * @property string $jupiter
 * @property string $venus
 * @property string $saturn
 * @property string $rahu
 * @property string $kethu
 * @property int $createdBy
 * @property int $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 */
class Planetrelations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planetrelations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planetName'
            		//, 'sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn', 'rahu', 'kethu', 'createdBy', 'updatedBy', 'createdDate', 'updatedDate'
            		], 'required'],
        	[['planetName', 'sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn', 'rahu', 'kethu'], 'safe'],
        	[['createdBy', 'updatedBy'], 'integer'],
            [['createdDate', 'updatedDate'], 'safe'],
            [['planetName', 'sun', 'moon', 'mars', 'mercury', 'jupiter', 'venus', 'saturn', 'rahu', 'kethu'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planetrel' => 'Planetrel',
            'planetName' => 'Planet Name',
            'sun' => 'Sun',
            'moon' => 'Moon',
            'mars' => 'Mars',
            'mercury' => 'Mercury',
            'jupiter' => 'Jupiter',
            'venus' => 'Venus',
            'saturn' => 'Saturn',
            'rahu' => 'Rahu',
            'kethu' => 'Kethu',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
        ];
    }
}
