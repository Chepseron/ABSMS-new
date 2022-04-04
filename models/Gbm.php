<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gbm".
 *
 * @property int $idgbm
 * @property int $clientID
 * @property string $clientURL
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $createdBy
 * @property int|null $updatedBy
 */
class Gbm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gbm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clientID', 'clientURL'], 'required'],
            [['clientID', 'createdBy', 'updatedBy'], 'integer'],
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
            'idgbm' => 'Idgbm',
            'clientID' => 'Client ID',
            'clientURL' => 'Client Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
        ];
    }
}
