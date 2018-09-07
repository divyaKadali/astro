<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "characters".
 *
 * @property int $characterId
 * @property string $characterName
 * @property string $description
 * @property int $createdBy
 * @property int $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 */
class Characters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'characters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['characterName', 'description'
            		//, 'createdBy', 'updatedBy', 'createdDate', 'updatedDate'
            		], 'required'],
            [['description'], 'string'],
            [['createdBy', 'updatedBy'], 'integer'],
            [['createdDate', 'updatedDate'], 'safe'],
            [['characterName'], 'string', 'max' => 20],
            [['characterName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'characterId' => 'Character ID',
            'characterName' => 'Character Name',
            'description' => 'Description',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
        ];
    }
}
