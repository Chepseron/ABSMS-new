<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name
 * @property int $contact_group_id
 * @property int $client_id
 * @property string|null $field1
 * @property string|null $field2
 * @property string|null $field3
 * @property string|null $field4
 * @property string|null $field5
 * @property string $phone_number
 * @property string|null $field_1
 * @property string|null $field_2
 * @property string|null $field_3
 * @property string|null $field_4
 * @property string|null $field_5
 * @property string|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Clients $client
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact_group_id', 'client_id', 'phone_number'], 'required'],
            [['contact_group_id', 'client_id'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name', 'phone_number', 'field_1', 'field_2', 'field_3', 'field_4', 'field_5', 'status'], 'string', 'max' => 255],
            [['field1', 'field2', 'field3', 'field4', 'field5'], 'string', 'max' => 700],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
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
            'contact_group_id' => 'Contact Group ID',
            'client_id' => 'Client ID',
            'field1' => 'Field1',
            'field2' => 'Field2',
            'field3' => 'Field3',
            'field4' => 'Field4',
            'field5' => 'Field5',
            'phone_number' => 'Phone Number',
            'field_1' => 'Field 1',
            'field_2' => 'Field 2',
            'field_3' => 'Field 3',
            'field_4' => 'Field 4',
            'field_5' => 'Field 5',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
