<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency_rates".
 *
 * @property int $id
 * @property int $from_currency_id
 * @property int $to_currency_id
 * @property float $rate
 * @property string $created_at
 * @property string|null $updated_at
 */
class CurrencyRates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency_rates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from_currency_id', 'to_currency_id', 'rate'], 'required'],
            [['from_currency_id', 'to_currency_id'], 'integer'],
            [['rate'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from_currency_id' => 'From Currency ID',
            'to_currency_id' => 'To Currency ID',
            'rate' => 'Rate',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
