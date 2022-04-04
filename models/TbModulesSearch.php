<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbModules;

/**
 * TbModulesSearch represents the model behind the search form of `app\models\TbModules`.
 */
class TbModulesSearch extends TbModules
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'createdBy', 'modifiedBy', 'deleted'], 'integer'],
            [['modulename', 'path', 'dateCreated', 'dateUpdated'], 'safe'],
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
        $query = TbModules::find();

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
            'modifiedBy' => $this->modifiedBy,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'modulename', $this->modulename])
            ->andFilterWhere(['like', 'path', $this->path]);

        return $dataProvider;
    }
}
