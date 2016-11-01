<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BusinessDay;

/**
 * BusinessDaySearch represents the model behind the search form about `common\models\BusinessDay`.
 */
class BusinessDaySearch extends BusinessDay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'user_id', 'business_day_act_number', 'business_day_act_date', 'departament_id'], 'integer'],
            [['begining_balance', 'end_balance', 'debit', 'credit'], 'number'],
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
        $query = BusinessDay::find();

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
            'begining_balance' => $this->begining_balance,
            'end_balance' => $this->end_balance,
            'debit' => $this->debit,
            'credit' => $this->credit,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'business_day_act_number' => $this->business_day_act_number,
            'business_day_act_date' => $this->business_day_act_date,
            'departament_id' => $this->departament_id,
        ]);

        return $dataProvider;
    }
}
