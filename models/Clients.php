<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $account_number
 * @property string $phone_number
 * @property string|null $postal_address
 * @property string|null $physical_address
 * @property int $country_id
 * @property int $currency_id
 * @property string $billing_type
 * @property float $balance
 * @property float|null $threshold
 * @property string|null $threshold_contacts
 * @property string|null $default_dlr_url
 * @property string $timezone
 * @property string|null $taxes
 * @property string $status
 * @property string $billing_type_approved_at
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $bd_manager
 * @property float|null $malipo_balance
 *
 * @property ClientsSellingPriceSetup[] $clientsSellingPriceSetups
 * @property Contacts[] $contacts
 * @property Outbound[] $outbounds
 * @property Surveys[] $surveys
 * @property Users[] $users
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'account_number', 'phone_number', 'country_id', 'currency_id'], 'required'],
            [['country_id', 'currency_id', 'bd_manager'], 'integer'],
            [['balance', 'threshold', 'malipo_balance'], 'number'],
            [['threshold_contacts', 'taxes'], 'string'],
            [['billing_type_approved_at', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name', 'email', 'account_number', 'phone_number', 'postal_address', 'physical_address', 'billing_type', 'default_dlr_url', 'timezone', 'status'], 'string', 'max' => 255],
            [['email'], 'unique'],
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
            'email' => 'Email',
            'account_number' => 'Account Number',
            'phone_number' => 'Phone Number',
            'postal_address' => 'Postal Address',
            'physical_address' => 'Physical Address',
            'country_id' => 'Country ID',
            'currency_id' => 'Currency ID',
            'billing_type' => 'Billing Type',
            'balance' => 'Balance',
            'threshold' => 'Threshold',
            'threshold_contacts' => 'Threshold Contacts',
            'default_dlr_url' => 'Default Dlr Url',
            'timezone' => 'Timezone',
            'taxes' => 'Taxes',
            'status' => 'Status',
            'billing_type_approved_at' => 'Billing Type Approved At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'bd_manager' => 'Bd Manager',
            'malipo_balance' => 'Malipo Balance',
        ];
    }

    /**
     * Gets query for [[ClientsSellingPriceSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientsSellingPriceSetups()
    {
        return $this->hasMany(ClientsSellingPriceSetup::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Contacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contacts::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Outbounds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutbounds()
    {
        return $this->hasMany(Outbound::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Surveys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys()
    {
        return $this->hasMany(Surveys::className(), ['clientID' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['client_id' => 'id']);
    }
}
