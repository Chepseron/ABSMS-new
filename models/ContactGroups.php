<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_groups".
 *
 * @property int $id
 * @property string $name
 * @property int $client_id
 *
 * @property Contacts[] $contacts
 */
class ContactGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'client_id'], 'required'],
            [['client_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
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
            'client_id' => 'Client ID',
        ];
    }

    /**
     * Gets query for [[Contacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contacts::className(), ['contact_group_id' => 'id']);
    }
}
