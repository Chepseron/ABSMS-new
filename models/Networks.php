<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "networks".
 *
 * @property int $id
 * @property string $name
 *
 * @property ClientsSellingPriceSetup[] $clientsSellingPriceSetups
 */
class Networks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'networks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * Gets query for [[ClientsSellingPriceSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientsSellingPriceSetups()
    {
        return $this->hasMany(ClientsSellingPriceSetup::className(), ['network_id' => 'id']);
    }
}
