<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "whatsappmenus".
 *
 * @property int $idwhatsappMenus
 * @property int $clientID
 * @property int $menuLevel
 * @property string $menuItems
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Whatsappmenus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'whatsappmenus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clientID', 'menuLevel', 'menuItems', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['clientID', 'menuLevel', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['menuItems'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idwhatsappMenus' => 'Idwhatsapp Menus',
            'clientID' => 'Client ID',
            'menuLevel' => 'Menu Level',
            'menuItems' => 'Menu Items',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
