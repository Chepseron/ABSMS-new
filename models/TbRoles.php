<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_roles".
 *
 * @property int $id
 * @property string $roleName
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property int $updatedBy
 * @property int $createdBy
 * @property int $deleted
 * @property string $permissionIDs
 *
 * @property Users $createdBy0
 * @property Users $updatedBy0
 */
class TbRoles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_roles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roleName', 'dateCreated', 'dateUpdated', 'updatedBy', 'createdBy', 'deleted', 'permissionIDs'], 'required'],
            [['dateCreated', 'dateUpdated'], 'safe'],
            [['updatedBy', 'createdBy', 'deleted'], 'integer'],
            [['roleName'], 'string', 'max' => 45],
            [['permissionIDs'], 'string', 'max' => 200],
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
            'roleName' => 'Role Name',
            'dateCreated' => 'Date Created',
            'dateUpdated' => 'Date Updated',
            'updatedBy' => 'Updated By',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
            'permissionIDs' => 'Permission I Ds',
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
