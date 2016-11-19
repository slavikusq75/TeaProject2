<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ReceivingGoodsPurchasedSort;

/**
 * ReceivingGoodsPurchasedSortSearch represents the model behind the search form about `common\models\ReceivingGoodsPurchasedSort`.
 */
class ReceivingGoodsPurchasedSortSearch extends ReceivingGoodsPurchasedSort
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'quantity', 'receiving_price', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'provider_id', 'departament_id', 'volume_info_id'], 'integer'],
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
        $query = ReceivingGoodsPurchasedSort::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'quantity' => $this->quantity,
            'receiving_price' => $this->receiving_price,
            'user_id' => $this->user_id,
            'goods_purchased_id' => $this->goods_purchased_id,
            'goods_purchased_sort_id' => $this->goods_purchased_sort_id,
            'provider_id' => $this->provider_id,
            'departament_id' => $this->departament_id,
            'volume_info_id' => $this->volume_info_id,
        ]);

        return $dataProvider;
    }
}
