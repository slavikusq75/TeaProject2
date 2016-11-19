<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PriceOurGoodsSort;

/**
 * PriceOurGoodsSortSearch represents the model behind the search form about `common\models\PriceOurGoodsSort`.
 */
class PriceOurGoodsSortSearch extends PriceOurGoodsSort
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'created_at', 'updated_at', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'our_goods_sort_volume_info_id', 'departament_id'], 'integer'],
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
        $query = PriceOurGoodsSort::find();

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
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'our_goods_id' => $this->our_goods_id,
            'our_goods_sort_id' => $this->our_goods_sort_id,
            'our_goods_sort_volume_info_id' => $this->our_goods_sort_volume_info_id,
            'departament_id' => $this->departament_id,
        ]);

        return $dataProvider;
    }
}
