<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $iddepartments
 * @property string $name
 * @property string $hod
 * @property string $description
 * @property int $createdBy
 * @property string $dateCreated
 * @property int $updatedBy
 * @property string $dateUpdated
 * @property string $deletedAt
 * @property int $status
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddepartments' => 'Iddepartments',
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
}
