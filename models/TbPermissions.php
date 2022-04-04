<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_permissions".
 *
 * @property int $id
 * @property string $permissionName
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property int $createdBy
 * @property int $updatedBy
 * @property int $deleted
 * @property string $moduleIDs
 *
 * @property Users $createdBy0
 * @property Users $updatedBy0
 */
class TbPermissions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_permissions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['permissionName', 'dateCreated', 'dateUpdated', 'createdBy', 'updatedBy', 'deleted', 'moduleIDs'], 'required'],
            [['dateCreated', 'dateUpdated'], 'safe'],
            [['createdBy', 'updatedBy', 'deleted'], 'integer'],
            [['permissionName', 'moduleIDs'], 'string', 'max' => 100],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['createdBy' => 'id']],
            [['updatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['updatedBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'permissionName' => 'Permission Name',
            'dateCreated' => 'Date Created',
            'dateUpdated' => 'Date Updated',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'deleted' => 'Deleted',
            'moduleIDs' => 'Module I Ds',
        ];
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Users::className(), ['id' => 'createdBy']);
    }

    /**
     * Gets query for [[UpdatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy0()
    {
        return $this->hasOne(Users::className(), ['id' => 'updatedBy']);
    }
}
