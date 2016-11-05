<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OutgoingGoodsPurchasedSort;

/**
 * OutgoingGoodsPurchasedSortSearch represents the model behind the search form about `common\models\OutgoingGoodsPurchasedSort`.
 */
class OutgoingGoodsPurchasedSortSearch extends OutgoingGoodsPurchasedSort
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'selling_our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'volume_info_id', 'departament_id'], 'integer'],
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
        $query = OutgoingGoodsPurchasedSort::find();

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
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'selling_our_goods_sort_id' => $this->selling_our_goods_sort_id,
            'goods_purchased_id' => $this->goods_purchased_id,
            'goods_purchased_sort_id' => $this->goods_purchased_sort_id,
            'volume_info_id' => $this->volume_info_id,
            'departament_id' => $this->departament_id,
        ]);

        return $dataProvider;
    }
}
