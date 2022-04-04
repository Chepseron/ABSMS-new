<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Outbound;

/**
 * OutboundSearch represents the model behind the search form of `app\models\Outbound`.
 */
class OutboundSearch extends Outbound
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_id', 'user_id', 'scheduled_id', 'priority', 'resend', 'max_sends', 'sdp_service_id', 'resend_frequency', 'number_of_sends', 'schedule_id', 'encrypted'], 'integer'],
            [['sender', 'recipient', 'currency_code', 'route_used', 'network', 'message', 'dlr_url', 'country', 'route_quality', 'type', 'status', 'first_send', 'next_send', 'last_send', 'expiry_date', 'deliver_time', 'correlator', 'description', 'message_id', 'created_at', 'sent_at', 'updated_at', 'delivered_at', 'message_type', 'message_hash', 'statusDescription'], 'safe'],
            [['buying_price', 'selling_price'], 'number'],
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
        $query = Outbound::find();

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
            'user_id' => $this->user_id,
            'buying_price' => $this->buying_price,
            'selling_price' => $this->selling_price,
            'scheduled_id' => $this->scheduled_id,
            'priority' => $this->priority,
            'first_send' => $this->first_send,
            'next_send' => $this->next_send,
            'last_send' => $this->last_send,
            'expiry_date' => $this->expiry_date,
            'deliver_time' => $this->deliver_time,
            'resend' => $this->resend,
            'max_sends' => $this->max_sends,
            'sdp_service_id' => $this->sdp_service_id,
            'resend_frequency' => $this->resend_frequency,
            'number_of_sends' => $this->number_of_sends,
            'schedule_id' => $this->schedule_id,
            'created_at' => $this->created_at,
            'sent_at' => $this->sent_at,
            'updated_at' => $this->updated_at,
            'delivered_at' => $this->delivered_at,
            'encrypted' => $this->encrypted,
        ]);

        $query->andFilterWhere(['like', 'sender', $this->sender])
            ->andFilterWhere(['like', 'recipient', $this->recipient])
            ->andFilterWhere(['like', 'currency_code', $this->currency_code])
            ->andFilterWhere(['like', 'route_used', $this->route_used])
            ->andFilterWhere(['like', 'network', $this->network])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'dlr_url', $this->dlr_url])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'route_quality', $this->route_quality])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'correlator', $this->correlator])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'message_id', $this->message_id])
            ->andFilterWhere(['like', 'message_type', $this->message_type])
            ->andFilterWhere(['like', 'message_hash', $this->message_hash])
            ->andFilterWhere(['like', 'statusDescription', $this->statusDescription]);

        return $dataProvider;
    }
}
