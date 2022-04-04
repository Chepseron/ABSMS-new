<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Whatsappmenus;

/**
 * WhatsappmenusSearch represents the model behind the search form of `app\models\Whatsappmenus`.
 */
class WhatsappmenusSearch extends Whatsappmenus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idwhatsappMenus', 'clientID', 'menuLevel', 'created_by', 'updated_by'], 'integer'],
            [['menuItems', 'created_at', 'updated_at'], 'safe'],
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
        $query = Whatsappmenus::find();

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
            'idwhatsappMenus' => $this->idwhatsappMenus,
            'clientID' => $this->clientID,
            'menuLevel' => $this->menuLevel,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'menuItems', $this->menuItems]);

        return $dataProvider;
    }
}
