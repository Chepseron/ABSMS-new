<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;

/**
 * PaymentsSearch represents the model behind the search form of `app\models\Payments`.
 */
class PaymentsSearch extends Payments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_id', 'currency_id', 'created_by'], 'integer'],
            [['payment_method', 'account_number', 'reference_number', 'pf', 'status', 'narration', 'lpo_status', 'transaction_time', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['topup_amount', 'tax'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Payments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'client_id' => $this->client_id,
            'currency_id' => $this->currency_id,
            'topup_amount' => $this->topup_amount,
            'tax' => $this->tax,
            'created_by' => $this->created_by,
            'transaction_time' => $this->transaction_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'payment_method', $this->payment_method])
            ->andFilterWhere(['like', 'account_number', $this->account_number])
            ->andFilterWhere(['like', 'reference_number', $this->reference_number])
            ->andFilterWhere(['like', 'pf', $this->pf])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'narration', $this->narration])
            ->andFilterWhere(['like', 'lpo_status', $this->lpo_status]);

        return $dataProvider;
    }
}
