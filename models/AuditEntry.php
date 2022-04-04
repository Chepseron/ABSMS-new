<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_entry".
 *
 * @property int $id
 * @property string $created
 * @property int|null $user_id
 * @property float|null $duration
 * @property string|null $ip
 * @property string|null $request_method
 * @property int $ajax
 * @property string|null $route
 * @property int|null $memory_max
 *
 * @property AuditData[] $auditDatas
 * @property AuditError[] $auditErrors
 * @property AuditJavascript[] $auditJavascripts
 * @property AuditMail[] $auditMails
 * @property AuditTrail[] $auditTrails
 */
class AuditEntry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_entry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created'], 'required'],
            [['created'], 'safe'],
            [['user_id', 'ajax', 'memory_max'], 'integer'],
            [['duration'], 'number'],
            [['ip'], 'string', 'max' => 45],
            [['request_method'], 'string', 'max' => 16],
            [['route'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created' => 'Created',
            'user_id' => 'User ID',
            'duration' => 'Duration',
            'ip' => 'Ip',
            'request_method' => 'Request Method',
            'ajax' => 'Ajax',
            'route' => 'Route',
            'memory_max' => 'Memory Max',
        ];
    }

    /**
     * Gets query for [[AuditDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditDatas()
    {
        return $this->hasMany(AuditData::className(), ['entry_id' => 'id']);
    }

    /**
     * Gets query for [[AuditErrors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditErrors()
    {
        return $this->hasMany(AuditError::className(), ['entry_id' => 'id']);
    }

    /**
     * Gets query for [[AuditJavascripts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditJavascripts()
    {
        return $this->hasMany(AuditJavascript::className(), ['entry_id' => 'id']);
    }

    /**
     * Gets query for [[AuditMails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditMails()
    {
        return $this->hasMany(AuditMail::className(), ['entry_id' => 'id']);
    }

    /**
     * Gets query for [[AuditTrails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditTrails()
    {
        return $this->hasMany(AuditTrail::className(), ['entry_id' => 'id']);
    }
}
