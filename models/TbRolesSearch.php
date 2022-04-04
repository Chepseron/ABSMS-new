<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbRoles;

/**
 * TbRolesSearch represents the model behind the search form of `app\models\TbRoles`.
 */
class TbRolesSearch extends TbRoles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'updatedBy', 'createdBy', 'deleted'], 'integer'],
            [['roleName', 'dateCreated', 'dateUpdated', 'permissionIDs'], 'safe'],
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
        $query = TbRoles::find();

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
            'dateCreated' => $this->dateCreated,
            'dateUpdated' => $this->dateUpdated,
            'updatedBy' => $this->updatedBy,
            'createdBy' => $this->createdBy,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'roleName', $this->roleName])
            ->andFilterWhere(['like', 'permissionIDs', $this->permissionIDs]);

        return $dataProvider;
    }
}
