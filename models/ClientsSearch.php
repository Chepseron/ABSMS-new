<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clients;

/**
 * ClientsSearch represents the model behind the search form of `app\models\Clients`.
 */
class ClientsSearch extends Clients
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'currency_id', 'bd_manager'], 'integer'],
            [['name', 'email', 'account_number', 'phone_number', 'postal_address', 'physical_address', 'billing_type', 'threshold_contacts', 'default_dlr_url', 'timezone', 'taxes', 'status', 'billing_type_approved_at', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['balance', 'threshold', 'malipo_balance'], 'number'],
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
        $query = Clients::find();

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
            'country_id' => $this->country_id,
            'currency_id' => $this->currency_id,
            'balance' => $this->balance,
            'threshold' => $this->threshold,
            'billing_type_approved_at' => $this->billing_type_approved_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'bd_manager' => $this->bd_manager,
            'malipo_balance' => $this->malipo_balance,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'account_number', $this->account_number])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'postal_address', $this->postal_address])
            ->andFilterWhere(['like', 'physical_address', $this->physical_address])
            ->andFilterWhere(['like', 'billing_type', $this->billing_type])
            ->andFilterWhere(['like', 'threshold_contacts', $this->threshold_contacts])
            ->andFilterWhere(['like', 'default_dlr_url', $this->default_dlr_url])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'taxes', $this->taxes])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
