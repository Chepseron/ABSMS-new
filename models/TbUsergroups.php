<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_usergroups".
 *
 * @property int $id
 * @property string $groupName
 * @property string|null $department
 * @property int|null $head
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property int|null $updatedBy
 * @property int|null $createdBy
 * @property int|null $deleted
 * @property string|null $roleIDs
 *
 * @property Users $createdBy0
 * @property Users $updatedBy0
 */
class TbUsergroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_usergroups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupName'], 'required'],
            [['head', 'updatedBy', 'createdBy', 'deleted'], 'integer'],
            [['dateCreated', 'dateUpdated'], 'safe'],
            [['groupName', 'department'], 'string', 'max' => 45],
            [['roleIDs'], 'string', 'max' => 100],
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
            'groupName' => 'Group Name',
            'department' => 'Department',
            'head' => 'Head',
            'dateCreated' => 'Date Created',
            'dateUpdated' => 'Date Updated',
            'updatedBy' => 'Updated By',
            'createdBy' => 'Created By',
            'deleted' => 'Deleted',
            'roleIDs' => 'Role I Ds',
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
