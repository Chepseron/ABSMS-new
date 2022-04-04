<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_usergroups".
 *
 * @property int $idtb_Usergroups
 * @property string $groupName
 * @property string|null $department
 * @property int|null $head
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property int|null $updatedBy
 * @property int|null $createdBy
 * @property int|null $deleted
 * @property string|null $roleIDs
 */
class UserGroups extends \yii\db\ActiveRecord
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtb_Usergroups' => 'Idtb  Usergroups',
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
}
