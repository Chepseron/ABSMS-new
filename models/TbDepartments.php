<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_departments".
 *
 * @property int $id
 * @property string $name
 * @property string $hod
 * @property string $description
 * @property int $createdBy
 * @property string $dateCreated
 * @property int $updatedBy
 * @property string $dateUpdated
 * @property string $deletedAt
 * @property int $status
 *
 * @property Users $createdBy0
 * @property Users $updatedBy0
 */
class TbDepartments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hod', 'description', 'createdBy', 'dateCreated', 'updatedBy', 'dateUpdated', 'deletedAt', 'status'], 'required'],
            [['createdBy', 'updatedBy', 'status'], 'integer'],
            [['dateCreated', 'dateUpdated', 'deletedAt'], 'safe'],
            [['name', 'hod'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 200],
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
            'name' => 'Name',
            'hod' => 'Hod',
            'description' => 'Description',
            'createdBy' => 'Created By',
            'dateCreated' => 'Date Created',
            'updatedBy' => 'Updated By',
            'dateUpdated' => 'Date Updated',
            'deletedAt' => 'Deleted At',
            'status' => 'Status',
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
