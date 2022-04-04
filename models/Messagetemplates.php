<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messagetemplates".
 *
 * @property int $id
 * @property string $templateName
 * @property int $userID
 * @property string|null $messageTemplate
 * @property string|null $dateCreated
 * @property string $dateModified
 */
class Messagetemplates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messagetemplates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['templateName'], 'required'],
            [['userID'], 'integer'],
            [['messageTemplate'], 'string'],
            [['dateCreated', 'dateModified'], 'safe'],
            [['templateName'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'templateName' => 'Template Name',
            'userID' => 'User ID',
            'messageTemplate' => 'Message Template',
            'dateCreated' => 'Date Created',
            'dateModified' => 'Date Modified',
        ];
    }
}
