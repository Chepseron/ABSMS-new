<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbPermissions;

/**
 * TbPermissionsSearch represents the model behind the search form of `app\models\TbPermissions`.
 */
class TbPermissionsSearch extends TbPermissions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'createdBy', 'updatedBy', 'deleted'], 'integer'],
            [['permissionName', 'dateCreated', 'dateUpdated', 'moduleIDs'], 'safe'],
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
        $query = TbPermissions::find();

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
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'permissionName', $this->permissionName])
            ->andFilterWhere(['like', 'moduleIDs', $this->moduleIDs]);

        return $dataProvider;
    }
}
