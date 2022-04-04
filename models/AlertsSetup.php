<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alerts_setup".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $status
 * @property string|null $created_at
 * @property string|null $phone
 */
class AlertsSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alerts_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['email'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'status'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'phone' => 'Phone',
        ];
    }
}
