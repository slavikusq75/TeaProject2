<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Departament;

/**
 * DepartamentSearch represents the model behind the search form about `common\models\Departament`.
 */
class DepartamentSearch extends Departament
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_building', 'dep_office', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['dep_name', 'dep_city', 'dep_street'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Departament::find();

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
            'dep_building' => $this->dep_building,
            'dep_office' => $this->dep_office,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'dep_name', $this->dep_name])
            ->andFilterWhere(['like', 'dep_city', $this->dep_city])
            ->andFilterWhere(['like', 'dep_street', $this->dep_street]);

        return $dataProvider;
    }
}
