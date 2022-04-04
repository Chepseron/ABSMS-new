<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients_selling_price_setup".
 *
 * @property int $id
 * @property int|null $client_id
 * @property int $network_id
 * @property int|null $route_id
 * @property int $currency_id
 * @property float|null $selling_price
 * @property string $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Clients $client
 */
class ClientsSellingPriceSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients_selling_price_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'network_id', 'route_id', 'currency_id'], 'integer'],
            [['network_id', 'currency_id'], 'required'],
            [['selling_price'], 'number'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['status'], 'string', 'max' => 255],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'network_id' => 'Network ID',
            'route_id' => 'Route ID',
            'currency_id' => 'Currency ID',
            'selling_price' => 'Selling Price',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
