<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "whatsapp".
 *
 * @property int $idwhatsapp
 * @property int $clientID
 * @property string $clientURL
 * @property string $created_at
 * @property string $updated_at
 * @property int $deleted
 * @property int $create_by
 * @property int $updated_by
 */
class Whatsapp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'whatsapp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clientID', 'clientURL', 'created_at', 'updated_at', 'deleted', 'create_by', 'updated_by'], 'required'],
            [['clientID', 'deleted', 'create_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['clientURL'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idwhatsapp' => 'Idwhatsapp',
            'clientID' => 'Client ID',
            'clientURL' => 'Client Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted' => 'Deleted',
            'create_by' => 'Create By',
            'updated_by' => 'Updated By',
        ];
    }
}
