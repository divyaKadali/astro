<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nakshatrams".
 *
 * @property int $nakhatramId
 * @property string $nakhatramName
 * @property string $description
 */
class Nakshatrams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nakshatrams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['nakhatramName'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nakhatramId' => 'Nakhatram ID',
            'nakhatramName' => 'Nakhatram Name',
            'description' => 'Description',
        ];
    }
}
