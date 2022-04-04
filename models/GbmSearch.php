<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gbm;

/**
 * GbmSearch represents the model behind the search form of `app\models\Gbm`.
 */
class GbmSearch extends Gbm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idgbm', 'clientID', 'createdBy', 'updatedBy'], 'integer'],
            [['clientURL', 'created_at', 'updated_at'], 'safe'],
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
        $query = Gbm::find();

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
            'idgbm' => $this->idgbm,
            'clientID' => $this->clientID,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
        ]);

        $query->andFilterWhere(['like', 'clientURL', $this->clientURL]);

        return $dataProvider;
    }
}
