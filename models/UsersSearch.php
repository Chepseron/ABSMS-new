<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_id', 'requires_2fa', 'receive_summary_reports', 'receive_monthly_reports', 'departmentID'], 'integer'],
            [['username', 'auth_key', 'name', 'phone', 'password_hash', 'password_reset_token', 'role_id', 'email', 'email_verified_at', 'phone_verified_at', 'timezone', 'code', 'remember_token', 'verification_token', 'status', 'created_at', 'updated_at', 'deleted_at', 'roleDetails'], 'safe'],
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
        $query = Users::find();

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
            'email_verified_at' => $this->email_verified_at,
            'phone_verified_at' => $this->phone_verified_at,
            'requires_2fa' => $this->requires_2fa,
            'created_at' => $this->created_at,
            'receive_summary_reports' => $this->receive_summary_reports,
            'receive_monthly_reports' => $this->receive_monthly_reports,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'departmentID' => $this->departmentID,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'role_id', $this->role_id])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'remember_token', $this->remember_token])
            ->andFilterWhere(['like', 'verification_token', $this->verification_token])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'roleDetails', $this->roleDetails]);

        return $dataProvider;
    }
}
