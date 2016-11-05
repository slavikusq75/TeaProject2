<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SellingOurGoodsSort;

/**
 * SellingOurGoodsSortSearch represents the model behind the search form about `common\models\SellingOurGoodsSort`.
 */
class SellingOurGoodsSortSearch extends SellingOurGoodsSort
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qauntity', 'sum', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'departament_id', 'price_our_goods_sort_id', 'discount_id', 'created_at', 'updated_at', 'cash_transaction_id'], 'integer'],
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
        $query = SellingOurGoodsSort::find();

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
            'qauntity' => $this->qauntity,
            'sum' => $this->sum,
            'user_id' => $this->user_id,
            'our_goods_id' => $this->our_goods_id,
            'our_goods_sort_id' => $this->our_goods_sort_id,
            'departament_id' => $this->departament_id,
            'price_our_goods_sort_id' => $this->price_our_goods_sort_id,
            'discount_id' => $this->discount_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cash_transaction_id' => $this->cash_transaction_id,
        ]);

        return $dataProvider;
    }
}
