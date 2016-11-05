<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Inventory;

/**
 * InventorySearch represents the model behind the search form about `common\models\Inventory`.
 */
class InventorySearch extends Inventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'actual_balance', 'account_balance', 'created_at', 'updated_at', 'inventory_act_number', 'inventory_act_date', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id'], 'integer'],
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
        $query = Inventory::find();

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
            'actual_balance' => $this->actual_balance,
            'account_balance' => $this->account_balance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'inventory_act_number' => $this->inventory_act_number,
            'inventory_act_date' => $this->inventory_act_date,
            'user_id' => $this->user_id,
            'goods_purchased_id' => $this->goods_purchased_id,
            'goods_purchased_sort_id' => $this->goods_purchased_sort_id,
        ]);

        return $dataProvider;
    }
}
