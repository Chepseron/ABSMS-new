<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserGroups;

/**
 * UserGroupsSearch represents the model behind the search form of `app\models\UserGroups`.
 */
class UserGroupsSearch extends UserGroups
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtb_Usergroups', 'head', 'updatedBy', 'createdBy', 'deleted'], 'integer'],
            [['groupName', 'department', 'dateCreated', 'dateUpdated', 'roleIDs'], 'safe'],
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
        $query = UserGroups::find();

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
            'idtb_Usergroups' => $this->idtb_Usergroups,
            'head' => $this->head,
            'dateCreated' => $this->dateCreated,
            'dateUpdated' => $this->dateUpdated,
            'updatedBy' => $this->updatedBy,
            'createdBy' => $this->createdBy,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'groupName', $this->groupName])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'roleIDs', $this->roleIDs]);

        return $dataProvider;
    }
}
