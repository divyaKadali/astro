<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "planet_transistion".
 *
 * @property int $planetTransId
 * @property int $rashiName
 * @property string $sun
 * @property string $moon
 * @property string $mars
 * @property string $mercury
 * @property string $jupitar
 * @property string $venus
 * @property string $saturan
 * @property string $rahu
 * @property string $kethu
 * @property int $createdBy
 * @property int $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 */
class PlanetTransistion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planet_transistion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rashiName', 'createdBy', 'updatedBy'], 'integer'],
            [['createdDate', 'updatedDate'], 'safe'],
            [['sun', 'moon', 'mars', 'mercury', 'jupitar', 'venus', 'saturan', 'rahu', 'kethu'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planetTransId' => 'Planet Trans ID',
            'rashiName' => 'Rashi Name',
            'sun' => 'Sun',
            'moon' => 'Moon',
            'mars' => 'Mars',
            'mercury' => 'Mercury',
            'jupitar' => 'Jupitar',
            'venus' => 'Venus',
            'saturan' => 'Saturan',
            'rahu' => 'Rahu',
            'kethu' => 'Kethu',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
        ];
    }
}
