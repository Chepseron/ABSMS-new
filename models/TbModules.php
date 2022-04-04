<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_modules".
 *
 * @property int $id
 * @property string $modulename
 * @property string $path
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property int $createdBy
 * @property int $modifiedBy
 * @property int $deleted
 *
 * @property Users $createdBy0
 * @property Users $modifiedBy0
 */
class TbModules extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_modules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modulename', 'path', 'dateCreated', 'dateUpdated', 'createdBy', 'modifiedBy', 'deleted'], 'required'],
            [['dateCreated', 'dateUpdated'], 'safe'],
            [['createdBy', 'modifiedBy', 'deleted'], 'integer'],
            [['modulename'], 'string', 'max' => 45],
            [['path'], 'string', 'max' => 100],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['createdBy' => 'id']],
            [['modifiedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['modifiedBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modulename' => 'Modulename',
            'path' => 'Path',
            'dateCreated' => 'Date Created',
            'dateUpdated' => 'Date Updated',
            'createdBy' => 'Created By',
            'modifiedBy' => 'Modified By',
            'deleted' => 'Deleted',
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
     * Gets query for [[ModifiedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedBy0()
    {
        return $this->hasOne(Users::className(), ['id' => 'modifiedBy']);
    }
}
