<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "outbound".
 *
 * @property int $id
 * @property string $sender
 * @property string $recipient
 * @property int $client_id
 * @property int $user_id
 * @property float|null $buying_price
 * @property float|null $selling_price
 * @property string|null $currency_code
 * @property string $route_used
 * @property string|null $network
 * @property string $message
 * @property int|null $scheduled_id
 * @property string|null $dlr_url
 * @property string|null $country
 * @property int|null $priority
 * @property string|null $route_quality
 * @property string $type
 * @property string|null $status
 * @property string|null $first_send
 * @property string|null $next_send
 * @property string|null $last_send
 * @property string|null $expiry_date
 * @property string|null $deliver_time
 * @property int $resend
 * @property int $max_sends
 * @property string|null $correlator
 * @property int|null $sdp_service_id
 * @property int $resend_frequency
 * @property int $number_of_sends
 * @property string|null $description
 * @property string|null $message_id
 * @property int|null $schedule_id
 * @property string|null $created_at
 * @property string $sent_at
 * @property string|null $updated_at
 * @property string $delivered_at
 * @property string|null $message_type
 * @property string|null $message_hash
 * @property string|null $statusDescription
 * @property int $encrypted
 *
 * @property Users $user
 */
class Outbound extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outbound';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sender', 'recipient', 'client_id', 'user_id', 'route_used', 'message'], 'required'],
            [['client_id', 'user_id', 'scheduled_id', 'priority', 'resend', 'max_sends', 'sdp_service_id', 'resend_frequency', 'number_of_sends', 'schedule_id', 'encrypted'], 'integer'],
            [['buying_price', 'selling_price'], 'number'],
            [['message', 'statusDescription'], 'string'],
            [['first_send', 'next_send', 'last_send', 'expiry_date', 'deliver_time', 'created_at', 'sent_at', 'updated_at', 'delivered_at'], 'safe'],
            [['sender', 'recipient', 'currency_code', 'route_used', 'network', 'dlr_url', 'country', 'route_quality', 'type', 'message_id', 'message_type'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 50],
            [['correlator'], 'string', 'max' => 60],
            [['description'], 'string', 'max' => 220],
            [['message_hash'], 'string', 'max' => 200],
            [['message_hash'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender' => 'Sender',
            'recipient' => 'Recipient',
            'client_id' => 'Client ID',
            'user_id' => 'User ID',
            'buying_price' => 'Buying Price',
            'selling_price' => 'Selling Price',
            'currency_code' => 'Currency Code',
            'route_used' => 'Route Used',
            'network' => 'Network',
            'message' => 'Message',
            'scheduled_id' => 'Scheduled ID',
            'dlr_url' => 'Dlr Url',
            'country' => 'Country',
            'priority' => 'Priority',
            'route_quality' => 'Route Quality',
            'type' => 'Type',
            'status' => 'Status',
            'first_send' => 'First Send',
            'next_send' => 'Next Send',
            'last_send' => 'Last Send',
            'expiry_date' => 'Expiry Date',
            'deliver_time' => 'Deliver Time',
            'resend' => 'Resend',
            'max_sends' => 'Max Sends',
            'correlator' => 'Correlator',
            'sdp_service_id' => 'Sdp Service ID',
            'resend_frequency' => 'Resend Frequency',
            'number_of_sends' => 'Number Of Sends',
            'description' => 'Description',
            'message_id' => 'Message ID',
            'schedule_id' => 'Schedule ID',
            'created_at' => 'Created At',
            'sent_at' => 'Sent At',
            'updated_at' => 'Updated At',
            'delivered_at' => 'Delivered At',
            'message_type' => 'Message Type',
            'message_hash' => 'Message Hash',
            'statusDescription' => 'Status Description',
            'encrypted' => 'Encrypted',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
