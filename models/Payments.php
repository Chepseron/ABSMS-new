<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int|null $client_id
 * @property string|null $payment_method
 * @property string|null $account_number
 * @property string|null $reference_number
 * @property string|null $pf
 * @property int $currency_id
 * @property float|null $topup_amount
 * @property float|null $tax
 * @property string $status
 * @property string|null $narration
 * @property string|null $lpo_status
 * @property int|null $created_by
 * @property string|null $transaction_time
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'currency_id', 'created_by'], 'integer'],
            [['currency_id'], 'required'],
            [['topup_amount', 'tax'], 'number'],
            [['transaction_time', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['payment_method', 'account_number', 'reference_number', 'pf', 'status', 'narration'], 'string', 'max' => 255],
            [['lpo_status'], 'string', 'max' => 100],
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
            'payment_method' => 'Payment Method',
            'account_number' => 'Account Number',
            'reference_number' => 'Reference Number',
            'pf' => 'Pf',
            'currency_id' => 'Currency ID',
            'topup_amount' => 'Topup Amount',
            'tax' => 'Tax',
            'status' => 'Status',
            'narration' => 'Narration',
            'lpo_status' => 'Lpo Status',
            'created_by' => 'Created By',
            'transaction_time' => 'Transaction Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
