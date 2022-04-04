<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currencies".
 *
 * @property int $id
 * @property string $currencyname
 *
 * @property Clients[] $clients
 * @property ClientsSellingPriceSetup[] $clientsSellingPriceSetups
 */
class Currencies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currencies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currencyname'], 'required'],
            [['currencyname'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currencyname' => 'Currencyname',
        ];
    }

    /**
     * Gets query for [[Clients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['currency_id' => 'id']);
    }

    /**
     * Gets query for [[ClientsSellingPriceSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientsSellingPriceSetups()
    {
        return $this->hasMany(ClientsSellingPriceSetup::className(), ['currency_id' => 'id']);
    }
}
