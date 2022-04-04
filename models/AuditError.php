<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_error".
 *
 * @property int $id
 * @property int $entry_id
 * @property string $created
 * @property string $message
 * @property int|null $code
 * @property string|null $file
 * @property int|null $line
 * @property resource|null $trace
 * @property string|null $hash
 * @property int $emailed
 *
 * @property AuditEntry $entry
 */
class AuditError extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_error';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entry_id', 'created', 'message'], 'required'],
            [['entry_id', 'code', 'line', 'emailed'], 'integer'],
            [['created'], 'safe'],
            [['message', 'trace'], 'string'],
            [['file'], 'string', 'max' => 512],
            [['hash'], 'string', 'max' => 32],
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
            'created' => 'Created',
            'message' => 'Message',
            'code' => 'Code',
            'file' => 'File',
            'line' => 'Line',
            'trace' => 'Trace',
            'hash' => 'Hash',
            'emailed' => 'Emailed',
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
