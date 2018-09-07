<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "strengths_info".
 *
 * @property int $strengthId
 * @property string $strengthName
 * @property string $strengthPercentage
 */
class StrengthsInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'strengths_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strengthName'], 'string', 'max' => 20],
            [['strengthPercentage'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'strengthId' => 'Strength ID',
            'strengthName' => 'Strength Name',
            'strengthPercentage' => 'Strength Percentage',
        ];
    }
}
