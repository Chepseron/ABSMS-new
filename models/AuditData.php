<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_data".
 *
 * @property int $id
 * @property int $entry_id
 * @property string $type
 * @property resource|null $data
 * @property string|null $created
 *
 * @property AuditEntry $entry
 */
class AuditData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entry_id', 'type'], 'required'],
            [['entry_id'], 'integer'],
            [['data'], 'string'],
            [['created'], 'safe'],
            [['type'], 'string', 'max' => 255],
            [['entry_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuditEntry::className(), 'targetAttribute' => ['entry_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entry_id' => 'Entry ID',
            'type' => 'Type',
            'data' => 'Data',
            'created' => 'Created',
        ];
    }

    /**
     * Gets query for [[Entry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEntry()
    {
        return $this->hasOne(AuditEntry::className(), ['id' => 'entry_id']);
    }
}
