<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form of `app\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contact_group_id', 'client_id'], 'integer'],
            [['name', 'field1', 'field2', 'field3', 'field4', 'field5', 'phone_number', 'field_1', 'field_2', 'field_3', 'field_4', 'field_5', 'status', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
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
        $query = Contacts::find();

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
            'contact_group_id' => $this->contact_group_id,
            'client_id' => $this->client_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'field1', $this->field1])
            ->andFilterWhere(['like', 'field2', $this->field2])
            ->andFilterWhere(['like', 'field3', $this->field3])
            ->andFilterWhere(['like', 'field4', $this->field4])
            ->andFilterWhere(['like', 'field5', $this->field5])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'field_1', $this->field_1])
            ->andFilterWhere(['like', 'field_2', $this->field_2])
            ->andFilterWhere(['like', 'field_3', $this->field_3])
            ->andFilterWhere(['like', 'field_4', $this->field_4])
            ->andFilterWhere(['like', 'field_5', $this->field_5])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
